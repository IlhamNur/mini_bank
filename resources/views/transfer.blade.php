@extends('layouts.main')

@section('content')
<div class="inner-banner">
</div>
<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="/services">Services</a></li>
            <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Transfer</li>
        </ul>
    </div>
</section>
<div class="w3l-contact-info py-5" id="contact">
    <div class="container py-lg-5 py-md-4">
        <div class="title text-center">
            <h3 class="title-big">Transfer Antar Bank Mudah Tanpa Biaya Admin </h3>
            <p class="mt-2 mx-lg-5">Dengan langkah yang mudah, membuat transaksi Anda menjadi indah</p>
        </div>
        <div class="row">
            <!-- <div class="col-lg-6">
            </div>
            <div class="align-self mt-lg-0 mt-md-5 mt-4">
            </div> -->
        </div>
        <div class="row mt-5">
            <div class="col-lg-6 form-inner-cont mt-lg-0 mt-sm-5 mt-4">
                <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                    <!-- <h4><strong>Transfer</strong></h4> -->
                    <div class="form-input">
                        <input type="text" name="Nomor Kartu" id="w3lName" placeholder="Nomor Kartu">
                    </div>
                    <div class="form-input">
                        <input type="password" name="PIN" id="w3lSender" placeholder="PIN"
                            required="">
                    </div>
                    <div class="form-input">
                        <input type="text" name="Rekening Tujuan" id="RekeningTujuan" placeholder="Rekening Tujuan">
                    </div>
                    <div class="form-input">
                        <input type="text"  name="Jumlah Transfer" id="broker_fees" placeholder="Jumlah Transfer - Minimal Rp 10.000" required="required">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-style btn-primary1">Transfer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection