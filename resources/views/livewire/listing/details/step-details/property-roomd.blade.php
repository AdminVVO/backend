<div class="block {{ $classActive['property'] ? 'edit_listing_post' : ''}}">
    <h2 class="h2-guests">Property and roomd</h2>

    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Property type</h3>
            <div class="_width_text show_info">
                <p class="_txtec">{{ $content['place_name'] }} - {{ $content['property_name'] }}</p>
                <p class="_txtec">Listing type: {{ $content['listing_type_name'] }}</p>
                @if ( $content['floors'] != '' || $content['additional_areas'] != 0 )
                    <p class="_txtec">Floors have: {{ $content['floors'] }}</p>
                    <p class="_txtec">Floor listing on: {{ $content['floors_on'] }}</p>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Choose a property type that's most like your place to set expectations for guests and help your listing appear in the right searches.</p>
            </div>

            <form wire:submit.prevent="submitProperty" class="show_form_input">
                <div class="fx fx-fd-c" style="gap: 30px;">
                    <div>
                        <div class="txt-check-in">Which is most like your place?</div>

                        <div class="selected-modal" style="margin: 0;">
                            <select wire:model="content.like_place" wire:click="changeEvent($event.target.value)" class="@error('like_place') error_input @enderror">
                                <option selected>Choose option...</option>
                                @foreach ($selectPlace as $key => $element)
                                    <option value="{{ $key }}">{{ $element }}</option>
                                @endforeach
                            </select>

                            <i class="fas fa-chevron-down"></i>
                        </div>
                        @error('like_place')
                            <div class="_txterror" style="display: block;">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <div class="txt-check-in">Property type</div>
                        <div class="selected-modal" style="margin: 0;">
                            <select wire:model.defer="content.property_type" class="@error('property_type') error_input @enderror">
                                <option selected>Choose option...</option>
                                @foreach ($selectDescribPlace as $key => $element)
                                    <option value="{{ $key }}">{{ $element }}</option>
                                @endforeach
                            </select>

                            <i class="fas fa-chevron-down"></i>
                        </div>
                        @error('property_type')
                            <div class="_txterror" style="display: block;">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror
                        
                        <p class="_txtec16" style="margin-top: 12px;">A rented place within a multi-unit residential building or complex.</p>
                    </div>

                    <div>
                        <div class="txt-check-in">Listing type</div>

                        <div class="selected-modal" style="margin: 0;">
                            <select wire:model.defer="content.listing_type" class="_numcard @error('listing_type') error_input @enderror">
                                <option value="entire_place">Entire place</option>
                                <option value="private_room">Private room</option>
                                <option value="shared_room">Shared room</option>
                            </select>
                    
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        @error('listing_type')
                            <div class="_txterror" style="display: block;">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror

                        <span class="_txtec16" style="margin-top: 12px;">Guests have the whole place to themselves. This usually includes a bedroom, a bathroom, and a kitchen.</span>
                    </div>

                    <div class="_flfpc">
                        <div class="block_date">
                            <div class="txt-check-in">How many floors does the building have?</div>
                            <input type="text" wire:model.defer="content.floors" class="_numcard @error('floors') error_input @enderror">
                            @error('floors')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="block_date">
                            <div class="txt-check-in">Which floor is the listing on?</div>
                            <input type="text" wire:model.defer="content.floors_on" class="_numcard @error('floors_on') error_input @enderror">
                            @error('floors_on')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("property")'>
                            <span>Cancel</span>
                        </div>
                        <button type="submit" class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("property")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['rooms_spaces'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Rooms and spaces</h3>
            <div class="_width_text show_info">
                <p class="_txtec">Bedrooms: {{ $content['bedrooms'] }}</p>
                <p class="_txtec">Bed: {{ $content['bed'] }}</p>
                <p class="_txtec">Bathrooms: {{ $content['bathrooms'] }}</p>
                @if ( $content['additional_areas'] != '' || $content['additional_areas'] != 0 )
                    <p class="_txtec">Additional areas: {{ $content['additional_areas'] }}</p>
                    <p class="_txtec">Guests may share some areas: {{ $content['shared_areas'] }}</p>
                @endif
            </div>

            <form wire:submit.prevent="submitRoomsSpace" class="show_form_input">
                <div class="fx fx-fd-c" style="gap: 30px;">
                    <div class="rooms_and_spaces fx fx-fw-w" style="gap: 30px;">
                        <div class="block_date">
                            <div class="txt-check-in">Bedrooms</div>
                            <input type="text" wire:model.defer="content.bedrooms" class="_numcard number @error('bedrooms') error_input @enderror">
                            @error('bedrooms')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="block_date">
                            <div class="txt-check-in">Bed</div>
                            <input type="text" wire:model.defer="content.bed" class="_numcard number @error('bed') error_input @enderror">
                            @error('bed')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="block_date">
                            <div class="txt-check-in">Bathrooms</div>
                            <input type="text" wire:model.defer="content.bathrooms" class="_numcard number @error('bathrooms') error_input @enderror">
                            @error('bathrooms')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="block_date">
                            <div class="txt-check-in">Additional areas</div>
                            <input type="text" wire:model.defer="content.additional_areas" class="_numcard number @error('additional_areas') error_input @enderror">
                            @error('additional_areas')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="_flfpc">
                        <div class="txt-check-in">Which is most like your place?</div>
                        <textarea class="_txta-modls input_cant_view @error('shared_areas') error_input @enderror" wire:model.defer="content.shared_areas" rows="2" style="height: auto; resize: vertical;" placeholder="Guests may share some areas"></textarea>
                        @error('shared_areas')
                            <div  class="_txterror">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("rooms_spaces")'>
                            <span>Cancel</span>
                        </div>
                        <button class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("rooms_spaces")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>