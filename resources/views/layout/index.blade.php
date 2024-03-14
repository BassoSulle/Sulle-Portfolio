<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('page_title') -Emanuel Sulle</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center" >
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between" >




      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <div class="logo-container" style="position: fixed; top: 0; left: 0; padding: 10px; width: 100%; background-color: #000000; z-index: 1000;">
        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            {{-- <img src="assets/img/logo.png" alt=""> --}}
            <h1><span style="color:rgba(238, 237, 236, 0.982)">Selle,</span><span style="color:#feb900">Emmanuel</span></h1>
        </a>
    </div>

      <nav id="navbar" class="navbar" style="position: fixed; top: 0; right: 0; width: 100%; margin-right:2cm; background-color: #000000; z-index: 1000; text-align: right;">
        <ul style="list-style: none; padding: o; margin: 0; position: absolute; right: 0; top: 0;">
          {{-- <li><a href="" class="active">Home</a></li> --}}
          <li><a href="{{route('aboutme')}}" style="color:#feb900">About Me</a></li>
          <li><a href="{{route('articles')}}" style="color:#feb900">Articles</a></li>
          <li><a href="{{route('books')}}" style="color:#feb900">Books</a></li>
          <li><a href="{{route('projects')}}" style="color: #feb900">Projects</a></li>
          <li><a href="{{route('researches')}}" style="color: #feb900">Researches</a></li>
          <li><a href="{{route('contact')}}" style="color: #feb900">Contact</a></li>
            <ul>

                {{-- <a href="index.html" class="logo d-flex align-items-center" style="text-align: right; top: 0; position: absolute; left: 0;">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                   <!-- <img src="assets/img/logo.png" alt="">-->
                    <h1><span style="color:rgba(238, 237, 236, 0.982)">Sulle,</span><span style="color:#feb900">Emmanuel</span></h1>
                  </a> --}}

              {{-- <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> --}}
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


@yield('content')


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3><span style="color:rgba(238, 237, 236, 0.982)">Emmanuel </span><span style="color:#feb900">Sulle</span></h3>
              <p>
                Kisongo<br>
                Kisongo Arusha<br><br>
                <strong>Phone:</strong> +225 742 333 575<br>
                <strong>Email:</strong> sulle.emmanuel@gmail.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          {{-- <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="">About Me</a></li>
              <li><a href="">Services</a></li>
              <li><a href="">Project</a></li>
              <li><a href="">Contact</a></li>
            </ul>
          </div><!-- End footer links column--> --}}

          {{-- <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="#">Road Marking</a></li>
              <li><a href="#">Traffic Signage </a></li>
              <li><a href="#">Road Finishing Specialists</a></li>
            </ul>
          </div><!-- End footer links column--> --}}

        </div>
      </div>
    </div>

    {{-- <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>CarbonTanzania</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
          <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        </div>
      </div>
    </div> --}}

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

{{-- @livewireScripts --}}

</body>

</html>
