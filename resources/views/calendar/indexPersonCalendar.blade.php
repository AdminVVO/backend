<link href="https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.10.1/main.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.10.1/main.min.js"></script>

@extends('layouts.App')

@section('title')
    Calendar
@endsection

@section('css')
    <link href="{{ URL::asset('assets/css/calendar.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet" />
@endsection


@section('header')
    <div class="header-admin-nrl">
        @include('layouts.HeaderAuth')
    </div>
@endsection
@section('content')
    @livewire('calendar.person-calendar')
@endsection

@section('script')
    <script src="{{ URL::asset('assets/js/calendar.js') }}"></script>
@endsection
