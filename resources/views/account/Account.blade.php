@extends('layouts.App')

@section('title') Account @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/account.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderAuth')

@endsection

@section('content')

    <section class="content_account entero">
        <div class="medio">
            <div class="section-account">
                <div class="showblock743 pd-b24">
                    <span class="pf-u fx">
                        @if ( file_exists( storage_path('app/public/uploadAvatar/' . Auth::user()->avatar  ) ) )
                            <img src="{{ URL::asset('storage/uploadAvatar/') .'/'. Auth::user()->avatar  }}" loading="lazy" alt="">
                        @else
                            <img src="{{ URL::asset('assets/img/avatar') }}/{{ Auth::user()->avatar }}" loading="lazy" alt="">
                        @endif
                    </span>

                    <h2 class="h2">{{ \App\Models\User::FullName() }}</h2>

                    <a href="{{ route('profile', Auth::id()) }}" class="txtunder__ics txt16 mr-t8">
                        <span class="">Show profile</span>
                    </a>
                </div>

                <div class="showblock743 mr-t13">
                    <div class="bbcpb hr">
                        <a href="{{ route('personal_info') }}">
                            <div class="pd-t16 pd-b16 fx">
                                <div class="w24h24 flex-centrado mr-r16">
                                    <i class="fal fa-circle-user _i-black23"></i>
                                </div>

                                <div class="flex-centrado fx-fd-c wh-p100">
                                    <div class="fx fx-ai-c fx-jc-sb fx-ai-c wh-p100">
                                        <span class="_txt-black2a16">Personal info</span>

                                        <span class="fx _txteh">
                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="display: block; fill: none; height: 16px; width: 16px; stroke: currentcolor; stroke-width: 4; overflow: visible;">
                                                <g fill="none">
                                                    <path d="m12 4 11.2928932 11.2928932c.3905243.3905243.3905243 1.0236893 0 1.4142136l-11.2928932 11.2928932"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <button type="button" class="wh-p100 click__account_modal">
                            <div class="pd-t16 pd-b16 fx">
                                <div class="w24h24 flex-centrado mr-r16">
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="display: block; fill: none; height: 24px; width: 24px; stroke: currentcolor; stroke-width: 1.33333; overflow: visible;">
                                        <path d="m19.38 27a4.14 4.14 0 0 1 3.05-2.54 4.06 4.06 0 0 1 3.17.71 1 1 0 0 0 1.47-.33l2.11-3.64a1 1 0 0 0 -.46-1.44 4.1 4.1 0 0 1 0-7.48 1 1 0 0 0 .46-1.44l-2.11-3.66a1 1 0 0 0 -1.47-.33 4.07 4.07 0 0 1 -3.17.71 4.14 4.14 0 0 1 -3.05-2.56 4 4 0 0 1 -.27-1.87 1 1 0 0 0 -1-1.15h-4.2a1 1 0 0 0 -1 1.15 4.11 4.11 0 0 1 -3.34 4.43 4.06 4.06 0 0 1 -3.17-.71 1 1 0 0 0 -1.47.33l-2.11 3.64a1 1 0 0 0 .46 1.44 4.1 4.1 0 0 1 0 7.48 1 1 0 0 0 -.46 1.44l2.11 3.64a1 1 0 0 0 1.47.33 4.06 4.06 0 0 1 3.17-.71 4.1 4.1 0 0 1 3 2.53 4 4 0 0 1 .28 1.88 1 1 0 0 0 1 1.15h4.18a1 1 0 0 0 1-1.15 4 4 0 0 1 .35-1.85zm-7.38-11a4 4 0 1 1 4 4 4 4 0 0 1 -4-4z" vector-effect="non-scaling-stroke" transform="translate(0,0)scale(1,1)" fill="none"></path>
                                    </svg>
                                </div>

                                <div class="flex-centrado fx-fd-c wh-p100">
                                    <div class="fx fx-ai-c fx-jc-sb fx-ai-c wh-p100">
                                        <span class="_txt-black2a16">Account</span>

                                        <span class="fx _txteh">
                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="display: block; fill: none; height: 16px; width: 16px; stroke: currentcolor; stroke-width: 4; overflow: visible;">
                                                <g fill="none">
                                                    <path d="m12 4 11.2928932 11.2928932c.3905243.3905243.3905243 1.0236893 0 1.4142136l-11.2928932 11.2928932"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>

                    <div class="bbcpb hr">
                        <h1 class="_txtbold3322 mr-t24 mr-b24 pd-t16">Hosting</h1>

                        <a href="admin-today.php">
                            <div class="pd-t16 pd-b16 fx">
                                <div class="w24h24 flex-centrado mr-r16">
                                    <i class="fal fa-bars-progress _i-black23"></i>
                                </div>

                                <div class="flex-centrado fx-fd-c wh-p100">
                                    <div class="fx fx-ai-c fx-jc-sb fx-ai-c wh-p100">
                                        <span class="_txt-black2a16">Manage your listing</span>

                                        <span class="fx _txteh">
                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="display: block; fill: none; height: 16px; width: 16px; stroke: currentcolor; stroke-width: 4; overflow: visible;">
                                                <g fill="none">
                                                    <path d="m12 4 11.2928932 11.2928932c.3905243.3905243.3905243 1.0236893 0 1.4142136l-11.2928932 11.2928932"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('signup-host') }}">
                            <div class="pd-t16 pd-b16 fx">
                                <div class="w24h24 flex-centrado mr-r16">
                                    <i class="fal fa-chart-tree-map _i-black23"></i>
                                </div>

                                <div class="flex-centrado fx-fd-c wh-p100">
                                    <div class="fx fx-ai-c fx-jc-sb fx-ai-c wh-p100">
                                        <span class="_txt-black2a16">Host an experience</span>

                                        <span class="fx _txteh">
                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="display: block; fill: none; height: 16px; width: 16px; stroke: currentcolor; stroke-width: 4; overflow: visible;">
                                                <g fill="none">
                                                    <path d="m12 4 11.2928932 11.2928932c.3905243.3905243.3905243 1.0236893 0 1.4142136l-11.2928932 11.2928932"></path>
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="bbcpb hr">
                        <form action="{{ route('logout') }}" class="mr-t24 mr-b24 pd-t16">
                            <button type="button" class="mr-b24" id="btnLeng">
                                <div class="fx fx-ai-c gp8">
                                    <i class="fa-regular fa-globe _i-black16"></i>

                                    <span class="_txtbold3314 _txtdec7d14">{{ \App\Models\LanguagesRegions::Language( Auth::user()->language_default ) }} ({{ Auth::user()->language_default }})</span>
                                </div>
                            </button>

                            <div class="txt-center">
                                <button type="submit" class="btn-celest wh-p100">Log out</button>

                                <p class="_txt-gris12 mr-t24">&copy; 2022 Vvoutlet, Inc, All rights reserved.</p>
                            </div>
                        </form>
                    </div>
                </div>


                <h2 class="h2 hideblock743">Account</h2>
                <p class="span-guests hideblock743">
                    <span class="_txteh" style="margin-bottom: 0;">{{ \App\Models\User::FullName() }}</span>, {{ Auth::user()->email }}<span class="_p">·</span><a href="{{ route('profile', Auth::id()) }}" class="_txtblu">Go to profile</a>
                </p>

                <div class="container_account_info">
                    <div class="_flex-account content_account_info">
                        <div class="bwpstrlz showblock743">
                            <div class="bwfxaihplprprzi">
                                <button type="button" aria-label="Prev" class="circle__btn-cerrar click__account_modal">
                                    <span class="pr">
                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false">
                                            <g fill="none">
                                                <path d="m20 28-11.29289322-11.2928932c-.39052429-.3905243-.39052429-1.0236893 0-1.4142136l11.29289322-11.2928932"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <h1 class="_txtbold3322 pd-t36 mr-t64 mr-b16 showblock743">Account</h1>

                        <a href="{{ route('personal_info') }}" class="_cont-account _cont-account_personalinfo">
                            <i class="fa-regular fa-address-card"></i>
                            <div class="_txteh" style="margin-bottom: 4px;">Personal info</div>
                            <p class="span-guests">Provide personal details and how we can reach you</p>
                        </a>

                        <a href="{{ route('login_segurity') }}" class="_cont-account">
                            <i class="fa-regular fa-keyboard"></i>
                            <div class="_txteh" style="margin-bottom: 4px;">Login & security</div>
                            <p class="span-guests">Update your password and secure your account</p>
                        </a>

                        <a href="{{ route('payment_payouts') }}" class="_cont-account">
                            <i class="fa-regular fa-money-bill-alt"></i>
                            <div class="_txteh" style="margin-bottom: 4px;">Payments & payouts</div>
                            <p class="span-guests">Review payments, payouts, coupons, gift cards, and taxes</p>
                        </a>

                        <a href="{{ route('global_preferen') }}" class="_cont-account">
                            <i class="fa-regular fa-edit"></i>
                            <div class="_txteh" style="margin-bottom: 4px;">Global preferences</div>
                            <p class="span-guests">Set your default language, currency, and timezone</p>
                        </a>
                    </div>
                </div>

{{--                 <div class="msgaround hideblock743">
                    <div class="_wcusermsg">
                        <span class="_txteh" style="display: block; margin-bottom: 0;">Need to deactivate your account?</span>
                    </div>
                    <button class="btn-celest">Take care of that now</button>
                </div> --}}
            </div>
        </div>
    </section>
@endsection


@section('script')

@endsection
