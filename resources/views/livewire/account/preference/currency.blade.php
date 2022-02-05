<div class="_yellow-bg {{ $classActive ? 'personal_edit' : ''}}">
    <div class="_bgpadding">
        <div class="_cont-edit">
            <div class="_txteh">Preferred currency</div>

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
        <div class="_txtec none">{{ $currencyFormt['name'] }} - ({{ $currencyFormt['code'] }})</div>
        <form wire:submit.prevent="submitCurrency">
            <div class="selected-modal">
                <select wire:model="currency" class="@error('currency') error_input @enderror">
                    @foreach ($qcurrency as $key => $element)
                        <option wire:click="changeCurrency({{ $element['code'] }})" value="{{ $element['code'] }}">{{ $element['name'] }} ( {{ $element['code'] }} )</option>
                    @endforeach
                </select>

                <i class="fas fa-chevron-down"></i>
            </div>
            @error('currency')
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