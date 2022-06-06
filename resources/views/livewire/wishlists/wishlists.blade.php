<div class="poyxwh">
    @if ( $steps == 'init')
        <div class="popup-favorite">
            <h2 class="h2_publish">Your wishlists</h2>

            <div class="_f-g">
                <button type="button" wire:click="NewWishlists">
                    <div class="_cont-wishlists">
                        <div class="flex-ic">
                            <img src="{{ URL::asset('assets/img/icons/plus.svg') }}" alt="">
                        </div>

                        <div class="h2-guests">Create new wishlists</div>
                    </div>
                </button>

                @foreach ($wishlists as $element)
                    <div class="block__wishlists">
                        <button type="button" class="wh-p100">
                            <div class="_cont-wishlists">
                                <div class="flex-img">
                                    <img src="{{ URL::asset('storage/uploadListing/' . $element['avatar']) }}" alt="">
                                </div>

                                <div>
                                    <div class="h2-guests">{{ $element['name'] }}</div>
                                    <div class="_txtec">Nov 10 - Dec 30</div>
                                </div>
                            </div>
                        </button>

                        <div class="patr fx">
                            <button class="icon_remove__wishlist js__remove_wishlist">
                                <i class="fal fa-trash-can _i-gris25"></i>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    @if ( $steps == 'created')
        <form wire:submit.prevent="SubmitWishlists">
            <div class="popup-faborite-1">
                <h2 class="h2_publish">Your wishlists</h2>
                <div class="txt-check-in">Name</div>
                <input type="text" class="_input-mod @error('inputWishlists') error_input @enderror" maxlength="50" placeholder="Name lists" wire:model.defer="inputWishlists">
                @error('inputWishlists')
                    <div class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
                <div class="span-guests">50 characters maximum</div>
            </div>

            <div class="fx fx-jc-c nv_btnfooter" style="padding: 45px 0px 0px 0px !important;">
                <button class="btn-celest" type="submit">Create</button>
            </div>
        </form>
    @endif
</div>