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
                                    <input type="radio" id="place" name="guestshave" value="place" wire:model="space">
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
                                    <input type="radio" id="privateroom" name="guestshave" value="privateroom" wire:model="space">
                                    <label for="privateroom" class="_rect-b">
                                        <div class="_img-f" style="padding: 21px 0;">
                                            <span class="_bg-border">
                                                <i class="far fa-building _i-verde30"></i>
                                            </span>
                                        </div>
                                        <div class="_block">
                                            <h3 class="_txteh">A private room</h3>
                                        </div>
                                    </label>
                                </div>

                                <div class="_width">
                                    <input type="radio" id="sharedroom" name="guestshave" value="sharedroom" wire:model="space">
                                    <label for="sharedroom" class="_rect-b">
                                        <div class="_img-f" style="padding: 21px 0;">
                                            <span class="_bg-border">
                                                <i class="far fa-building _i-verde30"></i>
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
