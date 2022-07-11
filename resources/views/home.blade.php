@extends('base.home')

@section('contenido')
    <div id="videoBack"></div>
    <section id="hero" style="height: 100vh;" class="d-flex flex-column justify-content-center align-items-center">
        <h2 class="animate__animated animate__fadeInDown" style="text-align: center"><a style="color:#fc5725;"
                href="javascript:void(0);">#</a><span class="tituloPrincipal"
                style="text-shadow: 0px 0px 50px rgb(0 0 0);"/span></h2>
        <div id="footer" style="background-color: transparent;position: absolute;bottom: 0px;padding: 0px;">
            <div class="container">
                <div class="social-links">
                    <a href="https://twitter.com/squadramd" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="https://www.instagram.com/squadramd" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UC17OzsBYDlMt4lxJ-7hAdhQ" class="youtube"><i
                            class="bx bxl-youtube"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    <a href="https://www.transfermarkt.es/squadra-management-deportivo/beraterfirma/berater/8110"><img
                            style="width: 24px;padding-bottom: 5px;" class="img-fluid"
                            src="{{ asset('assets/img/tm-1.png') }}"></a>
                </div>
            </div>
        </div><!-- End Footer -->
    </section>
@endsection
