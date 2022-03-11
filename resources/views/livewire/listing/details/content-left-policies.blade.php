<div class="policies_rules">
    <div class="content_listing_details">
        <div class="anuncio_start_hosting block" wire:ignore>
            <div class="_bgpadd-f">
                <i class="far fa-bell"></i>
                <div>
                    <div class="fx fx-jc-sb fx-ai-c" style="gap: 18px;">
                        <div class="_txteh" style="margin-bottom: 8px;">Start hosting longer stays</div>
                        <button class="btn-border_x click_x_anuncio">X</button>
                    </div>
                    <p class="_txtec">We've seen a recent increase in guests looking for weekly and monthly stays close to home. To earn more while supporting your local community, consider updating your settings to allow longer stays.</p>
                    <a href="#" class="btn-border" style="margin-top: 14px;">Review all</a>
                </div>
            </div>
        </div>
        
        {{-- Listing Policies --}}
        @include('livewire.listing.details.step-policies.policies')
        
        {{-- Listing House Rules --}}
        @include('livewire.listing.details.step-policies.house-rules')
        
        {{-- Listing Guest requirements --}}
        @include('livewire.listing.details.step-policies.requirements')
        
        <div class="block">
            <a href="" class="_btnsmblu">
                <span>Give feedback</span>
            </a>
        </div>
    </div>
</div>