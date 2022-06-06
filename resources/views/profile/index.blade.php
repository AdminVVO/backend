@extends('layouts.App')

@section('title') Profile @endsection

@section('css')

    @if ( Auth::check())
        <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>
    @else
        <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
    @endif
    <link href="{{ URL::asset('assets/css/perfil-anfitrion.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @if ( Auth::check())
        @include('layouts.HeaderAuth')
    @else
        @include('layouts.HeaderHome')
    @endif

@endsection

@section('content')

    <section class="entero">
        <div class="medio">
            <div class="content_intpublish">
                <div class="content-info-intpublish">

                    @livewire('profile.profile', ['idUser' => $idUser])

                    <main class="interna-publish">
                        <h2 class="h2-guests">Agustin's Listings</h2>

                        <div class="hidden_galerias">
                            <div class="content_galerias">
                                <div class="slideshow-container">
                                    <div class="star">
                                        <div class="content-star">
                                            <i class="fas fa-star"></i><span class="num-start"> 4.89</span><span class="num-total"> (15)</span>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <div class="card_love">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="27.003" height="23.878" viewBox="0 0 27.003 23.878">
                                                <g transform="translate(1.002 -1.245)" fill="rgba(222,222,222,0.38)" stroke="#dedede" stroke-width="2">
                                                    <path d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z"></path>
                                                    <path d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z"></path>
                                                </g>
                                            </svg>
                                        </div>
                                    </a>

                                    <div class="card_img">
                                        <img src="{{ URL::asset('assets/img/card/c1.jpg') }}" alt="" class="card_img_active">
                                        <img src="{{ URL::asset('assets/img/card/c2.jpg') }}" alt="">
                                        <img src="{{ URL::asset('assets/img/card/c3.jpg') }}" alt="">
                                    </div>

                                    <div class="content-dots">
                                        <span class="dot dot_active"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                    </div>
                                </div>
                                <div class="flex_info">
                                    <h4>Entire townhouse in Kissimmee</h4>
                                    <h2>Stars Gate Paradise stays in orlands</h2>
                                    <p class="desc_lc">10 guests  -  4 bedrooms  -  5 beds  -  2.5 baths</p>
                                    <button class="btn_lc">Pool</button>
                                    <button class="btn_lc">Free parking</button>
                                    <button class="btn_lc">Wifi</button>
                                    <button class="btn_lc">Kitchen</button>
                                    <p class="total_local">
                                        <i class="fas fa-dollar-sign"></i> 446 / night <i class="far fa-long-arrow-right"></i> <span class="t">Total</span> <i class="fas fa-dollar-sign"></i> 5,387
                                    </p>
                                </div>
                            </div>

                            <div class="content_galerias">
                                <div class="slideshow-container">
                                    <div class="star">
                                        <div class="content-star">
                                            <i class="fas fa-star"></i><span class="num-start"> 4.89</span><span class="num-total"> (15)</span>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <div class="card_love">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="27.003" height="23.878" viewBox="0 0 27.003 23.878">
                                                <g transform="translate(1.002 -1.245)" fill="rgba(222,222,222,0.38)" stroke="#dedede" stroke-width="2">
                                                    <path d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z"></path>
                                                    <path d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z"></path>
                                                </g>
                                            </svg>
                                        </div>
                                    </a>

                                    <div class="card_img">
                                        <img src="{{ URL::asset('assets/img/card3.jpg"') }}" alt="" class="card_img_active">
                                        <img src="{{ URL::asset('assets/img/card2.jpg') }}" alt="">
                                        <img src="{{ URL::asset('assets/img/card.jpg') }}" alt="">
                                    </div>

                                    <div class="content-dots">
                                        <span class="dot dot_active"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                    </div>
                                </div>
                                <div class="flex_info">
                                    <h4>Entire townhouse in Kissimmee</h4>
                                    <h2>Stars Gate Paradise at ...</h2>
                                    <p class="desc_lc">10 guests  -  4 bedrooms  -  5 beds  -  2.5 baths</p>
                                    <button class="btn_lc">Pool</button>
                                    <button class="btn_lc">Free parking</button>
                                    <button class="btn_lc">Wifi</button>
                                    <button class="btn_lc">Kitchen</button>
                                    <p class="total_local">
                                        <i class="fas fa-dollar-sign"></i> 446 / night <i class="far fa-long-arrow-right"></i> <span class="t">Total</span> <i class="fas fa-dollar-sign"></i> 5,387
                                    </p>
                                </div>
                            </div>

                            <div class="content_galerias">
                                <div class="slideshow-container">
                                    <div class="star">
                                        <div class="content-star">
                                            <i class="fas fa-star"></i><span class="num-start"> 4.89</span><span class="num-total"> (15)</span>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <div class="card_love">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="27.003" height="23.878" viewBox="0 0 27.003 23.878">
                                                <g transform="translate(1.002 -1.245)" fill="rgba(222,222,222,0.38)" stroke="#dedede" stroke-width="2">
                                                    <path d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z"></path>
                                                    <path d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z"></path>
                                                </g>
                                            </svg>
                                        </div>
                                    </a>

                                    <div class="card_img">
                                        <img src="{{ URL::asset('assets/img/card.jpg"') }}" alt="" class="card_img_active">
                                        <img src="{{ URL::asset('assets/img/card2.jpg') }}" alt="">
                                        <img src="{{ URL::asset('assets/img/card3.jpg') }}" alt="">
                                    </div>

                                    <div class="content-dots">
                                        <span class="dot dot_active"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                    </div>
                                </div>
                                <div class="flex_info">
                                    <h4>Entire townhouse in Kissimmee</h4>
                                    <h2>Stars Gate Paradise at ...</h2>
                                    <p class="desc_lc">10 guests  -  4 bedrooms  -  5 beds  -  2.5 baths</p>
                                    <button class="btn_lc">Pool</button>
                                    <button class="btn_lc">Free parking</button>
                                    <button class="btn_lc">Wifi</button>
                                    <button class="btn_lc">Kitchen</button>
                                    <p class="total_local">
                                        <i class="fas fa-dollar-sign"></i> 446 / night <i class="far fa-long-arrow-right"></i> <span class="t">Total</span> <i class="fas fa-dollar-sign"></i> 5,387
                                    </p>
                                </div>
                            </div>

                            <div class="content_galerias">
                                <div class="slideshow-container">
                                    <div class="star">
                                        <div class="content-star">
                                            <i class="fas fa-star"></i><span class="num-start"> 4.89</span><span class="num-total"> (15)</span>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <div class="card_love">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="27.003" height="23.878" viewBox="0 0 27.003 23.878">
                                                <g transform="translate(1.002 -1.245)" fill="rgba(222,222,222,0.38)" stroke="#dedede" stroke-width="2">
                                                    <path d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z"></path>
                                                    <path d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z"></path>
                                                </g>
                                            </svg>
                                        </div>
                                    </a>

                                    <div class="card_img">
                                        <img src="{{ URL::asset('assets/img/card/c8.jpg') }}" alt="" class="card_img_active">
                                        <img src="{{ URL::asset('assets/img/card/c7.jpg') }}" alt="">
                                        <img src="{{ URL::asset('assets/img/card/c6.jpg') }}" alt="">
                                    </div>

                                    <div class="content-dots">
                                        <span class="dot dot_active"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                    </div>
                                </div>
                                <div class="flex_info">
                                    <h4>Entire townhouse in Kissimmee</h4>
                                    <h2>Stars Gate Paradise at ...</h2>
                                    <p class="desc_lc">10 guests  -  4 bedrooms  -  5 beds  -  2.5 baths</p>
                                    <button class="btn_lc">Pool</button>
                                    <button class="btn_lc">Free parking</button>
                                    <button class="btn_lc">Wifi</button>
                                    <button class="btn_lc">Kitchen</button>
                                    <p class="total_local">
                                        <i class="fas fa-dollar-sign"></i> 446 / night <i class="far fa-long-arrow-right"></i> <span class="t">Total</span> <i class="fas fa-dollar-sign"></i> 5,387
                                    </p>
                                </div>
                            </div>

                            <div class="content_galerias">
                                <div class="slideshow-container">
                                    <div class="star">
                                        <div class="content-star">
                                            <i class="fas fa-star"></i><span class="num-start"> 4.89</span><span class="num-total"> (15)</span>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <div class="card_love">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="27.003" height="23.878" viewBox="0 0 27.003 23.878">
                                                <g transform="translate(1.002 -1.245)" fill="rgba(222,222,222,0.38)" stroke="#dedede" stroke-width="2">
                                                    <path d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z"></path>
                                                    <path d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z"></path>
                                                </g>
                                            </svg>
                                        </div>
                                    </a>

                                    <div class="card_img">
                                        <img src="{{ URL::asset('assets/img/card/c1.jpg') }}" alt="" class="card_img_active">
                                        <img src="{{ URL::asset('assets/img/card/c2.jpg') }}" alt="">
                                        <img src="{{ URL::asset('assets/img/card/c3.jpg') }}" alt="">
                                    </div>

                                    <div class="content-dots">
                                        <span class="dot dot_active"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                    </div>
                                </div>
                                <div class="flex_info">
                                    <h4>Entire townhouse in Kissimmee</h4>
                                    <h2>Stars Gate Paradise at ...</h2>
                                    <p class="desc_lc">10 guests  -  4 bedrooms  -  5 beds  -  2.5 baths</p>
                                    <button class="btn_lc">Pool</button>
                                    <button class="btn_lc">Free parking</button>
                                    <button class="btn_lc">Wifi</button>
                                    <button class="btn_lc">Kitchen</button>
                                    <p class="total_local">
                                        <i class="fas fa-dollar-sign"></i> 446 / night <i class="far fa-long-arrow-right"></i> <span class="t">Total</span> <i class="fas fa-dollar-sign"></i> 5,387
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="_line-hr" style="border-top-color: #E3EDF3; margin: 49px 0 45px"></div>

                        <div class="content-starg">
                            <i class="fas fa-star"></i>
                            <div class="h2-guests">3,986 Reviews</div>
                        </div>

                        <div class="_navbar-actlist">
                            <ul>
                                <li class="_1actv"><a class="btn-a_actlist active">From guests(3985)</a></li>
                                <li class="_2actv"><a class="btn-a_actlist">From hosts (1)</a></li>
                            </ul>
                        </div>

                        <div class="_gp-img">
                            <div class="usrscont-img">
                                <div class="showimg">
                                    <img src="{{ URL::asset('assets/img/card/c1.jpg') }}" alt="">
                                </div>

                                <div class="cblock">
                                    <div class="content-user_inf">
                                        <span class="_pf-msg">
                                            <img src="{{ URL::asset('assets/img/avatar/1.png') }}" alt="">
                                        </span>
                                        <div class="_bpf">
                                            <div class="_txteh">Jhom</div>
                                            <div class="_txtec16">January 2021</div>
                                        </div>
                                    </div>

                                    <div class="msgcont">
                                        <div class="_txteh">Starts Gate Paradise athasda as</div>
                                        <div class="_txtec14">November 2020</div>
                                        <span class="_txtec">Good place for value. Rooms were clean and it's just 5min away from Universal Studios! We had a good stay. If you want to visit the Universal studios, this is perfect</span>
                                    </div>
                                </div>
                            </div>

                            <div class="usrscont-img">
                                <div class="showimg">
                                    <img src="{{ URL::asset('assets/img/card/c8.jpg') }}" alt="">
                                </div>

                                <div class="cblock">
                                    <div class="content-user_inf">
                                        <span class="_pf-msg">
                                            <img src="{{ URL::asset('assets/img/avatar/5.jpg') }}" alt="">
                                        </span>
                                        <div class="_bpf">
                                            <div class="_txteh">Kim</div>
                                            <div class="_txtec16">January 2021</div>
                                        </div>
                                    </div>

                                    <div class="msgcont">
                                        <div class="_txteh">Starts Gate Paradise athasda as</div>
                                        <div class="_txtec14">November 2020</div>
                                        <span class="_txtec">Good place for value. Rooms were clean and it's just 5min away from Universal Studios! We had a good stay. If you want to visit the Universal studios, this is perfect</span>
                                    </div>
                                </div>
                            </div>

                            <div class="usrscont-img">
                                <div class="showimg">
                                    <img src="{{ URL::asset('assets/img/card/c1.jpg') }}" alt="">
                                </div>

                                <div class="cblock">
                                    <div class="content-user_inf">
                                        <span class="_pf-msg">
                                            <img src="{{ URL::asset('assets/img/avatar/6.jpg') }}" alt="">
                                        </span>
                                        <div class="_bpf">
                                            <div class="_txteh">Jane</div>
                                            <div class="_txtec16">January 2021</div>
                                        </div>
                                    </div>

                                    <div class="msgcont">
                                        <div class="_txteh">Starts Gate Paradise athasda as</div>
                                        <div class="_txtec14">November 2020</div>
                                        <span class="_txtec">Good place for value. Rooms were clean and it's just 5min away from Universal Studios! We had a good stay. If you want to visit the Universal studios, this is perfect</span>
                                    </div>
                                </div>
                            </div>

                            <div class="usrscont-img">
                                <div class="showimg">
                                    <img src="{{ URL::asset('assets/img/card/c10.jpg') }}" alt="">
                                </div>

                                <div class="cblock">
                                    <div class="content-user_inf">
                                        <span class="_pf-msg">
                                            <img src="{{ URL::asset('assets/img/avatar/7.jpg') }}" alt="">
                                        </span>
                                        <div class="_bpf">
                                            <div class="_txteh">Jhom</div>
                                            <div class="_txtec16">January 2021</div>
                                        </div>
                                    </div>

                                    <div class="msgcont">
                                        <div class="_txteh">Starts Gate Paradise athasda as</div>
                                        <div class="_txtec14">November 2020</div>
                                        <span class="_txtec">Good place for value. Rooms were clean and it's just 5min away from Universal Studios! We had a good stay. If you want to visit the Universal studios, this is perfect</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button type="button" class="btn-red alants">Show all 57 reviews</button>

                        <div class="_blockreport">
                            <button type="button" class="txtunder__ics click_msg_icon_denuncia">Report this profile</button>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </section>

    @section('modals')

    @endsection

@endsection

@section('script')

    <script src="{{ URL::asset('assets/js/modals-all_amenitles.js') }}"></script>
    <script src="{{ URL::asset('assets/js/perfil-anfitrion.js') }}"></script>
    <script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/slider_home.js') }}"></script>
    <script src="{{ URL::asset('assets/js/modals-min.js') }}"></script>

    <script type="text/javascript">
        $(".click_editprofile").click(function() {
            $(".p_interna_none").hide();
            $("._fr-block").show();
        });

        $(".click_cancelprofile").click(function() {
            $(".p_interna_none").show();
            $("._fr-block").hide();
        });
    </script>

@endsection
