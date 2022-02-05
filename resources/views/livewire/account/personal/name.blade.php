<div class="_yellow-bg {{ $classActive ? 'personal_edit' : ''}}">
    <div class="_bgpadding">
        <div class="_cont-edit">
            <div class="_txteh">Legal name</div>

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
        <div class="_txtec none">{{ $query['name'] }} {{ $query['last_name'] }}</div>
        <div class="_txtec show">This is the name on your travel document, which could be a license or a passport.</div>
        <form wire:submit.prevent="submitName" class="_form">
            <div class="_flfpc">
                <div class="block_date">
                    <div class="txt-check-in">First Name</div>
                    <input type="text" class="date_check @error('name') error_input @enderror" wire:model.lazy="name">
                    @error('name')
                        <div  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="block_date">
                    <div class="txt-check-in">Last name</div>
                    <input type="text" class="date_check @error('last_name') error_input @enderror" wire:model.lazy="last_name">
                    @error('last_name')
                        <div  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn-celest btns-modals" wire:loading.class="activeLoading" wire:loading.attr="disabled">
                Save
                <div class="loading-btn loading-btn-modal"></div>
            </button>
        </form>
    </div>
</div>