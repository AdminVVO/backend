<div class="_yellow-bg {{ $classActive ? 'personal_edit' : ''}}">
    <div class="_bgpadding">
        <div class="_cont-edit">
            <div class="_txteh">Government ID</div>

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
        <div class="_txtec">Not provided</div>

        <form wire:submit.prevent="submit" class="_form">
            <div class="txt-check-in">AUN NO TENGO NADA QUE MOSTRAR</div>
            
            <div class="block_a">
                <button type="submit" class="btn-celest btns-modals {{ $isLoad ? 'activeLoading' : '' }}" {{ $isLoad ? 'disabled' : '' }} >
                    Save
                    <div class="loading-btn loading-btn-modal"></div>
                </button>
            </div>
        </form>
    </div>
</div>