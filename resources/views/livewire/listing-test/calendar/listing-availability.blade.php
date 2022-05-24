<form wire:submit.prevent="SubmitAvailability" class="show_form_input">
    <div class="fx fx-fd-c" style="gap: 23px;">
        <div>
            <div class="selected-modal mxw576 @error('inputAvailability') error_input @enderror" style="margin: 0;">
                <select wire:model="inputAvailability">
                    <option selected value="0">Choose option...</option>
                    <option value="1">1 months in advance</option>
                    <option value="2">2 months in advance</option>
                    <option value="3">3 months in advance</option>
                    <option value="4">4 months in advance</option>
                    <option value="5">5 months in advance</option>
                </select>

                <i class="fas fa-chevron-down"></i>
            </div>
            @error('inputAvailability')
                <div  class="_txterror">
                    <i class="fas fa-exclamation-circle icon1"></i> 
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            @if ( $inputAvailability != 0 )
                <p class="_txtec">Your listing isn't available after {{ $inputAvailability }} months from today.</p>
            @endif

            <div class="fx fx-fd-c" style="margin-top: 25px; gap: 11px;">
                <table style="border-collapse: collapse; border-spacing: 0; width: 100%; margin: 0;">
                    <tr class="fx fx-fw-w" style="gap: 36px;">
                        @for ($i = 0; $i <= $inputAvailability; $i++)
                            <th class="cal_tod_b_br">
                                <div>
                                    <p class="_txtec16" style="margin-bottom: 5px;">{{ Carbon\Carbon::createFromDate(0000, date('m') + $i )->format('F') }}</p>
                                    @if ( $i == $inputAvailability )
                                        <i class="far fa-user-circle _i-verde40"></i>
                                    @endif
                                </div>
                            </th>
                        @endfor
                    </tr>
                </table>
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