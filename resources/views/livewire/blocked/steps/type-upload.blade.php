<div class="block_cbloqueada">
    <div class="block-img">
        <img src="{{ URL::asset('assets/img/avatar/cb.jpg') }}">
    </div>

    <div class="mr-t">
        <h2 class="h2_publish">How do you want to add the photo of your identification document?</h2>
        <p class="_txtec16 _w">You can take a photo of your official identification document or upload one that you already have on your mobile phone or computer.</p>

        <div class="_des-block">
            <form wire:submit.prevent="submitTypeUpload">
                <h3 class="h2-guests">Choose a verification method</h3>
                <div class="check_black fx fx-fd-c" style="max-width: 326px; margin: 16px auto 0; width: 100%;">
                    <div>
                        <label class="block-lb fx-ai-c fx-jc-fs">
                            <input type="radio" name="typeUpload" wire:model.defer="typeUpload" value="browser">
                            <div class="before_check">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                    <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"/>
                                </svg>
                            </div>
                            <span class="_txtec16">Take a photo in this browser</span>
                        </label>
                    </div>

                    <div>
                        <label class="block-lb fx-ai-c fx-jc-fs">
                            <input type="radio" name="typeUpload" wire:model.defer="typeUpload" value="device">
                            <div class="before_check">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                    <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"/>
                                </svg>
                            </div>
                            <span class="_txtec16">Upload a photo from this device</span>
                        </label>
                    </div>
                </div>

                <div class="fx fx-fw-w fx-ai-b fx-jc-c" style="gap: 12.8px; margin: 50px 0 17px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13.883" height="15.866" viewBox="0 0 13.883 15.866">
                        <path d="M12.4,6.941h-.744V4.71a4.71,4.71,0,0,0-9.42,0V6.941H1.487A1.488,1.488,0,0,0,0,8.429v5.95a1.488,1.488,0,0,0,1.487,1.487H12.4a1.488,1.488,0,0,0,1.487-1.487V8.429A1.488,1.488,0,0,0,12.4,6.941Zm-3.223,0H4.71V4.71a2.231,2.231,0,0,1,4.462,0Z" fill="#ff5a5f"/>
                    </svg>
                    <p class="_txteh">We will never share your identification document with a host.</p>
                </div>
                <button class="btn-celest" type="submit">Continue</button>
            </form>
        </div>
    </div>
</div>