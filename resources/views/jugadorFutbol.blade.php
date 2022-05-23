@extends('base.base')

@section('titulo', '')
@section('navegacion')
    <ol>
        <li><a href="{{route('home', app()->getLocale())}}">{{__("Inicio")}}</a></li>
        <li><a href="{{route("jugadores", app()->getLocale())}}">{{__("Jugadores")}}</a></li>
        <li>{{$jugador->obtenerNombreCompleto()}}</li>
    </ol>
@endsection
@section('contenido')
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <!-- ======= About Me ======= -->
            <div class="about-me container mb-5">

                <div class="section-title">
                    <h2>Perfil</h2>
                    <p>{{$jugador->obtenerNombreCompleto()}}
                        <a href="javascript:void(0)" class="btn btn-orange"
                            style="border-radius:45px;padding: 4px 9px 0px 7px;margin: 0px 0px 4px 7px;"><i
                                class="ri-share-fill"></i></a>
                    </p>
                </div>

                <div class="row" style="margin-bottom: 35px;">
                    <div class="col-lg-3 col-md-10 col-10" style="position: relative;">
                        <div class="row">
                            <div class="col-12" style="justify-content: center;display: flex;">
                                <img src="{{ asset('assets/img/players/terans.jpg') }}"
                                    style="border-radius: 40px;border-bottom: solid #ef6602 14px;width: 90%;"
                                    class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-2 col-2 pt-lg-0 pt-5"
                        style="display: flex;justify-content: center;align-items: center;flex-direction: column;">
                        <img src="{{ asset('assets/img/escudos/paranaense.png') }}" class="img-fluid mb-3">
                        <a href="{{$jugador->transferMarketLink}}" class="btn btn-orange"
                            style="border-radius:45px;margin-top: 10px;" target="_blank">
                            <img style="width: 24px;padding-bottom: 5px;" class="img-fluid"
                                src="{{ asset('assets/img/tm-1.png') }}"></a>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-1 pt-lg-0 pt-5">
                        <iframe style="border-radius: 20px;" width="100%" height="300px"
                            src="https://www.youtube.com/embed/Al33J0M7dzk" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="row content"
                    style="box-shadow: rgb(34 25 21 / 68%) 0px 13px 27px -5px, rgb(0 0 0 / 30%) 0px 8px 16px -8px;border-radius: 19px;padding: 26px;">
                    <div class="col-12 col-md-4">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Equipo Actual:</strong> <span>{{$jugador->clubActual}}</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Nacionalidad:</strong> <span>{{$jugador->nacionalidad}}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-4">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Nacimiento:</strong> <span>{{$jugador->obtenerFechaNacimiento()}}</span>
                            <li><i class="bi bi-chevron-right"></i> <strong>Posición:</strong> <span>{{$jugador->obtenerNombrePosicion()}}</span></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-4">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Estatura:</strong> <span>{{$jugador->altura}}m</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Pierna Hábil:</strong> <span>{{$jugador->obtenerNombrePiernaHabil()}}</span>
                            </li>

                        </ul>
                    </div>
                </div>

            </div><!-- End About Me -->

            <!-- ======= Testimonials ======= -->
            <div class="testimonials container">

                <div class="section-title">
                    <h2 style="font-size: 25px;">Galeria</h2>
                </div>

                <div class="testimonials-slider swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item" style="padding: 30px;border-radius: 25px;">
                                <img style="border-radius: 25px;" src="assets/img/players/terans2.jpg"
                                    class="img-fluid">
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item" style="padding: 30px;border-radius: 25px;">
                                <img style="border-radius: 25px;" src="assets/img/players/terans2.jpg"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item" style="padding: 30px;border-radius: 25px;">
                                <img style="border-radius: 25px;" src="assets/img/players/terans2.jpg"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item" style="padding: 30px;border-radius: 25px;">
                                <img style="border-radius: 25px;" src="assets/img/players/terans2.jpg"
                                    class="img-fluid">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item" style="padding: 30px;border-radius: 25px;">
                                <img style="border-radius: 25px;" src="assets/img/players/terans2.jpg"
                                    class="img-fluid">
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="owl-carousel testimonials-carousel">

                </div>

            </div><!-- End Testimonials  -->

        </section><!-- End About Section -->
    </main><!-- End #main -->
@endsection
