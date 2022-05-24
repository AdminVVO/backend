<form wire:submit.prevent="SubmitBook" class="show_form_input" style="margin-top: 30px;">
    <div class="fx fx-fd-c" style="gap: 30px;">
        <div>
            <label class="block-lb fx-jc-fs" style="gap: 17px;">
                <input type="radio" name="instant_book" wire:model.defer="inputBook" value="on">
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
                            <h3 class="_txteh">Instant Book on</h3>
                            <span class="btn_lc">Recommended</span>
                        </div>
                        <p class="_txtec">Guests who meet all your requirements can book instantly. Others will need to send a reservation request. You can cancel 100% penalty-free if you're ever uncomfortable with a reservation.</p>
                    </div>
                </div>
            </label>
        </div>

        <div>
            <label class="block-lb fx-jc-fs clickInstantBookon" style="gap: 17px;">
                <input type="radio" name="instant_book" wire:model.defer="inputBook" value="off">
                <div class="before_check">
                    <div class="flex-centrado" style="width: inherit;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                        </svg>
                    </div>
                </div>

                <div class="bfx_svg">
                    <div class="w100">
                        <h3 class="_txteh" style="margin-bottom: 7px;">Instant Book off</h3>
                        <p class="_txtec">All guests must send a reservation request</p>
                    </div>
                </div>
            </label>
        </div>

        <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
            <div class="_btnsmleft click_cancel_listing" wire:click="reloadInputs">
                <span>Cancel</span>
            </div>
            <button type="submit" class="btn-celest">Save</button>
        </div>
    </div>
</form>