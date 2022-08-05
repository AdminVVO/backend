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
                        <p class="_txtec mr-t24">This place has a maximum of {{ $max_people }} guests. {{ in_array('Children', $allow) ? 'Allow' : 'Not' }} including children, {{ in_array('Infants', $allow) ? 'Allow' : 'Not' }} including infants. Pets {{ $pets_allowed ? '' : "arent's" }} allowed.</p>

                        <div class="mr-t24">
                            <div class="cpd2btns hr">
                                <div class="fx fx-ai-b fx-jc-sb gp25">
                                    <div class="fx fx-fd-c gp7">
                                        <h3 class="_txteh">Bedroom</h3>
                                    </div>

                                    <div class="_2btnsgris">
                                        <button class="_btn" type="button" aria-label="disminuir valor" disabled="">
                                            <span>
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                                    <path d="m2 16h28"></path>
                                                </svg>
                                            </span>
                                        </button>
                                        
                                        <span class="_txtec333">1</span>

                                        <button class="_btn" type="button" aria-label="aumentar valor">
                                            <span>
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                                    <path d="m2 16h28m-14-14v28"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            @if ( in_array('Children', $allow) )
                                <div class="cpd2btns hr">
                                    <div class="fx fx-ai-b fx-jc-sb gp25">
                                        <div class="fx fx-fd-c gp7">
                                            <h3 class="_txteh">Childen</h3>
                                            <p class="_txtec">Ages 2-12</p>
                                        </div>

                                        <div class="_2btnsgris">
                                            <button class="_btn" type="button" aria-label="disminuir valor" disabled="">
                                                <span>
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                                        <path d="m2 16h28"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                            
                                            <span class="_txtec333">0</span>

                                            <button class="_btn" type="button" aria-label="aumentar valor">
                                                <span>
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                                        <path d="m2 16h28m-14-14v28"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if ( in_array('Infants', $allow) )
                                <div class="cpd2btns hr">
                                    <div class="fx fx-ai-b fx-jc-sb gp25">
                                        <div class="fx fx-fd-c gp7">
                                            <h3 class="_txteh">Infants</h3>
                                            <p class="_txtec">Under 2 ages</p>
                                        </div>

                                        <div class="_2btnsgris">
                                            <button class="_btn" type="button" aria-label="disminuir valor" disabled="">
                                                <span>
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                                        <path d="m2 16h28"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                            
                                            <span class="_txtec333">0</span>

                                            <button class="_btn" type="button" aria-label="aumentar valor">
                                                <span>
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                                        <path d="m2 16h28m-14-14v28"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            @if ( $pets_allowed )
                                <div class="cpd2btns hr">
                                    <div class="fx fx-ai-b fx-jc-sb gp25">
                                        <div class="fx fx-fd-c gp7">
                                            <h3 class="_txteh">Pets</h3>
                                            <button type="button" class="txtunder__ics txt16 js__popup_bringind_animal">
                                                <span class="_txtec">Bringing an assistance animal?</span>
                                            </button>
                                        </div>

                                        <div class="_2btnsgris">
                                            <button class="_btn" type="button" aria-label="disminuir valor" disabled="">
                                                <span>
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                                        <path d="m2 16h28"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                            
                                            <span class="_txtec333">0</span>

                                            <button class="_btn" type="button" aria-label="aumentar valor">
                                                <span>
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                                        <path d="m2 16h28m-14-14v28"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer__btnmdl hrtop pd32">
                <button type="button" class="txtunder__ics xhidemdusr">Cancel</button>

                <button type="button" class="btn-celest">Save</button>
            </div>
        </div>
    </div>
</div>
