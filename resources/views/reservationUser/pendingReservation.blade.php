@extends('layouts.App')

@section('title') Pending Reservation @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/interna.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderGuest')

@endsection

@section('content')

    <section class="entero">
        <div class="medio">
            <div class="content_international">
                <div class="content-info-hosted">
                    <main class="site-content">
                        <div class="content-user_inf">
                            <div class="fx fx-fd-c gp20">
                                <h3 class="h2-guests skeleton skeleton_txt">Your reservation is pending</h3>

                                <p class="_txtec skeleton skeleton_txt">This reservation is not confirmed (yet). You will receive a response from the host, {{ $user['name'] }}, at {{ Auth::user()->email }} within 24 hours.</p>
                                <p class="_txtec skeleton skeleton_txt">Don't worry, we won't charge you anything until your reservation is confirmed.</p>
                            </div>
                        </div>

                        <div class="content-user_inf">
                            <div class="block-des-if wh-p100">
                                @livewire('reservation-user.contact-host-pending', [
                                    'listingId' => $reservation->Listings->id_listings,
                                    'listingTitle' => $reservation->Listings->title,
                                    'UserId' => $reservation->Listings->user_id,
                                    'name' => $user['name'],
                                    'avatar' => $user['avatar'],
                                    'avatar' => $user['avatar'],
                                ])
                            </div>
                        </div>

                        <div class="content-user-ics">
                            <div class="h2-guests skeleton skeleton_txt">Where you'll be</div>

                            <div class="content-user-ics-rules mr-t24">
                                <div class="_fw nrml">
                                    <span class="_txtblu skeleton skeleton_txt">House rules</span>

                                    @if ( count( $reservation->ListingPolicies->checkin_window_start ) != 0 )
                                        <div class="s-usr_icons skeleton skeleton_txt">
                                            <div class="_suis">
                                                <img src="{{ URL::asset('assets/img/icons/reloj.svg') }}" alt="">
                                            </div>
                                            <div class="_suisinfo">
                                                @if ( count( $reservation->ListingPolicies->checkin_window_end ) != 0 )
                                                    <div class="_txtec">Check-in:  {{ $reservation->ListingPolicies->checkin_window_start['time'] .' '. $reservation->ListingPolicies->checkin_window_start['type'] }} - {{ $reservation->ListingPolicies->checkin_window_end['time'] .' '. $reservation->ListingPolicies->checkin_window_end['type'] }} </div>
                                                @else
                                                    <div class="_txtec">Check-in:  {{ $reservation->ListingPolicies->checkin_window_start['time'] .' '. $reservation->ListingPolicies->checkin_window_start['type'] }} </div>
                                                @endif
                                            </div>
                                        </div>
                                    @endif


                                    @if ( count( $reservation->ListingPolicies->checkout_time ) != 0 )
                                        <div class="s-usr_icons skeleton skeleton_txt">
                                            <div class="_suis">
                                                <img src="{{ URL::asset('assets/img/icons/reloj.svg') }}" alt="">
                                            </div>
                                            <div class="_suisinfo">
                                                <div class="_txtec">Checkout: {{ $reservation->ListingPolicies->checkout_time['time'] .' '. $reservation->ListingPolicies->checkout_time['type'] }}</div>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="s-usr_icons skeleton skeleton_txt">
                                        <div class="_suis">
                                            <img src="{{ URL::asset('assets/img/icons/pets.svg') }}" alt="">
                                        </div>
                                        <div class="_suisinfo">
                                            @if ( $reservation->ListingsRulers->pets_allowed )
                                                <div class="_txtec">Pets Allowed</div>
                                            @else
                                                <div class="_txtec">No Pets Allowed</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="s-usr_icons skeleton skeleton_txt">
                                        <div class="_suis">
                                            <i class="fa-solid fa-smoking"></i>
                                        </div>
                                        <div class="_suisinfo">
                                            @if ( $reservation->ListingsRulers->smoking_allowed )
                                                <div class="_txtec">Smoking is allowed</div>
                                            @else
                                                <div class="_txtec">It is not allowed to smoke</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="s-usr_icons skeleton skeleton_txt">
                                        <div class="_suis">
                                            <i class="fa-solid fa-calendar-check"></i>
                                        </div>
                                        <div class="_suisinfo">
                                            @if ( $reservation->ListingsRulers->events_allowed )
                                                <div class="_txtec">Events are Allowed.</div>
                                            @else
                                                <div class="_txtec">No Events Allowed.</div>
                                            @endif
                                        </div>
                                    </div>

                                    @if ( $reservation->ListingsRulers->additional_rules != null )
                                        <button type="button" class="txtunder__ics mr-t16 herls skeleton">
                                            <div class="fx fx-ai-b gp5">
                                                <span class="">Show more</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                                                    <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#333"></path>
                                                </svg>
                                            </div>
                                        </button>
                                    @endif
                                </div>

                                <div class="_fw nrml">
                                    <span class="_txtblu skeleton skeleton_txt" style="margin-bottom: 16px;">House & safety</span>
                                    <div class="s-usr_icons skeleton skeleton_txt">
                                        <div class="_suis">
                                            <img src="{{ URL::asset('assets/img/icons/enhanced-black.svg') }}" alt="">
                                        </div>
                                        <div class="_suisinfo">
                                            <div class="_txtec">Committed to Airbnb's enhanced cleaning process. Show more</div>
                                        </div>
                                    </div>

                                    <div class="s-usr_icons skeleton skeleton_txt">
                                        <div class="_suis">
                                            <img src="{{ URL::asset('assets/img/icons/covid.svg') }}" alt="">
                                        </div>
                                        <div class="_suisinfo">
                                            <div class="_txtec">vvoutlet social-distancing and other COVID-19-related guidelines apply</div>
                                        </div>
                                    </div>

                                    @foreach ( $reservation->Listings->legal as $element )
                                        @if ( $loop->iteration <= 4 )
                                            <div class="s-usr_icons skeleton skeleton_txt">
                                                <div class="_suis">
                                                    <img src="{{ URL::asset('assets/img/icons/alert.svg') }}" alt="">
                                                </div>
                                                <div class="_suisinfo">
                                                    <div class="_txtec">{{ \App\Models\GuestSafety::Name( $element ) }}</div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                    @if ( count( $reservation->Listings->legal ) >= 5 )
                                        <button type="button" class="txtunder__ics mr-t16 hesfty skeleton">
                                            <div class="fx fx-ai-b gp5">
                                                <span class="">Show more</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                                                    <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#333"></path>
                                                </svg>
                                            </div>
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </main>

                    <aside class="content-aside_prec ctadpcedit skeleton">
                        <img src="{{ URL::asset( $photo ) }}" alt="">

                        <div class="ctinf txt-center">
                            <div class="fx fx-fd-c gp17">
                                <h1 class="h2_publish skeleton skeleton_txt">{{ $reservation->Listings->title }}</h1>

                                <div class="fx fx-fd-c gp30 skeleton">
                                    <div class="bkgrand">
                                        <span class="_txt-gris25">{{ Carbon\Carbon::parse( $reservation['date_in'], 'UTC')->locale('en')->isoFormat('ll') }} - {{ Carbon\Carbon::parse( $reservation['date_out'], 'UTC')->locale('en')->isoFormat('ll') }}</span>
                                    </div>

                                    <div class="fx fx-fd-c gp10">
                                        <span class="_txtec">Código de reservation</span>

                                        <div class="bkgrand">
                                            <span class="_txt-gris25 txt_upper">{{ $reservation['code_reservation'] }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>


    @section('modals')

    {{-- Modal Rulers Safety --}}
        @if ( count( $reservation->Listings->legal ) >= 5 )
            @include('reservationUser.modals.rulers-safety')
        @endif

    {{-- Modal Rulers --}}
        @if ( $reservation->ListingsRulers->additional_rules != null )
            @include('reservationUser.modals.rules')
        @endif

    @endsection

@endsection


@section('script')

@endsection
