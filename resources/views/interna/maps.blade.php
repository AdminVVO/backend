<div class="content-user-lclmp">
    <h2 class="h2-guests">Where you'll be</h2>
    <div class="_txtec mr-b24">{{ ucwords( strtolower( $content['city'] .', '. $content['state'] .', '. $content['country'] ) ) }}</div>
    <div class="contact-map">        
        <x-map-interna
            latitude="{{ $content['latitude'] }}"
            longitude="{{ $content['longitude'] }}"
        />
    </div>
</div>