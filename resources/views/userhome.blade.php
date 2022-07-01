@extends('layouts.main')

@section('content')
<!-- main-slider -->
<section class="w3l-main-slider" id="home">
            <div class="item">
                <li>
                    <div class="banner-view  banner-info-bg bg bg2">
                        <div class="container">
                            <div class="row">
                                    <div class="col-lg-6 bg-secondary rounded">
                                        <div class="row">
                                        <div class="my-3 col-sm-4">
                                            <img src="{{asset('assets/images/fotoprofil.png')}}" alt="img" class="img-fluid ml-3" />
                                        </div> 
                                        <div class="form-group col-sm-6 offset-1 my-5">
                                                <h5 style="font-size: 30px;">{{ Auth::user()->name }}</h5>
                                            <div class="row align-items-center mt-3">
                                                <div class="col-1">
                                                    <h5 style="font-size: 15px;">Rp</h5>
                                                </div>
                                                <div class="col-9">
                                                    <input type="text" class="form-control" id="norekening" placeholder="Saldo" value="{{ $saldos->saldo }},00">
                                                </div>
                                                <div class="col-1">
                                                    <i class="fa fa-eye-slash white" aria-hidden="true" style="color: white"></i>
                                                </div>
                                            </div>
                                        <!-- </div>
                                        <a class="btn btn-style btn-primary mt-2 mb-4 mx-auto" href="/gantipin">ganti pin</a>
                                        </div> -->
                                    </div>

                                    <div class="col-lg-5 offset-1 bg-secondary rounded">
                                    <form class="my-5">
                                        <div class="form-group">
                                            <h5 style="font-size: 15px;">Nomor Rekening</h5>
                                            <input type="text" class="form-control mt-1" id="norekening" placeholder="no rekening" value="{{$rekenings->nomor_rekening}}">
                                        </div>
                                        <div class="form-group">
                                            <h5 style="font-size: 15px;">Akun Email</h5>
                                            <input type="text" class="form-control mt-1" id="pengeluaran" placeholder="pengeluaran" value="{{$users->email}}">
                                        </div>
                                        <div class="form-group">
                                            <h5 style="font-size: 15px;">Nomor Induk Kewarganegaraan</h5>
                                            <input type="text" class="form-control mt-1" id="pemasukan" placeholder="pemasukan" value="{{$nasabahs->nik}}">
                                        </div>
                                    </form>
                                    </div>   
                            </div> 

                        </div>     
                    </div>
                </li>
            </div>
</section>
<!-- /main-slider -->

<!-- home page block1 -->
<!-- //home page block1 -->
<!-- about page about section -->
<!-- <section class="w3l-index3" id="about">
    <div class="midd-w3 py-5">
        <div class="container py-lg-5 py-md-3">
            <div class="row">
                <div class="col-lg-7 mb-lg-0 mb-md-5 mb-4 align-self">
                    <h3 class="title-left mx-0">Our bank founded in 2015 to introduce the new level of financial
                        services. We are still dedicated to the success of our clients.</h3>
                    <p class="mt-md-4 mt-3">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                        ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet
                        elit. Non quae, fugiat nihil ad. Lorem ipsum dolor sit amet. Lorem ipsum init
                        dolor sit, amet elit. Dolor ipsum non velit, culpa! Vivamus a et ut justo, init in dolor et.</p>
                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="/about"> Learn More</a>
                </div>
                <div class="col-lg-5">
                    <div class="position-relative">
                        <img src="assets/images/about.jpg" alt="" class="radius-image img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- //about page about section -->
<!-- /mobile section --->
<section class="w3l-mobile-content-6 py-5">
    <div class="mobile-info py-lg-5 py-md-4 py-2">
        <!-- /mobile-info-->
        <div class="container ">
            <h3 class="title-big mb-5 text-center">Mutasi</h3>
            <table class="table title">
            <tbody>
                @foreach ($transaksis as $transaksi)
                <tr>
                    <td>
                        <h4>a.n. {{ Auth::user()->name }}</h4>
                        <p>{{ $transaksi->tgl_transaksi }}</p>
                    </td>
                    <td class="text-right">
                        <h4>Rp {{ $transaksi->nominal}},00</h4>
                        @if ($transaksi->jenis_transaksi = 'debet')
                        <p>Masuk</p>
                        @else
                        <p>Keluar</p>
                        @endif
                    </td>
                </tr>
                @endforeach
                
            </tbody>
</table>

            
            <!-- <div class="text-center">
                <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="#book"> View more advanced features</a>
            </div> -->
        </div>
        <!-- //mobile-info-->
    </div>
</section>
@endsection
