<div class="block {{ $classActive['cancelled_policies'] ? 'edit_listing_post' : ''}}">
    <h2 class="h2-guests">Policies</h2>

    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Cancellation policy</h3>
            <div class="_width_text show_info">
                @if ( $content['cancellation_policy'] == 'Flexible' )
                    <span class="_txtec">Flexible: Full refund 1 day prior to arrival</span>
                @endif

                @if ( $content['cancellation_policy'] == 'Flexible or Non-refundable' )
                    <span class="_txtec">Flexible or Non-refundable: In addition to Flexible, offer a non-refundable option—guests pay 10% less, but you keep your payout no matter when they cancel.</span>
                @endif

                @if ( $content['cancellation_policy'] == 'Moderate' )
                    <span class="_txtec">Moderate: Full refund 5 days prior to arrival</span>
                @endif

                @if ( $content['cancellation_policy'] == 'Moderate or Non-refundable' )
                    <span class="_txtec">Moderate or Non-refundable: In addition to Moderate, offer a non-refundable option—guests pay 10% less, but you keep your payout no matter when they cancel.</span>
                @endif

                @if ( $content['cancellation_policy'] == 'Firm' )
                    <span class="_txtec">Firm: Full refund for cancellations up to 30 days before check-in. If booked fewer than 30 days before check-in, full refund for cancellations made within 48 hours of booking and at least 14 days before check-in. After that, 50% refund up to 7 days before check-in. No refund after that.</span>
                @endif

                @if ( $content['cancellation_policy'] == 'Firm or Non-refunfable' )
                    <span class="_txtec">Firm or Non-refunfable: In addition to Firm, offer a non-refundable option—guests pay 10% less, but you keep your payout no matter when they cancel.</span>
                @endif

                @if ( $content['cancellation_policy'] == 'Strict' )
                    <span class="_txtec">Strict: Full refund for cancellations made within 48 hours of booking, if the check-in date is at least 14 days away. 50% refund for cancellations made at least 7 days before check-in. No refunds for cancellations made within 7 days of check-in.</span>
                @endif

                @if ( $content['cancellation_policy'] == 'Strict or Non-refundable' )
                    <span class="_txtec">Strict or Non-refundable: In addition to Strict, offer a non-refundable option—guests pay 10% less, but you keep your payout no matter when they cancel.</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Choose the policy that will apply to stays under 28 nights.</p>
            </div>

            <form wire:submit.prevent="submitCancelledPolicies" class="show_form_input" style="margin-top: 30px;">
                <div class="fx fx-fd-c" style="gap: 30px;">
                    <div>
                        <label class="block-lb fx-jc-fs" style="gap: 17px;">
                            <input type="radio" name="cancel_policy" wire:model.defer="content.cancellation_policy" value="Flexible">
                            <div class="before_check">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <h3 class="_txteh" style="margin-bottom: 7px;">Flexible</h3>
                                    <p class="_txtec">Full refund 1 day prior to arrival</p>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div>
                        <label class="block-lb fx-jc-fs" style="gap: 17px;">
                            <input type="radio" name="cancel_policy" wire:model.defer="content.cancellation_policy" value="Flexible or Non-refundable">
                            <div class="before_check">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <h3 class="_txteh">Flexible or Non-refundable</h3>
                                    <p class="_txtec" style="margin: 8px 0;">In addition to Flexible, offer a non-refundable option—guests pay 10% less, but you keep your payout no matter when they cancel.</p>
                                    <a href="#" class="_txtehlinear">Learn more</a>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div>
                        <label class="block-lb fx-jc-fs" style="gap: 17px;">
                            <input type="radio" name="cancel_policy" wire:model.defer="content.cancellation_policy" value="Moderate">
                            <div class="before_check" style="margin-top: 9px;">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <h3 class="_txteh" style="margin-bottom: 7px;">Moderate</h3>
                                    <p class="_txtec">Full refund 5 days prior to arrival</p>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div>
                        <label class="block-lb fx-jc-fs" style="gap: 17px;">
                            <input type="radio" name="cancel_policy" wire:model.defer="content.cancellation_policy" value="Moderate or Non-refundable">
                            <div class="before_check">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <h3 class="_txteh" style="margin-bottom: 7px;">Moderate or Non-refundable</h3>
                                    <p class="_txtec">In addition to Moderate, offer a non-refundable option—guests pay 10% less, but you keep your payout no matter when they cancel.</p>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div>
                        <label class="block-lb fx-jc-fs" style="gap: 17px;">
                            <input type="radio" name="cancel_policy" wire:model.defer="content.cancellation_policy" value="Firm">
                            <div class="before_check" style="margin-top: 9px;">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <div class="fx fx-ai-c" style="gap: 15px; margin-bottom: 3px;">
                                        <h3 class="_txteh">Firm</h3>
                                    </div>
                                    <p class="_txtec">Full refund for cancellations up to 30 days before check-in. If booked fewer than 30 days before check-in, full refund for cancellations made within 48 hours of booking and at least 14 days before check-in. After that, 50% refund up to 7 days before check-in. No refund after that.</p>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div>
                        <label class="block-lb fx-jc-fs" style="gap: 17px;">
                            <input type="radio" name="cancel_policy" wire:model.defer="content.cancellation_policy" value="Firm or Non-refunfable">
                            <div class="before_check" style="margin-top: 9px;">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <div class="fx fx-ai-c" style="gap: 15px; margin-bottom: 3px;">
                                        <h3 class="_txteh">Firm or Non-refunfable</h3>
                                    </div>
                                    <p class="_txtec">In addition to Firm, offer a non-refundable option—guests pay 10% less, but you keep your payout no matter when they cancel.</p>
                                    <a href="#" class="_txtehlinear" style="margin-top: 8px;">Learn more</a>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div>
                        <label class="block-lb fx-jc-fs" style="gap: 17px;">
                            <input type="radio" name="cancel_policy" wire:model.defer="content.cancellation_policy" value="Strict">
                            <div class="before_check">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <h3 class="_txteh" style="margin-bottom: 7px;">Strict</h3>
                                    <p class="_txtec">Full refund for cancellations made within 48 hours of booking, if the check-in date is at least 14 days away. 50% refund for cancellations made at least 7 days before check-in. No refunds for cancellations made within 7 days of check-in.</p>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div>
                        <label class="block-lb fx-jc-fs" style="gap: 17px;">
                            <input type="radio" name="cancel_policy" wire:model.defer="content.cancellation_policy" value="Strict or Non-refundable">
                            <div class="before_check">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <h3 class="_txteh">Strict or Non-refundable</h3>
                                    <p class="_txtec" style="margin: 8px 0;">In addition to Strict, offer a non-refundable option—guests pay 10% less, but you keep your payout no matter when they cancel.</p>
                                    <a href="#" class="_txtehlinear">Learn more</a>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                @error('cancellation_policy')
                    <div style="margin-top: 20px; display: block;" class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror

                <div class="w100" style="margin-top: 39px;">
                    <h3 class="_txteh">Long-term stay cancellation policy</h3>
                    <div class="_width_text">
                        <div class="fx fx-fd-c" style="gap: 7px;">
                            <p class="_txtec">For guests who book 28 nights or more</p>
                            <p class="_txtec">Full refund if cancelled within 48 hours of booking and at least 28 days before check-in. After that, the first 30 days of the stay are non-refundable.</p>
                            <a href="#" class="_txtehlinear" style="margin-top: 7px;">Learn more</a>
                        </div>
                    </div>
                </div>

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 30px;">
                    <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("cancelled_policies")'>
                        <span>Cancel</span>
                    </div>
                    <button class="btn-celest">Save</button>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("cancelled_policies")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['instantBook'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Instant Book</h3>
            <div class="_width_text show_info">
                @if ( $content['instant_book'] === 'on' )
                    <span class="_txtec">Instant Book On - Guests who meet all your requirements can book instantly. Others will need to send a reservation request. You can cancel 100% penalty-free if you're ever uncomfortable with a reservation.</span>
                @endif

                @if ( $content['instant_book'] === 'off' )
                    <span class="_txtec">Instant Book Off - All guests must send a reservation request</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <span class="_txtec">Choose how guests will book your home.</span>
            </div>

            <form wire:submit.prevent="submitInstanBook" class="show_form_input" style="margin-top: 30px;">
                <div class="fx fx-fd-c" style="gap: 30px;">
                    <div>
                        <label class="block-lb fx-jc-fs" style="gap: 17px;">
                            <input type="radio" name="instant_book" wire:model.defer="content.instant_book" value="on">
                            <div class="before_check" style="margin-top: 9px;">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <h3 class="_txteh" style="margin-bottom: 7px;">Instant Book On</h3>
                                    <p class="_txtec">Guests who meet all your requirements can book instantly. Others will need to send a reservation request. You can cancel 100% penalty-free if you're ever uncomfortable with a reservation.</p>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div>
                        <label class="block-lb fx-jc-fs" style="gap: 17px;">
                            <input type="radio" name="instant_book" wire:model.defer="content.instant_book" value="off">
                            <div class="before_check">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <div class="fx fx-ai-c" style="gap: 15px; margin-bottom: 3px;">
                                        <h3 class="_txteh">Instant Book Off</h3>
                                        <span class="btn_lc">Recommended</span>
                                    </div>
                                    <p class="_txtec">All guests must send a reservation request</p>
                                </div>
                            </div>
                        </label>
                    </div>

                    @error('instant_book')
                        <div style="margin-top: 20px; display: block;" class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("instantBook")'>
                            <span>Cancel</span>
                        </div>
                        <button class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("instantBook")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['checkin_window'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Check-in window</h3>
            <div class="_width_text show_info">
                @if ( $content['checkin_window_start']['time'] != '' )
                    <span class="_txtec">{{ $content['checkin_window_start']['time'] }} {{ $content['checkin_window_start']['type'] }} - {{ $content['checkin_window_end']['time'] }} {{ $content['checkin_window_end']['type'] }} (next day)</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <form wire:submit.prevent="submitCheckinWindow" class="show_form_input" style="margin-top: 29px;">
                <div class="fx fx-fd-c" style="gap: 30px;">

                    <div class="fx fx-fw-w" style="gap: 30px;">
                        <div class="mxw445">
                            <div class="txt-check-in">Select start time</div>
                            
                            <div class="selected-modal" style="margin: 0;">
                                <select wire:model.defer="content.checkin_window_start.time">
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

                        <div class="mxw100">
                            <div class="txt-check-in">Afternoon</div>

                            <div class="selected-modal" style="margin: 0;">
                                <select wire:model.defer="content.checkin_window_start.type">
                                    <option value="AM">AM</option>
                                    <option value="PM">PM</option>
                                </select>

                                <i class="fas fa-chevron-down"></i>
                            </div>
                            @error('checkin_window_start_type')
                                <div style="margin-top: 20px; display: block;" class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="fx fx-fw-w" style="gap: 30px;">
                        <div class="mxw445">
                            <div class="txt-check-in">Select end time</div>
                            
                            <div class="selected-modal" style="margin: 0;">
                                <select wire:model.defer="content.checkin_window_end.time">
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

                        <div class="mxw100">
                            <div class="txt-check-in">Afternoon</div>

                            <div class="selected-modal" style="margin: 0;">
                                <select wire:model.defer="content.checkin_window_end.type">
                                    <option value="AM">AM</option>
                                    <option value="PM">PM</option>
                                </select>

                                <i class="fas fa-chevron-down"></i>
                            </div>
                            @error('checkin_window_end_type')
                                <div style="margin-top: 20px; display: block;" class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft" wire:click='disabledClass("checkin_window")'>
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
                @if ( $content['checkout_time']['time'] != '' )
                    <span class="_txtec">{{ $content['checkout_time']['time'] }} {{ $content['checkout_time']['type'] }}</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <form wire:submit.prevent="submitCheckTime" class="show_form_input" style="margin-top: 30px;">
                <div class="fx fx-fd-c" style="gap: 30px;">
                    <div class="fx fx-fw-w" style="gap: 30px;">
                        <div class="mxw445">
                            <div class="txt-check-in">Select end time</div>
                            
                            <div class="selected-modal" style="margin: 0;">
                                <select wire:model.defer="content.checkout_time.time">
                                    <option value="0" selected>Choose option...</option>
                                    @foreach ($content['time'] as $element)
                                        <option value="{{ $element }}">{{ $element }} (next day)</option>
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

                        <div class="mxw100">
                            <div class="txt-check-in">Afternoon</div>

                            <div class="selected-modal" style="margin: 0;">
                                <select wire:model.defer="content.checkout_time.type">
                                    <option value="AM">AM</option>
                                    <option value="PM">PM</option>
                                </select>

                                <i class="fas fa-chevron-down"></i>
                            </div>
                            @error('checkout_time_type')
                                <div style="margin-top: 20px; display: block;" class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="fx fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("check_time")'>
                            <span>Cancel</span>
                        </div>
                        <button class="btn-celest">Save</button>
                    </div>
                </div>

           {{--      <div class="_flfpc">
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
                </div> --}}
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

<div class="block {{ $classActive['secury_depot'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Security deposit</h3>
            <div class="_width_text show_info">
                @if ( $content['security_deposit'] != '' )
                    <span class="_txtec">{{ $content['security_deposit'] }}$ deposit.</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">If you submit a damage claim within 14 days of checkout, guests will be responsible for damages up to this amount.</p>
            </div>

            <form wire:submit.prevent="submitSecureDeposit" class="show_form_input" style="margin-top: 30px;">
                <div class="_flfpc mxw445">
                    <label class="before_icon_input @error('security_deposit') error_input @enderror">
                        <span class="_txtec">$</span>
                        <input type="text" class="number" wire:model.defer="content.security_deposit">
                    </label>
                    @error('security_deposit')
                        <div class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 30px;">
                    <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("secury_depot")'>
                        <span>Cancel</span>
                    </div>
                    <button class="btn-celest">Save</button>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("secury_depot")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>
