<div class="content_location fx ht100v ow-h">
    <div class="bkg_white wh-p100 ht-p100 pn-r">
        <div class="pn-a inset0 mxh100v">
            <div class="_z4lmgp">
                <div class="pn-r fx fx-fd-c wh-p100 ht-p100">
                    <div class="content_links">
                        <div class="con_flex fx fx-ai-c fx-jc-sb fx-fd-rr gp22 wh-p100">
                            <button type="button" class="btn-celest nrml btntabs skeleton" wire:click="resetFilter">Clear Filters</button>

                            <div class="navcont__flech-fx">
                                <div class="cont_nav js__cont_nav">
                                    <div class="nav__links-txt tab-container">
                                        @foreach ($category as $key => $element)
                                            <button type="button" class="li__links-txt skeleton" wire:click="changeCateg('{{$key}}')">
                                                <span class="tabs_items {{ $key === $filter_categ ? 'active_tabs' : '' }}">
                                                    <span class="skeleton skeleton_txt">{{ $element }}</span>
                                                </span>
                                            </button>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="fx fx-fw-w gp22 contbtnselect">
                                <div class="vvo-select blue btntabs skeleton">
                                    <select wire:model="inputPrice" class="skeleton">
                                        <option value="">Filter Price</option>
                                        <option value="20">less than 20$</option>
                                        <option value="20-80">Between 20$ to 80$</option>
                                        <option value="80">Greater than 80$+</option>
                                    </select>

                                    <i class="fas fa-chevron-down"></i>
                                </div>

                                <div class="vvo-select blue btntabs skeleton">
                                    <select wire:model="inputPlace" class="skeleton">
                                        <option value="">Type of place</option>
                                        @foreach ($places as $key => $element)
                                            <option value="{{ $key }}">{{ $element }}</option>
                                        @endforeach
                                    </select>

                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex_local-dates ow-h">
                        <div class="content_location-width">
                            <div class="desc-location">
                                <h5 class="_txtec skeleton skeleton_txt">{{ $countListing }}+ stays in Orlando</h5>
                            </div>
                            <div class="content_view">
                                <div class="hidden_galerias">
                                    @forelse ($contentListing as $element)
                                        <a href="{{ route('interna', $element['id_listings'] ) }}" class="content_galerias skeleton">
                                            <div class="slideshow-container skeleton skeleton_card">
                                                <div class="star">
                                                    <div class="content-star skeleton skeleton_txt">
                                                        <i class="fas fa-star"></i><span class="num-start"> 4.89</span><span class="num-total"> (15)</span>
                                                    </div>
                                                </div>
                                                @if ( Auth::check() )
                                                    @if ( in_array($element['id_listings'], $wishlists))
                                                        <button type="button" class="card_love icon_solid" wire:click="$emitTo('home.wishlists', 'removeListing', '{{ $element['id_listings']  }}')">
                                                    @else
                                                        <button type="button" class="card_love showFavorite" wire:click="$emitTo('home.wishlists', 'addListing', '{{ $element['id_listings']  }}')">
                                                    @endif
                                                @else
                                                    <button type="button" class="card_love butnSignModl">
                                                @endif
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="27.003" height="23.878" viewBox="0 0 27.003 23.878">
                                                        <g transform="translate(1.002 -1.245)" fill="rgba(222,222,222,0.38)" stroke="#dedede" stroke-width="2">
                                                            <path d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z"/>
                                                            <path d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z"/>
                                                        </g>
                                                    </svg>
                                                </button>

                                                <div class="card_img">
                                                    <img loading="lazy" src="{{ URL::asset('storage/uploadListing/' . $element['photos'][0]) }}" alt="">
                                                    <img loading="lazy" src="{{ URL::asset('storage/uploadListing/' . $element['photos'][1]) }}" alt="">
                                                    <img loading="lazy" src="{{ URL::asset('storage/uploadListing/' . $element['photos'][2]) }}" alt="">
                                                </div>

                                                <div class="content-dots">
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                </div>
                                            </div>
                                            <div class="flex_info">
                                                <h4 class="text_tm1 skeleton skeleton_txt">{{ ucwords( \App\Models\RoomsProperty::TypeListing( $element['listing_type'] ) .' '. \App\Models\RoomsProperty::PropertyName( $element['property_type'] ) ) }}</h4>
                                                <h2 class="text_tm1 skeleton skeleton_txt">{{ $element['title'] }}</h2>
                                                <p class="text_tm2 desc_lc skeleton skeleton_txt">{{ $element['number_guests'] }} guests  -  {{ $element['bedrooms'] }} bedrooms  -  {{ $element['bed'] }} beds  -  {{ $element['bathrooms'] }} baths</p>
                                                @foreach ( $element['amenities'] as $amenities)
                                                    @if ( $loop->iteration <= 4 )
                                                        <button class="btn_lc skeleton">{{ \App\Models\AmenitiesSafety::Name( $amenities ) }}</button>
                                                    @endif
                                                @endforeach
                                                <p class="total_local skeleton skeleton_txt">
                                                    <i class="fas fa-dollar-sign"></i> {{ $element['base_price'] }} / night 
                                                    @if ( $daysDiff != 0 )
                                                        <i class="far fa-long-arrow-right"></i> <span class="t">Total</span> <i class="fas fa-dollar-sign"></i> {{ $element['base_price'] * $daysDiff }}
                                                    @endif
                                                </p>
                                            </div>
                                        </a>
                                    @empty
                                        <div class="medio">
                                            <div class="now__listabscard">
                                                <p>No Have Listing</p>
                                            </div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>

                            {{ $contentListing->links() }}

                            <div class="cantidad_location-center">
                                <small class="skeleton skeleton_txt">1 - 20 of 300+ places to stay</small>
                                <p class="skeleton skeleton_txt">Additional fees apply Taxes may be added.</p>
                            </div>
                        </div>

                        <div class="content_location-width">
                            <div class="desc-location">
                                <h5 class="_txtec skeleton skeleton_txt">Your trip is coming up in 5 days. Use the Instant Book filter to check out places that you can book right now.</h5>
                            </div>

                            <div class="contact-map" id='mapboxSearch' wire:ignore></div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.hook('message.processed', (message, component) => {
            $(".content-dots span.dot:first-child").addClass("dot_active");
            $(".card_img > img:first-child").addClass("card_img_active");  

            skeleton();
            function skeleton() {
                let loadings = $(".skeleton");
                $(loadings).addClass("transition");
                
                for (loading of loadings) {
                    $(loading).removeClass("skeleton skeleton_card skeleton_txt");
                }
            }
        })
    </script>

    <script src="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.min.js"></script>

    <script type="text/javascript">
        var contentCoordinate = @json( $contentCoordinate );
        var preLoadCoordinate = @json( $preLoadCoordinate );

        window.addEventListener('loadDataMapBox', event => {
            loadMapboxSearch( event.detail.preLoadCoordinate, event.detail.contentCoordinate );
        })

        mapboxgl.accessToken = 'pk.eyJ1IjoibGVuaWVycml2YXMiLCJhIjoiY2t6b3EzYXJtNjI2ODJvbXpuMHF2YTZjciJ9.5-kwcoo6NpNwEXSkeuhNtg';
        const map = new mapboxgl.Map({
            container: 'mapboxSearch',
            style: 'mapbox://styles/mapbox/light-v10',
            center: preLoadCoordinate,
            zoom: 8.15,
            attributionControl: false
        });

        const images = {
            'popup': '{{ URL::asset('images/popup.png') }}',
        };

        loadImages(images, (loadedImages) => {
            map.on('load', () => {
                map.addImage('popup', loadedImages['popup'], {
                    stretchX: [
                        [25, 55],
                        [85, 115]
                    ],
                    stretchY: [[25, 100]],
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
                 
                    new mapboxgl.Popup({ closeButton: false, maxWidth: '300px' })
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

        function loadMapboxSearch (preLoadCoordinate, contentCoordinate){
            map.removeLayer('places');
            map.removeSource('places');

            if ( preLoadCoordinate )
                map.setCenter( preLoadCoordinate );

            map.addSource('places', {
                'type': 'geojson',
                'data': {
                    'type': 'FeatureCollection',
                    'features': contentCoordinate,
                }
            });
            
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
        }

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
        map.boxZoom.disable(); // Desactiva zoom box select
        map.keyboard.disable(); 
    </script>
@endpush