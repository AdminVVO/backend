<div class="section_photo-id">
    <h2 class="h2_publish">How would you like to add a photo of your ID?</h2>

    <div class="_gap">
        <div class="radio-item_rscrm">
            <input type="radio" fileClickWeb id="youid" name="personmet" wire:model.defer="personmet" value="upload">
            <label for="youid">
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
            <input type="radio"  id="webcam" name="personmet" wire:model.defer="personmet" value="webcan">
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
        
        <div class="radio-item_rscrm">
            <input type="radio" id="mobileapp" name="personmet" wire:model.defer="personmet" value="airbnb">
            <label for="mobileapp">
                <div class="content_flex-actv">
                    <div class="flex-msg">
                        <div class="_block">
                            <div class="_txteh">Take photo with the Airbnb mobile app</div>
                        </div>
                    </div>
                </div>

                <span class="before_check"></span>
            </label>
        </div>
    </div>

    <form wire:submit.prevent="saveFile">
        <input type="file" accept="image/*" capture="camera" wire:model="photo" fileShow style="display:none;" class="@error('photo') error_input @enderror">
        @error('photo')
            <div  class="_txterror">
                <i class="fas fa-exclamation-circle icon1"></i> 
                {{ $message }}
            </div>
        @enderror
        <div class="_block-jsb">
            <a href="{{ route('personal_info') }}" class="_btnsmleft">
                <i class="fas fa-angle-left"></i>
                <span>Back</span>
            </a>
            <button type="submit" class="btn-celest btns-modals">Continue<div class="loading-btn"></div></button>
        </div>
    </form>
</div>

@push('scripts')
    <script type='text/javascript'>
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
            Windows: function() {
                return navigator.userAgent.match(/IEMobile/i);
            },
            any: function() {
                return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
            }
        };

        $('[fileClickWeb]').click(function(){
            $('[fileShow]').click();
            console.log($('[fileShow]'))
        });

        $('[fileClickCam]').click(function(){
            if( isMobile.any() )
                $('[fileShow]').click();
        });

    </script>
@endpush