@extends('layouts.App')

@section('title') Reservations @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderAuth')

@endsection

@section('content')

    <section class="entero _bkground_img">
        <img src="{{ URL::asset('assets/img/account-fondo.jpg') }}" alt="">
        <div class="medio">
            <div class="_flex">
                <div>
                    <h3 class="h2-guests_white60">Reservations</h3>
                </div>
                <div class="_btnsmleft">
                    <span style="margin-right: 3px;">All Reservations (10)</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                        <path d="M11.482,15.474l4-4.005a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071l-4.535,4.538a.755.755,0,0,1-1.043.022L6.408,12.543a.757.757,0,0,1,1.068-1.071Z" transform="translate(-11.246 16.772) rotate(-90)" fill="#fff"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <section class="entero">
        <div class="medio">
            <div class="_section-reserva _section-r">

                @livewire('reservations.reservation-index')
                
            </div>
        </div>
    </section>

@endsection


@section('script')

@endsection
