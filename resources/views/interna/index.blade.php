@extends('layouts.App')

@section('title') Intern Details @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/interna.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderHome')

@endsection

@section('content')

    <section class="entero">
        <div class="medio">
            <div class="content_international">
                <h1 class="h2_publish text_tm1 skeleton skeleton_txt">{{ $content['title'] }}</h1>

                {{-- Encabezado --}}
                    @include('interna.encabezado')

                {{-- Gallery --}}
                    @include('interna.gallery')

                <div class="content-info-hosted">
                    <main class="site-content">

                        {{-- Property Rooms --}}
                            @include('interna.propertyroom')

                        <div class="_line-hr"></div>

                        <div class="content-user_icons" style="justify-content: space-between; grid-row-gap: 16px;">
                            <div class="bk-icon-des_fbas gp16 mnw-p49_f49">
                                <div class="dfjcacf0mw2 skeleton">
                                    <img src="{{ URL::asset('assets/img/icons/hotel.png') }}" alt="">
                                </div>

                                <div>
                                    <div class="_txteh skeleton skeleton_txt">Entire home</div>
                                    <div class="_txtec skeleton skeleton_txt">You'll have the condominium to yourself.</div>
                                </div>
                            </div>

                            <div class="bk-icon-des_fbas gp16 mnw-p49_f49">
                                <div class="dfjcacf0mw2 skeleton">
                                    <img src="{{ URL::asset('assets/img/icons/self_check-in.svg') }}" alt="">
                                </div>

                                <div>
                                    <div class="_txteh skeleton skeleton_txt">Self check-in</div>
                                    <div class="_txtec skeleton skeleton_txt">Check yourself in with the keypad.</div>
                                </div>
                            </div>

                            <div class="bk-icon-des_fbas gp16 mnw-p49_f49">
                                <div class="dfjcacf0mw2 skeleton">
                                    <img src="{{ URL::asset('assets/img/icons/enhanced.svg') }}" alt="">
                                </div>

                                <div>
                                    <div class="_txteh skeleton skeleton_txt">Enhanced Clean</div>
                                    <div class="_txtec skeleton skeleton_txt">This Host committed to vvoutlet 5-step enhanced cleaning process.</div>

                                    <button type="button" class="txtunder__ics mr-t6 enhancedcl skeleton">
                                        <div class="fx fx-ai-b gp5">
                                            <span class="">Show more</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                                                <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#333"/>
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                            </div>

                            <div class="bk-icon-des_fbas gp16 mnw-p49_f49">
                                <div class="dfjcacf0mw2 skeleton">
                                    <img src="{{ URL::asset('assets/img/icons/great-location.svg') }}" alt="">
                                </div>

                                <div>
                                    <div class="_txteh skeleton skeleton_txt">Great location</div>
                                    <div class="_txtec skeleton skeleton_txt">95% of recent guests gave the location a 5-star rating.</div>
                                </div>
                            </div>
                        </div>

                        {{-- Descriptions --}}
                            @include('interna.descriptions')

                        <div class="_line-hr"></div>

                        {{-- Gallery Rooms --}}
                            @include('interna.gallery-room')


                        <div class="_line-hr"></div>

                        {{-- Ammenities --}}
                            @include('interna.amenities')

                        <div class="_line-hr"></div>

                        {{-- Travel --}}
                            @include('interna.travel-pricing')

                        <div class="_line-hr"></div>

                        {{-- Reviews --}}
                            @include('interna.reviews')

                        <div class="_line-hr"></div>

                            @include('interna.maps')

                        <div class="_line-hr" style="border-top-color: #E3EDF3;"></div>

                        {{-- Details Host --}}
                            @include('interna.details-host')

                        <div class="_line-hr" style="border-top-color: #E3EDF3;"></div>

                        {{-- Rulers --}}
                            @include('interna.rulers')

                        <div class="msgaround gp20 mr-t40">
                            <div class="_wcusermsg">
                                <div class="_txteh skeleton skeleton_txt">Cancellation policy</div>
                                <div class="_txtec mr-t8 skeleton skeleton_txt" style="line-height: 24px;">Add your trip dates to get the cancellation details for this stay.</div>
                            </div>

                            <div>
                                <button class="btn-celest skeleton">Add dates</button>
                            </div>
                        </div>
                    </main>

                    {{-- Form Reservations --}}
                        @livewire('interna.interna-form-reserve', ['listingId' => $content['id_listings'] ])
                </div>
            </div>

            <div class="_asidefix">
                <div class="entero">
                    <div class="medio">
                        <div class="_asideflex">
                            <div class="block_prec-res skeleton">
                                <span class="opac">$/345</span>
                                <span class="prec_black">$/446</span>
                                <span class="txt_night">/night</span>
                            </div>

                            <button type="button" class="btn-celest rscrm skeleton">Reserve</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    @section('modals')

        {{-- Modal Gallery --}}
        @include('interna.modals.gallery')

        {{-- Modal Descriptions --}}
        @include('interna.modals.descriptions')

        {{-- Modal Shared --}}
        @include('interna.modals.shared')

        {{-- Modal Favority --}}
        @include('home.modals.favorite')

        {{-- Modal Rulers Safety --}}
        @include('interna.modals.ruler-safety')

        {{-- Modal Rulers --}}
        @include('interna.modals.rulers')

        {{-- Modal Enchanced Clean --}}
        @include('interna.modals.enhanced-clean')

        {{-- Modal Enchanced Clean --}}
        @include('interna.modals.amenitles')

        {{-- Modal Contact Host --}}
        @include('interna.modals.contact-host')


    @endsection

@endsection

@section('script')

    <script src="{{ URL::asset('assets/js/modals-min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/modals-gallerys.js') }}"></script>

    <script>
        lightbox(document.getElementById('gallery-container'));

        window.addEventListener('closedModalFavority', event => {
            console.log("closedModalFavority");
            $(".container_user-host, .container_admin-host, .container_preview_guests_pay").hide();
            $(".page-category").css({'overflow': 'auto'});
        })

        const pickerHome = new easepick.create({
            element: '#easypickHome',
            css: [
                'https://cdn.jsdelivr.net/npm/@easepick/core@1.2.0/dist/index.css',
                'https://cdn.jsdelivr.net/npm/@easepick/range-plugin@1.2.0/dist/index.css',
            ],
            plugins: ['RangePlugin'],
            format: 'DD MMM',
            calendars: 2,
            grid: 2,
            autoApply: false,
                tooltip: true,
                locale: {
                    one: 'day',
                    other: 'days',
                },
            RangePlugin: {
                elementEnd: '#endEasypickHome',
            },
            setup(pickerHome) {
                pickerHome.on('select', (e) => {
                var content = [
                    startDate = pickerHome.getStartDate(),
                    endDate = pickerHome.getEndDate(),
                ];
                Livewire.emitTo('home.search-places', 'selectDate', content )
              });
            },
        });
        $('.endEasypick').click(function(event) {
            pickerHome.show();
        });

        const pickerInterna = new easepick.create({
            element: '#easypickInterna',
            css: [
                'https://cdn.jsdelivr.net/npm/@easepick/core@1.2.0/dist/index.css',
                'https://cdn.jsdelivr.net/npm/@easepick/range-plugin@1.2.0/dist/index.css',
                'https://cdn.jsdelivr.net/npm/@easepick/lock-plugin@1.2.0/dist/index.css',
            ],
            plugins: ['RangePlugin','LockPlugin'],
            format: 'DD MMM',
            calendars: 2,
            grid: 2,
            autoApply: true,
            inline: true,
            tooltip: true,
            locale: {
                one: 'day',
                other: 'days',
            },
            LockPlugin: {
              minDate: new Date(),
            },
            setup(pickerInterna) {
                pickerInterna.on('select', (e) => {
                var content = [
                    startDate = pickerInterna.getStartDate(),
                    endDate = pickerInterna.getEndDate(),
                ];
                // Livewire.emitTo('home.search-places', 'selectDate', content )
              });
            },
        });


    </script>
@endsection
