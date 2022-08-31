<div class="container_admin-host _ntñsfts _par0t0modls container_tsugpp" wire:ignore>
    <div class="modal-anhost"></div>

    <div class="pd_anhost-modal">
        <div class="_z4lmgp">
            <div class="modal_content-anhost">
                <div class="close">
                    <span>X</span>
                </div>

                <div class="modal_block">
                    <!-- <div class="content_hidden-anhost" style="margin-bottom: 0; padding-bottom: 15px;">
                            <h2 class="h2_publish">Your home reservation</h2>
                        </div> -->

                    <div class="fx wh-p100">
                        <div class="left_trips_popup_cont">
                            <div class="pd-b13">
                                <div class="trips_upcoming_inf">
                                    <div class="fx fx-fd-c gp17">
                                        <div class="fx fx-fd-c gp20">
                                            <div>
                                                <span class="_txtec16">INTERNATIONAL, {{ $reservation['date'] }}</span>
                                                <h2 class="h2_publish">Your home reservation</h2>
                                            </div>

                                            <a href="#" class="content_galerias mr0 modal_gal">
                                                <div class="slideshow-container"
                                                    style="max-width: 100%; height: 212px;">
                                                    <div class="card_img">
                                                        <img src="{{ URL::asset('storage/photos-listing/') . '/' . \App\Models\Listing\Listings::ListingFile($reservation['listing_id']) . '/' . $reservation['photo1'] }}"
                                                            class="card_img_active">
                                                        <img
                                                            src="{{ URL::asset('storage/photos-listing/') . '/' . \App\Models\Listing\Listings::ListingFile($reservation['listing_id']) . '/' . $reservation['photo2'] }}">
                                                        <img
                                                            src="{{ URL::asset('storage/photos-listing/') . '/' . \App\Models\Listing\Listings::ListingFile($reservation['listing_id']) . '/' . $reservation['photo3'] }}">
                                                    </div>

                                                    <div class="content-dots">
                                                        <span class="dot dot_active"></span>
                                                        <span class="dot"></span>
                                                        <span class="dot"></span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <h1 class="h2-guests">{{ $reservation['title'] }}</h1>
                                    </div>
                                </div>

                                <div class="trips_upcoming_inf">
                                    <div class="bk-icon-des">
                                        <div class="bk-icon-des_fbas fx-ai-b gp10 mnw-p47">
                                            <div class="txt-center w21">
                                                <i class="far fa-calendar-alt _i-red22"></i>
                                            </div>

                                            <div class="fx fx-fd-c gp7">
                                                <div class="h2-guests">Check in</div>

                                                <div>
                                                    <div class="_txtec16">{{ $reservation['checkin'] }}</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bk-icon-des_fbas fx-ai-b gp10 mnw-p47">
                                            <div class="txt-center w21">
                                                <i class="far fa-calendar-alt _i-red22"></i>
                                            </div>

                                            <div class="fx fx-fd-c gp7">
                                                <div class="h2-guests">Check out</div>

                                                <div>
                                                    <div class="_txtec16">{{ $reservation['checkout'] }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="trips_upcoming_inf">
                                    <div class="bk-icon-des">
                                        <div class="bk-icon-des_fbas fx-ai-b gp10 mnw-p47">
                                            <a href='https://google.cl/maps/place/{{$reservation['maps']}}' class="btn-bd-white wh-p100">
                                                <div class="fx fx-ai-c fx-jc-sb">
                                                    <div class="flex gp12">
                                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                            width="15.415" height="21.656" viewBox="0 0 15.415 21.656">
                                                            <path
                                                                d="M14.208,3A6.7,6.7,0,0,0,7.5,9.708c0,5.031,6.708,12.457,6.708,12.457s6.708-7.426,6.708-12.457A6.7,6.7,0,0,0,14.208,3Zm0,9.1a2.4,2.4,0,1,1,2.4-2.4A2.4,2.4,0,0,1,14.208,12.1Z"
                                                                transform="translate(-6.5 -2)" fill="none"
                                                                stroke="#ff5a5f" stroke-width="2"></path>
                                                        </svg>

                                                        <span class="_txteh mr0">Get directions</span>
                                                    </div>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="5.298"
                                                        height="9.266" viewBox="0 0 5.298 9.266">
                                                        <path
                                                            d="M4.635,3.7,8.138.194a.659.659,0,0,1,.935,0,.668.668,0,0,1,0,.938L5.1,5.105a.661.661,0,0,1-.913.019l-4-3.989A.662.662,0,0,1,1.128.2Z"
                                                            transform="translate(0 9.266) rotate(-90)" fill="#283646">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="bk-icon-des_fbas fx-ai-b gp10 mnw-p47">
                                            <a href="tel:{{ $reservation['phone'] }}" class="btn-bd-white wh-p100">
                                                <div class="fx fx-ai-c fx-jc-sb">
                                                    <div class="flex gp12">

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20.931"
                                                            height="20.953" viewBox="0 0 20.931 20.953">
                                                            <g transform="translate(-1.268 -0.947)" fill="none">
                                                                <path
                                                                    d="M3.3,6.273A1.247,1.247,0,0,1,3.62,5.6l2.54-2.54q.3-.254.445.085L8.658,6.993a.554.554,0,0,1-.106.656l-.931.931a1.053,1.053,0,0,0-.3.656,3.231,3.231,0,0,0,.656,1.63A13.919,13.919,0,0,0,9.272,12.56l.656.677c.2.2.451.441.763.73a12.779,12.779,0,0,0,1.534,1.143,3.433,3.433,0,0,0,1.683.709.921.921,0,0,0,.677-.275l1.1-1.1a.465.465,0,0,1,.634-.085l3.7,2.18a.309.309,0,0,1,.169.222A.27.27,0,0,1,20.11,17l-2.54,2.54a1.244,1.244,0,0,1-.677.317,5.121,5.121,0,0,1-2.34-.286,10.585,10.585,0,0,1-2.412-1.154q-1.111-.719-2.064-1.46t-1.524-1.27L8,15.163q-.211-.211-.561-.582t-1.218-1.46a21.258,21.258,0,0,1-1.5-2.127,12.41,12.41,0,0,1-1.1-2.36A5.021,5.021,0,0,1,3.3,6.273Z"
                                                                    stroke="none" />
                                                                <path
                                                                    d="M 6.387187957763672 2.94697380065918 C 6.320676803588867 2.94697380065918 6.245037078857422 2.983230590820312 6.160322189331055 3.055767059326172 L 3.620273590087891 5.595806121826172 C 3.437053680419922 5.807476043701172 3.33055305480957 6.033037185668945 3.302772521972656 6.27314567565918 C 3.204212188720703 6.964386940002441 3.310052871704102 7.751526832580566 3.620273590087891 8.633266448974609 C 3.931161880493164 9.515006065368652 4.297622680664062 10.30215644836426 4.720962524414062 10.99338626861572 C 5.144302368164062 11.68462657928467 5.64503288269043 12.39371681213379 6.223812103271484 13.12067604064941 C 6.802602767944336 13.84762668609619 7.209402084350586 14.33314609527588 7.442242622375488 14.58053684234619 C 7.675083160400391 14.82792663574219 7.862282752990723 15.02173614501953 8.003172874450684 15.16262626647949 L 8.553512573242188 15.69246673583984 C 8.93452262878418 16.0450267791748 9.442523002624512 16.4683666229248 10.07753276824951 16.96248626708984 C 10.71254253387451 17.45594596862793 11.40047264099121 17.94278717041016 12.14132308959961 18.4223461151123 C 12.88216304779053 18.90191650390625 13.68585300445557 19.28622627258301 14.55369281768799 19.57594680786133 C 15.42154312133789 19.86567687988281 16.20141220092773 19.9609260559082 16.89331245422363 19.8617057800293 C 17.13210296630859 19.83458709716797 17.35832214355469 19.72808647155762 17.56999206542969 19.54485702514648 L 20.11003303527832 17.00481605529785 C 20.18081283569336 16.93470764160156 20.20859336853027 16.85334587097168 20.1947021484375 16.76139640808105 C 20.18081283569336 16.66945648193359 20.12392234802246 16.59603691101074 20.02536201477051 16.53914642333984 L 16.32047271728516 14.35894680023193 C 16.09491157531738 14.21738433837891 15.88391208648682 14.24583625793457 15.68613243103027 14.44361686706543 L 14.58478260040283 15.54429626464844 C 14.40156269073486 15.72752666473389 14.17533302307129 15.81946659088135 13.90744304656982 15.81946659088135 C 13.49865245819092 15.81946659088135 12.93706321716309 15.58332633972168 12.22466278076172 15.11037635803223 C 11.51226234436035 14.63742637634277 11.00095272064209 14.25641632080078 10.69072246551514 13.96735668182373 C 10.37916278839111 13.67829608917236 10.12582302093506 13.43487644195557 9.928042411804199 13.23709678649902 L 9.271872520446777 12.56040668487549 C 8.848523139953613 12.09407615661621 8.417912483215332 11.52984619140625 7.980682373046875 10.86638641357422 C 7.543453216552734 10.20293617248535 7.324502944946289 9.659866333007812 7.324502944946289 9.236526489257812 C 7.352943420410156 8.968636512756348 7.451502799987793 8.749686241149902 7.620842933654785 8.580356597900391 L 8.552192687988281 7.649006843566895 C 8.73541259765625 7.437336921691895 8.771132469177246 7.218386650085449 8.658022880554199 6.992826461791992 L 6.604822158813477 3.140436172485352 C 6.548480987548828 3.01148796081543 6.475954055786133 2.94697380065918 6.387187957763672 2.94697380065918 M 6.38719367980957 0.9469757080078125 C 7.243114471435547 0.9469757080078125 8.003002166748047 1.441329956054688 8.393506050109863 2.244258880615234 L 10.44583320617676 6.096305847167969 C 10.91997241973877 7.041826248168945 10.77381324768066 8.138346672058105 10.06437301635742 8.95793628692627 L 10.01728248596191 9.012346267700195 L 9.502305030822754 9.527314186096191 C 9.542722702026367 9.596884727478027 9.59161376953125 9.676253318786621 9.650652885437012 9.765836715698242 C 10.02033519744873 10.32679653167725 10.38398551940918 10.80681133270264 10.73186874389648 11.19305896759033 L 11.35324668884277 11.8338680267334 C 11.54202461242676 12.02225303649902 11.7766752243042 12.24668312072754 12.05100250244141 12.50119686126709 C 12.18301296234131 12.62418651580811 12.52027320861816 12.90600681304932 13.33085250854492 13.44413661956787 C 13.45697116851807 13.52786540985107 13.56453323364258 13.59392261505127 13.6550121307373 13.64594173431396 L 14.27235317230225 13.02897644042969 C 14.76130294799805 12.54001617431641 15.39135265350342 12.2704963684082 16.0460033416748 12.2704963684082 C 16.49796485900879 12.2704963684082 16.94859504699707 12.39993095397949 17.35169219970703 12.64518928527832 L 21.03584098815918 14.81318378448486 C 21.65444183349609 15.17432594299316 22.06835556030273 15.7748327255249 22.17226219177246 16.46263694763184 C 22.28171157836914 17.18719863891602 22.0448055267334 17.90061569213867 21.52214431762695 18.42112350463867 L 18.93334197998047 21.00992584228516 L 18.87896347045898 21.0570068359375 C 18.37310981750488 21.49489784240723 17.77690505981445 21.76688194274902 17.15282821655273 21.84489250183105 C 16.89096832275391 21.88125228881836 16.61988830566406 21.89967727661133 16.34662246704102 21.89967727661133 C 15.58468246459961 21.89967727661133 14.76837253570557 21.75612640380859 13.92035293579102 21.4730167388916 C 12.89712238311768 21.13142585754395 11.93291282653809 20.66990661621094 11.05449295043945 20.10127639770508 C 10.27081298828125 19.59398651123047 9.529212951660156 19.06927680969238 8.850333213806152 18.54171752929688 C 8.163032531738281 18.00691604614258 7.621962547302246 17.55535697937012 7.195163726806641 17.16042709350586 L 7.166393280029297 17.13325691223145 L 6.588962554931641 16.57683563232422 C 6.42723274230957 16.41511535644531 6.224311828613281 16.20463562011719 5.98585319519043 15.9512767791748 C 5.702632904052734 15.65035629272461 5.268672943115234 15.13195610046387 4.659172058105469 14.36642646789551 C 4.033153533935547 13.5801362991333 3.480123519897461 12.79672622680664 3.015401840209961 12.03792667388916 C 2.52220344543457 11.23263645172119 2.091102600097656 10.31088638305664 1.73408317565918 9.298316955566406 C 1.320199966430664 8.12193775177002 1.180938720703125 7.017382621765137 1.319589614868164 6.013725280761719 C 1.398069381713867 5.389104843139648 1.670316696166992 4.792621612548828 2.10809326171875 4.286876678466797 L 2.155181884765625 4.232465744018555 L 4.800752639770508 1.586906433105469 L 4.859453201293945 1.536645889282227 C 5.428583145141602 1.049276351928711 6.004383087158203 0.9469757080078125 6.38719367980957 0.9469757080078125 Z"
                                                                    stroke="none" fill="#ff5a5f" />
                                                            </g>
                                                        </svg>

                                                        <span class="_txteh mr0">Call Host</span>
                                                    </div>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="5.298"
                                                        height="9.266" viewBox="0 0 5.298 9.266">
                                                        <path
                                                            d="M4.635,3.7,8.138.194a.659.659,0,0,1,.935,0,.668.668,0,0,1,0,.938L5.1,5.105a.661.661,0,0,1-.913.019l-4-3.989A.662.662,0,0,1,1.128.2Z"
                                                            transform="translate(0 9.266) rotate(-90)" fill="#283646">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="bk-icon-des_fbas fx-ai-b gp10 mnw-p47">
                                            <a href="{{ route('messageUserIndex', ['interna' => $reservation['listing_id']]) }}" class="btn-bd-white wh-p100">
                                                <div class="fx fx-ai-c fx-jc-sb">
                                                    <div class="flex gp12">
                                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                            width="19.209" height="19.209"
                                                            viewBox="0 0 19.209 19.209">
                                                            <path
                                                                d="M21.709,12.626a8.012,8.012,0,0,1-.86,3.633,8.126,8.126,0,0,1-7.266,4.493,8.012,8.012,0,0,1-3.633-.86L4.5,21.709l1.817-5.45a8.012,8.012,0,0,1-.86-3.633A8.126,8.126,0,0,1,9.95,5.36a8.012,8.012,0,0,1,3.633-.86h.478a8.107,8.107,0,0,1,7.648,7.648Z"
                                                                transform="translate(-3.5 -3.5)" fill="none"
                                                                stroke="#ff5a5f" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2" />
                                                        </svg>
                                                        <span class="_txteh mr0">Message Host</span>
                                                    </div>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="5.298"
                                                        height="9.266" viewBox="0 0 5.298 9.266">
                                                        <path
                                                            d="M4.635,3.7,8.138.194a.659.659,0,0,1,.935,0,.668.668,0,0,1,0,.938L5.1,5.105a.661.661,0,0,1-.913.019l-4-3.989A.662.662,0,0,1,1.128.2Z"
                                                            transform="translate(0 9.266) rotate(-90)" fill="#283646">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="bk-icon-des_fbas fx-ai-b gp10 mnw-p47">
                                            <a href="{{route('interna', $reservation['listing_id'])}}" class="btn-bd-white wh-p100">
                                                <div class="fx fx-ai-c fx-jc-sb">
                                                    <div class="flex gp12">
                                                        <i class="far fa-clipboard _i-red20"></i>

                                                        <span class="_txteh mr0">Show listing</span>
                                                    </div>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="5.298"
                                                        height="9.266" viewBox="0 0 5.298 9.266">
                                                        <path
                                                            d="M4.635,3.7,8.138.194a.659.659,0,0,1,.935,0,.668.668,0,0,1,0,.938L5.1,5.105a.661.661,0,0,1-.913.019l-4-3.989A.662.662,0,0,1,1.128.2Z"
                                                            transform="translate(0 9.266) rotate(-90)" fill="#283646">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="trips_upcoming_inf">
                                    <h2 class="h2-guests title mr-b21">Reservation details</h2>

                                    <div class="fx fx-fd-c gp18">
                                        <div class="fx fx-ai-c gp38">
                                            <div>
                                                <h3 class="_txteh mr0">Who's coming</h3>
                                                <span class="_txtec16">{{$reservation['next_count']}} guests</span>
                                            </div>

                                            <div>
                                                <div class="imgs_more">
                                                    <div class="fx w142">
                                                        @foreach($reservation['next_user_avatar'] as $key => $row)
                                                            @if($key <= 2)
                                                                <span class="_pf-msg">
                                                                    <img src="{{ URL::asset('assets/img/avatar') }}/{{ $row['avatar'] }}"
                                                                    loading="lazy" alt="">
                                                                </span>
                                                            @endif
                                                            @if($key == 3)
                                                                <span class="_pf-msg show_more_imgs">
                                                                    <div class="_moreusrmsg">
                                                                        <span class="_txtboldwhite16 fx fx-ai-c">+ <span
                                                                                class="_nswusrs-js">{{$reservation['next_count']-3}}</span>
                                                                        </span>
                                                                    </div>
                                                                    <img src="{{ URL::asset('assets/img/avatar') }}/{{ $row['avatar'] }}"
                                                                    loading="lazy" alt="">
                                                                </span>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <h3 class="_txteh mr0">Confirmation code</h3>
                                            <span class="_txtec16 txt_upper">hm3fmsaen4</span>
                                        </div>

                                        <div class="fx fx-fd-c gp8">
                                            <h3 class="_txteh mr0">Cancellation policy</h3>

                                            <div>
                                                <button type="button" class="txtunder__ics">Read more</button>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="bk-icon-des">
                                                <div class="bk-icon-des_fbas fx-ai-b gp10 mnw-p47">
                                                    <button wire:click="sharePDF" class="btn-bd-white wh-p100">
                                                        <div class="fx fx-ai-c fx-jc-sb">
                                                            <div class="flex gp12">
                                                                <i class="far fa-file-pdf _i-red20"></i>

                                                                <span class="_txteh mr0">Get a PDF</span>
                                                            </div>

                                                            <svg xmlns="http://www.w3.org/2000/svg" width="5.298"
                                                                height="9.266" viewBox="0 0 5.298 9.266">
                                                                <path
                                                                    d="M4.635,3.7,8.138.194a.659.659,0,0,1,.935,0,.668.668,0,0,1,0,.938L5.1,5.105a.661.661,0,0,1-.913.019l-4-3.989A.662.662,0,0,1,1.128.2Z"
                                                                    transform="translate(0 9.266) rotate(-90)"
                                                                    fill="#283646"></path>
                                                            </svg>

                                                        </div>
                                                    </button>
                                                </div>

                                                <div class="bk-icon-des_fbas fx-ai-b gp10 mnw-p47">
                                                    <button wire:click="sharePDFDetail" class="btn-bd-white wh-p100">
                                                        <div class="fx fx-ai-c fx-jc-sb">
                                                            <div class="flex gp12">
                                                                <i class="far fa-file-alt _i-red20"></i>

                                                                <span class="_txteh mr0">Print details</span>
                                                            </div>

                                                            <svg xmlns="http://www.w3.org/2000/svg" width="5.298"
                                                                height="9.266" viewBox="0 0 5.298 9.266">
                                                                <path
                                                                    d="M4.635,3.7,8.138.194a.659.659,0,0,1,.935,0,.668.668,0,0,1,0,.938L5.1,5.105a.661.661,0,0,1-.913.019l-4-3.989A.662.662,0,0,1,1.128.2Z"
                                                                    transform="translate(0 9.266) rotate(-90)"
                                                                    fill="#283646"></path>
                                                            </svg>
                                                        </div>
                                                    </button>
                                                </div>

                                                <div class="bk-icon-des_fbas fx-ai-b gp10 mnw-p47">
                                                    <a href="" class="btn-bd-white wh-p100">
                                                        <div class="fx fx-ai-c fx-jc-sb">
                                                            <div class="flex gp12">
                                                                <i class="far fa-list-alt _i-red20"></i>

                                                                <span class="_txteh mr0">Get Receipts</span>
                                                            </div>

                                                            <svg xmlns="http://www.w3.org/2000/svg" width="5.298"
                                                                height="9.266" viewBox="0 0 5.298 9.266">
                                                                <path
                                                                    d="M4.635,3.7,8.138.194a.659.659,0,0,1,.935,0,.668.668,0,0,1,0,.938L5.1,5.105a.661.661,0,0,1-.913.019l-4-3.989A.662.662,0,0,1,1.128.2Z"
                                                                    transform="translate(0 9.266) rotate(-90)"
                                                                    fill="#283646"></path>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="trips_upcoming_inf">
                                    <h2 class="h2-guests title">Getting there</h2>

                                    <div class="fx fx-fd-c mr-t21 mr-b17 gp8">
                                        <h3 class="_txteh mr0">Address</h3>

                                        <div>
                                            <p class="_txtec16 _txtcapit" id="address_one">{{$reservation['street'] ?? ''}} {{$reservation['city'] ?? ''}}</p>
                                            <p class="_txtec16 _txtcapit" id="address_two">{{$reservation['state'] ?? ''}}, {{$reservation['zip_code'] ?? ''}}</p>
                                        </div>
                                    </div>

                                    <div class="bk-icon-des">
                                        <div class="bk-icon-des_fbas fx-ai-b gp10 mnw-p47" onclick="copyAddress()">
                                            <a href="" class="btn-bd-white wh-p100">
                                                <div class="fx fx-ai-c fx-jc-sb">
                                                    <div class="fx fx-ai-c gp7">
                                                        <i class="far fa-clone _i-red20"></i>

                                                        <span class="_txteh mr0">Copy address</span>
                                                    </div>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="5.298"
                                                        height="9.266" viewBox="0 0 5.298 9.266">
                                                        <path
                                                            d="M4.635,3.7,8.138.194a.659.659,0,0,1,.935,0,.668.668,0,0,1,0,.938L5.1,5.105a.661.661,0,0,1-.913.019l-4-3.989A.662.662,0,0,1,1.128.2Z"
                                                            transform="translate(0 9.266) rotate(-90)" fill="#283646">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="bk-icon-des_fbas fx-ai-b gp10 mnw-p47">
                                            <a href='https://google.cl/maps/place/{{$reservation['maps']}}' class="btn-bd-white wh-p100">
                                                <div class="fx fx-ai-c fx-jc-sb">
                                                    <div class="flex gp12">
                                                        <svg class="icon" xmlns="http://www.w3.org/2000/svg"
                                                            width="15.415" height="21.656"
                                                            viewBox="0 0 15.415 21.656">
                                                            <path
                                                                d="M14.208,3A6.7,6.7,0,0,0,7.5,9.708c0,5.031,6.708,12.457,6.708,12.457s6.708-7.426,6.708-12.457A6.7,6.7,0,0,0,14.208,3Zm0,9.1a2.4,2.4,0,1,1,2.4-2.4A2.4,2.4,0,0,1,14.208,12.1Z"
                                                                transform="translate(-6.5 -2)" fill="none"
                                                                stroke="#ff5a5f" stroke-width="2"></path>
                                                        </svg>

                                                        <span class="_txteh mr0">Get directions</span>
                                                    </div>

                                                    <svg xmlns="http://www.w3.org/2000/svg" width="5.298"
                                                        height="9.266" viewBox="0 0 5.298 9.266">
                                                        <path
                                                            d="M4.635,3.7,8.138.194a.659.659,0,0,1,.935,0,.668.668,0,0,1,0,.938L5.1,5.105a.661.661,0,0,1-.913.019l-4-3.989A.662.662,0,0,1,1.128.2Z"
                                                            transform="translate(0 9.266) rotate(-90)" fill="#283646">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="trips_upcoming_inf">
                                    <h2 class="h2-guests title mr-b4">Your Host, <span
                                            class="_txtcapit">{{ $reservation['host_name'] }}</span>
                                    </h2>

                                    <div class="fx fx-ai-c show_profile">
                                        <span class="_pf-msg mr0">
                                            <img src="{{ URL::asset('assets/img/avatar') }}/{{ $reservation['avatar'] }}"
                                                loading="lazy" alt="">
                                        </span>

                                        <div>

                                            <a href="{{ route('profile', $reservation['user_id']) }}" class="txtunder__ics">Show profile</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="trips_upcoming_inf">
                                    <div class="fx fx-fd-c gp21">
                                        <h2 class="h2-guests title">Payment info</h2>

                                        <div class="fx fx-fd-c gp8">
                                            <h3 class="_txteh mr0">Payment details</h3>
                                            <p class="_txtec16">Total cost: ${{ $reservation['total_payout'] }}</p>
                                        </div>

                                        <div class="fx fx-fd-c gp17">
                                            <div class="fx fx-ai-c fx-jc-sb gp23">
                                                <div class="fx fx-fd-c gp8">
                                                    <h3 class="_txteh mr0">This is a business trip</h3>

                                                    <div>
                                                        <p class="_txtec16">Your company and is travel partners
                                                            will have</p>
                                                        <p class="_txtec16">Access to your trip details.</p>
                                                    </div>
                                                </div>

                                                <input type="checkbox" class="checkbox_custom">
                                            </div>

                                            <div class="bk-icon-des">
                                                <div class="bk-icon-des_fbas fx-ai-b gp10 mnw-p47">
                                                    <a href="" class="btn-bd-white wh-p100">
                                                        <div class="fx fx-ai-c fx-jc-sb">
                                                            <div class="flex gp9">
                                                                <i class="far fa-list-alt _i-red20"></i>

                                                                <span class="_txteh mr0">Get Receipts</span>
                                                            </div>

                                                            <svg xmlns="http://www.w3.org/2000/svg" width="5.298"
                                                                height="9.266" viewBox="0 0 5.298 9.266">
                                                                <path
                                                                    d="M4.635,3.7,8.138.194a.659.659,0,0,1,.935,0,.668.668,0,0,1,0,.938L5.1,5.105a.661.661,0,0,1-.913.019l-4-3.989A.662.662,0,0,1,1.128.2Z"
                                                                    transform="translate(0 9.266) rotate(-90)"
                                                                    fill="#283646"></path>
                                                            </svg>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="trips_upcoming_inf">
                                    <div class="fx fx-fd-c gp17">
                                        <h2 class="h2-guests title">Support</h2>

                                        <div class="bk-icon-des">
                                            <div class="bk-icon-des_fbas fx-ai-b gp10 mnw-p47">
                                                <a href="" class="btn-bd-white wh-p100">
                                                    <div class="fx fx-ai-c fx-jc-sb">
                                                        <div class="fx fx-ai-c gp7">
                                                            <i class="far fa-question-circle _i-red20"></i>

                                                            <span class="_txteh mr0">Help Center</span>
                                                        </div>

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="5.298"
                                                            height="9.266" viewBox="0 0 5.298 9.266">
                                                            <path
                                                                d="M4.635,3.7,8.138.194a.659.659,0,0,1,.935,0,.668.668,0,0,1,0,.938L5.1,5.105a.661.661,0,0,1-.913.019l-4-3.989A.662.662,0,0,1,1.128.2Z"
                                                                transform="translate(0 9.266) rotate(-90)"
                                                                fill="#283646"></path>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="bk-icon-des_fbas fx-ai-b gp10 mnw-p47">
                                                <a href="" class="btn-bd-white wh-p100">
                                                    <div class="fx fx-ai-c fx-jc-sb">
                                                        <div class="flex gp6">
                                                            <i class="far fa-building _i-red20"></i>

                                                            <span class="_txteh mr0">Resolution Center</span>
                                                        </div>

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="5.298"
                                                            height="9.266" viewBox="0 0 5.298 9.266">
                                                            <path
                                                                d="M4.635,3.7,8.138.194a.659.659,0,0,1,.935,0,.668.668,0,0,1,0,.938L5.1,5.105a.661.661,0,0,1-.913.019l-4-3.989A.662.662,0,0,1,1.128.2Z"
                                                                transform="translate(0 9.266) rotate(-90)"
                                                                fill="#283646"></path>
                                                        </svg>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="right_trips_popup_cont">
                            <div class="contact-map">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15604.935148163011!2d-77.00394301219576!3d-12.096141331618517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7d19478c6bf%3A0xb53809bf8f8b06c8!2sSan%20Borja!5e0!3m2!1ses-419!2spe!4v1640041907641!5m2!1ses-419!2spe"
                                    width="auto" height="auto" style="border:0;" allowfullscreen=""
                                    loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style scoped>
    .modal_gal {
        flex: 0 !important;
    }
</style>
<script>
    function copyAddress() {
        var aux = document.createElement("input");
        aux.setAttribute("value", document.getElementById("address_one").innerHTML);
        document.body.appendChild(aux);
        aux.select();
        document.execCommand("copy");
        document.body.removeChild(aux);
        this.preventDefault();
        
    }
</script>
