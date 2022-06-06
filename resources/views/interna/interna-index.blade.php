<div class="medio">
    <div class="content_international">
        <h1 class="h2_publish text_tm1" style="padding-right: 35px;">{{ $listingDetails['title'] }}</h1>

        {{-- Encabezado --}}
            @include('livewire.interna.encabezado')

        {{-- Gallery --}}
            @include('livewire.interna.gallery')

        <div class="content-info-hosted">
            <main class="site-content">

                {{-- Property Rooms --}}
                    @include('livewire.interna.propertyroom')

                <div class="_line-hr"></div>

                <div class="content-user_icons" style="justify-content: space-between; grid-row-gap: 16px;">
                    <div class="bk-icon-des_fbas gp16 mnw-p49_f49">
                        <div class="dfjcacf0mw2">
                            <img src="{{ URL::asset('assets/img/icons/hotel.png') }}" alt="">
                        </div>

                        <div>
                            <div class="_txteh">Entire home</div>
                            <div class="_txtec">You'll have the condominium to yourself.</div>
                        </div>
                    </div>

                    <div class="bk-icon-des_fbas gp16 mnw-p49_f49">
                        <div class="dfjcacf0mw2">
                            <img src="{{ URL::asset('assets/img/icons/self_check-in.svg') }}" alt="">
                        </div>

                        <div>
                            <div class="_txteh">Self check-in</div>
                            <div class="_txtec">Check yourself in with the keypad.</div>
                        </div>
                    </div>

                    <div class="bk-icon-des_fbas gp16 mnw-p49_f49">
                        <div class="dfjcacf0mw2">
                            <img src="{{ URL::asset('assets/img/icons/enhanced.svg') }}" alt="">
                        </div>

                        <div>
                            <div class="_txteh">Enhanced Clean</div>
                            <div class="_txtec">This Host committed to vvoutlet 5-step enhanced cleaning process.</div>

                            <button type="button" class="txtunder__ics mr-t6 enhancedcl">
                                <div class="fx fx-ai-b gp5">
                                    <span class="">Show more</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                                        <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#333"/>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>

                    <div class="bk-icon-des_fbas gp16 mnw-p49_f49">
                        <div class="dfjcacf0mw2">
                            <img src="{{ URL::asset('assets/img/icons/great-location.svg') }}" alt="">
                        </div>

                        <div>
                            <div class="_txteh">Great location</div>
                            <div class="_txtec">95% of recent guests gave the location a 5-star rating.</div>
                        </div>
                    </div>
                </div>

                {{-- Descriptions --}}
                    @include('livewire.interna.descriptions')

                <div class="_line-hr"></div>

                {{-- Gallery Rooms --}}
                    @include('livewire.interna.gallery-room')

                <div class="_line-hr"></div>

                {{-- Ammenities --}}
                    @include('livewire.interna.amenities')

                <div class="_line-hr"></div>

                {{-- Travel --}}
                    @include('livewire.interna.travel-pricing')

                <div class="_line-hr"></div>

                {{-- Reviews --}}
                    @include('livewire.interna.reviews')

                <div class="_line-hr"></div>

                    @include('livewire.interna.maps')

                <div class="_line-hr" style="border-top-color: #E3EDF3;"></div>

                {{-- Details Host --}}
                    @include('livewire.interna.details-host')

                <div class="_line-hr" style="border-top-color: #E3EDF3;"></div>

                {{-- Rulers --}}
                    @include('livewire.interna.rulers')

                <div class="msgaround gp20 mr-t40">
                    <div class="_wcusermsg">
                        <div class="_txteh">Cancellation policy</div>
                        <div class="_txtec mr-t8" style="line-height: 24px;">Add your trip dates to get the cancellation details for this stay.</div>
                    </div>

                    <div>
                        <button class="btn-celest">Add dates</button>
                    </div>
                </div>
            </main>

            {{-- Form Reservations --}}
                @include('livewire.interna.form-reserv')
                
        </div>
    </div>

    <div class="_asidefix">
        <div class="entero">
            <div class="medio">
                <div class="_asideflex">
                    <div class="block_prec-res">
                        <span class="opac">$/345</span>
                        <span class="prec_black">$/446</span>
                        <span class="txt_night">/night</span>
                    </div>

                    <button type="button" class="btn-celest rscrm">Reserve</button>
                </div>
            </div>
        </div>
    </div>
</div>