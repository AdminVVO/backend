<form wire:submit.prevent="SubmitResort" class="show_form_input" style="margin-top: 30px;">
    <div class="fx fx-fd-c" style="gap: 30px;">
        <div class="fx fx-fw-w" style="gap: 30px;">
            <div class="mxw445">
                <div class="txt-check-in">Fee per reservation</div>
                <input type="text" class="_inputreal number @error('inputResort') error_input @enderror" wire:model.defer="inputResort">
                @error('inputResort')
                    <div  class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mxw100">
                <div class="txt-check-in">Type</div>

                <div class="selected-modal @error('inputPorcent') error_input @enderror" style="margin: 0;">
                    <select wire:model.defer="inputPorcent">
                        <option value="porcent">%</option>
                        <option value="currency">$</option>
                    </select>

                    <i class="fas fa-chevron-down"></i>
                </div>
                @error('inputPorcent')
                    <div  class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
            <div class="_btnsmleft click_cancel_listing" wire:click="reloadInputs">
                <span>Cancel</span>
            </div>
            <button type="submit" class="btn-celest">Save</button>
        </div>
    </div>
</form>