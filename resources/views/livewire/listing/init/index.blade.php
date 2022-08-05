<section class="entero c_linsting">
    <div class="medio">
        <div class="fx fx-jc-sb fx-ai-c fx-fw-w" style="gap: 12px;">
            <h2 class="h2-guests">{{ $pagListing->total() }} listing</h2>

            <div class="showfx743 fx-ai-c gp8">
                <button type="button" class="vvo-btn-select scale js_popupSltNrlCont">Filters</button>

                <div>
                    <a href="https://platform.vivevacationsoutlet.com/listing/stepInit" class="circleMas" aria-label="Create new listing" target="_blank">
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="display: block;height: 16px;width: 16px; fill: currentColor;">
                            <path d="M18 4v10h10v4H18v10h-4V18H4v-4h10V4z"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <a href="{{ route('become-host') }}" class="btn-celest hideblock743"><span class="margin-right: 1px;">+</span> Create listing</a>
        </div>

        <div class="fx fx-jc-sb fx-ai-b _search">
            <div class="search_content">
                <div class="input-wrapper">
                    <i class="fas fa-search"></i>
                    <input type="search" placeholder="Search listings..." wire:model="inputSearch">
                </div>
            </div>

            <div class="fx _g">
                <div class="showblock1270 hideblock743">
                    <button type="button" class="vvo-btn-select scale js_popupSltNrlCont">Filters</button>
                </div>

                <div class="sltNrlCont btnSltNrl hideblock1270" wire:ignore.self>
                    <button type="button" class="vvo-btn-select scale js_submenuNrml {{ $inputContentRooms['inputBedrooms'] != 0 || $inputContentRooms['inputBeds'] != 0 || $inputContentRooms['inputBaths'] != 0 ? 'apply7D' : '' }}">
                        <div class="fx fx-ai-c gp14">
                            <span>Rooms and bed</span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="14.652" height="8.378" viewBox="0 0 14.652 8.378">
                                <path d="M13.516,17.1l5.54-5.545a1.043,1.043,0,0,1,1.479,0,1.056,1.056,0,0,1,0,1.483l-6.278,6.282a1.045,1.045,0,0,1-1.444.031L6.493,13.042a1.047,1.047,0,0,1,1.479-1.483Z" transform="translate(-6.188 -11.246)"></path>
                            </svg>
                        </div>
                    </button>

                    <div class="_bef-places submenuRoomsBed">
                        <div class="fxfbwhmhbrzi">
                            <div class="poyxwh">
                                <div class="cpd2btns min16 hr">
                                    <div class="fx fx-ai-b fx-jc-sb gp25">
                                        <div class="fx fx-fd-c gp7">
                                            <div class="_txtec16">Bedrooms</div>
                                        </div>

                                        <div class="_2btnsgris">
                                            <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputContentRooms['inputBedrooms'] == 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputBedrooms')">
                                                <span>
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                                        <path d="m2 16h28"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                            
                                            <span class="_txtec333">{{ $inputContentRooms['inputBedrooms'] }}</span>

                                            <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputContentRooms['inputBedrooms'] >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('inputBedrooms')">
                                                <span>
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                                        <path d="m2 16h28m-14-14v28"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="cpd2btns min16 hr">
                                    <div class="fx fx-ai-b fx-jc-sb gp25">
                                        <div class="fx fx-fd-c gp7">
                                            <div class="_txtec16">Beds</div>
                                        </div>

                                        <div class="_2btnsgris">
                                            <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputContentRooms['inputBeds'] == 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputBeds')">
                                                <span>
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                                        <path d="m2 16h28"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                            
                                            <span class="_txtec333">{{ $inputContentRooms['inputBeds'] }}</span>

                                            <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputContentRooms['inputBeds'] >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('inputBeds')">
                                                <span>
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                                        <path d="m2 16h28m-14-14v28"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="cpd2btns min16">
                                    <div class="fx fx-ai-b fx-jc-sb gp25">
                                        <div class="fx fx-fd-c gp7">
                                            <div class="_txtec16">Baths</div>
                                        </div>

                                        <div class="_2btnsgris">
                                            <button class="_btn" type="button" aria-label="disminuir valor" {{ $inputContentRooms['inputBaths'] == 0 ? 'disabled' : '' }} wire:click="buttonDecrease('inputBaths')">
                                                <span>
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                                        <path d="m2 16h28"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                            
                                            <span class="_txtec333">{{ $inputContentRooms['inputBaths'] }}</span>

                                            <button class="_btn" type="button" aria-label="aumentar valor" {{ $inputContentRooms['inputBaths'] >= 50 ? 'disabled' : '' }} wire:click="buttonIncrease('inputBaths')">
                                                <span>
                                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                                                        <path d="m2 16h28m-14-14v28"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="footer__btnmdl hrtop pd32">
                                <button type="button" class="_1e5q4qoz" {{ $inputContentRooms['inputBedrooms'] != 0 || $inputContentRooms['inputBeds'] != 0 || $inputContentRooms['inputBaths'] != 0 ? '' : 'disabled' }} wire:click="clear('inputRooms')">Clear</button>

                                <button type="button" class="btn-celest" {{ $inputContentRooms['inputBedrooms'] == 0 && $inputContentRooms['inputBeds'] == 0 && $inputContentRooms['inputBaths'] == 0 ? 'disabled' : '' }} wire:click="Apply('inputRooms')">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sltNrlCont btnSltNrl hideblock1270" wire:ignore.self>
                    <button type="button" class="vvo-btn-select scale js_submenuNrml {{ count( $inputAmenities ) != 0 ? 'apply7D' : '' }}">
                        <div class="fx fx-ai-c gp14">
                            <span>Amenities</span>
                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="14.652" height="8.378" viewBox="0 0 14.652 8.378">
                                <path d="M13.516,17.1l5.54-5.545a1.043,1.043,0,0,1,1.479,0,1.056,1.056,0,0,1,0,1.483l-6.278,6.282a1.045,1.045,0,0,1-1.444.031L6.493,13.042a1.047,1.047,0,0,1,1.479-1.483Z" transform="translate(-6.188 -11.246)"></path>
                            </svg>
                        </div>
                    </button>

                    <div class="_bef-places submenuAmenities">
                        <div class="fxfbwhmhbrzi">
                            <div class="p24oyxwh">
                                <div class="ca1cg8">
                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="amenitiesListing" wire:model.lazy="inputAmenities" value="kitchen">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">Kitchen</span>
                                        </label>
                                    </div>

                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="amenitiesListing" wire:model.lazy="inputAmenities" value="air_conditioning">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">Air conditioning</span>
                                        </label>
                                    </div>

                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="amenitiesListing" wire:model.lazy="inputAmenities" value="heating">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">Heating</span>
                                        </label>
                                    </div>

                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="amenitiesListing" wire:model.lazy="inputAmenities" value="washer">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">Washer</span>
                                        </label>
                                    </div>

                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="amenitiesListing" wire:model.lazy="inputAmenities" value="dryer">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">Dryer</span>
                                        </label>
                                    </div>

                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="amenitiesListing" wire:model.lazy="inputAmenities" value="indoor_fireplace">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">Indoor fireplace</span>
                                        </label>
                                    </div>

                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="amenitiesListing" wire:model.lazy="inputAmenities" value="wifi">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">Wifi</span>
                                        </label>
                                    </div>

                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="amenitiesListing" wire:model.lazy="inputAmenities" value="free_parking">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">Free parking on permises</span>
                                        </label>
                                    </div>

                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="amenitiesListing" wire:model.lazy="inputAmenities" value="gym">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">Gym</span>
                                        </label>
                                    </div>

                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="amenitiesListing" wire:model.lazy="inputAmenities" value="pool">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">Pool</span>
                                        </label>
                                    </div>

                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="amenitiesListing" wire:model.lazy="inputAmenities" value="hot_tub">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">Hot tub</span>
                                        </label>
                                    </div>

                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="amenitiesListing" wire:model.lazy="inputAmenities" value="bbq_grill">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">BBQ grill</span>
                                        </label>
                                    </div>

                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="amenitiesListing" wire:model.lazy="inputAmenities" value="patio">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">Patio or balcony</span>
                                        </label>
                                    </div>

                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="amenitiesListing" wire:model.lazy="inputAmenities" value="backyard">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">Garden or backyard</span>
                                        </label>
                                    </div>

                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="amenitiesListing" wire:model.lazy="inputAmenities" value="beachaccess">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">Beach access</span>
                                        </label>
                                    </div>

                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="amenitiesListing" wire:model.lazy="inputAmenities" value="lakeaccess">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">Lake access</span>
                                        </label>
                                    </div>

                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="amenitiesListing" wire:model.lazy="inputAmenities" value="ski-in/ski-out">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">Ski-in/Ski-out</span>
                                        </label>
                                    </div>

                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="amenitiesListing" wire:model.lazy="inputAmenities" value="waterfront">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">Waterfront</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="footer__btnmdl hrtop pd32">
                                <button type="button" class="_1e5q4qoz" {{ count( $inputAmenities ) != 0 ? '' : 'disabled' }} wire:click="clear('inputAmeni')">Clear</button>

                                <button type="button" class="btn-celest" {{ count( $inputAmenities ) != 0 ? '' : 'disabled' }} wire:click="Apply('inputAmeni')">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sltNrlCont btnSltNrl hideblock1270" wire:ignore.self>
                    <button type="button" class="vvo-btn-select scale js_submenuNrml {{ count( $inputStatus ) != 0 ? 'apply7D' : '' }}">
                        <div class="fx fx-ai-c gp14">
                            <span>Listing status</span>
                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="14.652" height="8.378" viewBox="0 0 14.652 8.378">
                                <path d="M13.516,17.1l5.54-5.545a1.043,1.043,0,0,1,1.479,0,1.056,1.056,0,0,1,0,1.483l-6.278,6.282a1.045,1.045,0,0,1-1.444.031L6.493,13.042a1.047,1.047,0,0,1,1.479-1.483Z" transform="translate(-6.188 -11.246)"></path>
                            </svg>
                        </div>
                    </button>

                    <div class="_bef-places submenuRoomsBed">
                        <div class="fxfbwhmhbrzi">
                            <div class="p24oyxwh">
                                <div>
                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="listingStatus" wire:model.lazy="inputStatus" value="listed">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">Listed</span>
                                        </label>
                                    </div>

                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="listingStatus" wire:model.lazy="inputStatus" value="unlisted">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">Unlisted</span>
                                        </label>
                                    </div>

                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="listingStatus" wire:model.lazy="inputStatus" value="snoozed">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">Snoozed</span>
                                        </label>
                                    </div>

                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="listingStatus" wire:model.lazy="inputStatus" value="in process">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">In progress</span>
                                        </label>
                                    </div>

                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="listingStatus" wire:model.lazy="inputStatus" value="deactivate">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">Deactivate</span>
                                        </label>
                                    </div>

                                </div>
                            </div>

                            <div class="footer__btnmdl hrtop pd32">
                                <button type="button" class="_1e5q4qoz" {{ count( $inputStatus ) != 0 ? '' : 'disabled' }} wire:click="clear('inputStats')">Clear</button>

                                <button type="button" class="btn-celest" {{ count( $inputStatus ) != 0 ? '' : 'disabled' }} wire:click="Apply('inputStats')">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sltNrlCont btnSltNrl hideblock1270" wire:ignore.self>
                    <button type="button" class="vvo-btn-select scale js_submenuNrml {{ count( $inputMore ) != 0 ? 'apply7D' : '' }}">
                        <div class="fx fx-ai-c gp14">
                            <span>More filters</span>
                            
                            <svg xmlns="http://www.w3.org/2000/svg" width="14.652" height="8.378" viewBox="0 0 14.652 8.378">
                                <path d="M13.516,17.1l5.54-5.545a1.043,1.043,0,0,1,1.479,0,1.056,1.056,0,0,1,0,1.483l-6.278,6.282a1.045,1.045,0,0,1-1.444.031L6.493,13.042a1.047,1.047,0,0,1,1.479-1.483Z" transform="translate(-6.188 -11.246)"></path>
                            </svg>
                        </div>
                    </button>

                    <div class="_bef-places submenuRoomsBed">
                        <div class="fxfbwhmhbrzi">
                            <div class="p24oyxwh">
                                <div>
                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="moreFilters" wire:model.lazy="inputMore" value="off">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">Instant Book off</span>
                                        </label>
                                    </div>

                                    <div class="mr-b16">
                                        <label class="block-lb-cuadro fx-ai-c">
                                            <input type="checkbox" name="moreFilters" wire:model.lazy="inputMore" value="updates">
                                            <span class="before_check_cuadro w24 dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.732" height="16.206" viewBox="0 0 21.732 16.206">
                                                    <path d="M7.381,20.465.318,13.4a1.087,1.087,0,0,1,0-1.537l1.537-1.537a1.087,1.087,0,0,1,1.537,0L8.15,15.086,18.341,4.9a1.087,1.087,0,0,1,1.537,0l1.537,1.537a1.087,1.087,0,0,1,0,1.537l-12.5,12.5A1.087,1.087,0,0,1,7.381,20.465Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </span>

                                            <span class="_txtec16">Listing updates required</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="footer__btnmdl hrtop pd32">
                                <button type="button" class="_1e5q4qoz" {{ count( $inputMore ) != 0 ? '' : 'disabled' }} wire:click="clear('inputMoref')">Clear</button>

                                <button type="button" class="btn-celest" {{ count( $inputMore ) != 0 ? '' : 'disabled' }} wire:click="Apply('inputMoref')">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                @if ( $inputClearAll )
                    <div class="mr-l16 flex-centrado">
                        <button type="button" class="txtunder__ics" wire:click="clearFiltr">Clear all</button>
                    </div>
                @endif

            </div>
        </div>

        <div class="_scrolltable">
            @if ( count( $pagListing ) == 0 )
                @if ( !$inputClearAll && $inputSearch == null )
                    <div class="listing_vacio">
                        <div class="wh-p100" style="max-width: 448px;">
                            <div class="not-h">Create a new listing</div>
                            <div class="_txtec mr-t8">You don't have any ads on Vvoutlet right now. Create a new listing to start receiving reservations. <a href="{{ route('become-host') }}" class="txtunder__ics">Create listing</a></div>
                        </div>
                    </div>
                @else
                    <div class="listing_vacio">
                        <div class="wh-p100" style="max-width: 448px;">
                            <div class="not-h">No results found</div>
                            <div class="_txtec mr-t8">We couldn't find any listings that match your filters and search terms. Try a different search or <button type="button" class="txtunder__ics" wire:click="clearFiltr">reset all filters.</button></div>
                        </div>
                    </div>
                @endif
            @else
                <div class="_width">
                    <table class="_tb-reservations">
                        <thead>
                            <tr>
                                <td>
                                    <button type="button" class="selected-2 {{ $orderBy['name'] === 'listing' ? 'active' : ''   }}" wire:click="sortBy('listing')">
                                        <div class="fx fx-ai-c gp8">
                                            <span class="_txtec">Listing</span>
                                            
                                            @if ( $orderBy['name'] === 'listing' )
                                                @if ( $orderBy['type'] === 'ASC' )
                                                    <i class="fas fa-sort-up"></i>
                                                @else
                                                    <i class="fas fa-sort-down"></i>
                                                @endif
                                            @else
                                                <i class="fad fa-sort"></i>
                                            @endif
                                        </div>
                                    </button>
                                </td>
                                
                                <td>
                                    <button type="button" class="selected-2 {{ $orderBy['name'] === 'status' ? 'active' : ''   }}" wire:click="sortBy('status')">
                                        <div class="fx fx-ai-c gp8">
                                            <span class="_txtec">Status</span>
                                            
                                            @if ( $orderBy['name'] === 'status' )
                                                @if ( $orderBy['type'] === 'ASC' )
                                                    <i class="fas fa-sort-up"></i>
                                                @else
                                                    <i class="fas fa-sort-down"></i>
                                                @endif
                                            @else
                                                <i class="fad fa-sort"></i>
                                            @endif
                                        </div>
                                    </button>
                                </td>

                                <td>
                                    <div class="_txtec">To do</div>
                                </td>

                                <td>
                                    <button type="button" class="selected-2 {{ $orderBy['name'] === 'instant' ? 'active' : ''   }}" wire:click="sortBy('instant')">
                                        <div class="fx fx-ai-c gp8">
                                            <span class="_txtec">Instant book</span>
                                            
                                            @if ( $orderBy['name'] === 'instant' )
                                                @if ( $orderBy['type'] === 'ASC' )
                                                    <i class="fas fa-sort-up"></i>
                                                @else
                                                    <i class="fas fa-sort-down"></i>
                                                @endif
                                            @else
                                                <i class="fad fa-sort"></i>
                                            @endif
                                        </div>
                                    </button>
                                </td>

                                <td>
                                    <button type="button" class="selected-2 {{ $orderBy['name'] === 'bedrooms' ? 'active' : ''   }}" wire:click="sortBy('bedrooms')">
                                        <div class="fx fx-ai-c gp8">
                                            <span class="_txtec">Bedrooms</span>
                                            
                                            @if ( $orderBy['name'] === 'bedrooms' )
                                                @if ( $orderBy['type'] === 'ASC' )
                                                    <i class="fas fa-sort-up"></i>
                                                @else
                                                    <i class="fas fa-sort-down"></i>
                                                @endif
                                            @else
                                                <i class="fad fa-sort"></i>
                                            @endif
                                        </div>
                                    </button>
                                </td>

                                <td>
                                    <button type="button" class="selected-2 {{ $orderBy['name'] === 'beds' ? 'active' : ''   }}" wire:click="sortBy('beds')">
                                        <div class="fx fx-ai-c gp8">
                                            <span class="_txtec">Beds</span>
                                            
                                            @if ( $orderBy['name'] === 'beds' )
                                                @if ( $orderBy['type'] === 'ASC' )
                                                    <i class="fas fa-sort-up"></i>
                                                @else
                                                    <i class="fas fa-sort-down"></i>
                                                @endif
                                            @else
                                                <i class="fad fa-sort"></i>
                                            @endif
                                        </div>
                                    </button>
                                </td>

                                <td>
                                    <button type="button" class="selected-2 {{ $orderBy['name'] === 'baths' ? 'active' : ''   }}" wire:click="sortBy('baths')">
                                        <div class="fx fx-ai-c gp8">
                                            <span class="_txtec">Baths</span>
                                            
                                            @if ( $orderBy['name'] === 'baths' )
                                                @if ( $orderBy['type'] === 'ASC' )
                                                    <i class="fas fa-sort-up"></i>
                                                @else
                                                    <i class="fas fa-sort-down"></i>
                                                @endif
                                            @else
                                                <i class="fad fa-sort"></i>
                                            @endif
                                        </div>
                                    </button>
                                </td>

                                <td>
                                    <button type="button" class="selected-2 {{ $orderBy['name'] === 'location' ? 'active' : ''   }}" wire:click="sortBy('location')">
                                        <div class="fx fx-ai-c gp8">
                                            <span class="_txtec">Location</span>
                                            
                                            @if ( $orderBy['name'] === 'location' )
                                                @if ( $orderBy['type'] === 'ASC' )
                                                    <i class="fas fa-sort-up"></i>
                                                @else
                                                    <i class="fas fa-sort-down"></i>
                                                @endif
                                            @else
                                                <i class="fad fa-sort"></i>
                                            @endif
                                        </div>
                                    </button>
                                </td>

                                <td>
                                    <button type="button" class="selected-2 {{ $orderBy['name'] === 'created' ? 'active' : ''   }}" wire:click="sortBy('created')">
                                        <div class="fx fx-ai-c gp8">
                                            <span class="_txtec">Last modified</span>

                                            @if ( $orderBy['name'] === 'created' )
                                                @if ( $orderBy['type'] === 'ASC' )
                                                    <i class="fas fa-sort-up"></i>
                                                @else
                                                    <i class="fas fa-sort-down"></i>
                                                @endif
                                            @else
                                                <i class="fad fa-sort"></i>
                                            @endif
                                        </div>
                                    </button>
                                </td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ( $pagListing as $element )
                                <tr>
                                    <td>
                                        <div class="checkbox-item checkbox-item_img">
                                            <a href="{{ route('details-listing', [ 'id' => $element['id_listings'] ]) }}">
                                                <div class="check_click" style="gap: 20px;">
                                                    <div class="_cont-l-img">
                                                        <div class="_ad-list_img">
                                                            <img src="{{ URL::asset('storage/photos-listing/') .'/'. \App\Models\Listing\Listings::ListingFile( $element['id_listings'] ) .'/'. $element['photos'][0]['name'] }}">
                                                        </div>
                                                    </div>

                                                    <div class="flex_text fx fx-fd-c">
                                                        <h3 class="_txteh txt_upper">{{ $element['title'] != '' ? $element['title'] : '-' }}</h3>
                                                        <p class="_txtec16">{{ $element['internal_title'] }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="fx fx-ai-c">
                                            @if ( $element['status'] ==='in process' ) <i class="far fa-hourglass _i-gris18"></i> @endif
                                            @if ( $element['status'] === 'listed' ) <i class="fas fa-circle _i-verde8"></i> @endif
                                            @if ( $element['status'] === 'snoozed' ) <i class="fas fa-moon _i-gris8"></i> @endif
                                            @if ( $element['status'] === 'unlisted' ) <i class="fas fa-circle _i-red8"></i> @endif
                                            @if ( $element['status'] === 'deactivate' ) <i class="fas fa-circle _i-griswhite8"></i> @endif
                                            <div class="_txtec _txtcapit" style="margin-left: 10px;">{{ $element['status'] }}</div>
                                        </div>
                                    </td>
                                    <td>
                                        <button class="btn-border">Finish</button>
                                    </td>
                                    <td>
                                        <div class="fx fx-ai-c">
                                            <i class="fas fa-check check_icon_off"></i>
                                            <div class="_txtec _txtcapit" style="margin-left: 7.7px;">{{ $element->ListingPolicies->instant_book }}</div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="_txtec">{{ $element->ListingPropertyRoomd->bedrooms }}</div>
                                    </td>
                                    <td>
                                        <div class="_txtec">{{ $element->ListingPropertyRoomd->bed }}</div>
                                    </td>
                                    <td>
                                        <div class="_txtec">{{ $element->ListingPropertyRoomd->bathrooms }}</div>
                                    </td>
                                    <td>
                                        <div class="_txtec _txtcapit">{{ $element->ListingLocation->city != '' ? $element->ListingLocation->city .', '. $element->ListingLocation->state : '-' }}</div>
                                    </td>
                                    <td>
                                        <div class="_txtec _txtcapit">{{ Carbon\Carbon::parse( $element['created_at'], 'UTC')->locale('en')->isoFormat('dddd, MMMM D, YYYY') }}</div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
        {{ $pagListing->links() }}
    </div>
</section>