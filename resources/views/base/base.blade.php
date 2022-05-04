<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Squadra</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body style="background-color: #272936; color: #fff;">
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo">
                <h1><a href="./"><img style="max-height: 44px;" src="assets/img/logo1.png" alt=""></a></h1>
            </div>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="./">Inicio</a></li>
                    <li class="dropdown"><a href="javascript:void(0)"><span>Management Deportivo</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="{{ route('jugadores') }}">Jugadores de Fútbol</a></li>
                            <li><a href="{{ route('directoresTecnicos') }}">Equipo Técnico</a></li>
                        </ul>
                    </li>
                    <li><a href="#services">Servicios</a></li>
                    <li><a href="#portfolio">Noticias</a></li>
                    <li><a href="#pricing">Marketing Deportivo</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>@yield("titulo")</h2>
                @yield('navegacion')
            </div>
        </div>
    </section><!-- End Breadcrumbs -->
    <!-- Contenido -->
    @yield("contenido")
    <!-- End Contenido -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <img style="width: 150px;" src="./assets/img/sq_logo.png" alt="">
            <p>Empresa de Management y Marketing deportivo con mas de 20 años de experiencia en el mercado.</p>
            <div class="social-links">
                <a href="https://twitter.com/squadramd" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.instagram.com/squadramd" class="instagram"><i
                        class="bx bxl-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UC17OzsBYDlMt4lxJ-7hAdhQ" class="youtube"><i
                        class="bx bxl-youtube"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                <a href="#"><img style="width: 24px;padding-bottom: 5px;" class="img-fluid"
                        src="./assets/img/tm-1.png"></a>
            </div>
            <div class="credits">
                Desarrolado por <a href="https://www.socialsports.uy/">Social Sports Mkt.</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>
