<div class="_yellow-bg {{ $classActive ? 'personal_edit' : ''}}">
    <div class="_bgpadding">
        <div class="_cont-edit">
            <div class="_txteh">Email address</div>

            <a href="javascript:void(0)" class="_btnsm" wire:click='statusUpdate()'>
                <span class="_fcontent edit">
                    Edit
                    <span class="_svg-asm">
                        <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                    </span>
                </span>

                <span class="_fcontent cancel">
                    Cancel
                    <span class="_svg-asm">
                        <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                    </span>
                </span>
            </a>
        </div>
        
        @if ( empty( $query ) )
            <div class="_txtec none">Not provided</div>
        @else
            <div class="_txtec none">{{ $query }}</div>
        @endif
        
        <div class="_txtec show">Use an address you'll always have access to.</div>
        <form wire:submit.prevent="submitEmail" class="_form">
            <div class="_flfpc">
                <div class="txt-check-in">Address Email</div>
                <input type="text" class="_input-mod email-modals @error('email') error_input @enderror" wire:model.lazy="email" placeholder="Examples@demo.com">
                @error('email')
                    <div  class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn-celest btns-modals" wire:loading.class="activeLoading" wire:loading.attr="disabled">
                Save
                <div class="loading-btn loading-btn-modal"></div>
            </button>
        </form>
    </div>
</div>