@extends('layouts.App')

@section('title')
    Validation Account
@endsection

@section('css')
    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/account.css') }}" rel="stylesheet" />
@endsection

@if ((isset($user_id) && Auth::id() == $user_id) || Auth::id())
@section('header')
        @include('layouts.HeaderAuth')
@endsection

@section('content')
    <section class="entero">
        <div class="medio">
            @livewire('validation.steps', ['user_id' => $user_id, 'type' => $type])
        </div>
    </section>

        <button hidden value="{{ $user_id }}" id="user_id"></button>
  
    <button hidden value="{{ Auth::id() }}" id="userAuth"></button>
@endsection

@endif