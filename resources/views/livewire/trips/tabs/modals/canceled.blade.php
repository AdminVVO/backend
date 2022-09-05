<div class="container_admin-host _ntñsfts container_tscdpp" wire:ignore.self>
    <div class="modal-anhost"></div>

    <div class="pd_anhost-modal">
        <div class="_z4lmgp">
            <div class="modal_content-anhost">
                <div class="close">
                    <span>X</span>
                </div>

                <div class="modal_block">
                    <div class="wh-p100 ht-fc pd-b13">
                        <div class="trips_upcoming_inf pd-t0">
                            <div class="fx fx-fd-c gp17">
                                <div class="fx fx-fd-c gp20">
                                    <div>
                                        <span class="_txtec16">INTERNATIONAL, {{$reservation['date']}}</span>
                                        <h2 class="h2_publish">Your reservation was canceled</h2>
                                    </div>

                                    <a href="interna.php" class="content_galerias mr0 modal_gal">
                                        <div class="slideshow-container" style="max-width: 100%; height: 212px;">
                                            <div class="card_img">
                                                <img src="{{ URL::asset('storage/photos-listing/') . '/' . \App\Models\Listing\Listings::ListingFile($reservation['listing_id']) . '/' . $reservation['photo1'] }}"
                                                    class="card_img_active">
                                                <img
                                                    src="{{ URL::asset('storage/photos-listing/') . '/' . \App\Models\Listing\Listings::ListingFile($reservation['listing_id']) . '/' . $reservation['photo2'] }}">
                                                <img
                                                    src="{{ URL::asset('storage/photos-listing/') . '/' . \App\Models\Listing\Listings::ListingFile($reservation['listing_id']) . '/' . $reservation['photo3'] }}">
                                            </div>
                                            <div class="content-dots">
                                                <span class="dot dot_active"></span>
                                                <span class="dot"></span>
                                                <span class="dot"></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <h1 class="h2-guests">{{$reservation['title']}}</h1>
                            </div>
                        </div>

                        <div class="trips_upcoming_inf">
                            <div class="fx fx-fd-c fx-ai-c gp21">
                                <div class="fx fx-fd-c gp15">
                                    <div class="fx">
                                        <div class="mnw45px">
                                            <i class="far fa-money-bill-alt _i-red20"></i>
                                        </div>

                                        <div class="_txtec16">We sent you $675.84 refund on Aug 8, If you haven't received it yet, contact your bank to learn when it'll deposit.</div>
                                    </div>

                                    <a href="" class="btn-bd-white wh-p100">
                                        <div class="fx fx-ai-c fx-jc-sb">
                                            <span class="_txteh">Track refund</span>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="5.298" height="9.266" viewBox="0 0 5.298 9.266">
                                                <path d="M4.635,3.7,8.138.194a.659.659,0,0,1,.935,0,.668.668,0,0,1,0,.938L5.1,5.105a.661.661,0,0,1-.913.019l-4-3.989A.662.662,0,0,1,1.128.2Z" transform="translate(0 9.266) rotate(-90)" fill="#283646"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>

                                <div class="wh-p100" style="max-width: 57%;">
                                    <a href="{{ route('messageUserIndex', ['interna' => $reservation['listing_id']]) }}" class="btn-bd-white wh-p100">
                                        <div class="fx fx-ai-c fx-jc-sb">
                                            <div class="flex gp12">
                                                <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="19.209" height="19.209" viewBox="0 0 19.209 19.209">
                                                    <path d="M21.709,12.626a8.012,8.012,0,0,1-.86,3.633,8.126,8.126,0,0,1-7.266,4.493,8.012,8.012,0,0,1-3.633-.86L4.5,21.709l1.817-5.45a8.012,8.012,0,0,1-.86-3.633A8.126,8.126,0,0,1,9.95,5.36a8.012,8.012,0,0,1,3.633-.86h.478a8.107,8.107,0,0,1,7.648,7.648Z" transform="translate(-3.5 -3.5)" fill="none" stroke="#ff5a5f" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                                </svg>
                                                <span class="_txteh mr0">Message Host</span>
                                            </div>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="5.298" height="9.266" viewBox="0 0 5.298 9.266">
                                                <path d="M4.635,3.7,8.138.194a.659.659,0,0,1,.935,0,.668.668,0,0,1,0,.938L5.1,5.105a.661.661,0,0,1-.913.019l-4-3.989A.662.662,0,0,1,1.128.2Z" transform="translate(0 9.266) rotate(-90)" fill="#283646"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="trips_upcoming_inf">
                            <h2 class="h2-guests title mr-b21">Reservation details</h2>

                            <div class="fx fx-fd-c gp24">
                                <div class="fx fx-fd-c gp8">
                                    <h3 class="_txteh mr0">Confirmation code</h3>
                                    <span class="_txtec16 txt_upper">{{$reservation['code_reservation']}}</span>
                                </div>

                                <div class="fx fx-fd-c gp8">
                                    <h3 class="_txteh mr0">Cancellation policy</h3>

                                    <div>
                                        <button type="button" class="txtunder__ics">Read more</button>
                                    </div>
                                </div>

                                <div class="fx fx-fd-c gp8">
                                    <h3 class="_txteh mr0">Payment details</h3>
                                    <div class="_txtec16">Total cost: ${{$reservation['total_amount']}} USD</div>

                                    <div>
                                        <button type="button" class="txtunder__ics">Get receipts</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="trips_upcoming_inf">
                            <div class="fx fx-fd-c gp17">
                                <h2 class="h2-guests title">Support</h2>

                                <div class="bk-icon-des">
                                    <div class="bk-icon-des_fbas fx-ai-b gp10 mnw-p47">
                                        <a href="" class="btn-bd-white wh-p100">
                                            <div class="fx fx-ai-c fx-jc-sb">
                                                <div class="fx fx-ai-c gp7">
                                                    <i class="far fa-question-circle _i-red20"></i>

                                                    <span class="_txteh mr0">Help Center</span>
                                                </div>

                                                <svg xmlns="http://www.w3.org/2000/svg" width="5.298" height="9.266" viewBox="0 0 5.298 9.266">
                                                    <path d="M4.635,3.7,8.138.194a.659.659,0,0,1,.935,0,.668.668,0,0,1,0,.938L5.1,5.105a.661.661,0,0,1-.913.019l-4-3.989A.662.662,0,0,1,1.128.2Z" transform="translate(0 9.266) rotate(-90)" fill="#283646"></path>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="bk-icon-des_fbas fx-ai-b gp10 mnw-p47">
                                        <a href="" class="btn-bd-white wh-p100">
                                            <div class="fx fx-ai-c fx-jc-sb">
                                                <div class="flex gp6">
                                                    <i class="far fa-building _i-red20"></i>

                                                    <span class="_txteh mr0">Resolution Center</span>
                                                </div>

                                                <svg xmlns="http://www.w3.org/2000/svg" width="5.298" height="9.266" viewBox="0 0 5.298 9.266">
                                                    <path d="M4.635,3.7,8.138.194a.659.659,0,0,1,.935,0,.668.668,0,0,1,0,.938L5.1,5.105a.661.661,0,0,1-.913.019l-4-3.989A.662.662,0,0,1,1.128.2Z" transform="translate(0 9.266) rotate(-90)" fill="#283646"></path>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style scoped>
    .modal_gal {
        flex: 0 !important;
    }
</style>
