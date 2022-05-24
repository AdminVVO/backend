<form wire:submit.prevent="SubmitManual" class="show_form_input">
    <div class="_flfpc">
        <textarea class="_txta-modls @error('inputManual') error_input @enderror" rows="3" style="height: auto; resize: vertical;" wire:model.defer="inputManual"></textarea>
        @error('inputManual')
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