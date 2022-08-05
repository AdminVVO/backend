<form wire:submit.prevent="SubmitExtra" class="show_form_input" style="margin-top: 30px;">
    <div class="fx fx-fd-c" style="gap: 30px;">
        <div class="_flfpc">
            <label class="before_icon_input @error('inputExtra') error_input @enderror">
                <span class="_txtec">$</span>
                <input type="text" class="number" wire:model.defer="inputExtra">
            </label>
            @error('inputExtra')
                <div  class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
            <span class="_txtec">Number of guests</span>

            <div class="_2btns">
                <button class="_btn" type="button" aria-label="disminuir valor" {{ $disableButton['DecreaseGuest'] ? 'disabled' : '' }} wire:click="decreaseGuest">
                    <span>
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                            <path d="m2 16h28"></path>
                        </svg>
                    </span>
                </button>
                
                <span>{{ $inputQuanty }}</span>

                <button class="_btn" type="button" aria-label="aumentar valor" {{ $disableButton['IncreaseGuest'] ? 'disabled' : '' }} wire:click="increaseGuest">
                    <span>
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                            <path d="m2 16h28m-14-14v28"></path>
                        </svg>
                    </span>
                </button>
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