@if ( in_array( Route::currentRouteName(),['reservations', 'listing-show', 'reservationsChange','wishlist','dashboard']) )
    <div class="h_admin mrb-0">
@endif

@if ( in_array( Route::currentRouteName(),['ReservCreate', 'ReservPreview']) )
    <div class="h_admin h_reservation_form">
@endif

@if ( in_array( Route::currentRouteName(),['messageUserIndex', 'calendarIndex']) )
    <div class="h_admin mrb-0 h_not h_pa">
@endif

@if ( !in_array( Route::currentRouteName(),['reservations', 'listing-show', 'ReservCreate', 'ReservPreview', 'messageUserIndex', 'calendarIndex', 'reservationsChange']) )
    <div class="h_admin">
@endif

    <header class="entero header_admin">
        <div class="medio">
            <a href="{{ route('/') }}" class="logo-menu">
                <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo">
            </a>

            <button type="button" class="ham-burger showblock1127">
                <div class="header__menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>

            <div class="_mv-places" style="transition: none;">
                <div class="book-form book-f_home _remove">
                    <div class="_flex-js">
                        <a href="{{ route('dashboard') }}">
                            <div class="_flex">
                                <i class="far fa-calendar-check icon_red"></i>
                                <span>Today</span>
                            </div>
                        </a>

                        <a href="{{ route('messageUserIndex') }}">
                            <div class="_flex">
                                <i class="far fa-envelope icon_red"></i>
                                <span>Inbox</span>
                            </div>
                        </a>

                        <a href="{{ route('calendarIndex') }}">
                            <div class="_flex">
                                <i class="far fa-calendar-alt icon_red"></i>
                                <span>Calendar</span>
                            </div>
                        </a>

                        <div class="_puntos3">
                            <div class="_flex _menu_options">
                                <i class="fas fa-bars icon_red"></i>
                                <span>Menu</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>

                            <div class="_menu-m">
                                <div class="_menu-options-items _shadow-black3-6">
                                    <ul>
                                        <li>
                                            <a href="{{ route('host-listing') }}">
                                                <div class="_b-flex">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.191" height="18.227" viewBox="0 0 18.191 18.227">
                                                        <path d="M19.559,15.3v2.472a1.648,1.648,0,0,1-1.8,1.648,16.31,16.31,0,0,1-7.112-2.53A16.071,16.071,0,0,1,5.7,11.942,16.31,16.31,0,0,1,3.175,4.8,1.648,1.648,0,0,1,4.815,3H7.287A1.648,1.648,0,0,1,8.935,4.417a10.582,10.582,0,0,0,.577,2.316,1.648,1.648,0,0,1-.371,1.739L8.095,9.519a13.187,13.187,0,0,0,4.945,4.945l1.047-1.047a1.648,1.648,0,0,1,1.739-.371,10.582,10.582,0,0,0,2.316.577A1.648,1.648,0,0,1,19.559,15.3Z" transform="translate(-2.268 -2.1)" fill="none" stroke="#7d7d7d" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"/>
                                                    </svg>
                                                    <div class="_txtec">Listing</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                    <ul>
                                        <li>
                                            <a href="{{ route('reservations') }}">
                                                <div class="_b-flex">
                                                    <i class="far fa-list-alt _i-gris18"></i>
                                                    <div class="_txtec">Reservations</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu _header-menu">
                <a href="#" class="menu_perfil">
                    <span>
                        @if ( file_exists( storage_path('app/public/uploadAvatar/' . Auth::user()->avatar  ) ) )
                            <img src="{{ URL::asset('storage/uploadAvatar/') .'/'. Auth::user()->avatar  }}" loading="lazy" alt="">
                        @else
                            <img src="{{ URL::asset('assets/img/avatar') }}/{{ Auth::user()->avatar }}" loading="lazy" alt="">
                        @endif
                        {{  \App\Models\User::FullName() }}
                    </span>
                </a>

                <div class="_menu-bars">
                    <i class="fas fa-bars"></i>
                </div>

                <div class="menu_home-content">
                    <div class="menu__triang-ics"></div>
                    <div class="menu_home-content-items">
                        <div>
                            <a href="{{ route('profile', Auth::id()) }}" class="menu__text-link bold__menu-text-link">
                                <div class="wf10a">Profile</div>
                            </a>

                            <a href="{{ route('account') }}" class="menu__text-link bold__menu-text-link">
                                <div class="wf10a">Account</div>
                            </a>

                            <div class="br-line"></div>

                            <button type="button" class="menu__text-link btnLeng">
                                <div class="wf10a">Language and translation</div>
                            </button>

                            @if ( Auth::user()->rol_id != 1 )
                                <a href="{{ route('signup-host') }}" class="menu__text-link">
                                    <div class="wf10a">Host an experience</div>
                                </a>
                            @endif

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

            <div class="opbtizbpet showblock1127" style="top: 70px;">
                <div class="hoya">
                    <ul class="pd-b40 pd-l24 pd-r24 contMenuHamburguer">
                        <div class="pd-b40 hr">
                            <div class="cttfwmtmbfslh">Menu</div>

                            <a href="{{ route('dashboard') }}" class="bcfxfsmptaw">
                                <div class="pd-r8">
                                    <i class="fa-light fa-house-blank _i-dark22"></i>
                                </div>

                                <div class="f10auto">Today</div>
                            </a>

                            <a href="{{ route('messageUserIndex') }}" class="bcfxfsmptaw">
                                <div class="pd-r8">
                                    <i class="fa-light fa-message-middle _i-dark23"></i>
                                </div>

                                <div class="f10auto">Inbox</div>
                            </a>

                            <a href="{{ route('calendarIndex') }}" class="bcfxfsmptaw">
                                <div class="pd-r8">
                                    <i class="fa-light fa-calendar-lines _i-dark24"></i>
                                </div>

                                <div class="f10auto">Calendar</div>
                            </a>

                            
                            @if ( Auth::check() && Auth::user()->rol_id == 1 )
                                <a href="{{ route('host-listing') }}" class="bcfxfsmptaw">
                                    <div class="pd-r8">
                                        <i class="fa-light fa-house _i-dark22"></i>
                                    </div>

                                    <div class="f10auto">Listings</div>
                                </a>
                            @endif

                            <a href="{{ route('reservations') }}" class="bcfxfsmptaw">
                                <div class="pd-r8">
                                    <i class="fa-light fa-briefcase-blank _i-dark23"></i>
                                </div>

                                <div class="f10auto">Reservations</div>
                            </a>
                        </div>

                        <div class="pd-b40 hr">
                            <div class="cttfwmtmbfslh">Account</div>

                            <a href="{{ route('profile', Auth::id()) }}" class="bcfxfsmptaw">
                                <div class="pd-r8">
                                    <i class="fal fa-circle-user _i-dark23"></i>
                                </div>

                                <div class="f10auto">Your profile</div>
                            </a>

                            <a href="{{ route('account') }}" class="bcfxfsmptaw">
                                <div class="pd-r8">
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 24px; width: 24px; stroke: currentcolor; stroke-width: 1.33333; overflow: visible;"><path d="m19.38 27a4.14 4.14 0 0 1 3.05-2.54 4.06 4.06 0 0 1 3.17.71 1 1 0 0 0 1.47-.33l2.11-3.64a1 1 0 0 0 -.46-1.44 4.1 4.1 0 0 1 0-7.48 1 1 0 0 0 .46-1.44l-2.11-3.66a1 1 0 0 0 -1.47-.33 4.07 4.07 0 0 1 -3.17.71 4.14 4.14 0 0 1 -3.05-2.56 4 4 0 0 1 -.27-1.87 1 1 0 0 0 -1-1.15h-4.2a1 1 0 0 0 -1 1.15 4.11 4.11 0 0 1 -3.34 4.43 4.06 4.06 0 0 1 -3.17-.71 1 1 0 0 0 -1.47.33l-2.11 3.64a1 1 0 0 0 .46 1.44 4.1 4.1 0 0 1 0 7.48 1 1 0 0 0 -.46 1.44l2.11 3.64a1 1 0 0 0 1.47.33 4.06 4.06 0 0 1 3.17-.71 4.1 4.1 0 0 1 3 2.53 4 4 0 0 1 .28 1.88 1 1 0 0 0 1 1.15h4.18a1 1 0 0 0 1-1.15 4 4 0 0 1 .35-1.85zm-7.38-11a4 4 0 1 1 4 4 4 4 0 0 1 -4-4z" vector-effect="non-scaling-stroke" transform="translate(0,0)scale(1,1)" fill="none"></path></svg>
                                </div>

                                <div class="f10auto">Account setting</div>
                            </a>

                            <a href="{{ route('become-host') }}" class="bcfxfsmptaw">
                                <div class="pd-r8">
                                    <i class="fa-light fa-rectangle-history-circle-plus _i-dark20"></i>
                                </div>

                                <div class="f10auto">Create a new listing</div>
                            </a>
                        </div>

                        <div class="pd-b40 mr-b40 hr">
                            <div class="cttfwmtmbfslh">Settings</div>

                            <button type="button" class="bcfxfsmptaw btnLeng">
                                <div class="pd-r8">
                                    <i class="fal fa-globe _i-dark23"></i>
                                </div>

                                <div class="f10auto">Language and translation</div>
                            </button>
                        </div>

                        <div class="hr">
                            <div class="fx fx-fd-c gp12">
                                <a href="#" class="btn-celest txt-center wh-p100">Switch to traveling</a>
                                <a href="{{ route('signup-host') }}" class="btn-celest txt-center wh-p100">Host an Experience</a>

                                <a href="{{ route('logout') }}">
                                    <button type="button" class="btn-celest wh-p100">Log out</button>
                                </a>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</div>