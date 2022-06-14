<div class="person_validation">

    <div class="mr-t text-start">
        <h2 class="h2_publish">Choose an ID type to add</h2>

        <div class="_per-validation">
            <form wire:submit.prevent="submitTypeDocument">
                <div style="max-width: 389px; width: 100%; margin: 0 auto 50px;">
                    <h3 class="h2-guests">Country of Issue</h3>
                    <div class="selected-modal" style="margin: 22px 0 0;">
                        <select wire:model.defer="country">
                            <option value="" disabled selected>Choose option...</option>
                            <option value="US">United States - US</option>
                        </select>

                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>

                <h3 class="h2-guests">Type of identification document</h3>
                <div class="check_black fx fx-fd-c" style="max-width: max-content; margin: 16px auto 0; width: 100%;">
                    <div>
                        <label class="block-lb fx-ai-c fx-jc-fs">
                            <input type="radio" name="document" wire:model.defer="document" value="Driver's License">
                            <div class="before_check">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                    <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"/>
                                </svg>
                            </div>
                            <span class="_txtec16">Driver's License</span>
                        </label>
                    </div>

                    <div>
                        <label class="block-lb fx-ai-c fx-jc-fs">
                            <input type="radio" name="document" wire:model.defer="document" value="Passport">
                            <div class="before_check">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                    <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"/>
                                </svg>
                            </div>
                            <span class="_txtec16">Passport</span>
                        </label>
                    </div>

                    <div>
                        <label class="block-lb fx-ai-c fx-jc-fs">
                            <input type="radio" name="document" wire:model.defer="document" value="Identity Card">
                            <div class="before_check">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                    <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"/>
                                </svg>
                            </div>
                            <span class="_txtec16">Identity Card</span>
                        </label>
                    </div>
                </div>

                <div class="fx fx-fw-w fx-ai-b fx-jc-c" style="gap: 12.8px; margin: 50px 0 17px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13.883" height="15.866" viewBox="0 0 13.883 15.866">
                        <path d="M12.4,6.941h-.744V4.71a4.71,4.71,0,0,0-9.42,0V6.941H1.487A1.488,1.488,0,0,0,0,8.429v5.95a1.488,1.488,0,0,0,1.487,1.487H12.4a1.488,1.488,0,0,0,1.487-1.487V8.429A1.488,1.488,0,0,0,12.4,6.941Zm-3.223,0H4.71V4.71a2.231,2.231,0,0,1,4.462,0Z" fill="#ff5a5f"/>
                    </svg>
                    <p class="_txteh">We will never share your identification document with a host.</p>
                </div>
                <button type="submit" class="btn-celest">Continue</button>
            </form>
        </div>
    </div>
</div>