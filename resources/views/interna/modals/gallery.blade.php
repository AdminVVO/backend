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

                        <div class="content-publish_icon">
                            <button type="button" class="_dmptwffb share_icon btnShareIconInterna">
                                <svg xmlns="http://www.w3.org/2000/svg" width="29.012" height="24.549" viewBox="0 0 29.012 24.549" class="i">
                                    <g transform="translate(-3.496 -5.749)" fill="rgba(222,222,222,0.38)" stroke="#ff5a5f" stroke-width="2">
                                        <path d="M31.268,16.2,21.347,6.919a.507.507,0,0,0-.394-.169c-.309.014-.7.232-.7.563v4.655a.3.3,0,0,1-.253.288c-9.865,1.512-14.02,8.895-15.49,16.559-.056.3.352.584.541.345,3.6-4.535,7.98-7.5,14.906-7.552a.348.348,0,0,1,.3.337v4.57a.6.6,0,0,0,1.02.373l9.991-9.443a.776.776,0,0,0,.246-.591A.942.942,0,0,0,31.268,16.2Z"/>
                                    </g>
                                </svg>
                                <span class="icon_share">Share</span>
                            </button>

                            <button type="button" class="_dmptwffb favorite_icon showFavorite">
                                <svg xmlns="http://www.w3.org/2000/svg" width="27.003" height="23.878" viewBox="0 0 27.003 23.878" class="i">
                                    <g transform="translate(1.002 -1.245)" fill="rgba(222,222,222,0.38)" stroke="#ff5a5f" stroke-width="2">
                                        <path d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z"/>
                                    </g>
                                </svg>
                                
                                <span class="icon_favorite">Favorite</span>
                            </button>
                        </div>
                    </div>
                </nav>

                <div class="modal_block">
                    <div class="content_hidden-galls">
                        <div class="grid-cont" id="gallery-container">
                            @foreach ( $content['photos'] as $element)
                                <div class="_link-galls grid-item">
                                    <button type="button" class="_galls-list">
                                        <img src="{{ URL::asset('storage/uploadListing/' . $element) }}" class="gallery__img"></img>
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