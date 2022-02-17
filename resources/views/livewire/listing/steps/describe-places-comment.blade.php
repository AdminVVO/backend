<div class="_ctoverlay">
    <div class="content_right">
        <div class="content_hidden cs-next">
            <div class="content_mr" style="max-width: 658px; width: 100%;">
                <div class="content_step content_step9">
                    <h2 class="h2_publish txt_center" style="margin-bottom: 31px;">Now, let's describe your place</h2>
                    <div class="txt-check-in">Create your description</div>
                    <div style="margin-top: 12px;">
                        <textarea class="_txtarea" placeholder="This unique place has a style all its own." maxlength="500" wire:model.lazy="describePlaceComment"></textarea>
                        <p class="fx fx-ai-c" style="float: right;">
                            <span class="_txtec14 views_num">0</span><span class="_txtec14">/500</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="_block-jsb">
        <div class="_btnsmleft" wire:click="returnBack('describeToPlacesOptions')">
            <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                <path d="M5.294,1.824l4,4.005a.753.753,0,0,0,1.068,0,.763.763,0,0,0,0-1.071L5.83.22A.755.755,0,0,0,4.787.2L.221,4.755A.756.756,0,0,0,1.289,5.826Z" transform="translate(0 10.584) rotate(-90)" fill="#333"/>
            </svg>
            <span>Back</span>
        </div>
        <button type="button" class="btn-celest btns-modals" wire:click="next">Next</button>
    </div>
</div>