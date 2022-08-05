<div 
class="" 
wire:ignore 
x-data
x-init="() => {
    mapboxgl.accessToken = 'pk.eyJ1IjoibGVuaWVycml2YXMiLCJhIjoiY2t6b3EzYXJtNjI2ODJvbXpuMHF2YTZjciJ9.5-kwcoo6NpNwEXSkeuhNtg';
    const map = new mapboxgl.Map({
        container: 'mapCheckout',
        style: 'mapbox://styles/mapbox/light-v10', 
        center: [ {{ $attributes->get('longitude') }}, {{ $attributes->get('latitud') }} ],
        zoom: 13 
    });

    const marker = new mapboxgl.Marker({ draggable: false }).setLngLat([ {{ $attributes->get('longitude') }}, {{ $attributes->get('latitud') }} ]).addTo(map);

    map.doubleClickZoom.disable();
    map.dragPan.disable();
    map.dragRotate.disable();
    map.scrollZoom.disable();
    map.boxZoom.disable();
    map.keyboard.disable(); 
}"
>
    <div class="contact-map" id='mapCheckout' style="width:520px; height:530px;"></div>
</div>