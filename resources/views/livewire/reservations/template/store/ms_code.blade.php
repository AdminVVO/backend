<div class="content_form_inputs_previews">
    <div class="fx fx-jc-sb fx-ai-c fx-fw-w" style="gap: 12px;">
        <h2 class="h2_publish">Reservation Form</h2>
        <h2 class="h2_publish">MS Code: <span class="h2_publishgris">0702838</span></h2>
    </div>

    <form wire:submit.prevent="submitReservationsMSCode" class="content_form_inputs_previews">
        <div class="content_celest_form">
            <div class="block">
                <div class="txt-check-in">VVO Confirmation Number:</div>
                <input type="text" class="_numcard txt_upper" value="{{ $content['vvo_confirm'] }}" disabled>
            </div>

            <div class="block">
                <div class="txt-check-in">Date</div>
                <input type="text" name="calendar" placeholder="dd/mm/yyyy" value="{{ $content['date'] }}" maxlength="10" class="_input-mod" disabled>
            </div>
        </div>

        <div class="content_celest_form">
            <div class="block">
                <div class="txt-check-in">Costumber Name:</div>
                <input type="text" class="_numcard _txtcapit @error('costumb_name') error_input @enderror" wire:model.defer="content.costumb_name">
                @error('costumb_name')
                <div class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="content_celest_form">
            <div class="block">
                <div class="txt-check-in">Spouse Name:</div>
                <input type="text" class="_numcard _txtcapit @error('spouse_name') error_input @enderror" wire:model.defer="content.spouse_name">
                @error('spouse_name')
                <div class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="content_celest_form">
            <div class="block">
                <div class="txt-check-in">Address:</div>
                <input type="text" class="_numcard _txtcapit @error('address') error_input @enderror" wire:model.defer="content.address">
                @error('address')
                <div class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="content_celest_form">
            <div class="block">
                <div class="txt-check-in">Phone:</div>
                <input type="number" class="_numcard @error('phone') error_input @enderror" wire:model.defer="content.phone">
                @error('phone')
                <div class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="block">
                <div class="txt-check-in">Occupation:</div>
                <input type="text" class="_numcard _txtcapit @error('occupation') error_input @enderror" wire:model.defer="content.occupation">
                @error('occupation')
                <div class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="content_celest_form">
            <div class="block">
                <div class="txt-check-in">Spouse Occupation:</div>
                <input type="text" class="_numcard _txtcapit @error('spouse_occupation') error_input @enderror" wire:model.defer="content.spouse_occupation">
                @error('spouse_occupation')
                <div class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="block">
                <div class="txt-check-in">Marital Status:</div>
                <input type="text" class="_numcard _txtcapit @error('status_marital') error_input @enderror" wire:model.defer="content.status_marital">
                @error('status_marital')
                <div class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="block">
                <div class="txt-check-in">Ages:</div>
                <input type="text" class="_numcard @error('ages') error_input @enderror" wire:model.defer="content.ages">
                @error('ages')
                <div class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="content_celest_form">
            <div class="block">
                <div class="txt-check-in">Combined Yearly Income: (any amount higher than 55k):</div>
                <input type="text" class="_numcard @error('combine_amount') error_input @enderror" wire:model.defer="content.combine_amount">
                @error('combine_amount')
                <div class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="block">
                <div class="txt-check-in">Credit Card Type:</div>
                <div class="checkbox-item checkbox-item_img" style="height: 100%;">
                    <label class="check_click" style="gap: 6px;">
                        <input type="radio" name="credit_type" wire:model.defer="content.type_card" value="visa">
                        <span class="before_checkblu"></span>

                        <div class="block_img">
                            <img src="{{ URL::asset('assets/img/card/visa.jpg') }}" alt="">
                        </div>
                    </label>

                    <label class="check_click" style="gap: 6px;">
                        <input type="radio" name="credit_type" wire:model.defer="content.type_card" value="mastercard">
                        <span class="before_checkblu"></span>

                        <div class="block_img">
                            <img src="{{ URL::asset('assets/img/card/mastercard.jpg') }}" alt="">
                        </div>
                    </label>

                    <label class="check_click" style="gap: 6px;">
                        <input type="radio" name="credit_type" wire:model.defer="content.type_card" value="amex">
                        <span class="before_checkblu"></span>

                        <div class="block_img">
                            <img src="{{ URL::asset('assets/img/card/amex.jpg') }}" alt="">
                        </div>
                    </label>

                    <label class="check_click" style="gap: 6px;">
                        <input type="radio" name="credit_type" wire:model.defer="content.type_card" value="paypal">
                        <span class="before_checkblu"></span>

                        <div class="block_img">
                            <img src="{{ URL::asset('assets/img/card/paypal.jpg') }}" alt="">
                        </div>
                    </label>

                    <label class="check_click" style="gap: 6px;">
                        <input type="radio" name="credit_type" wire:model.defer="content.type_card" value="discover">
                        <span class="before_checkblu"></span>

                        <div class="block_img">
                            <img src="{{ URL::asset('assets/img/card/discover.jpg') }}" alt="">
                        </div>
                    </label>
                    @error('type_card')
                    <div class="_txterror" style="display: block;">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="content_celest_form">
            <div class="block">
                <div class="txt-check-in">Resort:</div>
                <input type="text" class="_numcard _txtcapit" disabled value="{{ $content['name_site'] }}">
            </div>

            <div class="block">
                <div class="txt-check-in">Unit:</div>
                <input type="number" class="_numcard @error('guest_number') error_input @enderror" wire:model.defer="content.guest_number">
                @error('guest_number')
                    <div class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="content_celest_form">
            <div class="block">
                <div class="txt-check-in"># in the Party:</div>
                <input type="number" class="_numcard @error('in_party') error_input @enderror" wire:model.defer="content.in_party">
                @error('in_party')
                <div class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="block">
                <div class="txt-check-in"># of Nights:</div>
                <input type="number" class="_numcard @error('of_night') error_input @enderror" wire:model.defer="content.of_night">
                @error('of_night')
                <div class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <x-date-picker-dual
            id="datepicker"
            autocomplete="off"
        />
        @if( $errors->has('checkin') || $errors->has('checkout') )
            <div style="display: block;" class="_txterror">
                <i class="fas fa-exclamation-circle icon1"></i> 
                @if ( $errors->has('checkin') )
                    {{ $errors->first('checkin') }}
                @else
                    {{ $errors->first('checkout') }}
                @endif
            </div>
        @endif

        <div class="content_celest_form">
            <div class="block">
                <div class="txt-check-in">Preferred Tour Date:</div>
                    <x-date-picker-single
                        model="content.preferenc_tour"
                        id="datepicker"
                        autocomplete="off"
                    />
                    @error('preferenc_tour')
                        <div class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror

            </div>

            <div class="block">
                <div class="txt-check-in">Gifting:</div>
                <input type="text" class="_numcard @error('gifting') error_input @enderror" wire:model.defer="content.gifting">
                @error('gifting')
                <div class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        @if ( $reservation === null )
            <div class="fx fx-fw-w" style="gap: 15px;">
                <button class="btn-celest">Send Resort</button>
            </div>
        @else
            <div class="fx fx-fw-w" style="gap: 15px;">
                <a href="{{ route('ReservPreview', $content['id_reservation_forms']) }}" class="btn-red">Cancel</a>
                <button class="btn-celest">Save</button>
            </div>
        @endif
    </form>
</div>
