<form wire:submit.prevent="SubmitInteration" class="show_form_input">
    <div class="fx fx-fd-c" style="gap: 18px;">
        <div>
            <label class="block-lb fx-ai-c fx-jc-fs">
                <input type="radio" name="interaction_guests" wire:model.defer="inputInteration" value="I plan">
                <div class="before_check">
                    <div class="flex-centrado" style="width: inherit;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                        </svg>
                    </div>
                </div>

                <div class="bfx_svg">
                    <div class="w100">
                        <span class="_txtec">I plan to socialize with my guests</span>
                    </div>
                </div>
            </label>
        </div>

        <div>
            <label class="block-lb fx-ai-c fx-jc-fs">
                <input type="radio" name="interaction_guests" wire:model.defer="inputInteration" value="I give">
                <div class="before_check">
                    <div class="flex-centrado" style="width: inherit;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                        </svg>
                    </div>
                </div>

                <div class="bfx_svg">
                    <div class="w100">
                        <span class="_txtec">I give my guests space but am available when needed</span>
                    </div>
                </div>
            </label>
        </div>

        <div>
            <label class="block-lb fx-ai-c fx-jc-fs">
                <input type="radio" name="interaction_guests" wire:model.defer="inputInteration" value="I wont">
                <div class="before_check">
                    <div class="flex-centrado" style="width: inherit;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                        </svg>
                    </div>
                </div>

                <div class="bfx_svg">
                    <div class="w100">
                        <span class="_txtec">I won't be available in person</span>
                    </div>
                </div>
            </label>
        </div>
    </div>

    <div class="_flfpc" style="margin-top: 26px;">
        <textarea class="_txta-modls @error('inputComment') error_input @enderror" rows="3" style="height: auto; resize: vertical;" wire:model.defer="inputComment"></textarea>
        @error('inputComment')
            <div class="_txterror">
                <i class="fas fa-exclamation-circle icon1"></i> 
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 25px;">
        <div class="_btnsmleft click_cancel_listing" wire:click="reloadInputs">
            <span>Cancel</span>
        </div>
        <button type="submit" class="btn-celest">Save</button>
    </div>
</form>