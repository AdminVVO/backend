@extends('layouts.App')

@section('title') Dashboard Host @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderAuth')

@endsection

@section('content')

    <section class="entero _bkground_img">
        <img src="{{ URL::asset('assets/img/account-fondo.jpg') }}" alt="">
        <div class="medio">
            <div class="_flex">
                <div>
                    <h3 class="h2-guests_white60">Today</h3>
                </div>
                <a href="#" class="btn-celest btns-modals">Complete you listing</a>
            </div>

            <div class="_block_today">
                <div class="_bkg-today">
                    <div class="h2-20black">Diana haidee wants to book a trip</div>
                    <div class="_f">
                        <i class="far fa-comment-alt"></i>
                        <div class="h5">Jun 20 - 24<span class="h5_red">1h to respond</span></div>
                    </div>
                    <span class="_dsl-bt">D-SL 1bd</span>
                </div>
                <div class="_bkg-today">
                    <div class="h2-20black">Diana haidee wants to book a trip</div>
                    <div class="_f">
                        <i class="far fa-comment-alt"></i>
                        <div class="h5">Jun 20 - 24<span class="h5_red">1h to respond</span></div>
                    </div>
                    <span class="_dsl-bt">D-SL 1bd</span>
                </div>
                <div class="_bkg-today">
                    <div class="h2-20black">Diana haidee wants to book a trip</div>
                    <div class="_f">
                        <i class="far fa-comment-alt"></i>
                        <div class="h5">Jun 20 - 24<span class="h5_red">1h to respond</span></div>
                    </div>
                    <span class="_dsl-bt">D-SL 1bd</span>
                </div>
                <div class="_bkg-today">
                    <div class="h2-20black">Diana haidee wants to book a trip</div>
                    <div class="_f">
                        <i class="far fa-comment-alt"></i>
                        <div class="h5">Jun 20 - 24<span class="h5_red">1h to respond</span></div>
                    </div>
                    <span class="_dsl-bt">D-SL 1bd</span>
                </div>
            </div>
        </div>
    </section>

    <section class="entero">
        <div class="medio">
            <div class="_section-reserva">
                <div class="flex">
                    <h3 class="h2">Your reservations</h3>
                    <a href="admin-reservations.php" class="_btnsmleft">
                        <span style="margin-right: 3px;">All Reservations (58)</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                            <path d="M11.482,15.474l4-4.005a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071l-4.535,4.538a.755.755,0,0,1-1.043.022L6.408,12.543a.757.757,0,0,1,1.068-1.071Z" transform="translate(-11.246 16.772) rotate(-90)" fill="#333"/>
                        </svg>
                    </a>
                </div>

                <div class="navcont__flech-fx content-scroll-reserva">
                    <div class="cont_nav js__cont_nav">
                        <div class="nav__links-txt tab-container">
                            <button type="button" class="li__links-txt">
                                <span class="tabs_items active_tabs">Currently hosting (2)</span>
                            </button>

                            <button type="button" class="li__links-txt">
                                <span class="tabs_items">Arriving soon (2)</span>
                            </button>

                            <button type="button" class="li__links-txt">
                                <span class="tabs_items">Checking out (2)</span>
                            </button>

                            <button type="button" class="li__links-txt">
                                <span class="tabs_items">Next 7 days (2)</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="_bgpadd-currently">
                    <div class="block-hosting">
                        <div class="_pd1320">
                            <div class="h5_red">Currently hosting</div>
                            <h5 class="_txtprivat" style="margin-top: 3px;">D-WGL-Studio2</h5>

                            <div class="_f">
                                <div class="_img-f">
                                    <div class="_flex">
                                        <span class="_pf-msg">
                                            <img src="{{ URL::asset('assets/img/avatar/2.png') }}">
                                        </span>
                                    </div>
                                </div>
                                <div class="_b">
                                    <h2 class="h2-20black">Melissa</h2>
                                    <i class="far fa-calendar-alt"><div class="h5">Dec 4 - 8</div></i>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="_msg js__popup_pprnme">
                            <i class="far fa-envelope"></i>
                            <div class="joind-span">Message</div>
                        </button>
                    </div>

                    <div class="block-hosting">
                        <div class="_pd1320">
                            <div class="h5_red">Currently hosting</div>
                            <h5 class="_txtprivat" style="margin-top: 3px;">D-WGL-Studio1</h5>

                            <div class="_f">
                                <div class="_img-f">
                                    <div class="_flex">
                                        <span class="_pf-msg">
                                            <img src="{{ URL::asset('assets/img/avatar/8.jpg') }}">
                                        </span>
                                        <span class="_pf-msg">
                                            <img src="{{ URL::asset('assets/img/avatar/9.jpg') }}">
                                        </span>
                                    </div>
                                </div>
                                <div class="_b">
                                    <h2 class="h2-20black">Melissa</h2>
                                    <i class="far fa-calendar-alt"><div class="h5">Dec 4 - 8</div></i>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="_msg js__popup_pprnme">
                            <i class="far fa-envelope"></i>
                            <div class="joind-span">Message</div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('script')

@endsection
