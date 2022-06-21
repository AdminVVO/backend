<div class="flex_local-dates">
    <div class="content_location-width">
        <div class="content_view">
            <div class="fx fx-ai-c fx-fw-w fx-jc-sb mr-b20 gp12">
                <button type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8.378" height="14.652" viewBox="0 0 8.378 14.652">
                        <path
                            d="M13.516,17.1l5.54-5.545a1.043,1.043,0,0,1,1.479,0,1.056,1.056,0,0,1,0,1.483l-6.278,6.282a1.045,1.045,0,0,1-1.444.031L6.493,13.042a1.047,1.047,0,0,1,1.479-1.483Z"
                            transform="translate(19.624 -6.188) rotate(90)" fill="#00b5dd" />
                    </svg>
                </button>

                <div class="fx fx-ai-c fx-fw-w gp10">
                    <div class="btnSltContent">
                        <label for="selectAddDates" class="btn-celest-select clickSelectBtn">
                            <div class="fx fx-ai-c gp10">
                                <input type="text" class="_ipttext date-v-modals" id="selectAddDates"
                                    placeholder="Add dates" readonly>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.652" height="8.378"
                                    viewBox="0 0 14.652 8.378">
                                    <path
                                        d="M13.516,17.1l5.54-5.545a1.043,1.043,0,0,1,1.479,0,1.056,1.056,0,0,1,0,1.483l-6.278,6.282a1.045,1.045,0,0,1-1.444.031L6.493,13.042a1.047,1.047,0,0,1,1.479-1.483Z"
                                        transform="translate(-6.188 -11.246)" fill="#fff" />
                                </svg>
                            </div>
                        </label>
                    </div>

                    <div class="btnSltContent">
                        <button class="btn-celest-select clickSelectBtn">
                            <div class="fx fx-ai-c gp10">
                                4 Guests
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.652" height="8.378"
                                    viewBox="0 0 14.652 8.378">
                                    <path
                                        d="M13.516,17.1l5.54-5.545a1.043,1.043,0,0,1,1.479,0,1.056,1.056,0,0,1,0,1.483l-6.278,6.282a1.045,1.045,0,0,1-1.444.031L6.493,13.042a1.047,1.047,0,0,1,1.479-1.483Z"
                                        transform="translate(-6.188 -11.246)" fill="#fff" />
                                </svg>
                            </div>
                        </button>

                    </div>

                    <div class="content-publish_icon" style="margin: 0 0 0 11px;">
                        <div class="share_icon" style="margin: 0;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="29.012" height="24.549"
                                viewBox="0 0 29.012 24.549" class="i">
                                <g transform="translate(-3.496 -5.749)" fill="rgba(222,222,222,0.38)" stroke="#ff5a5f"
                                    stroke-width="2">
                                    <path
                                        d="M31.268,16.2,21.347,6.919a.507.507,0,0,0-.394-.169c-.309.014-.7.232-.7.563v4.655a.3.3,0,0,1-.253.288c-9.865,1.512-14.02,8.895-15.49,16.559-.056.3.352.584.541.345,3.6-4.535,7.98-7.5,14.906-7.552a.348.348,0,0,1,.3.337v4.57a.6.6,0,0,0,1.02.373l9.991-9.443a.776.776,0,0,0,.246-.591A.942.942,0,0,0,31.268,16.2Z">
                                    </path>
                                </g>
                            </svg>
                            <span class="icon_share">Share</span>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="h2-guests">Pool</h2>

            <div class="hidden_galerias mr-t47">
                @forelse ($contentListing as $element)
                    <a href="{{ route('interna', $element['id_listings']) }}" class="content_galerias">
                        <div class="slideshow-container">
                            <div class="star">
                                <div class="content-star">
                                    <i class="fas fa-star"></i><span class="num-start"> 4.89</span><span
                                        class="num-total"> (15)</span>
                                </div>
                            </div>

                            @if (Auth::check())
                                @if (in_array($element['id_listings'], $wishlists))
                                    <button type="button" class="card_love icon_solid">
                                    @else
                                        <button type="button" class="card_love showFavorite"
                                            wire:click="$emitTo('home.wishlists', 'addListing', '{{ $element['id_listings'] }}')">
                                @endif
                            @else
                                <button type="button" class="card_love butnSignModl">
                            @endif
                            <svg xmlns="http://www.w3.org/2000/svg" width="27.003" height="23.878"
                                viewBox="0 0 27.003 23.878">
                                <g transform="translate(1.002 -1.245)" fill="rgba(222,222,222,0.38)" stroke="#dedede"
                                    stroke-width="2">
                                    <path
                                        d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z" />
                                    <path
                                        d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z" />
                                </g>
                            </svg>
                            </button>

                            <div class="card_img">
                                <img src="{{ URL::asset('storage/uploadListing/' . $element['photos'][0]) }}"
                                    alt="">
                                <img src="{{ URL::asset('storage/uploadListing/' . $element['photos'][1]) }}"
                                    alt="">
                                <img src="{{ URL::asset('storage/uploadListing/' . $element['photos'][2]) }}"
                                    alt="">
                            </div>

                            <div class="content-dots">
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </div>
                        </div>
                        <div class="flex_info">
                            <h4>{{ ucwords(\App\Models\RoomsProperty::TypeListing($element['listing_type']) . ' ' . \App\Models\RoomsProperty::PropertyName($element['property_type'])) }}
                            </h4>
                            <h2>{{ $element['title'] }}</h2>
                            <p class="desc_lc">{{ $element['number_guests'] }} guests - {{ $element['bedrooms'] }}
                                bedrooms - {{ $element['bed'] }} beds - {{ $element['bathrooms'] }} baths</p>
                            @foreach ($element['amenities'] as $amenities)
                                @if ($loop->iteration <= 4)
                                    <button
                                        class="btn_lc">{{ \App\Models\AmenitiesSafety::Name($amenities) }}</button>
                                @endif
                            @endforeach
                            <p class="total_local">
                                <i class="fas fa-dollar-sign"></i> {{ $element['base_price'] }} / night
                                @if ($daysDiff != 0)
                                    <i class="far fa-long-arrow-right"></i> <span class="t">Total</span> <i
                                        class="fas fa-dollar-sign"></i> {{ $element['base_price'] * $daysDiff }}
                                @endif
                            </p>
                        </div>
                    </a>
                @empty
                    <div class="medio now__listabscard">
                        <p>No Have Listing</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <div class="content_location-width">
        <div class="desc-location">
        </div>
            <div class="contact-map" id='mapboxSearch' ></div>    
          {{--   <div class="contact-map">    
                <x-map-search/>
            </div> --}}
    </div>
</div>

@push('scripts')
    <script>
        Livewire.hook('message.processed', (message, component) => {
            $(".content-dots span.dot:first-child").addClass("dot_active");
            $(".card_img > img:first-child").addClass("card_img_active");
        })
    </script>

    <script src='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js'></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.min.js"></script>

    <script type="text/javascript">
        var contentCoordinate = @json($contentCoordinate);
        var preLoadCoordinate = @json($preLoadCoordinate);


        mapboxgl.accessToken =
            'pk.eyJ1IjoibGVuaWVycml2YXMiLCJhIjoiY2t6b3EzYXJtNjI2ODJvbXpuMHF2YTZjciJ9.5-kwcoo6NpNwEXSkeuhNtg';
        const map = new mapboxgl.Map({
            container: 'mapboxSearch',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: preLoadCoordinate,
            zoom: 8.15
        });

        const images = {
            'popup': 'https://docs.mapbox.com/mapbox-gl-js/assets/popup.png',
        };

        loadImages(images, (loadedImages) => {
            map.on('load', () => {
                map.addImage('popup', loadedImages['popup'], {
                    stretchX: [
                        [25, 55],
                        [85, 115]
                    ],
                    stretchY: [
                        [25, 100]
                    ],
                    content: [25, 25, 115, 100],
                    pixelRatio: 2
                });

                map.addSource('places', {
                    'type': 'geojson',
                    'data': {
                        'type': 'FeatureCollection',
                        'features': contentCoordinate,
                    }
                });

                // MARCA LOS POSICIONES EN EL MAPA
                map.addLayer({
                    'id': 'places',
                    'type': 'symbol',
                    'source': 'places',
                    'layout': {
                        'text-field': ['get', 'price'],
                        'icon-text-fit': 'both',
                        'icon-image': ['get', 'image-name'],
                        'icon-allow-overlap': true,
                        'text-allow-overlap': true
                    }
                });

                map.on('click', 'places', (e) => {
                    map.flyTo({
                        center: e.features[0].geometry.coordinates
                    });
                    const coordinates = e.features[0].geometry.coordinates.slice();
                    const description = e.features[0].properties.description;

                    while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                        coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
                    }

                    new mapboxgl.Popup({
                            closeButton: false,
                            maxWidth: '300px'
                        })
                        .setLngLat(coordinates)
                        .setHTML(description)
                        .addTo(map);
                });

                map.on('mouseenter', 'places', () => {
                    map.getCanvas().style.cursor = 'pointer';
                });

                map.on('mouseleave', 'places', () => {
                    map.getCanvas().style.cursor = '';
                });
            });
        });

        function loadImages(urls, callback) {
            const results = {};
            for (const name in urls) {
                map.loadImage(urls[name], makeCallback(name));
            }

            function makeCallback(name) {
                return (err, image) => {
                    results[name] = err ? null : image;

                    if (Object.keys(results).length === Object.keys(urls).length) {
                        callback(results);
                    }
                };
            }
        }

        map.doubleClickZoom.disable(); // Desactiva zoom doble click en el mapa
        map.dragRotate.disable(); // Desactiva rotar el mapa
        // map.scrollZoom.disable(); // Desactiva scroll zoom en el mapa
        map.boxZoom.disable(); // Desactiva zoom box select
        map.keyboard.disable();
    </script>
@endpush
