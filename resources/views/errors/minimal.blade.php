<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('code') | @yield('message')</title>

  <!-- Favicons -->
  <link href="{{ asset('front/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('front/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('front/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('front/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('front/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <link href="{{ asset('front/css/variables-blue.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('front/css/main.css') }}" rel="stylesheet">

  <script >var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();(function(){var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];s1.async=true;s1.src='https://embed.tawk.to/5a3111a2bbdfe97b137fb65e/default';s1.charset='UTF-8';s1.setAttribute('crossorigin','*');s0.parentNode.insertBefore(s1,s0);})(); </script> <script >_atrk_opts={atrk_acct:"IBRPq1kx0820/9", domain:"devlupsoft.com",dynamic: true};(function(){var as=document.createElement('script'); as.type='text/javascript'; as.async=true; as.src="https://certify-js.alexametrics.com/atrk.js"; var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s);})(); </script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="javascript:void(0)" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <h1>Devlupsoft <span>L&D</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>

          {{-- <li><a class="nav-link scrollto" href="#about">About</a></li> --}}
          <li><a class="nav-link scrollto" href="#services">Trainings</a></li>
          {{-- <li><a href="blog.html">Blog</a></li> --}}
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        {{-- <i class="bi bi-list mobile-nav-toggle d-none"></i> --}}
      </nav><!-- .navbar -->

      <a class="btn-getstarted scrollto" href="/login">Login</a>

    </div>
  </header><!-- End Header -->

  <section id="hero-static" class="hero-static d-flex align-items-center">
    <br/>
    <br/>
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <img src="{{ asset('front/img/devlupsoft.jpg') }}" style="width: 150px; border-radius: 25px" class="img-fluid" alt="Devlupsoft L&D">
      <h2><span>404</span> Not found</h2>
      <p>The page you are looking for is temporarily or permanently removed.</p>
      <div class="d-flex">
        <a href="/" class="btn-get-started scrollto">Home</a>
      </div>
    </div>
    <br/>
    <br/>
  </section>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Devlupsoft L&D</h3>
              <p>
                Delhi, India, 110085<br><br>
                <strong>Phone:</strong> +91 9693087681<br>
                <strong>Email:</strong> lnd@devlupsoft.com<br>
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="/">Home</a></li>
              {{-- <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li> --}}
              <li><i class="bi bi-chevron-right"></i> <a href="#services">Trainings</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/terms-of-use">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/privacy-policy">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Connect</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#contact">Learn Graphic Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#contact">Learn Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#contact">Learn Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#contact">Learn DevOps</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#contact">Learn Digital Marketing</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong>
                <span>Devlupsoft L&D</span>
            </strong>.
          </div>
          {{-- <div class="credits" >
            <a style="color: #3b5380 !important; text-decoration: none !important" href="/">Designed by BootstrapMade</a>
          </div> --}}
        </div>

        {{-- <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div> --}}

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('front/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('front/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('front/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('front/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('front/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('front/js/main.js') }}"></script>

</body>

</html>
