<div class="_cont-sf">
    <div class="h2-guests">Service fee settings</div>
    <p class="_txtec">Choose a service fee pricing option for all of your listings.</p>

    <div class="_gap-news">
        <div class="radio-item_rscrm">
            <input type="radio" id="simplified" wire:model="settings" value="simplified" wire:click="changeS()">
            <label for="simplified">
                <div class="content_flex-actv">
                    <div class="flex-msg">
                        <div class="_flexgap">
                            <div class="_txteh">Simplified pricing</div>
                            <span class="_news-bt">News</span>
                        </div>
                        <p class="_txtec16 txt_upper">current setting</p>
                        <p class="_txtec16">Vvoutlet will deduct 15% from each payout. Guests won`t be charged a service</p>
                        <p class="_txtec16">fee—the price you set is the price guests get.</p>
                    </div>
                </div>

                <span class="before_check"></span>
            </label>
        </div>

        <div class="radio-item_rscrm">
            <input type="radio" id="split-fee" wire:model="settings" value="split-fee" wire:click="changeF()">
            <label for="split-fee">
                <div class="content_flex-actv">
                    <div class="flex-msg">
                        <div class="_txteh">Split-fee pricing</div>
                        <p class="_txtec16">vvoutlet will deduct 3% from each payout and add 14.2%* to the nightly price.</p>
                        <p class="_txtec16">Guests will pay a higher price than you set.</p>
                        <p class="_txtec12" style="margin-top: 8px;">*Typical guest service fee for stays less than 28 days. For stays over 28 days, the typical guest service fee is 10.6%. Remember, VAT may be charged on the service fee in your country.</p>
                    </div>
                </div>

                <span class="before_check"></span>
            </label>
        </div>
    </div>
    <div class="_block">
        <button class="btn-celest">Save</button>
        <button class="btn-red">Cancel</button>
    </div>
</div>