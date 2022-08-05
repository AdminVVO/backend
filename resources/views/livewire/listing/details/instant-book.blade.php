<div class="modal_content-anhost">
    <div class="close">
        <span>X</span>
    </div>

    @if ( $step === 'init' )
        <div class="modal_block">
            <div class="content_hidden-anhost" style="margin-bottom: 0; padding-bottom: 15px;">
                <div class="_wpwi48">
                    <h2 class="h2_publish">Are you sure you want to turn off Instant Book?</h2>

                    <div class="fx fx-fd-c gp49 mr-t54">
                        <div class="bk-icon-des_fbas fx-ai-fs gp19">
                            <div class="txt-center w40">
                                <img src="{{ URL::asset('assets/img/icons/rules.svg') }}" alt="">
                            </div>

                            <div class="fx fx-fd-c gp7">
                                <div class="_txteh">You set the rules</div>

                                <div class="_txtec">You can require guests to have positive reviews or submit government-issued ID.</div>
                            </div>
                        </div>

                        <div class="bk-icon-des_fbas fx-ai-fs gp19">
                            <div class="txt-center w40">
                                <img src="{{ URL::asset('assets/img/icons/connect-usrs-guests.svg') }}" alt="">
                            </div>

                            <div class="fx fx-fd-c gp7">
                                <div class="_txteh">Connect with guests</div>

                                <div class="_txtec">Guests will always tell you why they're coming, their check-in time, and how many people to expect.</div>
                            </div>
                        </div>

                        <div class="bk-icon-des_fbas fx-ai-fs gp19">
                            <div class="txt-center w40">
                                <img src="{{ URL::asset('assets/img/icons/back.svg') }}" alt="">
                            </div>

                            <div class="fx fx-fd-c gp7">
                                <div class="_txteh">We have your back</div>

                                <div class="_txtec">If you're ever uncomfortable with a reservation, before or during a trip, you can cancel penalty-free.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="_zjunba">
            <button type="button" class="_fpnigw0 click_cancel_mdls" wire:click="reloadInputs">Cancel</button>

            <button class="btn-celest" wire:click="next('init')">Turn instant Book off</button>
        </div>
    @endif


    @if ( $step === 'request' )
        <div class="_wpwi48 mr-b26">
            <div class="_nlporcrd">
                <span class="_wptlbbb" style="width: 33.3%;"></span>
            </div>
        </div>

        <div class="modal_block">
            <div class="content_hidden-anhost" style="margin-bottom: 0; padding-bottom: 15px;">
                <div class="_wpwi48">
                    <div class="fx fx-fd-c gp15">
                        <h2 class="h2_publish">Before you turn off Instant Book, tell us why you want to review every request</h2>
                        <p class="_txtec">We may have settings to help Instant Book work for you.</p>
                    </div>
                    
                    <div class="fx fx-fd-c gp20 mr-t45">
                        <div>
                            <label class="block-lb fx-ai-c">
                                <input type="radio" name="listing_review_request1" checked>
                                <div class="before_check">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>

                                <div class="w100">
                                    <span class="_txtec">I don't want to miss out on better reservations</span>
                                </div>
                            </label>
                        </div>

                        <div>
                            <label class="block-lb fx-ai-c">
                                <input type="radio" name="listing_review_request1">
                                <div class="before_check">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>

                                <div class="w100">
                                    <span class="_txtec">I didn't know I could be booked instantly</span>
                                </div>
                            </label>
                        </div>

                        <div>
                            <label class="block-lb fx-ai-c">
                                <input type="radio" name="listing_review_request1">
                                <div class="before_check">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>

                                <div class="w100">
                                    <span class="_txtec">It's hard to keep my calendar up to date</span>
                                </div>
                            </label>
                        </div>

                        <div>
                            <label class="block-lb fx-ai-c">
                                <input type="radio" name="listing_review_request1">
                                <div class="before_check">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>

                                <div class="w100">
                                    <span class="_txtec">I want to take a temporary break from Instant Book</span>
                                </div>
                            </label>
                        </div>

                        <div>
                            <label class="block-lb fx-ai-c">
                                <input type="radio" name="listing_review_request1">
                                <div class="before_check">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>

                                <div class="w100">
                                    <span class="_txtec">I want more control over who can book</span>
                                </div>
                            </label>
                        </div>

                        <div>
                            <label class="block-lb fx-ai-c">
                                <input type="radio" name="listing_review_request1">
                                <div class="before_check">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>

                                <div class="w100">
                                    <span class="_txtec">My reason isn't listed</span>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="_zjunba">
            <button type="button" class="_fpnigw0">
                <div class="fx fx-ai-b gp5" wire:click="return('request')">
                    <img src="{{ URL::asset('assets/img/icons/left-back.svg') }}" alt="">
                    <span>Back</span>
                </div>
            </button>

            <div class="fx fx-ai-c gp17">
                <button class="btn-bd-white" wire:click="reloadInputs">
                    <span class="_txteh">Keep instant Book on</span>
                </button>
                <button class="btn-celest" wire:click="next('request')">Continue</button>
            </div>
        </div>
    @endif








</div>