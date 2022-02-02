<div class="_yellow-bg {{ $classActive ? 'personal_edit' : ''}}">
    <div class="_bgpadding">
        <div class="_cont-edit">
            <div class="_txteh">Address</div>

            <a href="javascript:void(0)" class="_btnsm" wire:click='statusUpdate()'>
                <span class="_fcontent edit">
                    Edit
                    <span class="_svg-asm">
                        <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                    </span>
                </span>

                <span class="_fcontent cancel">
                    Cancel
                    <span class="_svg-asm">
                        <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                    </span>
                </span>
            </a>
        </div>

        @if ( empty( $query['city'] ) )
            <div class="_txtec none">Not provided</div>
        @else
            <div class="_txtec none">Country: {{ $query['country'] }}</div>
            <div class="_txtec none">Street Address: {{ $query['street_address'] }}</div>
            <div class="_txtec none">Suite: {{ $query['suite'] }}</div>
            <div class="_txtec none">City: {{ $query['city'] }}</div>
            <div class="_txtec none">State: {{ $query['state'] }}</div>
            <div class="_txtec none">Zip Code:{{ $query['zip_code'] }}</div>
        @endif

        <div class="_txtec show">Use a permanent address where you can receive mail.</div>
        <form wire:submit.prevent="submit" class="_form">
            <div class="txt-check-in">Country/region</div>
            <div class="selected-modal">
                <select wire:model.lazy="country" class="@error('country') error_input @enderror">
                    <option value="0" selected>Choose...</option>
                    <option value="US">United States</option>
                    <option value="PR">Perú</option>
                </select>
                @error('country')
                    <div  class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
                <i class="fas fa-chevron-down" aria-hidden="true"></i>
            </div>

            <div class="txt-check-in">Street address</div>
            <input type="text" wire:model.lazy="street_address" class="_input-mod @error('street_address') error_input @enderror" placeholder="Ex:123 Main St.">
            @error('street_address')
                <div  class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
            @enderror

            <div class="_flfpc">
                <div class="block_date">
                    <div class="txt-check-in">City</div>
                    <input type="text" wire:model.lazy="city" class="_input-mod @error('city') error_input @enderror" placeholder="Ex: San Francisco">
                    @error('city')
                        <div  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="block_date">
                    <div class="txt-check-in">Apt, suite. (optional)</div>
                    <input type="text" wire:model.lazy="suite" class="_input-mod @error('suite') error_input @enderror" placeholder="Ex: Apt #7">
                    @error('suite')
                        <div  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            
            <div class="_flfpc">
                <div class="block_date">
                    <div class="txt-check-in">State</div>
                    <input type="text" wire:model.lazy="state" class="_input-mod @error('state') error_input @enderror" placeholder="Ex: CA">
                    @error('state')
                        <div  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="block_date">
                    <div class="txt-check-in">ZIP Code</div>
                    <input type="text" wire:model.lazy="zip_code" class="_input-mod @error('zip_code') error_input @enderror" placeholder="Ex: 94103">
                    @error('zip_code')
                        <div  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="block_a">
                <button type="submit" class="btn-celest btns-modals" wire:loading.class="activeLoading" wire:loading.attr="disabled">
                    Save
                    <div class="loading-btn loading-btn-modal"></div>
                </button>
            </div>
        </form>
    </div>
</div>