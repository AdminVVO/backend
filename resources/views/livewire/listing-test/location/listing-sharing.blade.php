<form wire:submit.prevent="SubmitSharing" class="show_form_input">
    <div class="fx fx-fd-c" style="gap: 30px;">
        <div class="checkbox-item checkbox-item_img">
            <label class="check_click">
                <input type="radio" name="location" value="Range location" wire:model.defer="inputSharing">
                <div class="_cont-l-img">
                    <div class="_ad-list_img">
                        <img src="{{ URL::asset('assets/img/card/map2.jpg') }}">
                    </div>
                    <span class="before_checkblu"></span>
                </div>

                <div class="flex_text fx fx-fd-c">
                    <h3 class="_txteh">Range location</h3>
                    <p class="_txtec16">Show only the general area to anyone searching for a place to stay.</p>
                </div>
            </label>
        </div>

        <div class="checkbox-item checkbox-item_img">
            <label class="check_click">
                <input type="radio" name="location" value="Specific location" wire:model.defer="inputSharing">
                <div class="_cont-l-img">
                    <div class="_ad-list_img">
                        <img src="{{ URL::asset('assets/img/card/map1.jpg') }}">
                    </div>
                    <span class="before_checkblu"></span>
                </div>

                <div class="flex_text fx fx-fd-c">
                    <h3 class="_txteh">Specific location</h3>
                    <p class="_txtec16">Show only the general area to anyone searching for a place to stay.</p>
                </div>
            </label>
        </div>
    </div>

    <div class="_width_text show_text_check_location" style="margin: 49px 0 42px; max-width: 1040px; width: 100%;">
        <p class="_txtec">Preview of your listing's map position. The circle will be shown on your listing. Only guests with a reservation will be able to see the pin.</p>
    </div>

    <div class="contmap_w100h425">
        <x-map-listing-basic
            latitude="{{ $inputLatitude }}"
            longitude="{{ $inputLongitude }}"
        />
    </div>
    
    <div class="fx fx-ai-fs fx-jc-sb" style="gap: 72px; margin-top: 56px;">
        <div class="w100">
            <h3 class="_txteh">Address privacy for cancellations</h3>
            <div class="_width_text" style="max-width: 885px;">
                <p class="_txtec">When this setting is on, guests won't be shown your address, last name, or phone number while they're able to cancel for free. After the free cancellation window, we'll send guests this information.</p>
            </div>
        </div>

        <input type="checkbox" class="checkbox_custom"  wire:model.defer="inputPrivacy">
    </div>

    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 30px;">
        <div class="_btnsmleft click_cancel_listing" wire:click="reloadInputs">
            <span>Cancel</span>
        </div>
        <button type="submit" class="btn-celest">Save</button>
    </div>
</form>