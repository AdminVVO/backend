<div class="block {{ $classActive['location'] ? 'edit_listing_post' : ''}}">
    <h2 class="h2-guests">Post-booking details</h2>

    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Address</h3>
            <div class="_width_text show_info">
                @if ( $content['country'] != '' )
                    <p class="_txtec">{{ $content['location'] }}</p>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <form wire:submit.prevent="submitAddressBooking" class="show_form_input">
                <div class="fx fx-fd-c" style="gap: 30px;">
                    <div class="_flfpc" style="gap: 30px;">
                        <div class="block_date">
                            <div class="txt-check-in">Country / Región</div>
                            <input type="text" class="_numcard @error('country') error_input @enderror" wire:model.defer="content.country">
                            @error('country')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="block_date">
                            <div class="txt-check-in">Street</div>
                            <input type="text" class="_numcard _txtcapit @error('street') error_input @enderror" wire:model.defer="content.street">
                            @error('street')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                            <span class="_txtec16" style="margin-top: 12px;">e.g. 123 Main St.</span>
                        </div>
                    </div>

                    <div class="_flfpc" style="gap: 30px;">
                        <div class="block_date">
                            <div class="txt-check-in">City</div>
                            <input type="text" class="_numcard _txtcapit @error('city') error_input @enderror" wire:model.defer="content.city">
                            @error('city')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                            <p class="_txtec16" style="margin-top: 12px;">e.g. San Francisco</p>
                        </div>

                        <div class="block_date">
                            <div class="txt-check-in">State</div>
                            <input type="text" class="_numcard _txtcapit @error('state') error_input @enderror" wire:model.defer="content.state">
                            @error('state')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                            <p class="_txtec16" style="margin-top: 12px;">e.g. CA</p>
                        </div>
                    </div>

                    <div class="_flfpc">
                        <div class="block_date">
                            <div class="txt-check-in">Zip Code</div>
                            <input type="number" class="_numcard input_numberzipcode @error('zip_code') error_input @enderror" wire:model.defer="content.zip_code">
                            @error('zip_code')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                            <p class="_txtec16" style="margin-top: 12px;">e.g. 94103</p>
                        </div>
                    </div>

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("location")'>
                            <span>Cancel</span>
                        </div>
                        <button type="submit" class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("location")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['directions'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Directions</h3>
            <div class="_width_text show_info">
                @if ( $content['directions'] != '' )
                    <span class="_txtec">{{ $content['directions'] }}</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <form wire:submit.prevent="submitDirections" class="show_form_input">
                <div class="_flfpc">
                    <textarea class="_txta-modls @error('directions') error_input @enderror" wire:model.defer="content.directions" rows="3" style="height: auto;"></textarea>
                    @error('directions')
                        <div  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 30px;">
                    <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("directions")'>
                        <span>Cancel</span>
                    </div>
                    <button class="btn-celest">Save</button>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("directions")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['guest_manual'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Guest manual</h3>
            <div class="_width_text show_info">
                @if ( $content['guest_manual'] != '' )
                    <span class="_txtec">{{ $content['guest_manual'] }}</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Give guests tips about your listing, like how to access the internet or turn on the hot water</p>
            </div>

            <form wire:submit.prevent="submitGuesManual" class="show_form_input">
                <div class="_flfpc">
                    <textarea class="_txta-modls @error('guest_manual') error_input @enderror" wire:model.defer="content.guest_manual" rows="3" style="height: auto;"></textarea>
                    @error('guest_manual')
                        <div  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 30px;">
                    <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("guest_manual")'>
                        <span>Cancel</span>
                    </div>
                    <button class="btn-celest">Save</button>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("guest_manual")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>