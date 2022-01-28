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
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/3ebe5f560f.js" crossorigin="anonymous"></script>
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" rel="stylesheet">
    @include('layouts.Css')
    @livewireStyles
    @laravelTelInputStyles
</head>

<body class="page-category">
    @if (Auth::check())
        <script>
            window.Laravel = {!! json_encode([
    'isLoggedin' => true,
    'user' => Auth::user(),
]) !!}
        </script>
    @else
        <script>
            window.Laravel = {!! json_encode([
    'isLoggedin' => false,
]) !!}
        </script>
    @endif

    <div id="entorn-vue">
        <application></application>
    </div>


    {{-- @include('layouts.Header') --}}
    {{-- @include('language.Language') --}}
    @yield('content')
    @include('layouts.Footer')
    @include('layouts.Scripts')
    @livewireScripts
    @laravelTelInputScripts
    <script>
        window.livewire.on('reloadClassCSs', function() {
            $(".content-dots span.dot:first-child").addClass("dot_active");
            $(".card_img > img:first-child").addClass("card_img_active");
        });
        // window.livewire.on('reloadJs', function() {
        //     const select = document.getElementById("select1");
        //     select.addEventListener("click", e => {
        //         e.path[0].classList.add("active_tabs");
        //         console.log(e.path[0].classList);
        //     });
        // });
    </script>
</body>

</html>
