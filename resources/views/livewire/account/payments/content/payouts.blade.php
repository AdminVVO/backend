<div>
    <div class="_cont-payout">
        <div class="h2-guests">Payout methods</div>

        <div class="_block">
            <p class="_txtec">When you receive a payment for a reservation, we call that payment to you a "payout." Our secure payment system supports several payout methods, which can be set up below. <a href="#"><span class="_txtblu">Go to FAQ</span></a>.</p>

            <div class="_txteh">To get paid, you need to set up a payout method</div>
            <p class="_txtec">Vvoutlet releases payouts about 24 hours after a guest's scheduled check-in time. The time it takes for the funds to appear in your account depends on your payout method. <a href="#"><span class="_txtblu">Learn more</span></a></p></p>
        </div>

        <button class="btn-celest" wire:click="showModal()">Add payout method</button>
    </div>

    @if ( $showModal )
        <div class="container_add-payments" style="display: block" wire:ignore.self>
            <div class="modal-addpymts"></div>

            <div class="pd_addpymts-modal">
                <div class="_z4lmgp">
                    <div class="modal_content-addpymts">
                        <div class="fx fx-jc-e">
                            <button type="button" class="cwhfcbbpfx closeUserModal"  wire:click="closeModal()">X</button>
                        </div>
                        {{-- Modal Principal --}}
                        @if ( $modalOne )
                            <div class="modal_block">
                                <div class="content_hidden-addpymts">
                                    <form wire:submit.prevent="submitOne">
                                        <div class="site-content">
                                            <div class="h2_publish">Billing country / region</div>

                                            <div class="selected-modal" style="margin: 25px 0 41px;">
                                                <select wire:model.lazy="country" class="@error('country') error_input @enderror">
                                                    <option value="0" selected>Choose...</option>
                                                    <option value="US">United States (+1)</option>
                                                    <option value="VE">Venezuela (+58)</option>
                                                </select>

                                                <i class="fas fa-chevron-down"></i>
                                            </div>
                                            @error('country')
                                                <div  class="_txterror">
                                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                            <h2 class="h2-guests">Payout methods in Peru</h2>

                                            <div class="_gap">
                                                <div class="radio-item_rscrm">
                                                    <input type="radio" id="paypalusd" wire:model.lazy="billing" value="paypal" checked="">
                                                    <label for="paypalusd">
                                                        <div class="content_flex-actv">
                                                            <div class="flex-msg">
                                                                <div class="_block">
                                                                    <div class="_txteh">PayPal in USD</div>
                                                                </div>
                                                                <div class="_flex">
                                                                    <span class="red_guion">-</span>
                                                                    <p class="_txtec16">Get paid in 3-4 hours</p>
                                                                </div>
                                                                <div class="_flex">
                                                                    <span class="red_guion">-</span>
                                                                    <p class="_txtec16">Connect your existing PayPal account.</p>
                                                                </div>
                                                                
                                                                <div class="_flex">
                                                                    <span class="red_guion">-</span>
                                                                    <p class="_txtec16">May include fees</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <span class="before_check"></span>
                                                    </label>
                                                </div>

                                                <div class="radio-item_rscrm">
                                                    <input type="radio" id="bankusd" wire:model.lazy="billing" value="bank">
                                                    <label for="bankusd">
                                                        <div class="content_flex-actv">
                                                            <div class="flex-msg">
                                                                <div class="_block">
                                                                    <div class="_txteh">Bank Transfer in USD</div>
                                                                </div>
                                                                <div class="_flex">
                                                                    <span class="red_guion">-</span>
                                                                    <p class="_txtec16">Get paid in 3-5 business days</p>
                                                                </div>
                                                                <div class="_flex">
                                                                    <span class="red_guion">-</span>
                                                                    <p class="_txtec16">Weekends and holidays may extend processing time</p>
                                                                </div>
                                                                
                                                                <div class="_flex">
                                                                    <span class="red_guion">-</span>
                                                                    <p class="_txtec16">No fees</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <span class="before_check"></span>
                                                    </label>
                                                </div>

                                                <div class="radio-item_rscrm">
                                                    <input type="radio" id="mastercardusd" wire:model.lazy="billing" value="payoneer">
                                                    <label for="mastercardusd">
                                                        <div class="content_flex-actv">
                                                            <div class="flex-msg">
                                                                <div class="_block">
                                                                    <div class="_txteh">Payoneer Prepaid Debit MasterCard in USD</div>
                                                                </div>
                                                                <div class="_flex">
                                                                    <span class="red_guion">-</span>
                                                                    <p class="_txtec16">Get paid in 3-5 hours</p>
                                                                </div>

                                                                <div class="_flex">
                                                                    <span class="red_guion">-</span>
                                                                    <div>
                                                                        <p class="_txtec16">A physical card will be mailed to you after creating your Payoneer</p>
                                                                        <p class="_txtec16">Prepaid Debit MasterCard account. Existing accounts may also be used.</p>
                                                                    </div>
                                                                </div>

                                                                <div class="_flex">
                                                                    <span class="red_guion">-</span>
                                                                    <p class="_txtec16">May include fees</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <span class="before_check"></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="_block-jsb">
                                                <button type="button" wire:click="closeModal()" class="btn-red">Cancel</button>
                                                <button type="submit" class="btn-celest">Next</button>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                        @endif
                        
                        {{-- Modal Paypal --}}
                        @if ( $modalTwo )
                            <div class="modal_block">
                                <div class="content_hidden-addpymts">
                                    <div class="site-content">
                                        <div class="h2_publish" style="margin-bottom: 8px;">PayPal in USD</div>
                                        <h4 class="_txtec">Connect your existing PayPal account.</h4>

                                        <div class="mrg">
                                            <div class="_border">
                                                <div class="_txtec">May include fees</div>
                                            </div>
                                            <div class="_border">
                                                <div class="_txtec">Get paid in 3-4 hours</div>
                                            </div>
                                            <div class="_border">
                                                <div class="_txtec">When you click next, you will be redirected to another website where you may securely enter your banking details. After completing the requested information you will be redirected back to vvoutlet.</div>
                                            </div>
                                        </div>

                                        <div class="_block-jsb">
                                            <div class="_btnsmleft" wire:click="backHome">
                                                <i class="fas fa-angle-left"></i>
                                                <span>Back</span>
                                            </div>
                                            <button type="button" class="btn-celest">Log in with Paypal</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Modal Bank --}}
                        @if ( $modalTree)
                            <div class="modal_block">
                                <div class="content_hidden-addpymts">
                                    <div class="site-content">
                                        <div class="h2_publish" style="margin-bottom: 8px;">Bank Transfer in USD</div>
                                        <h4 class="_txtec">Weekends and holidays may extend processing time</h4>

                                        <div class="mrg">
                                            <div class="_border">
                                                <div class="_txtec">No fees</div>
                                            </div>
                                            <div class="_border">
                                                <div class="_txtec">Get paid in 3-5 business days</div>
                                            </div>
                                            <div class="_border">
                                                <div class="_txtec">When you click Next, you will be directed to another website where you may securely enter your banking details. After completing the requested information you will be redirected back to vvoutlet. Here are some tips you should know when entering your information..</div>
                                            </div>
                                        </div>

                                        <div class="_block-jsb">
                                            <div class="_btnsmleft" wire:click="backHome">
                                                <i class="fas fa-angle-left"></i>
                                                <span>Back</span>
                                            </div>
                                            <button type="button" class="btn-celest">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        {{-- Modal Payonner --}}
                        @if ( $modalFoor)
                            <div class="modal_block">
                                <div class="content_hidden-addpymts">
                                    <div class="site-content">
                                        <div class="h2_publish" style="margin-bottom: 8px;">Payoneer Prepaid Debit MasterCard in USD</div>
                                        <h4 class="_txtec">A physical card will be mailed to you after creating your Payoneer Prepaid Debit MasterCard account. Existing accounts may also be used.</h4>

                                        <div class="mrg">
                                            <div class="_border">
                                                <div class="_txtec">May include fees</div>
                                            </div>
                                            <div class="_border">
                                                <div class="_txtec">Get paid in 3-4 hours</div>
                                            </div>
                                            <div class="_border">
                                                <div class="_txtec">When you click next, you will be redirected to another website where you may securely enter your banking details. After completing the requested information you will be redirected back to vvoutlet.</div>
                                            </div>
                                        </div>

                                        <div class="_block-jsb">
                                            <div class="_btnsmleft" wire:click="backHome">
                                                <i class="fas fa-angle-left"></i>
                                                <span>Back</span>
                                            </div>
                                            <button type="button" class="btn-celest">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    @endif

</div>