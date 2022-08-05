<form wire:submit.prevent="SubmitStays" class="show_form_input" style="margin-top: 19px;">
    <div class="fx fx-fd-c" style="gap: 30px;">
        <div class="cont_add_another fx fx-fd-c" style="gap: 30px;">
            @foreach($inputs as $key => $value)
                <div class="block_input">
                    <div class="fx fx-fw-w" style="gap: 30px;">
                        <div class="mx480">
                            <div class="txt-check-in">Length of stay</div>
                            <div class="selected-modal mxw576" style="margin: 0;">
                                <select wire:model="inputStays.{{ $value }}" class="@error('inputStays.'.$value) error_input @enderror">
                                    <option selected>Select length of stay</option>
                                    <option value="Weekly (1 week)">Weekly (1 week)</option>
                                    <option value="Monthly (4 weeks)">Monthly (4 weeks)</option>
                                    <option value="8 weeks">8 weeks</option>
                                    <option value="12 weeks">12 weeks</option>
                                </select>

                                <i class="fas fa-chevron-down"></i>
                            </div>
                            @error('inputStays.'.$value)
                                <div style="display: block;" class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mxw80">
                            <div class="_flfpc">
                                <div class="txt-check-in">Discount</div>

                                <label class="before_icon_input">
                                    <input type="text" class="number" style="padding: 16px 0 16px 16px;" maxlength="2" wire:model="inputStaysDiscount.{{ $value }}">
                                    <span class="_txtec" style="padding: 16px 16px 16px 0;">%</span>
                                </label>
                                @error('inputStaysDiscount.'.$value)
                                    <div style="display: block;" class="_txterror">
                                        <i class="fas fa-exclamation-circle icon1"></i> 
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button class="_btnsmleft" style="margin-top: 10px;" wire:click.prevent="removeInputs({{$value}})">
                        <span>Remove</span>
                    </button>
                </div>
            @endforeach
        </div>

        <div class="_btnsmleft" style="display: {{ $disableAdd ? 'none' : 'block' }};" wire:click.prevent="addInputs({{ $i }})">
            <span>Add another length-of-stay</span>
        </div>

        <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
            <div class="_btnsmleft click_cancel_listing" wire:click="reloadInputs">
                <span>Cancel</span>
            </div>
            <button type="submit" class="btn-celest">Save</button>
        </div>
    </div>
</form>