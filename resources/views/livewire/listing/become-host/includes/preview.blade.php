<div class="_ctoverlay">
    <div class="content_right">
        <div class="content_hidden ch_step11">
            <div class="content_mr">
                <div class="content_step">
                    <h2 class="h2_publish" style="margin-bottom: 15px;">Check out your listing!</h2>
                    <p class="h3">This listing will be visible to guests 24 hours after you publish.</p>
                    <p class="h3">You can add more info or make changes anytime.</p>

                    <div class="overlay _shadow-bazul20" style="margin-top: 22px;">
                        <div class="content_step_about">
                            <div class="view_port">
                                <img src="{{ URL::asset('storage/photos-pre-listing') .'/'. $contentPreview['img'] }}" alt="">
                                <span class="joind-span">{{ $contentPreview['property'] . ' ' . $contentPreview['group'] }} hosted by <span class="_txtcapit">{{ App\Models\User::FullName() }}</span></span>
                            </div>

                            <div class="_block">
                                <div class="_pd">
                                    <div class="content-img" style="margin-bottom: 38px;">
                                        <span class="_br-img-perf">
                                            @if ( file_exists( storage_path('app/public/uploadAvatar/' . Auth::user()->avatar  ) ) )
                                                <img src="{{ URL::asset('storage/uploadAvatar/') .'/'. Auth::user()->avatar  }}" alt="">
                                            @else
                                                <img src="{{ URL::asset('assets/img/avatar') .'/'. Auth::user()->avatar }}" alt="">
                                            @endif
                                        </span>
                                        <h2 class="h2-guests" style="margin-top: 12px;">{{ $contentPreview['title'] }}</h2>

                                        <div class="gap fx fx-jc-c fx-fw-w" style="margin: 17px 0;">
                                            <div class="bg_gris">{{ $contentPreview['guest'] }} Guests</div>
                                            <div class="bg_gris">{{ $contentPreview['bedrooms'] }} Bedrooms</div>
                                            <div class="bg_gris">{{ $contentPreview['bed'] }} Bed</div>
                                            <div class="bg_gris">{{ $contentPreview['bathrooms'] }} Baths</div>
                                        </div>

                                        <p class="_txtec16">{{ $contentPreview['description'] }}</p>
                                    </div>
                                </div>

                                @if ( count( $contentPreview['amenities'] ) != 0 )
                                    <div class="_pd">
                                        <div class="content-amenities">
                                            <h2 class="h2-guests" style="margin-bottom: 22px;">Amenities</h2>

                                            <div class="content-user_icons">

                                                @foreach ( $contentPreview['amenities'] as $element )
                                                    @if($loop->iteration <= 5)
                                                        <div class="s-usr_icons">
                                                            <div class="_suis">
                                                                <img src="{{ URL::asset('assets/img/icons/') }}/{{ $element['icon'] }}" alt="">
                                                            </div>
                                                            <div class="_suisinfo">
                                                                <div class="_txtec">{{ $element['code'] }}</div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach

                                                @if ( count( $contentPreview['amenities'] ) >= 6 )
                                                    <div class="s-usr_icons usr_icons_more">
                                                        <div class="more_icons" style="display: inline-flex; align-items: center; cursor: pointer;">
                                                            <div class="_suis">
                                                                <img src="{{ URL::asset('assets/img/icons/more-blu.svg') }}" alt="">
                                                            </div>
                                                            <div class="_suisinfo">
                                                                <div class="_txtec">+{{ count( $contentPreview['amenities'] ) - 5 }} more</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    @foreach ($contentPreview['amenities'] as $element)
                                                        @if($loop->iteration >= 6)
                                                            <div class="s-usr_icons more_icons_show" style="display: none;">
                                                                <div class="_suis">
                                                                    <img src="{{ URL::asset('assets/img/icons/') }}/{{ $element['icon'] }}" alt="">
                                                                </div>
                                                                <div class="_suisinfo">
                                                                    <div class="_txtec">{{ $element['code'] }}</div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endif


                                <div class="_pd">
                                    <div class="content-amenities">
                                        <h2 class="h2-guests" style="margin-bottom: 22px;">Location</h2>
                                        <h3 class="_txteh16 _txtcapi">{{ $contentPreview['location'] }}</h3>

                                        <x-map-pre-check-listing
                                            latitud="{{ $contentPreview['latitud'] }}"
                                            longitude="{{ $contentPreview['longitude'] }}"
                                        />

                                        <p class="_txtec14">Don't worry, we'll share your address with guests who are booked and as outlined in our privacy policy at vvoutlet.com/privacy_policy</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>