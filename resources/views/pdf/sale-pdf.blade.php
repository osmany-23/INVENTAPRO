<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "//www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>{{ __('messages.sale_pdf') }}</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon.ico') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <!-- General CSS Files -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font.css') }}">
    <style>
        * {
            font-family: "Arial-unicode-ms"
        }

        .icon-style {
            font-family: DejaVu Sans, sans-serif !important;
        }

        @if(getLoginUserLanguage() !='ar')
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

        @if(getLoginUserLanguage() =='vi')
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
        <td>
            <img src="{{$companyLogo}}" alt="Company Logo" width="80px">
        </td>
        <td align="center" style="vertical-align: bottom">
            <h2 style="color: dodgerblue;">{{ $sale->reference_code }}</h2>
        </td>

        <td width="35%" style="line-height: 1; vertical-align: top;">
            <table style="width: 100%; border-spacing: 0; border-collapse: collapse;">
                <tr>
                    <td class="fw-bold vi-bold-text" style="font-weight: bold; padding: 0px;">
                        {{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.date') : __('messages.pdf.date') }}:
                    </td>
                    <td class="fw-light vi-light-text" style="padding: 0px;">
                        {{ \Carbon\Carbon::parse($sale->created_at)->format('Y-m-d') }}
                    </td>
                </tr>
                <tr>
                    <td class="fw-bold vi-bold-text" style="font-weight: bold; padding:0px;">
                        {{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.number') : __('messages.pdf.number') }}:
                    </td>
                    <td class="fw-light vi-light-text" style="padding: 0px;">
                        {{ $sale->reference_code }}
                    </td>
                </tr>
                <tr>
                    <td class="fw-bold vi-bold-text" style="font-weight: bold; padding:0px;">
                        {{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.payment_status') : __('messages.pdf.payment_status') }}:
                    </td>
                    <td class="fw-light vi-light-text" style="padding: 0px;">
                        {{ $sale->payment_status == \App\Models\Sale::PAID ? __('messages.pdf.paid') : __('messages.pdf.unpaid') }}
                    </td>
                </tr>
            </table>
        </td>

    </tr>
</table>
<table width="100%" style="margin-top: 40px;">
    <tr style="vertical-align: top;">
        <td style="width: 50%;">
            <table width="95%" cellpadding="0">
                <tr style="background-color: dodgerblue;">
                    <td style="color: #fff;padding: 10px;font-size: 18px;">{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.customer_info') : __('messages.pdf.customer_info') }}</td>
                </tr>
                <tr style="background-color: #f5f3f3;">
                    <td style="padding: 10px;">
                        <p class="fw-bold vi-bold-text">{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.name') : __('messages.pdf.name') }}: <span
                                    class="fw-light vi-light-text">{{ isset($sale->customer->name) ? $sale->customer->name : 'N/A' }}</span>
                        </p>
                        <p class="fw-bold vi-bold-text">{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.phone') : __('messages.pdf.phone') }}: <span
                                    class="fw-light vi-light-text">{{ isset($sale->customer->phone) ? $sale->customer->phone : 'N/A' }}</span>
                        </p>
                        <p class="fw-bold vi-bold-text">{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.address') : __('messages.pdf.address') }}: <span class="fw-light vi-light-text">
                                {{ isset($sale->customer->address) ? $sale->customer->address : '' }}
                                {{ isset($sale->customer->city) ? $sale->customer->city : '' }}
                                {{ isset($sale->customer->country) ? $sale->customer->country : '' }}
                            </span></p>
                        <p class="fw-bold vi-bold-text">{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.email') : __('messages.pdf.email') }}: <span
                                    class="fw-light vi-light-text">{{ isset($sale->customer->email) ? $sale->customer->email : ''}}</span>
                        </p>
                    </td>
                </tr>
            </table>
        </td>
        <td style="width: 50%;">
            <table width="95%" align="right">
                <tr style="background-color: dodgerblue;">
                    <td style="color: #fff;padding: 10px;font-size: 18px;">{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.company_info') : __('messages.pdf.company_info') }}</td>
                </tr>
                <tr style="background-color: #f5f3f3;">
                    <td style="padding: 10px;">
                        <h3 style="color: #333;">{{ getSettingValue('company_name') }}</h3>
                        <p class="fw-bold vi-bold-text">{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.address') : __('messages.pdf.address') }}: <span
                                    class="fw-light vi-light-text">{{ getSettingValue('address') }}</span></p>
                        <p class="fw-bold vi-bold-text">{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.phone') : __('messages.pdf.phone') }}: <span
                                    class="fw-light vi-light-text">{{ getSettingValue('phone') }}</span></p>
                        <p class="fw-bold vi-bold-text">{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.email') : __('messages.pdf.email') }}: <span
                                    class="fw-light vi-light-text">{{ getSettingValue('email') }}</span></p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<table width="100%" cellspacing="0" cellpadding="10" style="margin-top: 40px;">
    <thead>
    <tr style="background-color: dodgerblue;">
        <th style="color: #fff;">{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.email') : __('messages.pdf.email') }}</th>
        <th style="color: #fff;">{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.unit_price') : __('messages.pdf.unit_price') }}</th>
        <th style="color: #fff;">{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.quantity') : __('messages.pdf.quantity') }}</th>
        <th style="color: #fff;">{{ getLoginUserLanguage() == 'cn' ? __('messages.heading_discount') : __('messages.heading_discount') }}</th>
        <th style="color: #fff;">{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.tax') : __('messages.pdf.tax') }}</th>
        <th style="color: #fff;">{{ getLoginUserLanguage() == 'cn' ? __('messages.heading_total') : __('messages.heading_total') }}</th>
    </tr>
    </thead>
    <tbody style="background-color: #f5f3f3;">
    @foreach($sale->saleItems  as $saleItem)
        <tr align="center">
            <td>{{$saleItem->product->name}} ({{$saleItem->product->code}})</td>
            <td class="icon-style">{{ currencyAlignment(number_format((float)$saleItem->net_unit_price, 2))}}</td>
            <td>{{$saleItem->quantity}}</td>
            <td class="icon-style">{{ currencyAlignment(number_format((float)$saleItem->discount_amount, 2))}}</td>
            <td class="icon-style">{{ currencyAlignment(number_format((float)$saleItem->tax_amount, 2))}}</td>
            <td class="icon-style">{{ currencyAlignment(number_format((float)$saleItem->sub_total, 2))}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<table width="60%" align="right" cellspacing="0" cellpadding="10" style="margin-top: 40px;">
    <tbody style="background-color: #f5f3f3;">
    <tr>
        <td>{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.order_tax') : __('messages.pdf.order_tax') }}</td>
        <td class="icon-style">{{ currencyAlignment(number_format((float)$sale->tax_amount, 2))}}</td>
    </tr>
    <tr>
        <td>{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.discount') : __('messages.pdf.discount') }}</td>
        <td class="icon-style">{{ currencyAlignment(number_format((float)$sale->discount, 2))}}</td>
    </tr>
    <tr>
        <td>{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.shipping') : __('messages.pdf.shipping') }}</td>
        <td class="icon-style">{{currencyAlignment(number_format((float)$sale->shipping, 2))}}</td>
    </tr>
    <tr>
        <td>{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.total') : __('messages.pdf.total') }}</td>
        <td class="icon-style">{{currencyAlignment(number_format((float)$sale->grand_total, 2))}}</td>
    </tr>

    <tr>
        <td>{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.paid_amount') : __('messages.pdf.paid_amount') }}</td>
        <td class="icon-style">{{currencyAlignment(number_format((float)$sale->payments->sum('amount'), 2))}}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
