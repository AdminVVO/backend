<div class="block {{ $classActive['weekly'] ? 'edit_listing_post' : ''}}">
    <h2 class="h2-guests">Discount</h2>

    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Weekly discount</h3>
            <div class="_width_text show_info">
                @if ( $content['weekly_discount'] != '' && $content['weekly_discount'] != 0 )
                    <span class="_txtec">{{ $content['weekly_discount'] }}% discount</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <span class="_txtec">Weekly discounts apply to reservations that are 7 days or longer. If you offer multiple length-of-stay discounts, we'll apply the discount for the longest trip length.</span>
            </div>

            <form wire:submit.prevent="submitWeekly" class="show_form_input" style="margin-top: 19px;">

                <div class="_flfpc">
                    <label class="before_icon_input mxw80">
                        <input type="text" class="number @error('weekly_discount') error_input @enderror" wire:model.defer="content.weekly_discount" style="padding: 16px 0 16px 16px;" maxlength="2">
                        @error('weekly_discount')
                            <div  class="_txterror">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror
                        <span class="_txtec" style="padding: 16px 16px 16px 0;">%</span>
                    </label>
                </div>

                <div style="margin-top: 12px;">
                    <div class="_txtehlinear click_tip_disc" style="margin-bottom: 11px;">Tip: 13%. Set your weekly discount to this percentage.</div>
                    <p class="_txtec16">Your average price with a 0% discount is $441 per week.</p>
                </div>

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 30px;">
                    <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("weekly")'>
                        <span>Cancel</span>
                    </div>
                    <button type="submit" class="btn-celest">Save</button>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("weekly")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['monthly'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Monthly discount</h3>
            <div class="_width_text show_info">
                @if ( $content['monthly_discount'] != '' && $content['monthly_discount'] != 0 )
                    <span class="_txtec">{{ $content['monthly_discount'] }}% discount</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <span class="_txtec">Monthly discounts apply to reservations that are 28 days or longer. If you offer multiple length-of-stay discounts, we'll apply the discount for the longest trip length.</span>
            </div>

            <form wire:submit.prevent="submitMonthly" class="show_form_input" style="margin-top: 19px;">
                <div class="_flfpc">
                    <label class="before_icon_input mxw80">
                        <input type="text" class="number @error('monthly_discount') error_input @enderror _tip31" wire:model.defer="content.monthly_discount" style="padding: 16px 0 16px 16px;" maxlength="2">
                        @error('monthly_discount')
                            <div  class="_txterror">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror
                        <span class="_txtec" style="padding: 16px 16px 16px 0;">%</span>
                    </label>
                </div>

                <div style="margin-top: 12px;">
                    <a href="#" class="_txtehlinear" style="margin-bottom: 11px;">Tip: 31%. Set your monthly discount to this percentage.</a>
                    <p class="_txtec16">Your average price with a 0% discount is $1,915 per month.</p>
                </div>

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 30px;">
                    <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("monthly")'>
                        <span>Cancel</span>
                    </div>
                    <button class="btn-celest">Save</button>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("monthly")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['other_discount'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Add a discount of other stays</h3>
            <div class="_width_text show_info">
                @if ( $oldContent['inputStays'][0] != '' )
                    @foreach ( $oldContent['inputStays']  as $key => $element)
                        <p class="_txtec">Stays {{ $element }} for {{ $oldContent['inputStaysDiscount'][ $key ] }}% discount</p>
                    @endforeach
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <form wire:submit.prevent="submitOtherStay" class="show_form_input" style="margin-top: 30px;">
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
                                @if ( $loop->iteration != 1 )
                                    <button class="_btnsmleft" style="margin-top: 10px;" wire:click.prevent="removeInputs({{$value}})">
                                        <span>Remove</span>
                                    </button>
                                @endif
                            </div>
                        @endforeach
                    </div>

                    <div class="_btnsmleft" style="display: {{ $disableAdd ? 'none' : 'block' }};" wire:click.prevent="addInputs({{ $i }})">
                        <span>Add another length-of-stay</span>
                    </div>

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("other_discount")'>
                            <span>Cancel</span>
                        </div>
                        <button class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("other_discount")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['early_bird_discount'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Early bird discount</h3>
            <div class="_width_text show_info">
                @if ( $content['early_bird_discount'] != '' && $content['early_bird_discount'] != 0 )
                    <span class="_txtec">Early bird {{ $content['early_bird_discount'] }} Months for {{ $content['early_bird_discount_porcent'] }}% discount</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <span class="_txtec">Discount ends</span>
            </div>

            <form wire:submit.prevent="submitEarlyBird" class="show_form_input" style="margin-top: 30px;">
                <div class="fx fx-fd-c" style="gap: 30px;">
                    <div class="fx fx-fw-w" style="gap: 30px;">
                        <div class="mxw466">
                            <div class="txt-check-in">Months before arrival</div>
                            <div class="selected-modal" style="margin: 0;">
                                <select class="@error('early_bird_discount') error_input @enderror" wire:model.defer="content.early_bird_discount">
                                    <option selected value="0">Choose option....</option>
                                    <option value="1">1 Months</option>
                                    <option value="2">2 Months</option>
                                    <option value="3">3 Months</option>
                                    <option value="4">4 Months</option>
                                    <option value="5">5 Months</option>
                                </select>

                                <i class="fas fa-chevron-down"></i>
                            </div>
                            @error('early_bird_discount')
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
                                    <input type="text" class="number @error('early_bird_discount') error_input @enderror" style="padding: 16px 0 16px 16px;" maxlength="2" wire:model.defer="content.early_bird_discount_porcent">
                                    <span class="_txtec" style="padding: 16px 16px 16px 0;">%</span>
                                </label>
                                @error('early_bird_discount_porcent')
                                    <div style="display: block;" class="_txterror">
                                        <i class="fas fa-exclamation-circle icon1"></i> 
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("early_bird_discount")'>
                            <span>Cancel</span>
                        </div>
                        <button class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("early_bird_discount")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['last_minute_discount'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Last-minute discounts</h3>
            <div class="_width_text show_info">
                @if ( $oldContent['inputLast'][0] != '' )
                    @foreach ( $oldContent['inputLast']  as $key => $element)
                        <p class="_txtec">Last-minute {{ $element }} Days for {{ $oldContent['inputLastDiscount'][ $key ] }}% discount</p>
                    @endforeach
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <span class="_txtec">Discount starts</span>
            </div>
            <form wire:submit.prevent="submitLastMinute" class="show_form_input" style="margin-top: 30px;">
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
                                @if ( $loop->iteration != 1 )
                                    <button class="_btnsmleft" style="margin-top: 10px;" wire:click.prevent="removeInputsLast({{$value}})">
                                        <span>Remove</span>
                                    </button>
                                @endif
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
                    <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("last_minute_discount")'>
                            <span>Cancel</span>
                        </div>
                        <button class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("last_minute_discount")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>