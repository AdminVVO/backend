<form wire:submit.prevent="SubmitNotice" class="show_form_input">
    <div class="fx fx-fd-c" style="gap: 23px;">
        <div>
            <div class="selected-modal mxw576 @error('inputNotice') error_input @enderror" style="margin: 0;">
                <select wire:model="inputNotice">
                    <option selected value="0">Same day (customizable cutoff hour)</option>
                    <option value="1">At least 1 day's notice</option>
                    <option value="2">At least 2 day's notice</option>
                    <option value="3">At least 3 day's notice</option>
                    <option value="4">At least 4 day's notice</option>
                    <option value="5">At least 5 day's notice</option>
                    <option value="6">At least 6 day's notice</option>
                    <option value="7">At least 7 day's notice</option>
                </select>

                <i class="fas fa-chevron-down"></i>
            </div>
            @error('inputNotice')
                <div  class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            @if ( $inputNotice != '' && $inputNotice != 0 )
                <p class="_txtec">Your calendar is blocked {{ $inputNotice }} day from today.</p>
            
                <div class="fx fx-fd-c" style="margin-top: 25px; gap: 11px;">
                    <span class="_txtec">Today</span>

                    <table style="border-collapse: collapse; border-spacing: 0; width: 100%; margin: 0;">
                        <tr>
                            @for ($i = 0; $i <= $inputNotice - 1; $i++)
                                <th class="cal_tod_br cal_tod_bg">
                                    <span class="_txtec16">{{ date('j') + $i }}</span>
                                </th>
                            @endfor
                            <th class="cal_tod_br cal_tod_icon">
                                <span class="_txtec16">{{ date('j') + $inputNotice  }}</span>
                                <i class="far fa-user-circle _i-verde40"></i>
                            </th>
                        </tr>
                    </table>
                </div>
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