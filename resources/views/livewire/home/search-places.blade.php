<form wire:submit.prevent="SubmitPlaces">
    <div class="_flex-js">
        <div class="inputBox" wire:ignore>
            <div class="place_select">
                <span class="skeleton skeleton_txt">Location</span>
                <div class="place_select-flex skeleton">
                    <i class="far fa-hotel _i-red22" alt="hotel vvo"></i>
                    <span>Orlando Florida</span>
                </div>
            </div>
        </div>

        <div class="inputBox skeleton" wire:ignore>
            <label for="easypickHome">
                <div class="place_select befo__checkout">
                    <span class="skeleton skeleton_txt">Check in</span>
                    <i class="far fa-calendar-alt skeleton">
                        <input id="easypickHome" placeholder="Add dates" readonly>
                    </i>
                </div>
            </label>
        </div>

        <div class="inputBox skeleton" wire:ignore>
            <label for="easypickHome">
                <div class="place_select befo__checkout">
                    <span class="skeleton skeleton_txt">Check Out</span>
                    <i class="far fa-calendar-alt skeleton">
                        <input type="text" id="endEasypickHome" placeholder="Add dates" readonly>
                    </i>
                </div>
            </label>
        </div>

        <div class="inputBox">
            <div class="contAddGuest" wire:ignore.self>
                <button type="button" class="place_select js__addGuestHeader" wire:ignore>
                    <span class="skeleton skeleton_txt">Guest</span>

                    <i class="far fa-user skeleton">
                        <span>Add guest</span>
                        <i class="fas fa-chevron-down"></i>
                    </i>
                </button>

                @include('livewire.home.includes.beforer')
            </div>
        </div>
    </div>

    <button type="submit" class="btn skeleton">Search</button>
</form>