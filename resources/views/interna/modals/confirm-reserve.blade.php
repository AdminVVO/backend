<div class="container_reserve-confirm patlbrzi container_user-host">
    <div class="paz999i0b modal_content-user"></div>

    <div class="fxpaijcpmi">
        <div class="_z4lmgp">
            <div class="fxfbwhmhbrzi">
                <div class="fx fx-jc-e">
                    <button type="button" class="cwhfcbbpfx closeUserModal">X</button>
                </div>

                @livewire('interna.interna-confirm-pay', [
                    'listingId' => $content['id_listings'],
                    'title' => $content['title'],
                    'photos' => $content['photos'],
                    'like_place' => $content['like_place'],
                    'property_type' => $content['property_type'],
                    'guest_access' => $content['guest_access'],
                    'bed' => $content['bed'],
                    'bedrooms' => $content['bedrooms'],
                    'bathrooms' => $content['bathrooms'],
                    'base_price' => $content['base_price'],
                    'listing_currency' => $content['listing_currency'],
                    'weekly_discount' => $content['weekly_discount'],
                    'monthly_discount' => $content['monthly_discount'],
                    'cleaning_fee' => $content['cleaning_fee'],
                    'pet_fee' => $content['pet_fee'],
                    'linens_fee' => $content['linens_fee'],
                    'resort_fee' => $content['resort_fee'],
                    'resort_type' => $content['resort_type'],
                    'management_fee' => $content['management_fee'],
                    'management_type' => $content['management_type'],
                    'community_fee' => $content['community_fee'],
                    'community_type' => $content['community_type'],
                    'extra_guest_fee' => $content['extra_guest_fee'],
                    'extra_guest' => $content['extra_guest'],
                    'weekend_nightly_fee' => $content['weekend_nightly_fee'],
                    'requestDate' => $requestDate,
                    'requestDays' => $requestDays,
                ])
            </div>
        </div>
    </div>
</div>