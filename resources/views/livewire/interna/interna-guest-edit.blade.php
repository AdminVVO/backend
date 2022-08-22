<div class="fxpaijcpmi">
    <div class="_z4lmgp">
        <div class="fxfbwhmhbrzi">
            <div class="pafxtlz">
                <button type="button" class="circle__btn-cerrar xhidemdusr">
                    <span class="pr">
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none">
                                <path d="m20 28-11.29289322-11.2928932c-.39052429-.3905243-.39052429-1.0236893 0-1.4142136l11.29289322-11.2928932"></path>
                            </g>
                        </svg>
                    </span>
                </button>
            </div>
            <div class="fpstaltz"></div>

            <div class="whfxoyx">
                <div class="poyxwh">
                    <div class="popup-guests-edit">
                        <h2 class="h2-guests">Guests</h2>
                        <p class="_txtec mr-t24">This place has a maximum of {{ $number_guests }} guests, not including infants, {{ $pets_allowed ? " pets allowed." : " pets arent's allowed." }}</p>

                        <div class="mr-t24">
                            <div class="cpd2btns hr">
                                <div class="fx fx-ai-b fx-jc-sb gp25">
                                    <div class="fx fx-fd-c gp7">
                                        <h3 class="_txteh">Adults</h3>
                                    </div>

                                    <div class="_2btnsgris">
                                        <button class="_btn" {{ $inputAdult <= 1 ? 'disabled' : '' }} type="button" aria-label="disminuir valor" wire:click="buttonDecrease('adult')">
                                            <span>
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                                    <path d="m2 16h28"></path>
                                                </svg>
                                            </span>
                                        </button>
                                        
                                        <span class="_txtec333">{{ $inputAdult }}</span>

                                        <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputAdult >= 50 || $number_guests == $maxGuest ? 'disabled' : '' }} wire:click="buttonIncrease('adult')">
                                            <span>
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                                    <path d="m2 16h28m-14-14v28"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="cpd2btns hr">
                                <div class="fx fx-ai-b fx-jc-sb gp25">
                                    <div class="fx fx-fd-c gp7">
                                        <h3 class="_txteh">Childen</h3>
                                        <p class="_txtec">Ages 2-12</p>
                                    </div>

                                    <div class="_2btnsgris">
                                        <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputKids <= 0 ? 'disabled' : '' }} wire:click="buttonDecrease('kids')">
                                            <span>
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                                    <path d="m2 16h28"></path>
                                                </svg>
                                            </span>
                                        </button>
                                        
                                        <span class="_txtec333">{{ $inputKids }}</span>

                                        <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputKids >= 50 || $number_guests == $maxGuest ? 'disabled' : '' }} wire:click="buttonIncrease('kids')">
                                            <span>
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                                    <path d="m2 16h28m-14-14v28"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="cpd2btns hr">
                                <div class="fx fx-ai-b fx-jc-sb gp25">
                                    <div class="fx fx-fd-c gp7">
                                        <h3 class="_txteh">Infants</h3>
                                        <p class="_txtec">Under 2</p>
                                    </div>

                                    <div class="_2btnsgris">
                                        <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputInfant <= 0 ? 'disabled' : '' }} wire:click="buttonDecrease('infant')">
                                            <span>
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                                    <path d="m2 16h28"></path>
                                                </svg>
                                            </span>
                                        </button>
                                        
                                        <span class="_txtec333">{{ $inputInfant }}</span>

                                        <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputInfant >= 5 ? 'disabled' : '' }} wire:click="buttonIncrease('infant')">
                                            <span>
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                                    <path d="m2 16h28m-14-14v28"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="cpd2btns hr">
                                <div class="fx fx-ai-b fx-jc-sb gp25">
                                    <div class="fx fx-fd-c gp7">
                                        <h3 class="_txteh">Pets</h3>
                                        <button type="button" class="txtunder__ics txt16 js__popup_bringind_animal">Bringing an assistance animal?</button>
                                    </div>

                                    <div class="_2btnsgris">
                                        <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputPets <= 0 ? 'disabled' : '' }} wire:click="buttonDecrease('pets')">
                                            <span>
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                                    <path d="m2 16h28"></path>
                                                </svg>
                                            </span>
                                        </button>
                                        
                                        <span class="_txtec333">{{ $inputPets }}</span>

                                        <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputPets >= 5 || !$pets_allowed ? 'disabled' : '' }} wire:click="buttonIncrease('pets')">
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

            <div class="footer__btnmdl hrtop pd32">
                <button type="button" class="txtunder__ics xhidemdusr">Cancel</button>

                <button type="button" class="btn-celest xhidemdusr" wire:click="submitEditGuest">Save</button>
            </div>
        </div>
    </div>
</div>
