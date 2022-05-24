<form wire:submit.prevent="SubmitCurrency" class="show_form_input">
    <div>
        <div class="selected-modal" style="margin: 0;">
            <select class="@error('inputCurrency') error_input @enderror" wire:model.defer="inputCurrency">
                <option value="0">Choose option...</option>
                @foreach ($arrayCurrency as $key => $element)
                    <option value="{{ $key }}">{{ $element }} ({{ $key }})</option>
                @endforeach
            </select>
            @error('inputCurrency')
                <div  class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
            @enderror

            <i class="fas fa-chevron-down"></i>
        </div>
        <p class="_txtec16" style="margin-top: 12px;">This is the currency you'll use to set your prices and discounts. Guests are shown prices in their own currency.</p>
    </div>

    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 30px;">
        <div class="_btnsmleft click_cancel_listing" wire:click="reloadInputs">
            <span>Cancel</span>
        </div>
        <button type="submit" class="btn-celest">Save</button>
    </div>
</form>