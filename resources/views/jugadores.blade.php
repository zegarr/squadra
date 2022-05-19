@extends('base.base')
@section('titulo', __('Management Deportivo'))
@section('navegacion')
    <ol>
        <li><a href="./">{{ __('Inicio') }}</a></li>
        <li>{{ __('Jugadores') }}</li>
    </ol>
@endsection
@section('contenido')
    <main id="main">
        <section id="team" class="team">
            <div class="container">
                @foreach ($posiciones as $pos)
                    <div class="row mb-3">
                        <div class="section-title mb-3">
                            <a href="#">
                                <h2 style="font-size: 25px;line-height: 20px;">{{ __($pos) }}</h2>
                            </a>
                        </div>
                        {{-- Carta --}}
                        @foreach ($arrJugadores[$pos] as $jug)
                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch justify-content-center">
                                <div class="member" data-aos="fade-up">
                                    <div class="member-img">
                                        <img src="{{ asset('assets/img/players/terans.jpg') }}" class="img-fluid"
                                            alt="">
                                        <div class="social">
                                            <p>Posicion: <span>Delantero</span></p>
                                            <p>Nacimiento: <span>27/01/1989</span></p>
                                            <p>Club Actual: <span>Atlético Paranaense</span></p>
                                        </div>
                                    </div>
                                    <a href="./jugadorFutbol" style="color:#fff;">
                                        <div class="member-info">
                                            <h4>Jugador nro. {{ $jug->id }}</h4>
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
