@extends('layouts.App')

@section('title') Personal Info @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/login-security.css') }}" rel="stylesheet"/>

@endsection

@section('content')

	<section class="entero">
        <div class="medio-two">
        	<div class="section_login-security">
	    		<main class="section_login-security-main">
			        <div class="_flex-right16">
			            <a href="{{ route('account') }}" class="_txtec16">Account</a><i class="fas fa-chevron-right"></i><span class="_txtecbold16">Login & Security</span>
			        </div>
			        <h2 class="h2-guests_bold35">Login & Security</h2>

			        <div>
			            <div class="_bgpad-lg">
			                <div class="h2-guests">Where you'll be</div>
			                <div>
			                    <div class="_cont-edit">
			                        <div class="_txteh">Password</div>

			                        <a href="#" class="_btnsm">
			                            <span class="_fcontent">
			                                Updated
			                                <span class="_svg-asm">
			                                    <img src="{{ URL::asset('icons/down-right.svg') }}" alt="">
			                                </span>
			                            </span>
			                        </a>
			                    </div>
			                    <div class="_txtec">Last update a month ago</div>
			                </div>
			            </div>

			            @livewire('social-account-component')
			            
			            @livewire('login-security-devices-component')

			            @livewire('desactivate-account-component')
			           			            
			        </div>
			    </main>

			    <aside class="section_login-security-aside">
			        <div class="_cont-account">
			            <i class="fad fa-shield-check"></i>
			            <div class="_txteh" style="margin-bottom: 4px;">Keeping your account secure</div>
			            <p class="span-guests">We regularly review accounts to make sure they're secure as possible. We'll also let you know if there's more we can do to increase the security of your account.</p>
			        </div>
			    </aside>
			</div>
        </div>
    </section>

@endsection


@section('script')

@endsection
