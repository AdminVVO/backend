@extends('layouts.App')

@section('title')
    reviews
@endsection

@section('css')
    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/modals-admin.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/modals-user.css') }}" rel="stylesheet" />
@endsection

@section('header')
    @include('layouts.HeaderAuth')
@endsection

@section('content')
    <section class="entero">
        <div class="medio">

            {{-- Codigo del la vista messages --}}
            {{-- INICIA MODAL CREATE REVIEW --}}
            
            @livewire('review.steps')
            {{-- FIN MODAL CREATE REVIEW --}}
        </div>
    </section>
@endsection
