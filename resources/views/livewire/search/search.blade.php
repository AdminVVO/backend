<div class="content_location">
    <div class="content_links">
        <div class="tabs_select">
            <label class="custom-anytime sl_price">
                <select wire:model="inputPrice">
                    <option value="">Filter Price</option>
                    <option value="20">less than 20$</option>
                    <option value="20-80">Between 20$ to 80$</option>
                    <option value="80">Greater than 80$+</option>
                </select>
                <i class="far fa-chevron-down"></i>
            </label>

            <label class="custom-anytime sl_typlace">
                <select wire:model="inputPlace">
                    <option value="">Type of place</option>
                    @foreach ($places as $key => $element)
                        <option value="{{ $key }}">{{ $element }}</option>
                    @endforeach
                </select>
                <i class="far fa-chevron-down"></i>
            </label>
        </div>
        <div class="content-scroll-local">
            <div class="tabs_items_group">
                @foreach ($category as $key => $element)
                    <h3 class="tabs_items {{ $key === $filter_categ ? 'active_tabs' : '' }}" wire:click="changeCateg('{{$key}}')">{{ $element }}</h3>
                @endforeach
            </div>

            <div class="btn-right-scroll">
                <span class="bg-btn-right">
                    <i class="fas fa-chevron-right"></i>
                </span>
            </div>
        </div>
        <button type="button" class="btn-celest nrml selectbtn" wire:click="resetFilter">Reset Filters</button>
    </div>
    <div class="flex_local-dates">
        <div class="content_location-width">
            <div class="desc-location">
                <h5 class="_txtec">{{ $countListing }} stays in Orlando</h5>
            </div>
            <div class="content_view">
                <div class="hidden_galerias">
                    @forelse ($contentListing as $element)
                        <a href="{{ route('interna', $element['id_listings'] ) }}" class="content_galerias">
                            <div class="slideshow-container">
                                <div class="star">
                                    <div class="content-star">
                                        <i class="fas fa-star"></i><span class="num-start"> 4.89</span><span class="num-total"> (15)</span>
                                    </div>
                                </div>

                                @if ( Auth::check() )
                                    @if ( in_array($element['id_listings'], $wishlists))
                                        <button type="button" class="card_love icon_solid">
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
                                    <img src="{{ URL::asset('storage/uploadListing/' . $element['photos'][0]) }}" alt="">
                                    <img src="{{ URL::asset('storage/uploadListing/' . $element['photos'][1]) }}" alt="">
                                    <img src="{{ URL::asset('storage/uploadListing/' . $element['photos'][2]) }}" alt="">
                                </div>

                                <div class="content-dots">
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </div>
                            </div>
                            <div class="flex_info">
                                <h4>{{ ucwords( \App\Models\RoomsProperty::TypeListing( $element['listing_type'] ) .' '. \App\Models\RoomsProperty::PropertyName( $element['property_type'] ) ) }}</h4>
                                <h2>{{ $element['title'] }}</h2>
                                <p class="desc_lc">{{ $element['number_guests'] }} guests  -  {{ $element['bedrooms'] }} bedrooms  -  {{ $element['bed'] }} beds  -  {{ $element['bathrooms'] }} baths</p>
                                @foreach ( $element['amenities'] as $amenities)
                                    @if ( $loop->iteration <= 4 )
                                        <button class="btn_lc">{{ \App\Models\AmenitiesSafety::Name( $amenities ) }}</button>
                                    @endif
                                @endforeach
                                <p class="total_local">
                                    <i class="fas fa-dollar-sign"></i> {{ $element['base_price'] }} / night 
                                    @if ( $daysDiff != 0 )
                                        <i class="far fa-long-arrow-right"></i> <span class="t">Total</span> <i class="fas fa-dollar-sign"></i> {{ $element['base_price'] * $daysDiff }}
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

            <div class="pagination">
            </div>

            <div class="cantidad_location-center">
                <small>1 - 20 of 300+ places to stay</small>
                <p>Additional fees apply Taxes may be added.</p>
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

        var contentCoordinate = @json( $contentCoordinate );
        console.log("contentCoordinate", contentCoordinate);


        mapboxgl.accessToken = 'pk.eyJ1IjoibGVuaWVycml2YXMiLCJhIjoiY2t6b3EzYXJtNjI2ODJvbXpuMHF2YTZjciJ9.5-kwcoo6NpNwEXSkeuhNtg';
        const map = new mapboxgl.Map({
            container: 'mapboxSearch',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [-77.04, 38.907],
            zoom: 11.15
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
                    stretchY: [[25, 100]],
                    content: [25, 25, 115, 100],
                    pixelRatio: 2
                });

                map.addSource('places', {
                    'type': 'geojson',
                    'data': {
                        'type': 'FeatureCollection',
                        'features': contentCoordinate,
                        // 'features': [
                        //     {
                        //         'type': 'Feature',
                        //         'properties': {
                        //             'description': `<div class='card_items card_items_map'><div class='card_top'><div class='card_top_price'><i class='fas fa-dollar-sign'></i><p>446 / night</p></div><div class='card_top_dates'><i class='fas fa-calendar'></i><p>24 dec - 31 dec</p></div></div><div class='card_img'><img src='assets/img/card/c1.jpg' alt=' class='card_img_active'><img src='assets/img/card/c2.jpg' alt='><img src='assets/img/card/c3.jpg' alt='></div><div class='card_info'><div class='content-dots'><span class='dot dot_active'></span><span class='dot'></span><span class='dot'></span></div><div class='card_info_text'><h2 class='h2-cards text_tm1'>Stars Gate Pradise at 12345678</h2><div class='fxaigpfwjcw'><h3 class='h3-cards text_tm1'>4852 miles away</h3><div class='card_info_rating'><i class='fas fa-star'></i><p>4.89 <span>(15)</span></p></div></div></div></div></div>`,
                        //             'price': '58$ / Night',
                        //             'image-name': 'popup',
                        //         },
                        //         'geometry': {
                        //             'type': 'Point',
                        //             'coordinates': [-77.038659, 38.931567]
                        //         }
                        //     },
                        // ]
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
                 
                    new mapboxgl.Popup()
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
        map.scrollZoom.disable(); // Desactiva scroll zoom en el mapa
        map.boxZoom.disable(); // Desactiva zoom box select
        map.keyboard.disable(); 
    </script>
@endpush