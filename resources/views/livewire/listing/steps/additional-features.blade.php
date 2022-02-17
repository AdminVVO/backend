<div class="_ctoverlay">
    <div class="content_right">
        <div class="content_hidden ch_step9">
            <div class="content_mr">
                <div class="content_step">
                    <h2 class="h2_publish" style="margin-bottom: 55px;">Just a few last questions...</h2>

                    <div>
                        <div class="c_amenitles c_describe_place">
                            <h3 class="h2-guests" style="margin-bottom: 25px;">Do you have any of these at your place?</h3>

                            <div class="fx fx-fw-w fx-jc-c">
                                <label>
                                    <input type="checkbox" wire:model.defer="featurs" value="Security camera(s)">
                                    <div class="_contmini-list">
                                        <div class="_img-fondo">
                                            <img src="{{ URL::asset('assets/img/card/sq1.jpg') }}" alt="">
                                        </div>
                                        <div class="_block">
                                            <h3 class="_txteh">Security camera(s)</h3>
                                        </div>
                                    </div>
                                </label>

                                <label>
                                    <input type="checkbox" wire:model.defer="featurs" value="Weapons">
                                    <div class="_contmini-list">
                                        <div class="_img-fondo">
                                            <img src="{{ URL::asset('assets/img/card/sq2.jpg') }}" alt="">
                                        </div>
                                        <div class="_block">
                                            <h3 class="_txteh">Weapons</h3>
                                        </div>
                                    </div>
                                </label>

                                <label>
                                    <input type="checkbox" wire:model.defer="featurs" value="Dangerous animals">
                                    <div class="_contmini-list">
                                        <div class="_img-fondo">
                                            <img src="{{ URL::asset('assets/img/card/sq3.jpg') }}" alt="">
                                        </div>
                                        <div class="_block">
                                            <h3 class="_txteh">Dangerous animals</h3>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <h3 class="h2-guests" style="margin: 61px 0 18px;">Some important things to know</h3>
                    <div class="_d-some_import">
                        <p class="h3">Be sure to comply with your <a href="#" class="_txtehlinear">local laws</a> and review Vvoutlet <a href="#" class="_txtehlinear">nondiscrimination policy</a> and <a href="#" class="_txtehlinear">guest and Host fees</a>. Update your <a href="#" class="_txtehlinear">cancellation policy</a> after you publish.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="_block-jsb">
        <div class="_btnsmleft" wire:click="returnBack('prices')">
            <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                <path d="M5.294,1.824l4,4.005a.753.753,0,0,0,1.068,0,.763.763,0,0,0,0-1.071L5.83.22A.755.755,0,0,0,4.787.2L.221,4.755A.756.756,0,0,0,1.289,5.826Z" transform="translate(0 10.584) rotate(-90)" fill="#333"/>
            </svg>
            <span>Back</span>
        </div>
        <button type="button" class="btn-celest btns-modals" wire:click="next">Review your listing</button>
    </div>
</div>