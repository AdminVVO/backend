<div class="_yellow-bg {{ $classActive ? 'personal_edit' : ''}}">
    <div class="_bgpadding">
        <div class="_cont-edit">
            <div class="_txteh">Legal name</div>

            <a href="#" class="_btnsm" wire:click='statusUpdate()'>
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
        <div class="_txtec none">Anny Smith</div>
        @if ($classActive === true)
            <div class="_txtec show">This is the name on your travel document, which could be a license or a passport.</div>
            <form wire:submit.prevent="submit" class="_form">
                <div class="_flfpc">
                    <div class="block_date">
                        <div class="txt-check-in">First Name</div>
                        <input type="text" class="date_check @error('name') error_input @enderror" wire:model="name">
                        @error('name')
                            <div  class="_txterror">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="block_date">
                        <div class="txt-check-in">Last name</div>
                        <input type="text" class="date_check @error('last_name') error_input @enderror" wire:model="last_name">
                        @error('last_name')
                            <div  class="_txterror">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>


                <div class="block_a">
                    <button type="submit" class="btn-celest btns-modals {{ $isLoad ? 'activeLoading' : '' }}" {{ $isLoad ? 'disabled' : '' }} >
                        Save
                        <div class="loading-btn loading-btn-modal"></div>
                    </button>
                </div>
            </form>
        @endif
    </div>
</div>