@extends('layouts.App')

@section('title') Listings Show @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderAuth')

@endsection

@section('content')
    
    <section class="entero c_linsting" style="margin-top: 50px;">
        <div class="medio">
            <div class="c_listing-post fx">

                {{-- Bar All Listin Right --}}
                @livewire('listing.details.content-right', ['listing' => $listing])

                @livewire('listing.details.content-left', ['listing' => $listing])

            </div>
        </div>
    </section>
@endsection

@section('script')
     <script>

         $(".click_x_anuncio").click(function() {
            $(".anuncio_start_hosting").hide();
        });
        document.addEventListener("DOMContentLoaded", () => {
            Livewire.hook('component.initialized', (component) => {
            })

           Livewire.hook('element.updated', (el, component) => {
                $(".input_cant_view").keyup(function() {
                    $(this).parents(".show_form_input ._flfpc").find(".views_num").text($(this).val().length);
                });
                $(".click_minumum_nights").click(function() {
                    $(".show_minimum_nights").css({'display': 'flex'});
                    $(".click_minumum_nights").css({'display': 'none'});
                });


           })
        });

     </script>
@endsection
