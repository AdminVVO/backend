<div>
    <section class="entero section_calend_full_itinerary mr-t58">
        <div class="medio" id="seleccion-print">
            <div class="reservation-details-cont bkg_white bd_celest2 br10">
                <div class="_block-jsb hr">
                    <h2 class="h2_publish">Reservation details</h2>
                    <button type="button" class="btn-celest"
                        onclick="javascript:imprSelec('seleccion-print');">Print</button>
                </div>

                <div class="_flex_users hr">
                    <span class="_pf-msg">
                        <img src="{{ URL::asset('assets/img/avatar') }}/{{ $data['avatar'] }}" loading="lazy" alt="">
                    </span>
                    <div class="_b">
                        <div class="h5_red">{{$data['arriving']}} </div>
                        <h2 class="h2-guests _txtcapit">{{$data['full_name']}}</h2>

                        <div style="margin-top: 16px;">
                            <p class="_txtec">{{$data['number_guests']}} guests - {{$data['total_days']}} nights - ${{$data['total_payout']}}</p>
                            <p class="_txtec">{{$data['city']}} - {{$data['state']}}</p>
                        </div>
                    </div>
                </div>

                <div class="_block-about hr">
                    <h2 class="h2-guests _txtcapit" style="margin-bottom: 10px;">about {{$data['name']}}</h2>
                    <p class="_txtec">You have a confirmend reservation for {{$data['total_date']}}. Be sure to:</p>

                    <div style="margin: 25px 0;">
                        <div class="_fbas-guintxt">
                            <span class="red_guion">-</span>
                            <div>
                                <p class="_txtec">Message your guest With check-in details before they arrive</p>
                            </div>
                        </div>

                        <div class="_fbas-guintxt">
                            <span class="red_guion">-</span>
                            <div>
                                <p class="_txtec">Clean and sanitize according to vvoutlet
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
                                <a href="" class="_txtblu">5.0 avg reating - 2 reviews</a>
                            </div>

                            <div class="_flex-icons">
                                <div class="_w">
                                    <i class="far fa-bookmark"></i>
                                </div>
                                <a href="" class="_txtblu">Identity verified</a>
                            </div>

                            <div class="_flex-icons">
                                <div class="_w">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17.595" height="15.002"
                                        viewBox="0 0 17.595 15.002">
                                        <path id="Unión_9" data-name="Unión 9"
                                            d="M7.88,13.968A5.408,5.408,0,0,1,4.218,7.937,5.239,5.239,0,0,1,7.7,3.76q-.077-.491-.155-.981c-.008-.051-.011-.1-.016-.154l.042-.12a.382.382,0,0,1,.322-.146c.119,0,.238-.007.356-.019l.05,0a.35.35,0,0,1,.319.2c.175.3.361.6.538.9a.133.133,0,0,0,.07.064.837.837,0,0,1,.1.007q2.875-.158,5.75-.309a2.036,2.036,0,0,1,1.184.33.805.805,0,0,1,.161.137.343.343,0,0,1,.023.5,1.792,1.792,0,0,1-.408.333,2.045,2.045,0,0,1-.986.29c-.451.016-.9.048-1.353.07a.14.14,0,0,0-.121.068q-1,1.428-1.993,2.854a.377.377,0,0,1-.32.183c-.185,0-.37.02-.555.028a.3.3,0,0,1-.334-.376q.137-1.264.279-2.528c0-.017,0-.035,0-.059h-.1L9.315,5.1a.8.8,0,0,1-.1.008l-.108,0-.09,0A3.656,3.656,0,0,0,5.71,8.244,3.779,3.779,0,0,0,8.1,12.357a5.461,5.461,0,0,0,3.44-3.128l1.9-2.758a7.481,7.481,0,0,1-.15,2.261,6.992,6.992,0,0,1-4.922,5.212A.641.641,0,0,1,8.1,14,.776.776,0,0,1,7.88,13.968Zm-3.8-.393A7.17,7.17,0,0,1,.041,6.333,7.121,7.121,0,0,1,4.237.5,6.254,6.254,0,0,1,6.7,0,6.622,6.622,0,0,1,9.95.862l-.055,0a.59.59,0,0,0-.552.813c.068.261.138.522.208.783l-.006,0a5.038,5.038,0,0,0-5.42-.121,5.606,5.606,0,0,0,.724,9.852.831.831,0,0,1,.274,1.1.7.7,0,0,1-.639.379A1.007,1.007,0,0,1,4.078,13.574Zm6.31-10.836c-.076-.3-.158-.592-.235-.888a.307.307,0,0,1,.287-.422c.2-.013.4-.03.594-.029h.013a.369.369,0,0,1,.224.074c.46.388.913.785,1.368,1.179a.272.272,0,0,1,.025.035l-1.328.071c-.283.015-.566.03-.849.048h-.018C10.427,2.806,10.4,2.793,10.389,2.738Z"
                                            transform="translate(0.522 0.5)" fill="#ff5a5f" stroke="rgba(0,0,0,0)"
                                            stroke-miterlimit="10" stroke-width="1" />
                                    </svg>
                                </div>
                                <div class="_txtec">Joined in {{$data['created_at']}}</div>
                            </div>

                            <div class="_flex-icons">
                                <div class="_w">
                                    <i class="far fa-building"></i>
                                </div>
                                <div class="_txtec">Lives in {{$data['location']}}</div>
                            </div>
                        </div>

                        <div style="text-align: center;">
                            <div class="_fbtn-br">
                                <a href="{{route('profile', ['id' => $data['id_user']])}}" class="btn-border">View profile</a>
                                <a href="{{route('messageUserIndex')}}" class="btn-border">Message</a>
                                <a href="tel:{{$data['phone']}}" class="btn-border">Call</a>
                            </div>

                            <p class="_txtec" style="margin-top: 19px;">Phone: {{$data['phone']}}</p>
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
                                <div class="_txtec _txtcapit">{{$data['checkin']}}</div>
                            </div>
                        </div>

                        <div class="_fbas-details">
                            <div class="_w">
                                <i class="far fa-calendar-alt"></i>
                            </div>

                            <div>
                                <div class="_txteh">Check out</div>
                                <div class="_txtec _txtcapit">{{$data['checkout']}}</div>
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
                                <div class="_txtec">{{$data['number_guests']}} adults</div>
                            </div>
                        </div>

                        <div class="_fbas-details">
                            <div class="_w">
                                <i class="far fa-sticky-note"></i>
                            </div>

                            <div>
                                <div class="_txteh">Booking date</div>
                                <div class="_txtec _txtcapit">{{$data['booked']}}</div>
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
                                <div class="_txtec txt_upper">hmb9fc3hbt</div>
                            </div>
                        </div>

                        <a href="{{ route('calendarIndex') }}" class="btn-border">View Calendar</a>
                    </div>
                </div>

                <div class="_block-uestpaid hr">
                    <h2 class="h2-guests" style="margin-top: 30px;">Guest paid</h2>

                    <div class="_cns _cns-mdls">
                        <span class="f-cth">
                            <div class="_txtec">${{$data['base_price']}} x {{$data['total_days']}} nights</div>
                            <div class="_txtec">${{$data['total_payout']}}</div>
                        </span>
                        @if($data['cleaning_fee'])
                        <span class="f-cth">
                            <div class="_txtec">Cleaning fee</div>
                            <div class="_txtec">${{$data['cleaning_fee']}}</div>
                        </span>
                        @endif
                        @if($data['pet_fee'])
                        <span class="f-cth">
                            <div class="_txtec">Pet fee</div>
                            <div class="_txtec">${{$data['pet_fee']}}</div>
                        </span>
                        @endif
                        @if($data['linens_fee'])
                        <span class="f-cth">
                            <div class="_txtec">Linens fee</div>
                            <div class="_txtec">${{$data['linens_fee']}}</div>
                        </span>
                        @endif
                        @if($data['resort_fee'])
                        <span class="f-cth">
                            <div class="_txtec">Resort fee</div>
                            <div class="_txtec">${{$data['resort_fee']}}</div>
                        </span>
                        @endif
                        @if($data['management_fee'])
                        <span class="f-cth">
                            <div class="_txtec">Management fee</div>
                            <div class="_txtec">${{$data['management_fee']}}</div>
                        </span>
                        @endif
                        @if($data['community_fee'])
                        <span class="f-cth">
                            <div class="_txtec">Community fee</div>
                            <div class="_txtec">${{$data['community_fee']}}</div>
                        </span>
                        @endif
                        @if($data['extra_guest_fee'])
                        <span class="f-cth">
                            <div class="_txtec">Extra guest fee</div>
                            <div class="_txtec">${{$data['extra_guest_fee']}}</div>
                        </span>
                        @endif
                        @if($data['weekend_nightly_fee'])
                        <span class="f-cth">
                            <div class="_txtec">Weekend nightly fee</div>
                            <div class="_txtec">${{$data['weekend_nightly_fee']}}</div>
                        </span>
                        @endif
                        <span class="f-cthusd">
                            <div class="_txteh">Total paid by guest (USD)</div>
                            <div class="_txteh">${{$data['total_paid_by_guest']}}</div>
                        </span>
                    </div>
                </div>

                <div class="_block-uestpaid hr">
                    <h2 class="h2-guests" style="margin-top: 30px;">Host payout</h2>

                    <div class="_cns _cns-mdls">
                        <span class="f-cth">
                            <div>
                                <div class="_txtec">5 nights room fee</div>
                                <span class="_txtblu"
                                    style="font-size: 14px; font-weight: normal; margin-top: 3px;">Show
                                    breakdowns</span>
                            </div>
                            <div class="_txtec">${{$data['total_payout']}}</div>
                        </span>

                        <span class="f-cth">
                            <div class="_txtec">General fee</div>
                            <div class="_txtec">${{$data['cleaning_fee']}}</div>
                        </span>

                        <span class="f-cth">
                            <div class="_txtec">Host service fee (15.0%)</div>
                            <div class="_txtec">-${{$data['host_service_fee']}}</div>
                        </span>

                        <span class="f-cthusd">
                            <div class="_txteh">Total paid to you (USD)</div>
                            <div class="_txteh">${{$data['total_paid_you']}}</div>
                        </span>
                    </div>
                </div>

                <div class="_block-link hr">
                    <a href="#" class="_flex-sbet dis-b hr">
                        <span class="_txtblu">How payouts work</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584"
                            viewBox="0 0 6.052 10.584">
                            <path id="Icon_ionic-ios-arrow-down" data-name="Icon ionic-ios-arrow-down"
                                d="M11.482,15.474l4-4.005a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071l-4.535,4.538a.755.755,0,0,1-1.043.022L6.408,12.543a.757.757,0,0,1,1.068-1.071Z"
                                transform="translate(-11.246 16.772) rotate(-90)" fill="#fff" />
                        </svg>
                    </a>
                </div>

                <div class="_block-privatenote hr">
                    <h2 class="h2-guests" style="margin-bottom: 10px;">Private note</h2>

                    <div class="_fbas-details" style="margin-bottom: 10px;">
                        <div class="_w">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="24.938"
                                viewBox="0 0 19 24.938">
                                <path id="Icon_material-lock-outline" data-name="Icon material-lock-outline"
                                    d="M15.5,20.5a2.375,2.375,0,1,0-2.375-2.375A2.382,2.382,0,0,0,15.5,20.5ZM22.625,9.813H21.438V7.438a5.938,5.938,0,0,0-11.875,0V9.813H8.375A2.382,2.382,0,0,0,6,12.188V24.063a2.382,2.382,0,0,0,2.375,2.375h14.25A2.382,2.382,0,0,0,25,24.063V12.188A2.382,2.382,0,0,0,22.625,9.813ZM11.819,7.438a3.681,3.681,0,1,1,7.362,0V9.813H11.819ZM22.625,24.063H8.375V12.188h14.25Z"
                                    transform="translate(-6 -1.5)" fill="#ff5a5f" />
                            </svg>
                        </div>

                        <div>
                            <div class="_txtec">Your note is never shown to guests.</div>
                        </div>
                    </div>

                    <div>
                        <p>{{ Str::substr(print_r(str_replace("\n", '<br/>', $data['note'])), 0, -1) }}</p>
                    </div>
                    <textarea placeholder="Write a note" class="_txta-modls" style="margin: 17px 0 16px;" wire:model.lazy ="note"></textarea>

                    <button class="btn-celest" wire:click="saveNote()">Save</button>
                </div>

                <div class="_block-support hr">
                    <h2 class="h2-guests" style="margin-bottom: 24px;">Support</h2>

                    <div class="_flex">
                        <div>
                            <a href="#" class="_flex-sbet dis-b">
                                <span class="_txtblu">Send or request money</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584"
                                    viewBox="0 0 6.052 10.584">
                                    <path
                                        d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z"
                                        transform="translate(0 10.584) rotate(-90)" fill="#00b5dd" />
                                </svg>
                            </a>
                        </div>

                        <div>
                            <a href="#" class="_flex-sbet dis-b">
                                <span class="_txtblu">Change reservation</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584"
                                    viewBox="0 0 6.052 10.584">
                                    <path
                                        d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z"
                                        transform="translate(0 10.584) rotate(-90)" fill="#00b5dd" />
                                </svg>
                            </a>
                        </div>

                        <div>
                            <a href="#" class="_flex-sbet dis-b">
                                <span class="_txtblu">Cancel reservation</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584"
                                    viewBox="0 0 6.052 10.584">
                                    <path
                                        d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z"
                                        transform="translate(0 10.584) rotate(-90)" fill="#00b5dd" />
                                </svg>
                            </a>
                        </div>

                        <div>
                            <a href="#" class="_flex-sbet dis-b">
                                <span class="_txtblu">Report this guest</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584"
                                    viewBox="0 0 6.052 10.584">
                                    <path
                                        d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z"
                                        transform="translate(0 10.584) rotate(-90)" fill="#00b5dd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="_desurl hr">
                    <p class="_txtec">Your cancellation policy for guests is <a href="#"
                            class="_txtblu">Moderate</a></p>
                </div>

                <div class="_block-commquest hr">
                    <h2 class="h2-guests" style="margin-bottom: 24px;">Common questions</h2>

                    <div class="_gap">
                        <div class="_fcolumns-readmore">
                            <p class="_txteh">Modifying a reservation as a Host</p>
                            <p class="_txtec">Life happens, and sometimes you just can't host as planned. Past
                                reservations can't be changed, but to edit a confirmed or active one, send your guest a
                                trip change request proposing your new dates, price, or number of guests.</p>
                            <div>
                                <a href="#" class="_flex-sbet dis-b">
                                    <span class="_txtblu">Read more</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584"
                                        viewBox="0 0 6.052 10.584">
                                        <path
                                            d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z"
                                            transform="translate(0 10.584) rotate(-90)" fill="#00b5dd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="_fcolumns-readmore">
                            <p class="_txteh">When a guest doesn't show up for a reservation</p>
                            <p class="_txtec">You were ready for guests, but they didn't show up. Don't worry, we'll
                                release payout for a canceled reservation as detailed in the Cancellation Policy. If
                                this is your first time hosting, we may hold the payout for 30 days after the
                                reservation was confirmed. Learn more about payouts.</p>
                            <div>
                                <a href="#" class="_flex-sbet dis-b">
                                    <span class="_txtblu">Read more</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584"
                                        viewBox="0 0 6.052 10.584">
                                        <path
                                            d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z"
                                            transform="translate(0 10.584) rotate(-90)" fill="#00b5dd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="_fcolumns-readmore">
                            <p class="_txteh">If a guest makes you uncomfortable</p>
                            <p class="_txtec">You set the rules for your place—it's as simple as that. If you have a
                                guest who has broken a house rule or...</p>
                            <div>
                                <a href="#" class="_flex-sbet dis-b">
                                    <span class="_txtblu">Read more</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584"
                                        viewBox="0 0 6.052 10.584">
                                        <path
                                            d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z"
                                            transform="translate(0 10.584) rotate(-90)" fill="#00b5dd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <a href="#">
            <div class="content_icon-leng" id="btnLeng">
            </div>
        </a>
    </section>
    <script language="Javascript">
	    function imprSelec(nombre) {
            var ficha = document.getElementById(nombre);
            var ventimp = window.open('', 'PRINT', 'height=800,width=1200');
            ventimp.document.write('<html><head><title>' + document.title + '</title>');
            ventimp.document.write('<link rel="stylesheet" href="{{ URL::asset('assets/css/modals-admin.css')}}">');
            ventimp.document.write('<link rel="stylesheet" href="{{ URL::asset('assets/css/estilos.css')}}">');
            ventimp.document.write('</head><body>');
            ventimp.document.write(ficha.innerHTML);
            ventimp.document.write('</body></html>');
            ventimp.document.close();
            ventimp.focus();
            ventimp.onload = function() {
                ventimp.print();
                ventimp.close();
            };
            return true;
	    }
	</script>
</div>
