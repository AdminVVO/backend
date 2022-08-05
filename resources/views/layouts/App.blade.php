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
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/jquery-ui-git.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" rel="stylesheet">
    @include('layouts.Css')
    @livewireStyles
    @laravelTelInputStyles
</head>

    @include('layouts.includes-body')

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
