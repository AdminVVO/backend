<div class="container_gallerys">
    <div class="pd_galls-modal">
        <div class="_z4lmgp">
            <div class="modal_content-galls">
                <nav class="nv_galls">
                    <div class="content_galls">
                        <button aria-label="Cerrar" type="button" class="circle__btn-cerrar btn-x_galls">
                            <span class="pr">
                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false">
                                    <g fill="none">
                                        <path d="m20 28-11.29289322-11.2928932c-.39052429-.3905243-.39052429-1.0236893 0-1.4142136l11.29289322-11.2928932"></path>
                                    </g>
                                </svg>
                            </span>
                        </button>

                        @livewire('interna.interna-encabezado', ['listingId' => $content['id_listings'] ])

                    </div>
                </nav>

                <div class="modal_block">
                    <div class="content_hidden-galls">
                        <div class="grid-cont" id="gallery-container">
                            @foreach ( $content['photos'] as $element)
                                <div class="_link-galls grid-item">
                                    <button type="button" class="_galls-list">
                                        <img class="gallery__img" src="{{ URL::asset('storage/photos-listing/') .'/'. \App\Models\Listing\Listings::ListingFile( $content['id_listings'] ) .'/'. $element['name'] }}">
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>