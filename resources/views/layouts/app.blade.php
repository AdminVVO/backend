<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <title> {{ config('app.name', 'Laravel') }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700&display=swap" rel="stylesheet">
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/3ebe5f560f.js" crossorigin="anonymous"></script>
        <!-- font awesome pro -->
        <link href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" rel="stylesheet">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        @include('layouts.css')
    </head>
    <body class="page-category">
        @if (Auth::check())
            <script>
                window.Laravel = {!!json_encode([
                    'isLoggedin' => true,
                    'user' => Auth::user()
                ])!!}
            </script>
        @else
            <script>
                window.Laravel = {!!json_encode([
                    'isLoggedin' => false
                ])!!}
            </script>
        @endif
        
        <div id="entorn-vue">
            <container></container>
        </div>
        
        @include('layouts.component-leng')

        @include('layouts.scripts')
    </body>
</html>