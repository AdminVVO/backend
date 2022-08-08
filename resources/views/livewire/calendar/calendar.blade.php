<div>
    <div id="calendar" wire:ignore>
    </div>
    {{-- ****************************************************************************************** --}}
    <div class="right_bk_show fx fx-fd-c">
        <div style="padding-top: 28px; display: inline-flex; line-height: 0; margin-bottom: 9.5px;">
            <button type="button" class="_fright-tb click_icon_calendar_tb">
                <svg xmlns="http://www.w3.org/2000/svg" width="11.736" height="20.522" viewBox="0 0 11.736 20.522">
                    <path
                        d="M10.265,3.538l7.76,7.768a1.46,1.46,0,0,0,2.071,0,1.479,1.479,0,0,0,0-2.078L11.3.427A1.464,1.464,0,0,0,9.281.385L.428,9.222A1.467,1.467,0,0,0,2.5,11.3Z"
                        transform="translate(0 20.522) rotate(-90)" fill="#333" />
                </svg>
            </button>
        </div>
        <div class="ow-a scroll_n">
            <div class="show-inf-details-calendar">
                <div class="block-pd-cl rs">
                    <h2 class="h2_publish mr-b1">Reservation</h2>
                    <span class="_txtec16">{{ $findReservation['arriving'] ?? '' }} -
                        {{ $findReservation['guest'] ?? '' }} guests - {{ $findReservation['nights'] ?? '' }}
                        nights</span>
                </div>

                <div class="block-pd-cl sw-pf">
                    <div class="fx fx-ai-c gp21">
                        <span class="_pf-msg mr0">
                        </span>
                        <div class="fx fx-fd-c gp5">
                            <h2 class="h2-guests _txtcapit">{{ $findReservation['name'] ?? '' }}</h2>
                            @if ($findReservation)
                                <a href="{{ route('profile', ['id' => $findReservation['user_id']]) }}"
                                    class="_txtblu16">Show profile - Message</a>
                            @else
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

                                <div class="_txtec _txtcapit">{{ $findReservation['checkin'] ?? '' }}</div>
                            </div>
                        </div>

                        <div class="bk-icon-des_fbas fx-ai-b gp10 mnw-p48">
                            <div class="txt-center w21">
                                <i class="far fa-calendar-alt _i-red22"></i>
                            </div>

                            <div class="fx fx-fd-c gp1">
                                <div class="_txteh">Check out</div>

                                <div class="_txtec _txtcapit">{{ $findReservation['checkout'] ?? '' }}</div>
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

                    <div class="mr-t19 fx fx-fd-c fx-ai-c">
                        <a href="calendar-view-full-itinerary.php" class="btn-celest">View full itinerary</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ********************************************************************************** --}}

    <div class="fx fx-fd-c wh-p100 ht-p100 showInfoSlectDays ">
        <div class="ow-a ht-p100 scroll_n">
            <div class="_10toigd">
                <button class="_ij90qc click-hide-inf-indv">
                    <span class="pn-r fx">
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-label="close" role="img"
                            focusable="false"
                            style="height: 16px; width: 16px; stroke: currentcolor; stroke-width: 4; overflow: visible;">
                            <path d="m6 6 20 20"></path>
                            <path d="m26 6-20 20"></path>
                        </svg>
                    </span>
                </button>
            </div>

            <div class="pd50 hr">
                @if (!$date_end)
                    <div class="h2_publish mr-b76">{{ $date_init }}</div>
                @elseif($date_end)
                    <div class="h2_publish mr-b76">{{ $date_init }} to {{ $date_end }}</div>
                @else
                    <div class="h2_publish mr-b76"></div>
                @endif
                <div class="fx fx-ai-c fx-fw-w fx-jc-sb gp18">
                    <span class="_txteh">Available</span>
                    <input type="checkbox" id="checkbox" class="checkbox_custom check_i" wire:model.lazy="available">
                </div>
            </div>

            <div class="pd23 hr">
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

            <div class="pd23">
                <div class="fx fx-ai-c fx-jc-sb">
                    <div class="_txteh">Private Note</div>
                    <button type="button" class="_fpnigw0 click_add_private_note_cl">
                        <div class="fx fx-ai-b gp5">
                            <span>Add</span>
                            <img src="assets/img/icons/down-right.svg" alt="">
                        </div>
                    </button>
                </div>
            </div>
        </div>
        <div class="_kr7m4r pd23">
            <div class="fx fx-fw-w fx-ai-c fx-jc-sb gp12">
                <button type="button" class="_fpnigw0 click-hide-inf-indv">Cancel</button>
                <button class="btn-celest btns-modals" wire:click="DateConfig()" id="updateDate">Save<div
                        class="loading-btn"></div>
                </button>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', async function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            timeZone: 'UTC',

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

                        `
                                            
                    <div class="checkbox-item checkbox-item_img">
                                                            <label class="check_click">                    <div class="bg_check_click click-list-calendar">
                    <div >
                                                                        <div class="_ad-list_img">
                                                                            <img src="{{ URL::asset('assets/img/anality.jpg') }}">
                                                                        </div>
                                                                    </div>
                    <div class="_f-t">
                        <h3 class="_txteh _txtcapit text_tm1">` + arg.resource.title + `</h3>
                        <p class="_txtec16 text_tm1">` + arg.resource.extendedProps.internal_title + `</p>
                    </div>
                                                                </div>
                                                                
                                                            </label>
                                                        </div>`

                    // `<div style=""><img src="{{ URL::asset('assets/img/anality.jpg') }}" alt=""></div>`
                };
            },

            initialView: 'resourceTimelineMonth',
            eventMaxStack: 3,
            eventOrder: 'title',
            eventOrderStrict: true,
            events: @this.reservation,
            resources: @this.listings,

            validRange: function(nowDate) {
                return {
                    start: nowDate
                };
            },
            eventResourceEditable: false,
            slotEventOverlap: false,
            selectable: true,
            select: function(info) {
                @this.listing_id = info.resource._resource.id
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
            },

            eventClick: function(info) {
                @this.showReservation(info.event._def.extendedProps.reservId);
            },
        });

        await calendar.render();
        eventPrice();

        document.getElementById("ipt__search_list").addEventListener("keyup", async function(event) {
            if (event.keyCode === 13) {
                var con = document.getElementById("ipt__search_list");
                await @this.searchListing(con.value);
                await calendar.setOption('resources', @this.listings);
                await calendar.setOption('events', @this.reservation);
                await eventPrice();
            }
        });

        document.getElementById("updateDate").addEventListener("click", function() {
            setTimeout(() => {
                eventPrice();
            }, 1000);
        });

        document.getElementById("checkbox").addEventListener("click", function() {
            @this.price = 0;
        });

    });

    function eventPrice() {
        var divs = document.getElementsByClassName(
            'fc-timeline-slot fc-timeline-slot-lane fc-day');
        return [].slice.call(divs).forEach(function(div) {
            div.innerHTML = '';
            @this.listings.forEach((element) => {
                if (@this.date_config[div.getAttribute('data-date')] &&
                    @this.date_config[div.getAttribute('data-date')]
                    .listing_id == element.id) {
                    if (@this.date_config[div.getAttribute('data-date')]
                        .is_active == true) {

                        div.innerHTML += `<div class="_badsdoller">
                                 <div class="fx fx-fd-c fx-ai-c gp3">
                                     <div class="_txtbold7d14">` + 
                            @this.date_config[div.getAttribute('data-date')].price 
                            + `$</div>
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
                        div.innerHTML +=
                            `<div class="not-linetb"></div>`;
                    }
                } else {
                    div.innerHTML += `<i aria-hidden="true">` + element
                        .base_price + element.listing_currency +
                        `</i><div class="click_info_calendar_tb" style="margin-bottom:140px"></div>`;
                }
            })
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

    #calendar table {
        table-layout: fixed;
    }

    .fc-datagrid-cell-frame :not(:first-child) {
        min-height: 120px;
    }

    .fc-event {
        height: 30px !important;
    }

    #calendar {
        max-width: 1100px;
        margin: 40px auto;
    }

    .fc-daygrid-day-number {
        outline: 1px solid red;
    }
</style>
