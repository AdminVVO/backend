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

	<section class="home entero skeleton" id="hero">
	    <div class="content_icons">
	        <div class="content_icons-block">
	            <a href="#" class="skeleton skeleton_icon_share">
	                <i class="fab fa-facebook-f"></i>
	            </a>

	            <a href="#" class="skeleton skeleton_icon_share">
	                <i class="fab fa-instagram"></i>
	            </a>

	            <a href="#" class="skeleton skeleton_icon_share">
	                <i class="fab fa-twitter"></i>
	            </a>
	        </div>
	    </div>

	    <div class="medio">
	        <div class="home_full-screen">
	            <div class="block_content">
	                <h2 class="h2-pano skeleton skeleton_txt">Homes and apartments all</h2>
	                <h1 class="h1 skeleton skeleton_txt">Orlando <br> Florida</h1>
	                <div class="block_a">
	                    <a href="{{ route('search') }}" class="btn-celest skeleton">See all Post</a>
	                </div>
	            </div>

	            @livewire('home.cards-title')

	        </div>
	    </div>
	</section>

	<div class="entero section-places">
	    <div class="medio">
	        <div class="block_places">
	            <h3 class="skeleton skeleton_txt">Places to stay</h3>
	            <div class="book-form">
                	@livewire('home.search-places')
	            </div>
	        </div>
	    </div>
	</div>

	<div class="entero home-text">
	    <div class="medio">
	        <img loading="lazy" src="{{ URL::asset('assets/img/logo-color.png') }}" alt="">
	        <div class="home-text_group">
	            <p class="n-paragraph skeleton skeleton_txt">Morbi mollis vestibulum sollicitudin. Nunc in eros a justo facilisis rutrum. Aenean id ullamcorper libero. Vestibulum imperdiet nibh vel magna lacinia ultrices. Sed id interdum urna. Nam ac elit a ante commodo tristique. Duis lacus urna, condimentum a vehicula a, hendrerit ac nisi Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vulputate, tortor nec commodo ultricies, lectus nisl facilisis enim, vitae </p>
	            <p class="n-paragraph skeleton skeleton_txt">Viverra urna nulla sed turpis. Nullam lacinia faucibus risus, a euismod lorem Donec maximus placerat tempor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse faucibus sed dolor eget posuere. Morbi mollis vestibulum sollicitudin. Nunc in eros a justo facilisis rutrum. Aenean id ullamcorper libero. Vestibulum imperdiet nibh vel magna lacinia ultrices. Sed id interdum urna.</p>
	        </div>
	    </div>
	</div>

    @livewire('home.cards-filters')

	<div class="wo_home entero skeleton">
	    <div class="medio">
	        <h3 class="skeleton skeleton_txt">Questions about hosting?</h3>
	        <div class="block_a">
	            <button type="button" class="btn-red skeleton">Answers and Tips</button>
	        </div>
	    </div>
	</div>

	<div class="entero">
	    <div class="medio">
	        <h2 class="h2 skeleton skeleton_txt">Most Popular</h2>
	    </div>
	</div>

	<div class="tabs_card tabs_card_xl entero">
		@livewire('home.cards-all')
	</div>

    @section('modals')

        {{-- Modal Animal --}}
        @include('home.modals.animal')

        {{-- Modal Favority --}}
        @include('home.modals.favorite')

    @endsection

@endsection


@section('script')

	<script src="{{ URL::asset('assets/js/places.js') }}"></script>
	<script src="{{ URL::asset('assets/js/slider_home.js') }}"></script>

    <script>
    	const pickerHome = new easepick.create({
    		element: '#easypickHome',
    		css: [
        		'https://cdn.jsdelivr.net/npm/@easepick/core@1.2.0/dist/index.css',
        		'https://cdn.jsdelivr.net/npm/@easepick/range-plugin@1.2.0/dist/index.css',
    		],
    		plugins: ['RangePlugin'],
    		format: 'DD MMM',
    		calendars: 2,
    		grid: 2,
    		autoApply: false,
    			tooltip: true,
    			locale: {
    				one: 'day',
    				other: 'days',
    			},
    		RangePlugin: {
    			elementEnd: '#endEasypickHome',
    		},
    		setup(pickerHome) {
    			pickerHome.on('select', (e) => {
				var content = [
					startDate = pickerHome.getStartDate(),
					endDate = pickerHome.getEndDate(),
				];
				Livewire.emitTo('home.search-places', 'selectDate', content )
			  });
    		},
    	});

    	$('.endEasypick').click(function(event) {
    		pickerHome.show();
    	});
    </script>

    <script>
		window.addEventListener('closedModalFavority', event => {
	        $(".container_user-host, .container_admin-host, .container_preview_guests_pay").hide();
    		$(".page-category").css({'overflow': 'auto'});
		})
	</script>

@endsection
