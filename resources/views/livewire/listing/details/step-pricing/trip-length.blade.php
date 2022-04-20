<div class="block {{ $classActive['min_stay'] ? 'edit_listing_post' : ''}}">
    <h2 class="h2-guests">Trip length</h2>

    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Minimum stay</h3>
            <div class="_width_text show_info">
                @if ( $content['minimum_stay'] != '' && $content['minimum_stay'] != 0 )
                    <span class="_txtec">{{ $content['minimum_stay'] }} nights</span>
                        @if ( count( $content['minimum_stay_custom'] ) != 0 )
                            @if ( $content['minimum_stay_custom']['sundays'] != '' )
                                <p class="_txtec">Sundays: {{ $content['minimum_stay_custom']['sundays'] }} nights</p>
                            @endif

                            @if ( $content['minimum_stay_custom']['mondays'] != '' )
                                <p class="_txtec">Mondays: {{ $content['minimum_stay_custom']['mondays'] }} nights</p>
                            @endif

                            @if ( $content['minimum_stay_custom']['tuesdays'] != '' )
                                <p class="_txtec">Tuesdays: {{ $content['minimum_stay_custom']['tuesdays'] }} nights</p>
                            @endif

                            @if ( $content['minimum_stay_custom']['wednesdays'] != '' )
                                <p class="_txtec">Wednesdays: {{ $content['minimum_stay_custom']['wednesdays'] }} nights</p>
                            @endif

                            @if ( $content['minimum_stay_custom']['thursdays'] != '' )
                                <p class="_txtec">Thursdays: {{ $content['minimum_stay_custom']['thursdays'] }} nights</p>
                            @endif

                            @if ( $content['minimum_stay_custom']['fridays'] != '' )
                             <p class="_txtec">Fridays: {{ $content['minimum_stay_custom']['fridays'] }} nights</p>
                            @endif

                            @if ( $content['minimum_stay_custom']['saturdays'] != '' )
                                <p class="_txtec">Saturdays: {{ $content['minimum_stay_custom']['saturdays'] }} nights</p>
                            @endif
                        @endif
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <form wire:submit.prevent="submitMinTrip" class="show_form_input" style="margin-top: 35px;">
                <div class="fx fx-fd-c" style="gap: 30px;">
                    <div class="_flfpc mxw445">
                        <div class="txt-check-in">Minimum Nights</div>
                        <input type="text" wire:model.defer="content.minimum_stay" class="_numcard @error('minimum_stay') error_input @enderror">
                        @error('minimum_stay')
                            <div  class="_txterror">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                                            
                    <div class="_btnsmleft click_minumum_nights">
                        <span>Customize minimum stay requirements</span>
                    </div>

                    <div class="show_minimum_nights fx-fd-c" style="gap: 30px; display: none;">
                        <div>
                            <p class="_txtec">Minimum nights by check-in day</p>
                            <p class="_txtec">Set a number of minimum nights when guests check in on certain days.</p>
                        </div>

                        <div class="_flfpc"  style="gap: 30px;">
                            <div class="block_date">
                                <div class="txt-check-in">Sundays</div>
                                <input type="text" wire:model.defer="content.minimum_stay_custom.sundays" class="_numcard number">
                            </div>

                            <div class="block_date">
                                <div class="txt-check-in">Mondays</div>
                                <input type="text" wire:model.defer="content.minimum_stay_custom.mondays" class="_numcard number">
                            </div>
                        </div>

                        <div class="_flfpc"  style="gap: 30px;">
                            <div class="block_date">
                                <div class="txt-check-in">Tuesdays</div>
                                <input type="text" wire:model.defer="content.minimum_stay_custom.tuesdays" class="_numcard number">
                            </div>

                            <div class="block_date">
                                <div class="txt-check-in">Wednesdays</div>
                                <input type="text" wire:model.defer="content.minimum_stay_custom.wednesdays" class="_numcard number">
                            </div>
                        </div>

                        <div class="_flfpc"  style="gap: 30px;">
                            <div class="block_date">
                                <div class="txt-check-in">Thursdays</div>
                                <input type="text" wire:model.defer="content.minimum_stay_custom.thursdays" class="_numcard number">
                            </div>

                            <div class="block_date">
                                <div class="txt-check-in">Fridays</div>
                                <input type="text" wire:model.defer="content.minimum_stay_custom.fridays" class="_numcard number">
                            </div>
                        </div>

                        <div class="_flfpc"  style="gap: 30px;">
                            <div class="block_date">
                                <div class="txt-check-in">Saturdays</div>
                                <input type="text" wire:model.defer="content.minimum_stay_custom.saturdays" class="_numcard number">
                            </div>
                        </div>
                    </div>

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("min_stay")'>
                            <span>Cancel</span>
                        </div>
                        <button class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("min_stay")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>

<div class="block {{ $classActive['max_stay'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Maximum stay</h3>
            <div class="_width_text show_info">
                @if ( $content['maximum_stay'] != '' && $content['maximum_stay'] != 0 )
                    <span class="_txtec">{{ $content['maximum_stay'] }} nights</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <form wire:submit.prevent="submitMaxTrip" class="show_form_input" style="margin-top: 35px;">
                <div class="fx fx-fd-c" style="gap: 30px;">
                    <div class="_flfpc mxw445">
                        <div class="txt-check-in">Maximum Nights</div>
                        <input type="text" wire:model.defer="content.maximum_stay" class="_numcard @error('maximum_stay') error_input @enderror">
                        @error('maximum_stay')
                            <div  class="_txterror">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
                        <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("max_stay")'>
                            <span>Cancel</span>
                        </div>
                        <button class="btn-celest">Save</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("max_stay")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>