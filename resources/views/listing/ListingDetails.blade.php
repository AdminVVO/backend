@extends('layouts.App')

@section('title') Listings Details @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>

{{--     <style type="text/css">
        .lightpick {
            min-width: fit-content;
        }

        .lightpick__months {
            display: flex !important;
            justify-content: space-between;
        }
    </style> --}}

@endsection

@section('header')

    <div class="h_admin mrb-0">
        @include('layouts.HeaderAuth')
    </div>


@endsection

@section('content')
    
    <section class="entero c_linsting" style="margin-top: 50px;">
        <div class="medio">
            <div class="c_listing-post fx">
                @livewire('listing.details.left-details', ['listing' => $listing])
                @livewire('listing.details.right-details', ['listing' => $listing])
            </div>
        </div>
    </section>

    @section('modals')

        {{-- Modal Photos All --}}
        @include('livewire.listing.details.modals.photos-all')

        {{-- Modal Photos Cover --}}
        @include('livewire.listing.details.modals.photo-cover')

        {{-- Modal Photos Edit --}}
        @include('livewire.listing.details.modals.photos-edit')

        {{-- Modal Listings Amenities --}}
        @include('livewire.listing.details.modals.amenities')



        {{-- Modal Listings Status Unlisted --}}
        {{-- @include('livewire.listing.details.modals.desactivate') --}}
        
        {{-- Modal FeedBack --}}
        {{-- @include('livewire.listing.details.modals.feedback') --}}

        {{-- Modal Listings Status Snoozed --}}
        {{-- @include('livewire.listing.details.modals.snoozed') --}}



        {{-- Modal Listings Rooms and Spaces --}}
        {{-- @include('livewire.listing.details.modals.roomspace') --}}

        {{-- Modal Listings Instant Book Off --}}
        {{-- @include('livewire.listing.details.modals.instantbook') --}}

    @endsection

@endsection

@section('script')

    <script type="text/javascript">
        Livewire.hook('message.processed', (message, component) => {
            $(".click_show_more").on('click', function() {
                $(this).parent().find(".show_more_info").show();
                $(this).parent().find(".click_show_more").hide();
            });
            $(".js__popupEditAddCaption").on("click", function() {
                animateTopModals();
                $(".container_ppetpo").show();
            });
            $(".input_cant_view").each(function() {
                var longitud = $(this).val().length;
                $(this).parent().find('.views_num').html(longitud);

                $(this).keyup(function() {
                    var nueva_longitud = $(this).val().length;
                    $(this).parent().find('.views_num').html(nueva_longitud);
                });
            });
            carouselListinPost();
            amenitiesHidePost();

        })
        
        window.addEventListener('closeCoverModal', event => {
            $(".containerppcepo").hide();
        })
        
        window.addEventListener('closeCommentModal', event => {
            $(".container_ppetpo").hide();
        })

        function carouselListinPost() {
            var element = $('.content_listing_details .cont_listing_group .pd-r13');
            var slider = $('.content_listing_details .cont_listing_group');
            var sliderWrapper = $('.content_listing_details .post_right_carrousel');
            var totalWidth = sliderWrapper.innerWidth();
            var elementWidth = element.outerWidth();
            var sliderWidth = 0;
            var newPositionSlideX = 0;

            sliderWrapper.append('<div class="nav__listingPost"><button type="button" class="prev-slide prev"><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="display: block; fill: none; height: 14px; width: 14px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;"><g fill="none"><path d="m20 28-11.29289322-11.2928932c-.39052429-.3905243-.39052429-1.0236893 0-1.4142136l11.29289322-11.2928932"></path></g></svg></button><button type="button" class="next-slide next"><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="display: block; fill: none; height: 14px; width: 14px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;"><g fill="none"><path d="m12 4 11.2928932 11.2928932c.3905243.3905243.3905243 1.0236893 0 1.4142136l-11.2928932 11.2928932"></path></g></svg></button></div>');
    
            element.each(function(){
                sliderWidth = sliderWidth + $(this).outerWidth() + 1;
            });
        
            slider.css({
                'width': sliderWidth
            });

            $('.nav__listingPost .next-slide').click(function() {
                if (newPositionSlideX > (totalWidth - sliderWidth)) {
                    newPositionSlideX = newPositionSlideX - elementWidth;
                    
                    slider.css({
                        'left' : newPositionSlideX
                    }, check());
                };
            });
        
            $('.nav__listingPost .prev-slide').click(function() {
                if (newPositionSlideX >= -sliderWidth) {
                    newPositionSlideX = newPositionSlideX + elementWidth;
                    
                    slider.css({
                        'left' : newPositionSlideX
                    }, check());
                };
            });
    
            function check() {
                if (sliderWidth >= totalWidth && newPositionSlideX > (totalWidth - sliderWidth)) {
                    $('.nav__listingPost .next').css({
                        'right' : '0'
                    }).find("button").attr("disabled", false);
                } else {
                    $('.nav__listingPost .next').css({
                        'right' : -$(this).width()
                    }).find("button").attr("disabled", true);
                };
            
                if( newPositionSlideX < 0){
                    $('.nav__listingPost .prev').css({
                        'left' : '0'
                    }).find("button").attr("disabled", false);
                } else {
                    $('.nav__listingPost .prev').css({
                        'left' : -$(this).width()
                    }).find("button").attr("disabled", true);
                };
            };
    
            $(window).resize(function() {
                totalWidth = sliderWrapper.innerWidth();
                check();
            });

            check();
        }

        function amenitiesHidePost() {
            let obj = $(".js_amenitiesPostShowHide .wflex").find("p");

            $.each(obj, function(i) {
                if ((i + 1) >= 10) {
                    if ((i) >= 10) {
                        $(this).closest(".js_amenitiesPostShowHide .wflex p").css({'display': 'none'});
                        $(this).parents().find(".js__showMoreAmenitiesPost").removeClass("dn");
                    }
                }
            });
        }

        window.addEventListener('closeModals', event => {
            $(".container_admin-host").hide();
            $(".page-category").css({'overflow': 'auto'});
        })
    </script>

{{--     <script src="{{ URL::asset('assets/js/modals-min.js') }}"></script>

    <script>

        $('.content_listing_details .block ._btnsm.edit').click(function(){
            $(this).parents(".block").addClass("edit_listing_post");
        });
        $(".click_cancel_listing").click(function() {
            $(this).parents(".block").removeClass("edit_listing_post");
        });

        $(".anuncio_start_hosting").show();
        $(".click_x_anuncio").click(function() {
            $(".anuncio_start_hosting").hide();
        });

        $(".input_cant_view").keyup(function() {
            $(this).parents(".show_form_input ._flfpc").find(".views_num").html( $(this).val().length );
        });

        $(".click_show_more").on('click', function() {
            $(this).parent().find(".show_more_info").show();
            $(this).parent().find(".click_show_more").hide();
        });

        $("._input").keyup(function() {
            if ( $(this).val().length > 0) {
                $(this).parents(".link_label_input").find(".text_placeholder").removeClass("text_placeholder").addClass("_txtec");
            } else {
                $(this).parents(".link_label_input").find("._txtec").removeClass("_txtec").addClass("text_placeholder");
            }
        });
            
        $(".click_minumum_nights").click(function() {
            $(".show_minimum_nights").css({'display': 'flex'});
            $(".click_minumum_nights").hide();
        });

        const $cover_photos = $(".show_cover_photo");
        $(document).mouseup(e => {
            if (!$cover_photos.is(e.target) && $cover_photos.has(e.target).length === 0) {
                $("._show_modal-photos").removeClass("is-active");
            }
        });
        $(".click_cover_photos").on("click", function() {
            let toggleClass = $(this).parents("._show_modal-photos").hasClass('is-active') ? true : false;
            $("._show_modal-photos").removeClass("is-active");

            if(!toggleClass) {
                $(this).parents("._show_modal-photos").addClass("is-active");
            }
        });
        $(".click_options_photos").on("click", function() {
            let toggleClass = $(this).parents("._show_modal-photos").hasClass('is-active') ? true : false;
            $("._show_modal-photos").removeClass("is-active");

            if(!toggleClass) {
                $(this).parents("._show_modal-photos").addClass("is-active");
            }
        });

        function hideShowListingStatus(val) {
            if (val == "unlisted") {
                $('html, body').animate({
                    scrollTop: $("body").offset().top
                }, 0);

                $(".page-category").css({'overflow': 'hidden'});
                $(".container_lspopupdesct").show();
            }

            if (val == "snoozed") {
                $('html, body').animate({
                    scrollTop: $("body").offset().top
                }, 0);

                $(".page-category").css({'overflow': 'hidden'});
                $(".container_lspud").show();
            }
        }

        var picker = new Lightpick({
            field: document.getElementById('showPicker'),
            inline: true,
            singleDate: false,
            hoveringTooltip: false,
            numberOfMonths: 2,
            minDate: moment().startOf('MMMM D, YYYY').add(0, 'day'),
            onSelect: function(start, end){
                var str = '';
                var ed = '';
                str += start ? start.format('MMM DD') : 'Select date';
                ed += end ? end.format('MMM DD') : 'Select date';                
                document.getElementById('startDate').innerHTML = str;
                document.getElementById('endDate').innerHTML = ed;

                if ( str != '' && str != 'Select date' && ed != '' && ed != 'Select date' ) {
                    var dateSend = {
                        'start': start.format('DD/MM/YY'),
                        'end': end.format('DD/MM/YY'),
                    }
                    window.livewire.emit('changeSnoozeApline', dateSend );
                }
            }
        });
        $("#sendSnooze").click(function(e) {
            window.livewire.emit('saveSnoozeApline');
        });
        $("#cancelSnooze").click(function(e) {
            window.livewire.emit('cancelSnoozeApline');
        });
        $("#closeSnooze").click(function(e) {
            window.livewire.emit('cancelSnoozeApline');
        });
        $("#saveUnlisted").click(function(e) {
            window.livewire.emit('saveUnlisted');
        });
        $("#cancelUnlisted").click(function(e) {
            window.livewire.emit('cancelUnlisted');
        });
        $("#closeUnlisted").click(function(e) {
            window.livewire.emit('cancelUnlisted');
        });
        $("#saveAmenities").click(function(e) {
            window.livewire.emit('saveAmenities');
        });
        $("#cancelAmenities").click(function(e) {
            window.livewire.emit('cancelAmenities');
        });
        $("#closeAmenities").click(function(e) {
            window.livewire.emit('cancelAmenities');
        });
        $("#saveRoomSpace").click(function(e) {
            window.livewire.emit('saveRoomSpace');
        });
        $("#cancelRoomSpace").click(function(e) {
            window.livewire.emit('cancelRoomSpace');
        });
        $("#closeRoomSpace").click(function(e) {
            window.livewire.emit('cancelRoomSpace');
        });


     </script> --}}
@endsection
