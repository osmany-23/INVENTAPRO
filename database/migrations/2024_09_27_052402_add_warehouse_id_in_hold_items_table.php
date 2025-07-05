<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('hold_items', function (Blueprint $table) {
            $table->unsignedBigInteger('warehouse_id')->nullable()->after('product_id');
        });
    }
    public function down(): void
    {
        Schema::table('hold_items', function (Blueprint $table) {
            $table->dropColumn('warehouse_id');
        });
    }
};
