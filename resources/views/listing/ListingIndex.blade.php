@extends('layouts.App')

@section('title') Listings @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderAuth')

@endsection

@section('content')
    
    @livewire('listing.init.index')

@endsection


@section('script')

@endsection
