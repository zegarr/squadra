@extends("base.base")

@section('titulo', 'Management Deportivo')
@section('navegacion')
    <ol>
        <li><a href="./">Inicio</a></li>
        <li>Jugadores</li>
    </ol>
@endsection
@section('contenido')
    <main id="main">
        <section id="team" class="team">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <p class="titulos_sport">Nuestro negocio se basa en la representación de jugadores de fútbol, tanto
                            profesionales como
                            amateurs, y en el asesoramiento a clubes nacionales y extranjeros, y otras entidades deportivas.
                            Por ello, Squadra diseñó su empresa sobre tres áreas interrelacionadas que abarcan todos los
                            aspectos del negocio.
                            <br>
                        </p>
                    </div>
                </div>
                @foreach ($posiciones as $pos)
                    <div class="row mb-3">
                        <div class="section-title mb-3">
                            <h2 style="font-size: 25px;line-height: 20px;">{{ $pos }}</h2>
                        </div>
                        {{-- Carta --}}
                        @foreach ($jugadores[$pos] as $jug)
                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch justify-content-center">
                                <div class="member" data-aos="fade-up">
                                    <div class="member-img">
                                        <img src="assets/img/players/terans.jpg" class="img-fluid" alt="">
                                        <div class="social">
                                            <p>
                                                <span>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry
                                                    of
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
                                            <h4>Jugador nro. {{$jug->id}}</h4>
                                            <h6>#80</h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        {{-- Fin Carta --}}
                    </div>
                @endforeach
            </div>
        </section><!-- End Team Section -->
    </main><!-- End #main -->
@endsection
