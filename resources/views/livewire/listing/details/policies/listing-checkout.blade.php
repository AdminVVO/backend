<form wire:submit.prevent="SubmitCheckOut" class="show_form_input" style="margin-top: 30px;">
    <div class="fx fx-fd-c" style="gap: 30px;">
        <div class="fx fx-fw-w" style="gap: 30px;">
            <div class="mxw445">
                <div class="txt-check-in">Select start time</div>
                
                <div class="selected-modal @error('inputOut') error_input @enderror" style="margin: 0;">
                    <select wire:model.defer="inputOut">
                        @foreach ($time as $element)
                            <option value="{{ $element }}">{{ $element }}</option>
                        @endforeach
                    </select>

                    <i class="fas fa-chevron-down"></i>
                </div>
                @error('inputOut')
                    <div class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mxw100">
                <div class="txt-check-in">Afternoon</div>

                <div class="selected-modal @error('inputOutType') error_input @enderror" style="margin: 0;">
                    <select wire:model.defer="inputOutType">
                        <option value="0" selected>Choose option...</option>
                        <option value="AM">AM</option>
                        <option value="PM">PM</option>
                    </select>

                    <i class="fas fa-chevron-down"></i>
                </div>
                @error('inputOutType')
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