@extends('layouts.App')

@section('title') Listings @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderAuth')

@endsection

@section('content')
    
    {{-- All Listings --}}
    @livewire('listing.listings')

@endsection


@section('script')

@endsection
