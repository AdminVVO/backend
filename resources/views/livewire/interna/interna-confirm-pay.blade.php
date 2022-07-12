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
                                    <div class="_txtec">3 guests</div>
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
                            <input type="radio" id="pay1" name="pay" value="pay1" checked>
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
                            <input type="radio" id="pay2" name="pay" value="pay2">
                            <label for="pay2">
                                <div class="content_flex-actv">
                                    <div class="flex-msg">
                                        <div class="_txteh">Pay in full</div>

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

                    <div class="navcont__flech-fx mr-t24 mr-b32">
                        <div class="cont_nav">
                            <div class="nav__links-txt scroll_n owl-carousel js_navlinksreserve">
                                <button type="button" class="li__links-txt _creditcard">
                                    <span class="tabs_items active_tabs">Credit or debit card</span>
                                </button>

                                <button type="button" class="li__links-txt _glepay">
                                    <span class="tabs_items">Google Pay</span>
                                </button>

                                <button type="button" class="li__links-txt _paypal">
                                    <span class="tabs_items">Paypal</span>
                                </button>
                            </div>

                            <div class="vvo_owl_nav navowlplaywith"></div>
                        </div>
                    </div>

                    <form action="">
                        <div class="_hiddencreditordebit">
                            <div class="txt-check-in">Card Number</div>

                            <div>
                                <label for="ipt__ics" class="ipt_icon js_ipt-icon">
                                    <input type="text" class="ipt_ic mask__cardnumber" placeholder="0000 0000 0000 0000" id="ipt__ics">
                                    <i class="fal fa-credit-card js_ics"></i>
                                </label>
                            </div>

                            <div class="_flfpc gp16" style="flex-direction: initial;">
                                <div class="bk-icon-des_fbas fx-fd-c mnw-p48_f48">
                                    <div class="txt-check-in">Expiration</div>
                                    <input type="text" class="_numcard mask__mmyy" placeholder="MM / YY">
                                </div>

                                <div class="bk-icon-des_fbas fx-fd-c mnw-p48_f48">
                                    <div class="txt-check-in">CVV</div>
                                    <input type="text" class="_numcard number" placeholder="123" maxlength="4">
                                </div>
                            </div>

                            <div class="_txteh">Billing address</div>
                            <div class="_cbadd">
                                <div class="txt-check-in">Street address</div>
                                <input type="text" class="_numcard">
                            </div>

                            <div class="_cbadd">
                                <div class="txt-check-in">Apt or suite number</div>
                                <input type="text" class="_numcard number">
                            </div>

                            <div class="_cbadd">
                                <div class="txt-check-in">City</div>
                                <input type="text" class="_numcard">
                            </div>

                            <div class="_flfpc gp16" style="flex-direction: initial; margin: 21px 0 21px;">
                                <div class="bk-icon-des_fbas fx-fd-c mnw-p48_f48">
                                    <div class="txt-check-in">State</div>
                                    <input type="text" class="_numcard">
                                </div>

                                <div class="bk-icon-des_fbas fx-fd-c mnw-p48_f48">
                                    <div class="txt-check-in">ZIP code</div>
                                    <input type="text" class="_numcard number">
                                </div>
                            </div>

                            <div class="cbadd">
                                <div class="txt-check-in">Country/region</div>
                                <div class="selected-modal" style="margin: 0;">
                                    <select name="" id="">
                                        <option value="1">United States</option>
                                        <option value="2">United States (+2)</option>
                                        <option value="3">United States (+3)</option>
                                    </select>

                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>

                            <div class="_line-hr mr-t32 mr-b32"></div>

                            <div class="_cp">
                                <div class="h2-guests">Cancellation policy</div>
                                <p class="_txtec">
                                    Non-refundable: Cancel before check-in and get back only the cleaning fee, if you paid one.

                                    <button type="button" class="txtunder__ics"><span>Learn more</span></button>
                                </p>

                                <p class="_txtec">
                                    Our Extenuating Circumstances policy does not cover travel disruptions caused by COVID-19.

                                    <button type="button" class="txtunder__ics"><span>Learn more</span></button>
                                </p>
                            </div>

                            <div class="_line-hr mr-t32 mr-b32"></div>

                            <div>
                                <p class="_txtec16">
                                    By selecting the button below, I agree to the

                                    <button type="button" class="txtunder__ics txt16"><span>Host's House Rules</span></button>,

                                    <button type="button" class="txtunder__ics txt16"><span>vvoutlet COVID-19 Safety Requirements</span></button>

                                    and the

                                    <button type="button" class="txtunder__ics txt16"><span>Guest Refund Policy</span></button>.
                                </p>
                            </div>

                            <button type="button" class="btn-celest" style="margin: 34px 0 0;">Confirm and pay</button>
                        </div>

                        <div class="_showgplay">
                            <div class="mr-b32">
                                <button type="button" class="btn-black mx210">
                                    <div class="fx fx-ai-c fx-jc-c gp6">
                                        <img src="{{ URL::asset('assets/img/icons/google.svg') }}" alt="">
                                        Pay
                                    </div>
                                </button>
                            </div>

                            <div class="_line-hr mr-t32 mr-b32"></div>

                            <div class="fx fx-fd-c gp16">
                                <h2 class="h2-guests">Information required for the trip</h2>

                                <div class="fx fx-fd-c gp4">
                                    <div class="_txteh">Send a message to the host</div>
                                    <div class="_txtec16">Tell the host why you are traveling and when you will arrive.</div>
                                </div>

                                <label for="textarealbl" class="mr-t16">
                                    <div class="content-user_inf fx fx-ai-c mr-b32">
                                        <span class="pf-u fx" style="max-width: 46px; height: 46px;">
                                            <img src="{{ URL::asset('assets/img/profile.png') }}" alt="">
                                        </span>
                                        <div class="wh-p100">
                                            <h2 class="_txteh">Anny</h2>
                                            <div class="_txtec16 mr-t2">Joined in August 2013</div>
                                        </div>
                                    </div>

                                    <textarea placeholder="Write a note" class="_txta-modls" style="resize: vertical;" rows="5" id="textarealbl"></textarea>
                                </label>
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

                        <div class="_showpaypal" style="display: none;">
                            <div class="mr-b32">
                                <button type="button" class="btn-yellow mx210">
                                    <div class="fx fx-ai-c fx-jc-c gp3">
                                        <img src="{{ URL::asset('assets/img/icons/paypal.svg') }}" alt="" style="min-width: 14px; width: 14px;">
                                        <img src="{{ URL::asset('assets/img/icons/txt-paypal.svg') }}" alt="" style="min-width: 59px; width: 59px;">
                                    </div>
                                </button>
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
                    </form>
                </div>
            </main>

            <div class="_line-hr mr-t32 mr-b32 showblock900"></div>

            <aside class="content-aside_prec">
                <div class="imgfxdestxt">
                    <div class="contimg">
                        <div class="dvawhmhbpbr">
                            <img src="{{ URL::asset('storage/uploadListing/' . $photos[0]) }}" alt="" class="whpov">
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

                <div class="_cns">
                    <span class="f-cth">
                        <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $base_price }} x {{ $requestDays }} nights</div>
                        <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . ( $base_price * $requestDays ) }}</div>
                    </span>

                    @if ( $weekly_discount != null )
                        <span class="f-cthdes">
                            <div class="_txtecred">Weekly discount</div>
                            <div class="_txtecred">-{{ \App\Models\Currencs::Symbol( $listing_currency ) . $weekly_discount }}</div>
                        </span>
                    @endif

                    @if ( $monthly_discount != null )
                        <span class="f-cthdes">
                            <div class="_txtecred">Monthly discount</div>
                            <div class="_txtecred">-{{ \App\Models\Currencs::Symbol( $listing_currency ) . $monthly_discount }}</div>
                        </span>
                    @endif

                    @if ( $cleaning_fee != null )
                        <span class="f-cth">
                            <div class="_txtec">Cleaning fee</div>
                            <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $cleaning_fee }}</div>
                        </span>
                    @endif

                    @if ( $pet_fee != null )
                        <span class="f-cth">
                            <div class="_txtec">Pets fee</div>
                            <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $pet_fee }}</div>
                        </span>
                    @endif

                    @if ( $linens_fee != null )
                        <span class="f-cth">
                            <div class="_txtec">Linens fee</div>
                            <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $linens_fee }}</div>
                        </span>
                    @endif

                    @if ( $resort_fee != null )
                        <span class="f-cth">
                            <div class="_txtec">Resort fee</div>
                            <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $resort_fee }}</div>
                        </span>
                    @endif

                    @if ( $management_fee != null )
                        <span class="f-cth">
                            <div class="_txtec">Management fee</div>
                            <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $management_fee }}</div>
                        </span>
                    @endif
                </div>

                <span class="t-cth">
                    <div class="_txtect">Total</div>
                    <div class="_txtect">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $totalPrice }}</div>
                </span>
            </aside>
        </div>
    </div>
</div>