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
                                        <img src="{{ URL::asset('storage/photos-listing/') .'/'. \App\Models\Listing\Listings::ListingFile( $listingId ) .'/'. $photos[0]['name'] }}" class="ofcvabhwp">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pstbwzimp">
                <div class="pd-t48 pd-b48">
                    <input type="file" id="uploadPhotos" class="dn" wire:model="inputFiles" multiple accept="image/*">
                    <div class="fxbdnbohfdrfdcpea">
                        <div class="f110">
                            <section>
                                <h2 class="_txtbold3a18">All photos</h2>
                                <p class="_txtec16 mr-t4">Drag and drop your photos to change the order.</p>
                            </section>
                        </div>

                        <div class="asfs">
                            <div class="mtmlfx743">
                                <label for="uploadPhotos">
                                    <div class="btn-celest btn-celest-n">Upload photos</div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div wire:ignore.self>
                <div class="p480mw900">
                    <div class="oyaprmr744none">
                        <div class="boxfxaisjcfsfwwwmlmr">
                            @foreach ( $photos as $key => $element )
                                <div class="prwmlmrplpr">
                                    <div class="mr-b16">
                                        <div class="mr-b8">
                                            <div class="pbpr">
                                                <div class="pai0">
                                                    <div class="wh100pr">
                                                        <div class="bcdibhw100">
                                                            <div class="dibvabhw100mhbpbr">
                                                                <img src="{{ URL::asset('storage/photos-listing/') .'/'. \App\Models\Listing\Listings::ListingFile( $listingId ) .'/'. $element['name'] }}" class="ofcvabhwp">
                                                            </div>
                                                        </div>

                                                        <div class="par0t0 js__showPopupPhoto">
                                                            <div class="showPopup">
                                                                <button class="bcwhbrbcbsozi js__btnEditPhotoPost">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="5" viewBox="0 0 21 5">
                                                                        <g transform="translate(-1511 -417)">
                                                                            <circle cx="2.5" cy="2.5" r="2.5" transform="translate(1511 417)" fill="currentColor"></circle>
                                                                            <circle cx="2.5" cy="2.5" r="2.5" transform="translate(1519 417)" fill="currentColor"></circle>
                                                                            <circle cx="2.5" cy="2.5" r="2.5" transform="translate(1527 417)" fill="currentColor"></circle>
                                                                        </g>
                                                                    </svg>
                                                                </button>
                                                            </div>

                                                            <div class="_olsjb9v">
                                                                <button type="button" class="_14tt8lmp js__popupEditAddCaption" wire:click="returnEdit('{{ $key }}')">
                                                                    <div class="_q40c6s">Edit</div>
                                                                </button>

                                                                @if ( !$loop->first )
                                                                    <button type="button" class="_14tt8lmp" wire:click="returnUp('{{ $key }}')">
                                                                        <div class="_q40c6s">Move forward</div>
                                                                    </button>
                                                                @endif

                                                                <button type="button" class="_14tt8lmp" wire:click="returnDown('{{ $key }}')">
                                                                    <div class="_q40c6s">Move backward</div>
                                                                </button>

                                                                @if ( !$loop->first )
                                                                    <button type="button" class="_14tt8lmp" wire:click="returnCover('{{ $key }}')">
                                                                        <div class="_q40c6s">Make cover photo</div>
                                                                    </button>
                                                                @endif

                                                                <button type="button" class="_14tt8lmp" wire:click="returnDelete('{{ $key }}')">
                                                                    <div class="_q40c6s">Delete</div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="fx fx-ai-b gp3">
                                                @if ( $element['comment'] != null)
                                                    <div class="_txtec16">{{ $element['comment']  }}</div>
                                                @endif
                                                <button type="button" class="txtunder__ics txt16 js__popupEditAddCaption" wire:click="returnEdit('{{ $key }}')">{{ $element['comment'] != null ? 'Edit' : 'Add caption' }}</button>
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