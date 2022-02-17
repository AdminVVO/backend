<div class="_ctoverlay">
    <div class="content_right">
        <div class="content_hidden cs-next">
            <div class="content_mr">
                <div class="content_step">
                    <h2 class="h2_publish" style="margin-bottom: 31px;">Which of these best describes your place?</h2>
                    <div class="_ps-abs">
                        <div class="scroll">
                            <div class="_grid">
                                <label class="_width fx">
                                    <input type="radio" name="boutiquenext" wire:model.defer="description" value="Hotel">
                                    <div class="_rect-b">
                                        <div class="_img-f">
                                            <img src="{{ URL::asset('assets/img/card/next42.jpg') }}" alt="">
                                        </div>
                                        <div class="_block">
                                            <h3 class="_txteh">Hotel</h3>
                                            <p class="total_local">A converted space in a building used for grain, livestock, or farming.</p>
                                        </div>
                                    </div>
                                </label>

                                <label class="_width fx">
                                    <input type="radio" name="boutiquenext" wire:model.defer="description" value="Boat">
                                    <div class="_rect-b">
                                        <div class="_img-f">
                                            <img src="{{ URL::asset('assets/img/card/next43.jpg') }}" alt="">
                                        </div>
                                        <div class="_block">
                                            <h3 class="_txteh">Boat</h3>
                                            <p class="total_local">A boat, sailboat, or yacht moored during guest visits. Not a houseboat.</p>
                                        </div>
                                    </div>
                                </label>

                                <label class="_width fx">
                                    <input type="radio" name="boutiquenext" wire:model.defer="description" value="Resort">
                                    <div class="_rect-b">
                                        <div class="_img-f">
                                            <img src="{{ URL::asset('assets/img/card/next44.jpg') }}" alt="">
                                        </div>
                                        <div class="_block">
                                            <h3 class="_txteh">Resort</h3>
                                            <p class="total_local">A converted multi-passenger vehicle with a creatively reimagined interior.</p>
                                        </div>
                                    </div>
                                </label>

                                <label class="_width fx">
                                    <input type="radio" name="boutiquenext" wire:model.defer="description" value="Camper/RV">
                                    <div class="_rect-b">
                                        <div class="_img-f">
                                            <img src="{{ URL::asset('assets/img/card/next45.jpg') }}" alt="">
                                        </div>
                                        <div class="_block">
                                            <h3 class="_txteh">Camper/RV</h3>
                                            <p class="total_local">A motor home or camping trailer that's half-home and half-vehicle.</p>
                                        </div>
                                    </div>
                                </label>

                                <label class="_width fx">
                                    <input type="radio" name="boutiquenext" wire:model.defer="description" value="Treehouse">
                                    <div class="_rect-b">
                                        <div class="_img-f">
                                            <img src="{{ URL::asset('assets/img/card/next46.jpg') }}" alt="">
                                        </div>
                                        <div class="_block">
                                            <h3 class="_txteh">Treehouse</h3>
                                            <p class="total_local">A place to stay built into the trunk or branches of a tree.</p>
                                        </div>
                                    </div>
                                </label>

                                <label class="_width fx">
                                    <input type="radio" name="boutiquenext" wire:model.defer="description" value="Campsite">
                                    <div class="_rect-b">
                                        <div class="_img-f">
                                            <img src="{{ URL::asset('assets/img/card/next47.jpg') }}" alt="">
                                        </div>
                                        <div class="_block">
                                            <h3 class="_txteh">Campsite</h3>
                                            <p class="total_local">An area of land where guests can set up a tent, yurt, RV, or tiny house.</p>
                                        </div>
                                    </div>
                                </label>

                                <label class="_width fx">
                                    <input type="radio" name="boutiquenext" wire:model.defer="description" value="Castle">
                                    <div class="_rect-b">
                                        <div class="_img-f">
                                            <img src="{{ URL::asset('assets/img/card/next48.jpg') }}" alt="">
                                        </div>
                                        <div class="_block">
                                            <h3 class="_txteh">Castle</h3>
                                            <p class="total_local">A majestic, possibly historical building that may have towers and moats.</p>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <button class="btn">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14.652" height="8.378" viewBox="0 0 14.652 8.378">
                                    <path d="M13.516,17.1l5.54-5.545a1.043,1.043,0,0,1,1.479,0,1.056,1.056,0,0,1,0,1.483l-6.278,6.282a1.045,1.045,0,0,1-1.444.031L6.493,13.042a1.047,1.047,0,0,1,1.479-1.483Z" transform="translate(-6.188 -11.246)" fill="#00b5dd"/>
                                </svg>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="_block-jsb">
        <div class="_btnsmleft" wire:click="returnBack('host')">
            <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                <path d="M5.294,1.824l4,4.005a.753.753,0,0,0,1.068,0,.763.763,0,0,0,0-1.071L5.83.22A.755.755,0,0,0,4.787.2L.221,4.755A.756.756,0,0,0,1.289,5.826Z" transform="translate(0 10.584) rotate(-90)" fill="#333"/>
            </svg>
            <span>Back</span>
        </div>
        <button type="button" class="btn-celest btns-modals" wire:click="next">Next</button>
    </div>
</div>