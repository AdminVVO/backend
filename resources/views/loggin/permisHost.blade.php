@extends('layouts.App')

@section('title') You don't have permissions @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderGuest')

@endsection

@section('content')
    <section class="entero section-host-logueado">
        <div class="medio">
            <div class="block_cbloqueada">
                <div class="block-img">
                    <img src="{{ URL::asset('assets/img/avatar/cb.jpg') }}">
                </div>

                <div class="txt-center mr-t30">
                    <h2 class="_txtbold3a32">Open your door to hosting</h2>
                    <p class="_txtec mr-t16 mr-b30">you do not have sufficient permission to browse here.</p>

                    <div class="navFixed_mobil_btn btn100">
                        <a href="{{ route('signup-host') }}" class="btn-celest">Try hosting</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('script')

@endsection
