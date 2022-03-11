<div class="content_hidden-number">
    <div class="content_mr">
        <div class="content_need-email">
            <h3>Need your help?</h3>
            <p>Only use this form if you're unable to complete this security check Using Another option-It can take several days to get back into your account if you need our help.</p>
            <h5>What were you trying to do?</h5>

            <form wire:submit.prevent="submitHelp">
                <textarea class="@error('helpsInput') error_input @enderror" wire:model="helpsInput"></textarea>
                @error('helpsInput')
                    <div  class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror

                <div class="content_a">
                    <div class="back" wire:click="returnBack('moreOptions')">
                        <div class="back_a btn-back">
                            <i class="fas fa-angle-left"></i>Back
                        </div>
                    </div>
                    <button type="submit" class="btn-submit btns-modals">Send Help <div class="loading-btn loading-btn-modal"></div></button>
                </div>
            </form>
        </div>
    </div>
</div>