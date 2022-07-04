<div>
    <div class="_txtec none">({{ $timeZoneShow['offset'] }}) - {{ $timeZoneShow['name'] }} ({{ $timeZoneShow['diff_from_gtm'] }})</div>
    <form wire:submit.prevent="submitTimezone">
        <div class="selected-modal">
            <select wire:model.defer="inputTimeZone" class="@error('timezone') error_input @enderror">
                @foreach ($timeZone as $key => $element)
                    <option value="{{ $element['diff_from_gtm'] }}">({{ $element['offset'] }}) - {{ $element['name'] }} ({{ $element['diff_from_gtm'] }})</option>
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

        <button type="submit" class="btn-celest">Save</button>
    </form>
</div>