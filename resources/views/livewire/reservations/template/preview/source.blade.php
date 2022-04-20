<div class="fx fx-jc-sb fx-ai-c fx-fw-w" style="gap: 12px;">
    <h2 class="h2_publish">Reservation Form</h2>
    <div class="fx fx-ai-c fx-fw-w" style="gap: 22px;">
        <h2 class="h2_publish">Source: <span class="h2_publishgris txt_upper">5477 trimini</span></h2>
        @if ( $contentReserv['resort_confirm'] === null )
            <a href="{{ route('ReservUpdate', $contentReserv['id_reservation_forms'] ) }}" class="btn-celest">Edit</a>
        @endif
    </div>
</div>

<div style="margin-top: 16px;">
    <div class="content_celest_form content_celest_form_bg">
        <div class="block">
            <span class="_txteh">VVO Confirmation Number:</span>
            <p class="_txtec txt_upper">{{ $contentReserv['vvo_confirm'] }}</p>
        </div>

        <div class="block pl40">
            <span class="_txteh">Date:</span>
            <p class="_txtec txt_upper">{{ Carbon\Carbon::parse( $contentReserv['date'], 'UTC')->locale('en')->isoFormat('dddd, MMMM D, YYYY') }}</p>
        </div>
    </div>

    <div class="content_celest_form">
        <div class="block">
            <span class="_txteh">Request:</span>
            <p class="_txtec">{{ $contentReserv['request'] }}</p>
        </div>

        <div class="block pl40">
            <span class="_txteh">Hotel:</span>
            <p class="_txtec">{{ $contentReserv['name_site'] }}</p>
        </div>
    </div>

    <div class="content_celest_form content_celest_form_bg">
        <div class="block">
            <span class="_txteh">Costumer Name:</span>
            <p class="_txtec _txtcapit">{{ $contentReserv['costumb_name'] }}</p>
        </div>
    </div>

    <div class="content_celest_form">
        <div class="block">
            <span class="_txteh">Spouse Name:</span>
            <p class="_txtec _txtcapit">{{ $contentReserv['spouse_name'] }}</p>
        </div>
    </div>

    <div class="content_celest_form content_celest_form_bg">
        <div class="block">
            <span class="_txteh">Address:</span>
            <p class="_txtec _txtcapit">{{ $contentReserv['address'] }}</p>
        </div>

        <div class="block pl40">
            <span class="_txteh">City:</span>
            <p class="_txtec _txtcapit">{{ $contentReserv['city'] }}</p>
        </div>
    </div>

    <div class="content_celest_form">
        <div class="block">
            <span class="_txteh">States:</span>
            <p class="_txtec _txtcapit">{{ $contentReserv['state_address'] }}</p>
        </div>

        <div class="block pl40">
            <span class="_txteh">Zip Code:</span>
            <p class="_txtec _txtcapit">{{ $contentReserv['zip_code'] }}</p>
        </div>
    </div>

    <div class="content_celest_form content_celest_form_bg">
        <div class="block">
            <span class="_txteh">Phone:</span>
            <p class="_txtec">{{ $contentReserv['phone'] }}</p>
        </div>

        <div class="block pl40">
            <span class="_txteh">Occupation:</span>
            <p class="_txtec _txtcapit">{{ $contentReserv['occupation'] }}</p>
        </div>
    </div>

    <div class="content_celest_form">
        <div class="block">
            <span class="_txteh">Spouse Occupation:</span>
            <p class="_txtec _txtcapit">{{ $contentReserv['spouse_occupation'] }}</p>
        </div>

        <div class="block pl40">
            <span class="_txteh">Marital Status:</span>
            <p class="_txtec _txtcapit">{{ $contentReserv['status_marital'] }}</p>
        </div>

        <div class="block">
            <span class="_txteh">Ages:</span>
            <p class="_txtec">{{ $contentReserv['ages'] }}</p>
        </div>
    </div>

    <div class="content_celest_form content_celest_form_bg">
        <div class="block">
            <span class="_txteh">Combined Yearly Income:</span>
            <p class="_txtec">$ {{ $contentReserv['combine_amount'] }}</p>
        </div>

        <div class="block pl40">
            <span class="_txteh">Occupation:</span>
            <div class="block_img">
                <img src="{{ URL::asset('assets/img/card/') }}/{{ $contentReserv['type_card'] }}.png" alt="">
                <p class="_txtec _txtcapit">{{ $contentReserv['type_card'] }}</p>
            </div>
        </div>
    </div>

    <div class="content_celest_form">
        <div class="block">
            <span class="_txteh">Room Type:</span>
            <p class="_txtec">{{ $contentReserv['room_type'] }}</p>
        </div>

        <div class="block pl40">
            <span class="_txteh">Unit:</span>
            <p class="_txtec">{{ $contentReserv['guest_number'] }}</p>
        </div>
    </div>

    <div class="content_celest_form content_celest_form_bg">
        <div class="block">
            <span class="_txteh">Check in:</span>
            <p class="_txtec _txtcapit">{{ Carbon\Carbon::parse( $contentReserv['checkin'], 'UTC')->locale('en')->isoFormat('dddd, MMMM D, YYYY') }}</p>
        </div>

        <div class="block pl40">
            <span class="_txteh">Check out:</span>
            <p class="_txtec _txtcapit">{{ Carbon\Carbon::parse( $contentReserv['checkout'], 'UTC')->locale('en')->isoFormat('dddd, MMMM D, YYYY') }}</p>
        </div>
    </div>

    @if ( $contentReserv['resort_confirm'] != null )
        <div class="content_celest_form">
            <div class="block">
                <span class="_txteh">Confirmation Number:</span>
                <p class="_txtec txt_upper">{{ $contentReserv['resort_confirm'] }}</p>
            </div>
        </div>

        <div class="content_celest_form_bg_comment">
            <div class="block">
                <div class="_txteh">Comment:</div>
                <div class="block_bg" style="margin-top: 10px;">
                    <p class="_txtec">{{ $contentReserv['comment'] }}</p>
                </div>
            </div>
        </div>

        <div class="content_celest_form" style="margin-top: 4px;">
            <div class="block">
                <span class="_txteh">Tour Date:</span>
                <p class="_txtec _txtcapit">{{ Carbon\Carbon::parse( $contentReserv['tour_date'], 'UTC')->locale('en')->isoFormat('dddd, MMMM D, YYYY') }}</p>
            </div>
        </div>
    @endif

    <div class="fx fx-fw-w" style="margin-top: 18px; gap: 15px;">
        <a href="{{ route('reservationsResort') }}" class="btn-red">Back</a>
        @if ( $contentReserv['resort_confirm'] === null )
            <button wire:click="sendEmailResort" class="btn-celest">Send Resort</button>
        @endif
    </div>
</div>
