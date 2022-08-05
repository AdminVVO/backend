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
                                    <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputPrice <= 10 ? 'disabled' : '' }} wire:click="buttonDecrease('inputPrice')">
                                        <span>
                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                                <path d="m2 16h28"></path>
                                            </svg>
                                        </span>
                                    </button>

                                    <label class="_binput_dolar fx" wire:ignore.self>
                                        <span aria-hidden="true" class="h2-50">$</span>
                                        <input type="number" class="h2-50 input_numberdollar" wire:model.lazy="inputPrice" placeholder="150">
                                    </label>
                                    
                                    <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputPrice >= 10000 ? 'disabled' : '' }} wire:click="buttonIncrease('inputPrice')">
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
                    </div>
                    <div class="_width">
                        <label class="block-lb fx-ai-c fx-jc-fs" style="margin-top: 65px;">
                            <input type="checkbox" name="check_instructions" wire:model.defer="inputDiscount">
                            <div class="before_check">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <p class="h3">Offer a 20% discount for your first 3 guests to help you get booked faster.</p>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>