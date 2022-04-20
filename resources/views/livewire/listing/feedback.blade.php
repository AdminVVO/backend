<div class="pd_anhost-modal">
    <div class="_z4lmgp">
        <div class="modal_content-anhost" style="max-width: 687px;">
            <div class="close" wire:click="closeFeedback">
                <span>X</span>
            </div>

            @if ( $show_feedback === 'PostOptions' )
                <div class="modal_block">
                    <div class="content_hidden-anhost" style="margin-bottom: 35px;">
                        <div class="_pdleftright35">
                            <div class="site-content" style="padding: 0;">
                                <div>
                                    <h2 class="h2_publish" style="padding-bottom: 24px;">Post comments</h2>

                                    <p class="_txteh">Tell us what your comment is about. We review all comments, but cannot respond individually.</p>
                                </div>

                                <div style="margin: 24px 0 40px;">
                                    <div class="fx fx-fd-c" style="gap: 18px;">
                                        <div>
                                            <label class="block-lb fx-ai-c fx-jc-fs">
                                                <input type="radio" name="post_coments" wire:model.defer="feedback_options" value="details">
                                                <div class="before_check">
                                                    <div class="flex-centrado" style="width: inherit;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                        </svg>
                                                    </div>
                                                </div>

                                                <div class="bfx_svg">
                                                    <span class="_txtec">Edit listing details</span>
                                                </div>
                                            </label>
                                        </div>

                                        <div>
                                            <label class="block-lb fx-ai-c fx-jc-fs">
                                                <input type="radio" name="post_coments" wire:model.defer="feedback_options" value="reservation">
                                                <div class="before_check">
                                                    <div class="flex-centrado" style="width: inherit;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                        </svg>
                                                    </div>
                                                </div>

                                                <div class="bfx_svg">
                                                    <span class="_txtec">Configuring reservation settings</span>
                                                </div>
                                            </label>
                                        </div>

                                        <div>
                                            <label class="block-lb fx-ai-c fx-jc-fs">
                                                <input type="radio" name="post_coments" wire:model.defer="feedback_options" value="adjusting">
                                                <div class="before_check">
                                                    <div class="flex-centrado" style="width: inherit;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                        </svg>
                                                    </div>
                                                </div>

                                                <div class="bfx_svg">
                                                    <span class="_txtec">Adjusting prices</span>
                                                </div>
                                            </label>
                                        </div>

                                        <div>
                                            <label class="block-lb fx-ai-c fx-jc-fs">
                                                <input type="radio" name="post_coments" wire:model.defer="feedback_options" value="availability">
                                                <div class="before_check">
                                                    <div class="flex-centrado" style="width: inherit;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                        </svg>
                                                    </div>
                                                </div>

                                                <div class="bfx_svg">
                                                    <span class="_txtec">Availability accommodation</span>
                                                </div>
                                            </label>
                                        </div>

                                        <div>
                                            <label class="block-lb fx-ai-c fx-jc-fs">
                                                <input type="radio" name="post_coments" wire:model.defer="feedback_options" value="regulations">
                                                <div class="before_check">
                                                    <div class="flex-centrado" style="width: inherit;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                        </svg>
                                                    </div>
                                                </div>

                                                <div class="bfx_svg">
                                                    <span class="_txtec">Laws and regulations</span>
                                                </div>
                                            </label>
                                        </div>

                                        <div>
                                            <label class="block-lb fx-ai-c fx-jc-fs">
                                                <input type="radio" name="post_coments" wire:model.defer="feedback_options" value="cohost">
                                                <div class="before_check">
                                                    <div class="flex-centrado" style="width: inherit;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                        </svg>
                                                    </div>
                                                </div>

                                                <div class="bfx_svg">
                                                    <span class="_txtec">Co-host configuration</span>
                                                </div>
                                            </label>
                                        </div>

                                        <div>
                                            <label class="block-lb fx-ai-c fx-jc-fs">
                                                <input type="radio" name="post_coments" wire:model.defer="feedback_options" value="others">
                                                <div class="before_check">
                                                    <div class="flex-centrado" style="width: inherit;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                        </svg>
                                                    </div>
                                                </div>

                                                <div class="bfx_svg">
                                                    <span class="_txtec">Other question</span>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="fx" style="justify-content: end;">
                                    <button class="btn-celest" wire:click="nextFeedBackOptions">Continue</button>
                                </div>

                                <div style="margin-top: 32px;">
                                    <p class="_txtec">Need to get in touch with our Airbnb customer service team? Visit the. <a href="#" class="_txtblu">Help Center</a> or <a href="#" class="_txtblu">contact us</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if ( $show_feedback === 'PostComment' )
                <div class="modal_block">
                    <div class="content_hidden-anhost" style="margin-bottom: 35px;">
                        <div class="_pdleftright35">
                            <h2 class="h2_publish" style="padding-bottom: 24px;">Give us all the details</h2>

                            <div style="margin-bottom: 24px;">
                                <label style="cursor: pointer;">
                                    <p class="_txteh" style="margin-bottom: 8px;">Share your experience with us. What works well? What could be improved?</p>

                                    <div class="_flfpc">
                                        <textarea class="_txta-modls @error('feedback_comment') error_input @enderror" wire:model.defer="feedback_comment" rows="2" style="height: auto; resize: vertical;"></textarea>
                                        @error('feedback_comment')
                                            <div class="_txterror">
                                                <i class="fas fa-exclamation-circle icon1"></i> 
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </label>
                            </div>

                            <div class="checkbox-item" style="margin: 0;">
                                <label class="check_click">
                                    <input type="checkbox" name="feedback_boolean" wire:model.defer="feedback_boolean">
                                    <span class="before_checkblu"></span>    
                                    <span class="_txtec">I'm going to report a bug.</span>
                                </label>
                            </div>

                            <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 24px;">
                                <div class="_btnsmleft" wire:click="returnSteps">
                                    <i class="fas fa-angle-left"></i>
                                    <span>Behind</span>
                                </div>

                                <button class="btn-celest" wire:click="nextFeedBackComment">Continue</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @if ( $show_feedback === 'PostComplete' )
                <div class="modal_block">
                    <div class="content_hidden-anhost" style="margin-bottom: 35px;">
                        <div class="_pdleftright35">
                            <h2 class="h2_publish" style="padding-bottom: 34px;">Thanks for your comment</h2>

                            <div style="margin-bottom: 80px;">
                                <p class="_txtec">Thank you for sending us your comments about the product. We will share it with the corresponding team.</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
</div>