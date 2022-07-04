<div class="content-user-ics">
    <div class="h2-guests skeleton skeleton_txt">Things to know</div>

    <div class="content-user-ics-rules mr-t24">
        <div class="_fw nrml">
            <span class="_txtblu skeleton skeleton_txt">House rules</span>

            <div class="s-usr_icons skeleton skeleton_txt">
                <div class="_suis">
                    <img src="{{ URL::asset('assets/img/icons/reloj.svg') }}" alt="">
                </div>
                <div class="_suisinfo">
                    <div class="_txtec">Check-in: After {{ $content['checkin_window_start']['time'] .' '. $content['checkin_window_start']['type'] }}</div>
                </div>
            </div>

            <div class="s-usr_icons skeleton skeleton_txt">
                <div class="_suis">
                    <img src="{{ URL::asset('assets/img/icons/reloj.svg') }}" alt="">
                </div>
                <div class="_suisinfo">
                    <div class="_txtec">Checkout: {{ $content['checkin_window_end']['time'] .' '. $content['checkin_window_start']['type'] }}</div>
                </div>
            </div>

            <div class="s-usr_icons skeleton skeleton_txt">
                <div class="_suis">
                    <img src="{{ URL::asset('assets/img/icons/self-black.svg') }}" alt="">
                </div>
                <div class="_suisinfo">
                    <div class="_txtec">Self check-in with {{ $content['arrival_instructions'] }}</div>
                </div>
            </div>

            <div class="s-usr_icons skeleton skeleton_txt">
                <div class="_suis">
                    <img src="{{ URL::asset('assets/img/icons/pets.svg') }}" alt="">
                </div>
                <div class="_suisinfo">
                    <div class="_txtec">Pets</div>
                </div>
            </div>

            <button type="button" class="txtunder__ics mr-t16 herls skeleton">
                <div class="fx fx-ai-b gp5">
                    <span class="">Show more</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                        <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#333"></path>
                    </svg>
                </div>
            </button>
        </div>

        <div class="_fw nrml">
            <span class="_txtblu skeleton skeleton_txt" style="margin-bottom: 16px;">House & safety</span>
            <div class="s-usr_icons skeleton skeleton_txt">
                <div class="_suis">
                    <img src="{{ URL::asset('assets/img/icons/enhanced-black.svg') }}" alt="">
                </div>
                <div class="_suisinfo">
                    <div class="_txtec">Committed to Airbnb's enhanced cleaning process. Show more</div>
                </div>
            </div>

            <div class="s-usr_icons skeleton skeleton_txt">
                <div class="_suis">
                    <img src="{{ URL::asset('assets/img/icons/covid.svg') }}" alt="">
                </div>
                <div class="_suisinfo">
                    <div class="_txtec">vvoutlet social-distancing and other COVID-19-related guidelines apply</div>
                </div>
            </div>

            <div class="s-usr_icons skeleton skeleton_txt">
                <div class="_suis">
                    <img src="{{ URL::asset('assets/img/icons/alert.svg') }}" alt="">
                </div>
                <div class="_suisinfo">
                    <div class="_txtec">No smoke alarm</div>
                </div>
            </div>

            <div class="s-usr_icons skeleton skeleton_txt">
                <div class="_suis">
                    <img src="{{ URL::asset('assets/img/icons/alert.svg') }}" alt="">
                </div>
                <div class="_suisinfo">
                    <div class="_txtec">Nearby lake, river, other body of water</div>
                </div>
            </div>

            <div class="s-usr_icons skeleton skeleton_txt">
                <div class="_suis">
                    <img src="{{ URL::asset('assets/img/icons/alert.svg') }}" alt="">
                </div>
                <div class="_suisinfo">
                    <div class="_txtec">Heights without rails or protection</div>
                </div>
            </div>

            <button type="button" class="txtunder__ics mr-t16 hesfty skeleton">
                <div class="fx fx-ai-b gp5">
                    <span class="">Show more</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                        <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#333"></path>
                    </svg>
                </div>
            </button>
        </div>
    </div>
</div>