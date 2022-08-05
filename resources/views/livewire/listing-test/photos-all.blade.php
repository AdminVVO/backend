<div class="whfxoyx">
    <div class="poyxwh pd0_50">
        <div class="popup_edit_photos">
            <div class="hr">
                <div class="fxnhfdcpb">
                    <div class="f110">
                        <div class="mr-r16 none1128">
                            <section>
                                <h2 class="_txtbold3a18">Cover photo</h2>
                                <p class="_txtec16 mr-t4">Your cover photo is a guest’s first impression of your listing.</p>
                            </section>

                            <div class="mr-t24">
                                <button class="btn-celest btn-celest-n js__popupChangePhoto">Change photo</button>
                            </div>
                        </div>
                    </div>

                    <div class="f110mwmt">
                        <div class="pbpr">
                            <div class="pai0">
                                <div class="wh100pr">
                                    <div class="dibvabhw100mhbpbr">
                                        <img src="{{ URL::asset('storage/uploadListing/') }}/{{ $photos[0] }}" alt="" class="ofcvabhwp">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pstbwzimp">
                <div class="pd-t48 pd-b48">
                    <input type="file" class="dn">
                    <div class="fxbdnbohfdrfdcpea">
                        <div class="f110">
                            <section>
                                <h2 class="_txtbold3a18">All photos</h2>
                                <p class="_txtec16 mr-t4">Drag and drop your photos to change the order.</p>
                            </section>
                        </div>

                        <div class="asfs">
                            <div class="mtmlfx743">
                                <input type="file" id="uploadPhotos" class="dn">
                                <label for="uploadPhotos">
                                    <div class="btn-celest btn-celest-n">Upload photos</div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="p480mw900">
                    <input type="file" id="uploadPhotos" class="dn">
                    <div class="oyaprmr744none">
                        <div class="boxfxaisjcfsfwwwmlmr">
                            @foreach ( $photos as $element )
                                <div class="prwmlmrplpr">
                                    <div class="mr-b16">
                                        <div class="mr-b8">
                                            <div class="pbpr">
                                                <div class="pai0">
                                                    <div class="wh100pr">
                                                        <div class="bcdibhw100">
                                                            <div class="dibvabhw100mhbpbr">
                                                                <img src="{{ URL::asset('storage/uploadListing/') }}/{{ $element }}" alt="" class="ofcvabhwp">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="fx fx-ai-b gp3">
                                                {{-- <div class="_txtec16">prueba</div> --}}

                                                {{-- <button type="button" class="txtunder__ics txt16 js__popupEditAddCaption">Edit</button> --}}
                                                <button type="button" class="txtunder__ics txt16 js__popupEditAddCaption">Add caption</button>
                                            </div>
                                        </div>
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