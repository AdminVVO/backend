<form wire:submit.prevent="SubmitWifi" class="show_form_input">
    <div class="fx fx-fd-c" style="gap: 30px;">
        <div class="_flfpc mxw576">
            <div class="txt-check-in">Wifi network name</div>
            <input type="text" class="_numcard @error('inputWifi') error_input @enderror" wire:model="inputWifi">
            @error('inputWifi')
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