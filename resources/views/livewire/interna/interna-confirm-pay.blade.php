<div class="whfxoyx">
    <div class="poyxwh">
        <h2 class="h2_publish mr-b32 showblock900">Confirm and pay</h2>

        <div class="content-info-hosted">
            <main class="site-content">
                <h2 class="h2_publish mr-b32 hideblock900">Confirm and pay</h2>

                <div>
                    <h2 class="h2-guests">Your trip</h2>

                    <div class="content-user_icons">
                        <div class="s-usr_icons">
                            <div class="_suis">
                                <i class="far fa-location-dot _i-red22"></i>
                            </div>

                            <div class="_csuiinfo">
                                <div class="_suisinfo">
                                    <div class="_txteh">Dates</div>
                                    <div class="_txtec">{{ $inputDateIn }} - {{ $inputDateOut }}</div>
                                </div>

                                <button type="button" class="txtunder__ics js__edit-lightpick">
                                    <div class="fx fx-ai-b gp5">
                                        <span>Edit</span>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                                            <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#333"></path>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>

                        <div class="s-usr_icons">
                            <div class="_suis">
                                <i class="far fa-user _i-red22"></i>
                            </div>

                            <div class="_csuiinfo">
                                <div class="_suisinfo">
                                    <div class="_txteh">Guests</div>
                                    <div class="_txtec">{{ $inputGuest }}</div>
                                </div>

                                <button type="button" class="txtunder__ics js__guests-modal">
                                    <div class="fx fx-ai-b gp5">
                                        <span>Edit</span>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                                            <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#333"></path>
                                        </svg>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="_line-hr mr-t32 mr-b32"></div>

                <div>
                    <h2 class="h2-guests">Choose how to pay</h2>

                    <div class="_cpyf _gap">
                        <div class="radio-item_rscrm">
                            <input type="radio" id="pay1" name="pay" checked wire:model.lazy="inputPay" value="{{ $totalPrice }}" actived>
                            <label for="pay1">
                                <div class="content_flex-actv">
                                    <div class="flex-msg">
                                        <div class="_txteh">Pay in full</div>

                                        <p class="_txtec mr-t4">Pay the total now and you're all set.</p>
                                    </div>

                                    <div class="pyifllprec">
                                        <div class="_txteh">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $totalPrice }}</div>
                                    </div>
                                </div>

                                <span class="before_check bcsvg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </span>
                            </label>
                        </div>

                        <div class="radio-item_rscrm">
                            <input type="radio" id="pay2" name="pay" wire:model.lazy="inputPay" value="{{ $totalPrice / 2 }}">
                            <label for="pay2">
                                <div class="content_flex-actv">
                                    <div class="flex-msg">
                                        <div class="_txteh">Pay for part</div>

                                        <p class="_txtec mr-t4">Pay {{ \App\Models\Currencs::Symbol( $listing_currency ) . ( $totalPrice / 2 ) }} now, and the rest ({{ \App\Models\Currencs::Symbol( $listing_currency ) . ( $totalPrice / 2 ) }}) will be automatically charged to the same payment method on Dec 27, 2021. No extra fees.</p>

                                        <button type="button" class="txtunder__ics mr-t8">
                                            <div class="fx fx-ai-b gp5">
                                                <span>More info</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                                                    <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#333"></path>
                                                </svg>
                                            </div>
                                        </button>
                                    </div>

                                    <div class="pyifllprec">
                                        <div class="_txteh">{{ \App\Models\Currencs::Symbol( $listing_currency ) . ( $totalPrice / 2 ) }}</div>
                                    </div>
                                </div>

                                <span class="before_check bcsvg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="_line-hr mr-b32"></div>

                <div>
                    <div class="_frever">
                        <div class="h2-guests">Play with</div>
                        <div class="_imgtarj">
                            <img src="{{ URL::asset('assets/img/card/play-with.jpg') }}" alt="" class="imgtarj">
                        </div>
                    </div>

                    <div class="navcont__flech-fx mr-t24 mr-b32" wire:ignore>
                        <div class="cont_nav">
                            <div class="nav__links-txt scroll_n ">
                                <button type="button" class="li__links-txt _paypal">
                                    <span class="tabs_items active_tabs">Paypal</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="_showpaypal">
                        <div class="mr-b32" wire:ignore>
                            <div id="paypal-button-container" wire:ignore></div>
                        </div>

                        <div class="_line-hr mr-t32 mr-b32"></div>

                        <div class="_cp">
                            <div class="h2-guests">Cancellation policy</div>
                            <p class="_txtec">
                                Non-refundable: Cancel before check-in and get back only the cleaning fee, if you paid one.

                                <button type="button" class="txtunder__ics">Learn more</button>
                            </p>

                            <p class="_txtec">
                                Our Extenuating Circumstances policy does not cover travel disruptions caused by COVID-19.

                                <button type="button" class="txtunder__ics">Learn more</button>
                            </p>
                        </div>

                        <div class="_line-hr mr-t32 mr-b32"></div>

                        <div>
                            <p class="_txtec16">
                                By selecting the button below, I agree to the

                                <button type="button" class="txtunder__ics txt16">Host's House Rules</button>,

                                <button type="button" class="txtunder__ics txt16">vvoutlet COVID-19 Safety Requirements</button>

                                and the

                                <button type="button" class="txtunder__ics txt16">Guest Refund Policy</button>.
                            </p>
                        </div>
                    </div>
                </div>
            </main>

            <div class="_line-hr mr-t32 mr-b32 showblock900"></div>

            <aside class="content-aside_prec">
                <div class="imgfxdestxt">
                    <div class="contimg">
                        <div class="dvawhmhbpbr">
                            <img class="whpov" src="{{ URL::asset('storage/photos-listing/') .'/'. \App\Models\Listing\Listings::ListingFile( $listingId ) .'/'. $photos[0]['name'] }}">
                        </div>
                    </div>

                    <div class="flex_info gp16">
                        <div class="conttxt">
                            <div class="_txtec tl">{{ $title }}</div>
                            <span class="span-guests">{{ ucwords( strtolower( \App\Models\RoomsProperty::TypeName( $like_place ) . ' ' . \App\Models\RoomsProperty::PropertyName( $property_type ) ) ) }}</span>
                            <span class="span-guests">{{ $guest_access }} Guests - {{ $bedrooms }} Bedrooms - {{ $bed }} Beds - {{ $bathrooms }} Baths</span>
                        </div>

                        <div class="fx fx-ai-c fx-fw-w">
                            <span class="_1y9gwt75 _1rgec1">
                                <span class="_9qqdp4 fx">
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="fill: #FF5A5F;">
                                        <path d="M15.094 1.579l-4.124 8.885-9.86 1.27a1 1 0 0 0-.542 1.736l7.293 6.565-1.965 9.852a1 1 0 0 0 1.483 1.061L16 25.951l8.625 4.997a1 1 0 0 0 1.482-1.06l-1.965-9.853 7.293-6.565a1 1 0 0 0-.541-1.735l-9.86-1.271-4.127-8.885a1 1 0 0 0-1.814 0z" fill-rule="evenodd"></path>
                                    </svg>
                                </span>

                                <span class="num-start">4.89</span>
                                <span class="num-total-r">&nbsp;(57 reviews)</span>
                            </span>

                            <span class="_1y9gwt75 _1rgec1">
                                <span class="_9qqdp4 fx">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" focusable="false" style="fill: #FF5A5F;">
                                        <path d="M8.498 7.593l3.1-1.74c.5-.278.99-.552 1.474-.82a.833.833 0 0 0 .428-.729v-2.97A.833.833 0 0 0 12.667.5H3.333a.833.833 0 0 0-.833.833v2.97c0 .303.164.582.428.729l3 1.675 1.575.886c.348.195.647.195.995-.001zM8 8.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7z"></path>
                                    </svg>
                                </span>

                                <span class="num-start op5">Superhost</span>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="_line-hr _line-contg"></div>

                <div class="h2-guests">Price details</div>


                <div class="_cns dn js__contDetailsPriceReserve">
                    <span class="f-cth">
                        <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $inputBase  .' x '. $requestDays }} nights</div>
                        <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . ( $inputBase * $requestDays ) }}</div>
                    </span>
                    
                    @if ( $oneListing )
                        <span class="f-cth skeleton">
                            <div class="_txtec">Services fee</div>
                            <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $oneListinFee }}</div>
                        </span>
                    @endif

                    @if ( $cleaning_fee != 0 )
                        <span class="f-cth">
                            <div class="_txtec">Cleaning fee</div>
                            <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $cleaning_fee }}</div>
                        </span>
                    @endif

                    @if ( $pet_fee != 0 && $inputPets != 0 )
                        <span class="f-cth">
                            <div class="_txtec">Pets fee</div>
                            <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $pet_fee * $inputPets }}</div>
                        </span>
                    @endif
                    
                    @if ( $linens_fee != 0 )
                        <span class="f-cth">
                            <div class="_txtec">Linens fee</div>
                            <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $linens_fee }}</div>
                        </span>
                    @endif
                    
                    @if ( $resort_fee != 0 )
                        <span class="f-cth">
                            <div class="_txtec">Resort fee</div>
                            <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $resort_fee }}</div>
                        </span>
                    @endif
                    
                    @if ( $management_fee != 0 )
                        <span class="f-cth">
                            <div class="_txtec">Management fee</div>
                            <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $management_fee }}</div>
                        </span>
                    @endif
                    
                    @if ( $extra_guest_fee != 0 && $maxGuest >= 2 )
                        <span class="f-cth">
                            <div class="_txtec">Extra Guest fee</div>
                            <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $extra_guest_fee * ( $maxGuest - 1 ) }}</div>
                        </span>
                    @endif

                    @if ( $weekly_discount != 0 )
                        <span class="f-cthdes">
                            <div class="_txtecred">Weekly discount</div>
                            <div class="_txtecred">-{{ \App\Models\Currencs::Symbol( $listing_currency ) . $weeklyTotal }}</div>
                        </span>
                    @endif

                    @if ( $monthly_discount != 0 )
                        <span class="f-cthdes">
                            <div class="_txtecred">Monthly discount</div>
                            <div class="_txtecred">-{{ \App\Models\Currencs::Symbol( $listing_currency ) . $monthlyTotal }}</div>
                        </span>
                    @endif
                </div>

                <span class="t-cth">
                    <div class="_txtect">Total</div>
                    <div class="_txtect">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $totalPrice }}</div>
                </span>

                @if ( $cleaning_fee != 0 || $pet_fee != 0 && $inputPets != 0 || $linens_fee != 0 || $resort_fee != 0 || $management_fee != 0 || $extra_guest_fee != 0 && $maxGuest >= 2 || $weekly_discount != 0 || $monthly_discount != 0 )
                    <div class="mr-t12">
                        <button type="button" class="_1e5q4qoz js__showMoreDetailsReserve">See details</button>
                        <button type="button" class="_1e5q4qoz dn js__hideMoreDetailsReserve">Hide details</button>
                    </div>
                @endif
            </aside>
        </div>
    </div>
</div>