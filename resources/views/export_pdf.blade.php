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
            justify-content: space-between;
            font-size: 5px;
            font-family: DejaVu Sans, sans-serif;
            display: -webkit-box; /* wkhtmltopdf uses this one */
            display: inline-table;
            -webkit-box-pack: center; /* wkhtmltopdf uses this one */
            justify-content: center;
        }
        .box-card{
            background-image: url('{{public_path("/images/background_img.png")}}');
            background-repeat: no-repeat;
            background-size: cover;
            width: 219px;
            height: 175px;   
            color:white;
            text-align: center;
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

        .before-body{
            margin-top: 5px;
            color : #002D86;
            font-size: 8px;
            font-weight: bold;
        }
        .box-body{
        }

        .box-body .qr-code{
            margin: 10px 13px 0px;
        }

        .box-body .qr-code.image-left{
            float: left;
        }

        .box-body .qr-code.image-right{
            float: right;
        }
        .box-footer{
            padding-top: 6px;
            clear: both;
        }
        .box-footer .quotes{
            font-weight: bold;
            padding-top: 3px;
        }
        .box-card .information{
            color: #002D86;
            text-align: left;
            font-weight: bold;
        }
        .info-detail{
            padding-left: 12px;
            float: left;
        }

        .info-detail p{
            margin-bottom: 0;
        }
        .last-quotes{
            color:red;
            font-weight: bold;
            text-align: center;
            clear: both;
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