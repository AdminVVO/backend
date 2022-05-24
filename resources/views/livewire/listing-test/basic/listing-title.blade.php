<form class="show_form_input" wire:submit.prevent="SubmitTitle">
    <div class="form_input">
        <div class="_flfpc">
            <div class="txt-check-in">Title</div>
            <input type="text" class="_numcard input_cant_view @error('inputTitle') error_input @enderror" maxlength="50" wire:model.defer="inputTitle">
            @error('inputTitle')
                <div  class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
            @enderror
            <p style="margin-top: 12px;">
                <span class="_txtec16 views_num">0</span><span class="_txtec16">/50</span>
            </p>
        </div>

        <div class="_flfpc">
            <div class="txt-check-in">Internal name</div>
            <input type="text" class="_numcard input_cant_view @error('inputInternal') error_input @enderror" maxlength="40" wire:model.defer="inputInternal">
            @error('inputInternal')
                <div  class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
            @enderror
            <div style="margin-top: 12px;">
                <p class="_txtec16">The internal name is just for you and isn't shown to guests.</p>
                <p>
                    <span class="_txtec16 views_num">0</span><span class="_txtec16">/40</span>
                </p>
            </div>
        </div>
    </div>

    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 30px;">
        <div class="_btnsmleft click_cancel_listing" wire:click="reloadInputs">
            <span>Cancel</span>
        </div>
        <button type="submit" class="btn-celest">Save</button>
    </div>
</form>