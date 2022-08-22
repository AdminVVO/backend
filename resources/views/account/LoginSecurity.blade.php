@extends('layouts.App')

@section('title') Personal Info @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/login-security.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderGuest')

@endsection

@section('content')

    <section class="entero">
        <div class="medio-two">
			<div class="bcptmzi showblock743" style="margin-top: -1.5rem;">
			    <div class="bwfxaihplprprzi">
			        <a href="{{ route('account') }}" class="circle__btn-cerrar">
			            <span class="pr">
			                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false">
			                    <g fill="none">
			                        <path d="m20 28-11.29289322-11.2928932c-.39052429-.3905243-.39052429-1.0236893 0-1.4142136l11.29289322-11.2928932"></path>
			                    </g>
			                </svg>
			            </span>
			        </a>
			    </div>
			</div>

			<div class="section_login-security">
			    <main class="section_login-security-main">
			        <div class="_flex-right16 skeleton skeleton_txt">
			            <a href="{{ route('account') }}" class="_txtec16">Account</a><i class="fas fa-chevron-right"></i><span class="_txtecbold16">Login & Security</span>
			        </div>
			        <h2 class="h2-guests_bold35 skeleton skeleton_txt">Login & Security</h2>

			        <div>
			            {{-- Social --}}
			        	@livewire('account.security.social')

			            {{-- Devices --}}
			        	@livewire('account.security.devices')

			            {{-- Desactivate --}}
			        	@livewire('account.security.desactivate')
			        </div>
			    </main>

			    <aside class="section_login-security-aside">
			        <div class="_cont-account skeleton">
			            <i class="fad fa-shield-check skeleton skeleton_txt"></i>
			            <div class="_txteh skeleton skeleton_txt" style="margin-bottom: 4px;">Keeping your account secure</div>
			            <p class="span-guests skeleton skeleton_txt">We regularly review accounts to make sure they're secure as possible. We'll also let you know if there's more we can do to increase the security of your account.</p>
			        </div>
			    </aside>
			</div>
        </div>
    </section>

@endsection