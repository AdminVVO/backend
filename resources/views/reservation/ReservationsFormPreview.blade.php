@extends('layouts.App')

@section('title') Reservations Preview @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderAuth')

@endsection

@section('content')

    <section class="entero">
        <div class="medio">

            @livewire('reservations.reservation-form-preview', ['reservation' => $id])
    
        </div>
    </section>

@endsection


@section('script')

@endsection
