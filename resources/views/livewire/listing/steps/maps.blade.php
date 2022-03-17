<div class="_ctoverlay">
    <div class="content_right">
        <div class="content_hidden cs_map">
            <div class="content_mr">
                <div class="content_step">
                    <h2 class="h2_publish" style="margin-bottom: 50px;">What kind of space will guests have?</h2>

                    <div class="_absolute" wire:ignore>
                        <div class="input-enter_map">
                            <div class="input-wrapper show">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.482" height="26.038" viewBox="0 0 18.482 26.038">
                                        <path d="M15.741,3A8.235,8.235,0,0,0,7.5,11.241c0,6.181,8.241,15.305,8.241,15.305s8.241-9.124,8.241-15.305A8.235,8.235,0,0,0,15.741,3Zm0,11.185a2.943,2.943,0,1,1,2.943-2.943A2.944,2.944,0,0,1,15.741,14.185Z" transform="translate(-6.5 -2)" fill="none" stroke="#ff5a5f" stroke-width="2"/>
                                    </svg>
                                </span>
                                <div id="geocoder" class="_input-map"></div>
                            </div>

                            <button class="input-wrapper use_current_locat none" style="width: 100%;" clickCurrency>
                                <p class="_txtec">use my current location</p>
                            </button>
                        </div>
                        <div class="contact-map" id='mapStep1' style="margin-top: 20px;width:560px; height:530px;"></div>
                    </div>
                    <input type="hidden" inputLatitud>
                    <input type="hidden" inputLongitud>
                </div>
            </div>
        </div>
    </div>
    <div class="_block-jsb">
        <div class="_btnsmleft" wire:click="returnBack('space')">
            <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                <path d="M5.294,1.824l4,4.005a.753.753,0,0,0,1.068,0,.763.763,0,0,0,0-1.071L5.83.22A.755.755,0,0,0,4.787.2L.221,4.755A.756.756,0,0,0,1.289,5.826Z" transform="translate(0 10.584) rotate(-90)" fill="#333"/>
            </svg>
            <span>Back</span>
        </div>
        <button type="button" class="btn-celest btns-modals" sendLocation>Next</button>
    </div>
</div>