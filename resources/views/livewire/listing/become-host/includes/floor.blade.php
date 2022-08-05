<div class="_ctoverlay">
    <div class="content_right">
        <div class="content_hidden">
            <div class="content_mr">
                <div class="content_step">
                    <h2 class="h2_publish h2_mx_min" style="margin-bottom: 50px;">How many guests would you like to welcome?</h2>
                    
                    <div class="_grid max_min">
                        <div class="_rect-b">
                            <div class="fx fx-ai-c _wdth">
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
                                <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputGuests == 1 ? 'disabled' : '' }} wire:click="buttonDecrease('inputGuests')">
                                    <span>
                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                            <path d="m2 16h28"></path>
                                        </svg>
                                    </span>
                                </button>
                                
                                <span aria-hidden="true">{{ $inputGuests }}</span>

                                <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputGuests >= 16 ? 'disabled' : '' }} wire:click="buttonIncrease('inputGuests')">
                                    <span>
                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                            <path d="m2 16h28m-14-14v28"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <div class="_rect-b">
                            <div class="fx fx-ai-c _wdth">
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
                                <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputBeds == 1 ? 'disabled' : '' }} wire:click="buttonDecrease('inputBeds')">
                                    <span>
                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                            <path d="m2 16h28"></path>
                                        </svg>
                                    </span>
                                </button>
                                
                                <span aria-hidden="true">{{ $inputBeds }}</span>

                                <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputBeds >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('inputBeds')">
                                    <span>
                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                            <path d="m2 16h28m-14-14v28"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <div class="_rect-b">
                            <div class="fx fx-ai-c _wdth">
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
                                <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputBedrooms == 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputBedrooms')">
                                    <span>
                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                            <path d="m2 16h28"></path>
                                        </svg>
                                    </span>
                                </button>
                                
                                <span aria-hidden="true">{{ $inputBedrooms }}</span>

                                <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputBedrooms >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('inputBedrooms')">
                                    <span>
                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                            <path d="m2 16h28m-14-14v28"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <div class="_rect-b">
                            <div class="fx fx-ai-c _wdth">
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
                                <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputBathrooms == 1 ? 'disabled' : '' }} wire:click="buttonDecrease('inputBathrooms')">
                                    <span>
                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                            <path d="m2 16h28"></path>
                                        </svg>
                                    </span>
                                </button>
                                
                                <span aria-hidden="true">{{ $inputBathrooms }}</span>

                                <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputBathrooms >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('inputBathrooms')">
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
</div>