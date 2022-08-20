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

    <div class="_bgpadd-f">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48.837 59.797">
            <path d="M27.919,57.8S49.838,46.838,49.838,30.4V11.22L27.919,3,6,11.22V30.4C6,46.838,27.919,57.8,27.919,57.8Z" transform="translate(-3.5 -0.5)" fill="none" stroke="#ff5a5f" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/>
        </svg>
        <div>
            <div class="_txteh" style="margin-bottom: 12px;">Helth and safety guidance for Hosts amd guests</div>
            <p class="_txtec">As travel picks up again, we Want to help our Hosts and guests remain safe. Please follow the health and safety guidance if you have any interaction with guests. <a href="#" class="_txtblu">Review the Guidelines</a></p>
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