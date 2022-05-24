<form wire:submit.prevent="SubmitEarly" class="show_form_input" style="margin-top: 19px;">
    <div class="fx fx-fd-c" style="gap: 30px;">
        <div class="fx fx-fw-w" style="gap: 30px;">
            <div class="mxw466">
                <div class="txt-check-in">Months before arrival</div>
                <div class="selected-modal" style="margin: 0;">
                    <select class="@error('inputEarly') error_input @enderror" wire:model.defer="inputEarly">
                        <option selected value="0">Choose option...</option>
                        <option value="1">1 Months Before</option>
                        <option value="2">2 Months Before</option>
                        <option value="3">3 Months Before</option>
                        <option value="4">4 Months Before</option>
                        <option value="5">5 Months Before</option>
                    </select>

                    <i class="fas fa-chevron-down"></i>
                </div>
                @error('inputEarly')
                    <div style="display: block;" class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mxw80">
                <div class="_flfpc">
                    <div class="txt-check-in">Discount</div>

                    <label class="before_icon_input @error('inputPorcent') error_input @enderror">
                        <input type="text" class="number" style="padding: 16px 0 16px 16px;" maxlength="2" wire:model.defer="inputPorcent">
                        <span class="_txtec" style="padding: 16px 16px 16px 0;">%</span>
                    </label>
                    @error('inputPorcent')
                        <div style="display: block;" class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>
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