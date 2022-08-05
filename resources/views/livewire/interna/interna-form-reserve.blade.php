<aside class="content-aside_prec skeleton">
    <div class="content_prec fx fx-fw-w fx-ai-b fx-jc-sb gp8">
        <div class="block_prec-res skeleton">
            @if ( $first_guest )
                <span class="opac">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $base_descont }}</span>
                <span class="prec_black">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $base_price }}</span>
            @else
                <span class="prec_black">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $base_price }}</span>
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
            <div class="vvo-select wh-p100 @error('inputGuest') error_input @enderror">
                <select class="" wire:model.lazy="inputGuest">
                    <option value="{{ $number_guests }}">{{ $number_guests }} guests</option>
                    @for ($i = 1; $i <= $max_people; $i++)
                        <option value="{{ $number_guests + $i }}">{{ $number_guests }} guests (+{{ $i }})</option>
                    @endfor
                </select>

                <i class="fas fa-chevron-down"></i>
            </div>
            @error('inputGuest')
                <div  class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
            @enderror
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
                <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $base_price  .' x '. $requestDays }} nights</div>
                <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . ( $base_price * ( $requestDays != 0 ? $requestDays : 1 ) ) }}</div>
            </span>

            @if ( $weekly_discount != null )
                <span class="f-cthdes skeleton">
                    <div class="_txtecred">Weekly discount</div>
                    <div class="_txtecred">-{{ \App\Models\Currencs::Symbol( $listing_currency ) . $weekly_discount }}</div>
                </span>
            @endif

            @if ( $monthly_discount != null )
                <span class="f-cthdes skeleton">
                    <div class="_txtecred">Monthly discount</div>
                    <div class="_txtecred">-{{ \App\Models\Currencs::Symbol( $listing_currency ) . $monthly_discount }}</div>
                </span>
            @endif


            @if ( $cleaning_fee != null )
                <span class="f-cth skeleton">
                    <div class="_txtec">Cleaning fee</div>
                    <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $cleaning_fee }}</div>
                </span>
            @endif

            @if ( $pet_fee != null )
                <span class="f-cth skeleton">
                    <div class="_txtec">Pets fee</div>
                    <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $pet_fee }}</div>
                </span>
            @endif
            
            @if ( $linens_fee != null )
                <span class="f-cth skeleton">
                    <div class="_txtec">Linens fee</div>
                    <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $linens_fee }}</div>
                </span>
            @endif
            
            @if ( $resort_fee != null )
                <span class="f-cth skeleton">
                    <div class="_txtec">Resort fee</div>
                    <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $resort_fee }}</div>
                </span>
            @endif
            
            @if ( $management_fee != null )
                <span class="f-cth skeleton">
                    <div class="_txtec">Management fee</div>
                    <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $management_fee }}</div>
                </span>
            @endif
            
            @if ( $extra_guestShow != 0 )
                <span class="f-cth skeleton">
                    <div class="_txtec">Extra Guest fee</div>
                    <div class="_txtec">{{ \App\Models\Currencs::Symbol( $listing_currency ) . $extra_guestShow }}</div>
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