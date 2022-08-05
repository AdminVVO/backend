<div class="fxfbwhmhbrzi" wire:ignore.self>
    <div class="fx fx-jc-e">
        <button type="button" class="cwhfcbbpfx xhidemdusr">X</button>
    </div>

    <form wire:submit.prevent="SubmitComment">
        <div class="whfxoyx">
            <div class="poyxwh pd0_50">
                <div class="popup_edit_photo">
                    <div class="_txteh">Edit photo</div>

                    <div class="plprhfxmwm mr-t21">
                        <div class="fxfdmjcw1128none">
                            <div class="wmwotap">
                                <div class="pbc66">
                                    <div class="bcpahwtlo">
                                        @if ( $fileEdit )
                                            <img src="{{ URL::asset('storage/photos-listing/') .'/'. \App\Models\Listing\Listings::ListingFile( $listingId ) .'/'. $fileEdit['name'] }}" class="mwmhpalttt">
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="wml1128none">
                                <div class="mrmt1128none">
                                    <div class="navcont__flech-fx">
                                        <div class="cont_nav js__cont_nav">
                                            <div class="nav__links-txt tab-container">
                                                <button type="button" class="li__links-txt">
                                                    <span class="tabs_items active_tabs">Details</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mr-t24">
                                        <div class="pd-t8">
                                            <label for="textarealbl">
                                                <div>
                                                    <div class="_txteh">Caption</div>
                                                    <p class="_txtec16 mr-t6 mr-b12">Mention what’s special about this space like comfortable furniture or favorite details.</p>
                                                </div>

                                                <textarea class="_txta-modls input_cant_view @error('inputComment') error_input @enderror" style="resize: vertical;" rows="6" id="textarealbl" maxlength="250" wire:model.defer="inputComment"></textarea>
                                                @error('inputComment')
                                                    <div class="_txterror">
                                                        <i class="fas fa-exclamation-circle icon1"></i> 
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                
                                                <p class="mr-t3">
                                                    <span class="_txtec16 views_num">0</span><span class="_txtec16">/250</span>
                                                </p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="_zgc1p6 pd0_50">
            <button type="button" class="_fpnigw0" wire:click="fileDelet">Delete photo</button>

            <button type="submit" class="btn-celest">Save</button>
        </div>
    </form>
</div>