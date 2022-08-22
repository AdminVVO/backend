<div class="content-user-ics">
    <div class="h2-guests skeleton skeleton_txt">Things to know</div>

    <div class="content-user-ics-rules mr-t24">
        <div class="_fw nrml">
            <span class="_txtblu skeleton skeleton_txt">House rules</span>
            @if ( count( $content['checkin_window_start'] ) != 0 )
                <div class="s-usr_icons skeleton skeleton_txt">
                    <div class="_suis">
                        <img src="{{ URL::asset('assets/img/icons/reloj.svg') }}" alt="">
                    </div>
                    <div class="_suisinfo">
                        @if ( count( $content['checkin_window_end'] ) != 0 )
                            <div class="_txtec">Check-in:  {{ $content['checkin_window_start']['time'] .' '. $content['checkin_window_start']['type'] }} - {{ $content['checkin_window_end']['time'] .' '. $content['checkin_window_end']['type'] }} </div>
                        @else
                            <div class="_txtec">Check-in:  {{ $content['checkin_window_start']['time'] .' '. $content['checkin_window_start']['type'] }} </div>
                        @endif
                    </div>
                </div>
            @endif

            @if ( count( $content['checkout_time'] ) != 0 )
                <div class="s-usr_icons skeleton skeleton_txt">
                    <div class="_suis">
                        <img src="{{ URL::asset('assets/img/icons/reloj.svg') }}" alt="">
                    </div>
                    <div class="_suisinfo">
                        <div class="_txtec">Checkout: {{ $content['checkout_time']['time'] .' '. $content['checkout_time']['type'] }}</div>
                    </div>
                </div>
            @endif

            <div class="s-usr_icons skeleton skeleton_txt">
                <div class="_suis">
                    <img src="{{ URL::asset('assets/img/icons/pets.svg') }}" alt="">
                </div>
                <div class="_suisinfo">
                    @if ( $content['pets_allowed'] )
                        <div class="_txtec">Pets Allowed</div>
                    @else
                        <div class="_txtec">No Pets Allowed</div>
                    @endif
                </div>
            </div>

            <div class="s-usr_icons skeleton skeleton_txt">
                <div class="_suis">
                    <img src="{{ URL::asset('assets/img/icons/pets.svg') }}" alt="">
                </div>
                <div class="_suisinfo">
                    @if ( $content['smoking_allowed'] )
                        <div class="_txtec">Smoking is allowed</div>
                    @else
                        <div class="_txtec">It is not allowed to smoke</div>
                    @endif
                </div>
            </div>

            <div class="s-usr_icons skeleton skeleton_txt">
                <div class="_suis">
                    <img src="{{ URL::asset('assets/img/icons/pets.svg') }}" alt="">
                </div>
                <div class="_suisinfo">
                    @if ( $content['events_allowed'] )
                        <div class="_txtec">Events are Allowed.</div>
                    @else
                        <div class="_txtec">No Events Allowed.</div>
                    @endif
                </div>
            </div>

            @if ( $content['additional_rules'] != null )
                <button type="button" class="txtunder__ics mr-t16 herls skeleton">
                    <div class="fx fx-ai-b gp5">
                        <span class="">Show more</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                            <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#333"></path>
                        </svg>
                    </div>
                </button>
            @endif
        </div>

        <div class="_fw nrml">
            <span class="_txtblu skeleton skeleton_txt" style="margin-bottom: 16px;">Health & safety</span>
            <div class="s-usr_icons skeleton skeleton_txt">
                <div class="_suis">
                    <img src="{{ URL::asset('assets/img/icons/enhanced-black.svg') }}" alt="">
                </div>
                <div class="_suisinfo">
                    <div class="_txtec">Committed to Vvoutlet enhanced cleaning process.</div>
                </div>
            </div>

            <div class="s-usr_icons skeleton skeleton_txt">
                <div class="_suis">
                    <img src="{{ URL::asset('assets/img/icons/covid.svg') }}" alt="">
                </div>
                <div class="_suisinfo">
                    <div class="_txtec">Vvoutlet security practices related to COVID-19 apply</div>
                </div>
            </div>

            @foreach ( $content['legal'] as $element )
                @if ( $loop->iteration <= 4 )
                    <div class="s-usr_icons skeleton skeleton_txt">
                        <div class="_suis">
                            <img src="{{ URL::asset('assets/img/icons/alert.svg') }}" alt="">
                        </div>
                        <div class="_suisinfo">
                            <div class="_txtec">{{ \App\Models\GuestSafety::Name( $element ) }}</div>
                        </div>
                    </div>
                @endif
            @endforeach

            @if ( count( $content['legal'] ) >= 5 )
                <button type="button" class="txtunder__ics mr-t16 hesfty skeleton">
                    <div class="fx fx-ai-b gp5">
                        <span class="">Show more</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                            <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#333"></path>
                        </svg>
                    </div>
                </button>
            @endif
        </div>
    </div>
</div>