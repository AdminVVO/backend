<form wire:submit.prevent="SubmitPlaces">
    <div class="_flex-js">
        <div class="inputBox">
            <div class="place_select">
                <span>Location</span>
                <div class="place_select-flex">
                    <img src="{{ URL::asset('assets/img/icons/hotel.png') }}" alt="hotel">
                    <span>Orlando Florida</span>
                </div>
            </div>
        </div>

        <div class="inputBox" wire:ignore>
            <label for="check_in">
                <div class="place_select">
                    <span>Check in</span>
                    <i class="far fa-calendar-alt">
                        <input id="easypick" placeholder="Add dates">
                    </i>
                </div>
            </label>
        </div>

        <div class="inputBox" wire:ignore>
            <label for="check_in" class="check_out">
                <div class="place_select endEasypick">
                    <span>Check Out</span>
                    <i class="far fa-calendar-alt">
                        <input id="endEasypick" placeholder="Add dates">
                    </i>
                </div>
            </label>
        </div>

        <div class="inputBox">
            <div class="place_select menuGuest">
                <span>Guest</span>

                <i class="far fa-user">
                    <span>Add guest</span>
                    <i class="fas fa-chevron-down"></i>
                </i>
            </div>
        </div>
    </div>

    <button type="submit" class="btn">Search</button>
</form>