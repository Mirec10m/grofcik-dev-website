<html>
<head>
    <title>
        Tlačiť prijaté faktúry
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="{{ asset('pdf-font/DejaVuSans.tff') }}" rel="stylesheet">
    <link href="{{ asset('pdf-font/DejaVuSans-Bold.tff') }}" rel="stylesheet">
    <style>
        @page{
            margin: 30px;
            margin-top: 60px;
            padding: 0;
        }
        html {
            box-sizing: border-box;
            -ms-overflow-style: scrollbar;
        }

        *,
        *::before,
        *::after {
            font-family: 'DejaVu Sans';
            font-size: 0.96em;
            box-sizing: inherit;
        }
        .img-responsive{
            display: block;
            max-width: 100%;
            height: auto;
        }
        .container {
            width: calc(100% - 30px);
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }
        .row {
            width: 100%;
            margin-right: -15px;
            margin-left: -15px;
        }
        .container:before, .container:after, .row:before, .row:after,{
            display: table;
            content: ' ';
        }
        .row:after{
            clear: both;
        }
        .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col-20{
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
        .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col-20{
            float: left;
        }
        .col-12 {
            width: 100%;
        }
        .col-11 {
            width: 91.66666667%;
        }
        .col-10 {
            width: 83.33333333%;
        }
        .col-9 {
            width: 75%;
        }
        .col-8 {
            width: 66.66666667%;
        }
        .col-7 {
            width: 58.33333333%;
        }
        .col-6 {
            width: 50%;
        }
        .col-5 {
            width: 41.66666667%;
        }
        .col-4 {
            width: 33.33333333%;
        }
        .col-3 {
            width: 25%;
        }
        .col-2 {
            width: 16.66666667%;
        }
        .col-1 {
            width: 8.33333333%;
        }
        .text-center{
            text-align: center;
        }
        .col-20{
            width: 16%;
        }

        h2{
            font-size: 18px;
            margin-bottom: 5px;
        }
        .pd-10{
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .pd-15{
            padding-top: 15px;
            padding-bottom: 15px;
        }
        .pd-20{
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .mb-10{
            margin-bottom: 10px;
        }
        .mt-20{
            margin-top: 20px;
        }
        .mt-30{
            margin-top: 30px;
        }
        .page-break{
            page-break-after: always;
        }
        .list{
            list-style-type: none;
        }
        .list li{
            margin: 40px 0;
            position: relative;
        }
        .list li:before{
            counter-increment: section;
            content: counter(section) '.';
            position: absolute;
            display: block;
            left: -25px;
        }

        table{
            border-collapse: collapse;
            width: 100%;
        }
        th,td{
            padding: 5px;
        }
        thead{
            background-color: #dddddd;
        }
        .nowrap{
            white-space: nowrap;
        }
        .text-left{
            text-align: left;
        }
        .text-right{
            text-align: right;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-6">
            <h2>
                Faktúra č. {{ $order->number }}<br>
            </h2>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <h3>Dodávateľ</h3>
            John Doe - Company<br>
            Address 00<br>
            000 00, City<br>
            Country<br>
            <br>
            IČO: 00000000<br>
            DIČ: 0000000000<br>
            Dodávateľ nie je platcom DPH<br>
        </div>
        <div class="col-6">
            <h3>Odoberateľ</h3>
            {{ $order->customer }}<br>
            Address 00<br>
            000 00, City<br>
            Country<br>
            <br>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-6">
            Dátum vystavenia: 00.00.0000
        </div>
        <div class="col-6">
            Dátum splatnosti: 00.00.0000
        </div>
    </div>

    <div class="row mt-20">
        <div class="col-12">

            <table>
                <thead>
                <tr>
                    <th class="text-left">Názov</th>
                    <th class="text-right">Cena</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-left">Item</td>
                    <td class="text-right">&euro;0.00</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>

    <div class="row">
        <div class="col-5" style="float: right;">
            <h2>
                <span>Celkom k úhrade</span>
                <span style="float: right; margin-right: -30px;">&euro;{{ $order->formatted_price }}</span>
            </h2>
        </div>
    </div>

    <div class="row mt-30">
        <div class="col-12 text-right">
            <!-- img src="{{-- asset('signature.png') --}}" alt="" width="44"-->

            ..................................................
        </div>
    </div>
</div>
</body>
</html>
