<div>
    <div class="_txtec none">{{ $currencyShow['name'] }} - ({{ $currencyShow['code'] }})</div>
    <form wire:submit.prevent="submitCurrency">
        <div class="selected-modal">
            <select wire:model.defer="inputCurrency" class="@error('currency') error_input @enderror">
                @foreach ($currency as $key => $element)
                    <option value="{{ $key }}">{{ $element }} ( {{ $key }} )</option>
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

        <button type="submit" class="btn-celest">Save</button>
    </form>
</div>