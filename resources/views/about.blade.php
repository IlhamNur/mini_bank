@extends('layouts.main')

@section('content')
<div class="inner-banner">
  </div>
  <section class="w3l-breadcrumb">
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="/">Home</a></li>
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span>About Us</li>
      </ul>
    </div>
  </section>
  <!-- home page about section -->
  <section class="w3l-index3" id="about">
    <div class="midd-w3 py-5">
      <div class="container py-lg-5 py-md-3">
        <div class="row">
          <div class="col-lg-6">
            <div class="position-relative">
              <img src="assets/images/blog2.jpg" alt="" class="radius-image img-fluid">
            </div>
          </div>
          <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4 align-self">
            <h3 class="title-big mx-0">Kami membantu Anda untuk menyelesaikan Pekerjaan terbaik Anda.</h3>
            <p class="justify">Nikmati kemudahan mengatur portofolio dana Anda dengan memanfaatkan fitur Pembukaan
              Deposito di Internet Banking. Anda dapat membuka Deposito minimal Rp. 5.000.000 dengan minimal jangka
              waktu 1 bulan</p>
            <a class="btn btn-style btn-primary mt-md-5 mt-4" href="/about">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //home page about section -->
  <!-- stats -->
  <section class="w3l-stats py-5" id="stats">
    <div class="gallery-inner container py-lg-5 py-md-4">
      <div class="row stats-con">
        <div class="col-md-3 col-6 stats_info counter_grid">
          <p class="counter">1869</p>
          <h3>Proyek Selesai</h3>
        </div>
        <div class="col-md-3 col-6 stats_info counter_grid1">
          <p class="counter">12996</p>
          <h3>Jam Kerja</h3>
        </div>
        <div class="col-md-3 col-6 stats_info counter_grid mt-md-0 mt-4">
          <p class="counter">1300</p>
          <h3>Klien Senang</h3>
        </div>
        <div class="col-md-3 col-6 stats_info counter_grid2 mt-md-0 mt-4">
          <p class="counter">1245</p>
          <h3>Kartu Diterbitkan</h3>
        </div>
      </div>
    </div>
  </section>
  <!-- //stats -->
  @foreach ($names as $name)
  <!-- services section -->
  <section id="services" class="w3l-servicesblock3 py-5">
    <div class="container py-lg-5 py-md-4 py-2">
      <div class="welcome-left">
        <h3 class="title-big mb-md-5 mb-4 mx-auto text-center">Terikat untuk memberi Anda Kemakmuran & Keyakinan</h3>
        <div class="grids-area-hny main-cont-wthree-fea row pt-4">
          <div class="col-lg-6 col-md-6 grids-feature">
            <span class="fa fa-line-chart"></span>
            <div class="area-box">
              <h4><a href="" class="title-head">Pertumbuhan Perbankan</a></h4>
              <p class="my-3">Secara keseluruhan, total kredit {{ $name->value }} naik 8,2% YoY menjadi Rp637,0 triliun di Desember
                2021, lebih tinggi dari target pertumbuhan 6%. Pertumbuhan kredit {{ $name->value }} diikuti oleh perbaikan kualitas
                pinjaman, sejalan dengan kredit yang direstrukturisasi bisa berangsur perlahan-lahan kembali ke
                pembayaran normal.</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 grids-feature mt-md-0 mt-4">
            <span class="fa fa-university"></span>
            <div class="area-box">
              <h4><a href="" class="title-head">Produktivitas Utama</a></h4>
              <p class="my-3">Kami optimis UMKM masih memiliki potensi yang sangat besar untuk tumbuh dan berkembang di
                Indonesia yang tentunya kami harapkan dapat berkontribusi menggerakkan pertumbuhan ekonomi dan
                menggairahkan
                produktivitas ekspor di berbagai wilayah yang ada di Indonesia.</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 grids-feature mt-lg-5 mt-4">
            <span class="fa fa-percent"></span>
            <div class="area-box">
              <h4><a href="" class="title-head">Hasil 100%</a></h4>
              <p class="my-3">Anda yang terkena skimming kartu ATM dan uang anda hilang, jangan khawatir, {{ $name->value }} akan
                mengganti 100%.</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 grids-feature mt-lg-5 mt-4">
            <span class="fa fa-dollar"></span>
            <div class="area-box">
              <h4><a href="" class="title-head">Investasi Keuangan</a></h4>
              <p class="my-3">Reksadana {{ $name->value }} adalah produk investasi reksadana dari bank {{ $name->value }} melalui pengelolaan
                Investasi profesional dan berpengalaman di bidangnya.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endforeach
  <!-- //services section -->
  <section class="w3l-team py-5" id="team">
    <div class="container py-lg-5 py-md-4 py-2">
      <h3 class="title-big mb-md-5 mb-4 text-center">Temui Tim kami</h3>
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="our-team">
            <div class="pic">
              <img src="assets/images/1.png" alt="team member" class="img-fluid radius-image" />
            </div>
            <div class="content">
              <h3 class="title">Farrel Naufal</h3>
              <span class="post">Manajer Kredit Program dan Retail</span>
              <ul class="social">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-linkedin"></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="our-team">
            <div class="pic">
              <img src="assets/images/2.png" alt="team member" class="img-fluid radius-image" />
            </div>
            <div class="content">
              <h3 class="title">Galih Putri</h3>
              <span class="post">Manajer Kredit Produktif dan Komsumtif</span>
              <ul class="social">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-linkedin"></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="our-team">
            <div class="pic">
              <img src="assets/images/3.png" alt="team member" class="img-fluid radius-image" />
            </div>
            <div class="content">
              <h3 class="title">Iqbal Jauhar</h3>
              <span class="post">Manager TL Akuntansi dan Pelaporan</span>
              <ul class="social">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-linkedin"></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="our-team">
            <div class="pic">
              <img src="assets/images/4.png" alt="team member" class="img-fluid radius-image" />
            </div>
            <div class="content">
              <h3 class="title">Kristian Pradana</h3>
              <span class="post">Manajer Dana Jaringan dan Layanan</span>
              <ul class="social">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-linkedin"></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="our-team">
            <div class="pic">
              <img src="assets/images/5.png" alt="team member" class="img-fluid radius-image" />
            </div>
            <div class="content">
              <h3 class="title">Ilham Nur</h3>
              <span class="post">Manajer Kantor Pusat Operasional</span>
              <ul class="social">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-linkedin"></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="our-team">
            <div class="pic">
              <img src="assets/images/6.png" alt="team member" class="img-fluid radius-image" />
            </div>
            <div class="content">
              <h3 class="title">Reza Abidin</h3>
              <span class="post">Manajer Satuan Tugas Khusus</span>
              <ul class="social">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-linkedin"></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- contact -->
        <div class="w3l-contact-info py-5" id="contact">
          <div class="container py-lg-5 py-md-4">
              <div class="title text-center">
                  <h3 class="title-big">Hubungi Kami</h3>
                  <p class="mt-2 mx-lg-5">Anda akan menemukan diri Anda bekerja dalam kemitraan sejati yang menghasilkan pengalaman luar biasa, dan produk akhir yang terbaik.</p>
              </div>
              <div class="row">
                  <div class="col-lg-6">
                  </div>
                  <div class="align-self mt-lg-0 mt-md-5 mt-4">
                      <div class="contact-infos">
                          <div class="single-contact-infos">
                              <div class="icon-box"> <span class="fa fa-map-marker"></span></div>
                              <div class="text-box">
                                  <h3 class="mb-1">Informasi Alamat</h3>
                                  @foreach ($alamats as $alamat)
                                  <p>{{ $alamat->value }}</p>
                                  @endforeach
                              </div>
                          </div>
                          <div class="single-contact-infos">
                              <div class="icon-box"> <span class="fa fa-phone"></span></div>
                              <div class="text-box">
                                  <h3 class="mb-1">Telepon</h3>
                                  @foreach ($telps as $telp)
                                  <p><a href="tel:{{ $telp->value }}">{{ $telp->value }}</a></p>
                                  @endforeach
                              </div>
                          </div>
                          <div class="single-contact-infos">
                              <div class="icon-box"> <span class="fa fa-envelope"></span></div>
                              <div class="text-box">
                                  <h3 class="mb-1">Email Kami</h3>
                                  @foreach ($emails as $email)
                                  <p> <a href="mailto:{{ $email->value }}">{{ $email->value }}</a></p>
                                  @endforeach
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row mt-5">
                  <div class="col-lg-6 map">
                      <iframe
                          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.1412816066622!2d110.85419841450647!3d-7.559570576747258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a14234667a3fd%3A0xbda63b32997616ad!2sSebelas%20Maret%20University!5e0!3m2!1sen!2sid!4v1650868544644!5m2!1sen!2sid"
                          frameborder="0" allowfullscreen=""></iframe>
                  </div>
                  <div class="col-lg-6 form-inner-cont mt-lg-0 mt-sm-5 mt-4">
                      <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                          <div class="form-input">
                              <input type="text" name="w3lName" id="w3lName" placeholder="Your name">
                          </div>
                          <div class="form-input">
                              <input type="email" name="w3lSender" id="w3lSender" placeholder="Your email address"
                                  required="">
                          </div>
                          <div class="form-input">
                              <textarea name="w3lMessage" id="w3lMessage" placeholder="Your message" required=""></textarea>
                          </div>
                          <div class="text-right">
                              <button type="submit" class="btn btn-style btn-primary">Submit</button>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
@endsection