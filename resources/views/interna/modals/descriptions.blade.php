<div class="container_about-space patlbrzi container_user-host">
    <div class="paz999i0b modal_content-user"></div>

    <div class="fxpaijcpmi">
        <div class="_z4lmgp">
            <div class="fxfbwhmhbrzi">
                <div class="fx fx-jc-e">
                    <button type="button" class="cwhfcbbpfx closeUserModal">X</button>
                </div>

                <div class="whfxoyx">
                    <div class="poyxwh">
                        <div class="popup-aboutspaceinterna">
                            <h2 class="h2_publish mr-b32">About this space</h2>

                            <div class="bcfx">
                                <div class="cont-text">
                                    <p class="_txtec txtecmarg">{{ $content['descriptions'] }}</p>
                                </div>

                                @if ( $content['space'] != null )
                                    <div class="cont-text">
                                        <span class="_txtblu mr64010 f25">The space</span>
                                        <p class="_txtec txtecmarg">{{ $content['space'] }}</p>
                                    </div>
                                @endif

                                @if ( $content['guest_access'] != null )
                                    <div class="cont-text">
                                        <span class="_txtblu mr64010 f25">Guest access</span>
                                        <p class="_txtec txtecmarg">{{ $content['guest_access'] }}</p>
                                    </div>
                                @endif

                                @if ( $content['other_details'] != null )
                                    <div class="cont-text">
                                        <span class="_txtblu mr64010 f25">Other things to note</span>
                                        <p class="_txtec txtecmarg mrb56">{{ $content['other_details'] }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>