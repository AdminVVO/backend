<div class="block">
    <div class="w100">
        <h2 class="h2-guests">Guest requirements</h2>
        <div class="_width_text">
            <p class="_txtec">All guests are required to follow Airbnb standard requirements, which includes confirmed phone number, email address, payment information, and agreement to your house rules. <a href="#" class="_txtehlinear">Learn more</a></p>
        </div>
    </div>

    <div class="fx fx-ai-c fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Profile photo required</h3>
            <div class="_width_text">
                <p class="_txtec">If you turn on this requirement, you'll be able to see guests' profile photos after a booking is confirmed, but not before. <a href="#" class="_txtehlinear">Learn more</a></p>
            </div>
        </div>

        <input type="checkbox" class="checkbox_custom" wire:model.defer="content.profile_photo_required" wire:click="submitProfilePhoto">
    </div>
</div>

<div class="block">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Local laws</h3>
        </div>

        <div class="_btnsm">
            <span class="_fcontent">
                View
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['primary_listing'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Primary use of listing</h3>
            <div class="_width_text show_info">
                @if ( $content['primary_listing'] != '' )
                    @if ( $content['primary_listing'] == 'guests' )
                        <p class="_txtec">The space is primarily set up for guests</p>
                    @else
                        <p class="_txtec">I keep personal belongings in the space</p>
                    @endif
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <form wire:submit.prevent="submitPrimaryUse" class="show_form_input">
                <div class="fx fx-fd-c" style="gap: 16px;">
                    <div>
                        <label class="block-lb fx-ai-c fx-jc-fs">
                            <input type="radio" name="primary_listing" wire:model.defer="content.primary_listing" value="guests">
                            <div class="before_check">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                    <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                </svg>
                            </div>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">The space is primarily set up for guests</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div>
                        <label class="block-lb fx-ai-c fx-jc-fs">
                            <input type="radio" name="primary_listing" wire:model.defer="content.primary_listing" value="personal">
                            <div class="before_check">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                    <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                </svg>
                            </div>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">I keep personal belongings in the space</span>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                @error('primary_listing')
                    <div style="display: block;" class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 30px;">
                    <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("primary_listing")'>
                        <span>Cancel</span>
                    </div>
                    <button class="btn-celest">Save</button>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("primary_listing")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>