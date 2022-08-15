<div class="entero section_calendar_admin">
    <div class="container-medio">
        <div class="contCalendarVvoFlex">
            <div id="calendar" wire:ignore></div>
            {{-- **************************** --}}
            @if ($show_modal == 1)
                <div class="rgtContMrCal right_bk_show active-info">
                @else
                    <div class="rgtContMrCal right_bk_show">
            @endif
            <div class="fx fx-fd-c ht-p100 borderCont">
                <div class="ifx pd-t28 mr-l16 mr-b9">
                    <button type="button" class="_fright-tb js_hideMdlReservationTable iconFlecha">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11.736" height="20.522"
                            viewBox="0 0 11.736 20.522">
                            <path
                                d="M10.265,3.538l7.76,7.768a1.46,1.46,0,0,0,2.071,0,1.479,1.479,0,0,0,0-2.078L11.3.427A1.464,1.464,0,0,0,9.281.385L.428,9.222A1.467,1.467,0,0,0,2.5,11.3Z"
                                transform="translate(0 20.522) rotate(-90)" fill="#333" />
                        </svg>
                    </button>
                </div>

                <div class="ow-a ht-p100 fx fx-fd-c">
                    {{-- *********************************RESERVACIONES****************************** --}}
                    @if ($show_modal_info == 1)
                        <div class="show-inf-details-calendar">

                            <div class="ht-p100 ow-a">
                                <div class="block-pd-cl rs">
                                    <h2 class="h2_publish mr-b1">Reservation</h2>
                                    <span class="_txtec16">{{ $findReservation['arriving'] ?? '' }} -
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

                                                <div class="_txtec">${{ $findReservation['total_payout'] ?? '' }}</div>
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
                                    <button type="button" class="_fpnigw0 js_hideMdlReservationTable">Cancel</button>
                                    <button class="btn-celest" wire:click="DateConfig()" id="updateDate">Save
                                </div>
                                </button>
                            </div>
                        </div>
                        {{-- *********************************FIN RESERVACIONES****************************** --}}
                        {{-- *********************************FECHA****************************** --}}
                    @else
                        <div class="show-inf-details-calendar">
                            <div class="ht-p100 ow-a">
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

                                                <img src="assets/img/icons/down-right.svg" alt="">
                                            </div>
                                        </button>
                                    </div>
                                    <div>
                                        <p>{{ Str::substr(print_r(str_replace("\n", '<br/>', $date_config_note)), 0, -1) }}
                                        </p>
                                    </div>
                                </div>
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
                    <button class="btn-celest" wire:click="DateConfig()" id="CreateOrUpdateNote">Save</button>
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
            resourceAreaWidth: 355,
            aspectRatio: 2,
            refetchResourcesOnNavigate: true,


            initialView: "dayGridMonth",
            dayMaxEvents: 3, // allow "more" link when too many events
            editable: false,
            navLinks: true,

            eventOrder: 'created_at',
            eventOrderStrict: false,
            events: @this.reservation,
            resourceOrder: 'created_at',
            resources: @this.listings,

            validRange: function(nowDate) {
                return {
                    start: nowDate
                };
            },
            eventResourceEditable: false,
            selectable: true,
            slotWidth: 500,

            //**************************************//

            select: function(info) {
                console.log(info)
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
                }
            },
            eventContent: function(arg) {
                arg.event._def.ui.startEditable = false;
                let italicEl = document.createElement('div')
                if (arg.event.extendedProps.status && arg.event.extendedProps.status == 0) {
                    italicEl.innerHTML = `
                        <button type="button" class="reservationTripCalendar js__infoReservationTable green">
                            <div class="fx fx-ai-c fx-jc-sb nfooo">
                                <span class="_txtboldff14 text_tm1">` + arg.event._def.title + `$` + arg.event._def
                        .extendedProps.total_payout + `</span>
                                <span class="_txtboldff14">TR</span>
                            </div>
                        </button>`
                } else if (arg.event.extendedProps.status == 1) {
                    italicEl.innerHTML = `
                    <button type="button" class="reservationTripCalendar js__infoReservationTable green">
                            <div class="fx fx-ai-c fx-jc-sb nfooo">
                                <span class="_txtboldff14 text_tm1">` + arg.event._def.title + `$` + arg.event._def
                        .extendedProps.total_payout + `</span>
                                <span class="_txtboldff14">TR</span>
                            </div>
                        </button>`
                } else if (arg.event.extendedProps.status == 2) {
                    italicEl.innerHTML = `
                    <button type="button" class="reservationTripCalendar plomo">
                            <div class="fx fx-ai-c fx-jc-sb nfooo">
                                    <span class="_txtboldff14 text_tm1">` + arg.event._def.title + `$` + arg.event._def
                        .extendedProps.total_payout + `</span>
                                <span class="_txtboldff14">TR</span>
                            </div>
                        </button>`
                } else if (arg.event.extendedProps.status == 3) {
                    italicEl.innerHTML = `
                    <button type="button" class="reservationTripCalendar js__infoReservationTable green">
                            <div class="fx fx-ai-c fx-jc-sb nfooo">
                                <span class="_txtboldff14 text_tm1">` + arg.event._def.title + `$` + arg.event._def
                        .extendedProps.total_payout + `</span>
                                <span class="_txtboldff14">TR</span>
                            </div>
                        </button>`
                } else if (arg.event.extendedProps.status == 4) {
                    italicEl.innerHTML = `
                    <button type="button" class="reservationTripCalendar plomo">
                            <div class="fx fx-ai-c fx-jc-sb nfooo">

                                <span class="_txtboldff14 text_tm1">` + arg.event._def.title + `$` + arg.event._def
                        .extendedProps.total_payout + `</span>
                                <span class="_txtboldff14">TR</span>
                            </div>
                        </button>`
                } else if (arg.event.extendedProps.status == 5) {
                    italicEl.innerHTML = `
                    <button type="button" class="reservationTripCalendar plomo">
                            <div class="fx fx-ai-c fx-jc-sb nfooo">
                                <div class="fx fx-ai-c gp5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17">
                                    <path d="M9.555,6.651a7.891,7.891,0,0,1,.618-3.072A8.622,8.622,0,1,0,20.586,13.992,7.957,7.957,0,0,1,9.555,6.651Z" transform="translate(-3.586 -3.579)" fill="#fff"></path>
                                </svg>
                                <span class="_txtboldff14 text_tm1">` + arg.event._def
                        .extendedProps.total_payout + `</span>
                                </div>
                                <span class="_txtboldff14">TR</span>
                            </div>
                        </button>`
                } else if (arg.event.extendedProps.status == 6) {
                    italicEl.innerHTML = `
                    <button type="button" class="reservationTripCalendar red">
                            <div class="fx fx-ai-c fx-jc-sb nfooo">
                                <span class="_txtboldff14 text_tm1">` + arg.event._def.title + `$` + arg.event._def
                        .extendedProps.total_payout + `</span>
                                <span class="_txtboldff14">TR</span>
                            </div>
                        </button>`
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

        document.getElementsByClassName('reservationTripCalendar')[0].addEventListener(
            'click',
            function() {});
        document.getElementById("updateDate").addEventListener("click", function() {
            setTimeout(() => {
                eventPrice();
            }, 1000);
        });


        document.getElementsByClassName('_fpnigw0 click_add_private_note_cl')[0].addEventListener(
            'click',
            function() {
                document.getElementById('note_text').value = @this.date_config_note;
                document.getElementById('CreateOrUpdateNote').addEventListener('click', function() {
                    @this.note = document.getElementById('note_text').value;
                    @this.DateConfig();
                    setTimeout(() => {
                        eventPrice();
                    }, 1000);
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


        // OCULTAR MODAL GENERAL
        [].forEach.call(document.querySelectorAll(".js_hideMdlReservationTable"), function(el) {
            el.addEventListener('click', function() {
                let hideMldInfo = document.querySelector(
                    ".section_calendar_admin .right_bk_show");
                hideMldInfo.classList.remove("active-info");
            });
        });
    })

    function eventPrice() {
        var divs = document.getElementsByClassName('fc-daygrid-day-events');
        // document.getElementsByClassName('fc-timeline-body')[0].setAttribute('style', 'width:' + (divs.length * 80))
        return [].slice.call(divs).forEach(function(div) {
            if (div.lastChild.offsetTop == 0) {
                div.innerHTML = `<div class="_badsdoller js__infoReservationTable">
         <div class="fx fx-fd-c fx-ai-c gp3">
             <div class="_txtbold7d14">$80</div>
            
         </div>
    </div>`;


            } else {
                div.style.disabled = true;
            }
        });
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
