@extends("base.base")

@section('titulo', '')
@section('navegacion')
<ol>
    <li><a href="./">Inicio</a></li>
    <li>Equipo Técnico</li>
</ol>
@endsection
@section('contenido')
<main id="main">
    <section id="team" class="team">
        <div class="container">
            <div class="row mb-3">
                <div class="section-title mb-3">
                    <h2 style="font-size: 25px;">Directores Técnicos</h2>
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
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch justify-content-center" style="z-index: 0;">
                    <div class="member2" data-aos="fade-up" style="z-index: 0;">
                        <div class="content2">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s.</p>
                            <h2>
                                <div style="display:flex;gap: 60px;">
                                    <p><span>Posicion:<br></span>Delantero</p>
                                    <p><span>Edad:<br></span>27</p>
                                </div>
                                <p><span>Club Actual:<br></span>Atlético Paranaense</p>
                            </h2>
                        </div>
                        <div class="member-img">
                            <img src="assets/img/players/terans.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>David Terans</h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Team Section -->
</main><!-- End #main -->
@endsection