<div class="h_admin">
    <header class="entero header_admin">
        <div class="medio">
            <a href="/" class="logo-menu">
                <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo">
            </a>

            <div class="_mv-places">
                <div class="book-form book-f_home _remove">
                    {{-- <?php include("places-admin.php") ?> --}}
                </div>
            </div>

            <div class="menu _header-menu">
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
                            <li><a href="{{ route('host') }}">Host and experience</a></li>
                            <li><a href="{{ route('account') }}">Account</a></li>
                            <li><a href="#">Log out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>