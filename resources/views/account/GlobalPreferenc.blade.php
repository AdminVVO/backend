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
			        <div class="_flex-right16">
			            <a href="{{ route('account') }}" class="_txtec16">Account</a><i class="fas fa-chevron-right"></i><span class="_txtecbold16">Global preferences</span>
			        </div>
			        <h2 class="h2-guests_bold35">Global preferences</h2>

			        <div>
			        	<div class="_yellow-bg">
						    <div class="_bgpadding">
						        <div class="_cont-edit">
						            <div class="_txteh">Preferred languague</div>

						            <div class="_btnsm edit">
						                <span class="_fcontent">
						                    Edit
						                    <span class="_svg-asm">
						                        <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
						                    </span>
						                </span>
						            </div>
						            <div class="_btnsm cancel">
						                <span class="_fcontent">
						                    Cancel
						                    <span class="_svg-asm">
						                        <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
						                    </span>
						                </span>
						            </div>
						        </div>
                        		@livewire('account.preference.language')

						    </div>
						</div>

			            <div class="_yellow-bg">
			                <div class="_bgpadding">
			                    <div class="_cont-edit">
			                        <div class="_txteh">Preferred currency</div>

			                        <div class="_btnsm edit">
			                            <span class="_fcontent">
			                                Edit
			                                <span class="_svg-asm">
						                        <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
			                                </span>
			                            </span>
			                        </div>
			                        <div class="_btnsm cancel">
			                            <span class="_fcontent">
			                                Cancel
			                                <span class="_svg-asm">
						                        <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
			                                </span>
			                            </span>
			                        </div>
			                    </div>

                    			@livewire('account.preference.currency')

			                </div>
			            </div>

			            <div class="_yellow-bg">
			                <div class="_bgpadding">
			                    <div class="_cont-edit">
			                        <div class="_txteh">Time zone</div>

			                        <div class="_btnsm edit">
			                            <span class="_fcontent">
			                                Edit
			                                <span class="_svg-asm">
						                        <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
			                                </span>
			                            </span>
			                        </div>

			                        <div class="_btnsm cancel">
			                            <span class="_fcontent">
			                                Cancel
			                                <span class="_svg-asm">
						                        <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
			                                </span>
			                            </span>
			                        </div>
			                    </div>

		                        @livewire('account.preference.timezone')

			                </div>
			            </div>
			        </div>
			    </main>

			    <aside class="section-perfil_info-aside">
			        <div class="_cont-account">
			            <i class="fa-duotone fa-edit"></i>
			            <div class="_txteh" style="margin-bottom: 4px;">Your global preferences</div>
			            <p class="span-guests">Changing your currency updates how you see prices. You can change how you get payments in your payments & payouts preferences.</p>
			        </div>
			    </aside>
			</div>
        </div>
    </section>

@endsection


@section('script')

	<script type="text/javascript">
		window.addEventListener('closedEditContainer', event => {
			console.log("event", event);
			$("._yellow-bg").removeClass("personal_edit");
		})
	</script>

@endsection
