<div class="container_house-rules patlbrzi container_user-host">
    <div class="paz999i0b modal_content-user"></div>

    <div class="fxpaijcpmi">
        <div class="_z4lmgp">
            <div class="fxfbwhmhbrzi">
                <div class="fx fx-jc-e">
                    <button type="button" class="cwhfcbbpfx closeUserModal">X</button>
                </div>

                <div class="whfxoyx">
                    <div class="poyxwh">
                        <div class="popup-house-rules">
                            <div class="bfxgp">
                                <div>
                                    <h2 class="h2_publish" style="margin-bottom: 32px;">House rules</h2>
                                    
                                    <div class="_fw nrml">
                                        <div class="s-usr_icons">
                                            <div class="_suis">
                                                <img src="{{ URL::asset('assets/img/icons/reloj.svg') }}" alt="">
                                            </div>
                                            <div class="_suisinfo">
                                                <div class="_txtec">Check-in: After {{ $content['checkin_window_start']['time'] .' '. $content['checkin_window_start']['type'] }}</div>
                                            </div>
                                        </div>

                                        <div class="s-usr_icons">
                                            <div class="_suis">
                                                <img src="{{ URL::asset('assets/img/icons/reloj.svg') }}" alt="">
                                            </div>
                                            <div class="_suisinfo">
                                                <div class="_txtec">Checkout: {{ $content['checkin_window_end']['time'] .' '. $content['checkin_window_start']['type'] }}</div>
                                            </div>
                                        </div>

                                        <div class="s-usr_icons">
                                            <div class="_suis">
                                                <img src="{{ URL::asset('assets/img/icons/self-black') }}.svg" alt="">
                                            </div>
                                            <div class="_suisinfo">
                                                <div class="_txtec">Self check-in with {{ $content['arrival_instructions'] }}</div>
                                            </div>
                                        </div>
                                        
                                        @if ( $content['pets_allowed'] )
                                            <div class="s-usr_icons">
                                                <div class="_suis">
                                                    <img src="{{ URL::asset('assets/img/icons/pets.svg') }}" alt="">
                                                </div>
                                                <div class="_suisinfo">
                                                    <div class="_txtec">Pets</div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="cont">
                                    <h3 class="_txtblu fs25 mr">Additional rules</h3>

                                    <ul class="fxtxt mr-l18 _txtec">
                                        <li>{{ $content['additional_rules'] }}</li>
                                    </ul>
                                </div>

                                <div class="cont">
                                    <h3 class="_txtblu fs25 mr">Building the enclave</h3>

                                    <ul class="fxtxt mr-l18 _txtec">
                                        <li>{{ ucwords( strtolower( $content['country'] .', '. $content['state'] .', '. $content['city'] ) ) }}</li>
                                        <li>CHECK IN/CHECK OUT</li>
                                        <li>Check in: {{ $content['checkin_window_start']['time'] .' '. $content['checkin_window_start']['type'] }}</li>
                                        <li>Check out: {{ $content['checkin_window_end']['time'] .' '. $content['checkin_window_start']['type'] }}</li>
                                    </ul>
                                </div>

                                @if ( in_array('free_parking', $content['amenities']))
                                    <div class="cont">
                                        <h3 class="_txtblu fs25 mr">Parking</h3>
                                        
                                        <ul class="fxtxt mr-l18 _txtec">
                                            <li>Is a free parking lot</li>
                                        </ul>
                                    </div>
                                @endif

                                @if ( in_array('dedicated_worspace', $content['amenities']) || in_array('pocket_wifi', $content['amenities']) || in_array('wifi', $content['amenities']) )
                                    <div class="cont">
                                        <h3 class="_txtblu fs25 mr">Internet 50 MB</h3>
                                        <ul class="fxtxt mr-l18 _txtec">
                                            @foreach ($amenitiesModal['internetoffice'] as $element)
                                                @if ( $element['code'] == 'dedicated_worspace' || $element['code'] == 'pocket_wifi' || $element['code'] == 'wifi' )
                                                    <li>{{ $element['name'] }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if ( in_array('gym', $content['amenities']))
                                    <div class="cont">
                                        <h3 class="_txtblu fs25 mr">Gym</h3>

                                        <ul class="fxtxt mr-l18 _txtec">
                                            <li>You Have GYM access</li>
                                        </ul>
                                    </div>
                                @endif

                                <div class="cont">
                                    <h3 class="_txtblu fs25">Wish You a Safe and Very Pleasant Stay!</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>