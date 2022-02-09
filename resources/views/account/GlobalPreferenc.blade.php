@extends('layouts.App')

@section('title') Personal Info @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/personal-info.css') }}" rel="stylesheet"/>

@endsection

@section('header')

	@include('layouts.HeaderAuth')

@endsection

@section('content')

	<section class="entero">
        <div class="medio-two">
            <div class="section-perfil_info">
			    <main class="section-perfil_info-main">
			        <div class="_flex-right16">
			            <a href="{{ route('account') }}" class="_txtec16">Account</a><i class="fas fa-chevron-right"></i><span class="_txtecbold16">Global preferences</span>
			        </div>
			        <h2 class="h2-guests_bold35">Global preferences</h2>

			        <div>
                        @livewire('account.preference.language')

                        @livewire('account.preference.currency')

                        @livewire('account.preference.timezone')			            
			        </div>
			    </main>

			    <aside class="section-perfil_info-aside">
			        <div class="_cont-account">
			            <i class="far fa-edit" style="color: #2DDAB4;"></i>
			            <div class="_txteh" style="margin-bottom: 4px;">Your global preferences</div>
			            <p class="span-guests">Changing your currency updates how you see prices. You can change how you get payments in your payments & payouts preferences.</p>
			        </div>
			    </aside>
			</div>
        </div>
    </section>

@endsection


@section('script')

@endsection
