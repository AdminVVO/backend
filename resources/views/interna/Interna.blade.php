@extends('layouts.App')

@section('title') Interna @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/interna.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />

@endsection
@if (isset($publicacion))
	

@section('content')
    <section class="entero">
        <div class="medio">
            <div class="content_international">
                <h1 class="h2_publish">{{ $publicacion->name }}</h1>

				{{-- ENCABEZADO DE LA PUBLICACION --}}
                @include('interna.internaencabezado',$publicacion)
				{{-- FIN ENCABEZADO DE LA PUBLICACION --}}
                {{-- FOTOS DE LA PUBLICACION --}}
                @include('interna.internafotos',$publicacion)
                {{-- FIN DE FOTOS --}}

                {{-- INFORMACION DE LA PUBLICACION --}}
                <div class="content-info-hosted">
                    <main class="site-content">
						{{-- INFORMACION PRINCIPAL --}}
                        @include('interna.internainfoprincipal',$publicacion)
						{{-- FIN INFORMACION PRINCIPAL --}}
                        <div class="_line-hr" style="border-top-color: #E3EDF3;"></div>

                       {{-- fotos de los cuartos --}}
					   @include('interna.internafotoscuartos')
                       {{-- fin fotos de los cuartos --}}

                        <div class="_line-hr" style="border-top-color: #E3EDF3;"></div>

						{{-- QUE OFRECE LA PUBLICACION --}}
						@include('interna.internaofrece',$publicacion)
						{{--FIN QUE OFRECE LA PUBLICACION --}}

                        <div class="_line-hr" style="border-top-color: #E3EDF3;"></div>

						{{-- DIAS SEPARADOS  --}}
                        <div class="content-user-cal">
                            <h2 class="h2-guests">9 nights in Orlando</h2>
                            <div class="_txtec">Dec 1, 2021 - Dec 10, 2021</div>
                        </div>
						{{-- FIN DIAS SEPARADOS  --}}
                        <div class="_line-hr" style="border-top-color: #E3EDF3; margin: 51px 0 43px;"></div>

                        <div class="content-user-nvl">
                            <div class="content-starg">
                                <i class="fas fa-star"></i>
                                <span class="num-starg"> 4.89</span>
                                <span class="num-tg"> (57 reviews)</span>
                            </div>

                            <div class="block-flex">
                                {{-- PUNTUACION DE LA PUBLICACION --}}
								@include('interna.internapuntuacion')
								{{-- FIN PUNTUACION DE LA PUBLICACION --}}

                                {{-- COMENTARIOS DE LA PUBLICACION --}}
                                @include('interna.internacomentario',$comentario)
								{{-- FIN COMENTARIOS DE LA PUBLICACION --}}
                            </div>
                        </div>

                        <div class="_line-hr" style="border-top-color: #E3EDF3; margin: 49px 0 43px;"></div>

                        <div class="content-user-lclmp">
                          
							<h2 class="h2-guests">Where you'll be</h2>
							 {{-- mapa publicacion --}}
                            @include('interna.internamapa',$publicacion)
							 {{-- fin mapa publicacion --}}
                        </div>

                        <div class="_line-hr" style="border-top-color: #E3EDF3; margin: 50px 0 50px;"></div>

                        <div class="content-user-if-flex">
                           {{-- INFO USER DE LA PUBLICACION --}}
							@include('interna.internainfouser')
							{{-- FIN INFO USER DE LA PUBLICACION --}}
                        </div>

                        <div class="content-user-ics">
                            <div class="h2-guests" style="margin-bottom: 24px;">Where you'll be</div>
							{{-- INFORMACION EXTRA DE LA PUBLICACION --}}
                            @include('interna.internainfoextra')
							{{-- INFORMACION EXTRA DE LA PUBLICACION --}}
                        </div>
						{{-- POLITICAS DE CANCELACION  --}}
                        <div class="msgaround">
                            <div class="_wcusermsg">
                                <span class="_txteh" style="display: block; margin-bottom: 8px;">Cancellation
                                    policy</span>
                                <span class="_txtec">Add your trip dates to get the cancellation details for this
                                    stay.</span>
                            </div>
                            <button class="btn-celest">Add dates</button>
                        </div>
						{{-- FIN POLITICAS DE CANCELACION  --}}
                    </main>
                    {{-- FORMULARIO PARA RESERVA --}}
                    <aside class="content-aside_prec">
                        <div class="content_prec flex">
                            <div class="block_prec-res">
                                <span class="opac">$/345</span>
                                <span class="prec_black">$/446</span>
                                <span class="txt_night">/night</span>
                            </div>

                            <div class="content-star">
                                <i class="fas fa-star"></i>
                                <span class="num-start"> 4.89</span>
                                <span class="num-total"> (57 reviews)</span>
                            </div>
                        </div>

                        <form action="">
                            <div class="_flfpc">
                                <div class="block_date">
                                    <div class="txt-check-in">Check-In</div>
                                    <input type="date" class="date_check">
                                </div>

                                <div class="block_date">
                                    <div class="txt-check-in">Checkout</div>
                                    <input type="date" class="date_check">
                                </div>
                            </div>
                            <div class="txt-check-in" style="margin-top: 20px;">Guests</div>
                            <div class="selected-modal">
                                <select name="" id="">
                                    <option value="1">3 guests</option>
                                    <option value="2">3 guests (+2)</option>
                                    <option value="3">3 guests (+3</option>
                                </select>
                                <i class="fas fa-chevron-down" aria-hidden="true"></i>
                            </div>
                            <div class="block-a rscrm" style="margin: 23px 0 9px;">
                                <a href="#" class="btn-celest" style="padding: 16px 47px;">Reserve</a>
                            </div>
                            <div class="_txtprivat" style="text-align: center;">You won't be charged yet</div>

                            <div class="_cns">
                                <span class="f-cth">
                                    <div class="_txtec">S/554 x 9 nights</div>
                                    <div class="_txtec">$/4,990</div>
                                </span>

                                <span class="f-cthdes">
                                    <div class="_txtecred">Weekly discount</div>
                                    <div class="_txtecred">-$/974</div>
                                </span>

                                <span class="f-cth">
                                    <div class="_txtec">Cleaning fee</div>
                                    <div class="_txtec">$/238</div>
                                </span>

                                <span class="f-cth">
                                    <div class="_txtec">Service fee</div>
                                    <div class="_txtec">$/601</div>
                                </span>

                                <span class="f-cth">
                                    <div class="_txtec">Occupancy taxes and fees</div>
                                    <div class="_txtec">$/532</div>
                                </span>
                            </div>

                            <span class="t-cth">
                                <div class="_txtect">Total</div>
                                <div class="_txtect">$/5,387</div>
                            </span>
                        </form>
                    </aside>
					{{-- FIN FORMULARIO PARA RESERVA --}}
                </div>
            </div>

			{{-- RESERVA VERSION MOVIL --}}
          
			@include('interna.internareservamovil')
			{{-- FIN RESERVA VERSION MOVIL --}}
            
        </div>
    </section>

@endsection


@section('script')

    <script src="{{ URL::asset('assets/js/modals-interna.js') }}"></script>
    <script src="{{ URL::asset('assets/js/modals-gallerys.js') }}"></script>
    <script src="{{ URL::asset('assets/js/modals-reserve.js') }}"></script>
    <script src="{{ URL::asset('assets/js/modals-all_amenitles.js') }}"></script>
    <script>
        lightbox(document.getElementById('gallery-container'))
    </script>

@endsection
@else
no hay datos
@endif
