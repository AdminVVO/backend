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
                                    <span class="_txtec16">{{ $findReservation['arriving'] ?? '' }}
                                        {{ $findReservation['guest'] ?? '' }} guests -
                                        {{ $findReservation['nights'] ?? '' }}
                                        nights</span>
                                </div>

                                <div class="block-pd-cl sw-pf">
                                    <div class="fx fx-ai-c gp21">
                                        <span class="_pf-msg mr0">
                                            <img src="{{ URL::asset('assets/img/avatar') }}/{{ $findReservation['avatar'] }}" loading="lazy" alt="">
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
                                        <div class="_txtec">{{$findReservation['note']}}</div>
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
                                        <p>{{Str::substr(print_r(str_replace("\n", "<br/>", $date_config_note)), 0, -1)}}</p>
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
<div class="container_admin-host container_popup_ntpve" >
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
                            <textarea class="_txta-modls" style="margin: 48px 0px 32px; resize: vertical; display: block;" rows="5" id="note_text">{{$date_config_note}}</textarea>
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
            resourceAreaWidth: 355,
            aspectRatio: 2,
            refetchResourcesOnNavigate: true,
            resourceAreaHeaderContent: {
                html: `
                <label for="ipt__search_list" class="search_content mrnone">
                                        <div class="input-wrapper icon_absolute">
                                            <input type="text" name="" id="ipt__search_list" placeholder="Search listings...">
                                        </div>
                                    </label> `
            },
            selectOverlap: function(event) {
                return event.rendering === 'background';
            },
            resourceLabelContent: function(arg) {
                return {
                    html:

                        `<div class="checkbox-item checkbox-item_img">
                                <label class="check_click">
                                    <input type="radio" name="listing">
                                    <div class="bg_check_click click-list-calendar">
                                        <div class="_cont-l-img">
                                            <div class="_ad-list_img">
                                                <img src="assets/img/card/c1.jpg">
                                            </div>
                                        </div>

                                        <div class="_f-t">
                                            <h3 class="_txteh _txtcapit text_tm1">` + arg.resource.title + `</h3>

                                            <p class="_txtec16 text_tm1"> ` + arg.resource.extendedProps
                        .internal_title + `</p>
                                        </div>
                                    </div>
                                </label>
                            </div>`

                    // `<div style=""><img src="{{ URL::asset('assets/img/anality.jpg') }}" alt=""></div>`
                };
            },

            initialView: 'resourceTimelineMonth',
            eventMaxStack: 3,
            eventOrder: 'created_at',
            eventOrderStrict: true,
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
            select: function(info) {
                @this.listing_id = info.resource._resource.id
                @this.show_modal = 1;
                @this.show_modal_info = 0;
                var start = new Date(info.startStr);
                var end = new Date(info.endStr);

                // alert('selected ' + info.startStr + ' to ' + info.endStr + ' on resource ' + info
                //     .resource.id);
                if (start.getDate() + 1 == (end.getDate())) {
                    @this.date_init = info.startStr
                    @this.date_end = ''
                } else {
                    end.setDate(end.getDate() - 1)
                    @this.date_init = info.startStr
                    @this.date_end = end.toISOString().split('T')[0]
                    // @this.date_end = end.getFullYear()+'-'+ (end.getMonth()<10 ? ('0'+end.getMonth()): end.getMonth()) +'-' + (end.getDate()<10 ?('0'+end.getDate()): end.getDate())
                }

                @this.showDate(info.startStr, info.resource._resource.id)
            },
            eventContent: function(arg) {
                let italicEl = document.createElement('div')
                if (arg.event.extendedProps.status && arg.event.extendedProps.status == 0) {
                    italicEl.innerHTML = `
                        <button type="button" class="reservationTripCalendar js__infoReservationTable green">
                            <div class="fx fx-ai-c fx-jc-sb nfooo">
                                <span class="_txtboldff14 text_tm1">` + arg.event._def.title + ` $` + arg.event._def
                        .extendedProps.total_payout + ` 3HBT</span>
                                <span class="_txtboldff14">C</span>
                            </div>
                        </button>`
                } else if (arg.event.extendedProps.status == 1) {
                    italicEl.innerHTML = `
                    <button type="button" class="reservationTripCalendar js__infoReservationTable green">
                            <div class="fx fx-ai-c fx-jc-sb nfooo">
                                <span class="_txtboldff14 text_tm1">` + arg.event._def.title + ` $` + arg.event._def
                        .extendedProps.total_payout + ` 3HBT</span>
                                <span class="_txtboldff14">AT</span>
                            </div>
                        </button>`
                } else if (arg.event.extendedProps.status == 2) {
                    italicEl.innerHTML = `
                    <button type="button" class="reservationTripCalendar plomo">
                            <div class="fx fx-ai-c fx-jc-sb nfooo">
                                    <span class="_txtboldff14 text_tm1">` + arg.event._def.title + ` $` + arg.event._def
                        .extendedProps.total_payout + ` 3HBT</span>
                                <span class="_txtboldff14">TR</span>
                            </div>
                        </button>`
                } else if (arg.event.extendedProps.status == 3) {
                    italicEl.innerHTML = `
                    <button type="button" class="reservationTripCalendar js__infoReservationTable green">
                            <div class="fx fx-ai-c fx-jc-sb nfooo">
                                <span class="_txtboldff14 text_tm1">` + arg.event._def.title + ` $` + arg.event._def
                        .extendedProps.total_payout + ` 3HBT</span>
                                <span class="_txtboldff14">CH</span>
                            </div>
                        </button>`
                } else if (arg.event.extendedProps.status == 4) {
                    italicEl.innerHTML = `
                    <button type="button" class="reservationTripCalendar plomo">
                            <div class="fx fx-ai-c fx-jc-sb nfooo">

                                <span class="_txtboldff14 text_tm1">` + arg.event._def.title + ` $` + arg.event._def
                        .extendedProps.total_payout + `</span>
                                <span class="_txtboldff14">RG</span>
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
                                <span class="_txtboldff14 text_tm1">` + arg.event._def.extendedProps.total_payout + `</span>
                                </div>
                                <span class="_txtboldff14">PG</span>
                            </div>
                        </button>`
                } else if (arg.event.extendedProps.status == 6) {
                    italicEl.innerHTML = `
                    <button type="button" class="reservationTripCalendar red">
                            <div class="fx fx-ai-c fx-jc-sb nfooo">
                                <span class="_txtboldff14 text_tm1">` + arg.event._def.title + ` $` + arg.event._def
                        .extendedProps.total_payout + `</span>
                                <span class="_txtboldff14">BP</span>
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

        document.getElementById("ipt__search_list").addEventListener("keyup", async function(event) {
            if (event.keyCode === 13) {
                var con = document.getElementById("ipt__search_list");
                await @this.searchListing(con.value);
                await calendar.setOption('resources', @this.listings);
                await calendar.setOption('events', @this.reservation);
                await eventPrice();
                await show_modals();
                await more_links();
            }
        });

        document.getElementById("updateDate").addEventListener("click", function() {
            setTimeout(() => {
                eventPrice();
            }, 1000);
        });

        document.getElementsByClassName('_fpnigw0 click_add_private_note_cl')[0].addEventListener(
            'click',
            function() {
                document.getElementById('note_text').value = @this.date_config_note; 
                document.getElementById('CreateOrUpdateNote').addEventListener('click', function(){
                    @this.note = document.getElementById('note_text').value;
                    @this.NoteConfig();
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

        // MOSTRAR MODAL GENERAL
    })

    function eventPrice() {
        var divs = document.getElementsByClassName(
            'fc-timeline-slot fc-timeline-slot-lane fc-day');
        document.getElementsByClassName('fc-timeline-body')[0].setAttribute('style', 'width:' + (divs.length * 80))
        return [].slice.call(divs).forEach(function(div) {
            div.innerHTML = '';
            @this.listings.forEach((element, index) => {
                if (@this.date_config[element.id]) {
                    if (@this.date_config[element.id][div.getAttribute('data-date')]) {



                        if (@this.date_config[element.id][div.getAttribute('data-date')]
                            .is_active ==
                            true) {

                            div.innerHTML += `<div class="_badsdoller js__infoReservationTable">
         <div class="fx fx-fd-c fx-ai-c gp3">
             <div class="_txtbold7d14">` +
                                @this.date_config[element.id][div.getAttribute('data-date')]
                                .price +
                                `$</div>
            <svg id="Grupo_33711" data-name="Grupo 33711" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21.463" height="21.038" viewBox="0 0 21.463 21.038">
                <defs>
                    <clipPath id="clip-path">
                    <rect id="Rectángulo_3628" data-name="Rectángulo 3628" width="21.463" height="21.038" fill="#e3edf3"/>
                    </clipPath>
                </defs>
                <g id="Grupo_33710" data-name="Grupo 33710" clip-path="url(#clip-path)">
                    <path id="Trazado_205" data-name="Trazado 205" d="M126.2,4.1a.84.84,0,0,1-.874.548c-.208,0-.415,0-.644,0v.284q0,7.4,0,14.794a1.18,1.18,0,0,1-.852,1.244,1.748,1.748,0,0,1-.434.057c-.356.008-.713-.009-1.068,0a1.251,1.251,0,0,1-1.347-1.334c.016-4.91.008-9.82.008-14.731V4.653c-.186,0-.352,0-.516,0a2.1,2.1,0,0,1-.415-.037.666.666,0,0,1-.418-1.108c.269-.374.562-.73.845-1.094q.76-.975,1.52-1.949a.978.978,0,0,1,1.661,0q1.161,1.472,2.3,2.958a3.459,3.459,0,0,1,.23.393Z" transform="translate(-104.733 0)" fill="#e3edf3"/>
                    <path id="Trazado_206" data-name="Trazado 206" d="M87.551,62.994c0-1.9.018-3.8-.008-5.7A1.267,1.267,0,0,1,88.9,55.942c.369.024.74,0,1.11.005a1.214,1.214,0,0,1,1.234,1.215c0,.042,0,.084,0,.126q0,5.72,0,11.441a1.292,1.292,0,0,1-.448,1.06,1.238,1.238,0,0,1-.814.283q-.555,0-1.11,0a1.221,1.221,0,0,1-1.322-1.316q0-2.881,0-5.762" transform="translate(-76.746 -49.04)" fill="#e3edf3"/>
                    <path id="Trazado_207" data-name="Trazado 207" d="M44.176,87.62q0-2.063,0-4.127a1.213,1.213,0,0,1,1.306-1.306c.391,0,.782,0,1.173,0A1.2,1.2,0,0,1,47.865,83.4q.006,4.232,0,8.463a1.2,1.2,0,0,1-1.19,1.213c-.432.015-.866.014-1.3,0a1.207,1.207,0,0,1-1.2-1.247c0-1.4,0-2.807,0-4.211" transform="translate(-38.727 -72.05)" fill="#e3edf3"/>
                    <path id="Trazado_208" data-name="Trazado 208" d="M3.691,109.368c0,.88,0,1.76,0,2.64a1.31,1.31,0,0,1-1.363,1.378c-.328,0-.657.006-.985,0A1.309,1.309,0,0,1,0,112.028q0-2.661,0-5.322a1.307,1.307,0,0,1,1.343-1.355q.5,0,1.006,0a1.3,1.3,0,0,1,1.34,1.336c0,.894,0,1.788,0,2.682" transform="translate(0 -92.355)" fill="#e3edf3"/>
                </g>
            </svg>
         </div>
    </div>`;
                        } else {
                            div.innerHTML += `<div class="contNotLine js__infoReservationTable">
                                    <div class="transf">
                                        <div class="not-linetb"></div>
                                    </div>
                                </div>`;
                        }
                    } else {
                        div.innerHTML += `<div class="_badsdoller js__infoReservationTable">
         <div class="fx fx-fd-c fx-ai-c gp3">
             <div class="_txtbold7d14">` + element
                            .base_price +
                            `$</div>
            <svg id="Grupo_33711" data-name="Grupo 33711" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21.463" height="21.038" viewBox="0 0 21.463 21.038">
                <defs>
                    <clipPath id="clip-path">
                    <rect id="Rectángulo_3628" data-name="Rectángulo 3628" width="21.463" height="21.038" fill="#e3edf3"/>
                    </clipPath>
                </defs>
                <g id="Grupo_33710" data-name="Grupo 33710" clip-path="url(#clip-path)">
                    <path id="Trazado_205" data-name="Trazado 205" d="M126.2,4.1a.84.84,0,0,1-.874.548c-.208,0-.415,0-.644,0v.284q0,7.4,0,14.794a1.18,1.18,0,0,1-.852,1.244,1.748,1.748,0,0,1-.434.057c-.356.008-.713-.009-1.068,0a1.251,1.251,0,0,1-1.347-1.334c.016-4.91.008-9.82.008-14.731V4.653c-.186,0-.352,0-.516,0a2.1,2.1,0,0,1-.415-.037.666.666,0,0,1-.418-1.108c.269-.374.562-.73.845-1.094q.76-.975,1.52-1.949a.978.978,0,0,1,1.661,0q1.161,1.472,2.3,2.958a3.459,3.459,0,0,1,.23.393Z" transform="translate(-104.733 0)" fill="#e3edf3"/>
                    <path id="Trazado_206" data-name="Trazado 206" d="M87.551,62.994c0-1.9.018-3.8-.008-5.7A1.267,1.267,0,0,1,88.9,55.942c.369.024.74,0,1.11.005a1.214,1.214,0,0,1,1.234,1.215c0,.042,0,.084,0,.126q0,5.72,0,11.441a1.292,1.292,0,0,1-.448,1.06,1.238,1.238,0,0,1-.814.283q-.555,0-1.11,0a1.221,1.221,0,0,1-1.322-1.316q0-2.881,0-5.762" transform="translate(-76.746 -49.04)" fill="#e3edf3"/>
                    <path id="Trazado_207" data-name="Trazado 207" d="M44.176,87.62q0-2.063,0-4.127a1.213,1.213,0,0,1,1.306-1.306c.391,0,.782,0,1.173,0A1.2,1.2,0,0,1,47.865,83.4q.006,4.232,0,8.463a1.2,1.2,0,0,1-1.19,1.213c-.432.015-.866.014-1.3,0a1.207,1.207,0,0,1-1.2-1.247c0-1.4,0-2.807,0-4.211" transform="translate(-38.727 -72.05)" fill="#e3edf3"/>
                    <path id="Trazado_208" data-name="Trazado 208" d="M3.691,109.368c0,.88,0,1.76,0,2.64a1.31,1.31,0,0,1-1.363,1.378c-.328,0-.657.006-.985,0A1.309,1.309,0,0,1,0,112.028q0-2.661,0-5.322a1.307,1.307,0,0,1,1.343-1.355q.5,0,1.006,0a1.3,1.3,0,0,1,1.34,1.336c0,.894,0,1.788,0,2.682" transform="translate(0 -92.355)" fill="#e3edf3"/>
                </g>
            </svg>
         </div>
    </div>`;
                    }
                } else {
                    div.innerHTML += `<div class="_badsdoller js__infoReservationTable">
         <div class="fx fx-fd-c fx-ai-c gp3">
             <div class="_txtbold7d14">` + element
                        .base_price +
                        `$</div>
            <svg id="Grupo_33711" data-name="Grupo 33711" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21.463" height="21.038" viewBox="0 0 21.463 21.038">
                <defs>
                    <clipPath id="clip-path">
                    <rect id="Rectángulo_3628" data-name="Rectángulo 3628" width="21.463" height="21.038" fill="#e3edf3"/>
                    </clipPath>
                </defs>
                <g id="Grupo_33710" data-name="Grupo 33710" clip-path="url(#clip-path)">
                    <path id="Trazado_205" data-name="Trazado 205" d="M126.2,4.1a.84.84,0,0,1-.874.548c-.208,0-.415,0-.644,0v.284q0,7.4,0,14.794a1.18,1.18,0,0,1-.852,1.244,1.748,1.748,0,0,1-.434.057c-.356.008-.713-.009-1.068,0a1.251,1.251,0,0,1-1.347-1.334c.016-4.91.008-9.82.008-14.731V4.653c-.186,0-.352,0-.516,0a2.1,2.1,0,0,1-.415-.037.666.666,0,0,1-.418-1.108c.269-.374.562-.73.845-1.094q.76-.975,1.52-1.949a.978.978,0,0,1,1.661,0q1.161,1.472,2.3,2.958a3.459,3.459,0,0,1,.23.393Z" transform="translate(-104.733 0)" fill="#e3edf3"/>
                    <path id="Trazado_206" data-name="Trazado 206" d="M87.551,62.994c0-1.9.018-3.8-.008-5.7A1.267,1.267,0,0,1,88.9,55.942c.369.024.74,0,1.11.005a1.214,1.214,0,0,1,1.234,1.215c0,.042,0,.084,0,.126q0,5.72,0,11.441a1.292,1.292,0,0,1-.448,1.06,1.238,1.238,0,0,1-.814.283q-.555,0-1.11,0a1.221,1.221,0,0,1-1.322-1.316q0-2.881,0-5.762" transform="translate(-76.746 -49.04)" fill="#e3edf3"/>
                    <path id="Trazado_207" data-name="Trazado 207" d="M44.176,87.62q0-2.063,0-4.127a1.213,1.213,0,0,1,1.306-1.306c.391,0,.782,0,1.173,0A1.2,1.2,0,0,1,47.865,83.4q.006,4.232,0,8.463a1.2,1.2,0,0,1-1.19,1.213c-.432.015-.866.014-1.3,0a1.207,1.207,0,0,1-1.2-1.247c0-1.4,0-2.807,0-4.211" transform="translate(-38.727 -72.05)" fill="#e3edf3"/>
                    <path id="Trazado_208" data-name="Trazado 208" d="M3.691,109.368c0,.88,0,1.76,0,2.64a1.31,1.31,0,0,1-1.363,1.378c-.328,0-.657.006-.985,0A1.309,1.309,0,0,1,0,112.028q0-2.661,0-5.322a1.307,1.307,0,0,1,1.343-1.355q.5,0,1.006,0a1.3,1.3,0,0,1,1.34,1.336c0,.894,0,1.788,0,2.682" transform="translate(0 -92.355)" fill="#e3edf3"/>
                </g>
            </svg>
         </div>
    </div>`;
                }
            })
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

<style>
    html,
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
        font-size: 14px;
    }

    .fc-datagrid-cell-frame :not(:first-child) {
        min-height: 120px;
    }

    .fc-event {
        height: 37px !important;

    }

    .fc-day:first-child>div:first-child {
        position: relative;
    }

    .fc-day:first-child>div:first-child .fc-day-number {
        position: absolute;
        top: 50%;
        left: 0px;
        right: 0px;
        text-align: center;
        margin-top: -.5em;
        line-height: 1em;
    }

    #calendar {
        margin-top: 110px !important;
        max-width: 1100px;
        margin: 40px auto;
    }
</style>
