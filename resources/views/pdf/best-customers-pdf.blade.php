<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "//www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>{{ __('messages.pdf.top_customers_pdf') }}</title>
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

        .fw-light {
            font-weight: 500;
            color: grey;
        }
        @page {
            margin: auto 20px;
        }
    </style>

</head>
<body>

<table width="100%">
    <tr>
        <td align="" style="vertical-align: bottom">
            <h2 style="color: dodgerblue;">{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.top_customers_list') : __('messages.pdf.top_customers_list') }}</h2>
        </td>
    </tr>
</table>
<table width="100%" cellspacing="0" cellpadding="10" style="margin-top: 40px;">
    <thead>
    <tr style="background-color: dodgerblue;">
        <th style="color: #fff;">{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.customer_name') : __('messages.pdf.customer_name') }}</th>
        <th style="color: #fff;">{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.phone') : __('messages.pdf.phone') }}</th>
        <th style="color: #fff;">{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.email') : __('messages.pdf.email') }}</th>
        <th style="color: #fff;">{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.total_sales') :__('messages.pdf.total_sales') }}</th>
        <th style="color: #fff;">{{ getLoginUserLanguage() == 'cn' ? __('messages.pdf.total_amount') :__('messages.pdf.total_amount') }}</th>
    </tr>
    </thead>
    <tbody style="background-color: #f5f3f3;">
    @if(isset($topCustomers))
        @foreach($topCustomers  as $customer)
            <tr align="center" style="border-bottom: 2px solid darkgrey;!important;">
                <td>{{$customer->name}}</td>
                        <td style="max-width:106px">
                            {{$customer->phone}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->sales_count}}</td>
                        <td class="icon-style" style="white-space: nowrap" align="right">
                            {{currencyAlignment(number_format((float) $customer->grand_total, 2)) }}</td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>

</body>
</html>
