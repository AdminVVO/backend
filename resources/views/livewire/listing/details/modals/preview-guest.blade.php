<div class="container_admin-host container_preview_guests_pay">
    <div class="modal-anhost"></div>

    <div class="pd_anhost-modal">
        <div class="_z4lmgp">
            <div class="modal_content-anhost" style="max-width: 706px;">
                <div class="close">
                    <span>X</span>
                </div>

                @livewire('listing.details.preview-guest', [
                    'listingId' => $listing,
                ])

                <div class="_pd35" style="padding-top: 21px; padding-bottom: 21px;">
                    <button class="btn-celest click_close" style="float: right;">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>