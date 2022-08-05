<form wire:submit.prevent="SubmitLastMinute" class="show_form_input" style="margin-top: 30px;">
    <div class="fx fx-fd-c" style="gap: 30px;">
        <div class="cont_add_another fx fx-fd-c" style="gap: 30px;">
            @foreach($inputsLast as $key => $value)
                <div class="block_input">
                    <div class="fx fx-fw-w" style="gap: 30px;">
                        <div class="mx480">
                            <div class="txt-check-in">Day before arrival</div>
                            <div class="selected-modal mxw576" style="margin: 0;">
                                <select wire:model="inputLast.{{ $value }}" class="@error('inputLast.'.$value) error_input @enderror">
                                    <option selected value="0">Choose option....</option>
                                    <option value="1">1 Days</option>
                                    <option value="2">2 Days</option>
                                    <option value="3">3 Days</option>
                                    <option value="4">4 Days</option>
                                    <option value="5">5 Days</option>
                                </select>

                                <i class="fas fa-chevron-down"></i>
                            </div>
                            @error('inputLast.'.$value)
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
                                    <input type="text" class="number" style="padding: 16px 0 16px 16px;" maxlength="2" wire:model="inputLastDiscount.{{ $value }}">
                                    <span class="_txtec" style="padding: 16px 16px 16px 0;">%</span>
                                </label>
                                @error('inputLastDiscount.'.$value)
                                    <div style="display: block;" class="_txterror">
                                        <i class="fas fa-exclamation-circle icon1"></i> 
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button class="_btnsmleft" style="margin-top: 10px;" wire:click.prevent="removeInputsLast({{$value}})">
                        <span>Remove</span>
                    </button>
                </div>
            @endforeach
        </div>

        <div class="_btnsmleft" style="display: {{ $disableAddLast ? 'none' : 'block' }};" wire:click.prevent="addInputsLast({{ $iLast }})">
            <span>Add another length-of-stay</span>
        </div>

        <div class="fx-fd-c _bgpadd-f" style="margin: 19px 0 30px; gap: 11px; padding: 35px 49px 35px 50px;">
            <div class="_txteh">About last-minute discounts</div>

            <p class="_txtec">Last-minute discounts must be less than 28 days. You can add multiple last-minute discounts. These discounts won't be shown to guests.</p>

            <p class="_txtec">When a last-minute discount only applies to some nights within a reservation, it'll be applied to those nights but not the others.</p>
        </div>

        <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
            <div class="_btnsmleft click_cancel_listing" wire:click="reloadInputs">
                <span>Cancel</span>
            </div>
            <button type="submit" class="btn-celest">Save</button>
        </div>
    </div>
</form>
