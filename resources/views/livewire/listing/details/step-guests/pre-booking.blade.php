<div class="block {{ $classActive['checkin_window'] ? 'edit_listing_post' : ''}}">
    <h2 class="h2-guests">Pre-booking details</h2>

    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Check-in window</h3>
            <div class="_width_text show_info">
                @if ( $content['checkin_window_start'] != '' )
                    <div class="_width_text show_info">
                        <span class="_txtec">{{ $content['checkin_window_start'] }} - {{ $content['checkin_window_end'] }} (next day)</span>
                    </div>
                @else
                    <div class="_width_text show_info">
                        <span class="_txtec">Not set</span>
                    </div>
                @endif
            </div>

            <form wire:submit.prevent="submitCheckinWindowBooking" class="show_form_input">
                <div class="fx fx-fd-c" style="gap: 30px;">
                    <div class="_flfpc">
                        <div class="block_date">
                            <div class="txt-check-in">Select Start Time</div>
                            <div class="selected-modal" style="margin: 0;">
                                <select wire:model.defer="content.checkin_window_start">
                                    <option value="0" selected>Choose option...</option>
                                    @foreach ($content['time'] as $element)
                                        <option value="{{ $element }}">{{ $element }}</option>
                                    @endforeach
                                </select>

                                <i class="fas fa-chevron-down"></i>
                            </div>
                            @error('checkin_window_start')
                                <div style="margin-top: 20px; display: block;" class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="block_date">
                            <div class="txt-check-in">Select End Time</div>
                            <div class="selected-modal" style="margin: 0;">
                                <select wire:model.defer="content.checkin_window_end">
                                    <option value="0" selected>Choose option...</option>
                                    @foreach ($content['time'] as $element)
                                        <option value="{{ $element }}">{{ $element }} (next day)</option>
                                    @endforeach
                                </select>

                                <i class="fas fa-chevron-down"></i>
                            </div>
                            @error('checkin_window_end')
                                <div style="margin-top: 20px; display: block;" class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("checkin_window")'>
                            <span>Cancel</span>
                        </div>
                        <button class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("checkin_window")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['check_time'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Checkout time</h3>
            <div class="_width_text show_info">
                @if ( $content['checkout_time'] != '' )
                    <div class="_width_text show_info">
                        <span class="_txtec">{{ $content['checkout_time'] }}</span>
                    </div>
                @else
                    <div class="_width_text show_info">
                        <span class="_txtec">Not set</span>
                    </div>
                @endif
            </div>

            <form wire:submit.prevent="submitCheckTimeBooking" class="show_form_input">
                <div class="_flfpc">
                    <div class="block_date">
                        <div class="txt-check-in">Select time</div>
                        <div class="selected-modal" style="margin: 0;">
                            <select wire:model.defer="content.checkout_time">
                                <option value="0" selected>Choose option...</option>
                                @foreach ($content['time'] as $element)
                                    <option value="{{ $element }}">{{ $element }}</option>
                                @endforeach
                            </select>

                            <i class="fas fa-chevron-down"></i>
                        </div>
                        @error('checkout_time')
                            <div style="margin-top: 20px; display: block;" class="_txterror">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                    <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("check_time")'>
                        <span>Cancel</span>
                    </div>
                    <button class="btn-celest">Save</button>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("check_time")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['check_time'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Interaction with guests</h3>
            <div class="_width_text show_info">
                @if ( $content['interaction_with_guests'] != '' )
                    @if ( $content['interaction_with_guests'] === 'I plan' )
                        <span class="_txtec">I plan to socialize with my guests:</span>
                        <p class="_txtec">{{ $content['interaction_with_guests_comment'] }}</p>
                    @endif

                    @if ( $content['interaction_with_guests'] === 'I give' )
                        <span class="_txtec">I give my guests space but am available when needed:</span>
                        <p class="_txtec">{{ $content['interaction_with_guests_comment'] }}</p>
                    @endif

                    @if ( $content['interaction_with_guests'] === 'I wont' )
                        <span class="_txtec">I won't be available in person:</span>
                        <p class="_txtec">{{ $content['interaction_with_guests_comment'] }}</p>
                    @endif
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Tell guests if you'll available to ofter help throughout their stay and how you'll keep in touch with them.</p>
            </div>

            <form wire:submit.prevent="submitIteration" class="show_form_input">
                <div class="fx fx-fd-c" style="gap: 18px;">
                    <div>
                        <label class="block-lb fx-ai-c fx-jc-fs">
                            <input type="radio" name="interaction_guests" wire:model.defer="content.interaction_with_guests" value="I plan">
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
                            <input type="radio" name="interaction_guests" wire:model.defer="content.interaction_with_guests" value="I give">
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
                            <input type="radio" name="interaction_guests" wire:model.defer="content.interaction_with_guests" value="I wont">
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
                    <textarea wire:model.defer="content.interaction_with_guests_comment" class="_txta-modls @error('interaction_with_guests_comment') error_input @enderror" rows="3" style="height: auto;"></textarea>
                    @error('interaction_with_guests_comment')
                        <div class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                    @error('interaction_with_guests')
                        <div class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 25px;">
                    <div class="_btnsmleft click_cancel_listing">
                        <span>Cancel</span>
                    </div>
                    <button class="btn-celest">Save</button>
                </div>
            </form>
        </div>

        <div class="_btnsm edit">
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>