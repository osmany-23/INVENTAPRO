<?php

namespace App\Imports;

use App\Models\BaseUnit;
use App\Models\Brand;
use App\Models\MainProduct;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Purchase;
use App\Models\PurchaseItem;
use App\Models\Supplier;
use App\Models\Unit;
use App\Models\Warehouse;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Picqer\Barcode\BarcodeGeneratorPNG;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

class ProductImport implements ToCollection, WithChunkReading, WithStartRow, WithValidation
{
    public function collection(Collection $rows): JsonResponse
    {
        $collection = $rows->toArray();
        ini_set('max_execution_time', 3600);

        $errors = [];

        foreach ($collection as $key => $row) {
            try {
                DB::beginTransaction();

                $taxType = null;            

                if (Product::where('code', $row[1])->exists()) {
                    throw new Exception('Código de producto ' . $row[1] . ' ya existe.');
                }

                $productCategory = ProductCategory::firstOrCreate(['name' => $row[2]]);
                $brand = Brand::firstOrCreate(['name' => $row[3]]);

                $baseUnit = BaseUnit::whereName(strtolower($row[7]))->first();
                if (!$baseUnit) {
                    throw new Exception('Unidad base ' . $row[7] . ' no encontrada.');
                }

                $saleUnit = Unit::whereName(strtolower($row[8]))->whereBaseUnit($baseUnit->id)->first();
                $purchaseUnit = Unit::whereName(strtolower($row[9]))->whereBaseUnit($baseUnit->id)->first();
                if (!$saleUnit) {
                    throw new Exception('Unidad de venta ' . $row[8] . ' no encontrada.');
                }
                if (!$purchaseUnit) {
                    throw new Exception('Unidad de compra ' . $row[9] . ' no encontrada.');
                }

                $barcodeSymbol = match($row[4]) {
                    'CODE128' => 1,
                    'CODE39' => 2,
                    default => throw new Exception('Símbolo de código de barras no válido: ' . $row[4]),
                };

                $taxType = match(strtolower($row[12])) {
                    'exclusive' => 1,
                    'inclusive' => 2,
                    default => throw new Exception('Tipo de impuesto no válido: ' . $row[12]),
                };

                $mainProduct = MainProduct::create([
                    'name' => $row[0],
                    'code' => (string) $row[1],
                    'product_unit' => $baseUnit->id,
                    'product_type' => MainProduct::SINGLE_PRODUCT,
                ]);

                $product = Product::create([
                    'name' => $row[0],
                    'code' => (string) $row[1],
                    'product_code' => (string) $row[1],
                    'product_category_id' => $productCategory->id,
                    'brand_id' => $brand->id,
                    'barcode_symbol' => $barcodeSymbol,
                    'product_cost' => $row[5],
                    'product_price' => $row[6],
                    'product_unit' => $baseUnit->id,
                    'sale_unit' => $saleUnit->id,
                    'purchase_unit' => $purchaseUnit->id,
                    'stock_alert' => $row[10] ?? null,
                    'order_tax' => $row[11] ?? null,
                    'tax_type' => $taxType,
                    'notes' => $row[13] ?? null,
                    'main_product_id' => $mainProduct->id,
                ]);

                $reference_code = 'PR_' . $product->id;

                if (!empty($row[14]) && !empty($row[15]) && !empty($row[16])) {
                    $warehouse = Warehouse::whereRaw('LOWER(name) = ?', [strtolower($row[14])])->first();
                    $supplier = Supplier::whereRaw('LOWER(name) = ?', [strtolower($row[15])])->first();

                    if (!$warehouse || !$supplier) {
                        throw new Exception('Almacén o proveedor no encontrado para producto: ' . $row[0]);
                    }

                    manageStock($warehouse->id, $product->id, $row[16]);

                    $status = match(strtolower($row[17])) {
                        'received' => 1,
                        'ordered' => 3,
                        default => 2,
                    };

                    $purchase = Purchase::create([
                        'supplier_id' => $supplier->id,
                        'warehouse_id' => $warehouse->id,
                        'date' => Carbon::now()->format('Y-m-d'),
                        'status' => $status,
                    ]);

                    $subTotal = $product->product_cost * $row[16];

                    PurchaseItem::create([
                        'purchase_id' => $purchase->id,
                        'product_id' => $product->id,
                        'product_cost' => $product->product_cost,
                        'net_unit_cost' => $product->product_cost,
                        'tax_type' => $product->tax_type,
                        'tax_value' => $product->order_tax,
                        'tax_amount' => 0,
                        'discount_type' => Purchase::FIXED,
                        'discount_value' => 0,
                        'discount_amount' => 0,
                        'purchase_unit' => $product->purchase_unit,
                        'quantity' => $row[16],
                        'sub_total' => $subTotal,
                    ]);

                    $purchase->update([
                        'reference_code' => getSettingValue('purchase_code') . '_111' . $purchase->id,
                        'grand_total' => $subTotal,
                    ]);
                }

                $generator = new BarcodeGeneratorPNG();
                $barcodeType = match($barcodeSymbol) {
                    Product::CODE128 => $generator::TYPE_CODE_128,
                    Product::CODE39 => $generator::TYPE_CODE_39,
                    Product::EAN8 => $generator::TYPE_EAN_8,
                    Product::EAN13 => $generator::TYPE_EAN_13,
                    Product::UPC => $generator::TYPE_UPC_A,
                };

                Storage::disk(config('app.media_disc'))->put(
                    'product_barcode/barcode-' . $reference_code . '.png',
                    $generator->getBarcode($row[1], $barcodeType, 4, 70)
                );

                DB::commit();
            } catch (Exception $e) {
                DB::rollBack();
                Log::error("Error en fila {$key}: " . $e->getMessage());
                $errors[] = "Fila {$key}: " . $e->getMessage();
                continue;
            }
        }

        if (count($errors)) {
            return response()->json([
                'data' => [
                    'message' => 'Importación completada con errores.',
                    'errores' => $errors,
                ],
            ], 422);
        }

        return response()->json([
            'data' => [
                'message' => 'Todos los productos fueron importados correctamente.',
            ],
        ]);
    }

    public function chunkSize(): int
    {
        return 1;
    }

    public function startRow(): int
    {
        return 2;
    }

    public function rules(): array
    {
        return [
            '0' => 'required',
            '1' => 'required',
            '2' => 'required',
            '3' => 'required',
            '4' => 'required',
            '5' => 'required|numeric',
            '6' => 'required|numeric',
            '7' => 'required',
            '8' => 'required',
            '9' => 'required',
            '10' => 'nullable|numeric',
            '11' => 'nullable|numeric',
            '12' => 'required',
        ];
    }

    public function customValidationMessages()
    {
        return [
            '0.required' => 'El nombre es obligatorio.',
            '1.required' => 'El código es obligatorio.',
            '2.required' => 'La categoría es obligatoria.',
            '3.required' => 'La marca es obligatoria.',
            '4.required' => 'El tipo de código de barras es obligatorio.',
            '5.required' => 'El costo es obligatorio.',
            '5.numeric' => 'El costo debe ser numérico.',
            '6.required' => 'El precio es obligatorio.',
            '6.numeric' => 'El precio debe ser numérico.',
            '7.required' => 'La unidad del producto es obligatoria.',
            '8.required' => 'La unidad de venta es obligatoria.',
            '9.required' => 'La unidad de compra es obligatoria.',
            '10.numeric' => 'La alerta de stock debe ser numérica.',
            '11.numeric' => 'El impuesto debe ser numérico.',
            '12.required' => 'El tipo de impuesto es obligatorio.',
        ];
    }
}