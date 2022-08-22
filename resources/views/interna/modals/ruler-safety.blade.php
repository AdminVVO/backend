<div class="container_house-safety patlbrzi container_user-host">
    <div class="paz999i0b modal_content-user"></div>

    <div class="fxpaijcpmi">
        <div class="_z4lmgp">
            <div class="fxfbwhmhbrzi">
                <div class="fx fx-jc-e">
                    <button type="button" class="cwhfcbbpfx closeUserModal">X</button>
                </div>

                <div class="whfxoyx">
                    <div class="poyxwh">
                        <div class="popup-house-safety">
                            <div class="bfxgp">
                                <div>
                                    <h2 class="h2_publish" style="margin-bottom: 32px;">Health & safety</h2>

                                    <div class="_fw nrml">
                                        <div class="s-usr_icons">
                                            <div class="_suis">
                                                <img src="{{ URL::asset('assets/img/icons/enhanced-black.svg') }}" alt="">
                                            </div>
                                            <div class="_suisinfo">
                                                <div class="_txtec">Committed to Vvoutlet enhanced cleaning process.</div>
                                            </div>
                                        </div>

                                        <div class="s-usr_icons">
                                            <div class="_suis">
                                                <img src="{{ URL::asset('assets/img/icons/covid.svg') }}" alt="">
                                            </div>
                                            <div class="_suisinfo">
                                                <div class="_txtec">Vvoutlet social-distancing and other COVID-19-related guidelines apply</div>
                                            </div>
                                        </div>

                                        @foreach ( $content['legal'] as $element )
                                            <div class="s-usr_icons">
                                                <div class="_suis">
                                                    <img src="{{ URL::asset('assets/img/icons/alert.svg') }}" alt="">
                                                </div>
                                                <div class="_suisinfo">
                                                    <div class="_txtec">{{ \App\Models\GuestSafety::Name( $element ) }}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>