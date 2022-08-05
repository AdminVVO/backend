<form wire:submit.prevent="SubmitMaximun" class="show_form_input" style="margin-top: 35px;">
    <div class="fx fx-fd-c" style="gap: 30px;">
        <div class="_flfpc mxw576">
            <div class="txt-check-in">Nights</div>
            <input type="text" class="_numcard number @error('inputMaximun') error_input @enderror" value="3" wire:model.defer="inputMaximun">
            @error('inputMaximun')
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