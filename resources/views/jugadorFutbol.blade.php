@extends("base.base")

@section('titulo', 'Jugador de fútbol')
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
    <div class="about-me container">

      <div class="section-title">
        <h2>Perfil</h2>
        <p>David Terans</p>
      </div>

      <div class="row" style="margin-bottom: 65px;">
        <div class="col-lg-3" style="position: relative;">
          <img src="assets/img/players/terans.jpg" style="border-radius: 40px;border-bottom: solid #ef6602 14px;"
            class="img-fluid" alt="">
          <a href="https://www.transfermarkt.es/david-terans/profil/spieler/261309" class="btn btn-orange" style="border-radius:45px;position: absolute;bottom: -50px;left: 65px; width: 200px;">Transfer Mareket</a>
        </div>
        <div class="col-lg-9 pt-4 pt-lg-0">
          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/Al33J0M7dzk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="row content">
        <div class="col-12 col-sm-3">
          <ul>
            <li><i class="bi bi-chevron-right"></i> <strong>Nacimiento:</strong> <span>11/08/1994</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Edad:</strong> <span>27</span></li>
            </li>
          </ul>
        </div>
        <div class="col-12 col-sm-3">
          <ul>
            <li><i class="bi bi-chevron-right"></i> <strong>Posición:</strong> <span>Delantero</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Equipo Actual:</strong> <span>Atletico Paranaense</span>
            </li>
          </ul>
        </div>
        <div class="col-12 col-sm-3">
          <ul>
            <li><i class="bi bi-chevron-right"></i> <strong>Estatura:</strong> <span>1.71m</span></li>
            <li><i class="bi bi-chevron-right"></i> <strong>Peso:</strong> <span>63kg</span></li>
          </ul>
        </div>
        <div class="col-12 col-sm-3">
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
        <h2>Galeria</h2>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium
                quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis
                quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor
                labore quem eram duis noster aute amet eram fore quis sint minim.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim
                dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item">
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa
                labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

      <div class="owl-carousel testimonials-carousel">

      </div>

    </div><!-- End Testimonials  -->

  </section><!-- End About Section -->
</main><!-- End #main -->
@endsection