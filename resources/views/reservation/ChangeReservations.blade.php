@extends('layouts.App')

@section('title') Reservations Change or Cancel @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderAuth')

@endsection

@section('content')

<section class="entero _bkground_img _bkground_img-cr">
    <img src="{{ URL::asset('assets/img/account-fondo.jpg') }}" alt="">
    <div class="medio">
        <div class="_flex">
            <h3 class="h2-guests_white60">Change reservation</h3>
        </div>
    </div>
</section>

<section class="entero section_change_reservation">
    <div class="medio">
        <div class="content fx fx-fw-w fx-jc-sb">
            <main>
                <div class="txt_center">
                    <h2 class="h2_publish" style="margin-bottom: 10px;">What do you Want to change?</h2>
                    <p class="_txtec">After making your desired changes, you can send a request to your guest, Jorge, to confirm the alterations to your reservation.</p>
                </div>

                <div class="content_change_gallery fx fx-ai-c">
                    <div class="c_img">
                        <img src="{{ URL::asset('assets/img/card/c1.jpg') }}" alt="">
                    </div>

                    <div class="flex_info">
                        <div class="fx fx-fd-c" style="margin-bottom: 12px; gap: 6px;">
                            <h3 class="_txtec-black20">Stars Gate Paradise at inorlandssfdsfsd fsdf</h3>
                            <h4 class="h5">Entire townhouse in Kissimmee</h4>
                            <p class="desc_lc">10 guests  -  4 bedrooms  -  5 beds  -  2.5 baths</p>
                        </div>

                        <button class="btn-celest">Change</button>
                    </div>
                </div>

                <form action="">
                    <h2 class="h2-guests">Reservation details</h2>
                    <div class="_flfpc" style="display: block;">
                        <div class="txt-check-in">Dates</div>
                        <div class="_block_f fx fx-fw-w">
                            <div class="inputBox_desig">
                                <label for="check_in" class="fx fx-ai-c fx-jc-sb">
                                    <div class="place_select fx fx-fd-c">
                                        <span class="_txteh">Check-in</span>
                                        <input type="text" class="_date-check_des" value="" id="check_in" placeholder="Add dates" readonly="">
                                    </div>

                                    <span class="before_bottom_red">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="8.504" viewBox="0 0 15 8.504">
                                            <path d="M13.69,17.186l5.672-5.628a1.068,1.068,0,0,1,1.514,1.505L14.45,19.44a1.077,1.077,0,0,1-1.478.031L6.5,13.069a1.063,1.063,0,0,1,0-1.505,1.074,1.074,0,0,1,1.514,0Z" transform="translate(-6.188 -11.246)" fill="#fff"/>
                                        </svg>
                                    </span>
                                </label>
                            </div>

                            <div class="inputBox_desig">
                                <label for="check_in" class="check_out fx fx-ai-c fx-jc-sb">
                                    <div class="place_select fx fx-fd-c">
                                        <span class="_txteh">Checkout</span>
                                        <i>
                                            <input type="text" class="_date-check-out" value="" id="" placeholder="Add dates" readonly="">
                                        </i>
                                    </div>

                                    <span class="before_bottom_red">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="8.504" viewBox="0 0 15 8.504">
                                            <path d="M13.69,17.186l5.672-5.628a1.068,1.068,0,0,1,1.514,1.505L14.45,19.44a1.077,1.077,0,0,1-1.478.031L6.5,13.069a1.063,1.063,0,0,1,0-1.505,1.074,1.074,0,0,1,1.514,0Z" transform="translate(-6.188 -11.246)" fill="#fff"/>
                                        </svg>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="_flfpc" style="display: block;">
                        <div class="txt-check-in">Guests</div>
                        <div class="selected-modal" style="margin: 0;">
                            <select name="" id="">
                                <option value="1">2 guests</option>
                            </select>

                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>

                    <h2 class="h2-guests" style="margin: 50px 0 25px;">Guest charges</h2>
                    <div class="_flfpc" style="display: block; margin: 0;">
                        <div class="txt-check-in">Accommodation cost</div>
                        <input type="text" class="_numcard" placeholder="$ 354 USD">
                    </div>
                    <p class="_txtec14" style="margin-top: 10px; padding-left: 19px;">$59.00 x 6 nights</p>

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 30px;">
                        <div class="_btnsmleft click_cancelprofile">
                            <span>Exit</span>
                        </div>
                        <button class="btn-celest">Save</button>
                    </div>
                </form>
            </main>

            <aside>
                <h3 class="h2-guests txt_center" style="margin-bottom: 22px;">Host payout details</h3>

                <div class="bg_white-linea">
                    <div>
                        <div class="_block fx fx-jc-sb fx-fw-w">
                            <span class="_txtec">Original payout</span>
                            <span class="_txtec">$382.18</span>
                        </div>

                        <div class="_block fx fx-jc-sb fx-fw-w">
                            <span class="_txtec">New payout</span>
                            <span class="_txtec">$382.18</span>
                        </div>

                        <div class="_block fx fx-jc-sb fx-fw-w">
                            <span class="_txteh">Price difference</span>
                            <span class="_txteh">$0.00</span>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

@endsection


@section('script')

@endsection
