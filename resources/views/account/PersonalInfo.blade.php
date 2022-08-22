@extends('layouts.App')

@section('title') Personal Info @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/personal-info.css') }}" rel="stylesheet"/>

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

			<div class="section-perfil_info">
			    <main class="section-perfil_info-main">
			        <div class="_flex-right16 skeleton skeleton_txt">
			            <a href="{{ route('account') }}" class="_txtec16">Account</a><i class="fas fa-chevron-right"></i><span class="_txtecbold16">Personal info</span>
			        </div>
			        <h2 class="h2-guests_bold35 skeleton skeleton_txt">Personal info</h2>

			        <div class="skeleton">
			        	{{-- Input Name --}}
			        	@livewire('account.personal.name')

			        	{{-- Input Gender --}}
			        	@livewire('account.personal.gender')

			        	{{-- Input DateBirth --}}
			        	@livewire('account.personal.datebirth')

			        	{{-- Input Email --}}
			        	@livewire('account.personal.email')

			        	{{-- Input Phone --}}
			        	@livewire('account.personal.phone')

			        	{{-- Input Phone --}}
			        	@livewire('account.personal.governid')

			        	{{-- Input Address --}}
			        	@livewire('account.personal.address')

			        	{{-- Input Address --}}
			        	@livewire('account.personal.emergency')
			        </div>
			    </main>

			    <aside class="section-perfil_info-aside">
			        <div class="_cont-account skeleton">
			            <i class="fa-duotone fa-edit skeleton skeleton_txt"></i>
			            <div class="_txteh skeleton skeleton_txt" style="margin-bottom: 4px;">Which details can be edited?</div>
			            <p class="span-guests skeleton skeleton_txt">Details vvoutlet  uses to verify your identity can't be changed. Contact info and some personal details can be edited, but we may ask you verify your identity the next time you book or create a listing.</p>
			        </div>

			        <div class="_cont-account skeleton">
			            <i class="fa-duotone fa-address-card skeleton skeleton_txt"></i>
			            <div class="_txteh skeleton skeleton_txt" style="margin-bottom: 4px;">What info is shared with others?</div>
			            <p class="span-guests skeleton skeleton_txt">vvoutlet only releases contact information for Hosts and guests after a reservation is confirmed.</p>
			        </div>
			    </aside>
			</div>
        </div>
    </section>

@endsection


@section('script')

@endsection
