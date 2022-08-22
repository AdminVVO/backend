<div class="block">
    <h2 class="h2-guests">Policies</h2>

    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Cancellation policy</h3>
            <div class="_width_text show_info">
                @if ( $content['cancellation_policy'] == 'Flexible' )
                    <span class="_txtec">Flexible: Full refund 1 day prior to arrival</span>
                @endif

                @if ( $content['cancellation_policy'] == 'Flexible or Non-refundable' )
                    <span class="_txtec">Flexible or Non-refundable: In addition to Flexible, offer a non-refundable option—guests pay 10% less, but you keep your payout no matter when they cancel.</span>
                @endif

                @if ( $content['cancellation_policy'] == 'Moderate' )
                    <span class="_txtec">Moderate: Full refund 5 days prior to arrival</span>
                @endif

                @if ( $content['cancellation_policy'] == 'Moderate or Non-refundable' )
                    <span class="_txtec">Moderate or Non-refundable: In addition to Moderate, offer a non-refundable option—guests pay 10% less, but you keep your payout no matter when they cancel.</span>
                @endif

                @if ( $content['cancellation_policy'] == 'Firm' )
                    <span class="_txtec">Firm: Full refund for cancellations up to 30 days before check-in. If booked fewer than 30 days before check-in, full refund for cancellations made within 48 hours of booking and at least 14 days before check-in. After that, 50% refund up to 7 days before check-in. No refund after that.</span>
                @endif

                @if ( $content['cancellation_policy'] == 'Firm or Non-refunfable' )
                    <span class="_txtec">Firm or Non-refunfable: In addition to Firm, offer a non-refundable option—guests pay 10% less, but you keep your payout no matter when they cancel.</span>
                @endif

                @if ( $content['cancellation_policy'] == 'Strict' )
                    <span class="_txtec">Strict: Full refund for cancellations made within 48 hours of booking, if the check-in date is at least 14 days away. 50% refund for cancellations made at least 7 days before check-in. No refunds for cancellations made within 7 days of check-in.</span>
                @endif

                @if ( $content['cancellation_policy'] == 'Strict or Non-refundable' )
                    <span class="_txtec">Strict or Non-refundable: In addition to Strict, offer a non-refundable option—guests pay 10% less, but you keep your payout no matter when they cancel.</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Choose the policy that will apply to stays under 28 nights.</p>
            </div>

            @livewire('listing.details.policies.listing-cancellation', [
                    'listingId' => $listingId,
                    'cancellation' => $content['cancellation_policy'],
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
            <h3 class="_txteh">Instant Book</h3>
            <div class="_width_text show_info">
                @if ( $content['instant_book'] === 'on' )
                    <span class="_txtec">Instant Book On - Guests who meet all your requirements can book instantly. Others will need to send a reservation request. You can cancel 100% penalty-free if you're ever uncomfortable with a reservation.</span>
                @endif

                @if ( $content['instant_book'] === 'off' )
                    <span class="_txtec">Instant Book Off - All guests must send a reservation request</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <span class="_txtec">Choose how guests will book your home.</span>
            </div>

            @livewire('listing.details.policies.listing-instant-book', [
                    'listingId' => $listingId,
                    'instant_book' => $content['instant_book'],
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
            <h3 class="_txteh">Check-in window</h3>
            <div class="_width_text show_info">
                @if ( $content['checkin_window_start']['time'] != '' )
                    <span class="_txtec">
                        {{ $content['checkin_window_start']['time'] }} {{ $content['checkin_window_start']['type'] }} - {{ $content['checkin_window_end']['time'] }} {{ $content['checkin_window_end']['type'] }} {{ isset( $content['checkin']['next'] ) ? '(Next Day)' : '' }}</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            @livewire('listing.details.policies.listing-checkin', [
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

            @livewire('listing.details.policies.listing-checkout', [
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
            <h3 class="_txteh">Security deposit</h3>
            <div class="_width_text show_info">
                @if ( $content['security_deposit'] != '' && $content['security_deposit'] != 0 )
                    <span class="_txtec">{{ $content['security_deposit'] }}$ deposit.</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">If you submit a damage claim within 14 days of checkout, guests will be responsible for damages up to this amount.</p>
            </div>

            @livewire('listing.details.policies.listing-security-deposit', [
                'listingId' => $listingId,
                'security' => $content['security_deposit'],
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

@livewire('listing.details.house.listing-rulers', [
    'listingId' => $listingId,
    'children' => $content['suitable_for_children'],
    'infants' => $content['suitable_for_infants'],
    'pets' => $content['pets_allowed'],
    'smoking' => $content['smoking_allowed'],
    'events' => $content['events_allowed'],
])

<div class="block">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Additional rules</h3>
            <div class="_width_text show_info">
                @if ( $content['additional_rules'] != '' && $content['additional_rules'] != 0 )
                    <span class="_txtec">
                        {{ $content['additional_rules'] }}
                    </span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">You can include any requirements around safety concerns, shared space rules, and your community regulations.</p>
            </div>

            @livewire('listing.details.house.listing-additional-rulers', [
                'listingId' => $listingId,
                'additional' => $content['additional_rules'],
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
    <div class="w100">
        <h2 class="h2-guests">Guest requirements</h2>
        <div class="_width_text">
            <p class="_txtec">All guests are required to follow Airbnb standard requirements, which includes confirmed phone number, email address, payment information, and agreement to your house rules. <a href="#" class="_txtehlinear">Learn more</a></p>
        </div>
    </div>

    @livewire('listing.details.requirement.listing-phofile', [
        'listingId' => $listingId,
        'profile' => $content['profile_photo_required'],
    ])

</div>

<div class="block">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Local laws</h3>
        </div>

        <div class="_btnsm clickViewLocalLaws">
            <span class="_fcontent">
                View
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
            <h3 class="_txteh">Primary use of listing</h3>
            <div class="_width_text show_info">
                @if ( $content['primary_listing'] != '' )
                    @if ( $content['primary_listing'] == 'guests' )
                        <p class="_txtec">The space is primarily set up for guests</p>
                    @else
                        <p class="_txtec">I keep personal belongings in the space</p>
                    @endif
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            @livewire('listing.details.requirement.listing-primary', [
                'listingId' => $listingId,
                'primary' => $content['primary_listing'],
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