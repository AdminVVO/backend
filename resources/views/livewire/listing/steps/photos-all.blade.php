{{-- <div class="_ctoverlay">
    <div class="content_right">
        <div class="content_hidden cs-next">
            <div class="content_mr c-photo-drag" style="max-width: 792px;">
                <div class="content_step7">
                    <h2 class="h2_publish" style="margin-bottom: 31px;">Next, let's add some photos of your place</h2>
                    <div class="drag_photos">
                        <div class="_grid_photos5">
                            <div class="_w1">
                                @foreach ($collecPhotos as $element)
                                    @if ( $loop->iteration <= 2 )
                                        <div class="_w1-add_photos content_add_photos">
                                            @if ( $loop->iteration == 1 )
                                                <button class="bg-btn_white add_cover_photo">Cover Photo</button>
                                            @endif
                                            <div class="show_cover_photo">
                                                <button class="bg-btn_white add_options_photo {{ $loop->iteration == 1 ? 'click_cover_photos' : 'click_options_photos' }}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="5" viewBox="0 0 21 5">
                                                        <g transform="translate(-1511 -417)">
                                                            <circle id="Elipse_70" data-name="Elipse 70" cx="2.5" cy="2.5" r="2.5" transform="translate(1511 417)" fill="#7d7d7d"/>
                                                            <circle id="Elipse_71" data-name="Elipse 71" cx="2.5" cy="2.5" r="2.5" transform="translate(1519 417)" fill="#7d7d7d"/>
                                                            <circle id="Elipse_72" data-name="Elipse 72" cx="2.5" cy="2.5" r="2.5" transform="translate(1527 417)" fill="#7d7d7d"/>
                                                        </g>
                                                    </svg>
                                                </button>

                                                @if ( $loop->iteration == 1 )
                                                    <div class="_menu-all_photo click_cover">
                                                        <div class="_menu-options-items _shadow-black3-6">
                                                            <ul>
                                                                <li>
                                                                    <div class="_b-flex" wire:click="changeDown('{{ $element['id'] }}')">
                                                                        <i class="far fa-arrow-alt-circle-down _i-gris18"></i>
                                                                        <div class="_txtec">Move backward</div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endif

                                                @if ( $loop->iteration == 2 )
                                                    <div class="_menu-all_photo click_general">
                                                        <div class="_menu-options-items _shadow-black3-6">
                                                            <ul>
                                                                <li>
                                                                    <div class="_b-flex" wire:click="changeUp('{{ $element['id'] }}')">
                                                                        <i class="far fa-arrow-alt-circle-up _i-gris18"></i>
                                                                        <div class="_txtec">Move forward</div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <ul>
                                                                <li>
                                                                    <div class="_b-flex" wire:click="changeDown('{{ $element['id'] }}')">
                                                                        <i class="far fa-arrow-alt-circle-down _i-gris18"></i>
                                                                        <div class="_txtec">Move backward</div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <ul>
                                                                <li>
                                                                    <div class="_b-flex" wire:click="changeCover('{{ $element['id'] }}')">
                                                                        <i class="far fa-image _i-gris18"></i>
                                                                        <div class="_txtec">Make Cover photo</div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>

                                            <img src="{{ URL::asset('storage/tempFilepond/') }}/{{ $element['url'] }}" alt="">
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                            <div class="_w2">
                                @foreach ($collecPhotos as $element)
                                    @if ( $loop->iteration >= 3 )
                                        <div class="_w2-add_photos content_add_photos">
                                            <div class="show_cover_photo">
                                                <button class="bg-btn_white add_options_photo click_options_photos">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="5" viewBox="0 0 21 5">
                                                        <g transform="translate(-1511 -417)">
                                                            <circle id="Elipse_70" data-name="Elipse 70" cx="2.5" cy="2.5" r="2.5" transform="translate(1511 417)" fill="#7d7d7d"/>
                                                            <circle id="Elipse_71" data-name="Elipse 71" cx="2.5" cy="2.5" r="2.5" transform="translate(1519 417)" fill="#7d7d7d"/>
                                                            <circle id="Elipse_72" data-name="Elipse 72" cx="2.5" cy="2.5" r="2.5" transform="translate(1527 417)" fill="#7d7d7d"/>
                                                        </g>
                                                    </svg>
                                                </button>

                                                <div class="_menu-all_photo click_general">
                                                    <div class="_menu-options-items _shadow-black3-6">
                                                        <ul>
                                                            <li>
                                                                <div class="_b-flex" wire:click="changeUp('{{ $element['id'] }}')">
                                                                    <i class="far fa-arrow-alt-circle-up _i-gris18"></i>
                                                                    <div class="_txtec">Move forward</div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        @if ( !$loop->last )
                                                            <ul>
                                                                <li>
                                                                    <div class="_b-flex" wire:click="changeDown('{{ $element['id'] }}')">
                                                                        <i class="far fa-arrow-alt-circle-down _i-gris18"></i>
                                                                        <div class="_txtec">Move backward</div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        @endif
                                                        <ul>
                                                            <li>
                                                                <div class="_b-flex" wire:click="changeCover('{{ $element['id'] }}')">
                                                                    <i class="far fa-image _i-gris18"></i>
                                                                    <div class="_txtec">Make Cover photo</div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <img src="{{ URL::asset('storage/tempFilepond/') }}/{{ $element['url'] }}" alt="">
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="_block-jsb">
        <div class="_btnsmleft" wire:click="returnBack('photos')">
            <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                <path d="M5.294,1.824l4,4.005a.753.753,0,0,0,1.068,0,.763.763,0,0,0,0-1.071L5.83.22A.755.755,0,0,0,4.787.2L.221,4.755A.756.756,0,0,0,1.289,5.826Z" transform="translate(0 10.584) rotate(-90)" fill="#333"/>
            </svg>
            <span>Back</span>
        </div>
        <button type="button" class="btn-celest btns-modals" wire:click="next">Next</button>
    </div>
</div> --}}

<div class="_ctoverlay">
    <div class="content_right" style="padding-top: 49px;">
        <div class="content_hidden cs-next">
            <div class="content_mr c-photo-drag" style="max-width: 792px;">
                <div class="content_step7">
                    <h2 class="h2_publish" style="margin-bottom: 31px;">Next, let's add some photos of your place</h2>
                    <div class="drag_photos">

                        <div class="_grid_photos5">
                            @foreach ($collecPhotos as $element)
                                @if ( $loop->first )
                                    <div class="_show_modal-photos">
                                        <div class="_menu-all_photo click_cover">
                                            <div class="_menu-options-items _shadow-black3-6">
                                                <ul>
                                                    <li>
                                                        <div class="_b-flex" wire:click="changeDown('{{ $element['id'] }}')">
                                                            <i class="far fa-arrow-alt-circle-down _i-gris18"></i>
                                                            <div class="_txtec">Move backward</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="content_add_photos">
                                            <button class="bg-btn_white add_cover_photo">Cover Photo</button>
                                            <div class="show_cover_photo">
                                                <button class="bg-btn_white add_options_photo click_cover_photos">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="5" viewBox="0 0 21 5">
                                                        <g transform="translate(-1511 -417)">
                                                            <circle id="Elipse_70" data-name="Elipse 70" cx="2.5" cy="2.5" r="2.5" transform="translate(1511 417)" fill="#7d7d7d"/>
                                                            <circle id="Elipse_71" data-name="Elipse 71" cx="2.5" cy="2.5" r="2.5" transform="translate(1519 417)" fill="#7d7d7d"/>
                                                            <circle id="Elipse_72" data-name="Elipse 72" cx="2.5" cy="2.5" r="2.5" transform="translate(1527 417)" fill="#7d7d7d"/>
                                                        </g>
                                                    </svg>
                                                </button>
                                            </div>

                                            <img src="{{ URL::asset('storage/tempFilepond/') }}/{{ $element['url'] }}" alt="">
                                        </div>
                                    </div>
                                @endif

                                @if ( $loop->iteration >= 2 )
                                    <div class="_show_modal-photos">
                                        <div class="_menu-all_photo click_general">
                                            <div class="_menu-options-items _shadow-black3-6">
                                                <ul>
                                                    <li>
                                                        <div class="_b-flex" wire:click="changeUp('{{ $element['id'] }}')">
                                                            <i class="far fa-arrow-alt-circle-up _i-gris18"></i>
                                                            <div class="_txtec">Move forward</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul>
                                                    <li>
                                                        <div class="_b-flex" wire:click="changeDown('{{ $element['id'] }}')">
                                                            <i class="far fa-arrow-alt-circle-down _i-gris18"></i>
                                                            <div class="_txtec">Move backward</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul>
                                                    <li>
                                                        <div class="_b-flex" wire:click="changeCover('{{ $element['id'] }}')">
                                                            <i class="far fa-image _i-gris18"></i>
                                                            <div class="_txtec">Make Cover photo</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="content_add_photos">
                                            <div class="show_cover_photo">
                                                <button class="bg-btn_white add_options_photo click_options_photos">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="5" viewBox="0 0 21 5">
                                                        <g transform="translate(-1511 -417)">
                                                            <circle id="Elipse_70" data-name="Elipse 70" cx="2.5" cy="2.5" r="2.5" transform="translate(1511 417)" fill="#7d7d7d"/>
                                                            <circle id="Elipse_71" data-name="Elipse 71" cx="2.5" cy="2.5" r="2.5" transform="translate(1519 417)" fill="#7d7d7d"/>
                                                            <circle id="Elipse_72" data-name="Elipse 72" cx="2.5" cy="2.5" r="2.5" transform="translate(1527 417)" fill="#7d7d7d"/>
                                                        </g>
                                                    </svg>
                                                </button>
                                            </div>

                                            <img src="{{ URL::asset('storage/tempFilepond/') }}/{{ $element['url'] }}" alt="">
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="_block-jsb">
        <div class="_btnsmleft" wire:click="returnBack('photos')">
            <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                <path d="M5.294,1.824l4,4.005a.753.753,0,0,0,1.068,0,.763.763,0,0,0,0-1.071L5.83.22A.755.755,0,0,0,4.787.2L.221,4.755A.756.756,0,0,0,1.289,5.826Z" transform="translate(0 10.584) rotate(-90)" fill="#333"/>
            </svg>
            <span>Back</span>
        </div>
        <button type="button" class="btn-celest btns-modals" wire:click="next">Next</button>
    </div>
</div>