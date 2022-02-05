@extends('layouts.App')

@section('title') Goverme ID @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/personal-info.css') }}" rel="stylesheet"/>

@endsection

@section('content')

	<section class="entero">
        <div class="medio-two">
            @livewire('account.personal.governid-second')
        </div>
    </section>

@endsection


@section('script')

@endsection
