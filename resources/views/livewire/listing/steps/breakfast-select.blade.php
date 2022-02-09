 <div class="_ctoverlay">
    <div class="content_right">
        <div class="content_hidden cs-next">
            <div class="content_mr">
                <div class="content_step">
                    <h2 class="h2_publish" style="margin-bottom: 31px;">Which of these best describes your place?</h2>
                    <div class="scroll_n">
                        <div class="_grid">
                            <label class="_width fx">
                                <input type="radio" name="bednext" wire:model="description" value="Bed and breakfast">
                                <div class="_rect-b">
                                    <div class="_img-f">
                                        <img src="{{ URL::asset('assets/img/card/next40.jpg') }}" alt="">
                                    </div>
                                    <div class="_block">
                                        <h3 class="_txteh">Bed and breakfast</h3>
                                        <p class="total_local">A hospitality business offering guests breakfast with a host on-site.</p>
                                    </div>
                                </div>
                            </label>

                            <label class="_width fx">
                                <input type="radio" name="bednext" wire:model="description" value="Nature lodge">
                                <div class="_rect-b">
                                    <div class="_img-f">
                                        <img src="{{ URL::asset('assets/img/card/next41.jpg') }}" alt="">
                                    </div>
                                    <div class="_block">
                                        <h3 class="_txteh">Nature lodge</h3>
                                        <p class="total_local">A business offering stays near natural settings like forests or mountains.</p>
                                    </div>
                                </div>  
                            </label>
                            
                            <label class="_width fx">
                                <input type="radio" name="bednext" wire:model="description" value="Farm stay">
                                <div class="_rect-b">
                                    <div class="_img-f">
                                        <img src="{{ URL::asset('assets/img/card/next23.jpg') }}" alt="">
                                    </div>
                                    <div class="_block">
                                        <h3 class="_txteh">Farm stay</h3>
                                        <p class="total_local">A rural stay where guests may spend time with animals, hiking, or crafting.</p>
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
        <div class="_btnsmleft" wire:click="returnBack('host')">
            <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                <path d="M5.294,1.824l4,4.005a.753.753,0,0,0,1.068,0,.763.763,0,0,0,0-1.071L5.83.22A.755.755,0,0,0,4.787.2L.221,4.755A.756.756,0,0,0,1.289,5.826Z" transform="translate(0 10.584) rotate(-90)" fill="#333"/>
            </svg>
            <span>Back</span>
        </div>
        <button type="button" class="btn-celest btns-modals" wire:click="next">Next</button>
    </div>
</div>