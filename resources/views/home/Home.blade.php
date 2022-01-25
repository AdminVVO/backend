@extends('layouts.App')

@section('title') Home @endsection

@section('css')
	<link href="{{ URL::asset('assets/css/jquery-ui-git.css') }}" rel="stylesheet"/>
	<link href="{{ URL::asset('assets/css/daterangepicker.css') }}" rel="stylesheet"/>
	<link href="{{ URL::asset('assets/css/home.css') }}" rel="stylesheet"/>
	<link href="{{ URL::asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet"/>
	<link href="{{ URL::asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet"/>
	<link href="{{ URL::asset('assets/css/places.css') }}" rel="stylesheet"/>
@endsection

@section('content')

	<section class="home entero" id="hero">
		<div class="content_icons">
			<div class="content_icons-block">
				<a href="#">
					<svg xmlns="http://www.w3.org/2000/svg" width="10.97" height="20.54" viewBox="0 0 11.973 20.541">
						<g transform="translate(-9.75 -2.25)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
							<path d="M20.973,3H18.117a4.76,4.76,0,0,0-4.76,4.76v2.856H10.5v3.808h2.856v7.617h3.808V14.425h2.856l.952-3.808H17.164V7.76a.952.952,0,0,1,.952-.952h2.856Z" />
						</g>
					</svg>
				</a>

				<a href="#">
					<svg xmlns="http://www.w3.org/2000/svg" width="20.82" height="20.82" viewBox="0 0 20.824 20.824">
						<g fill="#fff">
							<path d="M10.412,0C7.583,0,7.23.013,6.12.062A7.678,7.678,0,0,0,3.592.547a5.1,5.1,0,0,0-1.845,1.2,5.08,5.08,0,0,0-1.2,1.845A7.655,7.655,0,0,0,.062,6.12C.01,7.23,0,7.583,0,10.412S.013,13.594.062,14.7a7.682,7.682,0,0,0,.484,2.528,5.106,5.106,0,0,0,1.2,1.845,5.092,5.092,0,0,0,1.845,1.2,7.687,7.687,0,0,0,2.528.484c1.111.052,1.464.062,4.292.062s3.182-.013,4.292-.062a7.7,7.7,0,0,0,2.528-.484,5.321,5.321,0,0,0,3.046-3.046,7.682,7.682,0,0,0,.484-2.528c.052-1.111.062-1.464.062-4.292s-.013-3.182-.062-4.292a7.7,7.7,0,0,0-.484-2.528,5.11,5.11,0,0,0-1.2-1.845,5.073,5.073,0,0,0-1.845-1.2A7.66,7.66,0,0,0,14.7.062C13.594.01,13.241,0,10.412,0Zm0,1.874c2.779,0,3.111.014,4.208.062a5.737,5.737,0,0,1,1.932.36,3.426,3.426,0,0,1,1.977,1.976A5.749,5.749,0,0,1,18.888,6.2c.049,1.1.061,1.428.061,4.208s-.013,3.111-.064,4.208a5.86,5.86,0,0,1-.365,1.932,3.306,3.306,0,0,1-.78,1.2,3.248,3.248,0,0,1-1.2.777,5.791,5.791,0,0,1-1.939.358c-1.105.049-1.431.061-4.216.061s-3.111-.013-4.216-.064a5.9,5.9,0,0,1-1.94-.365,3.224,3.224,0,0,1-1.2-.78,3.162,3.162,0,0,1-.781-1.2A5.909,5.909,0,0,1,1.888,14.6c-.039-1.093-.053-1.431-.053-4.2s.014-3.111.053-4.218a5.9,5.9,0,0,1,.364-1.938,3.086,3.086,0,0,1,.781-1.2,3.08,3.08,0,0,1,1.2-.779A5.763,5.763,0,0,1,6.157,1.9c1.106-.039,1.432-.052,4.216-.052l.039.026Zm0,3.191a5.347,5.347,0,1,0,5.347,5.347A5.346,5.346,0,0,0,10.412,5.065Zm0,8.817a3.471,3.471,0,1,1,3.471-3.471A3.47,3.47,0,0,1,10.412,13.883ZM17.22,4.855A1.249,1.249,0,1,1,15.97,3.606,1.25,1.25,0,0,1,17.22,4.855Z" />
						</g>
					</svg>
				</a>

				<a href="#">
					<svg xmlns="http://www.w3.org/2000/svg" width="23.36" height="19.52" viewBox="0 0 23.365 19.525">
						<g transform="translate(-0.75 -3.661)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
							<path id="Icon_feather-twitter" data-name="Icon feather-twitter" d="M23.365,4.495a10.833,10.833,0,0,1-3.121,1.521A4.453,4.453,0,0,0,12.432,9v.994a10.6,10.6,0,0,1-8.945-4.5s-3.975,8.945,4.969,12.92A11.569,11.569,0,0,1,1.5,20.4c8.945,4.969,19.877,0,19.877-11.429a4.473,4.473,0,0,0-.08-.825,7.673,7.673,0,0,0,2.067-3.647Z" />
						</g>
					</svg>
				</a>
			</div>
		</div>

		<div class="medio">
			<div class="home_full-screen">
				<div class="block_content">
					<h2 class="h2-pano">Homes and apartments all</h2>
					<h1 class="h1">Orlando <br> Florida</h1>
					<div class="block_a">
						<a href="#" class="btn-h">See all Post</a>
					</div>
				</div>

				@include('home.CardsItems')

			</div>
		</div>

		<a href="#">
			<div class="content_leng" id="btnLeng">
				<img src="{{ URL::asset('assets/img/logo-leng.png') }}" alt="">
			</div>
		</a>
	</section>

	<div class="entero section-places">
		<div class="medio">
			<div class="block_places">
				<h3>Places to stay</h3>
				<div class="book-form book-f_home">
					@include('home.Places')
					@include('home.BeforePlaces')
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

	<div class="tabs entero">
		<div class="medio">
			@include('home.TabsItems')
			@include('home.TabsSelect')
		</div>
	</div>
	<div class="tabs_card entero">
		<div class="medio">
			@include('home.Cards')
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

	<div class="entero">
		<div class="medio">
			<h2 class="h2">Most Popular</h2>
		</div>
	</div>
	<div class="tabs_card tabs_card_xl entero">
		<div class="medio">
			@include('home.Cards')
		</div>
	</div>

@endsection


@section('script')

	<script src="https://code.jquery.com/ui/jquery-ui-git.js"></script>
	<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
	<script src="{{ URL::asset('assets/js/date-piker.js') }}"></script>
	<script src="{{ URL::asset('assets/js/places.js') }}"></script>

@endsection
