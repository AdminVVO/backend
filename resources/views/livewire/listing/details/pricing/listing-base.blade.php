<form wire:submit.prevent="SubmitBase" class="show_form_input">
    <div class="form_input">
        <div class="_flfpc">
            <label class="before_icon_input mxw445">
                <span class="_txtec">$</span>
                <input type="text" class="number @error('inputBase') error_input @enderror" wire:model.defer="inputBase">
                @error('inputBase')
                    <div  class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
            </label>
        </div>
    </div>

    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 30px;">
        <div class="_btnsmleft click_cancel_listing" wire:click="reloadInputs">
            <span>Cancel</span>
        </div>
        <button type="submit" class="btn-celest">Save</button>
    </div>
</form>