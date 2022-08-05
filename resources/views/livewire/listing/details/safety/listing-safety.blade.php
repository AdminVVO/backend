<form wire:submit.prevent="SubmitSafety" class="show_form_input" style="margin-top: 21px;">
    <div class="fx fx-fw-w" style="gap: 21px;">
        @foreach ($arraySafety as $key => $element)
            <div class="w28_h28">
                <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                    <input type="checkbox" value="{{ $key }}" wire:model.defer="inputSafety">
                    <span class="before_check_cuadro">
                        <div class="flex-centrado" style="width: inherit;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                            </svg>
                        </div>
                    </span>

                    <div class="bfx_svg">
                        <div class="w100">
                            <span class="_txtec">{{ $element }}</span>
                        </div>
                    </div>
                </label>
            </div>
        @endforeach
    </div>

    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 25px;">
        <div class="_btnsmleft click_cancel_listing" wire:click="reloadInputs">
            <span>Cancel</span>
        </div>
        <button type="submit" class="btn-celest">Save</button>
    </div>
</form>