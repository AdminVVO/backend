<div class="block {{ $classActive['title'] ? 'edit_listing_post' : ''}}">
    <h2 class="h2-guests">Listing basics</h2>

    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Listing title</h3>
            <div class="_width_text show_info">
                <p class="_txtec txt_upper">{{ strtoupper( $content['title'] ) }}</p>
                <p class="_txtec">Internal name: {{ $content['internal_title'] }}</p>
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Your listing title should highlight what makes your place special.</p>
            </div>

            <form wire:submit.prevent="submitTitle" class="show_form_input" style="display: none;">
                <div class="form_input">
                    <div class="_flfpc">
                        <div class="txt-check-in">Title</div>
                        <input type="text" wire:model.defer="content.title" class="_numcard input_cant_view @error('title') error_input @enderror" maxlength="50">
                        @error('title')
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
                        <input type="text" wire:model.defer="content.internal_title" class="_numcard input_cant_view @error('internal_title') error_input @enderror" maxlength="40">
                        @error('internal_title')
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
                    <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("title")'>
                        <span>Cancel</span>
                    </div>
                    <button type="submit" class="btn-celest">Save</button>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("title")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['descriptions'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Listing description</h3>
            <div class="show_info">
                <div class="_width_text">
                    <p class="_txtec">{{ $content['descriptions'] }}</p>

                    <span class="_txtec show_more_info" style="display: none;">
                        @if ( $content['space'] != '' )
                        <br>
                            <h3 class="_txteh">The space</h3>
                            <div class="show_info">
                                <div class="_width_text">
                                    <p class="_txtec">{{ $content['space'] }}</p>
                                </div>
                            </div>
                        @endif
                        @if ( $content['guest_access'] != '' )
                        <br>
                            <h3 class="_txteh">Guest access</h3>
                            <div class="show_info">
                                <div class="_width_text">
                                    <p class="_txtec">{{ $content['guest_access'] }}</p>
                                </div>
                            </div>
                        @endif
                        @if ( $content['other_details'] != '' )
                        <br>
                            <h3 class="_txteh">Other details to note</h3>
                            <div class="show_info">
                                <div class="_width_text">
                                    <p class="_txtec">{{ $content['other_details'] }}</p>
                                </div>
                            </div>
                        @endif

                    </span>
                </div>
                @if ( $content['space'] != '' || $content['guest_access'] != '' || $content['other_details'] != '' )
                    <div class="_txtehlinear click_show_more">Show more</div>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Give guests a sense of what it's like to stay at your place, including why they'll love staying there.</p>
            </div>

            <form wire:submit.prevent="submitDescriptions" class="show_form_input">
                <div class="fx fx-fd-c" style="gap: 30px;">
                    <div class="fx fx-fd-c" style="gap: 48px;">
                        <div class="_flfpc">
                            <textarea wire:model.defer="content.descriptions" class="_txta-modls input_cant_view  @error('descriptions') error_input @enderror" rows="4" style="height: auto;" maxlength="500"></textarea>
                            @error('descriptions')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                            <p style="margin-top: 12px;">
                                <span class="_txtec16 views_num">0</span><span class="_txtec16">/500</span>
                            </p>
                        </div>

                        <div>
                            <h3 class="_txteh">The space</h3>
                            <div class="_width_text show_text">
                                <p class="_txtec">Provide a general description of what the property and rooms are like so guests know what to expect.</p>
                            </div>

                            <div class="_flfpc" style="margin-top: 30px;">
                                <textarea wire:model.defer="content.space" class="_txta-modls input_cant_view  @error('space') error_input @enderror" rows="4" style="height: auto;" maxlength="500"></textarea>
                            @error('space')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                                <p style="margin-top: 12px;">
                                    <span class="_txtec16 views_num">0</span><span class="_txtec16">/500</span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="_txteh">Guest access</h3>
                        <div class="_width_text show_text">
                            <p class="_txtec">Let guests know how they can get around the neighborhood and what parking is like.</p>
                        </div>

                        <div class="_flfpc" style="margin-top: 30px;">
                            <textarea wire:model.defer="content.guest_access" class="_txta-modls  @error('guest_access') error_input @enderror" rows="4" style="height: auto;"></textarea>
                            @error('guest_access')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <h3 class="_txteh">Other details to note</h3>
                        <div class="_width_text show_text">
                            <p class="_txtec">Include any special info you want potential guests to know before booking that isn't covered in other settings.</p>
                        </div>

                        <div class="_flfpc" style="margin-top: 30px;">
                            <textarea wire:model.defer="content.other_details" class="_txta-modls  @error('other_details') error_input @enderror" rows="4" style="height: auto;"></textarea>
                            @error('other_details')
                                <div  class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("descriptions")'>
                            <span>Cancel</span>
                        </div>
                        <button type="submit" class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("descriptions")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Number of guests</h3>
        </div>

        <div class="_2btns">
            <button class="_btn" type="button" aria-label="disminuir valor" {{ $disableButton['Decrease'] ? 'disabled' : '' }} wire:click="buttonDecrease">
                <span>
                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                        <path d="m2 16h28"></path>
                    </svg>
                </span>
            </button>
            
            <span>{{ $content['number_guests'] }}</span>

            <button class="_btn" type="button" aria-label="aumentar valor" {{ $disableButton['Increase'] ? 'disabled' : '' }} wire:click="buttonIncrease">
                <span>
                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                        <path d="m2 16h28m-14-14v28"></path>
                    </svg>
                </span>
            </button>
        </div>
    </div>
</div>

<div class="block {{ $classActive['link'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Custom link</h3>
            @if ( $content['custom_link'] != '' )
                <div class="_width_text show_info">
                    <span class="_txtec">{{ env('APP_URL') }}{{ $content['custom_link'] }}</span>
                </div>
            @else
                <div class="_width_text show_info">
                    <span class="_txtec">Not set</span>
                </div>
            @endif

            <form wire:submit.prevent="submitLink" class="show_form_input">
                <div class="_flfpc">
                    <div class="txt-check-in">Link</div>

                    <label class="before_icon_input @error('custom_link') error_input @enderror">
                        <span class="_txtec">vvoutlet.com/h/</span>
                        <input type="text" class="_input input_cant_view" wire:model.defer="content.custom_link" style="padding-left: 0;">
                    </label>
                    @error('custom_link')
                        <div class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                        <br>
                    @enderror
                    <div style="margin-top: 12px;">
                        <p class="_txtec">A memorable and unique link can make it easy to share your listing on business cards, websites, or social media.</p>
                        <p class="_txtec">Ex: vvoutlet.com/h/private-room-in-barcelona-center. <a href="#" class="_txtehlinear">Review our custom link policy.</a></p>
                        <p>
                            <span class="_txtec16 views_num">0</span><span class="_txtec16">/100</span>
                        </p>
                    </div>
                </div>

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 25px;">
                    <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("link")'>
                        <span>Cancel</span>
                    </div>
                    <button type="submit" class="btn-celest">Save</button>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("link")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['language'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Languages</h3>
            <div class="_width_text show_info">
                <span class="_txtec">{{ $content['language_default'] == 'EN' ? $content['language'][ $content['language_default'] ] . ' (Default)' : $content['language'][ $content['language_default'] ] }}</span>
            </div>

            <div class="_width_text show_text">
                <div class="fx fx-fd-c" style="gap: 25px;">
                    <p class="_txtec">Write details for some settings in a language other than your default. Guests are shown automatic translations for languages you don't add here.</p>
                </div>
            </div>

            <form wire:submit.prevent="submitLanguage" class="show_form_input">
                <div class="selected-modal mxw576" style="margin: 0;">
                    <select wire:model.defer="content.language_default" class="@error('language_default') error_input @enderror">
                        <option selected disabled>Add language</option>
                        @foreach ( $content['language'] as $key => $element)
                            <option value="{{ $key }}">{{ $element }}</option>
                        @endforeach
                    </select>
                    @error('language_default')
                        <div  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror

                    <i class="fas fa-chevron-down"></i>
                </div>

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 25px;">
                    <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("language")'>
                        <span>Cancel</span>
                    </div>
                    <button type="submit" class="btn-celest">Save</button>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("language")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['status'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Listing status</h3>
            <div class="_width_text show_info">
                <div class="_txtec">
                    @if ( $content['resort'] != '' )
                        <p class="_txtec">Resort Email: {{ $content['resort'] }}</p>
                    @endif
                    @if ( $content['status'] == 'Listed' )
                        <div class="_iconposit">
                            <i class="fas fa-circle _i-verde10"></i>
                        </div>

                        Listed - Guests can find your listing in search results and request or book available dates.</p>
                    @endif

                    @if ( $content['status'] == 'Snoozed' )
                        <div class="_iconposit">
                            <i class="fas fa-moon _i-gris10"></i>
                        </div>

                        Snoozed - Remove your listing from search results for a set period of time.</p>
                    @endif

                    @if ( $content['status'] == 'Unlisted' )
                        <div class="_iconposit">
                            <i class="fas fa-circle _i-red10"></i>
                        </div>

                        Unlisted - Guests can't book your listing or find it in search results.</p>
                    @endif

                    @if ( $content['status'] == 'Deactivate' )
                        <div class="_iconposit">
                            <i class="fas fa-circle _i-griswhite10"></i>
                        </div>

                        Deactivate - Permanently remove your listing from vvoutlet.</p>
                    @endif
                </div>
            </div>
            <div class="_width_text show_info fx fx-ai-b" style="gap: 9px; display: none;">
                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                    <circle id="Elipse_60" data-name="Elipse 60" cx="4" cy="4" r="4" fill="#2ddab4"/>
                </svg>

                <span class="_txtec" style="width: 100%;">Listed - Guests can find your listing in search results and request or book available dates.</span>
            </div>

            <form wire:submit.prevent="submitStatus" class="show_form_input">
                <div class="fx fx-fd-c" style="gap: 29px;">
                    <div>
                        <label class="block-lb fx-ai-c fx-jc-fs">
                            <input type="radio" name="listing_status" wire:model.defer="content.status" value="Listed">
                            <div class="before_check">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                    <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                </svg>
                            </div>

                            <div class="bfx_svg">
                                <div class="dis_ib">
                                    <i class="fas fa-circle _i-verde10"></i>
                                </div>

                                <div class="w100">
                                    <h3 class="_txteh">Listed</h3>
                                    <span class="_txtec16">Guests can find your listing in search results and request or book available dates.</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div>
                        <label class="block-lb fx-ai-c fx-jc-fs">
                            <input type="radio" name="listing_status" wire:model.defer="content.status" value="Snoozed">
                            <div class="before_check">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                    <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                </svg>
                            </div>

                            <div class="bfx_svg">
                                <div class="dis_ib">
                                    <i class="fas fa-moon _i-gris10"></i>
                                </div>

                                <div class="w100">
                                    <h3 class="_txteh">Snoozed</h3>
                                    <span class="_txtec16">Remove your listing from search results for a set period of time.</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div>
                        <label class="block-lb fx-ai-c fx-jc-fs">
                            <input type="radio" name="listing_status" wire:model.defer="content.status" value="Unlisted">
                            <div class="before_check">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                    <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                </svg>
                            </div>

                            <div class="bfx_svg">
                                <div class="dis_ib">
                                    <i class="fas fa-circle _i-red10"></i>
                                </div>

                                <div class="w100">
                                    <h3 class="_txteh">Unlisted</h3>
                                    <span class="_txtec16">Guests can't book your listing or find it in search results.</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div>
                        <label class="block-lb fx-ai-c fx-jc-fs">
                            <input type="radio" name="listing_status" wire:model.defer="content.status" value="Deactivate">
                            <div class="before_check">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                    <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                </svg>
                            </div>

                            <div class="bfx_svg">
                                <div class="dis_ib">
                                    <i class="fas fa-circle _i-griswhite10"></i>
                                </div>

                                <div class="w100">
                                    <h3 class="_txteh">Deactivate</h3>
                                    <span class="_txtec16">Permanently remove your listing from vvoutlet.</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="_flfpc">
                        <div class="txt-check-in">Resort Email</div>
                        <input type="text" class="_numcard email-modals @error('resort') error_input @enderror" placeholder="Examples@demo.com" wire:model.defer="content.resort">
                        @error('resort')
                            <div  class="_txterror">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 25px;">
                    <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("status")'>
                        <span>Cancel</span>
                    </div>
                    <button class="btn-celest">Save</button>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("status")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['amenities'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100" style="width: 100%;">
            <h3 class="_txteh">Amenities</h3>
            <div class="show_info">
                <div class="_width_text _width_flex fx">
                    <div class="w">
                        @foreach ( $content['amenities_name'] as $element)
                            @if ( $loop->iteration <= 14 )
                                <p class="_txtec">{{ $element }}</p>
                            @endif
                        @endforeach
                    </div>

                    @if ( count( $content['amenities_name'] ) >= 15 )
                        <div class="w">
                            @foreach ( $content['amenities_name'] as $element)
                                @if ( $loop->iteration >= 15 && $loop->iteration <= 29 )
                                    <p class="_txtec">{{ $element }}</p>
                                @endif
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">Choose how located states are displayed before booking.</p>
            </div>

            <form wire:submit.prevent="submitAmenities" class="show_form_input" style="margin-top: 21px;">
                <div class="fx fx-fw-w" style="gap: 21px;">
                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="essentials">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Essentials</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="air_conditioning">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Air conditioning</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="patio">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Patio</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="bbq_grill">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">BBQ grill</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="outdoor_shower">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Outdoor shower</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="fire_pit">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Fire pit</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="pool_table">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Pool table</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="dryer">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Dryer</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="indoor_fireplace">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Indoor fireplace</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="hair_dryer">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Hair dryer</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="exercise_equipment">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Exercise equipment</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="heating">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Heating</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="kitchen">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Kitchen</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="hot_tub">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Hot tub</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="pool">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Pool</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="TV">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">TV</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="washer">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Washer</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="wifi">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Wifi</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="hot_water">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Hot water</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="gym">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Gym</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="shampoo">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Shampoo</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="hangers">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Hangers</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="iron">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Iron</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="elevator">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Elevator</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="free_parking">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Free parking on premises</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="paid_parking">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Paid parking on premises</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="outdoor_dining">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Outdoor Dining Area</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" wire:model.defer="content.amenities" value="dedicated_worspace">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Dedicated workspace</span>
                                </div>
                            </div>
                        </label>
                    </div>
                @error('amenities')
                    <div  class="_txterror" style="display: block;">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
                </div>

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 30px;">
                    <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("amenities")'>
                        <span>Cancel</span>
                    </div>
                    <button type="submit" class="btn-celest">Save</button>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("amenities")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>