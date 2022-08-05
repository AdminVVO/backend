<div class="block">
    <h2 class="h2-guests">Pricing</h2>

    <div>
        <div class="fx fx-ai-b fx-jc-sb"  style="gap: 25px;">
            <h3 class="_txteh">Preview what guests pay</h3>

            <div class="fx fx-ai-c">
                <div class="_btnsm click_preview_guests_pay" style="max-width: none;">
                    <span class="_fcontent">
                        Show
                        <span class="_svg-asm">
                            <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                        </span>
                    </span>
                </div>
            </div>
        </div>

        <div class="_cont_pay-img fx fx-ai-c">
            <img src="{{ URL::asset('assets/img/card/c1.jpg') }}" alt="">

            <div class="w100">
                <p class="_txtec txt_upper">$267 total</p>
                <p class="_txtec">3 nights · 1 guest</p>
                <p class="_txtec">Includes all fees</p>
            </div>
        </div>
    </div>
</div>

<div class="block">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Listing Pricing</h3>
            <div class="_width_text show_info">
                <span class="_txtec">Base price: ${{ $content['base_price'] }}</span>
            </div>

            @livewire('listing-test.pricing.listing-base', [
                'listingId' => $listingId,
                'base'  => $content['base_price'],
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
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Listing currency</h3>
            <div class="_width_text show_info">
                <span class="_txtec">{{ $content['currency'][ $content['listing_currency'] ] }} ({{ $content['listing_currency'] }})</span>
            </div>

            @livewire('listing-test.pricing.listing-currency', [
                'listingId' => $listingId,
                'currency'  => $content['listing_currency'],
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
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Preview how much guests pay</h3>
            <div class="_width_text show_info">
                @if ( $content['max_people'] != 0  )
                    <p class="_txtec">Maximum number of people: {{ $content['max_people'] }}</p>
                    @if ( count( $content['allow'] ) != 0 )
                        <span class="_txtec">Allow:</span>
                        @foreach ( $content['allow'] as $element )
                            <span class="_txtec">{{ $element }}</span>
                        @endforeach
                    @endif
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <span class="_txtec">Select any combination of nights, guests and pets for us to show you the final price.</span>
            </div>

            @livewire('listing-test.pricing.listing-preview-pay', [
                'listingId'  => $listingId,
                'max_people' => $content['max_people'],
                'allow'      => $content['allow'],
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
    <h2 class="h2-guests">Discount</h2>

    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Weekly discount</h3>
            <div class="_width_text show_info">
                @if ( $content['weekly_discount'] != '' && $content['weekly_discount'] != 0 )
                    <span class="_txtec">{{ $content['weekly_discount'] }}% discount</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <span class="_txtec">Weekly discounts apply to reservations that are 7 days or longer. If you offer multiple length-of-stay discounts, we'll apply the discount for the longest trip length.</span>
            </div>

            @livewire('listing-test.discount.listing-weekly', [
                'listingId' => $listingId,
                'weekly'  => $content['weekly_discount'],
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
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Monthly discount</h3>
            <div class="_width_text show_info">
                @if ( $content['monthly_discount'] != '' && $content['monthly_discount'] != 0 )
                    <span class="_txtec">{{ $content['monthly_discount'] }}% discount</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <span class="_txtec">Monthly discounts apply to reservations that are 28 days or longer. If you offer multiple length-of-stay discounts, we'll apply the discount for the longest trip length.</span>
            </div>

            @livewire('listing-test.discount.listing-monthly', [
                'listingId' => $listingId,
                'monthly'  => $content['monthly_discount'],
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
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Add a discount of other stays</h3>
            <div class="_width_text show_info">
                @if ( $content['inputStays'][0] != '' )
                    @foreach ( $content['inputStays']  as $key => $element)
                        <p class="_txtec">Stays {{ $element }} for {{ $content['inputStaysDiscount'][ $key ] }}% discount</p>
                    @endforeach
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            @livewire('listing-test.discount.listing-other-stays', [
                'listingId' => $listingId,
                'stays'  => $content['other_discount_array'],
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
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Early bird discount</h3>
            <div class="_width_text show_info">
                @if ( $content['early_bird_discount'] != '' && $content['early_bird_discount'] != 0 )
                    <span class="_txtec">Early bird {{ $content['early_bird_discount'] }} Months for {{ $content['early_bird_discount_porcent'] }}% discount</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <span class="_txtec">Discount ends</span>
            </div>

            @livewire('listing-test.discount.listing-early', [
                'listingId' => $listingId,
                'early'     => $content['early_bird_discount'],
                'porcent'   => $content['early_bird_discount_porcent'],
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
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Last-minute discounts</h3>
            <div class="_width_text show_info">
                @if ( $content['inputLast'][0] != '' )
                    @foreach ( $content['inputLast']  as $key => $element)
                        <p class="_txtec">Last-minute {{ $element }} Days for {{ $content['inputLastDiscount'][ $key ] }}% discount</p>
                    @endforeach
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <span class="_txtec">Discount starts</span>
            </div>

            @livewire('listing-test.discount.listing-last-minute', [
                'listingId'  => $listingId,
                'lastminute' => $content['last_minute_discount_array'],
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
    <h2 class="h2-guests">Additional charges</h2>

    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Cleaning fee</h3>
            <div class="_width_text show_info">
                @if ( $content['cleaning_fee'] != '' && $content['cleaning_fee'] != 0 )
                    <span class="_txtec">{{ $content['cleaning_fee'] }}$ per stay</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Set a fee to cover cleaning after each stay. For any excess cleaning, there's AirCover.</p>

                <a href="#" class="_txtehlinear">Learn about cleaning fees</a>
            </div>

            @livewire('listing-test.additional.listing-cleaning', [
                'listingId'  => $listingId,
                'cleaning' => $content['cleaning_fee'],
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
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Pet fee</h3>
            <div class="_width_text show_info">
                @if ( $content['pet_fee'] != '' && $content['pet_fee'] != 0 )
                    <span class="_txtec">{{ $content['pet_fee'] }}$ fee for Pets</span>
                @else
                    <span class="_txtec">Pets are not currently allowed</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Set a fee to cover cleaning after each stay. For any excess cleaning, there's AirCover.</p>

                <a href="#" class="_txtehlinear">Learn about pet fees</a>
            </div>

            @livewire('listing-test.additional.listing-pets', [
                'listingId'  => $listingId,
                'pet' => $content['pet_fee'],
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
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Linens fee</h3>
            <div class="_width_text show_info">
                @if ( $content['linens_fee'] != '' && $content['linens_fee'] != 0 )
                    <span class="_txtec">{{ $content['linens_fee'] }}$ fee for Linens</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">The linens fee is added to the cleaning fee for guests when they book, but it will be a separate item in your payout report.</p>
            </div>

            @livewire('listing-test.additional.listing-lines', [
                'listingId'  => $listingId,
                'lines' => $content['linens_fee'],
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
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Resort fee</h3>
            <div class="_width_text show_info">
                @if ( $content['resort_fee'] != '' && $content['resort_fee'] != 0 )
                    <span class="_txtec">{{ $content['resort_type'] != 'porcent' ? '$' : '' }}{{ $content['resort_fee'] }}{{ $content['resort_type'] == 'porcent' ? '%' : '' }} fee for Resort</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <span class="_txtec">The resort fee is added to the nightly price for guests when they book, but it will be a separate item in your payout report.</span>
            </div>

            @livewire('listing-test.additional.listing-resort', [
                'listingId'  => $listingId,
                'resort' => $content['resort_fee'],
                'type' => $content['resort_type'],
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
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Management fee</h3>
            <div class="_width_text show_info">
                @if ( $content['management_fee'] != '' && $content['management_fee'] != 0 )
                    <span class="_txtec">{{ $content['management_type'] != 'porcent' ? '$' : '' }}{{ $content['management_fee'] }}{{ $content['management_type'] == 'porcent' ? '%' : '' }} fee for Management</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <span class="_txtec">The management fee is added to the nightly price for guests when they book, but it will be a separate item in your payout report.</span>
            </div>

            @livewire('listing-test.additional.listing-management', [
                'listingId'  => $listingId,
                'management' => $content['management_fee'],
                'type' => $content['management_type'],
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
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Community fee</h3>
            <div class="_width_text show_info">
                @if ( $content['community_fee'] != '' && $content['community_fee'] != 0 )
                    <span class="_txtec">{{ $content['community_type'] != 'porcent' ? '$' : '' }}{{ $content['community_fee'] }}{{ $content['community_type'] == 'porcent' ? '%' : '' }} fee for Community</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <span class="_txtec">The community fee is added to the nightly price for guests when they book, but it will be a separate item in your payout report.</span>
            </div>

            @livewire('listing-test.additional.listing-community', [
                'listingId'  => $listingId,
                'community' => $content['community_fee'],
                'type' => $content['community_type'],
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
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Extra guest fee</h3>
            <div class="_width_text show_info">
                @if ( $content['extra_guest_fee'] != '' && $content['extra_guest_fee'] != 0 )
                    <span class="_txtec">{{ $content['extra_guest_fee'] }}$ fee for {{ $content['extra_guest'] }} Extra guest</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Charge this amount per extra guest, per night.</p>
            </div>

            @livewire('listing-test.additional.listing-extra-guest', [
                'listingId'  => $listingId,
                'quanty' => $content['extra_guest'],
                'extra' => $content['extra_guest_fee'],
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
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Weekend nightly price</h3>
            <div class="_width_text show_info">
                @if ( $content['weekend_nightly_fee'] != '' && $content['weekend_nightly_fee'] != 0 )
                    <span class="_txtec">{{ $content['weekend_nightly_fee'] }}$ fee for Weekend nightly</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">This nightly price will replace your base price for every Friday and Saturday. It won't apply if Smart Pricing is on.</p>
            </div>

            @livewire('listing-test.additional.listing-nightly', [
                'listingId'  => $listingId,
                'nightly' => $content['weekend_nightly_fee'],
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
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h2 class="h2-guests">Taxes</h2>
        </div>

        <div class="_btnsm">
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
    <h2 class="h2-guests">Trip length</h2>

    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Minimum stay</h3>
            <div class="_width_text show_info">
                @if ( $content['minimum_stay'] != '' && $content['minimum_stay'] != 0 )
                    <span class="_txtec">{{ $content['minimum_stay'] }} nights</span>
                        @if ( count( $content['minimum_stay_custom'] ) != 0 )
                            @if ( $content['minimum_stay_custom']['sundays'] != '' )
                                <p class="_txtec">Sundays: {{ $content['minimum_stay_custom']['sundays'] }} nights</p>
                            @endif

                            @if ( $content['minimum_stay_custom']['mondays'] != '' )
                                <p class="_txtec">Mondays: {{ $content['minimum_stay_custom']['mondays'] }} nights</p>
                            @endif

                            @if ( $content['minimum_stay_custom']['tuesdays'] != '' )
                                <p class="_txtec">Tuesdays: {{ $content['minimum_stay_custom']['tuesdays'] }} nights</p>
                            @endif

                            @if ( $content['minimum_stay_custom']['wednesdays'] != '' )
                                <p class="_txtec">Wednesdays: {{ $content['minimum_stay_custom']['wednesdays'] }} nights</p>
                            @endif

                            @if ( $content['minimum_stay_custom']['thursdays'] != '' )
                                <p class="_txtec">Thursdays: {{ $content['minimum_stay_custom']['thursdays'] }} nights</p>
                            @endif

                            @if ( $content['minimum_stay_custom']['fridays'] != '' )
                             <p class="_txtec">Fridays: {{ $content['minimum_stay_custom']['fridays'] }} nights</p>
                            @endif

                            @if ( $content['minimum_stay_custom']['saturdays'] != '' )
                                <p class="_txtec">Saturdays: {{ $content['minimum_stay_custom']['saturdays'] }} nights</p>
                            @endif
                        @endif
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            @livewire('listing-test.trip.listing-minimun', [
                'listingId'  => $listingId,
                'minimum' => $content['minimum_stay'],
                'custom' => $content['minimum_stay_custom'],
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
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Maximum stay</h3>
            <div class="_width_text show_info">
                @if ( $content['maximum_stay'] != '' && $content['maximum_stay'] != 0 )
                    <span class="_txtec">{{ $content['maximum_stay'] }} nights</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            @livewire('listing-test.trip.listing-maximun', [
                'listingId'  => $listingId,
                'maximun' => $content['maximum_stay'],
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
    <h2 class="h2-guests">Calendar availability</h2>

    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Advance notice</h3>
            <div class="_width_text show_info">
                @if ( $content['advance_notice'] != '' && $content['advance_notice'] != 0 )
                    <span class="_txtec">At least {{ $content['advance_notice'] }} day's notice.</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            @livewire('listing-test.calendar.listing-notice', [
                'listingId'  => $listingId,
                'notice' => $content['advance_notice'],
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
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Preparation time</h3>
            <div class="_width_text show_info">
                @if ( $content['preparation_time'] != '' && $content['preparation_time'] != 0 )
                    <span class="_txtec">At least {{ $content['preparation_time'] }} day's preparation.</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            @livewire('listing-test.calendar.listing-preparation', [
                'listingId'  => $listingId,
                'preparation' => $content['preparation_time'],
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
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Availability window</h3>
            <div class="_width_text show_info">
                @if ( $content['availability_window'] != '' && $content['availability_window'] != 0 )
                    <span class="_txtec">{{ $content['availability_window'] }} months in advance.</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            @livewire('listing-test.calendar.listing-availability', [
                'listingId'  => $listingId,
                'availability' => $content['availability_window'],
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
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Restricted check-in days</h3>
            <div class="_width_text show_info">
                @if ( count( $content['restricted_checkin_days'] ) != 0 )
                    @foreach ( $content['restricted_checkin_days'] as $element)
                        <p><span class="_txtec">{{ $element }}</span></p>
                    @endforeach
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <span class="_txtec">Guests won't be able to book your place if their stay starts on these days.</span>
            </div>

            @livewire('listing-test.calendar.listing-ckecketin', [
                'listingId'  => $listingId,
                'checkin' => $content['restricted_checkin_days'],
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
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Restricted checkout days</h3>
            <div class="_width_text show_info">
                @if ( count( $content['restricted_checkout_days'] ) != 0 )
                    @foreach ( $content['restricted_checkout_days'] as $element)
                        <p><span class="_txtec">{{ $element }}</span></p>
                    @endforeach
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <span class="_txtec">Guests won't be able to book your place if their stay ends on these days.</span>
            </div>

            @livewire('listing-test.calendar.listing-checketout', [
                'listingId'  => $listingId,
                'checketout' => $content['restricted_checkout_days'],
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
