@push('style')

    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet" />
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet"/>

    <link href='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.css" type="text/css">

    <style type="text/css">
        .filepond--item {
            width: calc(50% - 0.5em);
        }
    </style>

@endpush

<div class="create_listing">

    <div class="img-left">
        <img src="{{ URL::asset('assets/img/card/') }}/{{ $imgShow }}">
        <span class="_pabslogo">
            <img src="{{ URL::asset('assets/img/logo.png') }}" alt="logo vvoutlet">
        </span>
    </div>
    <div class="_ct50 {{ $step === 'finish' || $step === 'init' || $step === 'congratulations' ? '' : '_ct50-back' }}">

        @if ( $exitSave )
            <div class="btn-br_abs fx">
                <button class="btn-border">Help</button>
                <button class="btn-border" wire:click="saveToExit">Save and exit</button>
            </div>
        @else
            <a href="{{ route('listing') }}">
                <div class="btn-br_abs fx">
                    <button class="btn-border">Exit</button>
                </div>
            </a>
        @endif
        
        {{-- Finish Listings --}}
        @if ( $step === 'finish' )
            @livewire('listing.steps.finish-create')
        @endif
        
        {{-- Init Steps Listings --}}
        @if ( $step === 'letGo' )
            @livewire('listing.steps.init-steps')
        @endif

        {{-- Steps Listings --}}
        @if ( $step === 'host' )
            @livewire('listing.steps.type-host')
        @endif

        {{-- Apartament Listings --}}
        @if ( $step === 'apartment')
            @livewire('listing.steps.apartment-select')
        @endif

        {{-- House Listings --}}
        @if ( $step === 'house')
            @livewire('listing.steps.house-select')
        @endif

        {{-- Secondary Listings --}}
        @if ( $step === 'secondary')
            @livewire('listing.steps.secondary-select')
        @endif

        {{-- Unique Listings --}}
        @if ( $step === 'unique')
            @livewire('listing.steps.unique-select')
        @endif

        {{-- BreakFast Listings --}}
        @if ( $step === 'breakfast')
            @livewire('listing.steps.breakfast-select')
        @endif

        {{-- Boutique Listings --}}
        @if ( $step === 'boutique')
            @livewire('listing.steps.boutique-select')
        @endif

        {{-- Space Listings --}}
        @if ( $step === 'space')
            @livewire('listing.steps.space')
        @endif

        {{-- Maps Listings --}}
        @if ( $step === 'maps')
            @livewire('listing.steps.maps')
        @endif

        {{-- Maps Manually Listings --}}
        @if ( $step === 'mapsmanually')
            @livewire('listing.steps.maps-manually')
        @endif

        {{-- Guests Listings --}}
        @if ( $step === 'guests')
            @livewire('listing.steps.guests')
        @endif

        {{-- Offers Places Listings --}}
        @if ( $step === 'offersplaces')
            @livewire('listing.steps.offers-places')
        @endif

        {{-- Photos Listings --}}
        @if ( $step === 'photos')
            @livewire('listing.steps.photos')
        @endif

        {{-- Photos Listings --}}
        @if ( $step === 'photosAll')
            @livewire('listing.steps.photos-all')
        @endif

        {{-- Describe Places Title Listings --}}
        @if ( $step === 'describeToPlacesTitle')
            @livewire('listing.steps.describe-places-title')
        @endif

        {{-- Describe Places Options Listings --}}
        @if ( $step === 'describeToPlacesOptions')
            @livewire('listing.steps.describe-places-options')
        @endif

        {{-- Describe Places Comment Listings --}}
        @if ( $step === 'describeToPlacesComment')
            @livewire('listing.steps.describe-places-comment')
        @endif

        {{-- Prices Listings --}}
        @if ( $step === 'prices')
            @livewire('listing.steps.prices')
        @endif

        {{-- Additional Features Listings --}}
        @if ( $step === 'featurs')
            @livewire('listing.steps.additional-features')
        @endif

        {{-- Checked Listings --}}
        @if ( $step === 'checklisting')
            @livewire('listing.steps.checked-listing', ['listing' => $content])
        @endif

        {{-- Congratulations Listings --}}
        @if ( $step === 'congratulations')
            @livewire('listing.steps.congratulations', ['url' => $url])
        @endif

    </div>
</div>

@push('scripts')
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-validate-size/dist/filepond-plugin-image-validate-size.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js'></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.min.js"></script>

    {{-- <script src="{{ URL::asset('assets/js/filepond.js') }}"></script> --}}
    <script>

        document.addEventListener("DOMContentLoaded", () => {
            Livewire.hook('component.initialized', (component) => {

                if ( $("#mapStep1").length ) {
                    var latitude = '-82.033629763236';
                    var longitude = '28.94446470552';

                    mapboxgl.accessToken = 'pk.eyJ1IjoibGVuaWVycml2YXMiLCJhIjoiY2t6b3EzYXJtNjI2ODJvbXpuMHF2YTZjciJ9.5-kwcoo6NpNwEXSkeuhNtg';
                    const map = new mapboxgl.Map({
                        container: 'mapStep1',
                        style: 'mapbox://styles/mapbox/streets-v11', 
                        center: [ latitude, longitude ],
                        zoom: 8 
                    });
                    const nav = new mapboxgl.NavigationControl({
                        showCompass: false,
                        showZoom: true,
                        visualizePitch: false
                    });
                    map.addControl(nav,"top-left");

                    const geocoder = new MapboxGeocoder({
                        accessToken: mapboxgl.accessToken,
                        types: 'country,region,place,postcode,locality,neighborhood'
                    });
                    geocoder.addTo('#geocoder');

                    geocoder.on('result', (e) => {
                        map.flyTo({center: [ e.result.center[0], e.result.center[1] ], zoom: 8});
                    });

                    const geolocate = new mapboxgl.GeolocateControl({
                        positionOptions: {},
                        showAccuracyCircle: false, // elimina radio circle 
                        showUserLocation: true, // Elimina icon circle
                        trackUserLocation: true,
                    });

                    const marker = new mapboxgl.Marker({
                        draggable: true
                    })

                    map.doubleClickZoom.disable(); // Desactiva zoom doble click en el mapa
                    map.dragRotate.disable(); // Desactiva rotar el mapa
                    map.boxZoom.disable(); // Desactiva zoom box select
                    map.keyboard.disable(); 
                    map.addControl(geolocate); // to curren location

                    marker.setLngLat([0, 0])
                    marker.on('dragend', function onDragEnd() {
                        const lngLat = marker.getLngLat();
                        $('[inputLatitud]').val(lngLat.lng)
                        $('[inputLongitud]').val(lngLat.lat)
                    });
                    marker.addTo(map);

                    map.on('click', (e) => {
                        e.preventDefault();
                        marker.setLngLat([e.lngLat.lng, e.lngLat.lat])
                        $('[inputLatitud]').val(e.lngLat.lng)
                        $('[inputLongitud]').val(e.lngLat.lat)
                    });

                    $("[clickCurrency]").click(function() {
                        geolocate.trigger();
                    });
                }

                if ( $("#mapCheckout").length ) {
                    Livewire.on('emitLocation', location => {
                        const latitude = location['latitude'];
                        const longitude = location['longitude'];
                        mapboxgl.accessToken = 'pk.eyJ1IjoibGVuaWVycml2YXMiLCJhIjoiY2t6b3EzYXJtNjI2ODJvbXpuMHF2YTZjciJ9.5-kwcoo6NpNwEXSkeuhNtg';
                        const map = new mapboxgl.Map({
                            container: 'mapCheckout',
                            style: 'mapbox://styles/mapbox/streets-v11', 
                            center: [ latitude, longitude ],
                            zoom: 13 
                        });

                        const marker = new mapboxgl.Marker({
                            draggable: false
                        }).setLngLat([ latitude, longitude ]).addTo(map);

                        map.doubleClickZoom.disable(); // Desactiva zoom doble click en el mapa
                        map.dragPan.disable(); // Desactiva navegar por el mapa
                        map.dragRotate.disable(); // Desactiva rotar el mapa
                        map.scrollZoom.disable(); // Desactiva scroll zoom en el mapa
                        map.boxZoom.disable(); // Desactiva zoom box select
                        map.keyboard.disable(); 
                    })

                }

                $("._txtarea").keyup(function(event) {
                    $(".views_num").text($(this).val().length);
                })
                $(".more_icons").click(function() {
                    $(".show_user_icons").css({'display': 'flex'});
                    $(".usr_icons_more").css({'display': 'none'});
                    $(".more_icons").css({'display': 'none'});
                    $(".more_icons_show").css({'display': 'flex'});
                })
                $(".input-wrapper.show").click(function() {
                    $(this).parent(".input-enter_map").toggleClass("active_inputs_map");
                })
                $(".use_current_locat").click(function() {
                    $(this).parent(".input-enter_map").removeClass("active_inputs_map");
                });
                $(".input_numberdollar").keypress(function(tecla){
                    if(tecla.charCode < 48 || tecla.charCode > 57 || this.value.length === 3) {
                        return false;
                    }
                });

                const $cover_photos = $(".show_cover_photo");
                $(document).mouseup(e => {
                    if (!$cover_photos.is(e.target) && $cover_photos.has(e.target).length === 0) {
                        $("._show_modal-photos").removeClass("is-active");
                    }
                });
                
                $(".click_cover_photos").on("click", function() {
                    let toggleClass = $(this).parents("._show_modal-photos").hasClass('is-active') ? true : false;
                    console.log("toggleClass", toggleClass);
                    $("._show_modal-photos").removeClass("is-active");

                    if(!toggleClass) {
                        $(this).parents("._show_modal-photos").toggleClass("is-active");
                    }
                });

                $(".click_options_photos").on("click", function() {
                    let toggleClass = $(this).parents("._show_modal-photos").hasClass('is-active') ? true : false;
                    console.log("toggleClass", toggleClass);
                    $("._show_modal-photos").removeClass("is-active");

                    if(!toggleClass) {
                        $(this).parents("._show_modal-photos").toggleClass("is-active");
                    }
                });
                
                if ( $(".my-pond").length ) {
                    FilePond.registerPlugin(
                      FilePondPluginImageValidateSize,
                      FilePondPluginImagePreview,
                      FilePondPluginImageExifOrientation,
                      FilePondPluginFileValidateType,
                      FilePondPluginFileValidateSize
                    );

                    FilePond.create( document.querySelector('.my-pond'), {
                        name: 'uploadPhoto',
                        server: {
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            process: {
                                url: '{{ route('uploadFilePhoto') }}',
                                onload: (response) => {
                                    $('[uploadPhoto]').val('uploadFileSuccess')
                                    return response
                                },
                            },
                            revert: '{{ route('uploadFilePhoto') }}',
                            restore: null,
                            load: null,
                            fetch: null,
                        },
                        imageValidateSizeMaxWidth: '1500',
                        imageValidateSizeMaxHeight: '1500',
                        acceptedFileTypes: ['image/png', 'image/jpeg', 'image/jpg'],
                        maxFileSize: '2MB',
                        maxFiles: 10,
                        required: true,
                        credits:false,
                        labelIdle: `<div><h3 class="h2-guests filepond--label-action" style="margin-bottom: 4px;">Drag your photos here</h3><p class="_txtec">Add at least 5 photos, maximum 10 photos.</p></div>`,
                    });
                }
            })

           Livewire.hook('element.updated', (el, component) => {
                const $cover_photos = $(".show_cover_photo");
                $(document).mouseup(e => {
                    if (!$cover_photos.is(e.target) && $cover_photos.has(e.target).length === 0) {
                        $("._show_modal-photos").removeClass("is-active");
                    }
                });
                
                $(".click_cover_photos").on("click", function() {
                    let toggleClass = $(this).parents("._show_modal-photos").hasClass('is-active') ? true : false;
                    console.log("toggleClass", toggleClass);
                    $("._show_modal-photos").removeClass("is-active");

                    if(!toggleClass) {
                        $(this).parents("._show_modal-photos").toggleClass("is-active");
                    }
                });

                $(".click_options_photos").on("click", function() {
                    let toggleClass = $(this).parents("._show_modal-photos").hasClass('is-active') ? true : false;
                    console.log("toggleClass", toggleClass);
                    $("._show_modal-photos").removeClass("is-active");

                    if(!toggleClass) {
                        $(this).parents("._show_modal-photos").toggleClass("is-active");
                    }
                });
           })
        });
        function ajustar() {
            var texto = document.querySelector(".input_numberdollar");
            var txt = texto.value;
            var tamano = txt.length;
            tamano*=1; //el valor multiplicativo debe cambiarse dependiendo del tamaño de la fuente
            texto.style.width=tamano+"ch";
        }
        $(document).on('click', '[sendLocation]', function(){ 
            const location = {
                Longitude: $('[inputLongitud]').val(),
                Latitude: $('[inputLatitud]').val()
            };
            Livewire.emit('nextLocation', location)
        });
    </script>
@endpush