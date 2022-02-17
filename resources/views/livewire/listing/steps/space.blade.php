<div class="_ctoverlay">
    <div class="content_right">
        <div class="content_hidden cs-next">
            <div class="content_mr">
                <div class="content_step">
                    <h2 class="h2_publish" style="margin-bottom: 31px;">What kind of space will guests have?</h2>
                    <div class="_ps-abs">
                        <div class="scroll_n">
                            <div class="_grid next">
                                <div class="_width">
                                    <input type="radio" id="place" name="guestshave" value="place" wire:model.defer="space">
                                    <label for="place" class="_rect-b">
                                        <div class="_img-f" style="padding: 21px 0;">
                                            <span class="_bg-border">
                                                <i class="far fa-building _i-verde30"></i>
                                            </span>
                                        </div>
                                        <div class="_block">
                                            <h3 class="_txteh">An entire place</h3>
                                        </div>
                                    </label>
                                </div>

                                <div class="_width">
                                    <input type="radio" id="privateroom" name="guestshave" value="privateroom" wire:model.defer="space">
                                    <label for="privateroom" class="_rect-b">
                                        <div class="_img-f" style="padding: 21px 0;">
                                            <span class="_bg-border">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="13.75" height="32.5" viewBox="0 0 13.75 32.5">
                                                    <path d="M7.875,7.5a3.75,3.75,0,1,0-3.75-3.75A3.753,3.753,0,0,0,7.875,7.5Zm3.053.961a5.555,5.555,0,0,1-6.105,0A2.8,2.8,0,0,0,2.25,11.25v7.969a1.4,1.4,0,0,0,1.406,1.406h.469v7.969A1.4,1.4,0,0,0,5.531,30h4.688a1.4,1.4,0,0,0,1.406-1.406V20.625h.469A1.4,1.4,0,0,0,13.5,19.219V11.25A2.8,2.8,0,0,0,10.928,8.461Z" transform="translate(-1 1.25)" fill="none" stroke="#2ddab4" stroke-width="2.5"/>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="_block">
                                            <h3 class="_txteh">A private room</h3>
                                        </div>
                                    </label>
                                </div>

                                <div class="_width">
                                    <input type="radio" id="sharedroom" name="guestshave" value="sharedroom" wire:model.defer="space">
                                    <label for="sharedroom" class="_rect-b">
                                        <div class="_img-f" style="padding: 21px 0;">
                                            <span class="_bg-border">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="39.132" height="32.5" viewBox="0 0 39.132 32.5">
                                                    <path d="M7.875,7.5a3.75,3.75,0,1,0-3.75-3.75A3.753,3.753,0,0,0,7.875,7.5Zm23.5,0a3.75,3.75,0,1,0-3.75-3.75A3.753,3.753,0,0,0,31.375,7.5Zm7.459,13.271L36.162,9.885a1.927,1.927,0,0,0-1.746-1.418,5.565,5.565,0,0,1-6.094,0,1.927,1.927,0,0,0-1.746,1.418L23.9,20.771A1.438,1.438,0,0,0,25.352,22.5h3.211v6.094A1.4,1.4,0,0,0,29.969,30h2.813a1.4,1.4,0,0,0,1.406-1.406V22.5H37.4A1.425,1.425,0,0,0,38.834,20.771ZM20.063,0H18.188a.94.94,0,0,0-.937.938V29.063a.94.94,0,0,0,.938.938h1.875A.94.94,0,0,0,21,29.063V.938A.94.94,0,0,0,20.063,0ZM10.928,8.461a5.555,5.555,0,0,1-6.105,0A2.8,2.8,0,0,0,2.25,11.25v7.969a1.4,1.4,0,0,0,1.406,1.406h.469v7.969A1.4,1.4,0,0,0,5.531,30h4.688a1.4,1.4,0,0,0,1.406-1.406V20.625h.469A1.4,1.4,0,0,0,13.5,19.219V11.25A2.8,2.8,0,0,0,10.928,8.461Z" transform="translate(-1 1.25)" fill="none" stroke="#2ddab4" stroke-width="2.5"/>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="_block">
                                            <h3 class="_txteh">A shared room</h3>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="_block-jsb">
        <div class="_btnsmleft" wire:click="returnBack">
            <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                <path d="M5.294,1.824l4,4.005a.753.753,0,0,0,1.068,0,.763.763,0,0,0,0-1.071L5.83.22A.755.755,0,0,0,4.787.2L.221,4.755A.756.756,0,0,0,1.289,5.826Z" transform="translate(0 10.584) rotate(-90)" fill="#333"/>
            </svg>
            <span>Back</span>
        </div>
        <button type="button" class="btn-celest btns-modals" wire:click="next">Next</button>
    </div>
</div>
