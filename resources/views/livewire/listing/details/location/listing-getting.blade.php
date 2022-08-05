<form wire:submit.prevent="SubmitGetting" class="show_form_input" style="margin-top: 30px;">
    <div class="_flfpc">
        <textarea class="_txta-modls @error('inputGetting') error_input @enderror" rows="4" style="height: auto; resize: vertical;" wire:model.defer="inputGetting"></textarea>
        @error('inputGetting')
            <div  class="_txterror">
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