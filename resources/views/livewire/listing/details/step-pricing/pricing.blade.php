<div class="block">
    <h2 class="h2-guests">Pricing</h2>

    <div>
        <div class="fx fx-ai-b fx-jc-sb"  style="gap: 25px;">
            <h3 class="_txteh">Preview what guests pay</h3>

            <div class="fx fx-ai-c">
                <div class="_btnsm click_preview_guests_pay" style="max-width: none;">
                    <span class="_fcontent">
                        Show
                        <span class="_svg-asm">
                            <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                        </span>
                    </span>
                </div>
            </div>
        </div>

        <div class="_cont_pay-img fx fx-ai-c">
            <img src="{{ URL::asset('assets/img/card/c1.jpg') }}" alt="">

            <div class="w100">
                <p class="_txtec txt_upper">$267 total</p>
                <p class="_txtec">3 nights · 1 guest</p>
                <p class="_txtec">Includes all fees</p>
            </div>
        </div>
    </div>
</div>

<div class="block {{ $classActive['price'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-fs fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Listing pricing</h3>
            <div class="_width_text show_info">
                <p class="_txtec">Base price: ${{ $content['base_price'] }}</p>
            </div>
            
            <form wire:submit.prevent="submitPrice" class="show_form_input" style="display: none;">
                <div class="form_input">
                    <div class="_flfpc">
                        <label class="before_icon_input mxw576">
                            <span class="_txtec">$</span>
                            <input type="text" class="number @error('base_price') error_input @enderror" wire:model.defer="content.base_price">
                            @error('base_price')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </label>
                    </div>
                </div>

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 30px;">
                    <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("price")'>
                        <span>Cancel</span>
                    </div>
                    <button type="submit" class="btn-celest">Save</button>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("price")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>

</div>

<div class="block {{ $classActive['currency'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Listing currency</h3>
            <div class="_width_text show_info">
                <span class="_txtec">{{ $content['currency'][ $content['listing_currency'] ] }} ({{ $content['listing_currency'] }})</span>
            </div>

            <form wire:submit.prevent="submitCurrency" class="show_form_input">
                <div>
                    <div class="selected-modal mxw576" style="margin: 0;">
                        <select wire:model.defer="content.listing_currency" class="@error('listing_currency') error_input @enderror">
                            <option selected disabled>Add currency</option>
                            @foreach ( $content['currency'] as $key => $element)
                                <option value="{{ $key }}">{{ $element }} ({{ $key }})</option>
                            @endforeach
                        </select>
                        @error('listing_currency')
                            <div  class="_txterror">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror

                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <p class="_txtec16" style="margin-top: 12px;">This is the currency you'll use to set your prices and discounts. Guests are shown prices in their own currency.</p>
                </div>

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 30px;">
                    <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("currency")'>
                        <span>Cancel</span>
                    </div>
                    <button type="submit" class="btn-celest">Save</button>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("currency")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>