@extends('layouts.App')

@section('title') Reservations Host @endsection

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
            </div>
        </div>
    </section>

    @livewire('reservation-host.index')

    @section('modals')

        <div class="_menu-options">
            {{-- Popup Options --}}
            @livewire('reservation-host.popup-options')
        </div>

        @include('reservationHost.modals.details')

    @endsection

@endsection


@section('script')

    <script type="text/javascript">
        window.addEventListener('hiddenPopup', event => {
            $('._menu-options').removeClass('is-active');
        })
    </script>

@endsection
