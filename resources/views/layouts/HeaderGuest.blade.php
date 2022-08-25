<div class="_location-he pst0zi">
    <header class="entero header">
        <div class="medio">
            <a href="{{ route('/') }}" class="logo-menu">
                <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo">
            </a>

            @if ( Auth::check() )
                <div class="menu _header-menu">
                    <div class="wfxjcpbbt">
                        <div class="hmen">
                            <div class="mnconfx">
                                <a href="{{ route('/') }}" class="menu_items showfx743 icon_explore">
                                    <i class="fal fa-magnifying-glass"></i>
                                    <div class="sub">Explore</div>
                                </a>

                                <a href="{{ route('wishlist') }}" class="menu_items showfx743 icon_wishlists">
                                    <i class="fal fa-heart"></i>
                                    <div class="sub">Wishlists</div>
                                </a>

                                <a href="{{ route('messageUserIndex') }}" class="menu_items showfx743 icon_inbox">
                                    <i class="fal fa-message-middle"></i>
                                    <div class="sub">Inbox</div>
                                </a>

                                @if ( Auth::user()->rol_id === 1 )
                                    <a href="{{ route('dashboard') }}" class="menu_items hideblock743">
                                        <i class="fas fa-hotel _i-red22"></i>
                                        Switch to hosting
                                    </a>
                                @else
                                    <a href="{{ route('signup-host') }}" class="menu_items hideblock743">
                                        <i class="fas fa-hotel _i-red22"></i>
                                        Become a Host
                                    </a>
                                @endif

                                <a href="{{  route('profile', Auth::id()) }}" class="menu_items showfx743 icon_profile">
                                    <i class="fal fa-circle-user"></i>
                                    <div class="sub">Profile</div>
                                </a>

                                <div class="menu_perfil menu_items">
                                    <span>
                                        @if ( file_exists( storage_path('app/public/uploadAvatar/' . Auth::user()->avatar  ) ) )
                                            <img src="{{ URL::asset('storage/uploadAvatar/') .'/'. Auth::user()->avatar  }}" loading="lazy" alt="">
                                        @else
                                            <img src="{{ URL::asset('assets/img/avatar') }}/{{ Auth::user()->avatar }}" loading="lazy" alt="">
                                        @endif
                                        {{  \App\Models\User::FullName() }}
                                    </span>
                                </div>

                                <div class="_menu-bars vvo_hambur">
                                    <i class="fas fa-bars"></i>
                                </div>

                                <div class="menu_home-content">
                                    <div class="menu__triang-ics"></div>
                                    <div class="menu_home-content-items">
                                        <div>
                                            <a href="{{ route('messageUserIndex') }}" class="menu__text-link bold__menu-text-link">
                                                <div class="wf10a">Messages</div>
                                            </a>

                                            <a href="{{ route('trips') }}" class="menu__text-link bold__menu-text-link">
                                                <div class="wf10a">Trips</div>
                                            </a>

                                            <a href="{{ route('wishlist') }}" class="menu__text-link bold__menu-text-link">
                                                <div class="wf10a">Wishlists</div>
                                            </a>
                                            <div class="br-line"></div>

                                            @if ( Auth::check() && Auth::user()->rol_id == 1 )
                                                <a href="{{ route('host-listing') }}" class="menu__text-link">
                                                    <div class="wf10a">Manage listings</div>
                                                </a>
                                            @endif

                                            @if ( Auth::user()->rol_id != 1 )
                                                <a href="{{ route('signup-host') }}" class="menu__text-link">
                                                    <div class="wf10a">Host an experience</div>
                                                </a>
                                            @endif

                                            <a href="{{ route('account') }}" class="menu__text-link">
                                                <div class="wf10a">Account</div>
                                            </a>
                                            <div class="br-line"></div>
                                            <a href="{{ route('logout') }}">
                                                <button type="button" class="menu__text-link">
                                                    <div class="wf10a">Log out</div>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="menu _header-menu">
                    <div class="wfxjcpbbt">
                        <div class="hmen">
                            <div class="mnconfx">
                                <a href="{{ route('/') }}" class="menu_items showfx743 icon_explore">
                                    <i class="fal fa-magnifying-glass"></i>
                                    <div class="sub">Explore</div>
                                </a>

                                <button type="button" class="menu_items showfx743 icon_wishlists butnSignModl">
                                    <i class="fal fa-heart"></i>
                                    <div class="sub">Wishlists</div>
                                </button>

                                <a href="{{ route('signup-host') }}" class="menu_items hideblock743">
                                    <i class="fas fa-hotel _i-red22"></i>
                                    Become a Host
                                </a>

                                <button type="button" class="menu_items showfx743 butnSignModl">
                                    <i class="fal fa-circle-user"></i>
                                    <div class="sub">Log in</div>
                                </button>

                                <div class="_menu-bars vvo_hambur">
                                    <i class="fas fa-bars"></i>
                                </div>

                                <div class="menu_home-content">
                                    <div class="menu__triang-ics"></div>
                                    <div class="menu_home-content-items">
                                        <div>
                                            <button type="submit" class="menu__text-link bold__menu-text-link butnLoginModl">
                                                <div class="wf10a">Log in</div>
                                            </button>

                                            <button type="submit" class="menu__text-link butnSignModl">
                                                <div class="wf10a">Sign up</div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>        
                        </div>
                    </div>
                </div>
                
            @endif
        </div>
    </header>
</div>