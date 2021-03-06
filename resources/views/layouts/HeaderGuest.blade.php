<div class="_location-he">
    <header class="entero header">
        <div class="medio">
            <a href="/" class="logo-menu">
                <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo">
            </a>

            @if ( Auth::check() )
                <div class="menu _header-menu">
                    <a href="{{ route('signup-host') }}" class="menu_items">
                        <img src="{{ URL::asset('assets/img/icons/hotel.png') }}" alt="">
                        Become a Host
                    </a>

                    <a href="#" class="menu_perfil">
                        <span>
                            @if ( file_exists( storage_path('app/public/uploadAvatar/' . Auth::user()->avatar  ) ) )
                                <img src="{{ URL::asset('storage/uploadAvatar/') .'/'. Auth::user()->avatar  }}" alt="">
                            @else
                                <img src="{{ URL::asset('assets/img/avatar') }}/{{ Auth::user()->avatar }}" alt="">
                            @endif
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
                                <li><a href="/wishlist">Wishlists</a></li>
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
            @else
                <div class="menu _header-menu">
                    <a href="{{ route('signup-host') }}" class="menu_items">
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