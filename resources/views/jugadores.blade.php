@extends("base.base")

@section('titulo', 'Jugadores de fútbol')
@section('navegacion')
    <ol>
        <li><a href="./">Inicio</a></li>
        <li>Jugadores</li>
    </ol>
@endsection
@section('contenido')
    <main id="main">
        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-lg-4">
                                <img class="img-fluid" src="https://www.squadramd.com/wp-content/uploads/2014/03/ALAN-PERFIL-302x362.jpg">
                            </div>
                            <div class="col-lg-8">
                                <div class="portfolio-info">
                                    {{-- <h3>{{ __('jugadores.'.$jugadores[0]->posicion) }}</h3> --}}
                                    <h3>Nombre Jugador</h3>
                                    <ul>
                                        <li><strong>Category</strong>: Web design</li>
                                        <li><strong>Client</strong>: ASU Company</li>
                                        <li><strong>Project date</strong>: 01 March, 2020</li>
                                        <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-lg-4">
                                <img class="img-fluid"
                                    src="https://www.squadramd.com/wp-content/uploads/2014/03/ALAN-PERFIL-302x362.jpg">
                            </div>
                            <div class="col-lg-8">
                                <div class="portfolio-info">
                                    {{-- <h3>{{ __('jugadores.'.$jugadores[0]->posicion) }}</h3> --}}
                                    <h3>Nombre Jugador</h3>
                                    <ul>
                                        <li><strong>Category</strong>: Web design</li>
                                        <li><strong>Client</strong>: ASU Company</li>
                                        <li><strong>Project date</strong>: 01 March, 2020</li>
                                        <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
@endsection
