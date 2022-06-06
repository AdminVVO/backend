@extends('layouts.App')

@section('title') Trips @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderAuth')

@endsection

@section('content')

    <section class="section_trips_upcoming entero">
        <div class="medio">
            <h2 class="h2-guests_bold35">Trips</h2>

            @livewire('trips.steps')

        </div>
    </section>

@endsection

@section('script')

@endsection
