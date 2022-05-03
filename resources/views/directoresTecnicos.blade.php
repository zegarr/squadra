@extends("base.base")

@section('titulo', 'Directores Técnicos.')
@section('navegacion')
<ol>
    <li><a href="./">Inicio</a></li>
    <li>Jugadores</li>
</ol>
@endsection
@section('contenido')
<main id="main">
    <section id="portfolio-details" class="portfolio-details">
        <div class="container">
            <h2>Management Deportivo</h2>
            <p>Nuestro negocio se basa en la representación de jugadores de fútbol, tanto profesionales como amateurs, y en el asesoramiento a clubes nacionales y extranjeros, y otras entidades deportivas. Por ello, Squadra diseñó su empresa sobre tres áreas interrelacionadas que abarcan todos los aspectos del negocio.
                <br><hr>Asistimos a los jugadores y entrenadores en el desarrollo de su carrera deportiva, y ofrecemos servicios en áreas claves a los clubes nacionales y extranjeros.
                <br><br>Squadra Management tiene a su cargo la gestión de la carrera de los representados y brinda toda una gama de soluciones y servicios a los clubes argentinos y extranjeros. Ofrecemos un servicio integral que abarca tres áreas claves para nuestros clientes: Negociaciones de contratos y transferencias, Explotación de imagen y Atención personalizada. Nuestro foco es asesorar a nuestros clientes y acercarlos a la concreción de sus sueños deportivos y económicos.<br></p>
            <div class="row gy-4">
                <div class="col-sm-12">
                    <h1>Delanteros</h1>
                </div>
                @foreach ($delanteros as $delantero)
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-lg-4">
                            <img class="img-fluid"
                                src="https://www.squadramd.com/wp-content/uploads/2014/03/ALAN-PERFIL-302x362.jpg">
                        </div>
                        <div class="col-lg-8">
                            <div class="portfolio-info">
                                <h3>{{ $delantero->obtenerNombreCompleto() }}</h3>
                                <ul>
                                    <li><strong>Posicion</strong>: {{ $delantero->obtenerNombrePosicion() }}</li>
                                    <li><strong>Nacimiento</strong>: {{ $delantero->obtenerFechaNacimiento() }}</li>
                                    <li><strong>Club Actual</strong>: {{ $delantero->clubActual }}</li>
                                    <li><strong>Numero Camiseta</strong>: {{ $delantero->nroCamiseta }}</li>
                                    <li><strong>Transfer Market</strong>: <a href="{{ $delantero->transferMarketLink }}" target="_blank">{{ $delantero->obtenerNombreCompleto() }}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection