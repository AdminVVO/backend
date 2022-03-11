@extends('layouts.App')

@section('title') Blocked Account @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/account.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderAuth')

@endsection

@section('content')

    <section class="entero">
        <div class="medio">

            @livewire('blocked.steps')
        
        </div>
    </section>


@endsection


@section('script')

@endsection
