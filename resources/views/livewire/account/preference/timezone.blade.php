<div class="_yellow-bg {{ $classActive ? 'personal_edit' : ''}}">
    <div class="_bgpadding">
        <div class="_cont-edit">
            <div class="_txteh">Time zone</div>

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
        <div class="_txtec none">({{ $timezoneFormt['offset'] }}) - {{ $timezoneFormt['name'] }} ({{ $timezoneFormt['diff_from_gtm'] }})</div>
        <form wire:submit.prevent="submitTimezone">
            <div class="selected-modal">
                <select wire:model="timezone" class="@error('timezone') error_input @enderror">
                    @foreach ($qtimezone as $key => $element)
                        <option wire:click="changeTimezone({{ $element['offset'] }})" value="{{ $element['offset'] }}">({{ $element['offset'] }}) - {{ $element['name'] }} ({{ $element['diff_from_gtm'] }})</option>
                    @endforeach
                </select>

                <i class="fas fa-chevron-down"></i>
            </div>
            @error('timezone')
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