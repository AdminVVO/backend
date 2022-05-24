<div class="container_admin-host _ntñsfts container_lgssppas">
    <div class="modal-anhost"></div>

    <div class="pd_anhost-modal">
        <div class="_z4lmgp">
            <div class="modal_content-anhost">
                <div class="close" id="closeAmenities">
                    <span>X</span>
                </div>

                <div class="_wpwi48 mr-b76">
                    <div class="fx fx-fd-c gp18">
                        <h2 class="h2_publish">Amenities</h2>
                        <p class="_txtec">Your listing won't show up in search during the time you set. You'll still be responsible for any already confirmed reservations.</p>
                    </div>
                </div>

                <div class="modal_block">

                    @livewire('listing-test.amenities', ['listing' => $listing])

                </div>

                <div class="_zjunba">
                    <div class="_btnsmleft click_cancel_mdls" id="cancelAmenities">
                        <span>Cancel</span>
                    </div>

                    <button class="btn-celest" id="saveAmenities">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>