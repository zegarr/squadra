<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Squadra</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body style="background-color: #272936; color: #fff;">
    <!-- ======= Header ======= -->
    <header id="header" style="background-color: rgb(39 41 54);"
        class="fixed-top d-flex align-items-center  header-transparent titulos_sport">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo">
                <h1><a href="{{route("home", app()->getLocale())}}"><img style="max-height: 44px;" src="{{ asset('assets/img/logo1.png') }}" alt=""></a>
                </h1>
            </div>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{route("home", app()->getLocale())}}">{{ __('Inicio') }}</a></li>
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

                    <li><a href="{{ Request::segment(2) == 'jugador' ? route("jugador", ['es', Request::segment(3)]) : route(Request::segment(2), 'es') }}"><img src='{{ asset("assets/img/flags/es.png") }}' style="width:30px;border-radius:15px;"></a>
                    </li>
                    <li><a href="{{ Request::segment(2) == 'jugador' ? route("jugador", ['en', Request::segment(3)]) : route(Request::segment(2), 'en') }}"><img src='{{ asset("assets/img/flags/en.jpg") }}' style="width:30px;border-radius:15px;"></a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center titulos_sport">
                <h2 style="font-weight: 700;">@yield('titulo')</h2>
                @yield('navegacion')
            </div>
        </div>
    </section><!-- End Breadcrumbs -->
    <!-- Contenido -->
    @yield('contenido')
    <!-- End Contenido -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <img style="width: 150px;" src="./assets/img/sq_logo.png" alt="">
            <p>{{ __('texto_footer', ["year"=> (string)intval(date("y"))-1 ]) }}</p>
            <div class="social-links">
                <a href="https://twitter.com/squadramd" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.instagram.com/squadramd" class="instagram"><i
                        class="bx bxl-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UC17OzsBYDlMt4lxJ-7hAdhQ" class="youtube"><i
                        class="bx bxl-youtube"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                <a href="#"><img style="width: 24px;padding-bottom: 5px;" class="img-fluid"
                        src="{{ asset('assets/img/tm-1.png') }}""></a>
            </div>
            <div class=" credits">
                    {{ __('Desarrolado por') }} <a href="https://www.socialsports.uy/">Social Sports Mkt.</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));</script>
</body>

</html>
