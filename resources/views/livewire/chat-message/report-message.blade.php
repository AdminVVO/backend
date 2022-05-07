<div class="content_hidden-anhost">
    <div class="_pdleftright35">
        <h2 class="h2_publish">What happen?</h2>

        <div class="_cont_mrg">
            <p class="_txtec">This will only be shared with Vvoutlet.</p>
        </div>

        <div class="_nmcfd">
            <div class="_jro6to">
                <label class="block-lb fx-ai-c fx-jc-sb">
                    <span class="_txtec">I think it is a fraud or a scam</span>

                    <input type="radio" name="listing_denuncia_msg" value="Fraud" onclick="hideShowJacks('N');" wire:model.defer="optionsCheck">
                    <div class="before_check">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                        </svg>
                    </div>
                </label>
            </div>

            <div class="_jro6to">
                <label class="block-lb fx-ai-c fx-jc-sb">
                    <span class="_txtec">His behavior is insulting</span>

                    <input type="radio" name="listing_denuncia_msg" value="Insulting" onclick="hideShowJacks('N');" wire:model.defer="optionsCheck">
                    <div class="before_check">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                        </svg>
                    </div>
                </label>
            </div>

            <div class="_jro6to">
                <label class="block-lb fx-ai-c fx-jc-sb">
                    <span class="_txtec">Other</span>

                    <input type="radio" name="listing_denuncia_msg" value="Other" onclick="hideShowJacks('Y');" wire:model.defer="optionsCheck">
                    <div class="before_check">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                        </svg>
                    </div>
                </label>

                <textarea placeholder="Write a note" class="_txta-modls" style="margin: 16px 0 0; resize: vertical;" rows="4" wire:model.defer="optionsText"></textarea>
            </div>
        </div>
    </div>

    <div class="_fxbtn">
        <button class="btn-celest" wire:click="sendVoucher">Voucher</button>
    </div>
</div>