@extends('base.base')

@section('titulo', __('Equipo Técnico'))
@section('navegacion')
    <ol>
        <li class="titulos_sport"><a href="./">{{ __('Inicio') }}</a></li>
        <li class="titulos_sport">{{ __('Equipo Técnico') }}</li>
    </ol>
@endsection
@section('contenido')
    <main id="main">
        <section id="team" class="team">
            <div class="container">
                <div class="row mb-3">
                    <div class="section-title mb-3">
                        <h2 style="font-size: 25px;">{{ __('Directores Técnicos') }}</h2>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch justify-content-center">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="assets/img/players/terans.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <p>
                                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry of
                                            the printing and typesetting industry.</span>
                                    </p>
                                    <br>
                                    <p>Posicion: <span>Delantero</span></p>
                                    <p>Edad: <span>27</span></p>
                                    <p>Club Actual: <span>Atlético Paranaense</span></p>
                                </div>
                            </div>
                            <a href="./jugadorFutbol" style="color:#fff;">
                                <div class="member-info">
                                    <h4>David Terans</h4>
                                    <h6>#80</h6>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch justify-content-center">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="assets/img/players/terans.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <p>
                                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry of
                                            the printing and typesetting industry.</span>
                                    </p>
                                    <br>
                                    <p>Posicion: <span>Delantero</span></p>
                                    <p>Edad: <span>27</span></p>
                                    <p>Club Actual: <span>Atlético Paranaense</span></p>
                                </div>
                            </div>
                            <a href="./jugadorFutbol" style="color:#fff;">
                                <div class="member-info">
                                    <h4>David Terans</h4>
                                    <h6>#80</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch justify-content-center">
                        <div class="member" data-aos="fade-up">
                            <div class="member-img">
                                <img src="assets/img/players/terans.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <p>
                                        <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry of
                                            the printing and typesetting industry.</span>
                                    </p>
                                    <br>
                                    <p>Posicion: <span>Delantero</span></p>
                                    <p>Edad: <span>27</span></p>
                                    <p>Club Actual: <span>Atlético Paranaense</span></p>
                                </div>
                            </div>
                            <a href="./jugadorFutbol" style="color:#fff;">
                                <div class="member-info">
                                    <h4>David Terans</h4>
                                    <h6>#80</h6>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->
    </main><!-- End #main -->
@endsection
