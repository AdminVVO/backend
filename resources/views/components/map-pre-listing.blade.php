<div 
class="_absolute" 
wire:ignore 
x-data
x-init="
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {

            const longitude = {{ $attributes->get('longitude') }} != 0 ? {{ $attributes->get('longitude') }} : position.coords.longitude;
            const latitud = {{ $attributes->get('latitud') }} != 0 ? {{ $attributes->get('latitud') }} : position.coords.latitude;

            mapboxgl.accessToken = 'pk.eyJ1IjoibGVuaWVycml2YXMiLCJhIjoiY2t6b3EzYXJtNjI2ODJvbXpuMHF2YTZjciJ9.5-kwcoo6NpNwEXSkeuhNtg';
            const map = new mapboxgl.Map({
                container: 'mapStep1', // container ID
                style: 'mapbox://styles/mapbox/light-v10', // style URL
                center: [longitude, latitud], // starting center in [lng, lat]
                zoom: 12, // starting zoom
                projection: 'globe' // display map as a 3D globe
            });

            const nav = new mapboxgl.NavigationControl({
                showCompass: false,
                showZoom: true,
                visualizePitch: false
            });
            map.addControl(nav,'top-left');

            const geocoder = new MapboxGeocoder({
                accessToken: mapboxgl.accessToken,
                types: 'country,region,place,postcode,locality,neighborhood'
            });
            geocoder.addTo('#geocoder');

            geocoder.on('result', (e) => {
                $('.input-enter_map').removeClass('active_inputs_map');
                map.flyTo({center: [ e.result.center[0], e.result.center[1] ], zoom: 12});
            });

            const geolocate = new mapboxgl.GeolocateControl({
                positionOptions: {},
                showAccuracyCircle: false, // elimina radio circle 
                showUserLocation: false, // Elimina icon circle
                trackUserLocation: false,
            });

            const marker = new mapboxgl.Marker({
                draggable: true
            })

            map.doubleClickZoom.disable(); // Desactiva zoom doble click en el mapa
            map.dragRotate.disable(); // Desactiva rotar el mapa
            map.boxZoom.disable(); // Desactiva zoom box select
            map.keyboard.disable(); 
            map.addControl(geolocate); // to curren location

            if( {{ $attributes->get('longitude') }} != 0 || {{ $attributes->get('latitud') }} != 0 ){
                marker.setLngLat([longitude, latitud]);
            }else{
                marker.setLngLat([0, 0]);
            };

            marker.on('dragend', function onDragEnd() {
                const lngLat = marker.getLngLat();
                Livewire.emitTo('listing.become-host.index','LngLat', lngLat )
            });
            marker.addTo(map);

            map.on('click', (e) => {
                e.preventDefault();
                marker.setLngLat([e.lngLat.lng, e.lngLat.lat]);
                const lngLat = marker.getLngLat();
                Livewire.emitTo('listing.become-host.index','LngLat', lngLat )
            });

            $('.use_current_locat').click(function() {
                geolocate.trigger();
            });

            map.on('style.load', () => {
                map.setFog({}); // Set the default atmosphere style
            });

            map.on('load', function () {
                map.flyTo({
                   center: [
                      longitude, // Example data
                      latitud // Example data
                   ],
                   essential: true // this animation is considered essential with respect to prefers-reduced-motion
                });
            });
        });
    }
"
>
    <div class="_absolute">
        <div class="input-enter_map">
            <div class="input-wrapper show">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.482" height="26.038" viewBox="0 0 18.482 26.038">
                        <path d="M15.741,3A8.235,8.235,0,0,0,7.5,11.241c0,6.181,8.241,15.305,8.241,15.305s8.241-9.124,8.241-15.305A8.235,8.235,0,0,0,15.741,3Zm0,11.185a2.943,2.943,0,1,1,2.943-2.943A2.944,2.944,0,0,1,15.741,14.185Z" transform="translate(-6.5 -2)" fill="none" stroke="#ff5a5f" stroke-width="2"/>
                    </svg>
                </span>
                
                <div id="geocoder"></div>
            </div>

            <button class="input-wrapper use_current_locat none" style="width: 100%;">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24.638" height="25.225" viewBox="0 0 24.638 25.225">
                        <path d="M14.775,21.443l-3.059-9.131H1.773L20.893,1.581Z" transform="translate(2.053 0.515)" fill="none" stroke="#ff5a5f" stroke-width="2"/>
                    </svg>
                </span>
                <p class="_txtec">use my current location</p>
            </button>
        </div>

        <div class="contact-map" id='mapStep1' style="margin-top: 20px;width:560px; height:530px;"></div>
    </div>
</div>