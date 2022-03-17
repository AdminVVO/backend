<div class="content_resort_people">
    <h2 class="h2-guests titulo txt_upper">{{ strtoupper( $content['title'] ) }}</h2>
    <div class="pd_w fx fx-ai-c" wire:ignore>
        <div class="content-scroll-reserva scroll_n">
            <div class="tabs_items_group scroll_n">
                <h3 class="tabs_items active_tabs" wire:click="changeBars('details')">Listing details</h3>
                <h3 class="tabs_items" wire:click="changeBars('pricing')">Pricing and availability</h3>
                <h3 class="tabs_items" wire:click="changeBars('policies')">Policies and rules</h3>
                <h3 class="tabs_items" wire:click="changeBars('guests')">Info for guests</h3>
            </div>
        </div>

        <div class="btn-right-scroll">
            <span class="bg-btn-right">
                <i class="fas fa-chevron-right"></i>
            </span>
        </div>
    </div>
    
    @if ( $stepBar == 'details' )
        @include('livewire.listing.details.content-left-details')
    @endif
    
   @if ( $stepBar == 'pricing' )
        @include('livewire.listing.details.content-left-pricing')
    @endif
    
    @if ( $stepBar == 'policies' )
        @include('livewire.listing.details.content-left-policies')
    @endif
    
    @if ( $stepBar == 'guests' )
        @include('livewire.listing.details.content-left-guests')
    @endif


</div>