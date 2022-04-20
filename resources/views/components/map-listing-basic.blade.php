<div 
class="_absolute" 
wire:ignore 
x-data
x-init="
    loadMapbox({{ $attributes->get('latitude') }}, {{ $attributes->get('longitude') }});

    this.addEventListener('refreshMapbox', e => {
        loadMapbox(e.detail.latitude, e.detail.longitude);
    });

    function loadMapbox (latitude, longitude){
        mapboxgl.accessToken = 'pk.eyJ1IjoibGVuaWVycml2YXMiLCJhIjoiY2t6b3EzYXJtNjI2ODJvbXpuMHF2YTZjciJ9.5-kwcoo6NpNwEXSkeuhNtg';
        const map = new mapboxgl.Map({
            container: 'mapbox',
            style: 'mapbox://styles/mapbox/streets-v11', 
            center: [ latitude, longitude ],
            zoom: 15
        });

        const nav = new mapboxgl.NavigationControl({
            showCompass: false,
            showZoom: true,
            visualizePitch: false
        });
        map.addControl(nav,'top-left');

        const geolocate = new mapboxgl.GeolocateControl({
            positionOptions: {},
            showAccuracyCircle: false,
            showUserLocation: true,
            trackUserLocation: true,
        });

        const marker = new mapboxgl.Marker({
            draggable: true
        })

        map.doubleClickZoom.disable();
        map.dragRotate.disable();
        map.boxZoom.disable();
        map.keyboard.disable(); 
        map.addControl(geolocate);

        marker.setLngLat([ latitude, longitude ])
        marker.on('dragend', function onDragEnd() {
            const lngLat = marker.getLngLat();
            window.livewire.emit('latlong', lngLat.lng, lngLat.lat)
        });
        marker.addTo(map);

        map.on('click', (e) => {
            e.preventDefault();
            marker.setLngLat([e.lngLat.lng, e.lngLat.lat])
            window.livewire.emit('latlong', e.lngLat.lng, e.lngLat.lat)
        });
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