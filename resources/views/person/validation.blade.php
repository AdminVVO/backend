@extends('layouts.App')

@section('title')
    Validation Account
@endsection

@section('css')
<link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/account.css') }}" rel="stylesheet" />
@endsection

@if ((isset($user_id) && Auth::id() == $user_id) || Auth::id())
@section('header')
        @include('layouts.HeaderGuest')
@endsection

@section('content')
    <section class="entero">
        <div class="medio">
            @livewire('validation.steps', ['user_id' => $user_id, 'type' => $type])
        </div>
    </section>
@endsection

@endif