@extends('layouts.main')

@section('content')
<div class="inner-banner">
</div>
<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="/">Home</a></li>
            <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span>Services</li>
        </ul>
    </div>
</section>
<!-- /bottom-grids-->
<section class="w3l-bottom-grids-6 w3l-services py-5" id="services">
    <div class="container py-lg-5 py-md-4">
        <h6 class="title-small text-center">Layanan Kami</h6>
        <h3 class="title-big mb-md-5 mb-4 text-center">Daftar Layanan Terbaik dari Mini Bank</h3>
        <div class="grids-area-hny main-cont-wthree-fea row">
            <div class="col-lg-4 col-md-6 grids-feature">
                <div class="area-box">
                    <span class="fa fa-dollar mt-0"></span>
                    <h4><a href="/transfer" class="title-head">Transfer</a></h4>
                    <p class="">Terdapat layanan transaksi transfer ke rekening sendiri, sesama, antar bank dan Virtual Account Billing sesuai kebutuhan Anda.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
                <div class="area-box">
                    <span class="fa fa-credit-card mt-0"></span>
                    <h4><a href="/gantipin" class="title-head">Ganti PIN</a></h4>
                    <p class="">Terdapat layanan penggantian PIN untuk menjaga privasi dan keamanan Anda dalam melakukan transaksi.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
                <div class="area-box">
                    <span class="fa fa-money mt-0"></span>
                    <h4><a href="/ceksaldo" class="title-head">Cek Saldo</a></h4>
                    <p class="">Terdapat layanan untuk mengecek jumlah saldo (uang) yang masih tersisa pada tabungan Anda saat ini.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //bottom-grids-->
<!-- middle -->
<div class="middle py-5" id="call">
    <div class="container py-lg-3">
        <div class="welcome-left text-center py-md-5 py-3">
            <h3 class="title-big">Apakah Masih Ada Pertanyaan?</h3>
            @foreach ($telps as $telp)
            <h3 class="mt-4">Silahkan Hubungi Kami Di : <a href="tel:{{ $telp->value }}">{{ $telp->value }}</a> </h3>
            @endforeach
            <p class="mt-4">Apabila Anda menghubungi nomor yang tertera, Anda akan dikenakan biaya normal.</p>
            @foreach ($emails as $email)
            <a href="{{ $email->value }}" class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2">Hubungi Kami</a>
            @endforeach
        </div>
    </div>
</div>
<!-- //middle -->
@endsection