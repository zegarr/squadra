@extends('base.base')

@section('titulo', __('Contacto'))
@section('navegacion')
    <ol>
        <li><a href="./">{{__("Inicio")}}</a></li>
        <li>{{__("Contacto")}}</li>
    </ol>
@endsection
@section('contenido')
    <main id="main">
        <!-- ======= Nosotros Section ======= -->
        <section id="nosotros" class="nosotros">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex align-items-center" style="padding:200px 0px;space-around;flex-direction: column;">
                        <h2 class="text-center mb-3">{{__("Dejanos tu consulta, te responderemos a la brevedad.")}}</h2>
                            <h1 style="font-size:30px;font-family:'Open Sans', sans-serif;background-color: #fc5725;border-radius: 61px;padding: 6px 21px 6px 21px;">info@squadramd.com</h1>
                    </div>
                </div>

            </div>
        </section><!-- End nosotros Section -->
    </main><!-- End #main -->
@endsection
