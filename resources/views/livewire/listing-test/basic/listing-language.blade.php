<form wire:submit.prevent="SubmitLanguage" class="show_form_input">
    <div class="selected-modal mxw576" style="margin: 0;">
        <select class="@error('inputLanguage') error_input @enderror" wire:model.defer="inputLanguage">
            <option selected disabled>Add language</option>
            @foreach ( $language as $key => $element)
                <option value="{{ $key }}">{{ $element }}</option>
            @endforeach
        </select>
        @error('inputLanguage')
            <div class="_txterror">
                <i class="fas fa-exclamation-circle icon1"></i> 
                {{ $message }}
            </div>
        @enderror

        <i class="fas fa-chevron-down"></i>
    </div>

    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 25px;">
        <div class="_btnsmleft click_cancel_listing" wire:click="reloadInputs">
            <span>Cancel</span>
        </div>
        <button type="submit" class="btn-celest">Save</button>
    </div>
</form>