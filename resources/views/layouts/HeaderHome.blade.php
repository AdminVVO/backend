<div class="_location-he">
	<header class="entero header">
	    <div class="medio">
	        <a href="{{ route('/') }}" class="logo-menu">
	            <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo">
	        </a>

	        <div class="_mv-places">
	            <div class="book-form book-f_home _remove">
                	@livewire('home.search-places')
	            </div>
	        </div>

            @if ( Auth::check() )
                <div class="menu _header-menu">
                    <a href="#" class="menu_items">
                        <img src="{{ URL::asset('assets/img/icons/hotel.png') }}" alt="">
                        Become a Host
                    </a>

                    <a href="#" class="menu_perfil">
                        <span>
                            <img src="{{ URL::asset('assets/img/avatar') }}/{{ Auth::user()->avatar }}" alt="">
                            {{  \App\Models\User::FullName() }}
                        </span>
                    </a>

                    <div class="_menu-bars">
                        <i class="fas fa-bars"></i>
                    </div>

                    <div class="menu_home-content">
                        <div class="menu_home-content-items">
                            <ul>
                                <li><a href="{{ route('messageUserIndex') }}">Message</a></li>
                                <li><a href="#">Trips</a></li>
                                <li><a href="#">Wishlists</a></li>
                            </ul>
                            <hr class="br-line">
                            <ul>
                                <li><a href="#">Manage</a></li>
                                <li><a href="{{ route('host') }}">Host and experience</a></li>
                                <li><a href="{{ route('account') }}">Account</a></li>
                                <li><a href="{{ route('logout') }}">Log out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @else
		        <div class="menu _header-menu">
		            <a href="#" class="menu_items">
		                <img src="{{ URL::asset('assets/img/icons/hotel.png') }}" alt="">
		                Become a Host
		            </a>

		            <div class="_menu-bars">
		                <i class="fas fa-bars"></i>
		            </div>

		            <div class="menu_home-content">
		                <div class="menu_home-content-items">
		                    <ul>
		                        <li class="butnSignModl">Sign up</li>
		                    </ul>
		                    <ul>
		                        <li class="butnLoginModl">Log in</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
            @endif
	    </div>
	</header>
</div>