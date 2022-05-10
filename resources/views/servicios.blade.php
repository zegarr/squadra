@extends("base.base")

@section('titulo', 'Servicios')
@section('navegacion')
    <ol>
        <li><a href="./">Inicio</a></li>
        <li>Servicios</li>
    </ol>
@endsection
@section('contenido')
    <main id="main">
        <section id="servicios" class="servicios">
            <div class="container">
                <div class="section-title mb-3">
                    <h2 style="font-size: 25px;">Asesoramiento integral para el Deportista</h2>
                </div>
                <ul class="nav nav-tabs row d-flex">
                    <li class="nav-item col-12 col-md-6 col-lg-4 mb-3" data-aos="zoom-in">
                        <a class="nav-link active" data-bs-toggle="tab">
                            <i class="ri-football-fill col-3" style="text-align: center;"></i>
                            <h4 class=" d-lg-block col-9" style="text-align: center;">AGENTE AFA</h4>
                        </a>
                    </li>
                    <li class="nav-item col-12 col-md-6 col-lg-4 mb-3" data-aos="zoom-in" data-aos-delay="100">
                        <a class="nav-link active" data-bs-toggle="tab">
                            <i class="ri-restaurant-fill col-3" style="text-align: center;"></i>
                            <h4 class=" d-lg-block col-9" style="text-align: center;">NUTRICION</h4>
                        </a>
                    </li>
                    <li class="nav-item col-12 col-md-6 col-lg-4 mb-3" data-aos="zoom-in" data-aos-delay="200">
                        <a class="nav-link active" data-bs-toggle="tab">
                            <i class="ri-psychotherapy-fill col-3" style="text-align: center;"></i>
                            <h4 class=" d-lg-block col-9" style="text-align: center;">PSICOLOGíA</h4>
                        </a>
                    </li>
                    <li class="nav-item col-12 col-md-6 col-lg-4 mb-3" data-aos="zoom-in" data-aos-delay="300">
                        <a class="nav-link active" data-bs-toggle="tab">
                            <i class="ri-bar-chart-2-fill col-3" style="text-align: center;"></i>
                            <h4 class=" d-lg-block col-9" style="text-align: center;">ASESORAMIENTO FINANCIERO, LEGAL
                                Y CONTABLE</h4>
                        </a>
                    </li>
                    <li class="nav-item col-12 col-md-6 col-lg-4 mb-3" data-aos="zoom-in" data-aos-delay="300">
                        <a class="nav-link active" data-bs-toggle="tab">
                            <i class="ri-chat-quote-fill col-3" style="text-align: center;"></i>
                            <h4 class=" d-lg-block col-9" style="text-align: center;">SOPORTE DE REDES SOCIALES &
                                COMUNICACION Y MARKETING</h4>
                        </a>
                    </li>
                    <li class="nav-item col-12 col-md-6 col-lg-4 mb-3" data-aos="zoom-in" data-aos-delay="300">
                        <a class="nav-link active" data-bs-toggle="tab">
                            <i class="ri-refund-2-fill col-3" style="text-align: center;"></i>
                            <h4 class=" d-lg-block col-9" style="text-align: center;">SPONSORS</h4>
                        </a>
                    </li>
                    <li class="nav-item col-12 col-md-6 col-lg-4 mb-3" data-aos="zoom-in" data-aos-delay="300">
                        <a class="nav-link active" data-bs-toggle="tab">
                            <i class="ri-group-fill col-3" style="text-align: center;"></i>
                            <h4 class=" d-lg-block col-9" style="text-align: center;">ASISTENCIA LOGISTICA Y
                                RELOCATION FAMILIAR</h4>
                        </a>
                    </li>
                    <li class="nav-item col-12 col-md-6 col-lg-4 mb-3" data-aos="zoom-in" data-aos-delay="300">
                        <a class="nav-link active" data-bs-toggle="tab">
                            <i class="ri-team-fill col-3" style="text-align: center;"></i>
                            <h4 class=" d-lg-block col-9" style="text-align: center;">INTERMEDIACIONES</h4>
                        </a>
                    </li>
                    <li class="nav-item col-12 col-md-6 col-lg-4 mb-3" data-aos="zoom-in" data-aos-delay="300">
                        <a class="nav-link active" data-bs-toggle="tab">
                            <i class="ri-shield-fill col-3" style="text-align: center;"></i>
                            <h4 class=" d-lg-block col-9" style="text-align: center;">SCOUTING PARA CLUBES</h4>
                        </a>
                    </li>
                </ul>
            </div>
        </section><!-- End Team Section -->
    </main><!-- End #main -->
@endsection
