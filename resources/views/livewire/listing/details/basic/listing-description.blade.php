<form wire:submit.prevent="SubmitDescription" class="show_form_input">
    <div class="fx fx-fd-c" style="gap: 30px;">
        <div class="fx fx-fd-c" style="gap: 48px;">
            <div class="_flfpc">
                <textarea class="_txta-modls input_cant_view @error('inputDescriptions') error_input @enderror" rows="4" style="height: auto;" maxlength="500" wire:model.defer="inputDescriptions"></textarea>
                @error('inputDescriptions')
                    <div class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
                <p style="margin-top: 12px;">
                    <span class="_txtec16 views_num">0</span><span class="_txtec16">/500</span>
                </p>
            </div>

            <div>
                <h3 class="_txteh">The space</h3>
                <div class="_width_text show_text">
                    <p class="_txtec">Provide a general description of what the property and rooms are like so guests know what to expect.</p>
                </div>

                <div class="_flfpc" style="margin-top: 30px;">
                    <textarea class="_txta-modls input_cant_view @error('inputSpace') error_input @enderror" rows="4" style="height: auto;" maxlength="500" wire:model.defer="inputSpace"></textarea>
                    @error('inputSpace')
                        <div class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                    <p style="margin-top: 12px;">
                        <span class="_txtec16 views_num">0</span><span class="_txtec16">/500</span>
                    </p>
                </div>
            </div>
        </div>

        <div>
            <h3 class="_txteh">Guest access</h3>
            <div class="_width_text show_text">
                <p class="_txtec">Let guests know how they can get around the neighborhood and what parking is like.</p>
            </div>

            <div class="_flfpc" style="margin-top: 30px;">
                <textarea class="_txta-modls @error('inputGuest') error_input @enderror" rows="4" style="height: auto;" maxlength="500" wire:model.defer="inputGuest"></textarea>
                @error('inputGuest')
                    <div class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div>
            <h3 class="_txteh">Other details to note</h3>
            <div class="_width_text show_text">
                <p class="_txtec">Include any special info you want potential guests to know before booking that isn't covered in other settings.</p>
            </div>

            <div class="_flfpc" style="margin-top: 30px;">
                <textarea class="_txta-modls @error('inputOther') error_input @enderror" rows="4" style="height: auto;" maxlength="500" wire:model.defer="inputOther"></textarea>
                @error('inputOther')
                    <div class="_txterror">
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