<form wire:submit.prevent="SubmitPet" class="show_form_input" style="margin-top: 32px;">
    <div class="fx fx-fd-c" style="gap: 30px;">
        <div class="_flfpc mxw576">
            <div class="txt-check-in">Amount per pet</div>

            <label class="before_icon_input @error('inputPet') error_input @enderror">
                <span class="_txtec">$</span>
                <input type="text" class="number" wire:model.defer="inputPet">
            </label>
            @error('inputPet')
                <div  class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
            <div class="_btnsmleft click_cancel_listing" wire:click="reloadInputs">
                <span>Cancel</span>
            </div>
            <button type="submit" class="btn-celest">Save</button>
        </div>
    </div>
</form>