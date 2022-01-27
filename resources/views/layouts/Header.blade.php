<header class="entero header">
    <div class="medio">
        <a href="/" class="logo-menu">
            <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo">
        </a>

        <div class="_mv-places">
            <div class="book-form book-f_home _remove">
                @include('places.Places')
                @include('places.BeforePlaces')
            </div>
        </div>

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
                        <li><a href="#" id="butnSign">Sign up</a></li>
                    </ul>
                    <ul>
                        <li><a href="#" id="butnLogin">Log in</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

{{-- <header class="entero">
    <div class="medio">
        <a href="/" class="logo-menu">
            <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo">
        </a>
        <div class="book-form">
            <form action="">
                <div class="inputBox">
                    <div class="place_select">
                        <span>Check in</span>
                        <i class="far fa-calendar-alt">
                            <input type="month" name="fecha" value="2019-08">
                        </i>
                    </div>
                </div>

                <div class="inputBox">
                    <div class="place_select">
                        <span>Check Out</span>
                        <i class="far fa-calendar-alt">
                            <input type="month" name="fecha" value="2019-08">
                        </i>
                    </div>
                </div>

                <div class="inputBox">
                    <div class="place_select">
                        <span>Guest</span>
                        <i class="far fa-user">
                            <select name="format" id="format">
                                <option selected disabled>5 guest</option>
                                <option value="Nov19">Nov 19</option>
                                <option value="Nov20">Nov 20</option>
                            </select>
                        </i>
                    </div>
                </div>
                <input type="submit" value="Search" class="btn">
            </form>
        </div>

        <div class="menu _header-menu">
            <a href="#" class="menu_items">
                <img src="{{ URL::asset('assets/img/icons/hotel.png') }}" alt="">
                Become a Host
            </a>

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
                        <li><a href="#">Message</a></li>
                        <li><a href="#">Trips</a></li>
                        <li><a href="#">Wishlists</a></li>
                    </ul>
                    <hr class="br-line">
                    <ul>
                        <li><a href="#">Manage</a></li>
                        <li><a href="#">Host and experience</a></li>
                        <li><a href="#">Account</a></li>
                        <li><a href="#" id="butnLogin">Log out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header> --}}