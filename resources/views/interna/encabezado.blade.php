<div class="content-des_internationl">
    <div class="fx fx-ai-c" style="flex-wrap: wrap;">
        <span class="_1y9gwt75 _1rgec1">
            <span class="_9qqdp4">
                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="fill: #FF5A5F;">
                    <path d="M15.094 1.579l-4.124 8.885-9.86 1.27a1 1 0 0 0-.542 1.736l7.293 6.565-1.965 9.852a1 1 0 0 0 1.483 1.061L16 25.951l8.625 4.997a1 1 0 0 0 1.482-1.06l-1.965-9.853 7.293-6.565a1 1 0 0 0-.541-1.735l-9.86-1.271-4.127-8.885a1 1 0 0 0-1.814 0z" fill-rule="evenodd"></path>
                </svg>
            </span>
            
            <span class="num-start">4.89 ·</span>
            <button type="button" class="num-total-r alants">(57 reviews)</button>
        </span>

        <div class="_1rgec1">
            <button type="button" class="text-location_check">{{ ucwords( strtolower( $content['country'] .', '. $content['state'] .', '. $content['city'] ) ) }}</button>
        </div>
    </div>

    <div class="_15xhfd45">
        <div class="_fcreverse fx-jc-sb">
            <div class="content-publish_icon">
                <button type="button" class="_dmptwffb share_icon btnShareIconInterna">
                    <svg xmlns="http://www.w3.org/2000/svg" width="29.012" height="24.549" viewBox="0 0 29.012 24.549" class="i">
                        <g transform="translate(-3.496 -5.749)" fill="rgba(222,222,222,0.38)" stroke="#ff5a5f" stroke-width="2">
                            <path d="M31.268,16.2,21.347,6.919a.507.507,0,0,0-.394-.169c-.309.014-.7.232-.7.563v4.655a.3.3,0,0,1-.253.288c-9.865,1.512-14.02,8.895-15.49,16.559-.056.3.352.584.541.345,3.6-4.535,7.98-7.5,14.906-7.552a.348.348,0,0,1,.3.337v4.57a.6.6,0,0,0,1.02.373l9.991-9.443a.776.776,0,0,0,.246-.591A.942.942,0,0,0,31.268,16.2Z"/>
                        </g>
                    </svg>
                    <span class="icon_share">Share</span>
                </button>

                @if ( \App\Models\Wishlists::where(['listing_id' => $content['id_listings'] ,'user_id' => Auth::id() ])->exists() )
                    <button type="button" class="_dmptwffb favorite_icon">
                @else
                    <button type="button" class="_dmptwffb favorite_icon showFavorite">
                @endif
                    <svg xmlns="http://www.w3.org/2000/svg" width="27.003" height="23.878" viewBox="0 0 27.003 23.878" class="i">
                        <g transform="translate(1.002 -1.245)" fill="rgba(222,222,222,0.38)" stroke="#ff5a5f" stroke-width="2">
                            <path d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z"/>
                        </g>
                    </svg>
                    
                    <span class="icon_favorite">Favorite</span>
                </button>
            </div>
        </div>
    </div>
</div>