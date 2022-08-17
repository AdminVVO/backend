<div class="container-wishlists-share patlbrzi container_user-host">
    <div class="paz999i0b modal_content-user"></div>

    <div class="fxpaijcpmi">
        <div class="_z4lmgp">
            <div class="fxfbwhmhbrzi">
                <div class="fx fx-jc-e">
                    <button type="button" class="cwhfcbbpfx closeUserModal">X</button>
                </div>
                
                <div class="whfxoyx">
                    <div class="poyxwh">
                        <div class="popup_share">
                            <div class="h2_publish">Share this place with friends and family</div>

                            <div class="_block-share">
                                <div class="flex-img">
                                    <img src="{{ URL::asset('storage/photos-listing/') .'/'. \App\Models\Listing\Listings::ListingFile( $content['id_listings'] ) .'/'. $content['photos'][0]['name'] }}">
                                </div>

                                <div>
                                    <h2 class="_txtec">{{ $content['title'] }}</h2>
                                </div>
                            </div>

                            <div class="block_redes-modals">
                                <button type="button" class="bclnkrds">
                                    <div class="contend_red">
                                        <div class="flex_icon">
                                            <i class="far fa-copy"></i>
                                        </div>
                                        
                                        <div class="_txtec">Copy Link</div>
                                    </div>
                                </button>

                                <button type="button" class="bclnkrds">
                                    <div class="contend_red">
                                        <div class="flex_icon">
                                            <i class="far fa-envelope"></i>
                                        </div>
                                        
                                        <div class="_txtec">Email</div>
                                    </div>
                                </button>

                                <button type="button" class="bclnkrds">
                                    <div class="contend_red">
                                        <div class="flex_icon">
                                            <i class="far fa-comment-alt"></i>
                                        </div>
                                        
                                        <div class="_txtec">Mensajes</div>
                                    </div>
                                </button>

                                <button type="button" class="bclnkrds">
                                    <div class="contend_red">
                                        <div class="flex_icon">
                                            <i class="fab fa-whatsapp"></i>
                                        </div>
                                        
                                        <div class="_txtec">Whatsapp</div>
                                    </div>
                                </button>

                                <button type="button" class="bclnkrds">
                                    <div class="contend_red">
                                        <div class="flex_icon">
                                            <i class="far fa-comment"></i>
                                        </div>
                                        
                                        <div class="_txtec">Messenger</div>
                                    </div>
                                </button>

                                <button type="button" class="bclnkrds">
                                    <div class="contend_red">
                                        <div class="flex_icon">
                                            <i class="fab fa-facebook-f"></i>
                                        </div>
                                        
                                        <div class="_txtec">Facebook</div>
                                    </div>
                                </button>

                                <button type="button" class="bclnkrds">
                                    <div class="contend_red">
                                        <div class="flex_icon">
                                            <i class="fab fa-twitter"></i>
                                        </div>
                                        
                                        <div class="_txtec">Twitter</div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>