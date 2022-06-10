@extends('layouts.App')

@section('title') Home @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/home.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/modals-user.css') }}" rel="stylesheet"/>

@endsection

@section('header')

	@include('layouts.HeaderHome')

@endsection

@section('content')

    <section class="home entero" id="hero">
	    <div class="content_icons">
	        <div class="content_icons-block">
	            <a href="#">
	                <i class="fab fa-facebook-f"></i>
	            </a>

	            <a href="#">
	                <i class="fab fa-instagram"></i>
	            </a>

	            <a href="#">
	                <i class="fab fa-twitter"></i>
	            </a>
	        </div>
	    </div>

	    <div class="medio">
	        <div class="home_full-screen">
	            <div class="block_content">
	                <h2 class="h2-pano">Homes and apartments all</h2>
	                <h1 class="h1">Orlando <br> Florida</h1>
	                <div class="block_a">
	                    <a href="{{ route('search') }}" class="btn-celest">See all Post</a>
	                </div>
	            </div>

                @livewire('home.cards-title')

	        </div>
	    </div>
	</section>

	<div class="entero section-places">
	    <div class="medio">
	        <div class="block_places">
	            <h3>Places to stay</h3>
	            <div class="book-form book-f_home">
                	@livewire('home.search-places')
	        	</div>
	        </div>
	    </div>
	</div>

	<div class="entero home-text">
	    <div class="medio">
	        <img src="{{ URL::asset('assets/img/logo-color.png') }}" alt="">
	        <div class="home-text_group">
	            <p class="n-paragraph">Morbi mollis vestibulum sollicitudin. Nunc in eros a justo facilisis rutrum. Aenean id ullamcorper libero. Vestibulum imperdiet nibh vel magna lacinia ultrices. Sed id interdum urna. Nam ac elit a ante commodo tristique. Duis lacus urna, condimentum a vehicula a, hendrerit ac nisi Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vulputate, tortor nec commodo ultricies, lectus nisl facilisis enim, vitae </p>
	            <p class="n-paragraph">Viverra urna nulla sed turpis. Nullam lacinia faucibus risus, a euismod lorem Donec maximus placerat tempor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse faucibus sed dolor eget posuere. Morbi mollis vestibulum sollicitudin. Nunc in eros a justo facilisis rutrum. Aenean id ullamcorper libero. Vestibulum imperdiet nibh vel magna lacinia ultrices. Sed id interdum urna.</p>
	        </div>
	    </div>
	</div>

    @livewire('home.cards-filters')

	<div class="wo_home entero">
	    <div class="medio">
	        <h3>Questions about hosting?</h3>
	        <div class="block_a">
	            <a href="/" class="btn-h">Answers and Tips</a>
	        </div>
	    </div>
	</div>

	<div class="entero">
	    <div class="medio">
	        <h2 class="h2">Most Popular</h2>
	    </div>
	</div>
	<div class="tabs_card tabs_card_xl entero">
		@livewire('home.cards-all')
	</div>

    @section('modals')

        {{-- Modal Favority --}}
        @include('home.modals.favorite')

    @endsection

@endsection


@section('script')

	<script src="{{ URL::asset('assets/js/places.js') }}"></script>
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
