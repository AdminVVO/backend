<div class="_ctoverlay">
    <div class="content_right">
        <div class="content_hidden ch_step10">
            <div class="content_mr">
                <div class="content_step">
                    <h2 class="h2_publish" style="margin-bottom: 31px;">Now for the fun part—set your price</h2>

                    <div class="_width">
                        <div class="_block" style="margin-bottom: 23px;">
                            <div class="_mx-num-min" style="margin-bottom: 10px;">
                                <div class="_2btns fx fx-ai-c fx-jc-sb">
                                    <button class="_btn" type="button" aria-label="disminuir valor" {{ $disableR ? 'disabled' : '' }} wire:click="buttonRestar">
                                        <span>
                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                                <path d="m2 16h28"></path>
                                            </svg>
                                        </span>
                                    </button>

                                    <p class="_binput_dolar fx">
                                        <span aria-hidden="true" class="h2-50">$</span>
                                        <input type="number" class="h2-50 input_numberdollar" wire:model.lazy="price" value="0">
                                    </p>

                                    <button class="_btn" type="button" aria-label="aumentar valor" {{ $disableS ? 'disabled' : '' }} wire:click="buttonSumar">
                                        <span>
                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                                <path d="m2 16h28m-14-14v28"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>

                            <p class="_txteh">Price per night</p>
                        </div>

                        <p class="h3">Keep in mind, places like usually range from <a href="" class="_txtblu">S/93</a> to <a href="" class="_txtblu">S/156</a>.</p>
                    </div>

                    <div class="bg_check-gris" style="margin-top: 65px;">
                        <div class="_block fx fx-ai-c fx-jc-sb">
                            <div class="bg-check">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                    <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"/>
                                </svg>
                            </div>

                            <p class="h3">Offer a 20% discount for your first 3 guests to help you get booked faster. <a href="" class="_txteh">Learn more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="_block-jsb">
        <div class="_btnsmleft" wire:click="returnBack('describeToPlacesComment')">
            <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                <path d="M5.294,1.824l4,4.005a.753.753,0,0,0,1.068,0,.763.763,0,0,0,0-1.071L5.83.22A.755.755,0,0,0,4.787.2L.221,4.755A.756.756,0,0,0,1.289,5.826Z" transform="translate(0 10.584) rotate(-90)" fill="#333"/>
            </svg>
            <span>Back</span>
        </div>
        <button type="button" class="btn-celest btns-modals" wire:click="next">Next</button>
    </div>
</div>