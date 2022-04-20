<div class="block {{ $classActive['cleaning'] ? 'edit_listing_post' : ''}}">
    <h2 class="h2-guests">Additional charges</h2>

    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Cleaning fee</h3>
            <div class="_width_text show_info">
                @if ( $content['cleaning_fee'] != '' && $content['cleaning_fee'] != 0 )
                    <span class="_txtec">{{ $content['cleaning_fee'] }}$ per stay</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Set a fee to cover cleaning after each stay. For any excess cleaning, there's AirCover.</p>

                <a href="#" class="_txtehlinear">Learn about cleaning fees</a>
            </div>

            <form wire:submit.prevent="submitCleaning" class="show_form_input" style="margin-top: 32px;">
                <div class="fx fx-fd-c" style="gap: 30px;">
                    <div class="_flfpc mxw445">
                        <div class="txt-check-in">Cleaning fee</div>

                        <label class="before_icon_input @error('cleaning_fee') error_input @enderror">
                            <span class="_txtec">$</span>
                            <input type="text" class="number" wire:model.defer="content.cleaning_fee">
                        </label>
                        @error('cleaning_fee')
                            <div style="display: block;" class="_txterror">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("cleaning")'>
                            <span>Cancel</span>
                        </div>
                        <button class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("cleaning")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['pets'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Pet fee</h3>
            <div class="_width_text show_info">
                @if ( $content['pet_fee'] != '' && $content['pet_fee'] != 0 )
                    <span class="_txtec">{{ $content['pet_fee'] }}$ fee for Pets</span>
                @else
                    <span class="_txtec">Pets stay for free</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Set a fee to cover cleaning after each stay. For any excess cleaning, there's AirCover.</p>

                <a href="#" class="_txtehlinear">Learn about pet fees</a>
            </div>

            <form wire:submit.prevent="submitPets" class="show_form_input" style="margin-top: 48px;">
                <div class="form_input">
                    <div class="_flfpc mxw445">
                        <div class="txt-check-in">Fee per reservation</div>

                        <label class="before_icon_input @error('pet_fee') error_input @enderror">
                            <span class="_txtec">$</span>
                            <input type="text" class="number" maxlength="2" wire:model.defer="content.pet_fee">
                        </label>
                        @error('pet_fee')
                            <div  class="_txterror">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("pets")'>
                            <span>Cancel</span>
                        </div>
                        <button class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("pets")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['linens'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Linens fee</h3>
            <div class="_width_text show_info">
                @if ( $content['linens_fee'] != '' && $content['linens_fee'] != 0 )
                    <span class="_txtec">{{ $content['linens_fee'] }}$ fee for Linens</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">The linens fee is added to the cleaning fee for guests when they book, but it will be a separate item in your payout report.</p>
            </div>

            <form wire:submit.prevent="submitLinens" class="show_form_input" style="margin-top: 30px;">
                <div class="fx fx-fd-c" style="gap: 30px;">
                    <div class="_flfpc mxw445">
                        <div class="txt-check-in">Fee per reservation</div>

                        <label class="before_icon_input @error('linens_fee') error_input @enderror">
                            <span class="_txtec">$</span>
                            <input type="text" class="number" maxlength="2" wire:model.defer="content.linens_fee">
                        </label>
                        @error('linens_fee')
                            <div  class="_txterror">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("linens")'>
                            <span>Cancel</span>
                        </div>
                        <button class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("linens")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['resort'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Resort fee</h3>
            <div class="_width_text show_info">
                @if ( $content['resort_fee'] != '' && $content['resort_fee'] != 0 )
                    <span class="_txtec">{{ $content['resort_fee'] }}{{ $content['resort_type'] == 'porcent' ? '%' : '$' }} fee for Resort</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <span class="_txtec">The resort fee is added to the nightly price for guests when they book, but it will be a separate item in your payout report.</span>
            </div>

            <form wire:submit.prevent="submitResort" class="show_form_input" style="margin-top: 30px;">
                <div class="fx fx-fd-c" style="gap: 30px;">
                     <div class="resort_fee_flex">
                        <div class="mxw445">
                            <div class="txt-check-in">Fee per reservation</div>

                            <label class="before_icon_input @error('resort_fee') error_input @enderror">
                                <span class="_txtec">$</span>
                                <input type="text" class="number" maxlength="2" wire:model.defer="content.resort_fee">
                            </label>
                            @error('resort_fee')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mxw100">
                            <div class="txt-check-in">Type</div>
                            <div class="selected-modal" style="margin: 0;">
                                <select wire:model.defer="content.resort_type" class="@error('resort_type') error_input @enderror">
                                    <option selected>Choose option....</option>
                                    <option value="porcent">%</option>
                                    <option value="currency">$</option>
                                </select>

                                <i class="fas fa-chevron-down"></i>
                            </div>
                            @error('resort_type')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("resort")'>
                            <span>Cancel</span>
                        </div>
                        <button class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("resort")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['management'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Management fee</h3>
            <div class="_width_text show_info">
                @if ( $content['management_fee'] != '' && $content['management_fee'] != 0 )
                    <span class="_txtec">{{ $content['management_fee'] }}{{ $content['management_type'] == 'porcent' ? '%' : '$' }} fee for Management</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <span class="_txtec">The management fee is added to the nightly price for guests when they book, but it will be a separate item in your payout report.</span>
            </div>

            <form wire:submit.prevent="submitManagement" class="show_form_input" style="margin-top: 30px;">
                <div class="fx fx-fd-c" style="gap: 30px;">
                    <div class="resort_fee_flex">
                        <div class="mxw445">
                            <div class="txt-check-in">Fee per reservation</div>
                            <input type="text" wire:model.defer="content.management_fee" class="_numcard @error('management_fee') error_input @enderror">
                            @error('management_fee')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mxw100">
                            <div class="txt-check-in">Type</div>
                            <div class="selected-modal" style="margin: 0;">
                                <select wire:model.defer="content.management_type" class="@error('management_type') error_input @enderror">
                                    <option selected>Choose option....</option>
                                    <option value="porcent">%</option>
                                    <option value="currency">$</option>
                                </select>

                                <i class="fas fa-chevron-down"></i>
                            </div>
                            @error('management_type')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("management")'>
                            <span>Cancel</span>
                        </div>
                        <button class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("management")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['community'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Community fee</h3>
            <div class="_width_text show_info">
                @if ( $content['community_fee'] != '' && $content['community_fee'] != 0 )
                    <span class="_txtec">{{ $content['community_fee'] }}{{ $content['community_type'] == 'porcent' ? '%' : '$' }} fee for Community</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <span class="_txtec">The community fee is added to the nightly price for guests when they book, but it will be a separate item in your payout report.</span>
            </div>

            <form wire:submit.prevent="submitCommunity" class="show_form_input" style="margin-top: 30px;">
                <div class="fx fx-fd-c" style="gap: 30px;">
                    <div class="resort_fee_flex">
                        <div class="mxw445">
                            <div class="txt-check-in">Fee per reservation</div>
                            <input type="text" wire:model.defer="content.community_fee" class="_numcard @error('community_fee') error_input @enderror">
                            @error('community_fee')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mxw100">
                            <div class="txt-check-in">Type</div>
                            <div class="selected-modal" style="margin: 0;">
                                <select wire:model.defer="content.community_type" class="@error('community_type') error_input @enderror">
                                    <option selected>Choose option....</option>
                                    <option value="porcent">%</option>
                                    <option value="currency">$</option>
                                </select>

                                <i class="fas fa-chevron-down"></i>
                            </div>
                            @error('community_type')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("community")'>
                            <span>Cancel</span>
                        </div>
                        <button class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("community")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">                    
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['extra_guest'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Extra guest fee</h3>
            <div class="_width_text show_info">
                @if ( $content['extra_guest_fee'] != '' && $content['extra_guest_fee'] != 0 )
                    <span class="_txtec">{{ $content['extra_guest_fee'] }}$ fee for {{ $content['extra_guest'] }} Extra guest</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Charge this amount per extra guest, per night.</p>
            </div>

            <form wire:submit.prevent="submitExtrGuest" class="show_form_input" style="margin-top: 30px;">
                <div class="fx fx-fd-c" style="gap: 30px;">

                    <div class="_flfpc mxw445">
                        <label class="before_icon_input @error('extra_guest_fee') error_input @enderror">
                            <span class="_txtec">$</span>
                            <input type="text" wire:model.defer="content.extra_guest_fee" class="number">
                        </label>
                        @error('extra_guest_fee')
                            <div  class="_txterror">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="_flfpc mxw445" style="gap: 25px;">
                        <span class="_txtec">Number of guests</span>

                        <div class="_2btns">
                            <button class="_btn" type="button" aria-label="disminuir valor" {{ $disableButton['DecreaseGuest'] ? 'disabled' : '' }} wire:click="decreaseGuest">
                                <span>
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                        <path d="m2 16h28"></path>
                                    </svg>
                                </span>
                            </button>
                            
                            <span>{{ $content['extra_guest'] }}</span>

                            <button class="_btn" type="button" aria-label="aumentar valor" {{ $disableButton['IncreaseGuest'] ? 'disabled' : '' }} wire:click="increaseGuest">
                                <span>
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                        <path d="m2 16h28m-14-14v28"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("extra_guest")'>
                            <span>Cancel</span>
                        </div>
                        <button class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("extra_guest")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['nightly'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Weekend nightly price</h3>
            <div class="_width_text show_info">
                @if ( $content['weekend_nightly_fee'] != '' && $content['weekend_nightly_fee'] != 0 )
                    <span class="_txtec">{{ $content['weekend_nightly_fee'] }}$ fee for Weekend nightly</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">This nightly price will replace your base price for every Friday and Saturday. It won't apply if Smart Pricing is on.</p>
            </div>

            <form wire:submit.prevent="submitNighly" class="show_form_input" style="margin-top: 30px;">
                <div class="fx fx-fd-c" style="gap: 30px;">
                    <div class="_flfpc mxw445">
                        <label class="before_icon_input @error('weekend_nightly_fee') error_input @enderror">
                            <span class="_txtec">$</span>
                            <input type="text" wire:model.defer="content.weekend_nightly_fee" class="number">
                        </label>
                        @error('weekend_nightly_fee')
                            <div  class="_txterror">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("nightly")'>
                            <span>Cancel</span>
                        </div>
                        <button class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("nightly")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>