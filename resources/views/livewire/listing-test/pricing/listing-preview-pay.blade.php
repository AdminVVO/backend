<form wire:submit.prevent="SubmitAllow" class="show_form_input">
    <div class="fx fx-fd-c gp25">
        <div class="fx fx-ai-b fx-jc-sb fx-fw-w gp18">
            <div class="_txteh">Maximum number of people</div>

            <div class="_2btns">
                <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputMax <= 1 ? 'disabled' : '' }} wire:click="buttonDecrease">
                    <span>
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                            <path d="m2 16h28"></path>
                        </svg>
                    </span>
                </button>
                
                <span>{{ $inputMax }}</span>

                <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputMax >= 5 ? 'disabled' : '' }} wire:click="buttonIncrease">
                    <span>
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                            <path d="m2 16h28m-14-14v28"></path>
                        </svg>
                    </span>
                </button>
            </div>
        </div>

        <div class="fx fx-fd-c gp21">
            <div class="_txteh">Allowed</div>

            <div class="fx fx-fw-w" style="gap: 21px;">
                <div class="w28_h28">
                    <label class="block-lb fx-ai-c fx-jc-fs" style="gap: 13px;">
                        <input type="checkbox" name="allow" wire:model.defer="inputAllow" value="Children">
                        <span class="before_check_cuadro">
                            <div class="flex-centrado" style="width: inherit;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                    <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                </svg>
                            </div>
                        </span>

                        <div class="bfx_svg">
                            <div class="w100">
                                <span class="_txtec">Children</span>
                            </div>
                        </div>
                    </label>
                </div>

                <div class="w28_h28">
                    <label class="block-lb fx-ai-c fx-jc-fs" style="gap: 13px;">
                        <input type="checkbox" name="allow" wire:model.defer="inputAllow" value="Infants">
                        <span class="before_check_cuadro">
                            <div class="flex-centrado" style="width: inherit;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                    <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                </svg>
                            </div>
                        </span>

                        <div class="bfx_svg">
                            <div class="w100">
                                <span class="_txtec">Infants</span>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </div>

        <div class="fx fx-fw-w fx-jc-sb gp12">
            <div class="_btnsmleft click_cancel_listing" wire:click="reloadInputs">
                <span>Cancel</span>
            </div>
            <button type="submit" class="btn-celest">Save</button>
        </div>
    </div>
</form>