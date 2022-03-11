<div class="content_hidden-number">
    <div class="content_mr">
        <div class="content_options">
            <h3>More options</h3>
            <p>Choose Another way to get a verification code at {{ $content['type'] === 'email' ? 'Email' : 'SMS' }} {{ $content['recipients'] }}. Make sure your notifications are turned on.</p>
                
            <form wire:submit.prevent="submitResendCode">
                <div class="box_options">
                    <div class="block_check">

                        @if ( $content['type'] === 'email' )
                            <div class="radio-item">
                                <input type="radio" id="email" wire:model="resendInput" value="email">
                                <label for="email" class="hr">
                                    <div class="content_flex-actv">
                                        <div class="flex_icon">
                                            <i class="far fa-envelope"></i>
                                        </div>
                                        <div class="flex-msg">
                                            <h5>Email</h5>
                                            <small>We'll text you a code.</small>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        @else
                            <div class="radio-item">
                                <input type="radio" id="msg" wire:model="resendInput" value="message">
                                <label for="msg" class="hr">
                                    <div class="content_flex-actv">
                                        <div class="flex_icon">
                                            <i class="far fa-comment-alt"></i>
                                        </div>
                                        <div class="flex-msg">
                                            <h5>Text message (SMS)</h5>
                                            <small>We'll text you a code.</small>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" id="call" wire:model="resendInput" value="call">
                                <label for="call">
                                    <div class="content_flex-actv">
                                        <div class="flex_icon">
                                            <img src="{{ URL::asset('assets/img/icons/smartphone.svg') }}" alt="">
                                        </div>
                                        <div class="flex-msg">
                                            <h5>Phone call</h5>
                                            <small>We'll text you a code.</small>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        @endif

                        <div class="hr"></div>

                        <div class="btn-help" wire:click="needHelps">I nedd help</div>
                    </div>
                </div>

                <div class="block_a">
                    <button type="submit" class="btn-resend btns-modals">Resend code <div class="loading-btn loading-btn-modal"></div></button>
                </div>
            </form>
        </div>
    </div>
</div>