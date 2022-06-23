<div class="_ctoverlay">
    <div class="content_right">
        <div class="content_hidden cs_form">
            <div class="content_mr">
                <div class="content_step">
                    <h2 class="h2_publish" style="margin-bottom: 23px;">What kind of space will guests have?</h2>

                    <div class="options_form">
                        <h3 class="h2-guests txt_center" style="margin-bottom: 36px;">Confirm your address</h3>

                        <form wire:submit.prevent="submitAddress">
                            <div class="_flfpc">
                                <div class="block_date">
                                    <div class="txt-check-in">Street</div>
                                    <input type="text" class="_numcard @error('street') error_input @enderror" wire:model.lazy="street">
                                    @error('street')
                                        <div class="_txterror">
                                            <i class="fas fa-exclamation-circle icon1"></i> 
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="_flfpc" style="gap: 20px;">
                                <div class="block_date">
                                    <div class="txt-check-in">City</div>
                                    <input type="text" class="_numcard @error('city') error_input @enderror" wire:model.lazy="city">
                                    @error('city')
                                        <div  class="_txterror">
                                            <i class="fas fa-exclamation-circle icon1"></i> 
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                
                                <div class="block_date">
                                    <div class="txt-check-in">State (Optional)</div>
                                    <input type="text" class="_numcard @error('state') error_input @enderror" wire:model.lazy="state">
                                    @error('state')
                                        <div  class="_txterror">
                                            <i class="fas fa-exclamation-circle icon1"></i> 
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="_flfpc">
                                <div class="block_date">
                                    <div class="txt-check-in">Apt, suite, etc. (Optional)</div>
                                    <input type="text" class="_numcard @error('suite') error_input @enderror" wire:model.lazy="suite">
                                    @error('suite')
                                        <div  class="_txterror">
                                            <i class="fas fa-exclamation-circle icon1"></i> 
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="block_date">
                                    <div class="txt-check-in">Zip code (Optional)</div>
                                    <input type="text" class="_numcard @error('zip_code') error_input @enderror" wire:model.lazy="zip_code">
                                    @error('zip_code')
                                        <div  class="_txterror">
                                            <i class="fas fa-exclamation-circle icon1"></i> 
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="_flfpc" style="display: block;">
                                <div class="txt-check-in">Country/region</div>
                                <div class="selected-modal" style="margin: 0;">
                                    <select wire:model.lazy="country" class="@error('country') error_input @enderror">
                                        <option value="0">Choose...</option>
                                        <option value="US">United States - US</option>
                                        <option value="VE">Venezuela - VE</option>
                                    </select>

                                    <i class="fas fa-chevron-down"></i>
                                </div>
                                @error('country')
                                    <div  class="_txterror">
                                        <i class="fas fa-exclamation-circle icon1"></i> 
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <p class="_txtec16">We'll only share your address with guests who are booked as outlined in our <a href="javascript:void(0)" class="_txtblu16">privacy policy</a>.</p>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="_block-jsb">
        <div class="_btnsmleft" wire:click="returnBack('maps')">
            <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                <path d="M5.294,1.824l4,4.005a.753.753,0,0,0,1.068,0,.763.763,0,0,0,0-1.071L5.83.22A.755.755,0,0,0,4.787.2L.221,4.755A.756.756,0,0,0,1.289,5.826Z" transform="translate(0 10.584) rotate(-90)" fill="#333"/>
            </svg>
            <span>Back</span>
        </div>
        <button type="button" class="btn-celest btns-modals" wire:click="next">Next</button>
    </div>
</div>