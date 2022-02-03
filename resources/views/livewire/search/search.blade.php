
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
                    <h3 wire:click.prevent="changeCategory({{ $item->id }})" class="tabs_items">{{ $item->type }}</h3>
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
            <div id="map" class="contact-map" style="border:0;" >
            </div>
        </div>
    </div> 
   
</div>
@push('scripts')
<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
<script >
    mapboxgl.accessToken = 'pk.eyJ1IjoiZmFwY29kIiwiYSI6ImNrejV1Y2FraDB1M20ydnAxb3BvdjV6Y2cifQ.w6_-93r84syMMY94a_gj4Q';
    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [-77.04, 38.907],
        zoom: 11.15
    });

    map.on('load', () => {
        map.addSource('places', {
            'type': 'geojson',
            'data': {
                'type': 'FeatureCollection',
                'features': [{
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Make it Mount Pleasant</strong><p><a href="http://www.mtpleasantdc.com/makeitmtpleasant" target="_blank" title="Opens in a new window">Make it Mount Pleasant</a> is a handmade and vintage market and afternoon of live entertainment and kids activities. 12:00-6:00 p.m.</p>',
                            'icon': 'theatre-15'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [-77.038659, 38.931567]
                        }
                    },
                    {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Mad Men Season Five Finale Watch Party</strong><p>Head to Lounge 201 (201 Massachusetts Avenue NE) Sunday for a <a href="http://madmens5finale.eventbrite.com/" target="_blank" title="Opens in a new window">Mad Men Season Five Finale Watch Party</a>, complete with 60s costume contest, Mad Men trivia, and retro food and drink. 8:00-11:00 p.m. $10 general admission, $20 admission and two hour open bar.</p>',
                            'icon': 'theatre-15'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [-77.003168, 38.894651]
                        }
                    },
                    {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Big Backyard Beach Bash and Wine Fest</strong><p>EatBar (2761 Washington Boulevard Arlington VA) is throwing a <a href="http://tallulaeatbar.ticketleap.com/2012beachblanket/" target="_blank" title="Opens in a new window">Big Backyard Beach Bash and Wine Fest</a> on Saturday, serving up conch fritters, fish tacos and crab sliders, and Red Apron hot dogs. 12:00-3:00 p.m. $25.grill hot dogs.</p>',
                            'icon': 'bar-15'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [-77.090372, 38.881189]
                        }
                    },
                    {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Ballston Arts & Crafts Market</strong><p>The <a href="http://ballstonarts-craftsmarket.blogspot.com/" target="_blank" title="Opens in a new window">Ballston Arts & Crafts Market</a> sets up shop next to the Ballston metro this Saturday for the first of five dates this summer. Nearly 35 artists and crafters will be on hand selling their wares. 10:00-4:00 p.m.</p>',
                            'icon': 'art-gallery-15'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [-77.111561, 38.882342]
                        }
                    },
                    {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Seersucker Bike Ride and Social</strong><p>Feeling dandy? Get fancy, grab your bike, and take part in this year\'s <a href="http://dandiesandquaintrelles.com/2012/04/the-seersucker-social-is-set-for-june-9th-save-the-date-and-start-planning-your-look/" target="_blank" title="Opens in a new window">Seersucker Social</a> bike ride from Dandies and Quaintrelles. After the ride enjoy a lawn party at Hillwood with jazz, cocktails, paper hat-making, and more. 11:00-7:00 p.m.</p>',
                            'icon': 'bicycle-15'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [-77.052477, 38.943951]
                        }
                    },
                    {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Capital Pride Parade</strong><p>The annual <a href="http://www.capitalpride.org/parade" target="_blank" title="Opens in a new window">Capital Pride Parade</a> makes its way through Dupont this Saturday. 4:30 p.m. Free.</p>',
                            'icon': 'rocket-15'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [-77.043444, 38.909664]
                        }
                    },
                    {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Muhsinah</strong><p>Jazz-influenced hip hop artist <a href="http://www.muhsinah.com" target="_blank" title="Opens in a new window">Muhsinah</a> plays the <a href="http://www.blackcatdc.com">Black Cat</a> (1811 14th Street NW) tonight with <a href="http://www.exitclov.com" target="_blank" title="Opens in a new window">Exit Clov</a> and <a href="http://godsilla.bandcamp.com" target="_blank" title="Opens in a new window">Gods’illa</a>. 9:00 p.m. $12.</p>',
                            'icon': 'music-15'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [-77.031706, 38.914581]
                        }
                    },
                    {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>A Little Night Music</strong><p>The Arlington Players\' production of Stephen Sondheim\'s  <a href="http://www.thearlingtonplayers.org/drupal-6.20/node/4661/show" target="_blank" title="Opens in a new window"><em>A Little Night Music</em></a> comes to the Kogod Cradle at The Mead Center for American Theater (1101 6th Street SW) this weekend and next. 8:00 p.m.</p>',
                            'icon': 'music-15'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [-77.020945, 38.878241]
                        }
                    },
                    {
                        'type': 'Feature',
                        'properties': {
                            'description': '<strong>Truckeroo</strong><p><a href="http://www.truckeroodc.com/www/" target="_blank">Truckeroo</a> brings dozens of food trucks, live music, and games to half and M Street SE (across from Navy Yard Metro Station) today from 11:00 a.m. to 11:00 p.m.</p>',
                            'icon': 'music-15'
                        },
                        'geometry': {
                            'type': 'Point',
                            'coordinates': [-77.007481, 38.876516]
                        }
                    }
                ]
            }
        });
        // Add a layer showing the places.
        map.addLayer({
            'id': 'places',
            'type': 'symbol',
            'source': 'places',
            'layout': {
                'icon-image': '{icon}',
                'icon-allow-overlap': true
            }
        });
        map.on('click', 'places', (e) => {
            // Copy coordinates array.
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

        // Change the cursor to a pointer when the mouse is over the places layer.
        map.on('mouseenter', 'places', () => {
            map.getCanvas().style.cursor = 'pointer';
        });

        // Change it back to a pointer when it leaves.
        map.on('mouseleave', 'places', () => {
            map.getCanvas().style.cursor = '';
        });
    });
</script>       
@endpush




