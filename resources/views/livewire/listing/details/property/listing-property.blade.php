<form wire:submit.prevent="SubmitProperty" class="show_form_input">
    <div class="fx fx-fd-c" style="gap: 30px;">
        <div class="fx fx-fw-w" style="gap: 30px;">
            <div class="mxf245">
                <div class="txt-check-in">Which is most like your place?</div>

                <div class="selected-modal" style="margin: 0;">
                    <select wire:model="inputLike" class="@error('inputLike') error_input @enderror">
                        <option value="0">Choose option...</option>
                        @foreach ($selectPlace as $key => $element)
                            <option value="{{ $key }}">{{ $element }}</option>
                        @endforeach
                    </select>

                    <i class="fas fa-chevron-down"></i>
                </div>
                @error('inputLike')
                    <div style="display: block;" class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mxf245">
                <div class="txt-check-in">Property type</div>
                <div class="selected-modal" style="margin: 0;">
                    <select wire:model="inputProperty" class="@error('inputProperty') error_input @enderror">
                        @if ( count( $selectProperty ) != 0 )
                            <option value="0">Choose option...</option>
                        @endif
                        @forelse ($selectProperty as $key => $element)
                            <option value="{{ $key }}">{{ $element }}</option>
                        @empty
                            <option value="0">Select one place</option>
                        @endforelse
                    </select>

                    <i class="fas fa-chevron-down"></i>
                </div>
                @error('inputProperty')
                    <div style="display: block;" class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
                
                <p class="_txtec16" style="margin-top: 12px;">A rented place within a multi-unit residential building or complex.</p>
            </div>

            <div class="mxf245">
                <div class="txt-check-in">Listing type</div>

                <div class="selected-modal" style="margin: 0;">
                    <select wire:model.defer="inputListing" class="@error('inputListing') error_input @enderror">
                        <option value="entire_place">Entire place</option>
                        <option value="private_room">Private room</option>
                        <option value="shared_room">Shared room</option>
                    </select>
            
                    <i class="fas fa-chevron-down"></i>
                </div>
                @error('inputListing')
                    <div style="display: block;" class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror

                <p class="_txtec16" style="margin-top: 12px;">Guests have the whole place to themselves. This usually includes a bedroom, a bathroom, and a kitchen.</p>
            </div>
        </div>

        <div class="_flfpc">
            <div class="block_date">
                <div class="txt-check-in">How many floors does the building have?</div>
                <input type="text" class="_numcard number @error('inputFloors') error_input @enderror" wire:model.defer="inputFloors">
                @error('inputFloors')
                    <div  class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="block_date">
                <div class="txt-check-in">Which floor is the listing on?</div>
                <input type="text" class="_numcard number @error('inputOn') error_input @enderror" wire:model.defer="inputOn">
                @error('inputOn')
                    <div  class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
            <div class="_btnsmleft click_cancel_listing" wire:click="reloadInputs">
                <span>Cancel</span>
            </div>
            <button type="submit" class="btn-celest">Save</button>
        </div>
    </div>
</form>