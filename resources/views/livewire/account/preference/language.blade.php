<div>
    <div class="_txtec none">{{ $languageShow }}</div>
    <div class="_txtec show">This updates what you read on Vvoutlet, and how we communicate with you.</div>
    <form wire:submit.prevent="submitLanguage">
        <div class="selected-modal">
            <select wire:model.defer="inputLanguage" class="@error('language') error_input @enderror">
                @foreach ($language as $key => $element)
                    <option value="{{ $key }}">{{ $element }} ( {{ $key }} )</option>
                @endforeach
            </select>

            <i class="fas fa-chevron-down"></i>
        </div>
        @error('language')
            <div class="_txterror">
                <i class="fas fa-exclamation-circle icon1"></i> 
                {{ $message }}
            </div>
        @enderror

        <button type="submit" class="btn-celest">Save</button>
    </form>
</div>