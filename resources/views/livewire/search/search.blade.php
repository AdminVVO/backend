<div class="content_location">

    <div class="content_links">
        <div class="tabs_select">
            <label class="custom-anytime sl_price">
                <select name="" id="">
                    <option value="">Price</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                    <option value="">Option 3</option>
                </select>
                <i class="far fa-chevron-down"></i>
            </label>

            <label class="custom-anytime sl_typlace">
                <select name="" id="">
                    <option value="">Type of place</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                    <option value="">Option 3</option>
                </select>
                <i class="far fa-chevron-down"></i>
            </label>
        </div>

        <div class="content-scroll-local">
            <div class="tabs_items_group">
                @foreach ($categorys as $item)
                    <h3 wire:click.prevent="changeCategory({{ $item->id }})" class="tabs_items">
                        {{ $item->type }}</h3>
                @endforeach
            </div>
            <div class="btn-right-scroll">
                <span class="bg-btn-right">
                    <i class="fas fa-chevron-right"></i>
                </span>
            </div>
        </div>

        <div class="tabs_select sl_filters">
            <label class="custom-anytime sl_filters">
                <select name="" id="">
                    <option value="">Filters</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                    <option value="">Option 3</option>
                </select>
            </label>
        </div>

    </div>

    <div class="flex_local-dates">
        <div class="content_location-width">
            <div class="desc-location">
                <h5>300+ stays in Orlando</h5>
            </div>
            <div class="content_view">
                <div class="hidden_galerias">
                    @foreach ($sites as $item)
                        <a href="/" class="content_galerias">
                            <div class="slideshow-container">
                                <div class="star">
                                    <div class="content-star">
                                        <i class="fas fa-star"></i><span class="num-start"> 4.89</span><span
                                            class="num-total"> (15)</span>
                                    </div>
                                </div>
                                <button>
                                    <div class="card_love">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.003" height="23.878"
                                            viewBox="0 0 27.003 23.878">
                                            <g transform="translate(1.002 -1.245)" fill="rgba(222,222,222,0.38)"
                                                stroke="#dedede" stroke-width="2">
                                                <path
                                                    d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z" />
                                                <path
                                                    d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z" />
                                            </g>
                                        </svg>
                                    </div>
                                </button>

                                <div class="card_img">
                                    @foreach ($item['thumbNailUrl'] as $img)
                                        <img src="{{ URL::asset('assets/img/card/' . $img) }}" alt="">
                                    @endforeach
                                </div>

                                <div class="content-dots">
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </div>
                            </div>
                            <div class="flex_info">
                                <h4>Entire townhouse in Kissimmee</h4>
                                <h2>Stars Gate Paradise stays in orlands</h2>
                                <p class="desc_lc">10 guests - 4 bedrooms - 5 beds - 2.5 baths</p>
                                <button class="btn_lc">Pool</button>
                                <button class="btn_lc">Free parking</button>
                                <button class="btn_lc">Wifi</button>
                                <button class="btn_lc">Kitchen</button>
                                <p class="total_local">
                                    <i class="fas fa-dollar-sign"></i> 446 / night <i
                                        class="far fa-long-arrow-right"></i> <span class="t">Total</span>
                                    <i class="fas fa-dollar-sign"></i> {{ $item->price }}
                                </p>
                            </div>
                        </a>
                    @endforeach
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
                <h5>Your trip is coming up in 5 days. Use the Instant Book filter to check out places that you can book
                    right now.</h5>
            </div>
            <div id="map" class="contact-map" style="border:0;">
            </div>
        </div>
    </div>

</div>
@push('scripts')
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiZmFwY29kIiwiYSI6ImNrejV6M2IyczB2N2sybm9mYndzZTllajUifQ.PhcB5d8k0hWHb7B8fqDP2g';


        //antonio
        const sit = @js($sites);
        const sitios = sit.map(function(element) {
            let templade =
                `<div class="tabs_card tabs_card_xl entero">
                    <div class="medio">   
                            <a href="/" class="card_items">
                                    <div class="card_top">
                                        <div class="card_top_price">
                                        <i class="fas fa-dollar-sign"></i>
                                            <p>` + element.price + ` / night</p>
                                        </div>
                                    <div class="card_top_dates">
                                    <i class="fas fa-calendar"></i>
                                    <p>` + element.date + `</p>
                                    </div>
                                    </div>
                                <button>
                                <div class="card_love">
                                <svg xmlns="http://www.w3.org/2000/svg" width="27.003" height="23.878" viewBox="0 0 27.003 23.878">
                                    <g transform="translate(1.002 -1.245)" fill="rgba(222,222,222,0.38)" stroke="#dedede"
                                        stroke-width="2">
                                        <path
                                            d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z" />
                                        <path
                                            d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z" />
                                    </g>
                                </svg>
                                        </div>
                                    </button>
                                    <div class="card_img">
                                        <img src="{{ URL::asset('assets/img/card/`+element.thumbNailUrl[0]+`') }}" alt="">
                                        <img src="{{ URL::asset('assets/img/card/`+element.thumbNailUrl[1]+`') }}" alt="">
                                        <img src="{{ URL::asset('assets/img/card/`+element.thumbNailUrl[2]+`') }}" alt="">
                                    </div>
                                    <div class="content-dots">
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                    </div>
                                    <div class="card_info">
                                        <div class="card_info_text">
                                            <h2 class="h2-cards">` + element.title + `</h2>
                                            <div class="card_info_rating">
                                                <i class="fas fa-star"></i>
                                                <p>4.89 <span>(15)</span></p>
                                            </div>
                                        </div>
                                        <h3 class="h3-cards">` + element.distance + ` miles away</h3>
                                    </div>
                            </a>
                    </div>
                </div>`;
            let marcador = `<h1>` + element.price + `</h1>`;
            objeto = {
                'type': 'Feature',
                'properties': {
                    'description': templade,
                    'marker': marcador,
                    'icon': 'theatre-15'
                },
                'geometry': {
                    'type': 'Point',
                    'coordinates': [parseFloat(element.longitude), parseFloat(element.latitude)]
                }
            }
            return objeto;
        });

        const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [0, 0],
            zoom: 11.15
        });


        // antonio 



        console.log(sitios);
        map.on('load', () => {
            /*  map.addSource('places', {
                 'type': 'geojson',
                 'data': {
                     'type': 'FeatureCollection',
                     'features': sitios
                 }
             }); */

            const sitio = sit.map(function(element) {
                let marcador = document.createElement('div');
                marcador.textContent = element.price;
                let marker = new mapboxgl.Marker(marcador).setLngLat({
                    'lng': element.longitude,
                    'lat': element.latitude
                }).addTo(map);

                marcador.addEventListener('click', () => {
                    const contenido = new mapboxgl.Popup();
                    let templade = `<div class="tabs_card tabs_card_xl entero">
                                        <div class="medio">   
                                                <a href="/" class="card_items">
                                                        <div class="card_top">
                                                            <div class="card_top_price">
                                                            <i class="fas fa-dollar-sign"></i>
                                                                <p>` + element.price + ` / night</p>
                                                            </div>
                                                        <div class="card_top_dates">
                                                        <i class="fas fa-calendar"></i>
                                                        <p>` + element.date + `</p>
                                                        </div>
                                                        </div>
                                                    <button>
                                                    <div class="card_love">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="27.003" height="23.878" viewBox="0 0 27.003 23.878">
                                                        <g transform="translate(1.002 -1.245)" fill="rgba(222,222,222,0.38)" stroke="#dedede"
                                                            stroke-width="2">
                                                            <path
                                                                d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z" />
                                                            <path
                                                                d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z" />
                                                        </g>
                                                    </svg>
                                                            </div>
                                                        </button>
                                                        <div class="card_img">
                                                            <img src="{{ URL::asset('assets/img/card/`+element.thumbNailUrl[0]+`') }}" alt="">
                                                            <img src="{{ URL::asset('assets/img/card/`+element.thumbNailUrl[1]+`') }}" alt="">
                                                            <img src="{{ URL::asset('assets/img/card/`+element.thumbNailUrl[2]+`') }}" alt="">
                                                        </div>
                                                        <div class="content-dots">
                                                            <span class="dot"></span>
                                                            <span class="dot"></span>
                                                            <span class="dot"></span>
                                                        </div>
                                                        <div class="card_info">
                                                            <div class="card_info_text">
                                                                <h2 class="h2-cards">` + element.title + `</h2>
                                                                <div class="card_info_rating">
                                                                    <i class="fas fa-star"></i>
                                                                    <p>4.89 <span>(15)</span></p>
                                                                </div>
                                                            </div>
                                                            <h3 class="h3-cards">` + element.distance + ` miles away</h3>
                                                        </div>
                                                </a>
                                        </div>
                                    </div>`;
                    contenido.setHTML(templade);
                    marker.setPopup(contenido);
                    marker.setLngLat([element.longitude, element.latitude]);
                    marker.addTo(map);
                    console.log(map.getContainer());

                    Livewire.emit('reloadClassCSs')
                    map.flyTo({
                        center: [element.longitude, element.latitude]
                    });
                });
                // 


                // 


            });
            console.log( map.getBounds());

            /* map.addLayer({
                'id': 'places',
                'type': 'symbol',
                'source': 'places',
                'layout': {
                    // 'icon-image': '{icon}',
                    // 'icon-allow-overlap': true,
                    'text-field':['get', 'marker'],
                    // "symbol":{marker},
                    

                }
            }); */
            map.on('click', 'places', (e) => {
                // Copy coordinates array.
                const coordinates = e.features[0].geometry.coordinates.slice();
                const description = e.features[0].properties.description;

                while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                    coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
                }
                // ventana emergente al darle click
                new mapboxgl.Popup()
                    .setLngLat(coordinates)
                    .setHTML(description)
                    .addTo(map);
                Livewire.emit('reloadClassCSs')
            });

            // cambiar el cursos a punto en el mapa

            map.on('mouseenter', 'sitio', () => {
                map.getCanvas().style.cursor = 'pointer';
            });

            // cambiar el cursor normal
            map.on('mouseleave', 'places', () => {
                map.getCanvas().style.cursor = '';
            });

            // controles del mapa + - <>
            map.addControl(new mapboxgl.NavigationControl());
        });
    </script>
@endpush
