@extends("base.base")

@section('titulo', '')
@section('navegacion')
<ol>
  <li><a href="./">Inicio</a></li>
  <li><a href="./jugadores">Jugadores</a></li>
  <li>Jugador de Fútbol</li>
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
        <p>David Terans</p>
      </div>

      <div class="row" style="margin-bottom: 65px;">
        <div class="col-lg-3 col-md-6" style="position: relative;">
          <div class="row">
            <div class="col-12" style="justify-content: center;display: flex;">
              <img src="assets/img/players/terans.jpg" style="border-radius: 40px;border-bottom: solid #ef6602 14px;width: 90%;"
            class="img-fluid" alt="">
            </div>
            <div class="col-12" style="justify-content: center;display: flex;">
              <a href="https://www.transfermarkt.es/david-terans/profil/spieler/261309" class="btn btn-orange" style="border-radius:45px;margin-top: 10px;" target="_blank">Transfer Mareket</a>
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-md-6 pt-lg-0 pt-5">
          <iframe style="border-radius: 20px;" width="100%" height="380px" src="https://www.youtube.com/embed/Al33J0M7dzk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="row content" style="box-shadow: rgb(34 25 21 / 68%) 0px 13px 27px -5px, rgb(0 0 0 / 30%) 0px 8px 16px -8px;border-radius: 19px;padding: 26px;">
        <div class="section-title mb-2">
          <h2>Más Info.</h2>
        </div>
        <div class="col-12 col-md-4">
          <ul>
            <li><i class="bi bi-chevron-right"></i> <strong>Nacimiento:</strong> <span>11/08/1994</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Edad:</strong> <span>27</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Posición:</strong> <span>Delantero</span></li>
          </ul>
        </div>
        <div class="col-12 col-sm-4">
          <ul>
            <li><i class="bi bi-chevron-right"></i> <strong>Equipo Actual:</strong> <span>Atletico Paranaense</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Estatura:</strong> <span>1.71m</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Peso:</strong> <span>63kg</span></li>
          </ul>
        </div>
        <div class="col-12 col-sm-4">
          <ul>
            <li><i class="bi bi-chevron-right"></i> <strong>Pierna Hábil:</strong> <span>Izquierda</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Nacionalidad:</strong> <span>Uruguayo</span></li>
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
              <img style="border-radius: 25px;" src="assets/img/players/terans2.jpg" class="img-fluid">
            </div>
          </div>
          
          <div class="swiper-slide">
            <div class="testimonial-item" style="padding: 30px;border-radius: 25px;">
              <img style="border-radius: 25px;" src="assets/img/players/terans2.jpg" class="img-fluid">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-item" style="padding: 30px;border-radius: 25px;">
              <img style="border-radius: 25px;" src="assets/img/players/terans2.jpg" class="img-fluid">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-item" style="padding: 30px;border-radius: 25px;">
              <img style="border-radius: 25px;" src="assets/img/players/terans2.jpg" class="img-fluid">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-item" style="padding: 30px;border-radius: 25px;">
              <img style="border-radius: 25px;" src="assets/img/players/terans2.jpg" class="img-fluid">
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