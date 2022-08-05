<form wire:submit.prevent="SubmitPreparation" class="show_form_input">
    <div class="fx fx-fd-c" style="gap: 23px;">
        <div>
            <div class="selected-modal mxw576 @error('inputPreparation') error_input @enderror" style="margin: 0;">
                <select wire:model="inputPreparation">
                    <option selected value="0">Choose option or Not select option</option>
                    <option value="1">Block 1 nigth before and after each reservation</option>
                    <option value="2">Block 2 nigths before and after each reservation</option>
                    <option value="3">Block 3 nigths before and after each reservation</option>
                    <option value="4">Block 4 nigths before and after each reservation</option>
                    <option value="5">Block 5 nigths before and after each reservation</option>
                    <option value="6">Block 6 nigths before and after each reservation</option>
                    <option value="7">Block 7 nigths before and after each reservation</option>
                </select>

                <i class="fas fa-chevron-down"></i>
            </div>
            @error('inputPreparation')
                <div  class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            @if ( $inputPreparation != '' && $inputPreparation != 0 )
                <p class="_txtec">The blocked {{ $inputPreparation }} nights before and after each reservation are available.</p>
            
                <div class="fx fx-fd-c" style="margin-top: 25px; gap: 11px;">
                    <table style="border-collapse: collapse; border-spacing: 0; width: 100%; margin: 0;">
                        <tr>
                            @for ($i = 0; $i <= $inputPreparation - 1; $i++)
                                <th class="cal_tod_br cal_tod_bg">
                                    @switch( $inputPreparation )
                                        @case(1)
                                            <span class="_txtec16">{{ $i + (date('j') - 1) }}</span>
                                            @break
                                        @case(2)
                                            <span class="_txtec16">{{ $i + (date('j') - 2) }}</span>
                                            @break
                                        @case(3)
                                            <span class="_txtec16">{{ $i + (date('j') - 3) }}</span>
                                            @break
                                        @case(4)
                                            <span class="_txtec16">{{ $i + (date('j') - 4) }}</span>
                                            @break
                                        @case(5)
                                            <span class="_txtec16">{{ $i + (date('j') - 5) }}</span>
                                            @break
                                        @case(6)
                                            <span class="_txtec16">{{ $i + (date('j') - 6) }}</span>
                                            @break
                                        @case(7)
                                            <span class="_txtec16">{{ $i + (date('j') - 7) }}</span>
                                            @break
                                    @endswitch
                                </th>
                            @endfor
                            <th class="cal_tod_br cal_tod_icon">
                                <span class="_txtec16">{{ date('j') }}</span>
                                <i class="far fa-user-circle _i-verde40"></i>
                            </th>
                            @for ($i = 0; $i <= $inputPreparation - 1; $i++)
                                <th class="cal_tod_br cal_tod_bg">
                                    <span class="_txtec16">{{ $i + date('j') + 1 }}</span>
                                </th>
                            @endfor
                        </tr>
                    </table>
                </div>
            @else
                <p class="_txtec">The nights before and after each reservation are available.</p>
            @endif
        </div>

        <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
            <div class="_btnsmleft click_cancel_listing" wire:click="reloadInputs">
                <span>Cancel</span>
            </div>
            <button type="submit" class="btn-celest">Save</button>
        </div>
    </div>
</form>