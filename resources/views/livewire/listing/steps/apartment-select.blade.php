<div class="_ctoverlay">
    <div class="content_right">
        <div class="content_hidden cs-next">
            <div class="content_mr">
                <div class="content_step">
                    <h2 class="h2_publish" style="margin-bottom: 31px;">Which of these best describes your place?</h2>
                    <div class="scroll_n">
                        <div class="_grid">
                            <label class="_width fx">
                                <input type="radio" name="apartmentnext" wire:model="description" value="Rental unit">
                                <div class="_rect-b">
                                    <div class="_img-f">
                                        <img src="{{ URL::asset('assets/img/card/next1.jpg') }}" alt="">
                                    </div>
                                    <div class="_block">
                                        <h3 class="_txteh">Rental unit</h3>
                                        <p class="total_local">A rented place within a multi-unit residential building or complex.</p>
                                    </div>
                                </div>
                            </label>

                            <label class="_width fx">
                                <input type="radio" name="apartmentnext" wire:model="description" value="Condominium (Condo)">
                                <div class="_rect-b">
                                    <div class="_img-f">
                                        <img src="{{ URL::asset('assets/img/card/next2.jpg') }}" alt="">
                                    </div>
                                    <div class="_block">
                                        <h3 class="_txteh">Condominium (Condo)</h3>
                                        <p class="total_local">A place within a multi-unit building or complex owned by the residents.</p>
                                    </div>
                                </div>
                            </label>

                            <label class="_width fx">
                                <input type="radio" name="apartmentnext" wire:model="description" value="Loft">
                                <div class="_rect-b">
                                    <div class="_img-f">
                                        <img src="{{ URL::asset('assets/img/card/next3.jpg') }}" alt="">
                                    </div>
                                    <div class="_block">
                                        <h3 class="_txteh">Loft</h3>
                                        <p class="total_local">An open layout apartment or condo, which may have short interior walls.</p>
                                    </div>
                                </div>
                            </label>

                            <label class="_width fx">
                                <input type="radio" name="apartmentnext" wire:model="description" value="Serviced apartment">
                                <div class="_rect-b">
                                    <div class="_img-f">
                                        <img src="{{ URL::asset('assets/img/card/next4.jpg') }}" alt="">
                                    </div>
                                    <div class="_block">
                                        <h3 class="_txteh">Serviced apartment</h3>
                                        <p class="total_local">An apartment with hotel-like amenities serviced by a professional management company.</p>
                                    </div>
                                </div>
                            </label>

                            <label class="_width fx">
                                <input type="radio" name="apartmentnext" wire:model="description" value="Vacation home">
                                <div class="_rect-b">
                                    <div class="_img-f">
                                        <img src="{{ URL::asset('assets/img/card/next5.jpg') }}" alt="">
                                    </div>
                                    <div class="_block">
                                        <h3 class="_txteh">Vacation home</h3>
                                        <p class="total_local">A furnished rental property that includes a kitchen and bathroom and may offer some guest services, like a reception desk.</p>
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