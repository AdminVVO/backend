<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <title> @yield('title') | {{ config('app.name', 'Laravel') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3ebe5f560f.js" crossorigin="anonymous"></script>
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" rel="stylesheet">
    @include('layouts.Css')
    @livewireStyles
    @laravelTelInputStyles
</head>

@if ( in_array( Route::currentRouteName(),['/']) )
    <body class="page-category page__home vvo_ui" style="padding-top: 0px;">
@endif

@if ( in_array( Route::currentRouteName(),['search']) )
    <body class="page-category page__search vvo_ui">
@endif

@if ( in_array( Route::currentRouteName(),['search-flexible']) )
    <body class="page-category vvo_ui">
@endif

@if ( in_array( Route::currentRouteName(),['account']) )
    <body class="page-category page__account_user vvo_ui">
@endif

@if ( in_array( Route::currentRouteName(),['interna']) )
    <body class="page-category sc-interna_body">
@endif

@if ( in_array( Route::currentRouteName(),['profile']) )
    <body class="page-category page__perfil_interno vvo_ui">
@endif

@if ( in_array( Route::currentRouteName(),['login_segurity']) )
    <body class="page-category page_login_security vvo_ui">
@endif

@if ( in_array( Route::currentRouteName(),['global_preferen']) )
    <body class="page-category page__personal_info vvo_ui">
@endif

{{-- @if ( !in_array( Route::currentRouteName(),['/','search','search-flexible','account','interna','profile']) )
    <body class="page-category">
@endif --}}

    @yield('header')
    @if ( !Auth::check() )
        @include('loggin.LogInLogOut')
    @endif

    @yield('content')
    @yield('modals')
    @include('language.Language')
    @include('layouts.Footer')

    @stack('alpine_scripts')
    @livewireScripts
    @include('layouts.Scripts')
    @laravelTelInputScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <x-livewire-alert::scripts />
</body>

</html>
