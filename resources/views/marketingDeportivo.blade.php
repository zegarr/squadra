@extends('base.base')

@section('titulo', __('Marketing Deportivo'))
@section('navegacion')
    <ol>
        <li><a href="./">{{ __('Inicio') }}</a></li>
        <li>{{ __('Marketing Deportivo') }}</li>
    </ol>
@endsection
@section('contenido')
    <main id="main">
        <section id="marketing-dep" class="marketing-dep pt-0">
            <div class="container">
                <div class="row">
                    @foreach ($marketingPosts as $mp)
                        <div class="col-lg-12 col-md-12 mt-3" data-aos="fade-up">
                            <div class="icon-box row">
                                <div class="image-marketing-dep col-lg-4 col-sm-12"><img
                                        src="{{ asset('assets/img/md/' . $mp->id . '.jpg') }}" alt=""></div>
                                <div class="cont-title col-lg-8 col-sm-12">
                                    <h4 class="title"><a href="Javascript:void(0);">{{ $mp->titulo }}</a></h4>
                                    <p class="description">{{ $mp->cuerpo }}</p>
                                    <div style="display: flex;justify-content: flex-end;">
                                        <img src="{{ asset('assets/img/md/iconos/' . $mp->icono . '.jpg') }}"
                                            style="width: 60px;border-radius: 10px;" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Services Section -->
    </main><!-- End #main -->
@endsection
