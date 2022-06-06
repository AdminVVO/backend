<div class="content_hidden-welcome">
    <div class="log">
        <strong>Log in or sign up</strong>
    </div>
    <div class="modal_block-welcome">
        <div class="content_welcome">
            <h3>Welcome to vvoutlet</h3>

                <form wire:submit.prevent="submitInputEmail" style="display: {{ $logIn ? 'block' : 'none' }} ;">
                    <h4>Email</h4>
                    <input type="text" class="_input-mod @error('sendInputEmail') error_input @enderror" placeholder="examples@gmail.com" wire:model.defer="sendInputEmail">
                    @error('sendInputEmail')
                        <div  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror    

                    <p>We will send you an email to confirm your email. <br>Standard message and data rates apply. <a href="#">Privacy Policy</a>.</p>
                    <div class="block_a">
                        <button type="submit" class="btn-number btns-modals">
                            Continue
                            <div class="loading-btn loading-btn-modal"></div>
                        </button>
                    </div>
                </form>

                <form wire:submit.prevent sendNumber style="display: {{ !$logIn ? 'block' : 'none' }} ;">
                    <h4>Phone Number</h4>
                    <x-tel-input
                        wire:model="phone"
                        id="phone"
                        name="phone"
                        class="form-input _input-mod"
                    /> 
                    <input wire:model="phone_country" type="hidden" id="phone_country" name="phone_country">
                    @error('sendInputPhone')
                        <div style="display: block;"  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror   

                    <p>We'll call or text you to confirm your number. <br>Standard message and data rates apply. <a href="#">Privacy Policy</a>.</p>
                    <div class="block_a">
                        <button type="submit" class="btn-number btns-modals">
                            Continue
                            <div class="loading-btn loading-btn-modal"></div>
                        </button>
                    </div>
                </form>
            
            <p>or</p>

            <div class="block_redes">
                <a href="{{ route('facebook.login') }}">
                    <div class="contend_red">
                        <div class="flex_icon">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        Continue with Facebook
                    </div>
                </a>

                <a href="{{ route('google.login') }}">
                    <div class="contend_red">
                        <div class="flex_icon">
                            <i class="fab fa-google"></i>
                        </div>
                        Continue with Google
                    </div>
                </a>

                @if ( $logIn )
                    <a href="#" wire:click="changeState">
                        <div class="contend_red">
                            <div class="flex_icon">
                                <i class="fas fa-phone" aria-hidden="true"></i>
                            </div>
                            Continue with Phone
                        </div>
                    </a>
                @else
                    <a href="#" wire:click="changeState">
                        <div class="contend_red">
                            <div class="flex_icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            Continue with Email
                        </div>
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>