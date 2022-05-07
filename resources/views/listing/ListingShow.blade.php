@extends('layouts.App')

@section('title') Listings Show @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/modals-admin.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/modals-user.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderAuth')

@endsection

@section('content')
    
    <section class="entero c_linsting" style="margin-top: 50px;">
        <div class="medio">
            <div class="c_listing-post fx">

                {{-- Bar All Listin Right --}}
                @livewire('listing.details.content-right', ['listing' => $listing])

                @livewire('listing.details.content-left', ['listing' => $listing])

            </div>
        </div>
    </section>

    @section('modals')

    {{-- Modals Amenities --}}
        <div class="container_admin-host _ntñsfts container_lgssppas">
            <div class="modal-anhost"></div>

            <div class="pd_anhost-modal">
                <div class="_z4lmgp">
                    <div class="modal_content-anhost">
                        <div class="close">
                            <span>X</span>
                        </div>

                        <div class="_wpwi48 mr-b76">
                            <div class="fx fx-fd-c gp18">
                                <h2 class="h2_publish">Amenities</h2>
                                <p class="_txtec">Your listing won't show up in search during the time you set. You'll still be responsible for any already confirmed reservations.</p>
                            </div>
                        </div>

                        <div class="modal_block">
                            <div class="content_hidden-anhost">
                                <div class="_wpwi48">
                                    <div class="fx fx-fd-c gp5">
                                        <h3 class="h2-guests">Popular</h3>
                                        <p class="_txtec">These are amenities that guests typically look for in a stay.</p>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Essentials</h3>
                                                <p class="_txtec">Towels, bed sheets, soap, tollet paper, and pillows</p>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Air conditioning</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i" checked>
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Essentials</h3>
                                                <p class="_txtec">Towels, bed sheets, soap, tollet paper, and pillows</p>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Cleaning products</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Cooking basics</h3>
                                                <p class="_txtec">Pots and pans, oil, salt and pepper</p>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Dishes and silverware</h3>
                                                <p class="_txtec">Bowls, chopsticks, plates, cups, etc.</p>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Dryer</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Hair dryer</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Heating</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Hot tub</h3>
                                                <div class="_txtlineargris18">
                                                    <span>Add details</span>
                                                </div>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Kitchen</h3>
                                                <p class="_txtec">Space where guests can cook their own meals</p>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Pool</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">TV</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Washer</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Wifi</h3>
                                                <p class="_txtec">Available throughout the house</p>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-fd-c gp24">
                                            <div class="fx fx-fd-c gp5">
                                                <h3 class="h2-guests">Bathroom</h3>
                                            </div>

                                            <div class="fx fx-ai-c fx-jc-sb gp30">
                                                <div class="fx fx-fd-c gp7">
                                                    <h3 class="_txteh">Bathtub</h3>
                                                </div>

                                                <input type="checkbox" class="checkbox_custom check_i">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Bidet</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Body soap</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Cleaning products</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Conditioner</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Hair dryer</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Hot water</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Outdoor shower</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Shampoo</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Shower gel</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-fd-c gp24">
                                            <div class="fx fx-fd-c gp5">
                                                <h3 class="h2-guests">Bedroom and laundry</h3>
                                            </div>

                                            <div class="fx fx-ai-c fx-jc-sb gp30">
                                                <div class="fx fx-fd-c gp7">
                                                    <h3 class="_txteh">Essentials</h3>
                                                    <p class="_txtec">Towels, bed sheets, soap, toilet paper, and pilows</p>
                                                </div>

                                                <input type="checkbox" class="checkbox_custom check_i">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Bed linens</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Clothing storage</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Dryer</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Drying rack for clothing</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Extra pillows and blankets</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Hangers</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Iron</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Mosquito net</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Room-darkening shades</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Safe</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Washer</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-fd-c gp24">
                                            <div class="fx fx-fd-c gp5">
                                                <h3 class="h2-guests">Entertainment</h3>
                                            </div>

                                            <div class="fx fx-ai-c fx-jc-sb gp30">
                                                <div class="fx fx-fd-c gp7">
                                                    <h3 class="_txteh">Books and reading material</h3>
                                                </div>

                                                <input type="checkbox" class="checkbox_custom check_i">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Ethernet connection</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Exercise equipment</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Game console</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Piano</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Ping pong table</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Pool table</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Record player</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Sound system</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">TV</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-fd-c gp24">
                                            <div class="fx fx-fd-c gp5">
                                                <h3 class="h2-guests">Family</h3>
                                            </div>

                                            <div class="fx fx-ai-c fx-jc-sb gp30">
                                                <div class="fx fx-fd-c gp7">
                                                    <h3 class="_txteh">Baby bath</h3>
                                                </div>

                                                <input type="checkbox" class="checkbox_custom check_i">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Baby monitor</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Baby safety gates</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Babysitter recommendations</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Board games</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Changing table</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Children's books and toys</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Children's dinnerware</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Crib</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Fireplace guards</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">High chair</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Outlet covers</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Pack'n play/Traver crib</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Table corner guards</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Window guards</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-fd-c gp24">
                                            <div class="fx fx-fd-c gp5">
                                                <h3 class="h2-guests">Heating and cooling</h3>
                                            </div>

                                            <div class="fx fx-ai-c fx-jc-sb gp30">
                                                <div class="fx fx-fd-c gp7">
                                                    <h3 class="_txteh">Air conditioning</h3>
                                                </div>

                                                <input type="checkbox" class="checkbox_custom check_i">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Ceiling fan</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Heating</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Indoor fireplace</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Portable fans</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-fd-c gp24">
                                            <div class="fx fx-fd-c gp5">
                                                <h3 class="h2-guests">Home safety</h3>
                                            </div>

                                            <div class="fx fx-ai-c fx-jc-sb gp30">
                                                <div class="fx fx-fd-c gp7">
                                                    <h3 class="_txteh">Carbon monoxide alarm</h3>
                                                    <p class="_txtec">Check your local laws, which may require a working carbon monoxide detector in every room</p>
                                                </div>

                                                <input type="checkbox" class="checkbox_custom check_i">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Fire extinguisher</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">First aid kit</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Smoke alarm</h3>
                                                <p class="_txtec">Check your local laws, which may require a working carbon monoxide detector in every room</p>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i" checked>
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-fd-c gp24">
                                            <div class="fx fx-fd-c gp5">
                                                <h3 class="h2-guests">Internet and office</h3>
                                            </div>

                                            <div class="fx fx-ai-c fx-jc-sb gp30">
                                                <div class="fx fx-fd-c gp7">
                                                    <h3 class="_txteh">Dedicated workspace</h3>
                                                    <p class="_txtec">A desk or table with a chair and space for a laptop.</p>
                                                </div>

                                                <input type="checkbox" class="checkbox_custom check_i">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Pocket wifi</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Wifi</h3>
                                                <p class="_txtec">Available throughout the house</p>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-fd-c gp24">
                                            <div class="fx fx-fd-c gp5">
                                                <h3 class="h2-guests">Internet and office</h3>
                                            </div>

                                            <div class="fx fx-ai-c fx-jc-sb gp30">
                                                <div class="fx fx-fd-c gp7">
                                                    <h3 class="_txteh">Baking sheet</h3>
                                                </div>

                                                <input type="checkbox" class="checkbox_custom check_i">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Barbecue utensils</h3>
                                                <p class="_txtec">Grill, charcoal, bamboo skewers/iron skewers, etc.</p>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Bread maker</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Blender</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Coffee</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Coffee maker</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Cooking basics</h3>
                                                <p class="_txtec">Pots and pans, oil, salt and pepper</p>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Dining table</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Disher and silverware</h3>
                                                <p class="_txtec">Bowls, chopsticks, plates, cups, etc.</p>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Dishwasher</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Freezer</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Hot water kettle</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Kitchen</h3>
                                                <p class="_txtec">Space where guests can cook their own meals</p>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Microwave</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Mini fridge</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Oven</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Refrigerator</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Rice maker</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Stove</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Toaster</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Trash compactor</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Wine glasses</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-fd-c gp24">
                                            <div class="fx fx-fd-c gp5">
                                                <h3 class="h2-guests">Location feactures</h3>
                                            </div>

                                            <div class="fx fx-ai-c fx-jc-sb gp30">
                                                <div class="fx fx-fd-c gp7">
                                                    <h3 class="_txteh">Beach access</h3>
                                                    <p class="_txtec">Guests can enjoy a nearby beach</p>
                                                </div>

                                                <input type="checkbox" class="checkbox_custom check_i">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Lake access</h3>
                                                <p class="_txtec">Guests can get to a lake using a path or dock</p>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Laundromat nearby</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Private entrance</h3>
                                                <p class="_txtec">Separate street or building entrance</p>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Resort access</h3>
                                                <p class="_txtec">Guests can use nearby resort facilities</p>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Ski-in/Ski-out</h3>
                                                <p class="_txtec">Guests can access ski lifts without driving or taking paid transportation</p>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Waterfront</h3>
                                                <p class="_txtec">right next to a body of water</p>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-fd-c gp24">
                                            <div class="fx fx-fd-c gp5">
                                                <h3 class="h2-guests">Outdoor</h3>
                                            </div>

                                            <div class="fx fx-ai-c fx-jc-sb gp30">
                                                <div class="fx fx-fd-c gp7">
                                                    <h3 class="_txteh">Backyard</h3>
                                                    <p class="_txtec">An open space on the property usually covered in grass</p>
                                                </div>

                                                <input type="checkbox" class="checkbox_custom check_i">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">BBQ grill</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Beach essentials</h3>
                                                <p class="_txtec">Beach towels, umbrella, beach blanket, snorkeling gear</p>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Bikes</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Boat slip</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Fire pit</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Hammock</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Kayak</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Outdoor dining area</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i" checked>
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Outdoor furniture</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Outdoor kitchen</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Patio or balcony</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-fd-c gp24">
                                            <div class="fx fx-fd-c gp5">
                                                <h3 class="h2-guests">Parking and facilities</h3>
                                            </div>

                                            <div class="fx fx-ai-c fx-jc-sb gp30">
                                                <div class="fx fx-fd-c gp7">
                                                    <h3 class="_txteh">Elevator</h3>
                                                    <p class="_txtec">The home or building has an elevator that's at least 52 inches deep and a doorway at last 32 inches wide.</p>
                                                </div>

                                                <input type="checkbox" class="checkbox_custom check_i">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">EV charger</h3>
                                                <p class="_txtec">Guests can charge their electric vehicles on the property.</p>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Free parking on premises</h3>
                                                <div class="_txtlineargris18">
                                                    <span>Add details</span>
                                                </div>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i" checked>
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Free street parking</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Gym</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Hot tub</h3>
                                                <div class="_txtlineargris18">
                                                    <span>Add details</span>
                                                </div>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i" checked>
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Paid parking off permises</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Paid parking on premises</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Pool</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Sauna</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Single level home</h3>
                                                <p class="_txtec">No stairs in home</p>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-fd-c gp24">
                                            <div class="fx fx-fd-c gp5">
                                                <h3 class="h2-guests">Services</h3>
                                            </div>

                                            <div class="fx fx-ai-c fx-jc-sb gp30">
                                                <div class="fx fx-fd-c gp7">
                                                    <h3 class="_txteh">Breakfast</h3>
                                                    <p class="_txtec">Breakfast is provided</p>
                                                </div>

                                                <input type="checkbox" class="checkbox_custom check_i">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Cleaning before checkout</h3>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Long term stays allowed</h3>
                                                <p class="_txtec">Allow stay for 28 days or more</p>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>

                                    <div class="_bkpd352btns hr">
                                        <div class="fx fx-ai-c fx-jc-sb gp30">
                                            <div class="fx fx-fd-c gp7">
                                                <h3 class="_txteh">Luggage dropoff allowed</h3>
                                                <p class="_txtec">For guests' convenience when they have early or late departure</p>
                                            </div>

                                            <input type="checkbox" class="checkbox_custom check_i">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="_zjunba">
                            <div class="_btnsmleft">
                                <span>Cancel</span>
                            </div>

                            <button class="btn-celest">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>







  {{--       <div class="container_admin-host container_user_f_p">
            <div class="modal-anhost"></div>

            <div class="pd_anhost-modal">
                <div class="_z4lmgp">
                    <div class="modal_content-anhost">
                        <div class="close" id="closeReportModl">
                            <span>X</span>
                        </div>

                        <div class="modal_block">
                            @livewire('chat-message.report-message')
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    @endsection

    <div class="container_admin-host container_give-feedback">
        <div class="modal-anhost"></div>

        @livewire('listing.feedback', ['listing' => $listing])

    </div>

    <div class="container_admin-host container_preview_guests_pay">
        <div class="modal-anhost"></div>

        <div class="pd_anhost-modal">
            <div class="_z4lmgp">
                <div class="modal_content-anhost" style="max-width: 706px;">
                    <div class="close">
                        <span>X</span>
                    </div>

                    <div class="modal_block" style="height: 652px;">
                        <div class="content_hidden-anhost" style="margin-bottom: 0;">
                            <div class="_pdleftright35">
                                <h2 class="h2_publish" style="padding-bottom: 8px;">Preview how much guests pay</h2>
                                <p class="_txtec">Select any combination of nights, guests and pets for us to show you the final price.</p>

                                <div class="fx fx-fw-w" style="gap: 12px; margin: 24px 0 32px;">
                                    <div class="selected-modal" style="margin: 0;">
                                        <select name="" id="">
                                            <option>1 night</option>
                                            <option>2 night</option>
                                            <option>3 night</option>
                                            <option>1 week</option>
                                            <option>1 month</option>
                                        </select>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.584" height="5.965" viewBox="0 0 10.584 5.965">
                                            <path d="M11.482,15.474l4-4.005a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071l-4.535,4.538c-.287.287-1.043.022-1.043.022L6.408,12.543a.757.757,0,0,1,1.068-1.071Z" transform="translate(-6.188 -11.246)" fill="#7d7d7d"></path>
                                        </svg>
                                    </div>

                                    <div class="pr content_show_modal_left guest-btn-modal">
                                        <button class="select_btn-border click_guest">
                                            <span>1 Guest</span>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.584" height="5.965" viewBox="0 0 10.584 5.965">
                                                <path d="M11.482,15.474l4-4.005a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071l-4.535,4.538c-.287.287-1.043.022-1.043.022L6.408,12.543a.757.757,0,0,1,1.068-1.071Z" transform="translate(-6.188 -11.246)" fill="#7d7d7d"></path>
                                            </svg>
                                        </button>

                                        <!-- <div class="_bef-places" style="padding: 0;">
                                            <div style="padding: 5px 22px 16px 22px;">
                                                <div class="_cont-places">
                                                    <div class="_inf">
                                                        <div class="_txteh">Adults</div>
                                                        <div class="_txtec">Ages 13 or above</div>
                                                    </div>
                                                    <div class="_2btns">
                                                        <button class="_btn" type="button" aria-label="disminuir valor" disabled="">
                                                            <span>
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                    <path d="m2 16h28"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        
                                                        <span>1</span>

                                                        <button class="_btn" type="button" aria-label="aumentar valor">
                                                            <span>
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                    <path d="m2 16h28m-14-14v28"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="_cont-places">
                                                    <div class="_inf">
                                                        <div class="_txteh">Children</div>
                                                        <div class="_txtec">Ages 2-12</div>
                                                    </div>
                                                    <div class="_2btns">
                                                        <button class="_btn" type="button" aria-label="disminuir valor" disabled="">
                                                            <span>
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                    <path d="m2 16h28"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        
                                                        <span>0</span>

                                                        <button class="_btn" type="button" aria-label="aumentar valor">
                                                            <span>
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                    <path d="m2 16h28m-14-14v28"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="_cont-places">
                                                    <div class="_inf">
                                                        <div class="_txteh">Infants</div>
                                                        <div class="_txtec">Under 2 · Stay for free</div>
                                                    </div>
                                                    <div class="_2btns">
                                                        <button class="_btn" type="button" aria-label="disminuir valor" disabled="">
                                                            <span>
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                    <path d="m2 16h28"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        
                                                        <span>0</span>

                                                        <button class="_btn" type="button" aria-label="aumentar valor">
                                                            <span>
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                    <path d="m2 16h28m-14-14v28"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="fx fx-jc-r" style="padding: 16px 22px; border-top: 2px solid #E3EDF3;">
                                                <button class="btn-celest" style="float: right;">Save</button>
                                            </div>
                                        </div> -->

                                        <div class="container_admin-host" style="z-index: 1;">
                                            <div class="modal-anhost-guest click_afuera_modal"></div>
                                            <div class="pd_anhost-modal">
                                                <div class="_z4lmgp">
                                                    <div class="_bef-places _bef-places-modal">
                                                        <div class="_c-h fx fx-jc-sb fx-ai-fs" style="border-bottom: 2px solid #E3EDF3;">
                                                            <div style="padding: 22px;">
                                                                <h2 class="h2-guests">How many guests?</h2>
                                                            </div>
                                                            <span class="x_modal click_x_modal">X</span>
                                                        </div>
                                                        
                                                        <div style="padding: 0 22px;">
                                                            <div class="_cont-places">
                                                                <div class="_inf">
                                                                    <div class="_txteh">Adults</div>
                                                                    <div class="_txtec">Ages 13 or above</div>
                                                                </div>
                                                                <div class="_2btns">
                                                                    <button class="_btn" type="button" aria-label="disminuir valor" disabled="">
                                                                        <span>
                                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                                <path d="m2 16h28"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                    
                                                                    <span>1</span>

                                                                    <button class="_btn" type="button" aria-label="aumentar valor">
                                                                        <span>
                                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                                <path d="m2 16h28m-14-14v28"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="_cont-places">
                                                                <div class="_inf">
                                                                    <div class="_txteh">Children</div>
                                                                    <div class="_txtec">Ages 2-12</div>
                                                                </div>
                                                                <div class="_2btns">
                                                                    <button class="_btn" type="button" aria-label="disminuir valor" disabled="">
                                                                        <span>
                                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                                <path d="m2 16h28"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                    
                                                                    <span>0</span>

                                                                    <button class="_btn" type="button" aria-label="aumentar valor">
                                                                        <span>
                                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                                <path d="m2 16h28m-14-14v28"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="_cont-places">
                                                                <div class="_inf">
                                                                    <div class="_txteh">Infants</div>
                                                                    <div class="_txtec">Under 2 · Stay for free</div>
                                                                </div>
                                                                <div class="_2btns">
                                                                    <button class="_btn" type="button" aria-label="disminuir valor" disabled="">
                                                                        <span>
                                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                                <path d="m2 16h28"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                    
                                                                    <span>0</span>

                                                                    <button class="_btn" type="button" aria-label="aumentar valor">
                                                                        <span>
                                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                                <path d="m2 16h28m-14-14v28"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="fx fx-jc-r" style="padding: 16px 22px; border-top: 2px solid #E3EDF3;">
                                                            <button class="btn-celest">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pr content_show_modal_left pets-btn-modal">
                                        <button class="select_btn-border click_guest">
                                            <span>No pet</span>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.584" height="5.965" viewBox="0 0 10.584 5.965">
                                                <path d="M11.482,15.474l4-4.005a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071l-4.535,4.538c-.287.287-1.043.022-1.043.022L6.408,12.543a.757.757,0,0,1,1.068-1.071Z" transform="translate(-6.188 -11.246)" fill="#7d7d7d"></path>
                                            </svg>
                                        </button>

                                        <!-- <div class="_bef-places" style="padding: 0;">
                                            <div  style="padding: 5px 22px 16px 22px;">
                                                <div class="_cont-places">
                                                    <div class="_inf">
                                                        <div class="_txteh">Pets</div>
                                                    </div>
                                                    <div class="_2btns">
                                                        <button class="_btn" type="button" aria-label="disminuir valor" disabled="">
                                                            <span>
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                    <path d="m2 16h28"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        
                                                        <span>0</span>

                                                        <button class="_btn" type="button" aria-label="aumentar valor">
                                                            <span>
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                    <path d="m2 16h28m-14-14v28"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="fx fx-jc-r" style="padding: 16px 22px; border-top: 2px solid #E3EDF3;">
                                                <button class="btn-celest" style="float: right;">Save</button>
                                            </div>
                                        </div> -->

                                        <div class="container_admin-host" style="z-index: 1;">
                                            <div class="modal-anhost-guest click_afuera_modal"></div>
                                            <div class="pd_anhost-modal">
                                                <div class="_z4lmgp">
                                                    <div class="_bef-places _bef-places-modal">
                                                        <div class="_c-h fx fx-jc-sb fx-ai-fs" style="border-bottom: 2px solid #E3EDF3;">
                                                            <div style="padding: 22px;">
                                                                <h2 class="h2-guests">How many pets?</h2>
                                                            </div>
                                                            <span class="x_modal click_x_modal">X</span>
                                                        </div>
                                                        
                                                        <div style="padding: 0 22px;">
                                                            <div class="_cont-places">
                                                                <div class="_inf">
                                                                    <div class="_txteh">Pets</div>
                                                                </div>
                                                                <div class="_2btns">
                                                                    <button class="_btn" type="button" aria-label="disminuir valor" disabled="">
                                                                        <span>
                                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                                <path d="m2 16h28"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                    
                                                                    <span>0</span>

                                                                    <button class="_btn" type="button" aria-label="aumentar valor">
                                                                        <span>
                                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                                <path d="m2 16h28m-14-14v28"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="fx fx-jc-r" style="padding: 16px 22px; border-top: 2px solid #E3EDF3;">
                                                            <button class="btn-celest">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="border_preview_g_p">
                                    <div class="_cns _cns-mdls">
                                        <div class="hr" style="padding-bottom: 12px;">
                                            <span class="f-cth">
                                                <div>
                                                    <div class="_txtec">$32.56 for 1 night</div>
                                                    <span class="_txtblu14" style="font-weight: normal; margin-top: 3px;">your base price</span>
                                                </div>
                                                <div class="_txtec">$32.56</div>
                                            </span>

                                            <span class="f-cth">
                                                <div class="_txtec">Guest service fee</div>
                                                <div class="_txtec">$4.54</div>
                                            </span>
                                        </div>

                                        <div class="hr" style="padding-top: 12px;">
                                            <span class="f-cth">
                                                <div class="_txteh">Total</div>
                                                <div class="_txteh">$37.10</div>
                                            </span>

                                            <span class="f-cth">
                                                <div class="_txtec">your income</div>
                                                <div class="_txtec">$31.49</div>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="_pd35" style="padding-top: 21px; padding-bottom: 21px;">
                        <button class="btn-celest click_close" style="float: right;">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
     <script>

         $(".click_x_anuncio").click(function() {
            $(".anuncio_start_hosting").hide();
        });

        document.addEventListener("DOMContentLoaded", () => {
            Livewire.hook('component.initialized', (component) => {
                this.addEventListener('openModalFeedback', e => {
                    console.log('hoaosORIAN');
                    $('html,body').animate({
                        scrollTop: $("body").offset().top
                    }, 10);

                    $(".container_give-feedback").css({'display': 'block'});
                    $(".page-category").css({'overflow': 'hidden'});
                });
            })

           Livewire.hook('element.updated', (el, component) => {
                this.addEventListener('openModalFeedback', e => {
                    console.log('hoaosORIAN');
                    $('html,body').animate({
                        scrollTop: $("body").offset().top
                    }, 10);

                    $(".container_give-feedback").css({'display': 'block'});
                    $(".page-category").css({'overflow': 'hidden'});
                });

                $(".input_cant_view").keyup(function() {
                    $(this).parents(".show_form_input ._flfpc").find(".views_num").text($(this).val().length);
                });
                $(".click_minumum_nights").click(function() {
                    $(".show_minimum_nights").css({'display': 'flex'});
                    $(".click_minumum_nights").css({'display': 'none'});
                });
           })

           Livewire.hook('message.processed', (message, component) => {
                    
            })
                $(".clickEditAmenities").on("click", function(){
                    $('html, body').animate({
                        scrollTop: $("body").offset().top
                    }, 0);
                    $(".page-category").css({'overflow': 'hidden'});
                    $(".container_lgssppas").show();
                });
                $(".modal_content-user, .modal-anhost, .modal_content-anhost .click_cancel_mdls, .modal-hesfty, .modal-herls, .modal_content-anhost .close span, .closeUserModal, .close-x_hesfty, .click_close, .close-x_herls").on("click", function() {
                    $(this).parents(".container_user-host, .container_admin-host, .container_house-safety, .container_house-rules, .container_preview_guests_pay").hide();
                    $(this).parents(".page-category").css({'overflow': 'auto'});
                });

        });

     </script>
@endsection
