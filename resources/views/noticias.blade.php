@extends('base.base')

@section('titulo', __('Noticias'))
@section('navegacion')
    <ol>
        <li><a href="./">{{ __('Inicio') }}</a></li>
        <li>{{ __('Noticias') }}</li>
    </ol>
@endsection
@section('contenido')
    <main id="main">
        <section id="noticias" class="noticias">
            <div class="container">
                <div class="row">
                    <div class="col-12" style="position:relative;margin-top: -135px;">
                        <div class="embedsocial-hashtag" data-ref="9edac33dc4a927163f78ad5cf33c598d921085dd"><a
                                class="feed-powered-by-es" href="https://embedsocial.com/social-media-aggregator/"
                                target="_blank" title="Powered by EmbedSocial">Powered by EmbedSocial<span>→</span></a>
                        </div>
                        <script>
                            (function(d, s, id) {
                                var js;
                                if (d.getElementById(id)) {
                                    return;
                                }
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "https://embedsocial.com/cdn/ht.js";
                                d.getElementsByTagName("head")[0].appendChild(js);
                            }(document, "script", "EmbedSocialHashtagScript"));
                        </script>
                        <div style="background-color:#272936;height: 74px;width: 100%;position: absolute;bottom: 0px;"></div>
                    </div>
                </div>
            </div>
        </section><!-- End Team Section -->
    </main><!-- End #main -->
@endsection
