@extends('layouts.App')

@section('title') Intern Details @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/interna.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet"/>
    {{-- <link href="{{ URL::asset('assets/css/modals-admin.css') }}" rel="stylesheet"/> --}}
    <link href="{{ URL::asset('assets/css/modals-user.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderAuth')

@endsection

@section('content')

    <section class="entero">
        <div class="medio">
            <div class="content_international">
                <h1 class="h2_publish text_tm1" style="padding-right: 35px;">{{ $content['title'] }}</h1>

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
                                <div class="dfjcacf0mw2">
                                    <img src="{{ URL::asset('assets/img/icons/hotel.png') }}" alt="">
                                </div>

                                <div>
                                    <div class="_txteh">Entire home</div>
                                    <div class="_txtec">You'll have the condominium to yourself.</div>
                                </div>
                            </div>

                            <div class="bk-icon-des_fbas gp16 mnw-p49_f49">
                                <div class="dfjcacf0mw2">
                                    <img src="{{ URL::asset('assets/img/icons/self_check-in.svg') }}" alt="">
                                </div>

                                <div>
                                    <div class="_txteh">Self check-in</div>
                                    <div class="_txtec">Check yourself in with the keypad.</div>
                                </div>
                            </div>

                            <div class="bk-icon-des_fbas gp16 mnw-p49_f49">
                                <div class="dfjcacf0mw2">
                                    <img src="{{ URL::asset('assets/img/icons/enhanced.svg') }}" alt="">
                                </div>

                                <div>
                                    <div class="_txteh">Enhanced Clean</div>
                                    <div class="_txtec">This Host committed to vvoutlet 5-step enhanced cleaning process.</div>

                                    <button type="button" class="txtunder__ics mr-t6 enhancedcl">
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
                                <div class="dfjcacf0mw2">
                                    <img src="{{ URL::asset('assets/img/icons/great-location.svg') }}" alt="">
                                </div>

                                <div>
                                    <div class="_txteh">Great location</div>
                                    <div class="_txtec">95% of recent guests gave the location a 5-star rating.</div>
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
                                <div class="_txteh">Cancellation policy</div>
                                <div class="_txtec mr-t8" style="line-height: 24px;">Add your trip dates to get the cancellation details for this stay.</div>
                            </div>

                            <div>
                                <button class="btn-celest">Add dates</button>
                            </div>
                        </div>
                    </main>

                    {{-- Form Reservations --}}
                        @include('interna.form-reserv')
                        
                </div>
            </div>

            <div class="_asidefix">
                <div class="entero">
                    <div class="medio">
                        <div class="_asideflex">
                            <div class="block_prec-res">
                                <span class="opac">$/345</span>
                                <span class="prec_black">$/446</span>
                                <span class="txt_night">/night</span>
                            </div>

                            <button type="button" class="btn-celest rscrm">Reserve</button>
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
        @include('interna.modals.favority')

        {{-- Modal Rulers Safety --}}
        @include('interna.modals.ruler-safety')

        {{-- Modal Rulers --}}
        @include('interna.modals.rulers')


    @endsection

@endsection

@section('script')

    <script src="{{ URL::asset('assets/js/modals-min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/modals-gallerys.js') }}"></script>

    <script>
        lightbox(document.getElementById('gallery-container'));

        var picker = new Lightpick({
            field: document.getElementById('showPicker-interna'),
            inline: true,
            selectForward: true,
            singleDate: false,
            hoveringTooltip: false,
            numberOfMonths: 2,
            minDate: moment().startOf('MMMM D, YYYY').add(0, 'day'),
            onSelect: function(start, end){
                var str = '';
                str += start ? start.format('MMM DD, YYYY') + ' - ' : 'Add your travel dates for exact pricing';
                str += end ? end.format('MMM DD, YYYY') : '';
                document.getElementById('show__date-fechas').innerHTML = str;
            },
            footer: true,
            locale: {
                buttons: {
                    prev: '',
                    next: '',
                    reset: 'Clear dates',
                    apply: ''
                }
            }
        });
        
        const modalImgsG = document.querySelector('._img-modal');
        const gallerysList = document.querySelectorAll('._pbkgallery');
        gallerysList.forEach((list) => {
            const view = list.querySelector('._link-img');
            const galleryImg = list.querySelector('._img-wh').getAttribute('src');

            view.addEventListener('click', () => {
                modalImgsG.setAttribute('src', galleryImg);
            });
        });
        $(document).ready(function() {
            $('._cgprelright ._pbkgallery').click(function(){
               $('._pbkgallery').removeClass("active");
               $(this).addClass("active");
            });
        });
        $(".show_all-photos-interna").on("click", function() {
            $(".container_gallerys").addClass("keyframes_animate").css({
                'top': '0',
                'opacity': '1',
                'visibility': 'visible'
            });

            $(this).parents(".page-category").css({'overflow': 'hidden'});
        });
        $(".btn-x_galls").on("click", function() {
            $(".container_gallerys").removeClass("keyframes_animate").css({
                'top': '100vh',
                'opacity': '0',
                'visibility': 'hidden'
            });

            $(this).parents(".page-category").css({'overflow': 'auto'});
        })

        function animateTopModals() {
            $('html, body').animate({
                scrollTop: $("body").offset().top
            }, 0);

            $(".page-category").css({'overflow': 'hidden'});
        }
        $(".abspc").on("click", function() {
            $(".container_about-space").show();
            animateTopModals();
        });
        $(".hesfty").on("click", function() {
            $(".container_house-safety").show();
            animateTopModals();
        });
        $(".herls").on("click", function() {
            $(".container_house-rules").show();
            animateTopModals();
        });
        $(".showFavorite").on("click", function() {
            animateTopModals();
            $(".container-wishlists-create").show();
        });

     </script>
@endsection
