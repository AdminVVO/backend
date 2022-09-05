<div class="modal_block" wire:loading wire:target="contentDetails">
    <div class="content_hidden-anhost" id="seleccion-print" style="margin-bottom: 0; padding-bottom: 30px;">
        <div class="reservation-details-cont">
            <div class="_block-jsb hr">
                <h2 class="h2_publish">Reservation details</h2>
                <button type="button" class="btn-celest"  onclick="javascript:imprSelec('seleccion-print');">Print</button>
            </div>

            <div class="_flex_users hr">
                <span class="_pf-msg">
                    @if ( file_exists( storage_path('app/public/uploadAvatar/' . $contentDetails['avatar']  ) ) )
                        <img src="{{ URL::asset('storage/uploadAvatar/') .'/'. $contentDetails['avatar']  }}" alt="">
                    @else
                        <img src="{{ URL::asset('assets/img/avatar') .'/'. $contentDetails['avatar']  }}" alt="">
                    @endif
                </span>
                <div class="_b">
                    <div class="h5_red">Arriving in 2 Days</div>
                    <h2 class="h2-guests _txtcapit">{{ $contentDetails['name'] }}</h2>

                    <div class="mr-t16">
                        <p class="_txtec">{{ isset( $contentDetails['guest']['total'] ) ? $contentDetails['guest']['total'] : '' }} guests - {{ $contentDetails['nights'] }} nights - ${{ $contentDetails['amount_total'] }}</p>
                        <p class="_txtec">{{ $contentDetails['title'] }}</p>
                    </div>
                </div>
            </div>

            <div class="_block-about hr">
                <h2 class="h2-guests _txtcapit" style="margin-bottom: 10px;">about laura</h2>
                <p class="_txtec">You have a {{ $contentDetails['status'] }} reservation for {{ Carbon\Carbon::parse( $contentDetails['date_in'], 'UTC')->locale('en')->isoFormat('MMMM D') }} - {{ Carbon\Carbon::parse( $contentDetails['date_out'], 'UTC')->locale('en')->isoFormat('D') }}. Be sure to:</p>

                <div class="mr25-0">
                    <div class="_fbas-guintxt">
                        <span class="red_guion">-</span>
                        <div>
                            <p class="_txtec">Message your guest With check-in details before they arrive</p>
                        </div>
                    </div>

                    <div class="_fbas-guintxt">
                        <span class="red_guion">-</span>
                        <div>
                            <p class="_txtec">Clean and sanitize according to vvoutlet <a href="" class="txtunder__ics nrl blue txt16">5-step enhanced clearing process</a></p>
                        </div>
                    </div>
                    
                    <div class="_fbas-guintxt">
                        <span class="red_guion">-</span>
                        <div>
                            <p class="_txtec">Follow vvoutlet COVID-19 safety practices</p>
                        </div>
                    </div>
                </div>

                <div class="_flex">
                    <div class="_dfgap10">
                        <div class="_flex-icons">
                            <div class="_w">
                                <i class="far fa-star"></i>
                            </div>

                            <a href="" class="txtunder__ics nrl blue txt16">5.0 avg reating - 2 reviews</a>
                        </div>

                        <div class="_flex-icons">
                            <div class="_w">
                                <i class="far fa-bookmark"></i>
                            </div>

                            <a href="" class="txtunder__ics nrl blue txt16">Identity verified</a>
                        </div>

                        <div class="_flex-icons">
                            <div class="_w">
                                <img src="{{ URL::asset('assets/img/icons/vvoutlet-red.svg') }}">
                            </div>

                            <div class="_txtec">Joined in {{ Carbon\Carbon::parse( $contentDetails['joiner'], 'UTC')->locale('en')->isoFormat('ll') }}</div>
                        </div>

                        <div class="_flex-icons">
                            <div class="_w">
                                <i class="far fa-building"></i>
                            </div>
                            
                            <div class="_txtec">Lives in {{ $contentDetails['location_user'] }}</div>
                        </div>
                    </div>

                    <div style="text-align: center;">
                        <div class="_fbtn-br">
                            <a href="{{ $contentDetails['user'] != null ? route('profile', $contentDetails['user'] ) : '#' }}" class="btn-bd-white">
                                <span class="_txtec">View profile</span>
                            </a>

                            <a href="{{ route('messageUserPostIndex', ['interna' => $contentDetails['listing'] ]) }}" class="btn-bd-white">
                                <span class="_txtec">Message</span>
                            </a>

                            <a href="tel:{{ $contentDetails['phone'] }}" class="btn-bd-white">
                                <span class="_txtec">Call</span>
                            </a>
                        </div>

                        <p class="_txtec" style="margin-top: 19px;">Phone: {{ $contentDetails['phone'] }}</p>
                    </div>
                </div>
            </div>

            <div class="_block-booking hr">
                <h2 class="h2-guests" style="margin-bottom: 25px;">Booking details</h2>

                <div class="booking-details_icon">
                    <div class="_fbas-details">
                        <div class="_w">
                            <i class="far fa-calendar-alt"></i>
                        </div>

                        <div>
                            <div class="_txteh">Check in</div>
                            <div class="_txtec _txtcapit">{{ Carbon\Carbon::parse( $contentDetails['date_in'], 'UTC')->locale('en')->isoFormat('dddd, MMMM D, YYYY') }}</div>
                        </div>
                    </div>

                    <div class="_fbas-details">
                        <div class="_w">
                            <i class="far fa-calendar-alt"></i>
                        </div>

                        <div>
                            <div class="_txteh">Check out</div>
                            <div class="_txtec _txtcapit">{{ Carbon\Carbon::parse( $contentDetails['date_out'], 'UTC')->locale('en')->isoFormat('dddd, MMMM D, YYYY') }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="_block-booking hr">
                <div class="booking-details_icon">
                    <div class="_fbas-details">
                        <div class="_w">
                            <i class="far fa-user"></i>
                        </div>

                        <div>
                            <div class="_txteh">Total comming</div>
                            <div class="_txtec">{{ isset( $contentDetails['guest']['adult'] ) ? "{$contentDetails['guest']['adult']} Adult" : '' }}{{ isset( $contentDetails['guest']['kids'] ) ? ", {$contentDetails['guest']['kids']} Kids" : '' }}{{ isset( $contentDetails['guest']['infant'] ) ? ", {$contentDetails['guest']['infant']} Infant" : '' }}{{ isset( $contentDetails['guest']['pets'] ) ? ", {$contentDetails['guest']['pets']} Pets" : '' }}</div>
                        </div>
                    </div>

                    <div class="_fbas-details">
                        <div class="_w">
                            <i class="far fa-sticky-note"></i>
                        </div>

                        <div>
                            <div class="_txteh">Booking date</div>
                            <div class="_txtec _txtcapit">{{ Carbon\Carbon::parse( $contentDetails['booking'], 'UTC')->locale('en')->isoFormat('dddd, MMMM D, YYYY') }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="_block-booking hr">
                <div class="booking-details_icon">
                    <div class="_fbas-details">
                        <div class="_w">
                            <i class="far fa-check-square"></i>
                        </div>

                        <div>
                            <div class="_txteh">Confirmation code</div>
                            <div class="_txtec txt_upper">{{ $contentDetails['code_reservation'] }}</div>
                        </div>
                    </div>

                    <a href="" class="btn-bd-white">
                        <span class="_txtec">View calendar</span>
                    </a>
                </div>
            </div>

            <div class="_block-uestpaid hr">
                <h2 class="h2-guests" style="margin-top: 30px;">Guest paid</h2>

                <div class="_cns _cns-mdls">
                    @foreach ($contentDetails['services'] as $key => $element)
                        @if ( $key == 'price_base')
                            <span class="f-cth">
                                <div class="_txtec">{{ $element }} x {{ $contentDetails['nights'] }} nights</div>
                                <div class="_txtec">${{ $element * $contentDetails['nights'] }}</div>
                            </span>
                        @endif

                        @if ( $key == 'guest_sevice')
                            <span class="f-cth">
                                <div class="_txtec">Services fee</div>
                                <div class="_txtec">${{ $element }}</div>
                            </span>
                        @endif

                        @if ( $key == 'cleaning')
                            <span class="f-cth">
                                <div class="_txtec">Cleaning fee</div>
                                <div class="_txtec">${{ $element }}</div>
                            </span>
                        @endif

                        @if ( $key == 'pets')
                            <span class="f-cth">
                                <div class="_txtec">Pets fee</div>
                                <div class="_txtec">${{ $element }}</div>
                            </span>
                        @endif

                        @if ( $key == 'linens')
                            <span class="f-cth">
                                <div class="_txtec">Linens fee</div>
                                <div class="_txtec">${{ $element }}</div>
                            </span>
                        @endif

                        @if ( $key == 'resort')
                            <span class="f-cth">
                                <div class="_txtec">Resort fee</div>
                                <div class="_txtec">${{ $element }}</div>
                            </span>
                        @endif

                        @if ( $key == 'management')
                            <span class="f-cth">
                                <div class="_txtec">Management fee</div>
                                <div class="_txtec">${{ $element }}</div>
                            </span>
                        @endif

                        @if ( $key == 'extra_guest')
                            <span class="f-cth">
                                <div class="_txtec">Guest service fee</div>
                                <div class="_txtec">${{ $element }}</div>
                            </span>
                        @endif

                        @if ( $key == 'community')
                            <span class="f-cth">
                                <div class="_txtec">Community fee</div>
                                <div class="_txtec">${{ $element }}</div>
                            </span>
                        @endif

                        @if ( $key == 'monthly_discount')
                            <span class="f-cth">
                                <div class="_txtec">Monthly discount</div>
                                <div class="_txtec">-${{ $element }}</div>
                            </span>
                        @endif

                        @if ( $key == 'weekly_discount')
                            <span class="f-cth">
                                <div class="_txtec">Weekly discount</div>
                                <div class="_txtec">-${{ $element }}</div>
                            </span>
                        @endif
                    @endforeach

                    <span class="f-cthusd">
                        <div class="_txteh">Total paid by guest (USD)</div>
                        <div class="_txteh">${{ $contentDetails['amount_total'] }}</div>
                    </span>
                </div>
            </div>

            <div class="_block-uestpaid hr">
                <h2 class="h2-guests" style="margin-top: 30px;">Host payout</h2>

                <div class="_cns _cns-mdls">
                    <span class="f-cth">
                        <div>
                            <div class="_txtec">5 nights room fee</div>

                            <a href="" class="txtunder__ics nrl blue txt16">Show breakdowns</a>
                        </div>
                        <div class="_txtec">$295.00</div>
                    </span>

                    <span class="f-cth">
                        <div class="_txtec">Cleaning fee</div>
                        <div class="_txtec">$40.00</div>
                    </span>

                    <span class="f-cth">
                        <div class="_txtec">Host service fee</div>
                        <div class="_txtec">-$10.05</div>
                    </span>

                    <span class="f-cthusd">
                        <div class="_txteh">Total paid by guest (USD)</div>
                        <div class="_txteh">$324.95</div>
                    </span>
                </div>
            </div>

            <div class="_block-link hr">
                <div>
                    <a href="" class="txtunder__ics nrl blue txt16">How payouts work</a>
                </div>
            </div>

            <div class="_block-privatenote hr">
                <h2 class="h2-guests" style="margin-bottom: 10px;">Private note</h2>

                <div class="_fbas-details">
                    <div class="_w">
                        <img src="{{ URL::asset('assets/img/icons/look-solid_red.svg') }}" alt="">
                    </div>

                    <div>
                        <div class="_txtec">Your note is never shown to guests.</div>
                    </div>
                </div>

                <textarea placeholder="Write a note" class="_txta-modls" style="margin: 24px 0 16px;" rows="4"></textarea>

                <button class="btn-celest">Save</button>
            </div>

            <div class="_block-support hr">
                <h2 class="h2-guests" style="margin-bottom: 24px;">Support</h2>

                <div class="_flex">
                    <div>
                        <a href="" class="txtunder__ics nrl blue">
                            <div class="fx fx-ai-b gp5">
                                <span>Send or request money</span>

                                <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                                    <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#00b5dd"/>
                                </svg>
                            </div>
                        </a>
                    </div>

                    <div>
                        <a href="" class="txtunder__ics nrl blue">
                            <div class="fx fx-ai-b gp5">
                                <span>Change reservation</span>

                                <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                                    <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#00b5dd"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                    
                    <div>
                        <a href="" class="txtunder__ics nrl blue">
                            <div class="fx fx-ai-b gp5">
                                <span>Cancel reservation</span>

                                <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                                    <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#00b5dd"/>
                                </svg>
                            </div>
                        </a>
                    </div>

                    <div>
                        <button type="button" class="txtunder__ics nrl blue js__mdlReportThisGuest">
                            <div class="fx fx-ai-b gp5">
                                <span>Report this guest</span>

                                <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                                    <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#00b5dd"/>
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
            </div>

            <div class="_desurl hr">
                <p class="_txtec">Your cancellation policy for guests is <a href="" class="txtunder__ics nrl blue txt16">Moderate</a>.</p>

                <p class="_txtec">The penalties for canceling this reservation include getting a public review the shows you canceled, paying a cancellation fee, and having the canceled nights blocked on your calendar. <a href="" class="txtunder__ics nrl blue txt16">Read cancellation penalties</a>.</p>
            </div>

            <div class="_block-commquest hr">
                <h2 class="h2-guests" style="margin-bottom: 24px;">Common questions</h2>

                <div class="_gap">
                    <div class="_fcolumns-readmore">
                        <p class="_txteh">Modifying a reservation as a Host</p>

                        <p class="_txtec">Life happens, and sometimes you just can't host as planned. Past reservations can't be changed, but to edit a confirmed or active one, send your guest a trip change request proposing your new dates, price, or number of guests.</p>

                        <div>
                            <a href="" class="txtunder__ics nrl blue">
                                <div class="fx fx-ai-b gp5">
                                    <span>Read more</span>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                                        <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#00b5dd"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="_fcolumns-readmore">
                        <p class="_txteh">When a guest doesn't show up for a reservation</p>

                        <p class="_txtec">You were ready for guests, but they didn't show up. Don't worry, we'll release payout for a canceled reservation as detailed in the Cancellation Policy. If this is your first time hosting, we may hold the payout for 30 days after the reservation was confirmed. Learn more about payouts.</p>

                        <div>
                            <a href="" class="txtunder__ics nrl blue">
                                <div class="fx fx-ai-b gp5">
                                    <span>Read more</span>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                                        <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#00b5dd"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="_fcolumns-readmore">
                        <p class="_txteh">If a guest makes you uncomfortable</p>

                        <p class="_txtec text_tm2">You set the rules for your place—it's as simple as that. If you have a guest who has broken a house rule or if you have a guest who has broken a house rule or. You set the rules for your place—it's as simple as that. If you have a guest who has broken a house rule or if you have a guest who has broken a house rule or</p>

                        <div>
                            <a href="" class="txtunder__ics nrl blue">
                                <div class="fx fx-ai-b gp5">
                                    <span>Read more</span>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                                        <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#00b5dd"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="_block-link hr" style="padding-bottom: 0;">
                <div>
                    <a href="" class="txtunder__ics nrl blue">
                        <div class="fx fx-ai-b gp5">
                            <span>See more topics</span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                                <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#00b5dd"/>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
