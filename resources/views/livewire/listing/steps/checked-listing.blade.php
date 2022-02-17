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
                                @if ( $showImg )
                                    <img src="{{ URL::asset('storage/tempFilepond') }}/{{ $content['img'] }}" alt="">
                                @else
                                    <img src="{{ URL::asset('storage/uploadListing') }}/{{ $content['img'] }}" alt="">
                                @endif
                                <span class="joind-span">Entire rental unit hosted by <span class="_txtcapit">{{ $content['name'] . ' ' . $content['last_name'] }}</span></span>
                            </div>

                            <div class="_block">
                                <div class="_pd">
                                    <div class="content-img" style="margin-bottom: 38px;">
                                        <span class="_br-img-perf">
                                            <img src="{{ URL::asset('assets/img/avatar') }}/{{ $content['avatar'] }}" alt="">
                                        </span>
                                        <h2 class="h2-guests" style="margin-top: 12px;">{{ $content['title'] }}</h2>

                                        <div class="gap fx fx-jc-c fx-fw-w" style="margin: 17px 0;">
                                            @foreach ($content['guests'] as $key => $element)
                                                <div class="bg_gris">{{ $element }} {{ $key }}</div>
                                            @endforeach
                                        </div>

                                        <p class="_txtec16">{{ $content['comment'] }}</p>
                                    </div>
                                </div>

                                <div class="_pd">
                                    <div class="content-amenities">
                                        <h2 class="h2-guests" style="margin-bottom: 22px;">Amenities</h2>

                                        <div class="content-user_icons">
                                            @foreach ($content['amenities'] as $key => $element)
                                                @if($loop->iteration <= 5)
                                                    <div class="s-usr_icons">
                                                        <div class="_suis">
                                                            <img src="{{ URL::asset('assets/img/icons/') }}/{{ $element['icon'] }}" alt="">
                                                        </div>
                                                        <div class="_suisinfo">
                                                            <div class="_txtec">{{ $element['name'] }}</div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach

                                            @if ( count( $content['amenities'] ) >= 6 )
                                                <div class="s-usr_icons usr_icons_more">
                                                    <div class="more_icons" style="display: inline-flex; align-items: center; cursor: pointer;">
                                                        <div class="_suis">
                                                            <img src="{{ URL::asset('assets/img/icons/more-blu.svg') }}" alt="">
                                                        </div>
                                                        <div class="_suisinfo">
                                                            <div class="_txtec">+{{ count( $content['amenities'] ) - 5 }} more</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                @foreach ($content['amenities'] as $key => $element)
                                                    @if($loop->iteration >= 6)
                                                        <div class="s-usr_icons more_icons_show" style="display: none;">
                                                            <div class="_suis">
                                                                <img src="{{ URL::asset('assets/img/icons/') }}/{{ $element['icon'] }}" alt="">
                                                            </div>
                                                            <div class="_suisinfo">
                                                                <div class="_txtec">{{ $element['name'] }}</div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endif

                                        </div>
                                    </div>
                                </div>

                                <div class="_pd">
                                    <div class="content-amenities">
                                        <h2 class="h2-guests" style="margin-bottom: 22px;">Location</h2>
                                        <div class="contact-map" id='mapCheckout' style="width:560px; height:530px;"></div>
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
    <div class="_block-jsb">
        <div class="_btnsmleft" wire:click="returnBack('featurs')">
            <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                <path d="M5.294,1.824l4,4.005a.753.753,0,0,0,1.068,0,.763.763,0,0,0,0-1.071L5.83.22A.755.755,0,0,0,4.787.2L.221,4.755A.756.756,0,0,0,1.289,5.826Z" transform="translate(0 10.584) rotate(-90)" fill="#333"/>
            </svg>
            <span>Back</span>
        </div>
        <button type="button" class="btn-celest btns-modals" wire:click="next">Publish your listing</button>
    </div>
</div>