<div 
class="_absolute" 
wire:ignore 
x-data
x-init="
    loadMapbox({{ $attributes->get('latitude') }}, {{ $attributes->get('longitude') }});

    function loadMapbox (latitude, longitude){
        mapboxgl.accessToken = 'pk.eyJ1IjoibGVuaWVycml2YXMiLCJhIjoiY2t6b3EzYXJtNjI2ODJvbXpuMHF2YTZjciJ9.5-kwcoo6NpNwEXSkeuhNtg';
        const map = new mapboxgl.Map({
            container: 'mapbox',
            style: 'mapbox://styles/mapbox/streets-v11', 
            center: [ longitude, latitude ],
            zoom: 13
        });

        map.on('load', () => {
            map.loadImage(
                '{{ URL::asset('images/home-mapa.png') }}',
                (error, image) => {
                    if (error) throw error;
                    map.addImage('custom-marker', image );
                    map.addSource('points', {
                        'type': 'geojson',
                        'data': {
                            'type': 'FeatureCollection',
                            'features': [
                                {
                                    'type': 'Feature',
                                    'properties': {
                                        'description':
                                        '<p>You will be able to know the exact location once you have completed the reservation</p>'
                                    },
                                    'geometry': {
                                        'type': 'Point',
                                        'coordinates': [longitude, latitude]
                                    }
                                }
                            ]
                        }
                    });

                    map.addLayer({
                        'id': 'points',
                        'type': 'symbol',
                        'source': 'points',
                        'layout': {
                            'icon-image': 'custom-marker',
                            'text-field': ['get', 'title'],
                            'text-font': [
                                'Open Sans Semibold',
                                'Arial Unicode MS Bold'
                            ],
                            'text-offset': [0, 1.25],
                            'text-anchor': 'top'
                        }
                    });

                    const popup = new mapboxgl.Popup({
                        closeButton: false,
                        closeOnClick: false
                    });

                    map.on('mouseenter', 'points', (e) => {
                        map.getCanvas().style.cursor = 'pointer';

                        const coordinates = e.features[0].geometry.coordinates.slice();
                        const description = e.features[0].properties.description;

                        while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                            coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
                        }

                        popup.setLngLat(coordinates).setHTML(description).addTo(map);
                    });

                    map.on('mouseleave', 'points', () => {
                        map.getCanvas().style.cursor = '';
                        popup.remove();
                    });
                }
            );
        });

        map.doubleClickZoom.disable(); // Desactiva zoom doble click en el mapa
        map.dragPan.disable(); // Desactiva navegar por el mapa
        map.dragRotate.disable(); // Desactiva rotar el mapa
        map.scrollZoom.disable(); // Desactiva scroll zoom en el mapa
        map.boxZoom.disable(); // Desactiva zoom box select
        map.keyboard.disable(); 
    }
"
>
    <div class="contact-map" id='mapbox' style="margin-top: 20px;width:1100px; height:530px;"></div>
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