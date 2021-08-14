<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>EO ONLINE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="Bocor/assets/img/favicon.png" rel="icon">
    <link href="Bocor/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link type="text/css" rel="stylesheet" href="/tmpl_admin/css/components.css" />
    <link type="text/css" rel="stylesheet" href="/tmpl_admin/css/custom.css" />
    <link type="text/css" rel="stylesheet" href="/tmpl_admin/vendors/circliful/css/jquery.circliful.css">
    <link href="Bocor/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="Bocor/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="Bocor/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="Bocor/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="Bocor/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="Bocor/assets/vendor/aos/aos.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/tmpl_admin/vendors/animate/css/animate.min.css" />
    <link href="Bocor/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Bocor - v2.2.1
  * Template URL: https://bootstrapmade.com/bocor-bootstrap-template-nice-animation/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="/">EO<span>Online</span></a></h1>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    @if (!Auth::guard('klien')->check())
                        <li><a href="{{ route('login.index') }}">Login</a></li>
                        <li><a href="{{ route('register.index') }}">Register</a></li>

                    @endif

                    @if (Auth::guard('klien')->check())
                        <li><a href="{{ route('pendaftaran.klien.index') }}">Pendaftaran</a></li>
                        <li><a href="{{ route('pendaftaran.klien.status') }}">Status Pendaftaran</a></li>
                        <li><a href="{{ route('logout') }}">Logout</a></li>

                    @endif
                    <li><a href="{{ route('info.pendaftaran') }}">Informasi Pendaftaran</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row d-flex align-items-center" style="height: 90vh">
                <div class=" col-lg-12 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right" style="text-align: left">

                    <br>
                    <p style="color: white"> {!! htmlspecialchars_decode(stripslashes($data->desc)) !!}</p>

                </div>
                {{-- <div style="padding: 100px" class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                    <img src="Bocor/assets/img/0000028.png" class="img-fluid" alt="">
                </div> --}}
            </div>
        </div>

    </section><!-- End Hero -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="Bocor/assets/vendor/jquery/jquery.min.js"></script>
    <script src="Bocor/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Bocor/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="Bocor/assets/vendor/php-email-form/validate.js"></script>
    <script src="Bocor/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="Bocor/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="Bocor/assets/vendor/venobox/venobox.min.js"></script>
    <script src="Bocor/assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="Bocor/assets/js/main.js"></script>

</body>

</html>
