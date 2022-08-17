<div 
class="_absolute" 
wire:ignore 
x-data
x-init="
        latitude = {{ $attributes->get('longitude') }};
        longitude = {{ $attributes->get('latitude') }};

        this.addEventListener('refreshMapbox', e => {
            latitude = e.detail.longitude;
            longitude = e.detail.latitude;
        });

        mapboxgl.accessToken = 'pk.eyJ1IjoibGVuaWVycml2YXMiLCJhIjoiY2t6b3EzYXJtNjI2ODJvbXpuMHF2YTZjciJ9.5-kwcoo6NpNwEXSkeuhNtg';
        map = new mapboxgl.Map({
            container: 'mapbox',
            style: 'mapbox://styles/mapbox/streets-v11', 
            center: [ longitude, latitude ],
            zoom: 14
        });

        const nav = new mapboxgl.NavigationControl({
            showCompass: false,
            showZoom: true,
            visualizePitch: false
        });
        map.addControl(nav,'top-left');

        const marker = new mapboxgl.Marker({
            draggable: true
        })

        map.doubleClickZoom.disable();
        map.dragRotate.disable();
        map.boxZoom.disable();
        map.keyboard.disable(); 

        marker.setLngLat([ longitude, latitude ])
        marker.on('dragend', function onDragEnd() {
            const lngLat = marker.getLngLat();
            window.livewire.emit('latlong', lngLat.lng, lngLat.lat)
        });
        marker.addTo(map);

        map.on('click', (e) => {
            e.preventDefault();
            map.flyTo({center:[e.lngLat.lng, e.lngLat.lat]});
            marker.setLngLat([e.lngLat.lng, e.lngLat.lat])
            window.livewire.emit('latlong', e.lngLat.lng, e.lngLat.lat)
        });

{{--         map.on('load', function(){
            const lngLat = marker.getLngLat();
            var centerCircle = turf.point([lngLat.lng, lngLat.lat]);
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