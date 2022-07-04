@extends('base.base')

@section('titulo', __('Quienes Somos'))
@section('navegacion')
    <ol>
        <li><a href="./">{{ __('Inicio') }}</a></li>
        <li>{{ __('Quienes Somos') }}</li>
    </ol>
@endsection
@section('contenido')
    <main id="main">
        <!-- ======= Nosotros Section ======= -->
        <section id="nosotros" class="nosotros">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-10">
                        <p class="mb-5">{{ __('texto_quienes_somos') }}</p>
                    </div>
                    <div class="col-12 col-md-6 text-center mb-5">
                        <video width="100%" src="{{asset("assets/video/mar_vid.mp4")}}" controls></video>
                    </div>
                    <div class="col-12 col-md-6 text-center mb-5">
                        <video width="100%" src="{{asset("assets/video/squadra.mp4")}}" controls></video>
                    </div>
                    <div class="col-sm-8 offset-sm-2 col-xl-4 offset-xl-4">
                        <h1 class="text-center">{{__("Contacto")}}</h1>
                        <h1 class="text-center"
                            style="font-size:30px;font-family:'Open Sans', sans-serif;background-color: #fc5725;border-radius: 61px;padding: 6px 21px 6px 21px;">
                            <a href="mailto:info@squadramd.com" style="color: white;">info@squadramd.com</a>
                        </h1>
                    </div>
                </div>

            </div>
        </section><!-- End nosotros Section -->
    </main><!-- End #main -->
@endsection
