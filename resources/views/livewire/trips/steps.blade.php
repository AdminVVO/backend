<div wire:ignore.self>
    <div class="navcont__flech-fx">
        <div class="cont_nav js__cont_nav">
            <div class="nav__links-txt tab-container">
                <button type="button" class="li__links-txt js__tripUpcoming">
                    <span class="tabs_items {{ $stepBar == 'upcoming' ? 'active_tabs' : '' }}" wire:click="changeBars('upcoming')" wire:click="$emit('refreshComponent')">Upcoming</span>
                </button>

                <button type="button" class="li__links-txt js__tripPast">
                    <span class="tabs_items {{ $stepBar == 'past' ? 'active_tabs' : '' }}" wire:click="changeBars('past')" wire:click="$emit('refreshComponent')">Past</span>
                </button>

                <button type="button" class="li__links-txt js__tripCanceled">
                    <span class="tabs_items {{ $stepBar == 'canceled' ? 'active_tabs' : '' }}" wire:click="changeBars('canceled')" wire:click="$emit('refreshComponent')">Canceled</span>
                </button>
            </div>
        </div>
    </div>

    @if($stepBar == 'upcoming')
    @livewire('trips.tabs.upcoming')
    @endif
    
    @if($stepBar == 'past')
        @livewire('trips.tabs.past')
    @endif

    @if($stepBar == 'canceled')
        @livewire('trips.tabs.canceled')
    @endif
</div>
@push('scripts')
<script>
    Livewire.hook('message.processed', (message, component) => {
        $(".content-dots span.dot:first-child").addClass("dot_active");
        $(".card_img > img:first-child").addClass("card_img_active");
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