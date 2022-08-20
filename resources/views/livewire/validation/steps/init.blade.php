<section class="entero">
    <div class="medio-two">

        <div class="section_photo-id">
            <h2 class="h2_publish">How would you like to add a photo of your ID?</h2>
            <div class="_gap">
                <div class="radio-item_rscrm">
                    <input type="radio" fileClickWeb id="web" name="personmet" wire:model.defer="personmet"
                        value="upload">
                    <label for="web">
                        <div class="content_flex-actv">
                            <div class="flex-msg">
                                <div class="_block">
                                    <div class="_txteh">Upload an existing photo</div>
                                </div>

                                <p class="_txtec16">Recommended</p>
                            </div>
                        </div>
                        <span class="before_check"></span>
                    </label>
                </div>

                <div class="radio-item_rscrm">
                    <input type="radio" fileClickCam id="webcam" name="personmet" wire:model.defer="personmet"
                        value="webcam">
                    <label for="webcam">
                        <div class="content_flex-actv">
                            <div class="flex-msg">
                                <div class="_block">
                                    <div class="_txteh">Take photo with your webcam</div>
                                </div>
                            </div>
                        </div>
                        <span class="before_check"></span>
                    </label>
                </div>

                @if (!isset($user_id))
                    <div class="radio-item_rscrm">
                        <input type="radio" id="mobileapp" name="personmet" wire:model.defer="personmet"
                            value="app">
                        <label for="mobileapp">
                            <div class="content_flex-actv">
                                <div class="flex-msg">
                                    <div class="_block">
                                        <div class="_txteh">Take photo with the Vvoutlet mobile</div>
                                    </div>
                                </div>
                            </div>

                            <span class="before_check"></span>
                        </label>
                    </div>
                @endif
            </div>

            <form wire:submit.prevent="saveFile">
                <input type="file" accept="image/*" wire:model="photo" fileShow style="display:none;"
                    class="@error('photo') error_input @enderror">
                <input type="file" accept="image/*" capture="camera" wire:model="photo" cameraShow
                    style="display:none;" class="@error('photo') error_input @enderror">
                @error('photo')
                    <div class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i>
                        {{ $message }}
                    </div>
                @enderror
                <div class="_block-jsb">
                    <a href="{{ route('personal_info') }}" class="_btnsmleft">
                        <i class="fas fa-angle-left"></i>
                        <span>Back</span>
                    </a>
                    <button type="submit" class="btn-celest">Continue
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@push('scripts')
    <script type='text/javascript'>
        /** llamar al event() **/

        window.addEventListener('contentChanged', event => {
            $('[fileClickWeb]').click(function() {
                if ($('#web').val()) {
                    $('[fileShow]').click();
                }
            });


            $('[fileClickCam]').click(function() {
                if (isMobile.any())
                    $('[cameraShow]').click();
            });
        });

        var isMobile = {
            Android: function() {
                return navigator.userAgent.match(/Android/i);
            },
            BlackBerry: function() {
                return navigator.userAgent.match(/BlackBerry/i);
            },
            iOS: function() {
                return navigator.userAgent.match(/iPhone|iPad|iPod/i);
            },
            Opera: function() {
                return navigator.userAgent.match(/Opera Mini/i);
            },
            WebOS: function() {
                return navigator.userAgent.match(/WebOS/i);
            },
            Windows: function() {
                return navigator.userAgent.match(/IEMobile/i);
            },
            any: function() {
                return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() ||
                    isMobile.Windows() || isMobile.WebOS());
            }
        };

        $('[fileClickWeb]').click(function() {
            if ($('#web').val()) {
                $('[fileShow]').click();
            }
        });

        $('[fileClickCam]').click(function() {
            if (isMobile.any())
                $('[cameraShow]').click();
        });
    </script>
@endpush
