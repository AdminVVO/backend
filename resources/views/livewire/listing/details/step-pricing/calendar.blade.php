<div class="block {{ $classActive['advance_notice'] ? 'edit_listing_post' : ''}}">
    <h2 class="h2-guests">Calendar availability</h2>

    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Advance notice</h3>
            <div class="_width_text show_info">
                @if ( $content['advance_notice'] != '' && $content['advance_notice'] != 0 )
                    <div class="_width_text show_info">
                        <span class="_txtec">At least {{ $content['advance_notice'] }} day's notice.</span>
                    </div>
                @else
                    <div class="_width_text show_info">
                        <span class="_txtec">Not set</span>
                    </div>
                @endif
            </div>

            <form wire:submit.prevent="submitAdvanceNotic" class="show_form_input">
                <div class="fx fx-fd-c" style="gap: 23px;">
                    <div class="">
                        <div class="selected-modal mxw576" style="margin: 0;">
                            <select wire:model.lazy="content.advance_notice" class="@error('advance_notice') error_input @enderror">
                                <option selected value="0">Same day (customizable cutoff hour)</option>
                                <option value="1">At least 1 day's notice</option>
                                <option value="2">At least 2 day's notice</option>
                                <option value="3">At least 3 day's notice</option>
                                <option value="4">At least 4 day's notice</option>
                                <option value="5">At least 5 day's notice</option>
                            </select>

                            <i class="fas fa-chevron-down"></i>
                        </div>
                        @error('advance_notice')
                            <div  class="_txterror">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        @if ( $content['advance_notice'] != '' && $content['advance_notice'] != 0 )
                            <p class="_txtec">Your calendar is blocked {{ $content['advance_notice'] }} day from today.</p>
                        
                            <div class="fx fx-fd-c" style="margin-top: 25px; gap: 11px;">
                                <span class="_txtec">Today</span>

                                <table style="border-collapse: collapse; border-spacing: 0; width: 100%; margin: 0;">
                                    <tr>
                                        @for ($i = 0; $i <= $content['advance_notice'] - 1; $i++)
                                            <th class="cal_tod_br cal_tod_bg">
                                                @switch( $content['advance_notice'] )
                                                    @case(1)
                                                        <span class="_txtec16">{{ $i + 30 }}</span>
                                                        @break
                                                    @case(2)
                                                        <span class="_txtec16">{{ $i + 29 }}</span>
                                                        @break
                                                    @case(3)
                                                        <span class="_txtec16">{{ $i + 28 }}</span>
                                                        @break
                                                    @case(4)
                                                        <span class="_txtec16">{{ $i + 27 }}</span>
                                                        @break
                                                    @case(5)
                                                        <span class="_txtec16">{{ $i + 26 }}</span>
                                                        @break
                                                @endswitch
                                            </th>
                                        @endfor
                                        <th class="cal_tod_br cal_tod_icon">
                                            <span class="_txtec16">31</span>
                                            <i class="far fa-user-circle _i-verde40"></i>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                        @endif

                    </div>

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("advance_notice")'>
                            <span>Cancel</span>
                        </div>
                        <button class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("advance_notice")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['preparation'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Preparation time</h3>
            <div class="_width_text show_info">
                @if ( $content['preparation_time'] != '' && $content['preparation_time'] != 0 )
                    <div class="_width_text show_info">
                        <span class="_txtec">At least {{ $content['preparation_time'] }} day's preparation.</span>
                    </div>
                @else
                    <div class="_width_text show_info">
                        <span class="_txtec">Not set</span>
                    </div>
                @endif
            </div>

            <form wire:submit.prevent="submitPreparation" class="show_form_input">
                <div class="fx fx-fd-c" style="gap: 23px;">
                    <div class="">
                        <div class="selected-modal mxw576" style="margin: 0;">
                            <select wire:model.lazy="content.preparation_time" class="@error('preparation_time') error_input @enderror">
                                <option selected value="">Choose option...</option>
                                <option value="1">Block 1 nigth before and after each reservation</option>
                                <option value="2">Block 2 nigths before and after each reservation</option>
                                <option value="3">Block 3 nigths before and after each reservation</option>
                                <option value="4">Block 4 nigths before and after each reservation</option>
                                <option value="5">Block 5 nigths before and after each reservation</option>
                            </select>

                            <i class="fas fa-chevron-down"></i>
                        </div>
                        @error('preparation_time')
                            <div  class="_txterror">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        @if ( $content['preparation_time'] != '' && $content['preparation_time'] != 0 )
                            <p class="_txtec">The blocked {{ $content['preparation_time'] }} nights before and after each reservation are available.</p>
                        
                            <div class="fx fx-fd-c" style="margin-top: 25px; gap: 11px;">
                                <table style="border-collapse: collapse; border-spacing: 0; width: 100%; margin: 0;">
                                    <tr>
                                        @for ($i = 0; $i <= $content['preparation_time'] - 1; $i++)
                                            <th class="cal_tod_br cal_tod_bg">
                                                @switch( $content['preparation_time'] )
                                                    @case(1)
                                                        <span class="_txtec16">{{ $i + 10 }}</span>
                                                        @break
                                                    @case(2)
                                                        <span class="_txtec16">{{ $i + 9 }}</span>
                                                        @break
                                                    @case(3)
                                                        <span class="_txtec16">{{ $i + 8 }}</span>
                                                        @break
                                                    @case(4)
                                                        <span class="_txtec16">{{ $i + 7 }}</span>
                                                        @break
                                                    @case(5)
                                                        <span class="_txtec16">{{ $i + 6 }}</span>
                                                        @break
                                                @endswitch
                                            </th>
                                        @endfor
                                        <th class="cal_tod_br cal_tod_icon">
                                            <span class="_txtec16">11</span>
                                            <i class="far fa-user-circle _i-verde40"></i>
                                        </th>
                                        @for ($i = 0; $i <= $content['preparation_time'] - 1; $i++)
                                            <th class="cal_tod_br cal_tod_bg">
                                                <span class="_txtec16">{{ $i + 12 }}</span>
                                            </th>
                                        @endfor
                                    </tr>
                                </table>
                            </div>
                        @else
                            <p class="_txtec">The nights before and after each reservation are available.</p>
                        @endif

                        
                    </div>

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("preparation")'>
                            <span>Cancel</span>
                        </div>
                        <button class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("preparation")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['availability'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Availability window</h3>
            <div class="_width_text show_info">
                @if ( $content['availability_window'] != '' && $content['availability_window'] != 0 )
                    <div class="_width_text show_info">
                        <span class="_txtec">{{ $content['availability_window'] }} months in advance.</span>
                    </div>
                @else
                    <div class="_width_text show_info">
                        <span class="_txtec">Not set</span>
                    </div>
                @endif
            </div>

            <form wire:submit.prevent="submitAvailability" class="show_form_input">
                <div class="fx fx-fd-c" style="gap: 23px;">
                    <div class="">
                        <div class="selected-modal mxw576" style="margin: 0;">
                            <select wire:model.lazy="content.availability_window" class="@error('availability_window') error_input @enderror">
                                <option selected value="0">Choose option...</option>
                                <option value="1">1 months in advance</option>
                                <option value="2">2 months in advance</option>
                                <option value="3">3 months in advance</option>
                                <option value="4">4 months in advance</option>
                                <option value="5">5 months in advance</option>
                            </select>

                            <i class="fas fa-chevron-down"></i>
                        </div>
                        @error('availability_window')
                            <div  class="_txterror">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        @if ( $content['availability_window'] != 0 )
                            <p class="_txtec">Your listing isn't available after {{ $content['availability_window'] }} months from today.</p>
                        @endif

                        <div class="fx fx-fd-c" style="margin-top: 25px; gap: 11px;">
                            <table style="border-collapse: collapse; border-spacing: 0; width: 100%; margin: 0;">
                                <tr class="fx fx-fw-w" style="gap: 36px;">
                                    @for ($i = 0; $i <= $content['availability_window'] - 1; $i++)
                                        <th class="cal_tod_b_br">
                                            <div>
                                                <p class="_txtec16" style="margin-bottom: 5px;">{{ Carbon\Carbon::parse( strtotime( '2022/' . ( $i + date('n') ) . '/21' . " - 1 month"), 'UTC')->locale('en')->isoFormat('MMM') }}</p>
                                                @if ( $i + 1  == $content['availability_window'])
                                                    <i class="far fa-user-circle _i-verde40"></i>
                                                @endif  
                                            </div>
                                        </th>
                                    @endfor
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("availability")'>
                            <span>Cancel</span>
                        </div>
                        <button class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("availability")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['checkin'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Restricted check-in days</h3>
            <div class="_width_text show_info">
                @if ( count( $content['restricted_checkin_days'] ) != 0 )
                    <div class="_width_text show_info">
                        @foreach ( $content['restricted_checkin_days'] as $element)
                            <p><span class="_txtec">{{ $element }}</span></p>
                        @endforeach
                    </div>
                @else
                    <div class="_width_text show_info">
                        <span class="_txtec">Not set</span>
                    </div>
                @endif
            </div>

            <div class="_width_text show_text">
                <span class="_txtec">Guests won't be able to book your place if their stay starts on these days.</span>
            </div>

            <form wire:submit.prevent="submitCheckin" class="show_form_input" style="margin-top: 21px;">
                <div class="fx fx-fw-w" style="gap: 21px;">
                    <div class="w28_h28">
                        <label class="block-lb fx-ai-c fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model="content.restricted_checkin_days" value="Sunday">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Sunday</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-c fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model="content.restricted_checkin_days" value="Monday">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Monday</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-c fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model="content.restricted_checkin_days" value="Tuesday">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Tuesday</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-c fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model="content.restricted_checkin_days" value="Wednesday">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Wednesday</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-c fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model="content.restricted_checkin_days" value="Thursday">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Thursday</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-c fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model="content.restricted_checkin_days" value="Friday">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Friday</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-c fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model="content.restricted_checkin_days" value="Saturday">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Saturday</span>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                @if ( $errors->has('restricted_checkin_days') || $errors->has('restricted_checkin_days.*'))
                    <div  class="_txterror" style="margin-top: 20px; display: block;">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $errors->first('restricted_checkin_days') }} {{ $errors->first('restricted_checkin_days.*') }}
                    </div>
                @endif

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 25px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("checkin")'>
                        <span>Cancel</span>
                    </div>
                    <button class="btn-celest">Save</button>
                </div>
            </form>
        </div>
        <div class="_btnsm edit" wire:click='activeClass("checkin")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['checkout'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Restricted checkout days</h3>
            <div class="_width_text show_info">
                @if ( count( $content['restricted_checkout_days'] ) != 0 )
                    <div class="_width_text show_info">
                        @foreach ( $content['restricted_checkout_days'] as $element)
                            <p><span class="_txtec">{{ $element }}</span></p>
                        @endforeach
                    </div>
                @else
                    <div class="_width_text show_info">
                        <span class="_txtec">Not set</span>
                    </div>
                @endif
            </div>

            <div class="_width_text show_text">
                <span class="_txtec">Guests won't be able to book your place if their stay ends on these days.</span>
            </div>

            <form wire:submit.prevent="submitCheckout" class="show_form_input" style="margin-top: 21px;">
                <div class="fx fx-fw-w" style="gap: 21px;">
                    <div class="w28_h28">
                        <label class="block-lb fx-ai-c fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.restricted_checkout_days" value="Sunday">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Sunday</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-c fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.restricted_checkout_days" value="Monday">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Monday</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-c fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.restricted_checkout_days" value="Tuesday">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Tuesday</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-c fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.restricted_checkout_days" value="Wednesday">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Wednesday</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-c fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.restricted_checkout_days" value="Thursday">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Thursday</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-c fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.restricted_checkout_days" value="Friday">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Friday</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-c fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.restricted_checkout_days" value="Saturday">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Saturday</span>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                @if ( $errors->has('restricted_checkout_days') || $errors->has('restricted_checkout_days.*'))
                    <div  class="_txterror" style="margin-top: 20px; display: block;">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $errors->first('restricted_checkout_days') }} {{ $errors->first('restricted_checkout_days.*') }}
                    </div>
                @endif

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 25px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("checkout")'>
                        <span>Cancel</span>
                    </div>
                    <button class="btn-celest">Save</button>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("checkout")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>