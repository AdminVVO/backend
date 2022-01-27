<link href="{{ URL::asset('css/app.css') }}" rel="stylesheet"/>

<link href="{{ URL::asset('assets/css/jquery-ui-git.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/css/daterangepicker.css') }}" rel="stylesheet"/>

<link href="{{ URL::asset('css/application.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/css/all.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/css/estilos.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/css/header.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/css/footer.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/css/log-out.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/css/leng-modal.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/css/places.css') }}" rel="stylesheet"/>


@if ( $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] == $_SERVER["HTTP_HOST"] )
    {{-- HOME --}}
    <link href="{{ URL::asset('assets/css/home.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet"/>
@endif

@if ( $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] == $_SERVER["HTTP_HOST"] . 'search')
    {{-- SEARCH --}}
    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/location.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/dates-locatio.css') }}" rel="stylesheet"/>
@endif

@if ( $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] == $_SERVER["HTTP_HOST"] . '/blog')
    {{-- BLOG --}}
    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/blog.css') }}" rel="stylesheet"/>
@endif

@if ( $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] == $_SERVER["HTTP_HOST"] . '/interna')
    {{-- INTERNA --}}
    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/interna.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet"/>
@endif

@if ( $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] == $_SERVER["HTTP_HOST"] . '/category')
    {{-- CATEGORY --}}
    <link href="{{ URL::asset('assets/css/home.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/category.css') }}" rel="stylesheet"/>
@endif

@if ( $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] == $_SERVER["HTTP_HOST"] . '/perfil-anfitrion')
    {{-- PERFIL ALFITRION --}}
    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/perfil-anfitrion.css') }}" rel="stylesheet"/>
@endif

@if ( $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] == $_SERVER["HTTP_HOST"] . '/host')
    {{-- HOST --}}
    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/host.css') }}" rel="stylesheet"/>
@endif

@if ( $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] == $_SERVER["HTTP_HOST"] . '/account')
     {{-- ACCOUNT --}}
    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/account.css') }}" rel="stylesheet"/>
@endif

@if ( $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] == $_SERVER["HTTP_HOST"] . '/account/personal_info')
    {{-- PERSONAL INFO --}}
    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/personal-info.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/personal-info-edit.css') }}" rel="stylesheet"/>
@endif

@if ( $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] == $_SERVER["HTTP_HOST"] . '/secy')
    {{-- SEGURITY --}}
    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/login-security.css') }}" rel="stylesheet"/>
@endif







 @yield('css')