<aside class="content-aside_prec skeleton">
    <div class="content_prec fx fx-fw-w fx-ai-b fx-jc-sb gp8">
        <div class="block_prec-res skeleton">
            @if ( $first_guest )
                <span class="opac">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $base_descont }}</span>
                <span class="prec_black">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $inputBase }}</span>
            @else
                <span class="prec_black">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $inputBase }}</span>
            @endif
            <span class="txt_night">/night</span>
        </div>

        <span class="_1y9gwt75 skeleton">
            <span class="_9qqdp4">
                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="fill: #FF5A5F;">
                    <path d="M15.094 1.579l-4.124 8.885-9.86 1.27a1 1 0 0 0-.542 1.736l7.293 6.565-1.965 9.852a1 1 0 0 0 1.483 1.061L16 25.951l8.625 4.997a1 1 0 0 0 1.482-1.06l-1.965-9.853 7.293-6.565a1 1 0 0 0-.541-1.735l-9.86-1.271-4.127-8.885a1 1 0 0 0-1.814 0z" fill-rule="evenodd"></path>
                </svg>
            </span>
            
            <span class="num-start">4.89 ·</span>
            <button type="button" class="num-total-r alants">(57 reviews)</button>
        </span>
    </div>

    <form wire:submit.prevent="submitReserveForm">
        <div class="_flfpc gp16" style="flex-direction: initial;" wire:ignore>
            <div class="bk-icon-des_fbas fx-fd-c mnw-p47_f47 skeleton">
                <div class="txt-check-in">Check-In</div>
                <input type="text" class="_numcard cr-p" id="easypickReserv" placeholder="Add a date" readonly>
            </div>

            <div class="bk-icon-des_fbas fx-fd-c mnw-p47_f47 skeleton">
                <div class="txt-check-in">Checkout</div>
                <input type="text" class="_numcard cr-p" id="endEasypickReserv" placeholder="Add a date" readonly>
            </div>
        </div>

        <div class="sltgts skeleton">
            <div class="txt-check-in">Guests</div>

            <div class="sltNrlCont btnSltNrl" wire:ignore.self>
                <button type="button" class="vvo-btn-select wh-p100 js_submenuNrml">
                    <div class="fx fx-ai-c fx-jc-sb gp14">
                        <span>{{ $inputGuest }}</span>

                        <svg xmlns="http://www.w3.org/2000/svg" width="14.652" height="8.378" viewBox="0 0 14.652 8.378">
                            <path d="M13.516,17.1l5.54-5.545a1.043,1.043,0,0,1,1.479,0,1.056,1.056,0,0,1,0,1.483l-6.278,6.282a1.045,1.045,0,0,1-1.444.031L6.493,13.042a1.047,1.047,0,0,1,1.479-1.483Z" transform="translate(-6.188 -11.246)"></path>
                        </svg>
                    </div>
                </button>

                <div class="_bef-places submenuGuestInterna">
                    <div class="fxfbwhmhbrzi">
                        <div class="poyxwh">
                            <div class="cpd2btns min16 hr">
                                <div class="fx fx-ai-c fx-jc-sb gp25">
                                    <div class="fx fx-fd-c gp4">
                                        <div class="_txteh">Adults</div>
                                        <div class="_txtec16">Age 13+</div>
                                    </div>

                                    <div class="_2btnsgris">
                                        <button class="_btn" {{ $inputAdult <= 1 ? 'disabled' : '' }} type="button" aria-label="disminuir valor" wire:click="buttonDecrease('adult')">
                                            <span>
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m2 16h28"></path>
                                                </svg>
                                            </span>
                                        </button>
                                        
                                        <span class="_txtec333">{{ $inputAdult }}</span>

                                        <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputAdult >= 50 || $number_guests == $maxGuest ? 'disabled' : '' }} wire:click="buttonIncrease('adult')">
                                            <span>
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m2 16h28m-14-14v28"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="cpd2btns min16 hr">
                                <div class="fx fx-ai-c fx-jc-sb gp25">
                                    <div class="fx fx-fd-c gp4">
                                        <div class="_txteh">Children</div>
                                        <div class="_txtec16">Ages 2-12</div>
                                    </div>

                                    <div class="_2btnsgris">
                                        <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputKids <= 0 ? 'disabled' : '' }} wire:click="buttonDecrease('kids')">
                                            <span>
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m2 16h28"></path>
                                                </svg>
                                            </span>
                                        </button>
                                        
                                        <span class="_txtec333">{{ $inputKids }}</span>

                                        <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputKids >= 50 || $number_guests == $maxGuest ? 'disabled' : '' }} wire:click="buttonIncrease('kids')">
                                            <span>
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m2 16h28m-14-14v28"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="cpd2btns min16 hr">
                                <div class="fx fx-ai-c fx-jc-sb gp25">
                                    <div class="fx fx-fd-c gp4">
                                        <div class="_txteh">Infants</div>
                                        <div class="_txtec16">Under 2</div>
                                    </div>

                                    <div class="_2btnsgris">
                                        <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputInfant <= 0 ? 'disabled' : '' }} wire:click="buttonDecrease('infant')">
                                            <span>
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m2 16h28"></path>
                                                </svg>
                                            </span>
                                        </button>
                                        
                                        <span class="_txtec333">{{ $inputInfant }}</span>

                                        <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputInfant >= 5 ? 'disabled' : '' }} wire:click="buttonIncrease('infant')">
                                            <span>
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m2 16h28m-14-14v28"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="cpd2btns min16">
                                <div class="fx fx-ai-c fx-jc-sb gp25">
                                    <div class="fx fx-fd-c gp4">
                                        <div class="_txteh">Pets</div>
                                        <button type="button" class="txtunder__ics txt16 js__popup_bringind_animal1">Bringing an assistance animal?
                                        </button>
                                    </div>

                                    <div class="_2btnsgris">
                                        <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputPets <= 0 ? 'disabled' : '' }} wire:click="buttonDecrease('pets')">
                                            <span>
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m2 16h28"></path>
                                                </svg>
                                            </span>
                                        </button>
                                        
                                        <span class="_txtec333">{{ $inputPets }}</span>

                                        <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputPets >= 5 || !$pets_allowed ? 'disabled' : '' }} wire:click="buttonIncrease('pets')">
                                            <span>
                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="m2 16h28m-14-14v28"></path>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <p class="_txtec14 mr-t8">This place has a maximum of {{ $number_guests }} guests, not including infants, {{ $pets_allowed ? " pets allowed." : " pets arent's allowed." }}</p>
                        </div>

                        <div class="_fxbtn">
                            <button type="button" class="_fpnigw0 js_closeSubmenuGuestInterna">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-a fx-jc-c" style="margin: 23px 0 16px;">
            @if ( Auth::check() )
                <button type="submit" class="btn-celest skeleton">Reserve</button>
            @else
                <button type="button" class="btn-celest skeleton butnSignModl">Reserve</button>
            @endif
        </div>
        <div class="_txtprivat skeleton skeleton_txt" style="text-align: center; margin: 0 auto;">You won't be charged yet</div>

        <div class="_cns">
            <span class="f-cth skeleton">
                <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $inputBase  .' x '. $requestDays }} nights</div>
                <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . ( $inputBase * $requestDays ) }}</div>
            </span>

            @if ( $cleaning_fee != 0 )
                <span class="f-cth skeleton">
                    <div class="_txtec">Cleaning fee</div>
                    <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $cleaning_fee }}</div>
                </span>
            @endif

            @if ( $pet_fee != 0 && $inputPets != 0 )
                <span class="f-cth skeleton">
                    <div class="_txtec">Pets fee</div>
                    <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $pet_fee * $inputPets }}</div>
                </span>
            @endif
            
            @if ( $linens_fee != 0 )
                <span class="f-cth skeleton">
                    <div class="_txtec">Linens fee</div>
                    <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $linens_fee }}</div>
                </span>
            @endif
            
            @if ( $resort_fee != 0 )
                <span class="f-cth skeleton">
                    <div class="_txtec">Resort fee</div>
                    <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $resort_fee }}</div>
                </span>
            @endif
            
            @if ( $management_fee != 0 )
                <span class="f-cth skeleton">
                    <div class="_txtec">Management fee</div>
                    <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $management_fee }}</div>
                </span>
            @endif
            
            @if ( $extra_guest_fee != 0 && $maxGuest >= 2 )
                <span class="f-cth skeleton">
                    <div class="_txtec">Extra Guest fee</div>
                    <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $extra_guest_fee * ( $maxGuest - 1 ) }}</div>
                </span>
            @endif

            @if ( $weekly_discount != 0 )
                <span class="f-cthdes skeleton">
                    <div class="_txtecred">Weekly discount</div>
                    <div class="_txtecred">-{{ \App\Models\Currencs::Symbol( $listing_currency ) . $weeklyTotal }}</div>
                </span>
            @endif

            @if ( $monthly_discount != 0 )
                <span class="f-cthdes skeleton">
                    <div class="_txtecred">Monthly discount</div>
                    <div class="_txtecred">-{{ \App\Models\Currencs::Symbol( $listing_currency ) . $monthlyTotal }}</div>
                </span>
            @endif
        </div>

        <span class="t-cth skeleton">
            <div class="_txtect">Total</div>
            <div class="_txtect">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $totalPrice }}</div>
        </span>
    </form>
</aside>

@push('scripts')
    <script>
        Livewire.hook('message.processed', (message, component) => {
            skeleton();
            function skeleton() {
                let loadings = $(".skeleton");
                $(loadings).addClass("transition");
                
                for (loading of loadings) {
                    $(loading).removeClass("skeleton skeleton_card skeleton_txt");
                }
            }
        })
    </script>
@endpush