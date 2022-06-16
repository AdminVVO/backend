<div class="content_hidden-number">
    <div class="content_mr">
        <div class="content_number">
            @if ( $content['type'] === 'email' )
                <h3>Confirm your E-mail</h3>
            @else
                <h3>Confirm your Phone Number</h3>
            @endif
            <p class="des">Enter the code we sent over {{ $content['type'] === 'email' ? 'E-mail' : 'SMS' }} to {{ $content['recipients'] }}.</p>

            <form wire:submit.prevent="submitCodeVerification">
                <div class="box_enter @error('code_verifications') error_code @enderror">
                    <input type="text" id="ist" maxlength="1" onkeyup="clickEvent(this, 'sec')" wire:model.defer="input.one">
                    <input type="text" id="sec" maxlength="1" onkeyup="clickEvent(this, 'third')" wire:model.defer="input.two">
                    <input type="text" id="third" maxlength="1" onkeyup="clickEvent(this, 'fourth')" wire:model.defer="input.tree">
                    <input type="text" id="fourth" maxlength="1" onkeyup="clickEvent(this, 'fifth')" wire:model.defer="input.four">
                    <input type="text" id="fifth" maxlength="1" onkeyup="clickEvent(this, 'up')" wire:model.defer="input.five">
                    <input type="text" id="up" maxlength="1" wire:model.defer="input.six">
                </div>

                <p class="link">Didn't get a code? <a class="btn-options" wire:click="moreOptions">More Options</a></p>

                <div class="block_a">
                    <button type="submit" class="btn-confirm btns-modals">
                        Continue
                        <div class="loading-btn loading-btn-modal"></div>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>