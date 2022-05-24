<form wire:submit.prevent="SubmitWeekly" class="show_form_input" style="margin-top: 19px;">
    <div class="_flfpc">
        <label class="before_icon_input mxw80 @error('inputWeekly') error_input @enderror">
            <input type="text" class="number" style="padding: 16px 0 16px 16px;" maxlength="2" wire:model.defer="inputWeekly">
            <span class="_txtec" style="padding: 16px 16px 16px 0;">%</span>
        </label>
        @error('inputWeekly')
            <div  class="_txterror">
                <i class="fas fa-exclamation-circle icon1"></i> 
                {{ $message }}
            </div>
        @enderror
    </div>

    <div style="margin-top: 12px;">
        <div class="_txtehlinear click_tip_disc" style="margin-bottom: 11px;">Tip: 13%. Set your weekly discount to this percentage.</div>
        <p class="_txtec16">Your average price with a 0% discount is $441 per week.</p>
    </div>

    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 30px;">
        <div class="_btnsmleft click_cancel_listing" wire:click="reloadInputs">
            <span>Cancel</span>
        </div>
        <button type="submit" class="btn-celest">Save</button>
    </div>
</form>