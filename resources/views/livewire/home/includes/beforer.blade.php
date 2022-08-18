<div class="_bef-places popup_add_guest_places">
    <div class="fxfbwhmhbrzi">
        <div class="pafxtlz showfx743">
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
        <div class="fpstaltz showfx743"></div>

        <div class="whfxoyx">
            <div class="poyxwh" wire:ignore.self>
                <div class="cpd2btns hr">
                    <div class="fx fx-ai-b fx-jc-sb gp25">
                        <div class="fx fx-fd-c gp7">
                            <div class="_txteh">Adults</div>
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

                            <button class="_btn" {{ $inputAdult >= 5 ? 'disabled' : '' }} type="button" aria-label="aumentar valor" wire:click="buttonIncrease('adult')">
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
                            <div class="_txteh">Childen</div>
                            <p class="_txtec">Ages 2-12</p>
                        </div>

                        <div class="_2btnsgris">
                            <button class="_btn" {{ $inputKids == 0 ? 'disabled' : '' }} type="button" aria-label="disminuir valor" wire:click="buttonDecrease('kids')">
                                <span>
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                        <path d="m2 16h28"></path>
                                    </svg>
                                </span>
                            </button>
                            
                            <span class="_txtec333">{{ $inputKids }}</span>

                            <button class="_btn" {{ $inputKids >= 5 ? 'disabled' : '' }} type="button" aria-label="aumentar valor" wire:click="buttonIncrease('kids')">
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
                            <div class="_txteh">Infants</div>
                            <p class="_txtec">Under 2</p>
                        </div>

                        <div class="_2btnsgris">
                            <button class="_btn" {{ $inputInfant == 0 ? 'disabled' : '' }} type="button" aria-label="disminuir valor" wire:click="buttonDecrease('infant')">
                                <span>
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                        <path d="m2 16h28"></path>
                                    </svg>
                                </span>
                            </button>
                            
                            <span class="_txtec333">{{ $inputInfant }}</span>

                            <button class="_btn" {{ $inputInfant >= 5 ? 'disabled' : '' }} type="button" aria-label="aumentar valor" wire:click="buttonIncrease('infant')">
                                <span>
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                        <path d="m2 16h28m-14-14v28"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="cpd2btns">
                    <div class="fx fx-ai-b fx-jc-sb gp25">
                        <div class="fx fx-fd-c gp7">
                            <div class="_txteh">Pets</div>
                            <button type="button" class="txtunder__ics txt16 js__popup_bringind_animal">
                                <span class="_txtec">Bringing an assistance animal?</span>
                            </button>
                        </div>

                        <div class="_2btnsgris">
                            <button class="_btn" {{ $inputPets == 0 ? 'disabled' : '' }} type="button" aria-label="disminuir valor" wire:click="buttonDecrease('pets')">
                                <span>
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                        <path d="m2 16h28"></path>
                                    </svg>
                                </span>
                            </button>
                            
                            <span class="_txtec333">{{ $inputPets }}</span>

                            <button class="_btn" {{ $inputPets >= 5 ? 'disabled' : '' }} type="button" aria-label="aumentar valor" wire:click="buttonIncrease('pets')">
                                <span>
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                        <path d="m2 16h28m-14-14v28"></path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>

                    <p class="_txtec mr-t25">If you are lucky enough to have more than 2 pets with you, be sure to let your host know.</p>
                </div>
            </div>
        </div>

        <div class="footer__btnmdl hrtop showfx743 pd32">
            <button type="button" class="txtunder__ics xhidemdusr">Cancel</button>
            <button type="button" class="btn-celest">Save</button>
        </div>
    </div>
</div>
