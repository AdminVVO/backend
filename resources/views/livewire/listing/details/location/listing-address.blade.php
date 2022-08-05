<form class="show_form_input" wire:submit.prevent="SubmitAddress">
    <div class="fx fx-fd-c" style="gap: 30px;">
        <div class="_flfpc">
            <div class="txt-check-in">Country / Región</div>
            <input type="text" class="_numcard @error('inputCountry') error_input @enderror" wire:model.defer="inputCountry">
            @error('inputCountry')
                <div  class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="_flfpc">
            <div class="block_date">
                <div class="txt-check-in">Street</div>
                <input type="text" class="_numcard _txtcapit @error('inputStreet') error_input @enderror" wire:model.defer="inputStreet">
                @error('inputStreet')
                    <div  class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
            <span class="_txtec16" style="margin-top: 12px;">e.g. 123 Main St.</span>
            </div>

            <div class="block_date">
                <div class="txt-check-in">Zip Code</div>
                <input type="text" class="_numcard number input_numberzipcode @error('inputZipcode') error_input @enderror" wire:model.defer="inputZipcode">
                @error('inputZipcode')
                    <div  class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
                <p class="_txtec16" style="margin-top: 12px;">e.g. 94103</p>
            </div>
        </div>

        <div class="_flfpc" style="gap: 30px;">
            <div class="block_date">
                <div class="txt-check-in">City</div>
                <input type="text" class="_numcard _txtcapit @error('inputCity') error_input @enderror" autocomplete="off" wire:model.defer="inputCity">
                @error('inputCity')
                    <div  class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
                <p class="_txtec16" style="margin-top: 12px;">e.g. San Francisco</p>
            </div>

            <div class="block_date">
                <div class="txt-check-in">State</div>
                <input type="text" class="_numcard _txtcapit @error('inputState') error_input @enderror" autocomplete="off" wire:model.defer="inputState">
                @error('inputState')
                    <div  class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
                <p class="_txtec16" style="margin-top: 12px;">e.g. CA</p>
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