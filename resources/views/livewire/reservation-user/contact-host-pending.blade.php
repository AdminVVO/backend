<div class="fx fx-fd-c gp25">
    <h2 class="h2-guests skeleton skeleton_txt" wire:ignore>Meet the host</h2>
    <div class="content-user_inf" style="padding: 0;" wire:ignore>
        <span class="_pf-msg fx skeleton">
           @if ( file_exists( storage_path('app/public/uploadAvatar/' . $avatar  ) ) )
                <img src="{{ URL::asset('storage/uploadAvatar') . '/' . $avatar }}" alt="">
            @else
                <img src="{{ URL::asset('assets/img/avatar') . '/' . $avatar }}" alt="">
            @endif 
        </span>

        <div>
            <div class="_txtec skeleton skeleton_txt">If you have any questions, {{ $name }} will help you</div>
        </div>
    </div>

    <textarea placeholder="Hello,..." class="_txta-modls skeleton @error('inputMessage') error_input @enderror" rows="6" maxlength="500" wire:model.defer="inputMessage"></textarea>
    @error('inputMessage')
        <div  class="_txterror" style="display: block;">
            <i class="fas fa-exclamation-circle icon1"></i> 
            {{ $message }}
        </div>
    @enderror

    <button wire:click="submitMessageHost" class="btn-celest skeleton" wire:ignore>Send message</button>
</div>

@push('scripts')
    <script>
        Livewire.hook('message.processed', (message, component) => {
            skeleton();
            function skeleton() {
                let loadings = $(".skeleton");
                $(loadings).addClass("transition");
                
                for (loading of loadings) {
                    $(loading).removeClass("skeleton skeleton_card skeleton_txt");
                }
            }
        })
    </script>
@endpush