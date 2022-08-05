<form class="show_form_input" wire:submit.prevent="SubmitLink">
    <div class="_flfpc">
        <div class="txt-check-in">Link</div>
        <div class="link_label_input">
            <label class="fx fx-ai-c" for="myp.listingDetails.customLink.edit-custom-link">
                <span class="text_placeholder" style="padding-left: 16px;">{{ env('APP_URL') }}</span>
                <input type="text" class="_input input_cant_view @error('inputLink') error_input @enderror" id="myp.listingDetails.customLink.edit-custom-link" maxlength="100" style="padding-left: 0;" wire:model.defer="inputLink">
                @error('inputLink')
                    <div class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
            </label>
        </div>
        
        <div style="margin-top: 12px;">
            <p class="_txtec">A memorable and unique link can make it easy to share your listing on business cards, websites, or social media.</p>
            <p class="_txtec">Ex: {{ env('APP_URL') }}private-room-in-barcelona-center. <a href="#" class="_txtehlinear">Review our custom link policy.</a></p>
            <p>
                <span class="_txtec16 views_num">0</span><span class="_txtec16">/100</span>
            </p>
        </div>
    </div>

    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 25px;">
        <div class="_btnsmleft click_cancel_listing" wire:click="reloadInputs">
            <span>Cancel</span>
        </div>
        <button type="submit" class="btn-celest">Save</button>
    </div>
</form>