@extends('layouts.App')

@section('title') Search @endsection

@section('css')
    <!-- Estilos de Search.php -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/header-bck.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/location.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/dates-location.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/search-flexible.css') }}">
    {{-- css mapa --}}
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
    {{-- csss --}}
    <style>
        .mapboxgl-popup {
        max-width: 400px;
        font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
        }
    </style>
@endsection

@section('content')

    <body class="page-category">
        {{-- @include('search.header2') --}}
        <section class="location">
            {{-- @include('search.location') --}}
            <div>
                @livewire('search.search')
            </div>
            

            <a href="#">
                <div class="content_icon-leng" id="btnLeng">
                    <img src="{{ URL::asset('assets/img/logo-leng.png') }}" alt="">
                </div>
            </a>
        </section>

        <section class="dates-location">
            @include('search.dateslocation')
        </section>
        {{-- mapa --}}
        {{-- @include('search.modals') --}}

@endsection


@section('script')
        <script src="{{ URL::asset('assets/js/card-location.js') }}"></script>
        <script src="{{ URL::asset('assets/js/modals-session.js') }}"></script>
        <script src="{{ URL::asset('assets/js/card-location.js') }}"></script>
        <script src="{{ URL::asset('assets/js/modals-session.js') }}"></script>

@endsection
