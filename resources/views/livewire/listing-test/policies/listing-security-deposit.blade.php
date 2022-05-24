<form wire:submit.prevent="SubmitSecurity" class="show_form_input" style="margin-top: 30px;">
    <div class="_flfpc mxw576">
        <label class="before_icon_input @error('inputSecurity') error_input @enderror">
            <span class="_txtec">$</span>
            <input type="text" class="number" wire:model.defer="inputSecurity">
        </label>
        @error('inputSecurity')
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