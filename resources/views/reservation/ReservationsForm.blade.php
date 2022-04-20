@extends('layouts.App')

@section('title') Reservations Form @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderAuth')

@endsection

@section('content')

    <section class="entero c_linsting">
    <div class="medio">
        <h2 class="h2-guests">Reservation Form - list</h2>

        <div class="search_content" style="margin: 33px 0 25px;">
            <div class="input-wrapper">
                <i class="fas fa-search"></i>
                <input type="text" name="" placeholder="Search reservation...">
            </div>
        </div>
        <div class="input-wrapper">
            <a href="{{ route('ReservCreate') }}" class="btn-celest">Reservar!!</a>
        </div>

        <div class="_scrolltable">
            <div class="_width _tb-listings">

                @livewire('reservations.reservation-form-all')
            
            </div>
        </div>
    </div>
</section>

@endsection


@section('script')

@endsection
