<div class="create_listing">

    <div class="img-left">
        <img src="{{ URL::asset('assets/img/card/') }}/{{ $imgShow }}">
        <span class="_pabslogo">
            <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo vvoutlet">
        </span>
    </div>
    <div class="_ct50 _ct50-back">

        @if ( $exitSave )
            <div class="btn-br_abs fx">
                <button class="btn-border">Help</button>
                <button class="btn-border" wire:click="saveToExit">Save and exit</button>
            </div>
        @else
            <a href="{{ route('listing') }}">
                <div class="btn-br_abs fx">
                    <button class="btn-border">Exit</button>
                </div>
            </a>
        @endif

        
        {{-- Finish Listings --}}
        @if ( $step === 'finish' )
            @livewire('listing.steps.finish-create')
        @endif
        
        {{-- Init Steps Listings --}}
        @if ( $step === 'init' )
            @livewire('listing.steps.init-steps')
        @endif

        {{-- Steps Listings --}}
        @if ( $step === 'host' )
            @livewire('listing.steps.type-host')
        @endif

        {{-- Apartament Listings --}}
        @if ( $step === 'apartment')
            @livewire('listing.steps.apartment-select')
        @endif

        {{-- House Listings --}}
        @if ( $step === 'house')
            @livewire('listing.steps.house-select')
        @endif

        {{-- Secondary Listings --}}
        @if ( $step === 'secondary')
            @livewire('listing.steps.secondary-select')
        @endif

        {{-- Unique Listings --}}
        @if ( $step === 'unique')
            @livewire('listing.steps.unique-select')
        @endif

        {{-- BreakFast Listings --}}
        @if ( $step === 'breakfast')
            @livewire('listing.steps.breakfast-select')
        @endif

        {{-- Boutique Listings --}}
        @if ( $step === 'boutique')
            @livewire('listing.steps.boutique-select')
        @endif

        {{-- Space Listings --}}
        @if ( $step === 'space')
            @livewire('listing.steps.space')
        @endif

        {{-- Maps Listings --}}
        @if ( $step === 'maps')
            @livewire('listing.steps.maps')
        @endif

        {{-- Maps Manually Listings --}}
        @if ( $step === 'mapsmanually')
            @livewire('listing.steps.maps-manually')
        @endif

        {{-- Guests Listings --}}
        @if ( $step === 'guests')
            @livewire('listing.steps.guests')
        @endif

        {{-- Offers Places Listings --}}
        @if ( $step === 'offersplaces')
            @livewire('listing.steps.offers-places')
        @endif

        {{-- Photos Listings --}}
        @if ( $step === 'photos')
            @livewire('listing.steps.photos')
        @endif






    </div>
</div>