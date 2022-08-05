<div class="block">
    <h2 class="h2-guests">Pre-booking details</h2>

    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Check-in window</h3>
            <div class="_width_text show_info">
                @if ( $content['checkin_window_start']['time'] != '' )
                    <span class="_txtec">
                        {{ $content['checkin_window_start']['time'] }} {{ $content['checkin_window_start']['type'] }} - {{ $content['checkin_window_end']['time'] }} {{ $content['checkin_window_end']['type'] }} {{ isset( $content['checkin']['next'] ) ? '(Next Day)' : '' }}</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            @livewire('listing-test.prebooking.listing-checkin', [
                'listingId' => $listingId,
                'start' => $content['checkin_window_start'],
                'end' => $content['checkin_window_end'],
            ])

        </div>

        <div class="_btnsm edit">
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Checkout time</h3>
            <div class="_width_text show_info">
                @if ( $content['checkout_time']['time'] != '' )
                    <span class="_txtec">{{ $content['checkout_time']['time'] }} {{ $content['checkout_time']['type'] }}</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            @livewire('listing-test.prebooking.listing-checkout', [
                'listingId' => $listingId,
                'out' => $content['checkout_time'],
            ])

        </div>

        <div class="_btnsm edit">
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Interaction with guests</h3>
            <div class="_width_text show_info">
                @if ( $content['interaction_with_guests'] != '' )
                    @if ( $content['interaction_with_guests'] === 'I plan' )
                        <span class="_txtec">I plan to socialize with my guests</span>
                    @endif

                    @if ( $content['interaction_with_guests'] === 'I give' )
                        <span class="_txtec">I give my guests space but am available when needed</span>
                    @endif

                    @if ( $content['interaction_with_guests'] === 'I wont' )
                        <span class="_txtec">I won't be available in person</span>
                    @endif

                    @if ( $content['interaction_with_guests_comment'] != '' )
                        <p class="_txtec">{{ $content['interaction_with_guests_comment'] }}</p>
                    @endif
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Tell guests if you'll available to ofter help throughout their stay and how you'll keep in touch with them.</p>
            </div>

            @livewire('listing-test.prebooking.listing-interation', [
                'listingId' => $listingId,
                'interation' => $content['interaction_with_guests'],
                'comment' => $content['interaction_with_guests_comment'],
            ])

        </div>

        <div class="_btnsm edit">
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block">
    <h2 class="h2-guests">Post-booking details</h2>

    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Address</h3>
            <div class="_width_text show_info">
                @if ( $content['country'] != '' )
                    <p class="_txtec">{{ $content['location'] }}</p>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            @livewire('listing-test.postbooking.listing-address', [
                'listingId' => $listingId,
                'address' => [
                    'country' => $content['country'],
                    'street' => $content['street'],
                    'city' => $content['city'],
                    'state' => $content['state'],
                    'zip_code' => $content['zip_code'],
                ],
            ])

        </div>

        <div class="_btnsm edit">
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Directions</h3>
            <div class="_width_text show_info">
                @if ( $content['directions'] != '' )
                    <span class="_txtec">{{ $content['directions'] }}</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            @livewire('listing-test.postbooking.listing-directions', [
                'listingId' => $listingId,
                'directions' =>  $content['directions'],
            ])

        </div>

        <div class="_btnsm edit">
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Guest manual</h3>
            <div class="_width_text show_info">
                @if ( $content['guest_manual'] != '' )
                    <span class="_txtec">{{ $content['guest_manual'] }}</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Give guests tips about your listing, like how to access the internet or turn on the hot water</p>
            </div>

            @livewire('listing-test.postbooking.listing-manual', [
                'listingId' => $listingId,
                'manual' =>  $content['guest_manual'],
            ])

        </div>

        <div class="_btnsm edit">
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block">
    <h2 class="h2-guests">Arrival details</h2>

    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Check-in instructions</h3>
            <div class="_width_text show_info">
                <span class="_txtec">{{ $content['arrival_instructions'] }}</span>
            </div>

            <div class="_width_text show_text">
                <span class="_txtec">Check-in method</span>
            </div>

            @livewire('listing-test.arrival.listing-instruct', [
                'listingId' => $listingId,
                'instruction' =>  $content['arrival_instructions'],
            ])

        </div>

        <div class="_btnsm edit">
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Wi-fi details</h3>
            <div class="_width_text show_info">
                @if ( $content['wifi_details'] != '' )
                    <span class="_txtec">{{ $content['wifi_details'] }}</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>


            @livewire('listing-test.arrival.listing-wifi', [
                'listingId' => $listingId,
                'wifi' =>  $content['wifi_details'],
            ])

        </div>

        <div class="_btnsm edit">
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>