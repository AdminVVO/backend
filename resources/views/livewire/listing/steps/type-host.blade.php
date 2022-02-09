<div class="_ctoverlay">
    <div class="content_right">
        <div class="content_hidden">
            <div class="content_mr">
                <div class="content_step">
                    <h2 class="h2_publish" style="margin-bottom: 31px;">What kind of place will you host?</h2>
                    <div class="_grid next">
                        <div class="active_apart">
                            <input type="radio" id="apartment" name="step" value="apartment" wire:model="host">

                            <label for="apartment" class="_rect-b">
                                <div class="_img-f">
                                    <img src="{{ URL::asset('assets/img/card/s1.jpg') }}" alt="">
                                </div>
                                <div class="_block">
                                    <h3 class="_txteh">Apartment</h3>
                                </div>
                            </label>
                        </div>

                        <div>
                            <input type="radio" id="house" name="step" value="house" wire:model="host">

                            <label for="house" class="_rect-b">
                                <div class="_img-f">
                                    <img src="{{ URL::asset('assets/img/card/s2.jpg') }}" alt="">
                                </div>
                                <div class="_block txt_center">
                                    <h3 class="_txteh">House</h3>
                                </div>
                            </label>
                        </div>

                        <div>
                            <input type="radio" id="secondary" name="step" value="secondary" wire:model="host">

                            <label for="secondary" class="_rect-b">
                                <div class="_img-f">
                                    <img src="{{ URL::asset('assets/img/card/s3.jpg') }}" alt="">
                                </div>
                                <div class="_block txt_center">
                                    <h3 class="_txteh">Secondary unit</h3>
                                </div>
                            </label>
                        </div>

                        <div>
                            <input type="radio" id="unique" name="step" value="unique" wire:model="host">

                            <label for="unique" class="_rect-b">
                                <div class="_img-f">
                                    <img src="{{ URL::asset('assets/img/card/s4.jpg') }}" alt="">
                                </div>
                                <div class="_block txt_center">
                                    <h3 class="_txteh">Unique space</h3>
                                </div>
                            </label>
                        </div>

                        <div>
                            <input type="radio" id="breakfast" name="step" value="breakfast" wire:model="host">

                            <label for="breakfast" class="_rect-b">
                                <div class="_img-f">
                                    <img src="{{ URL::asset('assets/img/card/s5.jpg') }}" alt="">
                                </div>
                                <div class="_block txt_center">
                                    <h3 class="_txteh">Bad and breakfast</h3>
                                </div>
                            </label>
                        </div>

                        <div>
                            <input type="radio" id="Boutique" name="step" value="boutique" wire:model="host">

                            <label for="Boutique" class="_rect-b">
                                <div class="_img-f">
                                    <img src="{{ URL::asset('assets/img/card/s6.jpg') }}" alt="">
                                </div>
                                <div class="_block txt_center">
                                    <h3 class="_txteh">Boutique hotel</h3>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="_block-jsb">
        <div class="_btnsmleft" wire:click="returnBack('init')">
            <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                <path d="M5.294,1.824l4,4.005a.753.753,0,0,0,1.068,0,.763.763,0,0,0,0-1.071L5.83.22A.755.755,0,0,0,4.787.2L.221,4.755A.756.756,0,0,0,1.289,5.826Z" transform="translate(0 10.584) rotate(-90)" fill="#333"/>
            </svg>
            <span>Back</span>
        </div>
        <button type="button" class="btn-celest btns-modals" wire:click="next">Next</button>
    </div>
</div>


