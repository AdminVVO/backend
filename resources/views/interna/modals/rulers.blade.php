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
                                        @if ( count( $content['checkin_window_start'] ) != 0 )
                                            <div class="s-usr_icons">
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
                                            <div class="s-usr_icons">
                                                <div class="_suis">
                                                    <img src="{{ URL::asset('assets/img/icons/reloj.svg') }}" alt="">
                                                </div>
                                                <div class="_suisinfo">
                                                    <div class="_txtec">Checkout: {{ $content['checkout_time']['time'] .' '. $content['checkout_time']['type'] }}</div>
                                                </div>
                                            </div>
                                        @endif

                                        <div class="s-usr_icons">
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

                                        <div class="s-usr_icons">
                                            <div class="_suis">
                                                <i class="fa-solid fa-smoking"></i>
                                            </div>
                                            <div class="_suisinfo">
                                                @if ( $content['smoking_allowed'] )
                                                    <div class="_txtec">Smoking is allowed</div>
                                                @else
                                                    <div class="_txtec">It is not allowed to smoke</div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="s-usr_icons">
                                            <div class="_suis">
                                                <i class="fa-solid fa-calendar-check"></i>
                                            </div>
                                            <div class="_suisinfo">
                                                @if ( $content['events_allowed'] )
                                                    <div class="_txtec">Events are Allowed.</div>
                                                @else
                                                    <div class="_txtec">No Events Allowed.</div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="cont">
                                    <h3 class="_txtblu fs25 mr">Additional rules</h3>

                                    <ul class="fxtxt mr-l18 _txtec">
                                        <li>{{ $content['additional_rules'] }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>