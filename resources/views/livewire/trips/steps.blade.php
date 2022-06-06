<div>
    <div class="scroll-local-real">
        <div class="content-scroll-local">
            <div class="_block scroll_n">
                <div class="tabs_items_group">
                    <h3 class="tabs_items {{ $stepBar == 'upcoming' ? 'active_tabs' : '' }}" wire:click="changeBars('upcoming')">Upcoming</h3>
                    <h3 class="tabs_items {{ $stepBar == 'past' ? 'active_tabs' : '' }}" wire:click="changeBars('past')">Past</h3>
                    <h3 class="tabs_items {{ $stepBar == 'canceled' ? 'active_tabs' : '' }}" wire:click="changeBars('canceled')">Canceled</h3>
                </div>
            </div>

            <div class="btn-right-scroll">
                <span class="bg-btn-right">
                    <i class="fas fa-chevron-right"></i>
                </span>
            </div>
        </div>
    </div>

    <div class="orden_content_galerias">
        <div class="content_galerias">
            <div class="slideshow-container">
                <div class="card_img">
                    <img src="{{ URL::asset('assets/img/card/c1.jpg') }}" alt="">
                    <img src="{{ URL::asset('assets/img/card/c2.jpg') }}" alt="">
                    <img src="{{ URL::asset('assets/img/card/c3.jpg') }}" alt="">
                </div>

                <div class="content-dots">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
            <div class="flex_info">
                <div>
                    <h4>Sep 5-15, 2021</h4>
                    <h2>Stars Gate Paradise stays in orlands</h2>
                </div>
                <p class="_txtec16">Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et tempus nibh. Aenean eget risus velit...</p>
                <a href="interna.php" class="btn-celest">Show details</a>
            </div>
        </div>
        <div class="content_galerias">
            <div class="slideshow-container">
                <div class="card_img">
                    <img src="{{ URL::asset('assets/img/card/c1.jpg') }}" alt="">
                    <img src="{{ URL::asset('assets/img/card/c2.jpg') }}" alt="">
                    <img src="{{ URL::asset('assets/img/card/c3.jpg') }}" alt="">
                </div>

                <div class="content-dots">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
            <div class="flex_info">
                <div>
                    <h4>Sep 5-15, 2021</h4>
                    <h2>Stars Gate Paradise stays in orlands</h2>
                </div>
                <p class="_txtec16">Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et tempus nibh. Aenean eget risus velit...</p>
                <a href="interna.php" class="btn-celest">Show details</a>
            </div>
        </div>
        <div class="content_galerias">
            <div class="slideshow-container">
                <div class="card_img">
                    <img src="{{ URL::asset('assets/img/card/c1.jpg') }}" alt="">
                    <img src="{{ URL::asset('assets/img/card/c2.jpg') }}" alt="">
                    <img src="{{ URL::asset('assets/img/card/c3.jpg') }}" alt="">
                </div>

                <div class="content-dots">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
            <div class="flex_info">
                <div>
                    <h4>Sep 5-15, 2021</h4>
                    <h2>Stars Gate Paradise stays in orlands</h2>
                </div>
                <p class="_txtec16">Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et tempus nibh. Aenean eget risus velit...</p>
                <a href="interna.php" class="btn-celest">Show details</a>
            </div>
        </div>
    </div>
</div>
