<div class="content_hidden-anhost">
    <div class="_wpwi48">
        <div class="fx fx-fd-c gp5">
            <h3 class="h2-guests">Let's start with these areas</h3>
            <p class="_txtec">Based on your listing info</p>
        </div>

        <div class="_bkpd352btns hr">
            <div class="fx fx-ai-b fx-fw-w fx-jc-sb gp25">
                <div class="fx fx-fd-c gp7">
                    <h3 class="_txteh">Bedroom</h3>
                </div>

                <div class="_2btnsgris">
                    <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputBedrooms <= 1 ? 'disabled' : '' }} wire:click="buttonDecreaseRequired('inputBedrooms')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28"></path>
                            </svg>
                        </span>
                    </button>
                    
                    <span class="_txtec333">{{ $inputBedrooms }}</span>

                    <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputBedrooms >= 5 ? 'disabled' : '' }} wire:click="buttonIncrease('inputBedrooms')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28m-14-14v28"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <div class="_bkpd352btns hr">
            <div class="fx fx-ai-b fx-fw-w fx-jc-sb gp25">
                <div class="fx fx-fd-c gp7">
                    <h3 class="_txteh">Bathroom</h3>
                    <p class="_txtec">Tollet, sink, shower and/or tub</p>
                </div>

                <div class="_2btnsgris">
                    <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputBathrooms <= 1 ? 'disabled' : '' }} wire:click="buttonDecreaseRequired('inputBathrooms')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28"></path>
                            </svg>
                        </span>
                    </button>
                    
                    <span class="_txtec333">{{ $inputBathrooms }}</span>

                    <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputBathrooms >= 5 ? 'disabled' : '' }} wire:click="buttonIncrease('inputBathrooms')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28m-14-14v28"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <div class="_bkpd352btns hr">
            <div class="fx fx-ai-b fx-fw-w fx-jc-sb gp25">
                <div class="fx fx-fd-c gp7">
                    <h3 class="_txteh">Bed</h3>
                </div>

                <div class="_2btnsgris">
                    <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputBed <= 1 ? 'disabled' : '' }} wire:click="buttonDecreaseRequired('inputBed')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28"></path>
                            </svg>
                        </span>
                    </button>
                    
                    <span class="_txtec333">{{ $inputBed }}</span>

                    <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputBed >= 5 ? 'disabled' : '' }} wire:click="buttonIncrease('inputBed')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28m-14-14v28"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <div class="_bkpd352btns hr">
            <div class="fx fx-ai-b fx-fw-w fx-jc-sb gp25">
                <div class="fx fx-fd-c gp7">
                    <h3 class="_txteh">Living room</h3>
                </div>

                <div class="_2btnsgris">
                    <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputLivingrooms <= 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputLivingrooms')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28"></path>
                            </svg>
                        </span>
                    </button>
                    
                    <span class="_txtec333">{{ $inputLivingrooms }}</span>

                    <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputLivingrooms >= 5 ? 'disabled' : '' }} wire:click="buttonIncrease('inputLivingrooms')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28m-14-14v28"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <div class="_bkpd352btns hr">
            <div class="fx fx-ai-b fx-fw-w fx-jc-sb gp25">
                <div class="fx fx-fd-c gp7">
                    <h3 class="_txteh">Hot tub</h3>
                </div>

                <div class="_2btnsgris">
                    <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputHottub <= 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputHottub')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28"></path>
                            </svg>
                        </span>
                    </button>
                    
                    <span class="_txtec333">{{ $inputHottub }}</span>

                    <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputHottub >= 5 ? 'disabled' : '' }} wire:click="buttonIncrease('inputHottub')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28m-14-14v28"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <div class="_bkpd352btns hr">
            <div class="fx fx-ai-b fx-fw-w fx-jc-sb gp25">
                <div class="fx fx-fd-c gp7">
                    <h3 class="_txteh">Exterior</h3>
                    <p class="_txtec">This lets you add a photo of what your place looks like from the outside</p>
                </div>

                <div class="_2btnsgris">
                    <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputExterior <= 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputExterior')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28"></path>
                            </svg>
                        </span>
                    </button>
                    
                    <span class="_txtec333">{{ $inputExterior }}</span>

                    <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputExterior >= 5 ? 'disabled' : '' }} wire:click="buttonIncrease('inputExterior')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28m-14-14v28"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <div class="_bkpd352btns" style="padding-bottom: 0;">
            <div class="fx fx-fd-c gp5">
                <h3 class="h2-guests">Let's start with these areas</h3>
            </div>
        </div>

        <div class="_bkpd352btns hr">
            <div class="fx fx-ai-b fx-fw-w fx-jc-sb gp25">
                <div class="fx fx-fd-c gp7">
                    <h3 class="_txteh">Half bathroom</h3>
                    <p class="_txtec">Toilet and sink</p>
                </div>

                <div class="_2btnsgris">
                    <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputHalfbathroom <= 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputHalfbathroom')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28"></path>
                            </svg>
                        </span>
                    </button>
                    
                    <span class="_txtec333">{{ $inputHalfbathroom }}</span>

                    <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputHalfbathroom >= 5 ? 'disabled' : '' }} wire:click="buttonIncrease('inputHalfbathroom')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28m-14-14v28"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <div class="_bkpd352btns hr">
            <div class="fx fx-ai-b fx-fw-w fx-jc-sb gp25">
                <div class="fx fx-fd-c gp7">
                    <h3 class="_txteh">Full kitchen</h3>
                </div>

                <div class="_2btnsgris">
                    <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputFullkitchen <= 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputFullkitchen')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28"></path>
                            </svg>
                        </span>
                    </button>
                    
                    <span class="_txtec333">{{ $inputFullkitchen }}</span>

                    <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputFullkitchen >= 5 ? 'disabled' : '' }} wire:click="buttonIncrease('inputFullkitchen')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28m-14-14v28"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <div class="_bkpd352btns hr">
            <div class="fx fx-ai-b fx-fw-w fx-jc-sb gp25">
                <div class="fx fx-fd-c gp7">
                    <h3 class="_txteh">Kitchenette</h3>
                    <p class="_txtec">A compact space to prepare food</p>
                </div>

                <div class="_2btnsgris">
                    <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputKitchenette <= 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputKitchenette')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28"></path>
                            </svg>
                        </span>
                    </button>
                    
                    <span class="_txtec333">{{ $inputKitchenette }}</span>

                    <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputKitchenette >= 5 ? 'disabled' : '' }} wire:click="buttonIncrease('inputKitchenette')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28m-14-14v28"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <div class="_bkpd352btns hr">
            <div class="fx fx-ai-b fx-fw-w fx-jc-sb gp25">
                <div class="fx fx-fd-c gp7">
                    <h3 class="_txteh">Dining area</h3>
                </div>

                <div class="_2btnsgris">
                    <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputDining <= 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputDining')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28"></path>
                            </svg>
                        </span>
                    </button>
                    
                    <span class="_txtec333">{{ $inputDining }}</span>

                    <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputDining >= 5 ? 'disabled' : '' }} wire:click="buttonIncrease('inputDining')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28m-14-14v28"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <div class="_bkpd352btns hr">
            <div class="fx fx-ai-b fx-fw-w fx-jc-sb gp25">
                <div class="fx fx-fd-c gp7">
                    <h3 class="_txteh">Office</h3>
                </div>

                <div class="_2btnsgris">
                    <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputOffice <= 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputOffice')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28"></path>
                            </svg>
                        </span>
                    </button>
                    
                    <span class="_txtec333">{{ $inputOffice }}</span>

                    <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputOffice >= 5 ? 'disabled' : '' }} wire:click="buttonIncrease('inputOffice')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28m-14-14v28"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <div class="_bkpd352btns hr">
            <div class="fx fx-ai-b fx-fw-w fx-jc-sb gp25">
                <div class="fx fx-fd-c gp7">
                    <h3 class="_txteh">Backyard</h3>
                </div>

                <div class="_2btnsgris">
                    <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputBackyard <= 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputBackyard')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28"></path>
                            </svg>
                        </span>
                    </button>
                    
                    <span class="_txtec333">{{ $inputBackyard }}</span>

                    <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputBackyard >= 5 ? 'disabled' : '' }} wire:click="buttonIncrease('inputBackyard')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28m-14-14v28"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <div class="_bkpd352btns hr">
            <div class="fx fx-ai-b fx-fw-w fx-jc-sb gp25">
                <div class="fx fx-fd-c gp7">
                    <h3 class="_txteh">Patio</h3>
                </div>

                <div class="_2btnsgris">
                    <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputPatio <= 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputPatio')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28"></path>
                            </svg>
                        </span>
                    </button>
                    
                    <span class="_txtec333">{{ $inputPatio }}</span>

                    <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputPatio >= 5 ? 'disabled' : '' }} wire:click="buttonIncrease('inputPatio')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28m-14-14v28"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <div class="_bkpd352btns hr">
            <div class="fx fx-ai-b fx-fw-w fx-jc-sb gp25">
                <div class="fx fx-fd-c gp7">
                    <h3 class="_txteh">Pool</h3>
                </div>

                <div class="_2btnsgris">
                    <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputPool <= 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputPool')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28"></path>
                            </svg>
                        </span>
                    </button>
                    
                    <span class="_txtec333">{{ $inputPool }}</span>

                    <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputPool >= 5 ? 'disabled' : '' }} wire:click="buttonIncrease('inputPool')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28m-14-14v28"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <div class="_bkpd352btns hr">
            <div class="fx fx-ai-b fx-fw-w fx-jc-sb gp25">
                <div class="fx fx-fd-c gp7">
                    <h3 class="_txteh">Garage</h3>
                </div>

                <div class="_2btnsgris">
                    <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputGarage <= 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputGarage')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28"></path>
                            </svg>
                        </span>
                    </button>
                    
                    <span class="_txtec333">{{ $inputGarage }}</span>

                    <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputGarage >= 5 ? 'disabled' : '' }} wire:click="buttonIncrease('inputGarage')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28m-14-14v28"></path>
                            </svg>
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <div class="_bkpd352btns hr">
            <div class="fx fx-ai-b fx-fw-w fx-jc-sb gp25">
                <div class="fx fx-fd-c gp7">
                    <h3 class="_txteh">Gym</h3>
                </div>

                <div class="_2btnsgris">
                    <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputGym <= 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputGym')">
                        <span>
                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                <path d="m2 16h28"></path>
                            </svg>
                        </span>
                    </button>
                    
                    <span class="_txtec333">{{ $inputGym }}</span>

                    <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputGym >= 5 ? 'disabled' : '' }} wire:click="buttonIncrease('inputGym')">
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