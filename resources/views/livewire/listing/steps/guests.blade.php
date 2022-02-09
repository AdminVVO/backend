<div class="_ctoverlay">
    <div class="content_right">
        <div class="content_hidden">
            <div class="content_mr">
                <div class="content_step">
                    <h2 class="h2_publish" style="margin-bottom: 50px;">How many guests would you like to welcome?</h2>

                    <div class="_grid max_min">
                        <div class="_rect-b">
                            <div class="_block">
                                <div class="_img-f">
                                    <span class="_bg-border">
                                        <i class="far fa-plus-square _i-verde30"></i>
                                    </span>
                                </div>
                                <div class="_block">
                                    <h3 class="_txteh">Guests</h3>
                                </div>
                            </div>

                            <div class="_2btns">
                                <button class="_btn" type="button" aria-label="disminuir valor" {{ $disableR1 ? 'disabled' : '' }} wire:click="buttonRestar('guests')">
                                    <span>
                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                            <path d="m2 16h28"></path>
                                        </svg>
                                    </span>
                                </button>

                                <span aria-hidden="true">{{ $guests }}</span>

                                <button class="_btn" type="button" aria-label="aumentar valor" {{ $disableS1 ? 'disabled' : '' }} wire:click="buttonSumar('guests')">
                                    <span>
                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                            <path d="m2 16h28m-14-14v28"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <div class="_rect-b">
                            <div class="_block">
                                <div class="_img-f">
                                    <span class="_bg-border">
                                        <i class="far fa-plus-square _i-verde30"></i>
                                    </span>
                                </div>
                                <div class="_block">
                                    <h3 class="_txteh">Beds</h3>
                                </div>
                            </div>

                            <div class="_2btns">
                                <button class="_btn" type="button" aria-label="disminuir valor" {{ $disableR2 ? 'disabled' : '' }} wire:click="buttonRestar('beds')">
                                    <span>
                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                            <path d="m2 16h28"></path>
                                        </svg>
                                    </span>
                                </button>

                                <span aria-hidden="true">{{ $beds }}</span>

                                <button class="_btn" type="button" aria-label="aumentar valor" {{ $disableS2 ? 'disabled' : '' }} wire:click="buttonSumar('beds')">
                                    <span>
                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                            <path d="m2 16h28m-14-14v28"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <div class="_rect-b">
                            <div class="_block">
                                <div class="_img-f">
                                    <span class="_bg-border">
                                        <i class="far fa-plus-square _i-verde30"></i>
                                    </span>
                                </div>
                                <div class="_block">
                                    <h3 class="_txteh">Bedrooms</h3>
                                </div>
                            </div>

                            <div class="_2btns">
                                <button class="_btn" type="button" aria-label="disminuir valor" {{ $disableR3 ? 'disabled' : '' }} wire:click="buttonRestar('bedrooms')">
                                    <span>
                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                            <path d="m2 16h28"></path>
                                        </svg>
                                    </span>
                                </button>

                                <span aria-hidden="true">{{ $bedrooms }}</span>

                                <button class="_btn" type="button" aria-label="aumentar valor" {{ $disableS3 ? 'disabled' : '' }} wire:click="buttonSumar('bedrooms')">
                                    <span>
                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                            <path d="m2 16h28m-14-14v28"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <div class="_rect-b">
                            <div class="_block">
                                <div class="_img-f">
                                    <span class="_bg-border">
                                        <i class="far fa-plus-square _i-verde30"></i>
                                    </span>
                                </div>
                                <div class="_block">
                                    <h3 class="_txteh">Bathrooms</h3>
                                </div>
                            </div>

                            <div class="_2btns">
                                <button class="_btn" type="button" aria-label="disminuir valor" {{ $disableR4 ? 'disabled' : '' }} wire:click="buttonRestar('bathrooms')">
                                    <span>
                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                            <path d="m2 16h28"></path>
                                        </svg>
                                    </span>
                                </button>

                                <span aria-hidden="true">{{ $bathrooms }}</span>

                                <button class="_btn" type="button" aria-label="aumentar valor" {{ $disableS4 ? 'disabled' : '' }} wire:click="buttonSumar('bathrooms')">
                                    <span>
                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                            <path d="m2 16h28m-14-14v28"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="_block-jsb">
        <div class="_btnsmleft" wire:click="returnBack('maps')">
            <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                <path d="M5.294,1.824l4,4.005a.753.753,0,0,0,1.068,0,.763.763,0,0,0,0-1.071L5.83.22A.755.755,0,0,0,4.787.2L.221,4.755A.756.756,0,0,0,1.289,5.826Z" transform="translate(0 10.584) rotate(-90)" fill="#333"/>
            </svg>
            <span>Back</span>
        </div>
        <button type="button" class="btn-celest btns-modals" wire:click="next">Next</button>
    </div>
</div>