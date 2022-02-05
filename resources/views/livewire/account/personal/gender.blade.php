<div class="_yellow-bg {{ $classActive ? 'personal_edit' : ''}}">
    <div class="_bgpadding">
        <div class="_cont-edit">
            <div class="_txteh">Gender</div>

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

        <form wire:submit.prevent="submitGender" class="_form">
            <div class="selected-modal">
                <select wire:model.lazy="gender" class="@error('gender') error_input @enderror">
                    <option value="0">Choose...</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>

                <i class="fas fa-chevron-down" aria-hidden="true"></i>
            </div>
            @error('gender')
                <div  class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
            @enderror

            <button type="submit" class="btn-celest btns-modals" wire:loading.class="activeLoading" wire:loading.attr="disabled">
                Save
                <div class="loading-btn loading-btn-modal"></div>
            </button>
        </form>
    </div>
</div>