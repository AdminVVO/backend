<form wire:submit.prevent="SubmitCancellation" class="show_form_input" style="margin-top: 30px;">
    <div class="fx fx-fd-c" style="gap: 30px;">
        <div>
            <label class="block-lb fx-jc-fs" style="gap: 17px;">
                <input type="radio" name="cancel_policy" wire:model.defer="inputCancellation" value="Flexible">
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
                <input type="radio" name="cancel_policy" wire:model.defer="inputCancellation" value="Flexible or Non-refundable">
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
                <input type="radio" name="cancel_policy" wire:model.defer="inputCancellation" value="Moderate">
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
                <input type="radio" name="cancel_policy" wire:model.defer="inputCancellation" value="Moderate or Non-refundable">
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
                <input type="radio" name="cancel_policy" wire:model.defer="inputCancellation" value="Firm">
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
                <input type="radio" name="cancel_policy" wire:model.defer="inputCancellation" value="Firm or Non-refunfable">
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
                <input type="radio" name="cancel_policy" wire:model.defer="inputCancellation" value="Strict">
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
                <input type="radio" name="cancel_policy" wire:model.defer="inputCancellation" value="Strict or Non-refundable">
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
        <div class="_btnsmleft click_cancel_listing" wire:click="reloadInputs">
            <span>Cancel</span>
        </div>
        <button type="submit" class="btn-celest">Save</button>
        </div>
</form>