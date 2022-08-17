<div class="content-gallery skeleton">
    <div class="_cgprel">
        <div class="_cgprelleft">
            <div class="_whg">
                <button aria-label="Mostrar todas las fotos" class="_block-gallery-mg hovr_gllrybef show_all-photos-interna skeleton">
                    <div class="_link-img">
                        <div class="_bgcont">
                            <img class="_img-wh _img-modal" src="{{ URL::asset('storage/photos-listing/') .'/'. \App\Models\Listing\Listings::ListingFile( $content['id_listings'] ) .'/'. $content['photos'][0]['name'] }}">
                        </div>
                    </div>
                </button>

                <div class="block_all-photos fx">
                    <buttton type="button" class="btn-red show_all-photos-interna">
                        <span class="fx fx-ai-c gp8">
                            <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="height: 16px; width: 16px; fill: currentcolor;">
                                <path d="m3 11.5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3zm5 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3zm5 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3zm-10-5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3zm5 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3zm5 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3zm-10-5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3zm5 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3zm5 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3z" fill-rule="evenodd"></path>
                            </svg>
                            Show all photos
                        </span>
                    </buttton>
                </div>
            </div>
        </div>

        <div class="_cgprelright">
            <div class="scroll_n">
                <div class="_whg _w">
                    @foreach ($content['photos'] as $element)
                        <div class="_pbkgallery @if ( $loop->first ) active @endif skeleton">
                            <div class="_whg">
                                <div class="_block-gallery-mg">
                                    <div class="_link-img">
                                        <div class="_bgcont">
                                            <img class="_img-wh" src="{{ URL::asset('storage/photos-listing/') .'/'. \App\Models\Listing\Listings::ListingFile( $content['id_listings'] ) .'/'. $element['name'] }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="_cbtnbottom">
                <button type="button" class="_sbtn">
                    <span class="_c9ajsd" style="font-size: 16px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8.378" height="14.652" viewBox="0 0 8.378 14.652">
                            <path d="M13.516,17.1l5.54-5.545a1.043,1.043,0,0,1,1.479,0,1.056,1.056,0,0,1,0,1.483l-6.278,6.282a1.045,1.045,0,0,1-1.444.031L6.493,13.042a1.047,1.047,0,0,1,1.479-1.483Z" transform="translate(-11.246 20.84) rotate(-90)" fill="#00b5dd"></path>
                        </svg>
                    </span>
                </button>
            </div>
        </div>
    </div>
</div>