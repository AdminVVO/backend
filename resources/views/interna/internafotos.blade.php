<div class="content-gallery">
    <div class="_cgprel">
        <div class="_cgprelleft">
            <div class="_whg">
                <div class="_block-gallery-mg">
                    <a aria-label="Imagen del alojamiento 1, Mostrar todas las fotos" href="" class="_link-img">
                        <div class="_bgcont">
                            <img class="_img-wh _img-modal" alt="" src="{{ URL::asset('assets/img/thumbnails/'.$publicacion->imgUrl[0]) }}">
                        </div>
                    </a>
                </div>

                <div class="block_all-photos">
                    <a href="#" class="btn-show_all-photos">Show all photos</a>
                </div>
            </div>
        </div>

        <div class="_cgprelright">
            <div class="scroll_n">
                <div class="_whg _w">
                    <div class="_pbkgallery active">
                        <div class="_whg">
                            <div class="_block-gallery-mg">
                                <a class="_link-img">
                                    <div class="_bgcont">
                                        <img class="_img-wh" src="{{ URL::asset('assets/img/thumbnails/'.$publicacion->imgUrl[0]) }}" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @for($i=1; $i<sizeof($publicacion->imgUrl); $i++)
                        <div class="_pbkgallery">
                            <div class="_whg">
                                <div class="_block-gallery-mg">
                                    <a class="_link-img">
                                        <div class="_bgcont">
                                            <img class="_img-wh" src="{{ URL::asset('assets/img/thumbnails/'.$publicacion->imgUrl[$i]) }}" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endfor
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