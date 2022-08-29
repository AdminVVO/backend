<div>
    <div class="content-scroll-reserva navcont__flech-fx">
        <div class="cont_nav js__cont_nav">
            <div class="nav__links-txt tab-container">
                <button type="button" class="li__links-txt ">
                    <span class="tabs_items  {{ $tabs == 'Upcoming' ? 'active_tabs' : '' }}" wire:click="changeTabs('Upcoming')">Upcoming</span>
                </button>
    
                <button type="button" class="li__links-txt ">
                    <span class="tabs_items {{ $tabs == 'Completed' ? 'active_tabs' : '' }}" wire:click="changeTabs('Completed')">Completed</span>
                </button>
    
                <button type="button" class="li__links-txt ">
                    <span class="tabs_items {{ $tabs == 'Canceled' ? 'active_tabs' : '' }}" wire:click="changeTabs('Canceled')">Canceled</span>
                </button>
    
                <button type="button" class="li__links-txt ">
                    <span class="tabs_items {{ $tabs == 'All' ? 'active_tabs' : '' }}" wire:click="changeTabs('All')">All</span>
                </button>
            </div>
        </div>
    </div>


    {{-- Upcoming Reservation --}}
    @if ( $tabs === 'Upcoming' )

    @livewire('reservations.tabs.upcoming')
    @endif

    {{-- Upcoming Reservation --}}
    @if ( $tabs === 'Completed' )
        @livewire('reservations.tabs.complete')
    @endif

    {{-- Upcoming Reservation --}}
    @if ( $tabs === 'Canceled' )
        @livewire('reservations.tabs.canceled')
    @endif

    {{-- Upcoming Reservation --}}
    @if ( $tabs === 'All' )
        @livewire('reservations.tabs.all')
    @endif
    
</div>