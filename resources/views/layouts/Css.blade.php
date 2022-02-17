<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/jquery-ui-git.css"> <!-- libreria css de un calendario date-piker -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">

<link href="{{ URL::asset('css/application.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/css/all.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/css/estilos.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/css/header.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/css/footer.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/css/log-out.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/css/leng-modal.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/css/places.css') }}" rel="stylesheet"/>



    {{-- SEARCH --}}
    {{-- <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/> --}}
    {{-- <link href="{{ URL::asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet"/> --}}
    {{-- <link href="{{ URL::asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet"/> --}}
    {{-- <link href="{{ URL::asset('assets/css/location.css') }}" rel="stylesheet"/> --}}
    {{-- <link href="{{ URL::asset('assets/css/dates-locatio.css') }}" rel="stylesheet"/> --}}


    {{-- PERFIL ALFITRION --}}
    {{-- <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/> --}}
    {{-- <link href="{{ URL::asset('assets/css/perfil-anfitrion.css') }}" rel="stylesheet"/> --}}

 @yield('css')
 @stack('style')