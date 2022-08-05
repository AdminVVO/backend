<form wire:submit.prevent="SubmitCheckin" class="show_form_input" style="margin-top: 29px;">
    <div class="fx fx-fd-c" style="gap: 30px;">
        <div class="fx fx-fw-w" style="gap: 30px;">
            <div class="mxw445">
                <div class="txt-check-in">Select start time</div>
                
                <div class="selected-modal @error('inputStart') error_input @enderror" style="margin: 0;">
                    <select wire:model.defer="inputStart">
                        @foreach ($time as $element)
                            <option value="{{ $element }}">{{ $element }}</option>
                        @endforeach
                    </select>

                    <i class="fas fa-chevron-down"></i>
                </div>
                @error('inputStart')
                    <div class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mxw100">
                <div class="txt-check-in">Afternoon</div>

                <div class="selected-modal @error('inputStartType') error_input @enderror" style="margin: 0;">
                    <select wire:model.defer="inputStartType">
                        <option value="0" selected>Choose option...</option>
                        <option value="AM">AM</option>
                        <option value="PM">PM</option>
                    </select>

                    <i class="fas fa-chevron-down"></i>
                </div>
                @error('inputStartType')
                    <div class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="fx fx-fw-w" style="gap: 30px;">
            <div class="mxw445">
                <div class="txt-check-in">Select end time</div>
                
                <div class="selected-modal @error('inputEnd') error_input @enderror" style="margin: 0;">
                    <select wire:model.defer="inputEnd">
                        @foreach ($time as $element)
                            <option value="{{ $element }}">{{ $element }}</option>
                        @endforeach
                    </select>

                    <i class="fas fa-chevron-down"></i>
                </div>
                @error('inputEnd')
                    <div class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mxw100">
                <div class="txt-check-in">Afternoon</div>

                <div class="selected-modal @error('inputEndType') error_input @enderror" style="margin: 0;">
                    <select wire:model.defer="inputEndType">
                        <option value="0" selected>Choose option...</option>
                        <option value="AM">AM</option>
                        <option value="PM">PM</option>
                    </select>

                    <i class="fas fa-chevron-down"></i>
                </div>
                @error('inputEndType')
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