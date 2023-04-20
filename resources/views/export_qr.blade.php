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
                    <img src="{{$imgBase64}}" alt="">
                </div>
                <div class="image-right qr-code">
                    <img src="{{$imgBase64}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<p class="phone">Mã số thuế: 0107616553 - Điện Thoại: 0978.665.596</p>              
