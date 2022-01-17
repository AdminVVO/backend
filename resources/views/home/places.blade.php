<div class="block_places">
    <h3>Places to stay</h3>
    <div class="book-form">
        <form action="">
            <div class="inputBox">
                <div class="place_select hr">
                    <span>Location</span>
                    <div class="place_select-flex">
                        <img src="{{ URL::asset('assets/img/icons/hotel.png') }}" alt="hotel">
                        <span>Orlando Florida</span>
                    </div>
                </div>
            </div>
            <div class="inputBox">
                <div class="place_select hr">
                    <span>Check in</span>
                    <i class="far fa-calendar-alt">
                        <input type="month" name="fecha" value="2019-08">
                    </i>
                </div>
            </div>

            <div class="inputBox">
                <div class="place_select hr">
                    <span>Check Out</span>
                    <i class="far fa-calendar-alt">
                        <input type="month" name="fecha" value="2019-08">
                    </i>
                </div>
            </div>

            <div class="inputBox">
                <div class="place_select">
                    <span>Guest</span>
                    <i class="far fa-user">
                        <select name="format" id="format">
                            <option selected disabled>5 guest</option>
                            <option value="Nov19">Nov 19</option>
                            <option value="Nov20">Nov 20</option>
                        </select>
                    </i>
                </div>
            </div>
            <input type="submit" value="Search" class="btn">
        </form>
    </div>
</div>