<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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
      <h2>Welcome to <span>Devlupsoft L&D</span></h2>
      <p>The learning and development program at Devlupsoft L&D would be a combination of lectures, hands-on coding exercises, real-world projects, and mentorship to ensure a well-rounded and practical understanding of full stack development. It should empower individuals to not only write code but also design scalable and maintainable applications while adhering to industry best practices.</p>
      <div class="d-flex">
        <a href="#pricing" class="btn-get-started scrollto">Enroll Now</a>
        <a href="https://www.youtube.com/watch?v=DvKDBH7bwbk" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
    <br/>
    <br/>
  </section>

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Trainings</h2>
          <p>Unlock the full spectrum of expertise in our comprehensive Full Stack Training Program at Devlupsoft. Dive deep into front-end and back-end development, master databases, deploy on the cloud, and gain the skills needed for end-to-end web application development. </p>
        </div>

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="{{ asset('front/img/services-1.jpg') }}" class="img-fluid" alt="Full Stack development">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-activity"></i>
                </div>
                <a href="#contact" class="stretched-link">
                  <h3>Full Stack Development</h3>
                </a>
                <p>Enroll now to embark on a holistic journey towards becoming a proficient Full Stack Developer!</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Pricing</h2>
          <p>Seize the opportunity to revolutionize your skills in our Full Stack Training Program at Devlupsoft.
            Enroll now for a transformative learning experience, select a plan as per you requirements.
            Don't miss out on this chance to elevate your career—take the first step today!</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="pricing-item">

              <div class="pricing-header">
                <h3>Basic Plan</h3>
                <h4><sup>₹</sup>4999<span> / month</span></h4>
              </div>

              <ul>
                <li><i class="bi bi-dot"></i> <span>One Tech stack (FE or BE)</span></li>
                <li><i class="bi bi-dot"></i> <span>Hands-on training</span></li>
                <li><i class="bi bi-dot"></i> <span>Course materials</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Cloud Services</span></li>
                <li class="na"><i class="bi bi-x"></i> <span>Certification</span></li>
              </ul>

              <div class="text-center mt-auto">
                <a href="https://chat.whatsapp.com/H8vxsW7z27s6GXEuuSkFsW" class="buy-btn">Buy Now</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="pricing-item featured">

              <div class="pricing-header">
                <h3>Corporate Plan</h3>
                <h4><sup>₹</sup>7999<span> / user</span><span> / month</span></h4>
              </div>

              <ul>
                <li><i class="bi bi-dot"></i> <span>Full Stack</span></li>
                <li><i class="bi bi-dot"></i> <span>Hands-on training</span></li>
                <li><i class="bi bi-dot"></i> <span>Course materials</span></li>
                <li><i class="bi bi-dot"></i> <span>Cloud Services</span></li>
                <li><i class="bi bi-dot"></i> <span>Certification</span></li>
              </ul>

              <div class="text-center mt-auto">
                <a href="https://chat.whatsapp.com/E49Z90bJom9FCwe5s18UIK" class="buy-btn">Buy Now</a>
              </div>

            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="600">
            <div class="pricing-item">

              <div class="pricing-header">
                <h3>Developer Plan</h3>
                <h4><sup>₹</sup>9999<span> / month</span></h4>
              </div>

              <ul>
                <li><i class="bi bi-dot"></i> <span>Full stack</span></li>
                <li><i class="bi bi-dot"></i> <span>Hands-on training</span></li>
                <li><i class="bi bi-dot"></i> <span>Course materials</span></li>
                <li><i class="bi bi-dot"></i> <span>Cloud Services</span></li>
                <li><i class="bi bi-dot"></i> <span>Certification</span></li>
              </ul>

              <div class="text-center mt-auto">
                <a href="https://chat.whatsapp.com/Ly0Fmqkgqe1BdczQCdcRf6" class="buy-btn">Buy Now</a>
              </div>

            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    {{-- <section id="faq" class="faq">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content px-xl-5">
              <h3>Frequently Asked <strong>Questions</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>

            <div class="accordion accordion-flush px-xl-5" id="faqlist">

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <i class="bi bi-question-circle question-icon"></i>
                    Non consectetur a erat nam at lectus urna duis?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <i class="bi bi-question-circle question-icon"></i>
                    Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <i class="bi bi-question-circle question-icon"></i>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <i class="bi bi-question-circle question-icon"></i>
                    Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <i class="bi bi-question-circle question-icon"></i>
                    Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <i class="bi bi-question-circle question-icon"></i>
                    Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{ asset('front/img/faq.jpg') }}");'>&nbsp;</div>
        </div>

      </div>
    </section> --}}
    <!-- End F.A.Q Section -->


    <section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>Enroll Now</h2>
          <p>Embark on a transformative journey in the world of Full Stack Development with Devlupsoft's cutting-edge Learning and Development program—enroll now to grasp the keys to unlocking your potential in the dynamic realm of technology!.</p>
        </div>

      </div>

      <div class="container">


        <div class="row gy-5 gx-lg-5">

            <div class="col-lg-4">

                <div class="info">
                  <h3>Quick Enroll</h3>
                  <img src="{{ asset('front/img/QR-devlupsoft.jpg') }}" width="250px" />
                  <p>Any query or suggestions, Please feal free to contact us.</p>

                  <div class="info-item d-flex">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                      <h4>Location:</h4>
                      <p>Sec - 5, Rohini, Delhi, IN - 110085</p>
                    </div>
                  </div><!-- End Info Item -->

                  <div class="info-item d-flex">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                      <h4>Email:</h4>
                      <p>lnd@devlupsoft.com</p>
                    </div>
                  </div><!-- End Info Item -->

                  <div class="info-item d-flex">
                    <i class="bi bi-phone flex-shrink-0"></i>
                    <div>
                      <h4>Call:</h4>
                      <p>+91 9693087681</p>
                    </div>
                  </div><!-- End Info Item -->

                </div>

              </div>

            <div class="col-lg-8">
                {{-- Change are required for lead generation --}}
                <form action="{{ url('quick-connect') }}" method="post" role="form" class="php-email-form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div id='quick-connect'>
                        <div class="row">
                            <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone" required>
                        </div>
                        {{-- <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div> --}}
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" placeholder="Message (if any)"></textarea>
                        </div>
                    </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    {{-- <div class="sent-message">Your message has been sent. Thank you!</div> --}}
                    <div class="sent-message"><i class="bi bi-box-arrow-in-left"></i>Please scan whatsApp group QR for updates. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit" id="enroll-now">Enroll Now</button></div>
                </form>
              </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Devlupsoft L&D</h3>
              <p>
                Noida UP, India, 110085<br><br>
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
          {{-- <div class="credits">
            <a href="https://lnd.devlupsoft.com/">Devlupsoft L&D</a>
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
