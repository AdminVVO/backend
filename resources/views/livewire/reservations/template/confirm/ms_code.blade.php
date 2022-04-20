<div class="fx fx-jc-sb fx-ai-c fx-fw-w" style="gap: 12px;">
    <h2 class="h2_publish">Reservation Request</h2>
    <div class="fx fx-ai-c fx-fw-w" style="gap: 22px;">
        <h2 class="h2_publish">MS Code: <span class="h2_publishgris">0702838</span></h2>
    </div>
</div>

<div style="margin-top: 22px;">
    <div class="content_celest_form content_celest_form_bg">
        <div class="block">
            <span class="_txteh">VVO Confirmation Number:</span>
            <p class="_txtec txt_upper">{{ $contentReserv['vvo_confirm'] }}</p>
        </div>

        <div class="block pl40">
            <span class="_txteh">Date:</span>
            <p class="_txtec">{{ Carbon\Carbon::parse( $contentReserv['date'], 'UTC')->locale('en')->isoFormat('dddd, MMMM D, YYYY') }}</p>
        </div>
    </div>

    <div class="content_celest_form">
        <div class="block">
            <span class="_txteh">Costumer Name:</span>
            <p class="_txtec _txtcapit">{{ $contentReserv['costumb_name'] }}</p>
        </div>
    </div>

    <div class="content_celest_form content_celest_form_bg">
        <div class="block">
            <span class="_txteh">Spouse Name:</span>
            <p class="_txtec _txtcapit">{{ $contentReserv['spouse_name'] }}</p>
        </div>
    </div>

    <div class="content_celest_form">
        <div class="block">
            <span class="_txteh">Address:</span>
            <p class="_txtec _txtcapit">{{ $contentReserv['address'] }}</p>
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
            <span class="_txteh">Type Card:</span>
            <div class="block_img">
                <img src="{{ URL::asset('assets/img/card/') }}/{{ $contentReserv['type_card'] }}.png" alt="">
                <p class="_txtec _txtcapit">{{ $contentReserv['type_card'] }}</p>
            </div>
        </div>
    </div>

    <div class="content_celest_form">
        <div class="block">
            <span class="_txteh">Resort:</span>
            <p class="_txtec">{{ $contentReserv['name_site'] }}</p>
        </div>

        <div class="block pl40">
            <span class="_txteh">Unit:</span>
            <p class="_txtec">{{ $contentReserv['guest_number'] }}</p>
        </div>
    </div>

    <div class="content_celest_form content_celest_form_bg">
        <div class="block">
            <span class="_txteh"># in the Party:</span>
            <p class="_txtec">{{ $contentReserv['in_party'] }}</p>
        </div>

        <div class="block pl40">
            <span class="_txteh"># of Nights:</span>
            <p class="_txtec">{{ $contentReserv['of_night'] }}</p>
        </div>
    </div>

    <div class="content_celest_form">
        <div class="block">
            <span class="_txteh">Check in:</span>
            <p class="_txtec _txtcapit">{{ Carbon\Carbon::parse( $contentReserv['checkin'], 'UTC')->locale('en')->isoFormat('dddd, MMMM D, YYYY') }}</p>
        </div>

        <div class="block pl40">
            <span class="_txteh">Check out:</span>
            <p class="_txtec _txtcapit">{{ Carbon\Carbon::parse( $contentReserv['checkout'], 'UTC')->locale('en')->isoFormat('dddd, MMMM D, YYYY') }}</p>
        </div>
    </div>

    <div class="content_celest_form content_celest_form_bg">
        <div class="block">
            <span class="_txteh">Preferred Tour Date:</span>
            <p class="_txtec _txtcapit">{{ Carbon\Carbon::parse( $contentReserv['preferenc_tour'], 'UTC')->locale('en')->isoFormat('dddd, MMMM D, YYYY') }}</p>
        </div>

        <div class="block pl40">
            <span class="_txteh">Gifting:</span>
            <p class="_txtec">$ {{ $contentReserv['gifting'] }}</p>
        </div>
    </div>

    @if ( $contentReserv['resort_confirm'] === null )
        <form wire:submit.prevent="submitReservations" class="content_conf_num">
            <div class="fx fx-fd-c" style="gap: 29px;">
                <h2 class="h2_publish">Confirmation Number</h2>

                <div class="_flfpc">
                    <input type="text" class="_numcard txt_upper @error('resort_confirm') error_input @enderror" wire:model.defer="resort_confirm">
                    @error('resort_confirm')
                        <div class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="_flfpc">
                    <div class="txt-check-in">Comment:</div>
                    <textarea class="_txta-modls @error('comment') error_input @enderror" rows="4" style="height: auto;" wire:model.defer="comment"></textarea>
                    @error('comment')
                        <div class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="_flfpc">
                    <div class="txt-check-in">Tour Date:</div>
                    <x-date-picker-single
                        model="tour_date"
                        id="datepicker"
                        autocomplete="off"
                        class="@error('tour_date') error_input @enderror"
                    />
                    @error('tour_date')
                        <div class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="fx fx-fw-w" style="gap: 15px;">
                    <button class="btn-celest">Confirm Resort</button>
                </div>
            </div>
        </form>
    @endif

    @if ( $contentReserv['resort_confirm'] !== null )
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

        @if ( Auth::check() )
            <a href="{{ route('reservationsResort') }}" class="btn-red" style="margin-top: 18px;">Back</a>
        @endif
    @endif
</div>
