@extends('layouts.App')

@section('title') 404 @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>

@endsection

@section('content')
	<div class="h_admin">
        <header class="entero header_admin">
		    <div class="medio">
		        <a href="{{ route('/') }}" class="logo-menu">
		            <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo">
		        </a>

		        {{-- <div class="_mv-places">
		            <div class="book-form book-f_home _remove">
		                <?php include("places-admin.php") ?>
		            </div>
		        </div> --}}

		       {{--  <div class="menu _header-menu">
		            <a href="#" class="menu_perfil">
		                <span>
		                    <img src="{{ URL::asset('assets/img/profile.png') }}" alt="">
		                    Anny Smith
		                </span>
		            </a>

		            <div class="_menu-bars">
		                <i class="fas fa-bars"></i>
		            </div>

		            <div class="menu_home-content">
		                <div class="menu_home-content-items">
		                    <ul>
		                        <li><a href="#" id="butnSign">Sign up</a></li>
		                    </ul>
		                    <ul>
		                        <li><a href="#" id="butnLogin">Log in</a></li>
		                    </ul>
		                </div>
		            </div>
		        </div> --}}
		    </div>
		</header>
    </div>
    <section class="entero">
        <div class="medio">
            <div class="block_404">
                <div class="_b">
                    <img src="{{ URL::asset('assets/img/avatar/404page.jpg') }}" class="_img404">

                    <div class="_block">
                        <div class="txt404">404</div>
                        <span class="_pos">
                            <svg xmlns="http://www.w3.org/2000/svg" width="428" height="320" viewBox="0 0 428 320">
                                <text transform="translate(214 237)" fill="#fff" stroke="#fff" stroke-linejoin="round" stroke-width="40" font-size="200" font-family="Lato-Bold, Lato" font-weight="700"><tspan x="-174" y="0">404</tspan></text>
                            </svg>
                        </span>

                        <p class="_txth2-35">Page Not Found</p>
                    </div>
                </div>

                <div style="margin-top: 18rem;">
                    <p class="h2-guests">Here are some links that may help you:</p>
                    <div class="_flex">
                        <a href="{{ route('/') }}" class="_txtec">Home</a> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                            <circle id="Elipse_77" data-name="Elipse 77" cx="4" cy="4" r="4" fill="#ff5a5f"/>
                        </svg>

                        <a href="#" class="_txtec">Accommodation</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                            <circle id="Elipse_77" data-name="Elipse 77" cx="4" cy="4" r="4" fill="#ff5a5f"/>
                        </svg>

                        <a href="#" class="_txtec">Help</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                            <circle id="Elipse_77" data-name="Elipse 77" cx="4" cy="4" r="4" fill="#ff5a5f"/>
                        </svg>

                        <a href="#" class="_txtec">Travel in vvoutlet</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                            <circle id="Elipse_77" data-name="Elipse 77" cx="4" cy="4" r="4" fill="#ff5a5f"/>
                        </svg>

                        <a href="{{ route('/host') }}" class="_txtec">Being a host on vvoutlet</a>
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                            <circle id="Elipse_77" data-name="Elipse 77" cx="4" cy="4" r="4" fill="#ff5a5f"/>
                        </svg>

                        <a href="#" class="_txtec">Trust and security</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('script')

@endsection
