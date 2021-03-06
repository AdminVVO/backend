<div class="container_contact-host patlbrzi container_user-host">
    <div class="paz999i0b modal_content-user"></div>

    <div class="fxpaijcpmi">
        <div class="_z4lmgp">
            <div class="fxfbwhmhbrzi">
                <div class="fx fx-jc-e">
                    <button type="button" class="cwhfcbbpfx closeUserModal">X</button>
                </div>

                <div class="whfxoyx">
                    <div class="poyxwh">
                        <div class="popup-contact-host">
                            <div class="blocgpfx">
                                <div class="content-user_inf">
                                    <span class="_pf-msg">
                                        @if ( file_exists( storage_path('app/public/uploadAvatar/' . \App\Models\User::AvatarInterna( $content['user_id'] )  ) ) )
                                            <img src="{{ URL::asset('storage/uploadAvatar/') .'/'. \App\Models\User::AvatarInterna( $content['user_id'] )  }}" alt="">
                                        @else
                                            <img src="{{ URL::asset('assets/img/avatar') }}/{{ \App\Models\User::AvatarInterna( $content['user_id'] ) }}" alt="">
                                        @endif
                                    </span>

                                    <div class="fx fx-fd-c gp8">
                                        <div class="h2-guests_fs22">Contact {{ \App\Models\User::Name( $content['user_id'] ) }}</div>
                                        <div class="txtec_nrl">Typically responds within an hour</div>
                                    </div>
                                </div>

                                <div>
                                    <h2 class="h2-guests_fs22">Most travelers ask about</h2>

                                    <div class="content-user_icons">
                                        <div class="_fw">
                                            @if ( in_array('free_parking', $content['amenities']))
                                                <div class="_txteh">Getting there</div>
                                                <div class="s-usr_icons">
                                                    <div class="_suis">
                                                        <img src="{{ URL::asset('assets/img/icons/check-red.svg') }}" alt="">
                                                    </div>
                                                    <div class="_suisinfo">
                                                        <div class="_txtec">Free parking on the premises.</div>
                                                    </div>
                                                </div>
                                            @endif

                                            <div class="s-usr_icons">
                                                <div class="_suis">
                                                    <img src="{{ URL::asset('assets/img/icons/check-red.svg') }}" alt="">
                                                </div>
                                                <div class="_suisinfo">
                                                    <div class="_txtec">Check-in time for this home starts at {{ $content['checkin_window_start']['time'] .' '. $content['checkin_window_start']['type'] }} and checkout is at {{ $content['checkin_window_end']['time'] .' '. $content['checkin_window_end']['type'] }}.</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="_fw">
                                            <div class="_txteh">House rules</div>
                                            <div class="s-usr_icons">
                                                <div class="_suis">
                                                    <img src="{{ URL::asset('assets/img/icons/check-red.svg') }}" alt="">
                                                </div>
                                                <div class="_suisinfo">
                                                    <div class="_txtec">{{ $content['suitable_for_children'] ? '' : 'No' }} Suitable for children (2-12 years).</div>
                                                </div>
                                            </div>

                                            <div class="s-usr_icons">
                                                <div class="_suis">
                                                    <img src="{{ URL::asset('assets/img/icons/check-red.svg') }}" alt="">
                                                </div>
                                                <div class="_suisinfo">
                                                    <div class="_txtec">{{ $content['suitable_for_infants'] ? '' : 'No' }} Suitable for infants (under 2 years).</div>
                                                </div>
                                            </div>

                                            <div class="s-usr_icons">
                                                <div class="_suis">
                                                    <img src="{{ URL::asset('assets/img/icons/check-red.svg') }}" alt="">
                                                </div>
                                                <div class="_suisinfo">
                                                    <div class="_txtec">{{ $content['pets_allowed'] ? 'Pets Allowed.' : 'No Pets.' }}</div>
                                                </div>
                                            </div>

                                            <div class="s-usr_icons">
                                                <div class="_suis">
                                                    <img src="{{ URL::asset('assets/img/icons/check-red.svg') }}" alt="">
                                                </div>
                                                <div class="_suisinfo">
                                                    <div class="_txtec">{{ $content['smoking_allowed'] ? 'Smoking allowed.' : 'No Smoking.' }}</div>
                                                </div>
                                            </div>

                                            <div class="s-usr_icons">
                                                <div class="_suis">
                                                    <img src="{{ URL::asset('assets/img/icons/check-red.svg') }}" alt="">
                                                </div>
                                                <div class="_suisinfo">
                                                    <div class="_txtec">{{ $content['events_allowed'] ? 'Events allowed.' : 'No Parties or Events..' }}</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="_fw">
                                            <div class="_txteh">Price and availability</div>
                                            @if ( $content['weekly_discount'] != null )
                                                <div class="s-usr_icons">
                                                    <div class="_suis">
                                                        <img src="{{ URL::asset('assets/img/icons/check-red.svg') }}" alt="">
                                                    </div>
                                                    <div class="_suisinfo">
                                                        <div class="_txtec">Get a {{ $content['weekly_discount'] }}% discount on stays longer than a week.</div>
                                                    </div>
                                                </div>
                                            @endif

                                            <div class="s-usr_icons">
                                                <div class="_suis">
                                                    <img src="{{ URL::asset('assets/img/icons/check-red.svg') }}" alt="">
                                                </div>
                                                <div class="_suisinfo">
                                                    @if ( $content['cancellation_policy'] == 'Flexible' )
                                                        <div class="_txtec">Full refund 1 day prior to arrival</div>
                                                    @endif

                                                    @if ( $content['cancellation_policy'] == 'Flexible or Non-refundable' )
                                                        <div class="_txtec">In addition to Flexible, offer a non-refundable option???guests pay 10% less, but you keep your payout no matter when they cancel.</div>
                                                    @endif

                                                    @if ( $content['cancellation_policy'] == 'Moderate' )
                                                        <div class="_txtec">Full refund 5 days prior to arrival</div>
                                                    @endif

                                                    @if ( $content['cancellation_policy'] == 'Moderate or Non-refundable' )
                                                        <div class="_txtec">In addition to Moderate, offer a non-refundable option???guests pay 10% less, but you keep your payout no matter when they cancel.</div>
                                                    @endif

                                                    @if ( $content['cancellation_policy'] == 'Firm' )
                                                        <div class="_txtec">Full refund for cancellations up to 30 days before check-in. If booked fewer than 30 days before check-in, full refund for cancellations made within 48 hours of booking and at least 14 days before check-in. After that, 50% refund up to 7 days before check-in. No refund after that.</div>
                                                    @endif

                                                    @if ( $content['cancellation_policy'] == 'Firm or Non-refunfable' )
                                                        <div class="_txtec">In addition to Firm, offer a non-refundable option???guests pay 10% less, but you keep your payout no matter when they cancel.</div>
                                                    @endif

                                                    @if ( $content['cancellation_policy'] == 'Strict' )
                                                        <div class="_txtec">Full refund for cancellations made within 48 hours of booking, if the check-in date is at least 14 days away. 50% refund for cancellations made at least 7 days before check-in. No refunds for cancellations made within 7 days of check-in.</div>
                                                    @endif

                                                    @if ( $content['cancellation_policy'] == 'Strict or Non-refundable' )
                                                        <div class="_txtec">In addition to Strict, offer a non-refundable option???guests pay 10% less, but you keep your payout no matter when they cancel.</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @livewire('interna.interna-form-contact',[
                                    'listingId' => $content['id_listings'],
                                    'UserId' => $content['user_id'],
                                    'listingTitle' => $content['title'],
                                ])

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>