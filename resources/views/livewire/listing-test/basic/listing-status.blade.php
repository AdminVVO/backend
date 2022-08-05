<form wire:submit.prevent="SubmitStatus" class="show_form_input">
    <div class="fx fx-fd-c" style="gap: 29px;">
        <div>
            <label class="block-lb fx-ai-fs fx-jc-fs">
                <input type="radio" name="listing_status" value="listed" wire:model.defer="inputStatus">
                <div class="before_check">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                    </svg>
                </div>

                <div class="bfx_svg">
                    <div class="dis_ib">
                        <i class="fas fa-circle _i-verde10"></i>
                    </div>

                    <div class="w100">
                        <h3 class="_txteh">Listed</h3>
                        <span class="_txtec16">Guests can find your listing in search results and request or book available dates.</span>
                    </div>
                </div>
            </label>
        </div>

        <div>
            <label class="block-lb fx-ai-fs fx-jc-fs">
                <input type="radio" name="listing_status" value="snoozed" onclick="hideShowListingStatus('unlisted');" wire:model.defer="inputStatus">
                <div class="before_check">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                    </svg>
                </div>

                <div class="bfx_svg">
                    <div class="dis_ib">
                        <i class="fas fa-moon _i-gris10"></i>
                    </div>

                    <div class="w100">
                        <h3 class="_txteh">Snoozed</h3>
                        <span class="_txtec16">Remove your listing from search results for a set period of time.</span>
                    </div>
                </div>
            </label>
        </div>

        <div>
            <label class="block-lb fx-ai-fs fx-jc-fs">
                <input type="radio" name="listing_status" value="unlisted" wire:model.defer="inputStatus">
                <div class="before_check">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                    </svg>
                </div>

                <div class="bfx_svg">
                    <div class="dis_ib">
                        <i class="fas fa-circle _i-red10"></i>
                    </div>

                    <div class="w100">
                        <h3 class="_txteh">Unlisted</h3>
                        <span class="_txtec16">Guests can't book your listing or find it in search results.</span>
                    </div>
                </div>
            </label>
        </div>

        <div>
            <label class="block-lb fx-ai-fs fx-jc-fs">
                <input type="radio" name="listing_status" onclick="hideShowListingStatus('snoozed');" value="deactivate" wire:model.defer="inputStatus">
                <div class="before_check">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                    </svg>
                </div>

                <div class="bfx_svg">
                    <div class="dis_ib">
                        <i class="fas fa-circle _i-griswhite10"></i>
                    </div>

                    <div class="w100">
                        <h3 class="_txteh">Deactivate</h3>
                        <span class="_txtec16">Permanently remove your listing from vvoutlet.</span>
                    </div>
                </div>
            </label>
        </div>

        <div class="_flfpc">
            <div class="txt-check-in">Resort Email</div>
            <input type="text" class="_numcard email-modals @error('inputResort') error_input @enderror" placeholder="Examples@demo.com" wire:model.defer="inputResort">
            @error('inputResort')
                <div  class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="_flfpc">
            <div class="selected-modal mxw445 @error('inputTemplate') error_input @enderror" style="margin: 0;">
                <select wire:model.defer="inputTemplate">
                    <option selected>Choose option...</option>
                    <option value="MS Code">MS Code</option>
                    <option value="Source">Source</option>
                </select>

                <i class="fas fa-chevron-down"></i>
            </div>
            @error('inputTemplate')
                <div  class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>

    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 25px;">
        <div class="_btnsmleft click_cancel_listing" wire:click="reloadInputs">
            <span>Cancel</span>
        </div>
        <button type="submit" class="btn-celest">Save</button>
    </div>
</form>