<div class="block {{ $classActive['location'] ? 'edit_listing_post' : ''}}">
    <h2 class="h2-guests">Location</h2>

    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Address</h3>
            <div class="_width_text show_info">
                <p class="_txtec">{{ $content['location'] }}</p>
            </div>

            <form wire:submit.prevent="submitAddress" class="show_form_input">
                <div class="fx fx-fd-c" style="gap: 30px;">

                    <div class="_flfpc" style="gap: 30px;">
                        <div class="block_date">
                            <div class="txt-check-in">Country / Región</div>
                            <input type="text" class="_numcard @error('country') error_input @enderror" wire:model.defer="content.country">
                            @error('country')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="block_date">
                            <div class="txt-check-in">Street</div>
                            <input type="text" class="_numcard _txtcapit @error('street') error_input @enderror" wire:model.defer="content.street">
                            @error('street')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                            <span class="_txtec16" style="margin-top: 12px;">e.g. 123 Main St.</span>
                        </div>
                    </div>

                    <div class="_flfpc" style="gap: 30px;">
                        <div class="block_date">
                            <div class="txt-check-in">City</div>
                            <input type="text" class="_numcard _txtcapit @error('city') error_input @enderror" wire:model.defer="content.city">
                            @error('city')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                            <p class="_txtec16" style="margin-top: 12px;">e.g. San Francisco</p>
                        </div>

                        <div class="block_date">
                            <div class="txt-check-in">State</div>
                            <input type="text" class="_numcard _txtcapit @error('state') error_input @enderror" wire:model.defer="content.state">
                            @error('state')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                            <p class="_txtec16" style="margin-top: 12px;">e.g. CA</p>
                        </div>
                    </div>

                    <div class="_flfpc">
                        <div class="block_date">
                            <div class="txt-check-in">Zip Code</div>
                            <input type="number" class="_numcard input_numberzipcode @error('zip_code') error_input @enderror" wire:model.defer="content.zip_code">
                            @error('zip_code')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                            <p class="_txtec16" style="margin-top: 12px;">e.g. 94103</p>
                        </div>
                    </div>

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("location")'>
                            <span>Cancel</span>
                        </div>
                        <button type="submit" class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("location")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['neighborhood'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Neighborhood description</h3>
            <div class="_width_text show_info">
                @if ( $content['neighborhood_description'] != '' )
                    <p class="_txtec">{{ $content['neighborhood_description'] }}</p>
                @else
                    <p class="_txtec">Not set</p>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Share some highlights about the neighborhood.</p>
            </div>

            <form wire:submit.prevent="submitNeighborhood" class="show_form_input" style="margin-top: 30px;">
                <div class="_flfpc">
                    <textarea class="_txta-modls @error('neighborhood') error_input @enderror" wire:model.defer="content.neighborhood_description" rows="4" style="height: auto;"></textarea>
                    @error('neighborhood')
                        <div  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 30px;">
                    <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("neighborhood")'>
                        <span>Cancel</span>
                    </div>
                    <button class="btn-celest">Save</button>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("neighborhood")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['getting_around'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Getting around</h3>
            <div class="_width_text show_info">
                @if ( $content['getting_around'] != '' )
                    <p class="_txtec">{{ $content['getting_around'] }}</p>
                @else
                    <p class="_txtec">Not set</p>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Let guests know how they can get around the neighborhood and what parking is like.</p>
            </div>

            <form wire:submit.prevent="submitGetting" class="show_form_input" style="margin-top: 30px;">
                <div class="_flfpc">
                    <textarea class="_txta-modls @error('getting_around') error_input @enderror" wire:model.defer="content.getting_around" rows="4" style="height: auto;"></textarea>
                    @error('getting_around')
                        <div  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 30px;">
                    <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("getting_around")'>
                        <span>Cancel</span>
                    </div>
                    <button class="btn-celest">Save</button>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("getting_around")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['location_sharing'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Location sharing</h3>
            <div class="_width_text show_info">
                <p class="_txtec">{{ $content['location_sharing'] }}</p>
                <p class="_txtec">Address privacy for cancellations {{ $content['privacy_cancellations'] ? 'ON' : 'OFF' }}</p>
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Choose how your listing's location is displayed to guests before they book.</p>
            </div>

            <form wire:submit.prevent="submitLocationSharing" class="show_form_input">
                <div class="fx fx-fd-c" style="gap: 30px;">
                    <div class="checkbox-item checkbox-item_img">
                        <label class="check_click">
                            <input type="radio" name="location" wire:model="content.location_sharing" value="Range location">
                            <div class="_cont-l-img">
                                <div class="_ad-list_img">
                                    <img src="{{ URL::asset('assets/img/card/map2.jpg') }}">
                                </div>
                                <span class="before_checkblu"></span>
                            </div>

                            <div class="flex_text fx fx-fd-c">
                                <h3 class="_txteh">Range location</h3>
                                <p class="_txtec16">Show only the general area to anyone searching for a place to stay.</p>
                            </div>
                        </label>
                    </div>

                    <div class="checkbox-item checkbox-item_img">
                        <label class="check_click">
                            <input type="radio" name="location" wire:model="content.location_sharing" value="Specific location">
                            <div class="_cont-l-img">
                                <div class="_ad-list_img">
                                    <img src="{{ URL::asset('assets/img/card/map1.jpg') }}">
                                </div>
                                <span class="before_checkblu"></span>
                            </div>

                            <div class="flex_text fx fx-fd-c">
                                <h3 class="_txteh">Specific location</h3>
                                <p class="_txtec16">Show only the general area to anyone searching for a place to stay.</p>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="_width_text" style="margin: 49px 0 42px; max-width: 1040px; width: 100%;">
                    @if ( $content['location_sharing'] == 'Range location' )
                        <p class="_txtec">The circle will be displayed on the ad. Only guests with a confirmed reservation will be able to see the pin indicating the exact location. If necessary, you can drag the marker to adjust the location.</p>
                    @endif

                    @if ( $content['location_sharing'] == 'Specific location' )
                        <p class="_txtec">Anyone looking for a place to stay will be able to see your ad marker. If necessary, you can drag the marker to adjust the location.</p>
                    @endif

                    @if ( $content['location_sharing'] != 'Specific location' && $content['location_sharing'] != 'Range location' )
                        <p class="_txtec">Preview of your listing's map position. The circle will be shown on your listing. Only guests with a reservation will be able to see the pin.</p>
                    @endif

                </div>

                <div class="contmap_w100h425">
                    <img src="{{ URL::asset('assets/img/card/map.jpg') }}" alt="">
                </div>

                <div class="fx fx-ai-fs fx-jc-sb" style="gap: 72px; margin-top: 56px;">
                    <div class="w100">
                        <h3 class="_txteh">Address privacy for cancellations</h3>
                        <div class="_width_text" style="max-width: 885px;">
                            <p class="_txtec">When this setting is on, guests won't be shown your address, last name, or phone number while they're able to cancel for free. After the free cancellation window, we'll send guests this information.</p>
                        </div>
                    </div>

                    <input type="checkbox" class="checkbox_custom check_negro" wire:model.defer="content.privacy_cancellations">
                </div>

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 30px;">
                    <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("location_sharing")'>
                        <span>Cancel</span>
                    </div>
                    <button type="submit" class="btn-celest">Save</button>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("location_sharing")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['scenic'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Scenic views</h3>
            <div class="_width_text show_info">
                @if ( count( $content['scenic_views_name'] ) != 0)
                    <div class="_width_text _width_flex fx">
                        <div class="w">
                            @foreach ( $content['scenic_views_name'] as $element)
                                @if ( $loop->iteration <= 9 )
                                    <p class="_txtec">{{ $element }}</p>
                                @endif
                            @endforeach
                        </div>

                        @if ( count( $content['scenic_views_name'] ) >= 10 )
                            <div class="w">
                                @foreach ( $content['scenic_views_name'] as $element)
                                    @if ( $loop->iteration >= 10 && $loop->iteration <= 20 )
                                        <p class="_txtec">{{ $element }}</p>
                                    @endif
                                @endforeach
                            </div>
                        @endif
                    </div>
                @else
                    <p class="_txtec">Not set</p>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Such photographic views that will surprise all guests.</p>
            </div>

            <form wire:submit.prevent="submitScenic" class="show_form_input" style="margin-top: 21px;">
                <div class="fx fx-fw-w" style="gap: 21px;">
                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" name="scenic_views" wire:model.defer="content.scenic_views" value="bay">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Bay View</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" name="scenic_views" wire:model.defer="content.scenic_views" value="beach">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Beach View</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" name="scenic_views" wire:model.defer="content.scenic_views" value="canal">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Canal View</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" name="scenic_views" wire:model.defer="content.scenic_views" value="city_skyline">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">City Skyline View</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" name="scenic_views" wire:model.defer="content.scenic_views" value="courtyard">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Courtyard View</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" name="scenic_views" wire:model.defer="content.scenic_views" value="desert">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Desert View</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" name="scenic_views" wire:model.defer="content.scenic_views" value="garden">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Garden View</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" name="scenic_views" wire:model.defer="content.scenic_views" value="golf">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Golf course View</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" name="scenic_views" wire:model.defer="content.scenic_views" value="harbor">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Harbor View</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" name="scenic_views" wire:model.defer="content.scenic_views" value="lake">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Lake View</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" name="scenic_views" wire:model.defer="content.scenic_views" value="mountains">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">View of the mountains</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" name="scenic_views" wire:model.defer="content.scenic_views" value="ocean">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Ocean View</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" name="scenic_views" wire:model.defer="content.scenic_views" value="park">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Park View</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" name="scenic_views" wire:model.defer="content.scenic_views" value="pool">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Pool View</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" name="scenic_views" wire:model.defer="content.scenic_views" value="resort">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Resort View</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" name="scenic_views" wire:model.defer="content.scenic_views" value="river">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">River View</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" name="scenic_views" wire:model.defer="content.scenic_views" value="sea">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">SeaView</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" name="scenic_views" wire:model.defer="content.scenic_views" value="valley">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Valley View</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" name="scenic_views" wire:model.defer="content.scenic_views" value="vineyard">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Vineyard View</span>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 25px;">
                    <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("scenic")'>
                        <span>Cancel</span>
                    </div>
                    <button class="btn-celest">Save</button>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("scenic")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>