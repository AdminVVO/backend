<div class="_ctoverlay">
    <div class="content_right" style="padding-top: 49px;">
        <div class="content_hidden cs-next">
            <div class="content_mr c-photo-drag" style="max-width: 792px;">
                <div class="content_step7">
                    <h2 class="h2_publish">Taran! How does it look?</h2>
                    <div class="drag_photos" style="padding: 12px 33px 31px !important;">
                        <div style="margin-bottom: 32px;">
                            <input type="file" class="front_face" id="fileShow" style="display: none;" multiple wire:model="inputNew" accept="image/png, image/jpg, image/jpeg" >
                            <label for="fileShow" class="btn-celest btns-modals fx-ai-c">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.942" height="16.942" viewBox="0 0 16.942 16.942">
                                    <path d="M0,0V2.118H16.942V0ZM8.471,4.236,2.118,10.589H6.353v6.353h4.236V10.589h4.236Z" fill="#fff"/>
                                </svg>
                                Upload files 
                            </label>
                        </div>

                        <div class="_grid_photos5" wire:ignore.self>
                            @foreach ($inputPhotos as $key => $element)
                                @if ( $loop->first )
                                    <div class="_show_modal-photos">
                                        <div class="_menu-all_photo click_cover">
                                            <div class="_menu-options-items _shadow-black3-6">
                                                <ul>
                                                    <li>
                                                        <div class="_b-flex" wire:click="changeDown('{{ $key }}')">
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

                                            <img src="{{ URL::asset('storage/photos-pre-listing/') }}/{{ $element }}" alt="">
                                        </div>
                                    </div>
                                @endif

                                @if ( $loop->iteration >= 2 )
                                    <div class="_show_modal-photos">
                                        <div class="_menu-all_photo click_general">
                                            <div class="_menu-options-items _shadow-black3-6">
                                                <ul>
                                                    <li>
                                                        <div class="_b-flex" wire:click="changeUp('{{ $key }}')">
                                                            <i class="far fa-arrow-alt-circle-up _i-gris18"></i>
                                                            <div class="_txtec">Move forward</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul>
                                                    <li>
                                                        <div class="_b-flex" wire:click="changeDown('{{ $key }}')">
                                                            <i class="far fa-arrow-alt-circle-down _i-gris18"></i>
                                                            <div class="_txtec">Move backward</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul>
                                                    <li>
                                                        <div class="_b-flex" wire:click="changeCover('{{ $key }}')">
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

                                            <img src="{{ URL::asset('storage/photos-pre-listing/') }}/{{ $element }}" alt="">
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
</div>