<div class="modal_content-anhost">
    <div class="close">
        <span>X</span>
    </div>

    <div class="_wpwi48 mr-b30">
        <div class="fx fx-fd-c gp18">
            <h2 class="h2_publish">Now double-check these details</h2>
            <p class="_txtec">Help guests know what to expect</p>
        </div>
    </div>

    <form wire:submit.prevent="submitWithArea">
        <div class="modal_block">
            <div class="content_hidden-anhost">
                <div class="_wpwi48">
                    <div class="_brpd180">
                        <div class="_ylytgbo fx fx-ai-fs fx-jc-sb gp18">
                            <ul class="_txtec16">
                                @foreach ( $contentTitle as $element )
                                    <li class="_1rgec1">{{ $element['title'] }}{{ $element['count'] != 0 ? ' ' . $element['count']  : '' }}</li>
                                @endforeach
                            </ul>

                            <button type="button" class="_txtdecblu16 clickEditRoomsAndSpaces" style="white-space: nowrap;">Edit rooms and spaces</button>
                        </div>
                    </div>


                    @foreach ($contentAreas as $element)
                        <div class="contCheckDetails hr">
                            <button type="button" class="_bkpd50 wh-p100 js_showDetailsCheck">
                                <div class="fx fx-ai-c fx-jc-sb gp21">
                                    <div class="_txtbold3a24">{{ $element }}</div>

                                    <div class="fx iconFlecha">
                                        <svg viewBox="0 0 18 18" style="height: 1em; width: 1em; display: block; fill: currentcolor;">
                                            <path d="m16.29 4.3a1 1 0 1 1 1.41 1.42l-8 8a1 1 0 0 1 -1.41 0l-8-8a1 1 0 1 1 1.41-1.42l7.29 7.29z" fill-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                            </button>

                            <div class="cont_details_hide mr-t14">
                                <div class="fx fx-fd-c gp30">
                                    <div>
                                        <div class="fx fx-ai-c fx-jc-sb gp21">
                                            @if ( count( $inputFile[ $loop->index ] ) != 0 )
                                                <span></span>
                                            @else
                                                <span class="_txteh">No photos</span>
                                            @endif

                                            <button type="button" class="vvo-btn-select scale js_popupAddPhotos">Add photos</button>
                                        </div>

                                        @if ( count( $inputFile[ $loop->index ] ) != 0 )
                                            <div class="mlmrmin mr-t8">
                                                <div class="plprmhpwf">
                                                    <div class="mr-t8 mr-b8">
                                                        <div class="bcbpw">
                                                            <div class="dibvabhwmhbpbr">
                                                                <img src="{{ URL::asset('assets/img/card/b1.png') }}" class="whofva">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="plprmhpwf">
                                                    <div class="mr-t8 mr-b8">
                                                        <div class="bcbpw">
                                                            <div class="dibvabhwmhbpbr">
                                                                <img src="{{ URL::asset('assets/img/card/b2.png') }}" class="whofva">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                    <div>
                                        <label class="block-lb fx-ai-fs">
                                            <input type="checkbox" name="inputShared.{{$loop->index}}" wire:model="inputShared.{{$loop->index}}">
                                            <div class="before_check">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                                    <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </div>

                                            <div class="fx fx-fd-c gp8">
                                                <h4 class="_txteh">Shared with others</h4>
                                                <p class="_txtec">Guests might share this space with me, other guests, or someone else</p>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="fx fx-fd-c gp8">
                                        <div class="fx fx-ai-c fx-jc-sb fx-fw-w gp18">
                                            <span class="_txteh">Sleeping arrangement</span>
                                            <button type="button" class="_txtdecblu16 clickAddSleepArrang">Add</button>
                                        </div>

                                        <ul class="_txtec">
                                            <li class="_1rgec">Add sleeping arrangements</li>
                                        </ul>
                                    </div>

                                    <div>
                                        <label class="block-lb fx-ai-fs">
                                            <input type="checkbox" name="inputPrivate.{{$loop->index}}" wire:model="inputPrivate.{{$loop->index}}">
                                            <div class="before_check">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                                    <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                                </svg>
                                            </div>

                                            <div class="fx fx-fd-c gp8">
                                                <h4 class="_txteh">Has private attached bathroom</h4>
                                                <p class="_txtec">Attached or en suite bathrooms have a private entrance inside the bedroom</p>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

             {{--        <div class="contCheckDetails hr">
                        <button type="button" class="_bkpd50 wh-p100 js_showDetailsCheck">
                            <div class="fx fx-ai-c fx-jc-sb gp21">
                                <div class="_txtbold3a24">Full bathroom</div>

                                <div class="fx iconFlecha">
                                    <svg viewBox="0 0 18 18" style="height: 1em; width: 1em; display: block; fill: currentcolor;">
                                        <path d="m16.29 4.3a1 1 0 1 1 1.41 1.42l-8 8a1 1 0 0 1 -1.41 0l-8-8a1 1 0 1 1 1.41-1.42l7.29 7.29z" fill-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </button>

                        <div class="cont_details_hide mr-t14">
                            <div class="fx fx-fd-c gp30">
                                <div>
                                    <div class="fx fx-ai-c fx-jc-sb gp21">
                                        <span class="_txteh">No photos</span>

                                        <button type="button" class="vvo-btn-select scale js_popupAddPhotos">Add photos</button>
                                    </div>
                                </div>

                                <div>
                                    <label class="block-lb fx-ai-fs">
                                        <input type="checkbox" name="">
                                        <div class="before_check">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                                <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                            </svg>
                                        </div>

                                        <div class="fx fx-fd-c gp8">
                                            <h4 class="_txteh">Shared with others</h4>
                                            <p class="_txtec">Guests might share this space with me, other guests, or someone else</p>
                                        </div>
                                    </label>
                                </div>

                                <div class="fx fx-fd-c gp8">
                                    <div class="fx fx-ai-c fx-jc-sb fx-fw-w gp18">
                                        <span class="_txteh">Sleeping arrangement</span>
                                        <button type="button" class="_txtdecblu16 clickAddSleepArrang">Add</button>
                                    </div>

                                    <ul class="_txtec">
                                        <li class="_1rgec">Add sleeping arrangements</li>
                                    </ul>
                                </div>

                                <div>
                                    <label class="block-lb fx-ai-fs">
                                        <input type="checkbox" name="">
                                        <div class="before_check">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                                <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                            </svg>
                                        </div>

                                        <div class="fx fx-fd-c gp8">
                                            <h4 class="_txteh">Has private attached bathroom</h4>
                                            <p class="_txtec">Attached or en suite bathrooms have a private entrance inside the bedroom</p>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>

        <div class="_zjunba">
            <button type="button" class="_fpnigw0 click_cancel_mdls">Cancel</button>

            <button type="submit" class="btn-celest">Done</button>
        </div>
    </form>

</div>