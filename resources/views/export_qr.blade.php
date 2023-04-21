@extends('layouts.app')

@section('content')
<div class="container">
    <div class="box-list">
        <div class="box-card">
            <div class="box-header">
                <h3>CÔNG TY TNHH THƯƠNG MẠI ĐÚC VÀ ÉP CỌC BÊ TÔNG THĂNG LONG 886</h3>
                <p class="address">Xưởng sản xuất lô A2.7, KĐT Thanh Hà B, Cienco 5, Cự Khê, Thanh Oai, Hà Nội</p>
                <p class="tax-number">Mã số thuế: 010761553</p>
            </div>
            <div class="box-body">
                <div class="image-left qr-code">
                    <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->merge($logoPath, 0.3, true)
                        ->size(100)->errorCorrection('H')
                        ->generate('Welcome to kerneldev.com')) !!} ">
                </div>
                <div class="image-right qr-code">
                   <img src="data:image/png;base64, {{base64_encode($img)}}" alt="">
                </div>
            </div>
            <div class="box-footer">
                <div class="quotes">CỌC BÊ TÔNG CỐT THÉP ĐÚC SẴN</div>
                <div class="information">
                    <div class="info-left info-detail">
                        <p>ID:</p>
                        <p>Serial:</p>
                        <p>Hotline: 0978.665.596</p>
                    </div>
                    <div class="info-right info-detail">
                        <p>Cọc:</p>
                        <p>Thép chủ:</p>
                        <p>Mác bê tông:</p>
                    </div>
                </div>
                <div class="last-quotes">
                    Quét QR code để tra cứu thông tin sản phẩm chính hãng
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
