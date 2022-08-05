<div class="show_form_input">
    <div class="_grid_photos5" style="max-width: 100%;">
            @foreach ( $inputPhotos as $key => $element)
                @if ( $loop->iteration === 1 )
                    <div class="_show_modal-photos">
                        <div class="_menu-all_photo click_cover">
                            <div class="_menu-options-items _shadow-black3-6">
                                <ul>
                                    <li>
                                        <div class="_b-flex" wire:click="returnDown('{{ $key }}')">
                                            <i class="far fa-arrow-alt-circle-down _i-gris18"></i>
                                            <div class="_txtec">Move backward</div>
                                        </div>
                                    </li>
                                </ul>

                                <ul>
                                    <li>
                                        <div class="_b-flex" wire:click="returnDelete('{{ $key }}')">
                                            <i class="far fa-trash-alt _i-gris18"></i>
                                            <div class="_txtec">Delete</div>
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

                            <img src="{{ URL::asset('storage/uploadListing/') }}/{{ $element }}" alt="">
                        </div>
                    </div>
                @endif

                @if ( $loop->iteration >= 2 && $loop->iteration <= $loop->count - 1)
                    <div class="_show_modal-photos">
                        <div class="_menu-all_photo click_general">
                            <div class="_menu-options-items _shadow-black3-6">
                                <ul>
                                    <li>
                                        <div class="_b-flex" wire:click="returnUp('{{ $key }}')">
                                            <i class="far fa-arrow-alt-circle-up _i-gris18"></i>
                                            <div class="_txtec">Move forward</div>
                                        </div>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <div class="_b-flex" wire:click="returnDown('{{ $key }}')">
                                            <i class="far fa-arrow-alt-circle-down _i-gris18"></i>
                                            <div class="_txtec">Move backward</div>
                                        </div>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <div class="_b-flex" wire:click="returnCover('{{ $key }}')">
                                            <i class="far fa-image _i-gris18"></i>
                                            <div class="_txtec">Make Cover photo</div>
                                        </div>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <div class="_b-flex" wire:click="returnDelete('{{ $key }}')">
                                            <i class="far fa-trash-alt _i-gris18"></i>
                                            <div class="_txtec">Delete</div>
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

                            <img src="{{ URL::asset('storage/uploadListing/') }}/{{ $element }}" alt="">
                        </div>
                    </div>
                @endif

                @if (  $loop->iteration == $loop->count )
                    <div class="_show_modal-photos">
                        <div class="_menu-all_photo click_general">
                            <div class="_menu-options-items _shadow-black3-6">
                                <ul>
                                    <li>
                                        <div class="_b-flex" wire:click="returnUp('{{ $key }}')">
                                            <i class="far fa-arrow-alt-circle-up _i-gris18"></i>
                                            <div class="_txtec">Move forward</div>
                                        </div>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <div class="_b-flex" wire:click="returnCover('{{ $key }}')">
                                            <i class="far fa-image _i-gris18"></i>
                                            <div class="_txtec">Make Cover photo</div>
                                        </div>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <div class="_b-flex" wire:click="returnDelete('{{ $key }}')">
                                            <i class="far fa-trash-alt _i-gris18"></i>
                                            <div class="_txtec">Delete</div>
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

                            <img src="{{ URL::asset('storage/uploadListing/') }}/{{ $element }}" alt="">
                        </div>
                    </div>
                @endif
            @endforeach

    </div>
    <br>
    <div class="_show_modal-photos" style="margin-top: 60px;" wire:ignore>
        <div class="content_add_photos" style="border: 2px dashed #D1D1D1;">
            <form wire:submit.prevent="updateProfile">
                <x-filepond 
                    wire:model="images" 
                    multiple
                    allowImagePreview
                    imagePreviewMaxHeight="200"
                    allowFileTypeValidation
                    acceptedFileTypes="['image/png', 'image/jpg', 'image/jpeg']"
                    allowFileSizeValidation
                    maxFileSize="2mb"
                    maxFiles="{{ 15 - count( $inputPhotos ) }}"
                />

                @error('images')
                    <div  class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 25px;">
                    <button type="submit" class="btn-celest">Upload File</button>
                </div>
            </form>
        </div>
    </div>

    <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 25px;">
        <div class="_btnsmleft click_cancel_listing" wire:click="reloadInputs">
            <span>Cancel</span>
        </div>
        <button wire:click="SavePhotos" class="btn-celest">Save</button>
    </div>
</div>