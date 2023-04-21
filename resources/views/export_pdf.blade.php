<!DOCTYPE html>
<html lang="vi">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @font-face {
            font-family: roboto-black;
            src: url('/font/roboto/Roboto-Black.tff');
        }
        .box-list{
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            font-size: 5px;
            font-family: DejaVu Sans, sans-serif;
        }
        .box-card{
            background-image: url('{{public_path("/images/background_img.png")}}');
            background-repeat: no-repeat;
            background-size: cover;
            width: 32%;
            display: flex;
            height: 352px;   
            color:white;
            text-align: center;
            float:right;
            background-position: center;
        }
        .box-header{
            padding: 0px 7px 0;
            margin-top: 5px;
        }
        .box-header h3{
            font-weight: bold;
            margin-bottom: 0px;
            font-size: inherit;
        }

        .box-header .address{
            /* font-size: 11px; */
        }

        .box-header p{
            margin: 0;
        }
        .box-body{
            display: flex;
        }

        .box-body .qr-code{
            display: inline-block;
            margin-top: 30px;
        }

        .box-footer{
            margin-top: 15px;

        }
        .box-footer .quotes{
            font-weight: bold;
            padding-top: 3px;
        }
        .box-card .information{
            color: #002D86;
            display: flex;
            text-align: left;
            padding-top: 11px;
            font-weight: bold;
        }
        .info-detail{
            min-width: 130px;
            padding: 0 25px;
        }

        .info-detail p{
            margin-bottom: 0;
        }

        .last-quotes{
            color:red;
            font-weight: bold;
            text-align: left;
            padding: 5px 25px;
        }
    </style>
</head>
<body>
    <div class="container">
        @foreach ($listCodes as $code)
            @include('layouts.layout_qr', ['code' => $code, 'logoPath' => $logoPath])
        @endforeach
    </div>
</body>
</html>