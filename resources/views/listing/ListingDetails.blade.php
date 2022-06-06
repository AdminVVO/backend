@extends('layouts.App')

@section('title') Listings Details @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/modals-admin.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/modals-user.css') }}" rel="stylesheet"/>

    <style type="text/css">
        .lightpick {
            min-width: fit-content;
        }

        .lightpick__months {
            display: flex !important;
            justify-content: space-between;
        }
    </style>

@endsection

@section('header')

    @include('layouts.HeaderAuth')

@endsection

@section('content')
    
    <section class="entero c_linsting" style="margin-top: 50px;">
        <div class="medio">
            <div class="c_listing-post fx">

                @livewire('listing-test.left-details', ['listing' => $listing])

                @livewire('listing-test.right-details', ['listing' => $listing])

            </div>
        </div>
    </section>

    @section('modals')
        {{-- Modal FeedBack --}}
        @include('livewire.listing-test.modals.feedback')

        {{-- Modal Listings Status Snoozed --}}
        @include('livewire.listing-test.modals.snoozed')

        {{-- Modal Listings Status Unlisted --}}
        @include('livewire.listing-test.modals.unlisted')

        {{-- Modal Listings Amenities --}}
        @include('livewire.listing-test.modals.amenities')

        {{-- Modal Listings Rooms and Spaces --}}
        @include('livewire.listing-test.modals.roomspace')

        {{-- Modal Listings Instant Book Off --}}
        @include('livewire.listing-test.modals.instantbook')

    @endsection

@endsection

@section('script')

    <script src="{{ URL::asset('assets/js/modals-min.js') }}"></script>

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
        window.addEventListener('closeSnoozeApline', event => {
            $(".container_admin-host").hide();
            $(".page-category").css({'overflow': 'auto'});
        })

     </script>
@endsection
