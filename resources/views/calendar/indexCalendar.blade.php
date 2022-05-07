@extends('layouts.App')

@section('title') Calendar @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/calendar.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderAuth')

@endsection

@section('content')

    @livewire('calendar.calendar')

@endsection

@section('script')

@endsection