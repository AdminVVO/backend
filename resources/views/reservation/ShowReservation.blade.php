@extends('layouts.App')

@section('title')
    Reservations
@endsection

@section('css')
    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet" />
@endsection

@section('header')
    @include('layouts.HeaderAuth')
@endsection

@section('content')

@livewire('reservations.show-reservation', ['reservation' => $id])
@endsection

@section('script')
@endsection
