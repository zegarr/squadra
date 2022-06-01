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
                <div class="row mb-5 mt-3">
                    <div id="menu_posiciones" class="col-12 text-center" style="display: flex;justify-content: center;">
                        <a href="#Arqueros" class="menuJugadores">{{ __('Arqueros') }}</a>
                        <a href="#Defensores" class="menuJugadores">{{ __('Defensores') }}</a>
                        <a href="#Mediocampistas" class="menuJugadores">{{ __('Mediocampistas') }}</a>
                        <a href="#Delanteros" class="menuJugadores">{{ __('Delanteros') }}</a>
                    </div>
                </div>
                @foreach ($posiciones as $pos)
                    <div class="row mb-3" id="{{ $pos }}">
                        <div class="section-title mb-3">
                            <a href="#{{ $pos }}">
                                <h2 style="font-size: 25px;line-height: 20px;">{{ __($pos) }}</h2>
                            </a>
                        </div>
                        {{-- Carta --}}
                        @foreach ($arrJugadores[$pos] as $jug)
                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch justify-content-center">
                                <div class="member" data-aos="fade-up">
                                    <div class="member-img">
                                        <img style="height: 362px;" src="{{ asset('assets/img/players/'.$jug->name.'.jpg') }}" class="img-fluid"
                                            alt="">
                                        <div class="social">
                                            <p>Posicion: <span>{{ __($jug->obtenerNombrePosicion())}}</span></p>
                                            <p>Nacimiento: <span>{{$jug->obtenerFechaNacimiento()}}</span></p>
                                            <p>Club Actual: <span>{{$jug->clubActual}}</span></p>
                                        </div>
                                    </div>
                                    <a href="{{route("jugador", ["idioma"=> app()->getLocale(), "name" => $jug->name])}}" style="color:#fff;">
                                        <div class="member-info">
                                            <h4>{{$jug->obtenerNombreCompleto()}}</h4>
                                            <h6>#{{$jug->nroCamiseta}}</h6>
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
