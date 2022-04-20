<div class="content_form_inputs_previews">
    <div class="fx fx-jc-sb fx-ai-c fx-fw-w" style="gap: 12px;">
        <h2 class="h2_publish">Reservation Form</h2>
        <h2 class="h2_publish">Source: <span class="h2_publishgris">0702838</span></h2>
    </div>

    <form wire:submit.prevent="submitReservationsSource" class="content_form_inputs_previews">
        <div class="content_celest_form">
            <div class="block">
                <div class="txt-check-in">VVO Confirmation Number:</div>
                <input type="text" class="_numcard txt_upper" value="{{ $content['vvo_confirm'] }}" disabled>
            </div>

            <div class="block">
                <div class="txt-check-in">Date</div>
                <input type="text" placeholder="dd/mm/yyyy" value="{{ Carbon\Carbon::parse( $content['date'], 'UTC')->locale('en')->isoFormat('dddd, MMMM D, YYYY') }}" maxlength="10" class="_input-mod" disabled>
            </div>
        </div>


        <div class="content_celest_form">
            <div class="block">
                <div class="txt-check-in">Email:</div>
                <input type="text" class="_numcard _txtcapit" disabled value="{{ $content['request'] }}">
            </div>

            <div class="block">
                <div class="txt-check-in">Hotel</div>
                <input type="text" class="_numcard _txtcapit" disabled value="{{ $content['name_site'] }}">
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

            <div class="block">
                <div class="txt-check-in">city:</div>
                <input type="text" class="_numcard _txtcapit @error('city') error_input @enderror" wire:model.defer="content.city">
                @error('city')
                <div class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="content_celest_form">
            <div class="block">
                <div class="txt-check-in">State:</div>
                <input type="text" class="_numcard _txtcapit @error('state_address') error_input @enderror" wire:model.defer="content.state_address">
                @error('state_address')
                <div class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="block">
                <div class="txt-check-in">Zip Code:</div>
                <input type="text" class="_numcard input_numberzipcode @error('zip_code') error_input @enderror" wire:model.defer="content.zip_code">
                @error('zip_code')
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
                <div class="txt-check-in">Combined Yearly Income: (any amount higher than 60k):</div>
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
                <div class="txt-check-in">Room Type:</div>
                <input type="text" class="_numcard" value="{{ $content['room_type'] }}" disabled>
            </div>

            <div class="block">
                <div class="txt-check-in">Number of Guests:</div>
                <input type="number" class="_numcard @error('guest_number') error_input @enderror" wire:model.defer="content.guest_number">
                @error('guest_number')
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