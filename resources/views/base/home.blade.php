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
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
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
    <header id="header" class="fixed-top d-flex align-items-center  header-transparent titulos_sport"
        style="    background-color: #272936f0;outline: solid #ef660294 3px;">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo">
                <h1><a href="./"><img style="max-height: 44px;" src="assets/img/logo1.png" alt=""></a></h1>
            </div>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="./">{{ __('Inicio') }}</a></li>
                    <li class="dropdown"><a
                            href="javascript:void(0)"><span>{{ __('Management Deportivo') }}</span>
                            <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a
                                    href="{{ route('jugadores', app()->getLocale()) }}">{{ __('Jugadores de Fútbol') }}</a>
                            </li>
                            <li><a
                                    href="{{ route('directoresTecnicos', app()->getLocale()) }}">{{ __('Equipo Técnico') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ route('servicios', app()->getLocale()) }}">{{ __('Servicios') }}</a></li>
                    <li><a href="{{ route('noticias', app()->getLocale()) }}">{{ __('Noticias') }}</a></li>
                    <li><a
                            href="{{ route('marketingDeportivo', app()->getLocale()) }}">{{ __('Marketing Deportivo') }}</a>
                    </li>
                    <li><a href="{{ route('contacto', app()->getLocale()) }}">{{ __('Contacto') }}</a></li>
                    <li><a href="{{ route('home', 'es') }}"><img
                                src='{{ asset('assets/img/flags/es.png') }}'
                                style="width:30px;border-radius:15px;"></a>
                    </li>
                    <li><a href="{{ route('home', 'en') }}"><img
                                src='{{ asset('assets/img/flags/en.jpg') }}'
                                style="width:30px;border-radius:15px;"></a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->
    @yield('contenido')
    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="./js/app.js"></script>
    <script src="./js/home.js"></script>
</body>

</html>
