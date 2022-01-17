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