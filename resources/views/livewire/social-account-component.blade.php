<div class="_bgpad-lg _bgpad-lg_socials">
    <div class="h2-guests">Social accounts</div>
    <div>
        <div class="_bgpad-inf">
            <div class="_cont-edit">
                <div class="_block-f">
                    <span class="_b-icon">
                        <i class="fab fa-facebook-f"></i>
                    </span>

                    <div class="_gap">
                        <div class="_txteh">Facebook</div>
                        @if ( $social->facebook_id == null)
                            <div class="_txtec">Not connected</div>
                        @else
                            <div class="_txtec">Connected</div>
                        @endif
                    </div>
                </div>

                <a href="#" class="_btnsm">
                    @if ( $social->facebook_id == null)
                        <span class="_fcontent">
                            Connect
                            <span class="_svg-asm">
                                <img src="{{ URL::asset('icons/down-right.svg') }}" alt="">
                            </span>
                        </span>
                    @else
                        <span class="_fcontent">
                            Disconnect
                            <span class="_svg-asm">
                                <img src="{{ URL::asset('icons/down-right.svg') }}" alt="">
                            </span>
                        </span>
                    @endif
                </a>
            </div>

            <div class="_cont-edit">
                <div class="_block-f">
                    <span class="_b-icon">
                        <i class="fab fa-google"></i>
                    </span>

                    <div class="_gap">
                        <div class="_txteh">Google</div>
                            @if ( $social->google_id == null)
                                <div class="_txtec">Not connected</div>
                            @else
                                <div class="_txtec">Connected</div>
                            @endif
                    </div>
                </div>

                <a href="#" class="_btnsm">
                    @if ( $social->google_id == null)
                        <span class="_fcontent">
                            Connect
                            <span class="_svg-asm">
                                <img src="{{ URL::asset('icons/down-right.svg') }}" alt="">
                            </span>
                        </span>
                    @else
                        <span class="_fcontent">
                            Disconnect
                            <span class="_svg-asm">
                                <img src="{{ URL::asset('icons/down-right.svg') }}" alt="">
                            </span>
                        </span>
                    @endif
                </a>
            </div>
        </div>
    </div>
</div>