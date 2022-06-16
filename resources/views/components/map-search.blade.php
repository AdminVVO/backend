<div 
class="_absolute" 
wire:ignore 
x-data
x-init="
    loadMapbox();
    function loadMapbox (){

        mapboxgl.accessToken = 'pk.eyJ1IjoibGVuaWVycml2YXMiLCJhIjoiY2t6b3EzYXJtNjI2ODJvbXpuMHF2YTZjciJ9.5-kwcoo6NpNwEXSkeuhNtg';
        const map = new mapboxgl.Map({
            container: 'mapboxSearch',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [-77.04, 38.907],
            zoom: 11.15
        });

        const images = {
            'popup': 'https://docs.mapbox.com/mapbox-gl-js/assets/popup.png',
            'popup-debug':
            'https://docs.mapbox.com/mapbox-gl-js/assets/popup_debug.png'
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
                        'features': [
                            {
                                'type': 'Feature',
                                'properties': {
                                    'description': `<div><img src='{{ URL::asset('assets/img/card/c1.jpg') }}'><h3>STUDIO RESORT FOR 4 PEOPLE!</h3><p>Description: REMODELATED Two-Bedroom Apartment with two-bathrooms , Close to Universal Studios, International Dr., Disney, Fun Spot, Sea World, Shops, with parking, Gym and Hot tubs. Bedroom 1 has 2 twin size bed with private bathroom and bathtub Bedoorm 2 has 1 queen size bed with private bathroom and shower 2 Outdoor pools and 1 indoor pool Excelent location on International dr , with all restaurants shops and atractions Close to Universal, Sea World and Disneyworld</p><p>Price: 58$ / Night</p></div>`,
                                    'price': '58$ / Night',
                                    'image-name': 'popup',
                                },
                                'geometry': {
                                    'type': 'Point',
                                    'coordinates': [-77.038659, 38.931567]
                                }
                            },
                            {
                                'type': 'Feature',
                                'properties': {
                                    'description': `<strong>Mad Men Season Five Finale Watch Party</strong><p>Head to Lounge 201 (201 Massachusetts Avenue NE) Sunday for a <a href='http://madmens5finale.eventbrite.com/' target='_blank' title='Opens in a new window'>Mad Men Season Five Finale Watch Party</a>, complete with 60s costume contest, Mad Men trivia, and retro food and drink. 8:00-11:00 p.m. $10 general admission, $20 admission and two hour open bar.</p>`,
                                    'price': '58$ / Night',
                                    'image-name': 'popup',
                                },
                                'geometry': {
                                    'type': 'Point',
                                    'coordinates': [-77.003168, 38.894651]
                                }
                            },
                        ]
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
    }
"
>
    <div class="contact-map" id='mapboxSearch' style="margin-top: 20px;width:1100px; height:530px;"></div>
</div>

@push('style')
    @once
        <link href='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.css' rel='stylesheet' />
        <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.css" type="text/css">
    @endonce
@endpush

@push('alpine_scripts')
    @once
        <script src='https://api.mapbox.com/mapbox-gl-js/v2.7.0/mapbox-gl.js'></script>
        <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.min.js"></script>
    @endonce
@endpush