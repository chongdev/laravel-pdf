<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>{{ $order->code }}</title>

    <style>
        @page {
            margin: 0 0
        }


        @font-face {
            font-family: 'Sarabun';
            font-style: normal;
            font-weight: 400;
            src:url("{{ public_path('/static/fonts/Sarabun/Sarabun-Regular.ttf') }}") format("truetype")
        }

        body {
            font-family: 'Sarabun', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 13.93pt;
            padding: 0;
            margin: 0;
            color: #000;
        }

        .header-top{
            padding:50px 30px 10px;
            margin: 0;
        }
        .header-bottom {
            background: #305170;
            color: #fff;
            padding: 8px 30px;
            font-size: 20.99pt;
        }

    </style>
</head>

<body>

    <div class="header">

        <div class="header-top"><h1>Invoice</h1></div>
        <div class="header-bottom">Laravel wrapper for Dompdf HTML to PDF Converter</div>
    </div>
</body>

</html>
