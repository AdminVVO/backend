@extends('layouts.App')

@section('title') Host @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/host.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderAuth')

@endsection

@section('content')

<div class="entero" style="position: relative; overflow: hidden;">
    <div class="content_questions medio">
        <div class="_block-questions-host">
            <div class="h2-guests_bold35">Questions about hosting?</div>
            <div class="h2-guests_black60">Take a look at <span class="span_fs60-red">Susana</span>,</div>
            <div class="h2-guests_35">a Super Host in Orlando Florida. She tells her story of I exist and will be her guide for everything related to accommodation.</div>
        </div>
    </div>

    <img src="{{ URL::asset('assets/img/avatar/host-vvoutlet.png') }}" alt="" class="_pabslogo">
    <img src="{{ URL::asset('assets/img/avatar/girl-nivel.png') }}" alt="" class="_pabsgirl">
</div>

<div class="wo_home-questions entero">
    <div class="medio _mr-quest">
        <div class="h2-guests_white25">Questions about hosting?</div>
        <h3 class="h2-guests_white60">Get free one-on-one help</h3>
        <h3 class="h2-guests_white60">From vvoutlet best Hosts</h3>
        <a href="/validation/process" class="btn-red">Contact Us</a>
    </div>
</div>

<div class="entero home-text">
    <div class="medio">
        <img src="{{ URL::asset('assets/img/logo-color.png') }}" alt="">
        <div class="home-text_group">
            <p class="n-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sollicitudin tincidunt nisi, a vestibulum velit hendrerit id. Morbi nec elit ac augue cursus iaculis a non magna. Curabitur sit amet hendrerit eros. Ut hendrerit tellus suscipit viverra accumsan. Vestibulum in sem sed eros ultricies ultricies. Proin convallis convallis tempor.</p>
            <p class="n-paragraph">Phasellus ut tellus vel velit condimentum sagittis a quis massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut sed dignissim urna. Pellentesque mattis blandit odio a volutpat. Donec vitae nulla quis eros consectetur efficitur.</p>
        </div>
    </div>
</div>

<div class="entero">
    <div class="medio">
        <div class="quests_gap">
            <div class="container_quests-ga">
                <div class="_block-f">
                    <img src="{{ URL::asset('assets/img/card/q1.jpg') }}" alt="">
                </div>

                <div class="content-user_icons">
                    <div class="s-usr_icons">
                        <div class="_suis">
                            <img src="{{ URL::asset('assets/img/icons/hotel.png') }}" alt="">
                        </div>
                        <div class="_suisinfo">
                            <div class="_txteh">Personal tips and guidance</div>
                            <div class="_txtec">We've matched you with an experienced Superhost to answer all of your questions, whenever works best for you.</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container_quests-ga">
                <div class="_block-f">
                    <img src="{{ URL::asset('assets/img/card/q2.jpg') }}" alt="">
                </div>

                <div class="content-user_icons">
                    <div class="s-usr_icons">
                        <div class="_suis">
                            <img src="{{ URL::asset('assets/img/icons/hotel.png') }}" alt="">
                        </div>
                        <div class="_suisinfo">
                            <div class="_txteh">Hands-on help listing your place</div>
                            <div class="_txtec">Your Superhost will help you create your listing and share advice for taking photos, describing your space, and more.</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container_quests-ga">
                <div class="_block-f">
                    <img src="{{ URL::asset('assets/img/card/q3.jpg') }}" alt="">
                </div>

                <div class="content-user_icons">
                    <div class="s-usr_icons">
                        <div class="_suis">
                            <img src="{{ URL::asset('assets/img/icons/hotel.png') }}" alt="">
                        </div>
                        <div class="_suisinfo">
                            <div class="_txteh">Prep for your first guest</div>
                            <div class="_txtec">You'll get the support and direction you need to start welcoming guests and earn your first great review.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="btn-red_center">
            <a href="#" class="btn-red">Contact Us</a>
        </div>
    </div>
</div>

@endsection


@section('script')

@endsection
