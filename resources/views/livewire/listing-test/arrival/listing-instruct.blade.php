<form wire:submit.prevent="SubmitInstruct" class="show_form_input" style="margin-top: 30px;">
    <div class="fx fx-fd-c" style="gap: 30px;">
        <div>
            <label class="block-lb fx-ai-c fx-jc-fs">
                <input type="radio" name="check_instructions" wire:model="inputInstruct" value="Smart lock">
                <div class="before_check">
                    <div class="flex-centrado" style="width: inherit;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                        </svg>
                    </div>
                </div>

                <div class="bfx_svg">
                    <div class="w100">
                        <h3 class="_txteh">Smart lock</h3>
                        <span class="_txtec">A lock guests open with a mobile app or keypad</span>
                    </div>
                </div>
            </label>
        </div>

        <div>
            <label class="block-lb fx-ai-c fx-jc-fs">
                <input type="radio" name="check_instructions" wire:model="inputInstruct" value="Keypad">
                <div class="before_check">
                    <div class="flex-centrado" style="width: inherit;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                        </svg>
                    </div>
                </div>

                <div class="bfx_svg">
                    <div class="w100">
                        <h3 class="_txteh">Keypad</h3>
                        <span class="_txtec">Guests can open the door with a code</span>
                    </div>
                </div>
            </label>
        </div>

        <div>
            <label class="block-lb fx-ai-c fx-jc-fs">
                <input type="radio" name="check_instructions" wire:model="inputInstruct" value="Lockbox">
                <div class="before_check">
                    <div class="flex-centrado" style="width: inherit;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                        </svg>
                    </div>
                </div>

                <div class="bfx_svg">
                    <div class="w100">
                        <h3 class="_txteh">Lockbox</h3>
                        <span class="_txtec">The key is stored in a small safe, which guests can open with a code</span>
                    </div>
                </div>
            </label>
        </div>

        <div>
            <label class="block-lb fx-ai-c fx-jc-fs">
                <input type="radio" name="check_instructions" wire:model="inputInstruct" value="Building staff">
                <div class="before_check">
                    <div class="flex-centrado" style="width: inherit;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                        </svg>
                    </div>
                </div>

                <div class="bfx_svg">
                    <div class="w100">
                        <h3 class="_txteh">Building staff</h3>
                        <span class="_txtec">Someone is available 24 hours a day to let guests in</span>
                    </div>
                </div>
            </label>
        </div>

        <div>
            <label class="block-lb fx-ai-c fx-jc-fs">
                <input type="radio" name="check_instructions" wire:model="inputInstruct" value="Host greets you">
                <div class="before_check">
                    <div class="flex-centrado" style="width: inherit;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                        </svg>
                    </div>
                </div>

                <div class="bfx_svg">
                    <div class="w100">
                        <h3 class="_txteh">Host greets you</h3>
                        <span class="_txtec">A host or co-host will meet guests to exchange the key</span>
                    </div>
                </div>
            </label>
        </div>

        <div>
            <label class="block-lb fx-ai-c fx-jc-fs">
                <input type="radio" name="check_instructions" wire:model="inputInstruct" value="Other">
                <div class="before_check">
                    <div class="flex-centrado" style="width: inherit;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                        </svg>
                    </div>
                </div>

                <div class="bfx_svg">
                    <div class="w100">
                        <h3 class="_txteh">Other</h3>
                        <span class="_txtec">Guests can use a different method not listed above</span>
                    </div>
                </div>
            </label>
        </div>

        <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px;">
            <div class="_btnsmleft click_cancel_listing" wire:click="reloadInputs">
                <span>Cancel</span>
            </div>
            <button type="submit" class="btn-celest">Save</button>
        </div>
    </div>
</form>