<form wire:submit.prevent="SubmitMonthly" class="show_form_input" style="margin-top: 19px;">
    <div class="_flfpc">
        <label class="before_icon_input mxw80 @error('inputMonthly') error_input @enderror">
            <input type="text" class="number _tip31" style="padding: 16px 0 16px 16px;" maxlength="2" wire:model.defer="inputMonthly">
            <span class="_txtec" style="padding: 16px 16px 16px 0;">%</span>
        </label>
        @error('inputMonthly')
            <div  class="_txterror">
                <i class="fas fa-exclamation-circle icon1"></i> 
                {{ $message }}
            </div>
        @enderror
    </div>

    <div style="margin-top: 12px;">
        <div class="_txtehlinear click_tip_disc" style="margin-bottom: 11px;">Tip: 31%. Set your monthly discount to this percentage.</div>
        <p class="_txtec16">Your average price with a 0% discount is $1,915 per month.</p>
    </div>

    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 30px;">
        <div class="_btnsmleft click_cancel_listing" wire:click="reloadInputs">
            <span>Cancel</span>
        </div>
        <button type="submit" class="btn-celest">Save</button>
    </div>
</form>