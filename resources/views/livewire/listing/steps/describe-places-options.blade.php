<div class="_ctoverlay">
    <div class="content_right">
        <div class="content_hidden ch_step9">
            <div class="content_mr">
                <div class="content_step">
                    <h2 class="h2_publish" style="margin-bottom: 31px;">Now, let's describe your place</h2>

                    <div class="c_amenitles c_describe_place">
                        <h3 class="h2-guests" style="margin-bottom: 25px;">Choose up to 2 highlights</h3>

                        <div class="fx fx-fw-w fx-jc-c">
                            <label>
                                <input type="checkbox" wire:model.defer="describePlaceOptions" value="Peaceful">
                                <div class="_contmini-list">
                                    <div class="_img-fondo">
                                        <img src="{{ URL::asset('assets/img/card/d1.jpg') }}" alt="">
                                    </div>
                                    <div class="_block">
                                        <h3 class="_txteh">Peaceful</h3>
                                    </div>
                                </div>
                            </label>

                            <label>
                                <input type="checkbox" wire:model.defer="describePlaceOptions" value="Unique">
                                <div class="_contmini-list">
                                    <div class="_img-fondo">
                                        <img src="{{ URL::asset('assets/img/card/d2.jpg') }}" alt="">
                                    </div>
                                    <div class="_block">
                                        <h3 class="_txteh">Unique</h3>
                                    </div>
                                </div>
                            </label>

                            <label>
                                <input type="checkbox" wire:model.defer="describePlaceOptions" value="Family-friendly">
                                <div class="_contmini-list">
                                    <div class="_img-fondo">
                                        <img src="{{ URL::asset('assets/img/card/d3.jpg') }}" alt="">
                                    </div>
                                    <div class="_block">
                                        <h3 class="_txteh">Family-friendly</h3>
                                    </div>
                                </div>
                            </label>

                            <label>
                                <input type="checkbox" wire:model.defer="describePlaceOptions" value="Stylish">
                                <div class="_contmini-list">
                                    <div class="_img-fondo">
                                        <img src="{{ URL::asset('assets/img/card/d4.jpg') }}" alt="">
                                    </div>
                                    <div class="_block">
                                        <h3 class="_txteh">Stylish</h3>
                                    </div>
                                </div>
                            </label>

                            <label>
                                <input type="checkbox" wire:model.defer="describePlaceOptions" value="Central">
                                <div class="_contmini-list">
                                    <div class="_img-fondo">
                                        <img src="{{ URL::asset('assets/img/card/d5.jpg') }}" alt="">
                                    </div>
                                    <div class="_block">
                                        <h3 class="_txteh">Central</h3>
                                    </div>
                                </div>
                            </label>

                            <label>
                                <input type="checkbox" wire:model.defer="describePlaceOptions" value="Spacious">
                                <div class="_contmini-list">
                                    <div class="_img-fondo">
                                        <img src="{{ URL::asset('assets/img/card/d6.jpg') }}" alt="">
                                    </div>
                                    <div class="_block">
                                        <h3 class="_txteh">Spacious</h3>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="_block-jsb">
        <div class="_btnsmleft" wire:click="returnBack('describeToPlacesTitle')">
            <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                <path d="M5.294,1.824l4,4.005a.753.753,0,0,0,1.068,0,.763.763,0,0,0,0-1.071L5.83.22A.755.755,0,0,0,4.787.2L.221,4.755A.756.756,0,0,0,1.289,5.826Z" transform="translate(0 10.584) rotate(-90)" fill="#333"/>
            </svg>
            <span>Back</span>
        </div>
        <button type="button" class="btn-celest btns-modals" wire:click="next">Next</button>
    </div>
</div>