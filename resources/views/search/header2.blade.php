<header class="entero header">
    <div class="medio">
        <a href="/" class="logo-menu">
            <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo">
        </a>

        <div class="_mv-places">
            <div class="book-form book-f_home _remove">
                
                @include('places.places')
                @include('places.beforeplaces')

                
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