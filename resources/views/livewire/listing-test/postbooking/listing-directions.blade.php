<form wire:submit.prevent="SubmitDirections" class="show_form_input">
    <div class="_flfpc">
        <textarea class="_txta-modls @error('inputDirections') error_input @enderror" rows="3" style="height: auto; resize: vertical;" wire:model.defer="inputDirections"></textarea>
        @error('inputDirections')
            <div class="_txterror">
                <i class="fas fa-exclamation-circle icon1"></i> 
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 30px;">
        <div class="_btnsmleft click_cancel_listing" wire:click="reloadInputs">
            <span>Cancel</span>
        </div>
        <button type="submit" class="btn-celest">Save</button>
    </div>
</form>