<div class="content-user_inf">
    <span class="pf-u">
        <img src="{{ URL::asset('assets/img/profile.png') }}" alt="">
    </span>
    <div class="_w">
        <h2 class="h2-guests">{{ $publicacion->typespace->name }} (condo) hosted by Agustin</h2>
        <span class="span-guests">4 guests - {{ $publicacion->numRoom }} bedrooms - 2 beds - {{ $publicacion->numBath }} baths</span>
    </div>
</div>

<div class="_line-hr" style="border-top-color: #E3EDF3;"></div>

<div class="content-user_icons">
    <div class="s-usr_icons">
        <div class="_suis">
            <img src="{{ URL::asset('assets/img/icons/hotel.png') }}" alt="">
        </div>
        <div class="_suisinfo">
            <div class="_txteh">{{$publicacion->typespace->name}}</div>
            <div class="_txtec">You'll have the condominium to yourself.</div>
        </div>
    </div>

    <div class="s-usr_icons">
        <div class="_suis">
            <img src="{{ URL::asset('assets/img/icons/self_check-in.svg') }}" alt="">
        </div>
        <div class="_suisinfo">
            <div class="_txteh">Self check-in</div>
            <div class="_txtec">Check yourself in with the keypad.</div>
        </div>
    </div>

    <div class="s-usr_icons">
        <div class="_suis">
            <img src="{{ URL::asset('assets/img/icons/enhanced.svg') }}" alt="">
        </div>
        <div class="_suisinfo">
            <div class="_txteh">Enhanced Clean</div>
            <div class="_txtec">This Host committed to Airbnb's 5-step enhanced cleaning
                process.</div>
            <a href="#" class="_btnsm enhancedcl">
                <span class="_fcontent">
                    <span class="_asm">Show more</span>
                    <span class="_svg-asm">
                        <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                    </span>
                </span>
            </a>
        </div>
    </div>

    <div class="s-usr_icons">
        <div class="_suis">
            <img src="{{ URL::asset('assets/img/icons/great-location.svg') }}" alt="">
        </div>
        <div class="_suisinfo">
            <div class="_txteh">Great location</div>
            <div class="_txtec">95% of recent guests gave the location a 5-star rating.
            </div>
        </div>
    </div>
</div>

<div class="content-user-remodelated">
    <div class="txt_s">
        <p class="_txtec">{{ $publicacion->description }}.</p>
        <p class="_txtec">Bedroom {{ $publicacion->numRoom }} has {{ $publicacion->numBath }} twin size bed with private bathroom and bathtub
        </p>
        <p class="_txtec">Bedoorm 2 has 1 queen size bed with private bathroom and shower
        </p>
        <p class="_txtec">Livingroom has a double size sofa bed</p>
    </div>
    <a href="#" class="_btnsm">
        <span class="_fcontent">
            <span class="_asm abspc">Show more</span>
            <span class="_svg-asm">
                <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
            </span>
        </span>
    </a>
</div>