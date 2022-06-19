@extends('layouts.main')

@section('content')
<div class="inner-banner">
</div>
<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="/">Home</a></li>
            <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Log In / Sign Up</li>
        </ul>
    </div>
</section>
<div class="w3l-contact-info py-5" id="contact">
    <div class="container py-lg-5 py-md-4">
        <div class="title text-center">
            <h3 class="title-big">Sign Up</h3>
            <p class="mt-2 mx-lg-5">Buatlah akun untuk mendapatkan pengalaman yang terbaik.</p>
        </div>
        <!-- <div class="row">
            <div class="col-lg-6">
            </div>
            <div class="align-self mt-lg-0 mt-md-5 mt-4">
                <div class="contact-infos">
                    <div class="single-contact-infos">
                        <div class="icon-box"> <span class="fa fa-map-marker"></span></div>
                        <div class="text-box">
                            <h3 class="mb-1">Address info</h3>
                            <p>Bank Card, 343 banking lane, #2214 cravel street, NY.</p>
                        </div>
                    </div>
                    <div class="single-contact-infos">
                        <div class="icon-box"> <span class="fa fa-phone"></span></div>
                        <div class="text-box">
                            <h3 class="mb-1">Call us on</h3>
                            <p><a href="tel:+1(21) 234 4567">+1(21) 234 4567</a></p>
                        </div>
                    </div>
                    <div class="single-contact-infos">
                        <div class="icon-box"> <span class="fa fa-envelope"></span></div>
                        <div class="text-box">
                            <h3 class="mb-1">Email us</h3>
                            <p> <a href="mailto:info@support.com">info@support.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row mt-5 " >
            <!-- <div class="col-lg-6 map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001161.424489281!2d-78.01909140705047!3d42.72866436845163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sin!4v1570786994395!5m2!1sen!2sin"
                    frameborder="0" allowfullscreen=""></iframe>
            </div> -->
            <div class="col-lg-6 form-inner-cont mt-lg-0 mt-sm-5 mt-4" >
                <form action="{{ route('register') }}" method="post" class="signin-form">
                    @csrf
                    <div class="form-input">
                        <input type="text" name="name" id="w3lName" placeholder="Nama lengkap Anda" value="{{ old('name') }}" required autocomplete="name" autofocus class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <!-- <div class="form-input">
                      <textarea type="text" name="w3lAddress" id="w3lAddress" placeholder="Alamat tinggal Anda" required=""></textarea>
                    </div>
                    <div class="form-input">
                      <input type="number" name="w3lHP" id="w3lHP" placeholder="Nomor handphone Anda" required="">
                    </div>
                    <div class="form-input">
                      <input type="number" name="w3lRekening" id="w3lRekening" placeholder="Nomor kartu bank Anda" required="">
                    </div> -->
                    <div class="form-input">
                        <input type="email" name="email" id="w3lSender" placeholder="Email Anda" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-input">
                        <input type="password" name="password" id="w3lPassword" placeholder="Password Anda" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-input">
                        <input type="password" name="password_confirmation" id="password-confirm" placeholder="Konfirmasi Password" class="form-control" required autocomplete="new-password">
                    </div>
                    <!-- <div class="form-input">
                      <input type="text" name="w3lMother" id="w3lMother" placeholder="Nama ibu kandung Anda" required="">
                    </div> -->
                    <div class="text-right">
                        <button type="submit" class="btn btn-style btn-primary">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection