<div class="block {{ $classActive['arrival_instr'] ? 'edit_listing_post' : ''}}">
    <h2 class="h2-guests">Arrival details</h2>

    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Check-in instructions</h3>
            <div class="_width_text show_info">
                <span class="_txtec">{{ $content['arrival_instructions'] }}</span>
            </div>

            <div class="_width_text show_text">
                <span class="_txtec">Check-in method</span>
            </div>

            <form wire:submit.prevent="submitArrivalInstuct" class="show_form_input" style="margin-top: 30px;">
                <div class="fx fx-fd-c" style="gap: 30px;">
                    <div>
                        <label class="block-lb fx-ai-c fx-jc-fs">
                            <input type="radio" name="check_instructions" wire:model.defer="content.arrival_instructions" value="Smart lock">
                            <div class="before_check">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <h3 class="_txteh">Smart lock</h3>
                                    <span class="_txtec">A lock guests open with a mobile app or keypad</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div>
                        <label class="block-lb fx-ai-c fx-jc-fs">
                            <input type="radio" name="check_instructions" wire:model.defer="content.arrival_instructions" value="Keypad">
                            <div class="before_check">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <h3 class="_txteh">Keypad</h3>
                                    <span class="_txtec">Guests can open the door with a code</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div>
                        <label class="block-lb fx-ai-c fx-jc-fs">
                            <input type="radio" name="check_instructions" wire:model.defer="content.arrival_instructions" value="Lockbox">
                            <div class="before_check">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <h3 class="_txteh">Lockbox</h3>
                                    <span class="_txtec">The key is stored in a small safe, which guests can open with a code</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div>
                        <label class="block-lb fx-ai-c fx-jc-fs">
                            <input type="radio" name="check_instructions" wire:model.defer="content.arrival_instructions" value="Building staff">
                            <div class="before_check">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <h3 class="_txteh">Building staff</h3>
                                    <span class="_txtec">Someone is available 24 hours a day to let guests in</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div>
                        <label class="block-lb fx-ai-c fx-jc-fs">
                            <input type="radio" name="check_instructions" wire:model.defer="content.arrival_instructions" value="Host greets you">
                            <div class="before_check">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <h3 class="_txteh">Host greets you</h3>
                                    <span class="_txtec">A host or co-host will meet guests to exchange the key</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div>
                        <label class="block-lb fx-ai-c fx-jc-fs">
                            <input type="radio" name="check_instructions" wire:model.defer="content.arrival_instructions" value="Other">
                            <div class="before_check">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <h3 class="_txteh">Other</h3>
                                    <span class="_txtec">Guests can use a different method not listed above</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    @error('arrival_instructions')
                        <div  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("arrival_instr")'>
                            <span>Cancel</span>
                        </div>
                        <button class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("arrival_instr")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['wifi_details'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Wi-fi details</h3>
            @if ( $content['wifi_details'] != '' && $content['wifi_details'] != 0 )
                <span class="_txtec">{{ $content['wifi_details'] }}</span>
            @else
                <span class="_txtec">Not set</span>
            @endif

            <form wire:submit.prevent="submitWifiDetails" class="show_form_input">
                <div class="fx fx-fd-c" style="gap: 30px;">
                    <div class="_flfpc">
                        <div class="txt-check-in">Wifi network name</div>
                        <input type="text" class="_numcard @error('wifi_details') error_input @enderror" wire:model.defer="content.wifi_details">
                        @error('wifi_details')
                            <div  class="_txterror">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("wifi_details")'>
                            <span>Cancel</span>
                        </div>
                        <button class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("wifi_details")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>