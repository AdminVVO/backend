<div class="block" style="gap: 17px;">
    <div class="fx fx-ai-c fx-jc-sb" style="gap: 25px;">
        <h2 class="h2-guests">Photos</h2>

        <div class="_btnsm js__editPhotosListingPost">
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
    <div class="post_right_carrousel">
        <div class="content_photos_resort">
            <div class="cont_listing_group">
                @foreach ( $content['photos'] as $element)
                    <div class="pd-r13">
                        <div class="block-img">
                            <img src="{{ URL::asset('storage/uploadListing/') }}/{{ $element }}" alt="">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

{{-- <div class="block" style="gap: 17px;">
    <div class="fx fx-ai-c fx-jc-sb" style="gap: 25px;">
        <h2 class="h2-guests">Photos</h2>
        <div class="_btnsm edit">
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
    <div class="post_right_carrousel">
        <div class="content_photos_resort scroll_n">
            <div class="tabs_items_group scroll_n">
                @foreach ( $content['photos'] as $element)
                    <div class="block-img">
                        <img src="{{ URL::asset('storage/uploadListing/') }}/{{ $element }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>

        <div class="_cbtn">
            <button type="button" class="_sbtn">
                <span class="_c9ajsd" style="font-size: 16px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8.378" height="14.652" viewBox="0 0 8.378 14.652">
                        <path d="M13.516,17.1l5.54-5.545a1.043,1.043,0,0,1,1.479,0,1.056,1.056,0,0,1,0,1.483l-6.278,6.282a1.045,1.045,0,0,1-1.444.031L6.493,13.042a1.047,1.047,0,0,1,1.479-1.483Z" transform="translate(-11.246 20.84) rotate(-90)" fill="#00b5dd"></path>
                    </svg>
                </span>
            </button>
        </div>
    </div>

    @livewire('listing-test.basic.listing-photos', [
        'listingId' => $listingId,
        'photos' => $content['photos'],
    ])
</div> --}}

<div class="block">
    <h2 class="h2-guests">Listing basics</h2>

    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;" wire:ignore.self>
        <div class="w100">
            <h3 class="_txteh">Listing title</h3>
            <div class="_width_text show_info">
                <p class="_txtec txt_upper">{{ $content['title'] }}</p>
                <p class="_txtec">Internal name: {{ $content['internal_title'] }}</p>
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Your listing title should highlight what makes your place special.</p>
            </div>

            @livewire('listing-test.basic.listing-title', [
                'listingId' => $listingId,
                'title' => $content['title'],
                'internal_title' => $content['internal_title'],
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
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;" wire:ignore.self>
        <div class="w100">
            <h3 class="_txteh">Listing description</h3>
            <div class="show_info">
                <div class="_width_text">
                    <p class="_txtec">{{ $content['descriptions'] }}</p>
                    
                    <span class="_txtec show_more_info" style="display: none;">
                        @if ( $content['space'] != null )
                            <br>
                            <h3 class="_txteh">The space</h3>
                            <div class="show_info">
                                <div class="_width_text">
                                    <p class="_txtec">{{ $content['space'] }}</p>
                                </div>
                            </div>
                        @endif
                        @if ( $content['guest_access'] != null )
                            <br>
                            <h3 class="_txteh">Guest access</h3>
                            <div class="show_info">
                                <div class="_width_text">
                                    <p class="_txtec">{{ $content['guest_access'] }}</p>
                                </div>
                            </div>
                        @endif
                        @if ( $content['other_details'] != null )
                            <br>
                            <h3 class="_txteh">Other details to note</h3>
                            <div class="show_info">
                                <div class="_width_text">
                                    <p class="_txtec">{{ $content['other_details'] }}</p>
                                </div>
                            </div>
                        @endif
                        
                    </span>
                </div>
                @if ( $content['space'] != null || $content['guest_access'] != null || $content['other_details'] != null )
                    <div class="_txtehlinear click_show_more" style="margin-top: 10px !important;">Show more</div>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Give guests a sense of what it's like to stay at your place, including why they'll love staying there.</p>
            </div>

            @livewire('listing-test.basic.listing-description', [
                    'listingId'     => $listingId,
                    'descriptions'  => $content['descriptions'],
                    'space'         => $content['space'],
                    'guest_access'  => $content['guest_access'],
                    'other_details' => $content['other_details'],
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
            <h3 class="_txteh">Number of guests</h3>
        </div>

            @livewire('listing-test.basic.listing-number-guest', [
                'listingId'     => $listingId,
                'numberguest'  => $content['number_guests'],
            ])

    </div>
</div>

<div class="block">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;" wire:ignore.self>
        <div class="w100">
            <h3 class="_txteh">Custom link</h3>
            <div class="_width_text show_info">
                @if ( $content['custom_link'] != null )
                    <a href="{{ route('custon-link', $content['custom_link'] ) }}">
                        <span class="_txtec"><strong><u>{{ route('custon-link', $content['custom_link'] ) }}</u></strong></span>
                    </a>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            @livewire('listing-test.basic.listing-link', [
                'listingId'   => $listingId,
                'custom_link' => $content['custom_link'],
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
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;" wire:ignore.self>
        <div class="w100">
            <h3 class="_txteh">Languages</h3>
            <div class="_width_text show_info">
                <span class="_txtec">{{ $content['language_default'] == 'EN' ? $content['language'][ $content['language_default'] ] . ' (Default)' : $content['language'][ $content['language_default'] ] }}</span>
            </div>

            <div class="_width_text show_text">
                <div class="fx fx-fd-c" style="gap: 25px;">
                    <p class="_txtec">Write details for some settings in a language other than your default. Guests are shown automatic translations for languages you don't add here.</p>
                </div>
            </div>

            @livewire('listing-test.basic.listing-language', [
                'listingId'        => $listingId,
                'language'         => $content['language'],
                'language_default' => $content['language_default'],
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
            <h3 class="_txteh">Listing status</h3>
            <div class="_width_text show_info">
                <div class="_txtec">
                    @if ( $content['resort'] != '' )
                        <p class="_txtec">Resort Email: {{ $content['resort'] }}</p>
                        <p class="_txtec">Resort Template: {{ $content['template'] }}</p>
                    @endif
                    @if ( $content['status'] == 'listed' )
                        <div class="_iconposit">
                            <i class="fas fa-circle _i-verde10"></i>
                        </div>

                        Listed - Guests can find your listing in search results and request or book available dates.</p>
                    @endif

                    @if ( $content['status'] == 'snoozed' )
                        <div class="_iconposit">
                            <i class="fas fa-moon _i-gris10"></i>
                        </div>

                        Snoozed - Remove your listing from search results for a set period of time.
                        <p class="_txtec">Time Start: {{ $content['snooze']['timeStart'] }} - Time End: {{ $content['snooze']['timeEnd'] }}</p>
                    @endif

                    @if ( $content['status'] == 'unlisted' || $content['status'] == 'in process' )
                        <div class="_iconposit">
                            <i class="fas fa-circle _i-red10"></i>
                        </div>

                        Unlisted - Guests can't book your listing or find it in search results.
                    @endif

                    @if ( $content['status'] == 'deactivate' )
                        <div class="_iconposit">
                            <i class="fas fa-circle _i-griswhite10"></i>
                        </div>

                        Deactivate - Permanently remove your listing from vvoutlet.
                    @endif
                </div>
            </div>

            @livewire('listing-test.basic.listing-status', [
                'listingId' => $listingId,
                'status'    => $content['status'],
                'resort'    => $content['resort'],
                'template'  => $content['template'],
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
        <div class="w100" style="width: 100%;">
            <h3 class="_txteh">Amenities</h3>

            <div class="show_info">
                <div class="_width_text _width_flex fx">
                    @if ( count( $content['amenities_name'] ) != 0 )
                        <div class="w">
                            @foreach ( $content['amenities_name'] as $element)
                                @if ( $loop->iteration <= 59 )
                                    <p class="_txtec">{{ $element }}</p>
                                @endif
                            @endforeach
                        </div>

                        @if ( count( $content['amenities_name'] ) >= 60 )
                            <div class="w">
                                @foreach ( $content['amenities_name'] as $element)
                                    @if ( $loop->iteration >= 60  )
                                        <p class="_txtec">{{ $element }}</p>
                                    @endif
                                @endforeach
                            </div>
                        @endif
                    @else
                        <p class="_txtec">Not set</p>
                    @endif
                </div>
            </div>
        </div>

        <div class="_btnsm clickEditAmenities">
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
    <h2 class="h2-guests">Location</h2>

    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Address</h3>
            <div class="_width_text show_info">
                <p class="_txtec">{{ ucwords(strtolower( $content['location'] )) }}</p>
            </div>

            @livewire('listing-test.location.listing-address', [
                'listingId' => $listingId,
                'country'   => $content['country'],
                'street'    => $content['street'],
                'city'      => $content['city'],
                'state'     => $content['state'],
                'zip_code'  => $content['zip_code'],
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
            <h3 class="_txteh">Neighborhood description</h3>
            <div class="_width_text show_info">
                @if ( $content['neighborhood'] != null )
                    <span class="_txtec">{{ $content['neighborhood'] }}</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Share some highlights about the neighborhood.</p>
            </div>

            @livewire('listing-test.location.listing-neighborhood', [
                'listingId'    => $listingId,
                'neighborhood' => $content['neighborhood'],
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
            <h3 class="_txteh">Getting around</h3>
            <div class="_width_text show_info">
                @if ( $content['getting_around'] != null )
                    <span class="_txtec">{{ $content['getting_around'] }}</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Let guests know how they can get around the neighborhood and what parking is like.</p>
            </div>

            @livewire('listing-test.location.listing-getting', [
                'listingId' => $listingId,
                'getting'   => $content['getting_around'],
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
            <h3 class="_txteh">Location sharing</h3>
            <div class="_width_text show_info">
                <p class="_txtec">General location</p>
                <p class="_txtec">Address privacy for cancellations off</p>
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Choose how your listing's location is displayed to guests before they book.</p>
            </div>

            @livewire('listing-test.location.listing-sharing', [
                'listingId' => $listingId,
                'sharing'   => $content['location_sharing'],
                'privacy'   => $content['privacy_cancellations'],
                'latitude'  => $content['latitude'],
                'longitude' => $content['longitude'],
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
            <h3 class="_txteh">Scenic views</h3>
            <div class="_width_text show_info">
                @if ( count( $content['scenic_views_name'] ) != 0)
                    <div class="_width_text _width_flex fx">
                        <div class="w">
                            @foreach ( $content['scenic_views_name'] as $element)
                                @if ( $loop->iteration <= 9 )
                                    <p class="_txtec">{{ $element }}</p>
                                @endif
                            @endforeach
                        </div>

                        @if ( count( $content['scenic_views_name'] ) >= 10 )
                            <div class="w">
                                @foreach ( $content['scenic_views_name'] as $element)
                                    @if ( $loop->iteration >= 10 && $loop->iteration <= 20 )
                                        <p class="_txtec">{{ $element }}</p>
                                    @endif
                                @endforeach
                            </div>
                        @endif
                    </div>
                @else
                    <p class="_txtec">Not set</p>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Such photographic views that will surprise all guests.</p>
            </div>

            @livewire('listing-test.location.listing-scenic', [
                'listingId' => $listingId,
                'scenic'   => $content['scenic_views'],
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
    <h2 class="h2-guests">Property and roomd</h2>

    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Property type</h3>
            <div class="_width_text show_info">
                <p class="_txtec">{{ $content['place_name'] }} - {{ $content['property_name'] }}</p>
                <p class="_txtec">Listing type: {{ $content['listing_type_name'] }}</p>
                @if ( $content['floors'] != null && $content['floors'] != 0 )
                    <p class="_txtec">Floors have: {{ $content['floors'] }}</p>
                    <p class="_txtec">Floor listing on: {{ $content['floors_on'] }}</p>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Choose a property type that's most like your place to set expectations for guests and help your listing appear in the right searches.</p>
            </div>

            @livewire('listing-test.property.listing-property', [
                'listingId'     => $listingId,
                'like_place'    => $content['like_place'],
                'property_type' => $content['property_type'],
                'listing_type'  => $content['listing_type'],
                'floors'        => $content['floors'],
                'floors_on'     => $content['floors_on'],
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
            <h3 class="_txteh">Rooms and spaces</h3>
            <div class="_width_text show_info">
                <p class="_txtec">Bedrooms: {{ $content['bedrooms'] }}</p>
                <p class="_txtec">Bathrooms: {{ $content['bathrooms'] }}</p>
                <p class="_txtec">Bed: {{ $content['bed'] }}</p>
                @if ( $content['additional_show'] )
                    <p class="_txtec">Additional areas:</p>
                    @foreach ( $content['additional_areas'] as $key => $element)
                        @if ( $element != 0 )
                            <p class="_txtec">{{ $key }}: {{ $element }}</p>
                        @endif
                    @endforeach
                @endif
                {{-- <p class="_txtec">Guests may share some areas: {{ $content['shared_areas'] }}</p> --}}
            </div>

        </div>

        <div class="_btnsm clickEditRoomsSpaces" wire:click="$emitTo('listing-test.property.listing-rooms', 'reloadRoomSpace')">
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
    <h2 class="h2-guests">Guest safety</h2>

    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Property type</h3>
            <div class="_width_text show_info">
                @forelse ($content['safety_name'] as $element)
                    <p class="_txtec">{{ $element }}</p>
                @empty
                    <p class="_txtec">Not set</p>
                @endforelse
            </div>

            @livewire('listing-test.safety.listing-safety', [
                'listingId' => $listingId,
                'safety'    => $content['safety'],
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
