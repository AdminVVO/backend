<form wire:submit.prevent="SubmitMinimun" class="show_form_input" style="margin-top: 35px;">
    <div class="fx fx-fd-c" style="gap: 30px;">
        <div class="_flfpc">
            <div class="txt-check-in">Minimum nights</div>
            <input type="text" class="_numcard number @error('inputMinimun') error_input @enderror" value="3" wire:model.defer="inputMinimun">
            @error('inputMinimun')
                <div  class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <div class="_btnsmleft click_minumum_nights">
            <span>Customize minimum stay requirements</span>
        </div>

        <div class="show_minimum_nights fx-fd-c" style="gap: 30px; display: none;">
            <div>
                <p class="_txtec">Minimum nights by check-in day</p>
                <p class="_txtec">Set a number of minimum nights when guests check in on certain days.</p>
            </div>

            <div class="_flfpc"  style="gap: 30px;">
                <div class="block_date">
                    <div class="txt-check-in">Sundays</div>
                    <input type="text" class="_numcard number" wire:model.defer="inputCustom.sundays">
                </div>

                <div class="block_date">
                    <div class="txt-check-in">Mondays</div>
                    <input type="text" class="_numcard number" wire:model.defer="inputCustom.mondays">
                </div>
            </div>

            <div class="_flfpc"  style="gap: 30px;">
                <div class="block_date">
                    <div class="txt-check-in">Tuesdays</div>
                    <input type="text" class="_numcard number" wire:model.defer="inputCustom.tuesdays">
                </div>

                <div class="block_date">
                    <div class="txt-check-in">Wednesdays</div>
                    <input type="text" class="_numcard number" wire:model.defer="inputCustom.wednesdays">
                </div>
            </div>

            <div class="_flfpc"  style="gap: 30px;">
                <div class="block_date">
                    <div class="txt-check-in">Thursdays</div>
                    <input type="text" class="_numcard number" wire:model.defer="inputCustom.thursdays">
                </div>

                <div class="block_date">
                    <div class="txt-check-in">Fridays</div>
                    <input type="text" class="_numcard number" wire:model.defer="inputCustom.fridays">
                </div>
            </div>

            <div class="_flfpc"  style="gap: 30px;">
                <div class="block_date">
                    <div class="txt-check-in">Saturdays</div>
                    <input type="text" class="_numcard number" wire:model.defer="inputCustom.saturdays">
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
