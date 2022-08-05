<div class="container_admin-host _ntñsfts container_pprssss1">
    <div class="modal-anhost"></div>

    <div class="pd_anhost-modal">
        <div class="_z4lmgp">
            <div class="modal_content-anhost">
                <div class="close" id="closeRoomSpace">
                    <span>X</span>
                </div>

                <div class="_wpwi48 mr-b25">
                    <div class="fx fx-fd-c gp18">
                        <h2 class="h2_publish">Which areas can guests use?</h2>
                        <p class="_txtec">Add all the rooms guests can use - even shared areas</p>
                    </div>

                    <div class="_nlporcrd mr-t16">
                        <span class="_wptlbbb" style="width: 33.3%;"></span>
                    </div>
                </div>

                <div class="modal_block">
                    @livewire('listing-test.property.listing-rooms', [
                        'listingId' => $listing,
                    ])
                </div>

                <div class="_zjunba">
                    <div class="_btnsmleft click_cancel_mdls" id="cancelRoomSpace">
                        <span>Cancel</span>
                    </div>

                    <button class="btn-celest" id="saveRoomSpace">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>