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
            zoom: 14
        });

{{--         const marker = new mapboxgl.Marker({
            draggable: false
        }).setLngLat([ latitude, longitude ]).addTo(map); --}}

{{--         map.on('load', function(){
            var centerCircle = turf.point([longitude, latitude]);
            map.addLayer({
                'id': 'circle-fill',
                'type': 'fill',
                'source': {
                    'type': 'geojson',
                    'data': turf.circle(centerCircle, 0.5, { steps: 80, units: 'kilometers' })
                },
                'paint': {
                    'fill-color': 'gray',
                    'fill-opacity': 0.5
                }
            });
        }); --}}

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
    <script src='https://npmcdn.com/@turf/turf/turf.min.js'></script>
    @endonce
@endpush