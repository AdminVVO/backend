<div class="container_all_amenitles patlbrzi container_user-host">
    <div class="paz999i0b modal_content-user"></div>

    <div class="fxpaijcpmi">
        <div class="_z4lmgp">
            <div class="fxfbwhmhbrzi">
                <div class="fx fx-jc-e">
                    <button type="button" class="cwhfcbbpfx closeUserModal">X</button>
                </div>

                <div class="whfxoyx">
                    <div class="poyxwh">
                        <div class="popup-all-amenitles">
                            <h2 class="h2-guests">What this place offers</h2>

                            <!--ICONOS:
                                ------- BEDROOM AND LAUNDRY -------
                                Dryer => building.svg
                                Washer => building.svg

                                ------- ENTERTANIMENT -------
                                TV => tv.svg

                                ------- INTERNET AND OFFICE -------
                                Wifi => wifi.svg

                                ------- INTERNET AND OFFICE -------
                                Kitchen => kitchen.svg

                                ------- LOCATION FEATURES -------
                                Lake access => lake.svg

                                ------- PARKING AND FACILITIES -------
                                Elevator => elevator.svg
                                Free parking on premises => free-parking.svg
                                Hot tub => hot-tub.svg
                                Pool => pool.svg
                            -->

                            <div class="fx fx-fd-c gp48 mr-t32">
                                @if ( isset( $amenitiesModal['bathroom'] ) )
                                    <div class="mtmnos16 hr">
                                        <div class="_ak5d0on">
                                            <h3 class="_txteh txt18">Bathroom</h3>
                                        </div>

                                        @foreach ($amenitiesModal['bathroom'] as $element)
                                            <div class="cpd2btns hr">
                                                <div class="fx fx-ai-c gp16">
                                                    <div>
                                                        <div class="mh20fxaic">
                                                            {{-- <img src="{{ URL::asset('assets/img/icons/') . '/' . $element['code'] . '.svg' }}" alt=""> --}}
                                                        </div>
                                                    </div>

                                                    <div class="h3">{{ $element['name'] }}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                @if ( isset( $amenitiesModal['bedroom_laundry'] ) )
                                    <div class="mtmnos16 hr">
                                        <div class="_ak5d0on">
                                            <h3 class="_txteh txt18">Bedroom and laundry</h3>
                                        </div>

                                        @foreach ($amenitiesModal['bedroom_laundry'] as $element)
                                            <div class="cpd2btns hr">
                                                <div class="fx fx-ai-c gp16">
                                                    <div>
                                                        <div class="mh20fxaic">
                                                            {{-- <img src="{{ URL::asset('assets/img/icons/') . '/' . $element['code'] . '.svg' }}" alt=""> --}}
                                                        </div>
                                                    </div>

                                                    <div class="h3">{{ $element['name'] }}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                @if ( isset( $amenitiesModal['entertainment'] ) )
                                    <div class="mtmnos16 hr">
                                        <div class="_ak5d0on">
                                            <h3 class="_txteh txt18">Entertaniment</h3>
                                        </div>

                                        @foreach ($amenitiesModal['entertainment'] as $element)
                                            <div class="cpd2btns hr">
                                                <div class="fx fx-ai-c gp16">
                                                    <div>
                                                        <div class="mh20fxaic">
                                                            {{-- <img src="{{ URL::asset('assets/img/icons/') . '/' . $element['code'] . '.svg' }}" alt=""> --}}
                                                        </div>
                                                    </div>

                                                    <div class="h3">{{ $element['name'] }}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                @if ( isset( $amenitiesModal['Family'] ) )
                                    <div class="mtmnos16 hr">
                                        <div class="_ak5d0on">
                                            <h3 class="_txteh txt18">Family</h3>
                                        </div>

                                        @foreach ($amenitiesModal['Family'] as $element)
                                            <div class="cpd2btns hr">
                                                <div class="fx fx-ai-c gp16">
                                                    <div>
                                                        <div class="mh20fxaic">
                                                            {{-- <img src="{{ URL::asset('assets/img/icons/') . '/' . $element['code'] . '.svg' }}" alt=""> --}}
                                                        </div>
                                                    </div>

                                                    <div class="h3">{{ $element['name'] }}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                @if ( isset( $amenitiesModal['heating_cooling'] ) )
                                    <div class="mtmnos16 hr">
                                        <div class="_ak5d0on">
                                            <h3 class="_txteh txt18">Heating and cooling</h3>
                                        </div>

                                        @foreach ($amenitiesModal['heating_cooling'] as $element)
                                            <div class="cpd2btns hr">
                                                <div class="fx fx-ai-c gp16">
                                                    <div>
                                                        <div class="mh20fxaic">
                                                            {{-- <img src="{{ URL::asset('assets/img/icons/') . '/' . $element['code'] . '.svg' }}" alt=""> --}}
                                                        </div>
                                                    </div>

                                                    <div class="h3">{{ $element['name'] }}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                @if ( isset( $amenitiesModal['home_safety'] ) )
                                    <div class="mtmnos16 hr">
                                        <div class="_ak5d0on">
                                            <h3 class="_txteh txt18">Home safety</h3>
                                        </div>

                                        @foreach ($amenitiesModal['home_safety'] as $element)
                                            <div class="cpd2btns hr">
                                                <div class="fx fx-ai-c gp16">
                                                    <div>
                                                        <div class="mh20fxaic">
                                                            {{-- <img src="{{ URL::asset('assets/img/icons/') . '/' . $element['code'] . '.svg' }}" alt=""> --}}
                                                        </div>
                                                    </div>

                                                    <div class="h3">{{ $element['name'] }}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                @if ( isset( $amenitiesModal['internetoffice'] ) )
                                    <div class="mtmnos16 hr">
                                        <div class="_ak5d0on">
                                            <h3 class="_txteh txt18">Internet and office</h3>
                                        </div>

                                        @foreach ($amenitiesModal['internetoffice'] as $element)
                                            <div class="cpd2btns hr">
                                                <div class="fx fx-ai-c gp16">
                                                    <div>
                                                        <div class="mh20fxaic">
                                                            {{-- <img src="{{ URL::asset('assets/img/icons/') . '/' . $element['code'] . '.svg' }}" alt=""> --}}
                                                        </div>
                                                    </div>

                                                    <div class="h3">{{ $element['name'] }}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                @if ( isset( $amenitiesModal['location_feactures'] ) )
                                    <div class="mtmnos16 hr">
                                        <div class="_ak5d0on">
                                            <h3 class="_txteh txt18">Location features</h3>
                                        </div>

                                        @foreach ($amenitiesModal['location_feactures'] as $element)
                                            <div class="cpd2btns hr">
                                                <div class="fx fx-ai-c gp16">
                                                    <div>
                                                        <div class="mh20fxaic">
                                                            {{-- <img src="{{ URL::asset('assets/img/icons/') . '/' . $element['code'] . '.svg' }}" alt=""> --}}
                                                        </div>
                                                    </div>

                                                    <div class="h3">{{ $element['name'] }}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                @if ( isset( $amenitiesModal['Outdoor'] ) )
                                    <div class="mtmnos16 hr">
                                        <div class="_ak5d0on">
                                            <h3 class="_txteh txt18">Outdoor</h3>
                                        </div>

                                        @foreach ($amenitiesModal['Outdoor'] as $element)
                                            <div class="cpd2btns hr">
                                                <div class="fx fx-ai-c gp16">
                                                    <div>
                                                        <div class="mh20fxaic">
                                                            {{-- <img src="{{ URL::asset('assets/img/icons/') . '/' . $element['code'] . '.svg' }}" alt=""> --}}
                                                        </div>
                                                    </div>

                                                    <div class="h3">{{ $element['name'] }}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                @if ( isset( $amenitiesModal['parking_facilities'] ) )
                                    <div class="mtmnos16 hr">
                                        <div class="_ak5d0on">
                                            <h3 class="_txteh txt18">Parking and facilities</h3>
                                        </div>

                                        @foreach ($amenitiesModal['parking_facilities'] as $element)
                                            <div class="cpd2btns hr">
                                                <div class="fx fx-ai-c gp16">
                                                    <div>
                                                        <div class="mh20fxaic">
                                                            {{-- <img src="{{ URL::asset('assets/img/icons/') . '/' . $element['code'] . '.svg' }}" alt=""> --}}
                                                        </div>
                                                    </div>

                                                    <div class="h3">{{ $element['name'] }}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                @if ( isset( $amenitiesModal['Services'] ) )
                                    <div class="mtmnos16 hr">
                                        <div class="_ak5d0on">
                                            <h3 class="_txteh txt18">Servicess</h3>
                                        </div>

                                        @foreach ($amenitiesModal['Services'] as $element)
                                            <div class="cpd2btns hr">
                                                <div class="fx fx-ai-c gp16">
                                                    <div>
                                                        <div class="mh20fxaic">
                                                            {{-- <img src="{{ URL::asset('assets/img/icons/') . '/' . $element['code'] . '.svg' }}" alt=""> --}}
                                                        </div>
                                                    </div>

                                                    <div class="h3">{{ $element['name'] }}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>