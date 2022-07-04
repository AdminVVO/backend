<div class="content-user-lclmp">
    <h2 class="h2-guests skeleton skeleton_txt">Where you'll be</h2>
    <div class="_txtec mr-b24 skeleton skeleton_txt">{{ ucwords( strtolower( $content['country'] .', '. $content['state'] .', '. $content['city'] ) ) }}</div>
    <div class="contact-map skeleton">
        <x-map-interna
            latitude="{{ $content['latitude'] }}"
            longitude="{{ $content['longitude'] }}"
        />
    </div>
</div>