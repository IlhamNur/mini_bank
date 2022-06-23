@extends('layouts.main')

@section('content')
<div class="inner-banner">
</div>
<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="/services">Services</a></li>
            <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Ganti PIN</li>
        </ul>
    </div>
</section>
<div class="w3l-contact-info py-5" id="contact">
    <div class="container py-lg-5 py-md-4">
        <div class="title text-center">
            <h3 class="title-big">Tingkatkan dan Segarkan Kembali Keamanan Rekening Anda dengan Rutin Mengganti PIN </h3>
            <p class="mt-2 mx-lg-5">Mengganti PIN kini tak perlu ribet!</p>
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
                    <!-- <h4><strong>Ganti PIN</strong></h4> -->
                    <div class="form-input">
                        <input type="text" name="Nomor Rekening" id="w3lName1" placeholder="Nomor Rekening Anda">
                    </div>
                    <div class="form-input">
                        <input type="text" name="Nomor Kartu" id="w3lName2" placeholder="Nomor Kartu">
                    </div>
                    <div class="form-input">
                        <input type="password" name="PINold" id="w3lSender1" placeholder="PIN Lama"
                            required="">
                    </div>
                    <div class="form-input">
                        <input type="password" name="PINnew" id="w3lSender2" placeholder="PIN Baru - 6 Digit Angka"
                            required="">
                    </div>
                    <div class="form-input">
                        <input type="password" name="PINconfirm" id="w3lSender3" placeholder="Konfirmasi PIN Baru"
                            required="">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-style btn-primary1">Ganti PIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection