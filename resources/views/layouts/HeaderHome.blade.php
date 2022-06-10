@if ( in_array( Route::currentRouteName(),['/']) )
	<div class="_location-he">
@endif
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
		            <div class="hmen">
		                <div class="mnconfx">
		                    <a href="/" class="menu_items showfx743 active">
		                        <i class="fal fa-magnifying-glass"></i>
		                        <div class="sub">Explore</div>
		                    </a>

		                    <a href="{{ route('signup-host') }}" class="menu_items">
		                        <i class="fas fa-hotel _i-red22"></i>
		                        Become a Host
		                    </a>

		                    <div class="_menu-bars">
		                        <i class="fas fa-bars"></i>
		                    </div>

		                    <div class="menu_home-content">
		                        <div class="menu__triang-ics"></div>
		                        <div class="menu_home-content-items">
		                            <div>
		                            	<a href="{{ route('messageUserIndex') }}">
			                                <button type="submit" class="menu__text-link">
			                                    <div class="wf10a">Message</div>
			                                </button>
		                            	</a>
		                            	<a href="#">
			                                <button type="submit" class="menu__text-link">
			                                    <div class="wf10a">Trips</div>
			                                </button>
		                            	</a>
		                            	<a href="#">
			                                <button type="submit" class="menu__text-link">
			                                    <div class="wf10a">Wishlists</div>
			                                </button>
		                            	</a>
	                            		<hr class="br-line">
		                            	<a href="#">
			                                <button type="submit" class="menu__text-link">
			                                    <div class="wf10a">Manage</div>
			                                </button>
		                            	</a>
		                            	<a href="{{ route('signup-host') }}">
			                                <button type="submit" class="menu__text-link">
			                                    <div class="wf10a">Host and experience</div>
			                                </button>
		                            	</a>
		                            	<a href="{{ route('account') }}">
			                                <button type="submit" class="menu__text-link">
			                                    <div class="wf10a">Account</div>
			                                </button>
		                            	</a>
		                            	<a href="{{ route('logout') }}">
			                                <button type="submit" class="menu__text-link">
			                                    <div class="wf10a">Log out</div>
			                                </button>
		                            	</a>
		                            </div>
		                        </div>
		                    </div>

	                    	<button type="button" class="menu_items showfx743 js__btnFavoriteUi butnSignModl">
		                        <i class="fal fa-heart"></i>
		                        <div class="sub">Favorite</div>
		                    </button>

				      		<a href="{{ route('logout') }}">
				                <button type="button" class="menu_items showfx743">
				                    <i class="fal fa-user-large"></i>
				                    <div class="sub">Logout</div>
				                </button>
				      		</a>
		                </div>
		            </div>
		        </div>
	        @else
		        <div class="menu _header-menu">
		            <div class="hmen">
		                <div class="mnconfx">
		                    <a href="/" class="menu_items showfx743 active">
		                        <i class="fal fa-magnifying-glass"></i>
		                        <div class="sub">Explore</div>
		                    </a>

		                    <a href="{{ route('signup-host') }}" class="menu_items">
		                        <i class="fas fa-hotel _i-red22"></i>
		                        Become a Host
		                    </a>

		                    <div class="_menu-bars">
		                        <i class="fas fa-bars"></i>
		                    </div>

		                    <div class="menu_home-content">
		                        <div class="menu__triang-ics"></div>
		                        <div class="menu_home-content-items">
		                            <div>
		                                <button type="submit" class="menu__text-link butnSignModl">
		                                    <div class="wf10a">Sign up</div>
		                                </button>

		                                <button type="submit" class="menu__text-link butnLoginModl">
		                                    <div class="wf10a">Log in</div>
		                                </button>
		                            </div>
		                        </div>
		                    </div>

	                    	<button type="button" class="menu_items showfx743 js__btnFavoriteUi butnSignModl">
		                        <i class="fal fa-heart"></i>
		                        <div class="sub">Favorite</div>
		                    </button>

		                    <button type="button" class="menu_items showfx743 butnSignModl">
		                        <i class="fal fa-user-large"></i>
		                        <div class="sub">Log in</div>
		                    </button>
		                </div>
		            </div>
		        </div>
	        @endif


	    </div>
	</header>



{{-- 

                <div class="menu _header-menu">
                    <a href="{{ route('signup-host') }}" class="menu_items">
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
                                <li><a href="{{ route('signup-host') }}">Host and experience</a></li>
                                <li><a href="{{ route('account') }}">Account</a></li>
                                <li><a href="{{ route('logout') }}">Log out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
 --}}


@if ( in_array( Route::currentRouteName(),['/']) )
	</div>
@endif