<form action="">
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

        <div class="inputBox">
            <label for="check_in">
                <div class="place_select">
                    <span>Check in</span>
                    <i class="far fa-calendar-alt">
                        <!-- <input type="month" name="fecha" value="2019-08"> -->
                        <input type="text" class="_date-check" value="" id="check_in" placeholder="Add dates" readonly>
                    </i>
                </div>
            </label>
        </div>

        <div class="inputBox">
            <label for="check_in" class="check_out">
                <div class="place_select">
                    <span>Check Out</span>
                    <i class="far fa-calendar-alt">
                        <!-- <input type="month" name="fecha" value="2019-08"> -->
                        <input type="text" class="_date-check-out" value="" id="" placeholder="Add dates" readonly>
                    </i>
                </div>
            </label>
        </div>

        <div class="inputBox">
            <div class="place_select menuGuest">
                <span>Guest</span>

                <i class="far fa-user">
                    <span>5 guest</span>
                    <i class="fas fa-chevron-down"></i>
                </i>
            </div>
        </div>
    </div>

    <input type="submit" value="Search" class="btn">
</form>