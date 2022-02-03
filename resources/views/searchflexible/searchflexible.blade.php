@extends('layouts.App')

@section('title') Search @endsection

@section('css')
    <!-- Estilos de Search.php -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/search-flexible.css') }}"> 
    <link rel="stylesheet" href="{{ URL::asset('assets/css/header-bck.css') }}">
@endsection

@section('content')

<body class="page-category">
    @livewire('searchflexible.cardfilter')
    {{--  include('inc/modals.php')  --}}

</body>    

@endsection


@section('script')
        <script src="{{ URL::asset('assets/js/card-location.js') }}"></script> 
        <script src="{{ URL::asset('assets/js/modals-session.js') }}"></script> 
@endsection


