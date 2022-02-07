<div class="_yellow-bg {{ $classActive ? 'personal_edit' : ''}}">
    <div class="_bgpadding">
        <div class="_cont-edit">
            <div class="_txteh">Preferred languague</div>

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
        <div class="_txtec none">{{ $languageFormt }}</div>
        <div class="_txtec show">This updates what you read on Vvoutlet, and how we communicate with you.</div>
        <form wire:submit.prevent="submitLanguage">
            <div class="selected-modal">
                <select wire:model="language" class="@error('language') error_input @enderror">
                    @foreach ($qlanguage as $key => $element)
                        <option wire:click="changeLanguage({{ $element['code'] }})" value="{{ $element['code'] }}">{{ $element['languages'] }} ( {{ $element['code'] }} )</option>
                    @endforeach
                </select>

                <i class="fas fa-chevron-down"></i>
            </div>
            @error('language')
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