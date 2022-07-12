<div class="cont_comm">
    <form wire:submit.prevent="SubmitContact">
        <h2 class="h2-guests_fs22">Most travelers ask about</h2>

        <textarea class="_txta-modls mr @error('inputComment') error_input @enderror" rows="5" style="resize: vertical;" wire:model.defer="inputComment"></textarea>
        @error('inputComment')
            <div  class="_txterror">
                <i class="fas fa-exclamation-circle icon1"></i> 
                {{ $message }}
            </div>
        @enderror

        <div>
            <button type="submit" class="btn-celest">Send message</button>
        </div>
    </form>
</div>