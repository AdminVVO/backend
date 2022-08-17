<div class="modal_content-anhost">
    <div class="_scloseMdls">
        <span class="clickSavePopupStep2">X</span>
    </div>

    <div class="_wpwi48 mr-b25">
        <div class="fx fx-fd-c gp18">
            <h2 class="h2_publish">Which areas can guests use?</h2>
            <p class="_txtec">Add all the rooms guests can use - even shared areas</p>
        </div>
    </div>

    <div class="modal_block">
        <div class="content_hidden-anhost">
            <div class="_wpwi48">
                <div class="_bkpd352btns hr">
                    <div class="fx fx-ai-b fx-jc-sb gp25">
                        <div class="fx fx-fd-c gp7">
                            <h3 class="_txteh">Bedroom</h3>
                        </div>

                        <div class="_2btnsgris">
                            <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputContentRooms['inputBedrooms'] == 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputBedrooms')">
                                <span>
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                        <path d="m2 16h28"></path>
                                    </svg>
                                </span>
                            </button>
                            
                            <span class="_txtec333">{{ $inputContentRooms['inputBedrooms'] }}</span>

                            <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputContentRooms['inputBedrooms'] >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('inputBedrooms')">
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
                    <div class="fx fx-ai-b fx-jc-sb gp25">
                        <div class="fx fx-fd-c gp7">
                            <h3 class="_txteh">Full bathroom</h3>
                            <p class="_txtec">Tollet, sink, shower and/or tub</p>
                        </div>

                        <div class="_2btnsgris">
                            <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputContentRooms['inputFullbathroom'] == 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputFullbathroom')">
                                <span>
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                        <path d="m2 16h28"></path>
                                    </svg>
                                </span>
                            </button>
                            
                            <span class="_txtec333">{{ $inputContentRooms['inputFullbathroom'] }}</span>

                            <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputContentRooms['inputFullbathroom'] >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('inputFullbathroom')">
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
                    <div class="fx fx-ai-b fx-jc-sb gp25">
                        <div class="fx fx-fd-c gp7">
                            <h3 class="_txteh">Living room</h3>
                        </div>

                        <div class="_2btnsgris">
                            <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputContentRooms['inputLivingroom'] == 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputLivingroom')">
                                <span>
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                        <path d="m2 16h28"></path>
                                    </svg>
                                </span>
                            </button>
                            
                            <span class="_txtec333">{{ $inputContentRooms['inputLivingroom'] }}</span>

                            <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputContentRooms['inputLivingroom'] >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('inputLivingroom')">
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
                    <div class="fx fx-ai-b fx-jc-sb gp25">
                        <div class="fx fx-fd-c gp7">
                            <h3 class="_txteh">Hot tub</h3>
                        </div>

                        <div class="_2btnsgris">
                            <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputContentRooms['inputHottub'] == 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputHottub')">
                                <span>
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                        <path d="m2 16h28"></path>
                                    </svg>
                                </span>
                            </button>
                            
                            <span class="_txtec333">{{ $inputContentRooms['inputHottub'] }}</span>

                            <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputContentRooms['inputHottub'] >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('inputHottub')">
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
                    <div class="fx fx-ai-b fx-jc-sb gp25">
                        <div class="fx fx-fd-c gp7">
                            <h3 class="_txteh">Exterior</h3>
                            <p class="_txtec">This lets you add a photo of what your place looks like from the outside</p>
                        </div>

                        <div class="_2btnsgris">
                            <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputContentRooms['inputExterior'] == 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputExterior')">
                                <span>
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                        <path d="m2 16h28"></path>
                                    </svg>
                                </span>
                            </button>
                            
                            <span class="_txtec333">{{ $inputContentRooms['inputExterior'] }}</span>

                            <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputContentRooms['inputExterior'] >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('inputExterior')">
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
                    <div class="fx fx-ai-b fx-jc-sb gp25">
                        <div class="fx fx-fd-c gp7">
                            <h3 class="_txteh">Half bathroom</h3>
                            <p class="_txtec">Toilet and sink</p>
                        </div>

                        <div class="_2btnsgris">
                            <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputContentRooms['inputHalfbathroom'] == 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputHalfbathroom')">
                                <span>
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                        <path d="m2 16h28"></path>
                                    </svg>
                                </span>
                            </button>
                            
                            <span class="_txtec333">{{ $inputContentRooms['inputHalfbathroom'] }}</span>

                            <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputContentRooms['inputHalfbathroom'] >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('inputHalfbathroom')">
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
                    <div class="fx fx-ai-b fx-jc-sb gp25">
                        <div class="fx fx-fd-c gp7">
                            <h3 class="_txteh">Full kitchen</h3>
                        </div>

                        <div class="_2btnsgris">
                            <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputContentRooms['inputFullkitchen'] == 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputFullkitchen')">
                                <span>
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                        <path d="m2 16h28"></path>
                                    </svg>
                                </span>
                            </button>
                            
                            <span class="_txtec333">{{ $inputContentRooms['inputFullkitchen'] }}</span>

                            <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputContentRooms['inputFullkitchen'] >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('inputFullkitchen')">
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
                    <div class="fx fx-ai-b fx-jc-sb gp25">
                        <div class="fx fx-fd-c gp7">
                            <h3 class="_txteh">Kitchenette</h3>
                            <p class="_txtec">A compact space to prepare food</p>
                        </div>

                        <div class="_2btnsgris">
                            <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputContentRooms['inputKitchenette'] == 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputKitchenette')">
                                <span>
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                        <path d="m2 16h28"></path>
                                    </svg>
                                </span>
                            </button>
                            
                            <span class="_txtec333">{{ $inputContentRooms['inputKitchenette'] }}</span>

                            <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputContentRooms['inputKitchenette'] >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('inputKitchenette')">
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
                    <div class="fx fx-ai-b fx-jc-sb gp25">
                        <div class="fx fx-fd-c gp7">
                            <h3 class="_txteh">Dining area</h3>
                        </div>

                        <div class="_2btnsgris">
                            <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputContentRooms['inputDiningarea'] == 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputDiningarea')">
                                <span>
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                        <path d="m2 16h28"></path>
                                    </svg>
                                </span>
                            </button>
                            
                            <span class="_txtec333">{{ $inputContentRooms['inputDiningarea'] }}</span>

                            <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputContentRooms['inputDiningarea'] >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('inputDiningarea')">
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
                    <div class="fx fx-ai-b fx-jc-sb gp25">
                        <div class="fx fx-fd-c gp7">
                            <h3 class="_txteh">Office</h3>
                        </div>

                        <div class="_2btnsgris">
                            <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputContentRooms['inputOffice'] == 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputOffice')">
                                <span>
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                        <path d="m2 16h28"></path>
                                    </svg>
                                </span>
                            </button>
                            
                            <span class="_txtec333">{{ $inputContentRooms['inputOffice'] }}</span>

                            <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputContentRooms['inputOffice'] >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('inputOffice')">
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
                    <div class="fx fx-ai-b fx-jc-sb gp25">
                        <div class="fx fx-fd-c gp7">
                            <h3 class="_txteh">Backyard</h3>
                        </div>

                        <div class="_2btnsgris">
                            <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputContentRooms['inputBackyard'] == 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputBackyard')">
                                <span>
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                        <path d="m2 16h28"></path>
                                    </svg>
                                </span>
                            </button>
                            
                            <span class="_txtec333">{{ $inputContentRooms['inputBackyard'] }}</span>

                            <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputContentRooms['inputBackyard'] >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('inputBackyard')">
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
                    <div class="fx fx-ai-b fx-jc-sb gp25">
                        <div class="fx fx-fd-c gp7">
                            <h3 class="_txteh">Patio</h3>
                        </div>

                        <div class="_2btnsgris">
                            <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputContentRooms['inputPatio'] == 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputPatio')">
                                <span>
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                        <path d="m2 16h28"></path>
                                    </svg>
                                </span>
                            </button>
                            
                            <span class="_txtec333">{{ $inputContentRooms['inputPatio'] }}</span>

                            <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputContentRooms['inputPatio'] >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('inputPatio')">
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
                    <div class="fx fx-ai-b fx-jc-sb gp25">
                        <div class="fx fx-fd-c gp7">
                            <h3 class="_txteh">Pool</h3>
                        </div>

                        <div class="_2btnsgris">
                            <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputContentRooms['inputPool'] == 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputPool')">
                                <span>
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                        <path d="m2 16h28"></path>
                                    </svg>
                                </span>
                            </button>
                            
                            <span class="_txtec333">{{ $inputContentRooms['inputPool'] }}</span>

                            <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputContentRooms['inputPool'] >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('inputPool')">
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
                    <div class="fx fx-ai-b fx-jc-sb gp25">
                        <div class="fx fx-fd-c gp7">
                            <h3 class="_txteh">Garage</h3>
                        </div>

                        <div class="_2btnsgris">
                            <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputContentRooms['inputGarage'] == 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputGarage')">
                                <span>
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                        <path d="m2 16h28"></path>
                                    </svg>
                                </span>
                            </button>
                            
                            <span class="_txtec333">{{ $inputContentRooms['inputGarage'] }}</span>

                            <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputContentRooms['inputGarage'] >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('inputGarage')">
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
                    <div class="fx fx-ai-b fx-jc-sb gp25">
                        <div class="fx fx-fd-c gp7">
                            <h3 class="_txteh">Gym</h3>
                        </div>

                        <div class="_2btnsgris">
                            <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputContentRooms['inputGym'] == 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputGym')">
                                <span>
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                        <path d="m2 16h28"></path>
                                    </svg>
                                </span>
                            </button>
                            
                            <span class="_txtec333">{{ $inputContentRooms['inputGym'] }}</span>

                            <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputContentRooms['inputGym'] >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('inputGym')">
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

    <div class="_zjunba">
        <button class="btn-celest clickSavePopupStep2" wire:click="saveWithAreas">Save</button>
    </div>
</div>