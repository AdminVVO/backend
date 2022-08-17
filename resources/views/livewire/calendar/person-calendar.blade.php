<div class="entero section_calendar_admin sectionCalendarIndSelect">
    <div class="container-medio">
        <div class="contCalendarVvoFlex">
            <div id="calendar" wire:ignore></div>
            {{-- **************************** --}}
            @if ($show_modal == 1)
                <div class="rgtContMrCal right_bk_show active-info">
                @else
                    <div class="rgtContMrCal right_bk_show">
            @endif
            {{-- *********************************FILTRADO LISTING****************************** --}}
            <div class="fx fx-fw-w gp8 mr-b18">
                <div class="sltNrlCont btnSltNrl">
                    <button type="button" class="vvo-btn-select scale js_submenuNrml">
                        <div class="fx fx-ai-c fx-jc-sb gp14">
                            <span>{{$title}}</span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="14.652" height="8.378"
                                viewBox="0 0 14.652 8.378">
                                <path
                                    d="M13.516,17.1l5.54-5.545a1.043,1.043,0,0,1,1.479,0,1.056,1.056,0,0,1,0,1.483l-6.278,6.282a1.045,1.045,0,0,1-1.444.031L6.493,13.042a1.047,1.047,0,0,1,1.479-1.483Z"
                                    transform="translate(-6.188 -11.246)"></path>
                            </svg>
                        </div>
                    </button>
                    <div class="_bef-places submenuRoomsBed" style="min-width: 300px">
                        <div class="fxfbwhmhbrzi">
                            <div class="p24oyxwh">
                                @foreach ($listings as $key => $data)
                                    <div class="mr-b26">
                                        <label class="block-lb fx-ai-c">
                                            <input type="radio" name="listingSelect" class="selection_value"
                                                value="{{ $data['id'] }}">
                                            <span class="before_check w24">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206"
                                                    viewBox="0 0 21.732 16.206">
                                                    <path
                                                        d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z"
                                                        transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <div class="fx fx-ai-c">
                                                <div class="mwhbrobc mr-r12">
                                                <img loading="lazy" width="56px" height="40px"  src="{{ URL::asset('storage/photos-listing/') .'/'. \App\Models\Listing\Listings::ListingFile( $data['id'] ) .'/'. $data['imgUri'] }}">

                                                </div>

                                                <div>
                                                    <div class="_txteh16 text_tm2">{{ $data['title'] }}</div>
                                                    <div class="_txtec14 text_tm1">Listed</div>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- *******************************FIN FILTRADO LISTING**************************** --}}
            <div class="fx fx-fd-c ht-p100 borderCont ow-a">
                <div class="hideInfoSlectDays">
                    <div class="pd-t24 pd-r24 pd-b24 pd-l24 hr">
                        <div class="fx fx-ai-c fx-fw-w fx-jc-sb gp18">
                            <div class="_txtec16">You're always in control of your listing, price, and availability.
                                <button type="button" class="txtunder__ics txt16">Read more</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ow-a ht-p100 fx fx-fd-c">
                    {{-- *********************************RESERVACIONES****************************** --}}
                    @if ($show_modal_info == 1)
                        <div class="show-inf-details-calendar">

                            <div class="ht-p100 ow-a">
                                <div class="block-pd-cl rs">
                                    <h2 class="h2_publish mr-b1">Reservation</h2>
                                    <span class="_txtec16">{{ $findReservation['arriving'] ?? '' }}
                                        {{ $findReservation['guest'] ?? '' }} guests -
                                        {{ $findReservation['nights'] ?? '' }}
                                        nights</span>
                                </div>

                                <div class="block-pd-cl sw-pf">
                                    <div class="fx fx-ai-c gp21">
                                        <span class="_pf-msg mr0">
                                            <img src="{{ URL::asset('assets/img/avatar') }}/{{ $findReservation['avatar'] }}"
                                                loading="lazy" alt="">
                                        </span>
                                        <div class="fx fx-fd-c gp5">
                                            <h2 class="h2-guests _txtcapit">{{ $findReservation['name'] ?? '' }}</h2>
                                            @if ($findReservation)
                                                <p><a href="{{ route('profile', ['id' => $findReservation['user_id']]) }}"
                                                        class="_txtblu16">Show profile</a>
                                                    <i class="_txtblu16">-</i>
                                                    <a href="{{ route('messageUserIndex') }}"
                                                        class="_txtblu16">Message</a>
                                                </p>
                                            @else
                                                <p>
                                                    <a href="" class="_txtblu16">Show profile</a>
                                                    <i class="_txtblu16">-</i>
                                                    <a href="" class="_txtblu16">Message</a>
                                                </p>
                                                <a href="" class="_txtblu16">Show profile - Message</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="block-pd-cl checks">
                                    <div class="bk-icon-des gp12">
                                        <div class="bk-icon-des_fbas fx-ai-b gp10 mnw-p48">
                                            <div class="txt-center w21">
                                                <i class="far fa-calendar-alt _i-red22"></i>
                                            </div>

                                            <div class="fx fx-fd-c gp1">
                                                <div class="_txteh">Check in</div>

                                                <div class="_txtec _txtcapit">{{ $findReservation['checkin'] ?? '' }}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bk-icon-des_fbas fx-ai-b gp10 mnw-p48">
                                            <div class="txt-center w21">
                                                <i class="far fa-calendar-alt _i-red22"></i>
                                            </div>

                                            <div class="fx fx-fd-c gp1">
                                                <div class="_txteh">Check out</div>

                                                <div class="_txtec _txtcapit">{{ $findReservation['checkout'] ?? '' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="block-pd-cl checks">
                                    <div class="bk-icon-des gp12">
                                        <div class="bk-icon-des_fbas fx-ai-b gp10 mnw-p48">
                                            <div class="txt-center w21">
                                                <i class="far fa-user _i-red22"></i>
                                            </div>

                                            <div class="fx fx-fd-c gp1">
                                                <div class="_txteh">Total comming</div>

                                                <div class="_txtec">{{ $findReservation['guest'] ?? '' }} adults</div>
                                            </div>
                                        </div>

                                        <div class="bk-icon-des_fbas fx-ai-b gp10 mnw-p48">
                                            <div class="txt-center w21">
                                                <i class="fas fa-dollar-sign _i-red22"></i>
                                            </div>

                                            <div class="fx fx-fd-c gp1">
                                                <div class="_txteh">Total payout</div>

                                                <div class="_txtec">${{ $findReservation['total_payout'] ?? '' }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="block-pd-cl checks">
                                    <div class="bk-icon-des gp12">
                                        <div class="bk-icon-des_fbas fx-ai-b gp10 mnw-p48">
                                            <div class="txt-center w21">
                                                <i class="far fa-check-square _i-red22"></i>
                                            </div>

                                            <div class="fx fx-fd-c gp1">
                                                <div class="_txteh">Confirmation code</div>

                                                <div class="_txtec _txtcapit">
                                                    HMB9FC3HBT
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="block-pd-cl sw-pf">
                                    <div class="bk-icon-des_fbas fx-ai-b gp10 mnw-p48">
                                        <div class="txt-center w21">
                                            <i class="far fa-file-alt _i-red22"></i>
                                        </div>

                                        <div class="fx fx-fd-c gp1">
                                            <div class="_txteh">Private note</div>

                                            <div class="_txtec">This is not shown to guests.</div>
                                        </div>
                                    </div>

                                    <div class="_bkgris mr-t10">
                                        <span class="_txtec">Inlude a note to yourself about these date</span>
                                    </div>
                                    <div class="_bkgris mr-t10">
                                        <div class="_txtec">{{ $findReservation['note'] }}</div>
                                    </div>

                                    <div class="mr-t19 fx fx-fd-c fx-ai-c">
                                        @if ($findReservation)
                                            <a href='{{ route('ShowReservation', ['id' => $findReservation['id_reservation']]) }}'
                                                class="btn-celest">View full itinerary</a>
                                        @else
                                            <a href="">View full itinerary</a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="_kr7m4r pd" hidden>
                                <div class="fx fx-fw-w fx-ai-c fx-jc-sb gp12">
                                    <button type="button" class="_fpnigw0 js_hideMdlReservationTable close">Cancel</button>
                                    <button class="btn-celest" wire:click="DateConfig()" id="updateDate">Save
                                </div>
                                </button>
                            </div>
                        </div>
                        {{-- *********************************FIN RESERVACIONES****************************** --}}
                        {{-- *********************************FECHA****************************** --}}
                    @else
                        <div class="show-inf-details-calendar">
                            <div class="ht-p100 ow-a pd-t28">
                                <div class="block-pd-cl rs">
                                    @if (!$date_end)
                                        <div class="h2_publish mr-b46">{{ $date_init }}</div>
                                    @elseif($date_end)
                                        <div class="h2_publish mr-b46">{{ $date_init }} to {{ $date_end }}
                                        </div>
                                    @else
                                        <div class="h2_publish mr-b46"></div>
                                    @endif

                                    <div class="fx fx-ai-c fx-fw-w fx-jc-sb gp18">
                                        <span class="_txteh">Available</span>
                                        <input type="checkbox" id="checkbox" class="checkbox_custom check_i"
                                            wire:model.lazy="available">
                                    </div>
                                </div>

                                <div class="block-pd-cl checks">
                                    <div class="fx fx-fd-c gp24">
                                        <div class="_txteh">Pricing</div>

                                        <div class="show_form_input">
                                            <div>
                                                <div class="txt-check-in">Nightly price</div>

                                                <label class="before_icon_input">
                                                    <span class="_txtec">$</span>
                                                    @if ($available == 1)
                                                        <input type="text" class="number" wire:model="price">
                                                    @else
                                                        <input type="text" class="number" wire:model="0" disabled>
                                                    @endif
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="block-pd-cl checks">
                                    <div class="fx fx-ai-c fx-jc-sb">
                                        <div class="_txteh">Private Note</div>

                                        <button type="button" class="_fpnigw0 click_add_private_note_cl">
                                            <div class="fx fx-ai-b gp5">
                                                <span>Add</span>

                                                <svg xmlns="http://www.w3.org/2000/svg" width="6.052"
                                                    height="10.584" viewBox="0 0 6.052 10.584">
                                                    <path
                                                        d="M11.482,15.474l4-4.005a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071l-4.535,4.538a.755.755,0,0,1-1.043.022L6.408,12.543a.757.757,0,0,1,1.068-1.071Z"
                                                        transform="translate(-11.246 16.772) rotate(-90)"
                                                        fill="#333" />
                                                </svg>
                                            </div>
                                        </button>
                                    </div>
                                    <div>
                                        <p>{{ Str::substr(print_r(str_replace("\n", '<br/>', $date_config_note)), 0, -1) }}
                                        </p>
                                    </div>
                                </div>
                                @if ($date_end)
                                    <div class="block-pd-cl checks">
                                        <div class="fx fx-fd-c gp24">
                                            <div class="_txteh">Promotions</div>

                                            <div>
                                                <div class="_bkgris txt-center">
                                                    <div class="_txteh">New listing promotion: 20% off</div>

                                                    @if (!$date_end)
                                                        <p class="_txtec">{{ $date_init }}</p>
                                                    @elseif($date_end)
                                                        <p class="_txtec">{{ $date_init }} to {{ $date_end }}
                                                        </p>
                                                    @else
                                                        <p class="_txtec"></p>
                                                    @endif
                                                </div>

                                                <div class="desc mr-t24">
                                                    <p class="_txtec16">You're always in control of your listing, Price
                                                        and availability. <button type="button"
                                                            class="txtunder__ics txt16">Read more</button></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <div class="_kr7m4r pd">
                                <div class="fx fx-fw-w fx-ai-c fx-jc-sb gp12">
                                    <button type="button" class="_fpnigw0 js_hideMdlReservationTable">Cancel</button>
                                    <button class="btn-celest" wire:click="DateConfig()" id="updateDate">Save
                                </div>
                                </button>
                            </div>
                        </div>
                    @endif
                    {{-- *********************************FIN FECHA****************************** --}}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="container_admin-host container_popup_ntpve">
    <div class="modal-anhost"></div>

    <div class="pd_anhost-modal">
        <div class="_z4lmgp">
            <div class="modal_content-anhost">
                <div class="close">
                    <span>X</span>
                </div>

                <div class="modal_block">
                    <div class="content_hidden-anhost" style="margin-bottom: 0;">
                        <div class="_goqbqk">
                            <h2 class="h2_publish">Private note</h2>
                            <p class="_txtec mr-t16">Leave a private note as a reminder for this date. This is not
                                shown to guests.</p>
                            <textarea class="_txta-modls" style="margin: 48px 0px 32px; resize: vertical; display: block;" rows="5"
                                id="note_text">{{ $date_config_note }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="_zgc1p6">
                    <button type="button" class="_fpnigw0 click_cancel_mdls">Cancel</button>
                    <button class="btn-celest" wire:click="NoteConfig()" id="CreateOrUpdateNote">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', async function() {
        var calendarEl = document.getElementById('calendar');


        var calendar = new FullCalendar.Calendar(calendarEl, {
            timeZone: 'UTC',
            aspectRatio: 2,
            refetchResourcesOnNavigate: true,


            initialView: "dayGridMonth",
            dayMaxEvents: 1, // allow "more" link when too many events
            editable: false,
            navLinks: true,

            eventOrder: 'created_at',
            eventOrderStrict: false,
            events: @this.reservation,
            resourceOrder: 'created_at',
            selectOverlap: function(event) {
                return event.id !== 'past';
            },
            eventResourceEditable: false,
            selectable: true,
            slotWidth: 500,

            //**************************************//

            select: function(info) {
                @this.show_modal = 1;
                @this.show_modal_info = 0;
                var start = new Date(info.startStr);
                var end = new Date(info.endStr);

                if (start.getDate() + 1 == (end.getDate())) {
                    @this.date_init = info.startStr
                    @this.date_end = ''
                } else {
                    end.setDate(end.getDate() - 1)
                    @this.date_init = info.startStr
                    @this.date_end = end.toISOString().split('T')[0]
                    // @this.date_end = end.getFullYear()+'-'+ (end.getMonth()<10 ? ('0'+end.getMonth()): end.getMonth()) +'-' + (end.getDate()<10 ?('0'+end.getDate()): end.getDate())
                }
                @this.showDate(info.startStr)
            },

            eventContent: function(arg) {
                arg.event._def.ui.startEditable = false;
                let italicEl = document.createElement('div')
                if (arg.event.extendedProps.status && arg.event.extendedProps.status == 0) {
                    italicEl.innerHTML = `
                        <button type="button" class="reservaIndividualSelect js__infoReservationTable green">
                            <div class="fx fx-fd-c gp5">
                                <span class="_pf-msg mr0 fx">
                                    <img src="{{ asset('assets/img/avatar') }}/` + arg.event._def.extendedProps
                        .avatar + `">
                                </span>

                                <div class="fx fx-fd-c fx-ai-fs gp1">
                                    <span class="_txtboldff14 text_tm1">` + arg.event._def.title + ` $` + arg.event
                        ._def.extendedProps.total_payout + `</span>
                                    <span class="_txt-white14 text_tm1">CH</span>
                                </div>
                            </div>
                        </button>
                    `
                } else if (arg.event.extendedProps.status == 1) {
                    italicEl.innerHTML = `
                        <button type="button" class="reservaIndividualSelect js__infoReservationTable green">
                            <div class="fx fx-fd-c gp5">
                                <span class="_pf-msg mr0 fx">
                                    <img src="{{ asset('assets/img/avatar') }}/` + arg.event._def.extendedProps
                        .avatar + `">
                                </span>

                                <div class="fx fx-fd-c fx-ai-fs gp1">
                                    <span class="_txtboldff14 text_tm1">` + arg.event._def.title + ` $` + arg.event
                        ._def.extendedProps.total_payout + `</span>
                                    <span class="_txt-white14 text_tm1">CH</span>
                                </div>
                            </div>
                        </button>
                    `
                } else if (arg.event.extendedProps.status == 2) {
                    italicEl.innerHTML = `
                        <button type="button" class="reservaIndividualSelect plomo">
                            <div class="fx fx-fd-c gp5">
                                <span class="_pf-msg mr0 fx">
                                    <img src="{{ asset('assets/img/avatar') }}/` + arg.event._def.extendedProps
                        .avatar + `">
                                </span>

                                <div class="fx fx-fd-c fx-ai-fs gp1">
                                    <span class="_txtboldff14 text_tm1">` + arg.event._def.title + ` $` + arg.event
                        ._def.extendedProps.total_payout + `</span>
                                    <span class="_txt-white14 text_tm1">RE</span>
                                </div>
                            </div>
                        </button>
                    `
                } else if (arg.event.extendedProps.status == 3) {
                    italicEl.innerHTML = `
                        <button type="button" class="reservaIndividualSelect js__infoReservationTable green">
                            <div class="fx fx-fd-c gp5">
                                <span class="_pf-msg mr0 fx">
                                    <img src="{{ asset('assets/img/avatar') }}/` + arg.event._def.extendedProps
                        .avatar + `">
                                </span>

                                <div class="fx fx-fd-c fx-ai-fs gp1">
                                    <span class="_txtboldff14 text_tm1">` + arg.event._def.title + ` $` + arg.event
                        ._def.extendedProps.total_payout + `</span>
                                    <span class="_txt-white14 text_tm1">CH</span>
                                </div>
                            </div>
                        </button>
                    `
                } else if (arg.event.extendedProps.status == 4) {
                    italicEl.innerHTML = `
                        <button type="button" class="reservaIndividualSelect plomo">
                            <div class="fx fx-fd-c gp5">
                                <span class="_pf-msg mr0 fx">
                                    <img src="{{ asset('assets/img/avatar') }}/` + arg.event._def.extendedProps
                        .avatar + `">
                                </span>

                                <div class="fx fx-fd-c fx-ai-fs gp1">
                                    <span class="_txtboldff14 text_tm1">` + arg.event._def.title + ` $` + arg.event
                        ._def.extendedProps.total_payout + `</span>
                                    <span class="_txt-white14 text_tm1">RE</span>
                                </div>
                            </div>
                        </button>
                    `
                } else if (arg.event.extendedProps.status == 5) {
                    italicEl.innerHTML = `
                        <button type="button" class="reservaIndividualSelect plomo">
                            <div class="fx fx-fd-c gp5">
                                <span class="_pf-msg mr0 fx">
                                    <img src="{{ asset('assets/img/avatar') }}/` + arg.event._def.extendedProps
                        .avatar + `">
                                </span>

                                <div class="fx fx-fd-c fx-ai-fs gp1">
                                    <div class="fx fx-ai-c gp5">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
                                            <path d="M9.555,6.651a7.891,7.891,0,0,1,.618-3.072A8.622,8.622,0,1,0,20.586,13.992,7.957,7.957,0,0,1,9.555,6.651Z" transform="translate(-3.586 -3.579)" fill="#fff"></path>
                                        </svg>

                                        <span class="_txtboldff14 text_tm1">` + arg.event._def.extendedProps
                        .total_payout + `</span>
                                    </div>
                                    <span class="_txt-white14 text_tm1">RE</span>
                                </div>
                            </div>
                        </button>
                    `
                } else if (arg.event.extendedProps.status == 6) {
                    italicEl.innerHTML = `
                        <button type="button" class="reservaIndividualSelect red">
                            <div class="fx fx-fd-c gp5">
                                <span class="_pf-msg mr0 fx">
                                    <img src="{{ asset('assets/img/avatar') }}/` + arg.event._def.extendedProps
                        .avatar + `">
                                </span>

                                <div class="fx fx-fd-c fx-ai-fs gp1">
                                <span class="_txtboldff14 text_tm1">` + arg.event._def.title + ` $` + arg.event._def
                        .extendedProps.total_payout + `</span>
                                    <span class="_txt-white14 text_tm1">RE</span>
                                </div>
                            </div>
                        </button>
                    `
                }
                let arrayOfDomNodes = [italicEl]
                return {
                    domNodes: arrayOfDomNodes
                }
            },

            eventClick: function(info) {
                @this.showReservation(info.event._def.extendedProps.reservId);
            },
        });

        await calendar.render();

        eventPrice();
        show_modals();
        more_links();

        document.getElementsByClassName('reservaIndividualSelect')[0].addEventListener(
            'click',
            function() {});
            
        document.getElementById("updateDate").addEventListener("click", function() {
            setTimeout(() => {
                eventPrice();
            }, 500);
        });


        document.getElementsByClassName('_fpnigw0 click_add_private_note_cl')[0].addEventListener(
            'click',
            function() {
                document.getElementById('note_text').value = @this.date_config_note;
                document.getElementById('CreateOrUpdateNote').addEventListener('click', function() {
                    @this.note = document.getElementById('note_text').value;
                    @this.NoteConfig();
                    setTimeout(() => {
                        eventPrice();
                    }, 500);
                })
            });
        // 
        document.getElementById("checkbox").addEventListener("click", function() {
            @this.price = 0;
        });

        document.getElementsByClassName('fc-prev-button fc-button fc-button-primary')[0].addEventListener(
            'click',
            function() {
                @this.show_modal = 0;
                @this.show_modal_info = 0;
                show_modals();
                more_links();
                eventPrice();
            });

        document.getElementsByClassName('fc-next-button fc-button fc-button-primary')[0].addEventListener(
            'click',
            function() {
                @this.show_modal = 0;
                @this.show_modal_info = 0;
                show_modals();
                more_links();
                eventPrice();
            });

        document.getElementsByClassName('vvo-btn-select scale js_submenuNrml')[0].addEventListener(
            'click',
            function() {
                let selopt = document.getElementsByClassName('selection_value');
                Array.prototype.slice.call(selopt).forEach((e) => {
                    e.addEventListener('click', async function() {
                        await (@this.listing_id = e.value)
                        setTimeout(() => {
                            eventPriceReset();
                            calendar.setOption('events', @this.reservation);
                            eventPrice();
                        }, 500);
                    })
                })
            });

        [].forEach.call(document.querySelectorAll(".fc-daygrid-day.fc-day.fc-day-past"), function(el) {
            el.setAttribute('disabled', '');
        });
        // OCULTAR MODAL GENERAL
        [].forEach.call(document.querySelectorAll(".js_hideMdlReservationTable"), function(el) {
            el.addEventListener('click', function() {
                let hideMldInfo = document.querySelector(
                    ".section_calendar_admin .right_bk_show");
                hideMldInfo.classList.remove("active-info");
            });
        });
    })


    function eventPriceReset() {
        let divs = Array.prototype.slice.call(document.querySelectorAll('[role="row"]'));

        divs.forEach((element, index) => {
            if (index > 0) {
                Array.prototype.slice.call(element.children).forEach((data, key) => {
                    data.childNodes[0].childNodes[1].innerHTML = ``;
                })
            }
        })
    }

    function eventPrice() {
        let divs = [];
        divs = Array.prototype.slice.call(document.querySelectorAll('[role="row"]'));

        divs.forEach((element, index) => {
            if (index > 0) {
                Array.prototype.slice.call(element.children).forEach((data, key) => {
                    if (data.childNodes[0].childNodes[1].children[0].clientHeight == 2 || data.childNodes[0].childNodes[1].children[0].clientHeight == 110) {
                        if (@this.date_config.lenght != 0) {
                            if (@this.date_config[data.attributes[2].nodeValue]) {
                                data.childNodes[0].childNodes[1].innerHTML = `<div class="_badsdoller   js__infoReservationTable">
                 <div class="_bkgrsdoll">$` + @this.date_config[data.attributes[2].nodeValue].price + `</div>
                </div>`;
                            } else {
                                @this.listings.forEach((e, i) => {
                                    if (e.id == @this.listing_id) {
                                        data.childNodes[0].childNodes[1].innerHTML = `<div class="_badsdoller js__infoReservationTable">
                 <div class="_bkgrsdoll">$` + e.base_price + `</div>
                </div>`;
                                    }
                                })
                            }
                        }
                    }
                })
            }
        })
        // document.getElementsByClassName('fc-timeline-body')[0].setAttribute('style', 'width:' + (divs.length * 80))
        // [].slice.call(divs).forEach(function(div) {
        // });
    }

    function more_links() {
        [].forEach.call(document.querySelectorAll(".fc-timeline-more-link.fc-more-link"), function(el) {
            el.addEventListener('click', function() {
                show_modals();
            });
        });
    }

    function show_modals() {
        [].forEach.call(document.querySelectorAll(".js__infoReservationTable.green"), function(el) {
            el.addEventListener('click', function() {
                @this.show_modal = 1;
                @this.show_modal_info = 1;
            });
        });
        [].forEach.call(document.querySelectorAll(".red"), function(el) {
            el.addEventListener('click', function() {
                @this.show_modal = 0;
                @this.show_modal_info = 1;
            });
        });

        [].forEach.call(document.querySelectorAll(".plomo"), function(el) {
            el.addEventListener('click', function() {
                @this.show_modal = 0;
                @this.show_modal_info = 1;
            });
        });
    }
</script>
