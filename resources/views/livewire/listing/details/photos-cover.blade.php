<div class="fxfbwhmhbrzi">
    <div class="fx fx-jc-e">
        <button type="button" class="cwhfcbbpfx xhidemdusr">X</button>
    </div>

    <form wire:submit.prevent="SubmitCover" class="fxfdmh100">
        <div class="whfxoyx">
            <div class="poyxwh pd0_50">
                <div class="popup_change_photo">
                    <h1 class="_txteh">Select a cover photo</h1>

                    <div class="fxfwm0-8 mr-t24">
                        @foreach ( $photos as $key => $element )
                            <div class="w33p08mb16">
                                <label class="prh100p0 lbChangePhoto">
                                    <input type="radio" name="ckCoverPhoto" class="dn" {{ $loop->first ? 'checked' : '' }} wire:model.defer="inputCover" value="{{ $key }}">

                                    <div class="ptprf110bpbr">
                                        <div class="pai0fxaicjcc">
                                            <img src="{{ URL::asset('storage/photos-listing/') .'/'. \App\Models\Listing\Listings::ListingFile( $listingId ) .'/'. $element['name'] }}" class="ofcbr8hwpi">
                                        </div>
                                    </div>

                                    <div class="pal8t8">
                                        <span class="before_check">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                                <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="_zgc1p6 pd0_50">
            <input type="file" id="uploadPhoto" class="dn" wire:model="inputUploadCover" accept="image/*">
            <label for="uploadPhoto">
                <div class="_fpnigw0">Upload photo</div>
                @error('inputUploadCover')
                    <div class="_fpnigw0 _txterror" style="display: initial;">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
            </label>

            <div class="fx fx-ai-c gp14">
                <button type="button" class="btn-red xhidemdusr">Cancel</button>
                <button type="submit" class="btn-celest">Save</button>
            </div>
        </div>
    </form>
</div>