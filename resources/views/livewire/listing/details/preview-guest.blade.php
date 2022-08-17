<div class="modal_block" style="height: 652px;">
    <div class="content_hidden-anhost" style="margin-bottom: 0;">
        <div class="_pdleftright35">
            <h2 class="h2_publish" style="padding-bottom: 8px;">Preview how much guests pay</h2>
            <p class="_txtec">Select any combination of nights, guests and pets for us to show you the final price.</p>

            <div class="fx fx-fw-w" style="gap: 12px; margin: 24px 0 32px;">
                <div class="selected-modal" style="margin: 0;">
                    <select wire:model.lazy="inputNight">
                        <option value="1">1 night</option>
                        <option value="2">2 night</option>
                        <option value="3">3 night</option>
                        <option value="7">1 week</option>
                        <option value="28">1 month</option>
                    </select>

                    <svg xmlns="http://www.w3.org/2000/svg" width="10.584" height="5.965" viewBox="0 0 10.584 5.965">
                        <path d="M11.482,15.474l4-4.005a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071l-4.535,4.538c-.287.287-1.043.022-1.043.022L6.408,12.543a.757.757,0,0,1,1.068-1.071Z" transform="translate(-6.188 -11.246)" fill="#7d7d7d"></path>
                    </svg>
                </div>

                <div class="pr content_show_modal_left guest-btn-modal" wire:ignore.self>
                    <button class="select_btn-border click_guest">
                        <span>{{ $inputGuestEnd  }} Guest</span>

                        <svg xmlns="http://www.w3.org/2000/svg" width="10.584" height="5.965" viewBox="0 0 10.584 5.965">
                            <path d="M11.482,15.474l4-4.005a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071l-4.535,4.538c-.287.287-1.043.022-1.043.022L6.408,12.543a.757.757,0,0,1,1.068-1.071Z" transform="translate(-6.188 -11.246)" fill="#7d7d7d"></path>
                        </svg>
                    </button>

                    <div class="container_admin-host" style="z-index: 1;">
                        <div class="modal-anhost-guest click_afuera_modal"></div>
                        <div class="pd_anhost-modal">
                            <div class="_z4lmgp">
                                <div class="_bef-places _bef-places-modal">
                                    <div class="_c-h fx fx-jc-sb fx-ai-fs" style="border-bottom: 2px solid #E3EDF3;">
                                        <div style="padding: 22px;">
                                            <h2 class="h2-guests">How many guests?</h2>
                                        </div>
                                        <span class="x_modal click_x_modal">X</span>
                                    </div>
                                    
                                    <div style="padding: 0 22px;">
                                        <div class="_cont-places">
                                            <div class="_inf">
                                                <div class="_txteh">Adults</div>
                                                <div class="_txtec">Ages 13 or above</div>
                                            </div>
                                            <div class="_2btns">
                                                <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputGuest['adult'] == 1 ? 'disabled' : '' }} wire:click="buttonDecrease('adult')">
                                                    <span>
                                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                            <path d="m2 16h28"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                
                                                <span>{{ $inputGuest['adult'] }}</span>

                                                <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputGuest['adult'] >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('adult')">
                                                    <span>
                                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                            <path d="m2 16h28m-14-14v28"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="_cont-places">
                                            <div class="_inf">
                                                <div class="_txteh">Children</div>
                                                <div class="_txtec">Ages 2-12</div>
                                            </div>
                                            <div class="_2btns">
                                                <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputGuest['children'] == 0 ? 'disabled' : '' }} wire:click="buttonDecrease('children')">
                                                    <span>
                                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                            <path d="m2 16h28"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                
                                                <span>{{ $inputGuest['children'] }}</span>

                                                <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputGuest['children'] >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('children')">
                                                    <span>
                                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                            <path d="m2 16h28m-14-14v28"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="_cont-places">
                                            <div class="_inf">
                                                <div class="_txteh">Infants</div>
                                                <div class="_txtec">Under 2 · Stay for free</div>
                                            </div>
                                            <div class="_2btns">
                                                <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputGuest['infant'] == 0 ? 'disabled' : '' }} wire:click="buttonDecrease('infant')">
                                                    <span>
                                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                            <path d="m2 16h28"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                
                                                <span>{{ $inputGuest['infant'] }}</span>

                                                <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputGuest['infant'] >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('infant')">
                                                    <span>
                                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                            <path d="m2 16h28m-14-14v28"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="fx fx-jc-r" style="padding: 16px 22px; border-top: 2px solid #E3EDF3;">
                                        <button class="btn-celest" wire:click="Apply('guest')">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pr content_show_modal_left pets-btn-modal" wire:ignore.self>
                    <button class="select_btn-border click_guest">
                        @if ( $inputPetsEnd != 0)
                            <span>{{ $inputPetsEnd }} Pets</span>
                        @else
                            <span>No Pets</span>
                        @endif

                        <svg xmlns="http://www.w3.org/2000/svg" width="10.584" height="5.965" viewBox="0 0 10.584 5.965">
                            <path d="M11.482,15.474l4-4.005a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071l-4.535,4.538c-.287.287-1.043.022-1.043.022L6.408,12.543a.757.757,0,0,1,1.068-1.071Z" transform="translate(-6.188 -11.246)" fill="#7d7d7d"></path>
                        </svg>
                    </button>

                    <div class="container_admin-host" style="z-index: 1;">
                        <div class="modal-anhost-guest click_afuera_modal"></div>
                        <div class="pd_anhost-modal">
                            <div class="_z4lmgp">
                                <div class="_bef-places _bef-places-modal">
                                    <div class="_c-h fx fx-jc-sb fx-ai-fs" style="border-bottom: 2px solid #E3EDF3;">
                                        <div style="padding: 22px;">
                                            <h2 class="h2-guests">How many pets?</h2>
                                        </div>
                                        <span class="x_modal click_x_modal">X</span>
                                    </div>
                                    
                                    <div style="padding: 0 22px;">
                                        <div class="_cont-places">
                                            <div class="_inf">
                                                <div class="_txteh">Pets</div>
                                            </div>
                                            <div class="_2btns">
                                                <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputPets == 0 ? 'disabled' : '' }} wire:click="buttonDecrease('pets')">
                                                    <span>
                                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                            <path d="m2 16h28"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                
                                                <span>{{ $inputPets }}</span>

                                                <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputPets >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('pets')">
                                                    <span>
                                                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                            <path d="m2 16h28m-14-14v28"></path>
                                                        </svg>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="fx fx-jc-r" style="padding: 16px 22px; border-top: 2px solid #E3EDF3;">
                                        <button class="btn-celest" wire:click="Apply('pets')">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border_preview_g_p">
                <div class="_cns _cns-mdls">
                    <div class="hr" style="padding-bottom: 12px;">
                        <span class="f-cth">
                            <div>
                                <div class="_txtec">{{ \App\Models\Currencs::Symbol( $contentPricing['listing_currency'] ) . $contentPricing['base_price'] }} for {{ $inputNight }} night</div>
                                <span class="_txtblu14" style="font-weight: normal; margin-top: 3px;">your base price</span>
                            </div>
                            <div class="_txtec">{{ \App\Models\Currencs::Symbol( $contentPricing['listing_currency'] ) . ( $contentPricing['base_price'] * $inputNight ) }}</div>
                        </span>

                        <span class="f-cth">
                            <div class="_txtec">Guest service fee</div>
                            <div class="_txtec">{{ \App\Models\Currencs::Symbol( $contentPricing['listing_currency'] ) . $guestServTotal }}</div>
                        </span>
                        @if ( $inputNight == 7 && $contentPricing['weekly_discount'] != 0 )
                            <span class="f-cth">
                                <div class="_txtec">Weekly discount</div>
                                <div class="_txtec">-{{ \App\Models\Currencs::Symbol( $contentPricing['listing_currency'] ) . $weeklyTotal }}</div>
                            </span>
                        @endif

                        @if ( $inputNight == 28 && $contentPricing['monthly_discount'] != 0 )
                            <span class="f-cth">
                                <div class="_txtec">Weekly discount</div>
                                <div class="_txtec">-{{ \App\Models\Currencs::Symbol( $contentPricing['listing_currency'] ) . $monthlyTotal }}</div>
                            </span>
                        @endif

                        @if ( $inputGuestEnd != 1 && $contentPricing['extra_guest_fee'] != 0 )
                            <span class="f-cth">
                                <div class="_txtec">Additional Guest Fee</div>
                                <div class="_txtec">{{ \App\Models\Currencs::Symbol( $contentPricing['listing_currency'] ) . $guestTotal }}</div>
                            </span>
                        @endif

                        @if ( $inputPetsEnd != 0 && $contentPricing['pet_fee'] != 0 )
                            <span class="f-cth">
                                <div class="_txtec">Pets Fee</div>
                                <div class="_txtec">{{ \App\Models\Currencs::Symbol( $contentPricing['listing_currency'] ) . $petsTotal }}</div>
                            </span>
                        @endif








                    </div>

                    <div class="hr" style="padding-top: 12px;">
                        <span class="f-cth">
                            <div class="_txteh">Total</div>
                            <div class="_txteh">{{ \App\Models\Currencs::Symbol( $contentPricing['listing_currency'] ) . $totalReview }}</div>
                        </span>

                        <span class="f-cth">
                            <div class="_txtec">your income</div>
                            <div class="_txtec">{{ \App\Models\Currencs::Symbol( $contentPricing['listing_currency'] ) . $totalReview }}</div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>