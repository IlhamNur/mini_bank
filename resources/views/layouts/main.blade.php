<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ $title }}</title>
    
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    @foreach ($logos as $logo)
    <link rel="shortcut icon" href="{{ $logo->value }}">
    @endforeach

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    
  </head>
  <body>
<!--header-->
<header id="site-header" class="fixed-top">
  <div class="container">
      <nav class="navbar navbar-expand-lg stroke px-0">
          <h1> <a class="navbar-brand" href="/">
                @foreach ($logos as $logo)
                  <span><img src="{{ $logo->value }}" alt="Your logo" title="Your logo" style="height:35px; padding-right: 5px; padding-bottom: 8px;" /></span>
                @endforeach
                  @foreach ($names as $name) 
                    {{ $name->value }}
                  @endforeach
              </a></h1>  
              
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item {{ ($title === "Home") ? 'active' : '' }}">
                      <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item {{ ($title === "About Us") ? 'active' : '' }}  ">
                      <a class="nav-link" href="/about">About</a>
                  </li>
                  <li class="nav-item {{ ($title === "Services") ? 'active' : '' }}  ">
                      <a class="nav-link" href="/services">Services</a>
                  </li>
                  @guest
                    @if (Route::has('login'))     
                      <li class="nav-item {{ ($title === "Sign In") ? 'active' : '' }}  ">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                      </li>
                    @endif
                  @else
                      <li class="nav-item @@contact__active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                          </form>
                        </div>
                      </li>
                  @endguest
                  <!--/search-right-->
                  <div class="search mr-3">
                      <input class="search_box" type="checkbox" id="search_box">
                      <label class="fa fa-search" for="search_box"></label>
                      <div class="search_form">
                          <form action="" method="GET">
                              <input type="text" placeholder="Search"><input type="submit" value="search">
                          </form>
                      </div>
                  </div>
                  <!--//search-right-->
              </ul>
          </div>
          <!-- toggle switch for light and dark theme -->
          <div class="mobile-position">
              <nav class="navigation">
                  <div class="theme-switch-wrapper">
                      <label class="theme-switch" for="checkbox">
                          <input type="checkbox" id="checkbox">
                          <div class="mode-container">
                              <i class="gg-sun"></i>
                              <i class="gg-moon"></i>
                          </div>
                      </label>
                  </div>
              </nav>
          </div>
          <!-- //toggle switch for light and dark theme -->
      </nav>
  </div>
</header>
<!--/header-->
@yield('content')
 <!-- footer -->
<section class="w3l-footer-29-main">
    <div class="footer-29 py-5">
      <div class="container py-lg-4">
        <div class="row footer-top-29">
          <div class="col-lg-4 col-md-6 footer-list-29 footer-1 pr-lg-5">
            <div class="footer-logo mb-4">
              @foreach ($logos as $logo)
              <a class="navbar-brand" href="/"><img src="{{ $logo->value }}" alt="Your logo" title="Your logo" style="height:35px;"/>
              @endforeach                   
                @foreach ($names as $name) 
                  {{ $name->value }}
                @endforeach
              </a>
            </div>
            <p>Kami adalah lembaga keuangan terkemuka yang menyediakan layanan perbankan berskala nasional berkualitas tinggi. Kesuksesan kami
              terwujud berkat dukungan dari pelanggan setia kami. Kami menyediakan layanan yang dapat diandalkan untuk Anda.</p>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-5 col-5 footer-list-29 footer-2 mt-md-0 mt-5">
  
            <ul>
              <h6 class="footer-title-29">Quick Links</h6>
              <li><a href="about.php">About Us</a></li>
              <!-- <li><a href="#blog"> Blog posts</a></li>
              <li><a href="#pricing"> Pricing plans</a></li> -->
              <li><a href="services.php">Services</a></li>
              <!-- <li><a href="contact.php">Contact us</a></li> -->
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-7 col-7 footer-list-29 footer-3 mt-lg-0 mt-5">
            <h6 class="footer-title-29">Kantor Pusat</h6>
            @foreach ($alamats as $alamat)
            <p class="mb-3"> {{ $alamat->value }}</p>
            @endforeach
            @foreach ($telps as $telp)
            <p class="mb-2"> <span class="fa fa-phone"></span> <a href="tel:{{ $telp->value }}">{{ $telp->value }}</a></p>
            @endforeach
            @foreach ($emails as $email)
            <p class="mb-2"><span class="fa fa-envelope-o"></span> <a href="mailto:{{ $email->value }}">{{ $email->value }}</a></p>
            @endforeach
            @foreach ($was as $wa)
            <p><span class="fa fa-whatsapp"></span> <a href="whatsapp://send?text=Hello&phone={{ $wa->value }}">{{ $wa->value }}</a></p>
            @endforeach
          </div>
          <div class="col-lg-3 col-md-6 footer-list-29 footer-4 mt-lg-0 mt-5">
            <h6 class="footer-title-29">Berita Terbaru</h6>
            <div class="post1">
              <a href="https://finansial.bisnis.com/read/20220425/90/1526762/ketua-ojk-ekonomi-digital-indonesia-bakal-jadi-nomor-1-di-asia-tenggara" class="post-title">Ketua OJK: Ekonomi Digital Indonesia Bakal Jadi Nomor 1 di Asia Tenggara</a>
              <p class="small">April 25, 2022</p>
            </div>
            <div class="post1 mt-4">
              <a href="https://finansial.bisnis.com/read/20220421/90/1525520/bank-diprediksi-selektif-salurkan-kredit-intip-sektor-andalan-dan-yang-dihindari" class="post-title">Bank Diprediksi Selektif Salurkan Kredit, Intip Sektor Andalan dan yang Dihindari</a>
              <p class="small">April 21, 2022</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- copyright -->
    <section class="w3l-copyright text-center">
      <div class="container">
        <p class="copy-footer-29">© 2022 Mini Bank. All rights reserved.</p>
      </div>
<!-- //footer -->

<!--  javascripts file here -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/theme-change.js"></script> <!-- //light and dark mode switch js -->

<script src="assets/js/circles.js"></script>

<!-- stats number counter-->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
  $('.counter').countUp();
</script>
<!-- //stats number counter -->

<!-- owl carousel -->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1
        },
        480: {
          items: 1
        },
        667: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  })
</script>
<!-- //script -->
<!-- owl carousel -->

<!-- script for tesimonials carousel slider -->
<!-- <script>
  $(document).ready(function () {
    $("#owl-demo2").owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        1000: {
          items: 1,
          nav: false,
          loop: false
        }
      }
    })
  })
</script> -->
<!-- //script for tesimonials carousel slider -->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<script src="assets/js/bootstrap.min.js"></script><!-- //bootstrap js -->

<script>

function showPass() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>

</html>