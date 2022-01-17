<header class="entero">
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
        <div class="menu">
            <a href="#" class="menu_items">
                <img src="{{ URL::asset('assets/img/icons/hotel.png') }}" alt="">
                Become a Host
            </a>

            <a href="#" class="menu_perfil">
                <span>
                    <img src="{{ URL::asset('assets/img/profile.png') }}" alt="">
                    {{ Auth::user()->name }}
                </span>
            </a>

            <div onclick="menuToggle();">
                <i class="fas fa-bars"></i>
            </div>

            <div class="menu_home-content" id="myDropdown">
                <div class="menu_home-content-items">
                    <ul>
                        <li><a href="#" id="butnMore">Message</a></li>
                        <li><a href="#">Trips</a></li>
                        <li><a href="#">Wishlists</a></li>
                    </ul>
                    <hr class="br-line">
                    <ul>
                        <li><a href="#">Manage</a></li>
                        <li><a href="#">Host and experience</a></li>
                        <li><a href="#">Account</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>