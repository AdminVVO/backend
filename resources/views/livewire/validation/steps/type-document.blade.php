<div class="section_photo-id">

    <h2 class="h2_publish">Choose an ID type to add</h2>

    <div class="_gap" style="margin-top:35px;">
        <form wire:submit.prevent="submitTypeDocument">

            <div class="check_black fx fx-fd-c">
                <div class="cbadd">
                    <div class="txt-check-in">Country/region</div>
                    <div class="selected-modal" style="margin: 22px 0 0;">
                        <select wire:model.defer="country">
                            <option value="" disabled selected>Choose option...</option>
                            <option value="US">United States - US</option>
                        </select>

                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="radio-item_rscrm">
                    <input type="radio" id="driver" name="document" wire:model.defer="document"
                        value="Driver's License">
                    <label for="driver">
                        <div class="content_flex-actv">
                            <div class="flex-msg">
                                <div class="_block">
                                    <div class="_txteh">Driver's License</div>
                                </div>
                            </div>
                        </div>
                        <span class="before_check"></span>
                    </label>
                </div>

                <div class="radio-item_rscrm">
                    <input type="radio" id="passport" name="document" wire:model.defer="document" value="Passport">
                    <label for="passport">
                        <div class="content_flex-actv">
                            <div class="flex-msg">
                                <div class="_block">
                                    <div class="_txteh">Passport</div>
                                </div>
                            </div>
                        </div>
                        <span class="before_check"></span>
                    </label>
                </div>

                <div class="radio-item_rscrm">
                    <input type="radio" name="document" id="identity_card" wire:model.defer="document"
                        value="Identity Card">
                    <label for="identity_card">
                        <div class="content_flex-actv">
                            <div class="flex-msg">
                                <div class="_block">
                                    <div class="_txteh">Identity Card</div>
                                </div>
                            </div>
                        </div>
                        <span class="before_check"></span>
                    </label>
                </div>
            </div>

            <div class="fx fx-fw-w fx-ai-b fx-jc-c" style="margin: 50px 0 17px;">
                <svg xmlns="http://www.w3.org/2000/svg" width="13.883" height="15.866" viewBox="0 0 13.883 15.866">
                    <path
                        d="M12.4,6.941h-.744V4.71a4.71,4.71,0,0,0-9.42,0V6.941H1.487A1.488,1.488,0,0,0,0,8.429v5.95a1.488,1.488,0,0,0,1.487,1.487H12.4a1.488,1.488,0,0,0,1.487-1.487V8.429A1.488,1.488,0,0,0,12.4,6.941Zm-3.223,0H4.71V4.71a2.231,2.231,0,0,1,4.462,0Z"
                        fill="#ff5a5f" />
                </svg>
                <p class="_txteh">We will never share your identification document with a host.</p>
            </div>
            <div class="_block-jsb">
                <div class="_btnsmleft" wire:click="returnBack('init')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584"
                        viewBox="0 0 6.052 10.584">
                        <path
                            d="M5.294,1.824l4,4.005a.753.753,0,0,0,1.068,0,.763.763,0,0,0,0-1.071L5.83.22A.755.755,0,0,0,4.787.2L.221,4.755A.756.756,0,0,0,1.289,5.826Z"
                            transform="translate(0 10.584) rotate(-90)" fill="#333" />
                    </svg>
                    <span>Back</span>
                </div>
                <button type="submit" class="btn-celest">Continue</button>
            </div>
        </form>
    </div>
</div>
