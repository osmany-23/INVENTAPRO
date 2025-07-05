<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "//www.w3.org/TR/html4/strict.dtd">
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>{{ __('messages.pdf.customer_pdf') }}</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon.ico') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <!-- General CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font.css') }}">
    <style>
        * {
            font-family: "Arial-unicode-ms"
        }

        .icon-style {
            font-family: DejaVu Sans, sans-serif !important;
        }

        @if (getLoginUserLanguage() != 'ar')
            .fw-bold {
                font-weight: 500;
                color: #333;
            }

        @else
            .fw-bold {
                /*font-weight: 500;*/
                color: #333;
            }

        @endif

        @if (getLoginUserLanguage() == 'vi')
            .vi-bold-text {
                font-size: 14px;
                font-weight: bolder;
                color: #333;
            }

            .vi-light-text {
                font-size: 16px;
            }
        @endif

        .fw-light {
            font-weight: 500;
            color: grey;
        }
    </style>

</head>

<body>

    <table width="100%">
        <tr>
            <td align="center" style="vertical-align: bottom">
                <h2 style="color: dodgerblue;">{{__('messages.pdf.client')}} : {{ $customer->name }}</h2>
            </td>
        </tr>
    </table>
    <table width="100%" style="margin-top: 40px;">
        <tr style="vertical-align: top;">
            <td style="width: 50%;">
                <table width="95%" cellpadding="0">
                    <tr style="background-color: dodgerblue;">
                        <td style="color: #fff;padding: 10px;font-size: 18px;">
                            {{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.customer_info') : __('messages.pdf.customer_info') }}
                        </td>
                    </tr>
                    <tr style="background-color: #f5f3f3;">
                        <td style="padding: 10px;">
                            <p class="fw-bold vi-bold-text">
                                {{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.name') : __('messages.pdf.name') }}: <span
                                    class="fw-light vi-light-text">{{ isset($customer->name) ? $customer->name : 'N/A' }}</span>
                            </p>
                            <p class="fw-bold vi-bold-text">
                                {{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.phone') : __('messages.pdf.phone') }}: <span
                                    class="fw-light vi-light-text">{{ isset($customer->phone) ? $customer->phone : 'N/A' }}</span>
                            </p>
                            <p class="fw-bold vi-bold-text">
                                {{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.address') : __('messages.pdf.address') }}: <span
                                    class="fw-light vi-light-text">
                                    {{ isset($customer->address) ? $customer->address : '' }}
                                    {{ isset($customer->city) ? $customer->city : '' }}
                                    {{ isset($customer->country) ? $customer->country : '' }}
                                </span></p>
                            <p class="fw-bold vi-bold-text">
                                {{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.email') : __('messages.pdf.email') }}: <span
                                    class="fw-light vi-light-text">{{ isset($customer->email) ? $customer->email : '' }}</span>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
            <td style="width: 50%;">
                <table width="95%" align="right">
                    <tr style="background-color: dodgerblue;">
                        <td style="color: #fff;padding: 10px;font-size: 18px;">
                            {{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.company_info') : __('messages.pdf.company_info') }}
                        </td>
                    </tr>
                    <tr style="background-color: #f5f3f3;">
                        <td style="padding: 10px;">
                            <h3 style="color: #333;">{{ getSettingValue('company_name') }}</h3>
                            <p class="fw-bold vi-bold-text">
                                {{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.address') : __('messages.pdf.address') }}: <span
                                    class="fw-light vi-light-text">{{ getSettingValue('address') }}</span></p>
                            <p class="fw-bold vi-bold-text">
                                {{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.phone') : __('messages.pdf.phone') }}: <span
                                    class="fw-light vi-light-text">{{ getSettingValue('phone') }}</span></p>
                            <p class="fw-bold vi-bold-text">
                                {{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.email') : __('messages.pdf.email') }}: <span
                                    class="fw-light vi-light-text">{{ getSettingValue('email') }}</span></p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table width="60%" align="right" cellspacing="0" cellpadding="10" style="margin-top: 40px;">
        <tbody style="background-color: #f5f3f3;">
            <tr>
                <td>{{ getLoginUserLanguage() == 'cn' ?  __('messages.pdf.total_sales') : __('messages.pdf.total_sales') }}:</td>
                <td class="icon-style">{{ currencyAlignment(number_format((float) $salesData['totalSale'], 2)) }}</td>
            </tr>
            <tr>
                <td>{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.total_amount') : __('messages.pdf.total_amount') }}:</td>
                <td class="icon-style">{{ currencyAlignment(number_format((float) $salesData['totalAmount'], 2)) }}</td>
            </tr>
            <tr>
                <td>{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.total_paid'): __('messages.pdf.total_paid') }}:</td>
                <td class="icon-style">{{ currencyAlignment(number_format((float) $salesData['totalPaid'], 2)) }}</td>
            </tr>
            <tr>
                <td>{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.total_sale_due') : __('messages.pdf.total_sale_due') }}:</td>
                <td class="icon-style">{{ currencyAlignment(number_format((float) $salesData['totalSalesDue'], 2)) }}</td>
            </tr>
        </tbody>
    </table>
    <table width="100%" cellspacing="0" cellpadding="10" style="margin-top: 40px;">
        <thead>
            <tr style="background-color: dodgerblue;">
                <th style="color: #fff;">{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.date') : __('messages.pdf.date') }}</th>
                <th style="color: #fff;">
                    {{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.reference') : __('messages.pdf.reference') }}</th>
                <th style="color: #fff;">
                    {{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.paid_amount') : __('messages.pdf.paid_amount') }}</th>
                <th style="color: #fff;">
                    {{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.due_amount') : __('messages.pdf.due_amount') }}</th>
                <th style="color: #fff;">
                    {{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.payment_status') : __('messages.pdf.payment_status') }}</th>
            </tr>
        </thead>
        <tbody style="background-color: #f5f3f3;">
            @if (count($customer->sales) > 0)
                @foreach ($customer->sales as $sale)
                    <tr align="center" style="border-bottom: 2px solid darkgrey;!important;">
                        <td>{{ $sale->date->format('Y-m-d') }}</td>
                        <td>{{ $sale->reference_code }}</td>
                        <td align="right" class="icon-style">
                            {{ currencyAlignment(number_format((float) $sale->payments->sum('amount'), 2)) }}</td>
                        <td align="right" class="icon-style">
                            {{ currencyAlignment(number_format((float) $sale->grand_total - $sale->payments->sum('amount'), 2)) }}
                        </td>
                        <td>
                            @if ($sale->payment_status == \App\Models\Sale::PAID)
                                {{ __('messages.pdf.paid') }}
                            @elseif($sale->payment_status == \App\Models\Sale::UNPAID)
                                {{ __('messages.pdf.unpaid') }}
                            @elseif($sale->payment_status == \App\Models\Sale::PARTIAL_PAID)
                                {{ __('messages.pdf.partial') }}
                            @endif
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5" style="text-align: center">{{ __('messages.pdf.no_record_found') }}</td>
                </tr>
            @endif
        </tbody>
    </table>
</body>

</html>
