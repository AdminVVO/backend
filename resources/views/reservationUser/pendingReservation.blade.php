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

                                <p class="_txtec skeleton skeleton_txt">This reservation is not confirmed (yet). You will receive a response from the host, Anny, at Laura@gmail.com within 24 hours.</p>
                                <p class="_txtec skeleton skeleton_txt">Don't worry, we won't charge you anything until your reservation is confirmed.</p>
                            </div>
                        </div>

                        <div class="content-user_inf">
                            <div class="block-des-if wh-p100">
                                <div class="fx fx-fd-c gp25">
                                    <h2 class="h2-guests skeleton skeleton_txt">Meet the host</h2>

                                    <div class="content-user_inf" style="padding: 0;">
                                        <span class="_pf-msg fx skeleton">
                                            <img src="{{ URL::asset('assets/img/profile.png') }}" alt="">
                                        </span>

                                        <div>
                                            <div class="_txtec skeleton skeleton_txt">If you have any questions, Anny will help you</div>
                                        </div>
                                    </div>

                                    <textarea placeholder="Hello,..." class="_txta-modls skeleton" rows="6" maxlength="500"></textarea>

                                    <button class="btn-celest skeleton">Send message</button>
                                </div>
                            </div>
                        </div>

                        <div class="content-user-ics">
                            <div class="h2-guests skeleton skeleton_txt">Where you'll be</div>

                            <div class="content-user-ics-rules mr-t24">
                                <div class="_fw nrml">
                                    <span class="_txtblu skeleton skeleton_txt">House rules</span>

                                    <div class="s-usr_icons skeleton skeleton_txt">
                                        <div class="_suis">
                                            <img src="{{ URL::asset('assets/img/icons/reloj.svg') }}" alt="">
                                        </div>
                                        <div class="_suisinfo">
                                            <div class="_txtec">Check-in: After 4:00 PM</div>
                                        </div>
                                    </div>

                                    <div class="s-usr_icons skeleton skeleton_txt">
                                        <div class="_suis">
                                            <img src="{{ URL::asset('assets/img/icons/reloj.svg') }}" alt="">
                                        </div>
                                        <div class="_suisinfo">
                                            <div class="_txtec">Checkout: 11:00 AM</div>
                                        </div>
                                    </div>

                                    <div class="s-usr_icons skeleton skeleton_txt">
                                        <div class="_suis">
                                            <img src="{{ URL::asset('assets/img/icons/self-black.svg') }}" alt="">
                                        </div>
                                        <div class="_suisinfo">
                                            <div class="_txtec">Self check-in with keypad</div>
                                        </div>
                                    </div>

                                    <div class="s-usr_icons skeleton skeleton_txt">
                                        <div class="_suis">
                                            <img src="{{ URL::asset('assets/img/icons/pets.svg') }}" alt="">
                                        </div>
                                        <div class="_suisinfo">
                                            <div class="_txtec">Pets</div>
                                        </div>
                                    </div>

                                    <button type="button" class="txtunder__ics mr-t16 herls skeleton">
                                        <div class="fx fx-ai-b gp5">
                                            <span class="">Show more</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                                                <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#333"></path>
                                            </svg>
                                        </div>
                                    </button>
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

                                    <div class="s-usr_icons skeleton skeleton_txt">
                                        <div class="_suis">
                                            <img src="{{ URL::asset('assets/img/icons/alert.svg') }}" alt="">
                                        </div>
                                        <div class="_suisinfo">
                                            <div class="_txtec">No smoke alarm</div>
                                        </div>
                                    </div>

                                    <div class="s-usr_icons skeleton skeleton_txt">
                                        <div class="_suis">
                                            <img src="{{ URL::asset('assets/img/icons/alert.svg') }}" alt="">
                                        </div>
                                        <div class="_suisinfo">
                                            <div class="_txtec">Nearby lake, river, other body of water</div>
                                        </div>
                                    </div>

                                    <div class="s-usr_icons skeleton skeleton_txt">
                                        <div class="_suis">
                                            <img src="{{ URL::asset('assets/img/icons/alert.svg') }}" alt="">
                                        </div>
                                        <div class="_suisinfo">
                                            <div class="_txtec">Heights without rails or protection</div>
                                        </div>
                                    </div>

                                    <button type="button" class="txtunder__ics mr-t16 hesfty skeleton">
                                        <div class="fx fx-ai-b gp5">
                                            <span class="">Show more</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                                                <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#333"></path>
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </main>

                    <aside class="content-aside_prec ctadpcedit skeleton">
                        <img src="{{ URL::asset('assets/img/card/c10.jpg') }}" alt="">

                        <div class="ctinf txt-center">
                            <div class="fx fx-fd-c gp17">
                                <h1 class="h2_publish skeleton skeleton_txt">INTERNATIONAL dr/UNIVERSAL 2 Bedroom CONDO-HOTEL</h1>

                                <div class="fx fx-fd-c gp30 skeleton">
                                    <div class="bkgrand">
                                        <span class="_txt-gris25">Abril 28, 2022 - May 1, 2022</span>
                                    </div>

                                    <div class="fx fx-fd-c gp10">
                                        <span class="_txtec">Código de reservation</span>

                                        <div class="bkgrand">
                                            <span class="_txt-gris25 txt_upper">hmxc25jaql</span>
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

@endsection


@section('script')

@endsection
