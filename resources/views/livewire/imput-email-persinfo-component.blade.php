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
        <div class="_txtec none">{{ $query['email'] }}</div>
        <div class="_txtec show">Use an address you'll always have access to.</div>
        <form wire:submit.prevent="submit" class="_form">
            <div class="_flfpc">
                <div class="txt-check-in">Address Email</div>
                <input type="text" class="_input-mod email-modals @error('email') error_input @enderror" wire:model="email" placeholder="Examples@demo.com">
                @error('email')
                    <div  class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="block_a">
                <button type="submit" class="btn-celest btns-modals {{ $isLoad ? 'activeLoading' : '' }}" {{ $isLoad ? 'disabled' : '' }} >
                    Save
                    <div class="loading-btn loading-btn-modal"></div>
                </button>
            </div>
        </form>
    </div>
</div>