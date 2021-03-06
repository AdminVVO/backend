@if ( in_array( Route::currentRouteName(),['reservations', 'listing-show', 'reservationsChange','wishlist']) )
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

            <div class="_mv-places">
                <div class="book-form book-f_home _remove">
                    <div class="_flex-js">
                        <a href="#">
                            <div class="_flex">
                                <i class="far fa-calendar-check icon_red"></i>
                                <span>Today</span>
                            </div>
                        </a>

                        <a href="#">
                            <div class="_flex">
                                <i class="far fa-envelope icon_red"></i>
                                <span>Inbox</span>
                            </div>
                        </a>

                        <a href="#">
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
                                            <a href="{{ route('listing') }}">
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
                    <div class="menu_home-content-items">
                        <ul>
                            <li><a href="{{ route('messageUserIndex') }}">Message</a></li>
                            @if ( Auth::user()->rol_id != 1 )
                                <form id="MessageID-1" action="{{route('messageUserIndex' )}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="1">
                                </form>
                                <li><a href="javascript:void(0)" onclick="$('#MessageID-1').submit()">MessageID-1</a></li>

                                <form id="MessageID-2" action="{{route('messageUserIndex' )}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="2">
                                </form>
                                <li><a href="javascript:void(0)" onclick="$('#MessageID-2').submit()">MessageID-2</a></li>
                            @endif
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
        </div>
    </header>
</div>