@push('style')

    <link href="https://api.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.css" rel="stylesheet">
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
    <style type="text/css">
        .filepond--item {
            width: calc(50% - 0.5em);
        }
        .mapboxgl-ctrl-logo {
            display: none !important;
        }
        .mapboxgl-ctrl-attrib.mapboxgl-compact {
            display: none !important;
        }
    </style>

@endpush

<div class="create_listing" wire:ignore.self>
    <div class="img-left">
        <img src="{{ URL::asset('assets/img/card/') .'/'. $imgShow }}">
        <span class="_pabslogo">
            <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo vvoutlet">
        </span>
    </div>

    <div class="_ct50 {{ $step === 'become' || $step === 'intro' || $step === 'publish' ? '' : '_ct50-back' }}">

        @if ( $step === 'become' || $step === 'intro' || $step === 'property' || $step === 'publish' )
            <a href="{{ route('host-listing') }}">
                <div class="btn-br_abs fx">
                    <button class="btn-border">Exit</button>
                </div>
            </a>
        @else
            <div class="btn-br_abs fx">
                <button class="btn-border">Help</button>
                <button class="btn-border" wire:click="saveToExit">Save and exit</button>
            </div>
        @endif
        
            @if ( $step == 'become' )
                @include('livewire.listing.become-host.includes.become')
            @endif

            @if ( $step == 'intro' )
                @include('livewire.listing.become-host.includes.intro')
            @endif

            @if ( $step == 'property' )
                @include('livewire.listing.become-host.includes.property')
            @endif

            @if ( $step == 'group' )
                @include('livewire.listing.become-host.includes.group')
            @endif

            @if ( $step == 'privacy' )
                @include('livewire.listing.become-host.includes.privacy')
            @endif

            @if ( $step == 'location' )
                @livewire('listing.become-host.includes.location', [
                        'latitud' => $inputLat,
                        'longitude' => $inputLong,
                    ])
            @endif

            @if ( $step == 'location-form' )
                @include('livewire.listing.become-host.includes.location-form')
            @endif

            @if ( $step == 'floor' )
                @include('livewire.listing.become-host.includes.floor')
            @endif

            @if ( $step == 'amenities' )
                @include('livewire.listing.become-host.includes.amenities')
            @endif

            @if ( $step == 'photos' )
                @livewire('listing.become-host.includes.photos')
            @endif

            @if ( $step == 'order-photos' )
                @include('livewire.listing.become-host.includes.order-photos')
            @endif

            @if ( $step == 'title' )
                @include('livewire.listing.become-host.includes.title')
            @endif

            @if ( $step == 'aspect' )
                @include('livewire.listing.become-host.includes.aspect')
            @endif

            @if ( $step == 'description' )
                @include('livewire.listing.become-host.includes.description')
            @endif

            @if ( $step == 'price' )
                @include('livewire.listing.become-host.includes.price')
            @endif

            @if ( $step == 'legal' )
                @include('livewire.listing.become-host.includes.legal')
            @endif

            @if ( $step == 'preview' )
                @include('livewire.listing.become-host.includes.preview')
            @endif

            @if ( $step == 'publish' )
                @include('livewire.listing.become-host.includes.publish')
            @endif


        @if ( $step !== 'become' && $step !== 'intro' && $step !== 'publish' )
            <div class="_block-jsb">
                <div class="_btnsmleft" wire:click="BackShow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                        <path d="M5.294,1.824l4,4.005a.753.753,0,0,0,1.068,0,.763.763,0,0,0,0-1.071L5.83.22A.755.755,0,0,0,4.787.2L.221,4.755A.756.756,0,0,0,1.289,5.826Z" transform="translate(0 10.584) rotate(-90)" fill="#333"/>
                    </svg>
                    <span>Back</span>
                </div>
                @if ( $step == 'legal' || $step == 'preview')
                    @if ( $step == 'legal' )
                        <button type="button" class="btn-celest btns-modals" wire:click="nextShow" wire:loading.attr="disabled">Review your listing</button>
                    @else
                        <button type="button" class="btn-celest btns-modals" wire:click="publishListing" wire:loading.attr="disabled">Publish your listing</button>
                    @endif
                @else
                    <button type="button" class="btn-celest btns-modals" wire:click="nextShow" wire:loading.attr="disabled">Next</button>
                @endif
            </div>
        @endif

    </div>
</div>

@push('scripts')

    <script src="https://api.mapbox.com/mapbox-gl-js/v2.9.2/mapbox-gl.js"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            Livewire.hook('message.processed', (message, component) => {
                FilePond.registerPlugin(FilePondPluginImagePreview,FilePondPluginFileValidateType,FilePondPluginFileValidateSize);
                $(".input-wrapper.show").click(function() {
                    $(this).parent(".input-enter_map").toggleClass("active_inputs_map");
                })
                $(".use_current_locat").click(function() {
                    $(this).parent(".input-enter_map").removeClass("active_inputs_map");
                });
                const $cover_photos = $(".show_cover_photo");
                $(document).mouseup(e => {
                    if (!$cover_photos.is(e.target) && $cover_photos.has(e.target).length === 0) {
                        $("._show_modal-photos").removeClass("is-active");
                    }
                });
                
                $(".click_cover_photos").on("click", function() {
                    let toggleClass = $(this).parents("._show_modal-photos").hasClass('is-active') ? true : false;
                    $("._show_modal-photos").removeClass("is-active");

                    if(!toggleClass) {
                        $(this).parents("._show_modal-photos").addClass("is-active");
                    }
                });

                $(".click_options_photos").on("click", function() {
                    let toggleClass = $(this).parents("._show_modal-photos").hasClass('is-active') ? true : false;
                    $("._show_modal-photos").removeClass("is-active");

                    if(!toggleClass) {
                        $(this).parents("._show_modal-photos").addClass("is-active");
                    }
                });

                $("._txtarea").keyup(function(event) {
                    $(".views_num").text($(this).val().length);
                })

                $(".more_icons").click(function() {
                    $(".show_user_icons").css({'display': 'flex'});
                    $(".usr_icons_more").css({'display': 'none'});
                    $(".more_icons").css({'display': 'none'});
                    $(".more_icons_show").css({'display': 'flex'});
                })

                $(".input_numberdollar").keypress(function(tecla){
                    if(tecla.charCode < 48 || tecla.charCode > 57 || this.value.length === 4) {
                        return false;
                    }
                });
                $(".input_numberdollar").keyup(function(){
                    var texto = document.querySelector(".input_numberdollar");
                    var txt = texto.value;
                    var tamano = txt.length;
                    tamano*=1;
                    texto.style.width=tamano+"ch";
                });
            })
        });
    </script>
@endpush