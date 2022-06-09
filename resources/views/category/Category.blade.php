@extends('layouts.App')
@section('title') Category @endsection
@section('css')

    <link href="{{ URL::asset('assets/css/home.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/category.css') }}" rel="stylesheet" />

@endsection
@section('content')
    <div class="tabs_card tabs_card_xxl entero" style="margin: 0 0 100px;">
        <div class="medio">
            @livewire('category.cardfirst')
            {{-- los 3 primeros de las categories --}}
        </div>
    </div>
    <div class="entero">
        <div class="medio">
            <h2 class="h2">Most Popular</h2>
        </div>
    </div>
    {{-- <div class="tabs entero">
        <div class="medio">
            @livewire('category-tabs-items-select')
        </div>  
    </div> --}}
    <div>
        @livewire('category.cardfilter')
    </div>
    {{-- <div class="tabs_card entero">
        <div class="medio"> 
			@livewire('category-cards')
        </div>  
    </div> --}}

    <div class="entero mt-100">
        <div class="medio">
            <h2 class="h2">New Hotel</h2>
        </div>
    </div>

    <div class="tabs_card tabs_card_xl entero">
        <div class="medio">
            @livewire('category.cardhotel')
        </div>
    </div>

    <div class="wo_home entero">
        <div class="medio">
            <h3>Questions about hosting?</h3>
            <div class="block_a">
                <a href="/" class="btn-h">Answers and Tips</a>
            </div>
        </div>
    </div>

    <div class="entero mt-100">
        <div class="medio">
            <h2 class="h2">With Pool</h2>
        </div>
    </div>

    <div class="tabs_card entero mt-80">
        <div class="medio">
            @livewire('category.cardpool')
        </div>
    </div>
@endsection


@section('script')

	{{-- <script src="{{ URL::asset('assets/js/places.js') }}"></script> --}}
	<script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/slider_home.js') }}"></script>
    <script src="{{ URL::asset('assets/js/modals-min.js') }}"></script>

    <script>
		window.addEventListener('closedModalFavority', event => {
	        $(".container_user-host, .container_admin-host, .container_preview_guests_pay").hide();
    		$(".page-category").css({'overflow': 'auto'});
		})
        $(".nav__links-txt .li__links-txt .tabs_items").click(function(){
            $(".tabs_items").removeClass("active_tabs");
            $(this).addClass("active_tabs");
        });
	</script>

@endsection