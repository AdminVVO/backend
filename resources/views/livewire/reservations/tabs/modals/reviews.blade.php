@if($reservation == true)
<div class="container_admin-host _ntñsfts container_reviewDetailsReservation" wire:ignore.self>
    <div class="modal-anhost"></div>

    <div class="pd_anhost-modal">
        <div class="_z4lmgp">
            <div class="modal_content-anhost">
                <div class="close">
                    <span>X</span>
                </div>

                <div class="modal_block">
                    <div class="content_hidden-anhost">
                        <div class="site-content reservation-details-cont" style="padding-bottom: 21px;">
                            <input type="radio" class="dn" id="radioStarCleanliness" wire:model="rating_cleanliness">
                            <input type="radio" class="dn" id="radioStarCommunication" wire:model="rating_communication">
                            <input type="radio" class="dn" id="radioStarObservanceHouseRules" wire:model="rating_observance">

                            <div class="_block-jsb hr">
                                <h2 class="h2_publish">Reservation details</h2>
                            </div>

                            <div class="_flex_users hr">
                                <span class="_pf-msg">
                                    <img src="{{ URL::asset('assets/img/avatar') }}/{{ $data['avatar'] }}" alt="">
                                </span>

                                <div class="_b">
                                    <!-- <div class="h5_red">Arriving in 2 Days</div> -->
                                    <h2 class="h2-guests _txtcapit">{{ $data['name'] }}</h2>

                                    <div class="mr-t16">
                                        <p class="_txtec _txtcapit">{{ $data['date'] }}</p>
                                        <p class="_txtec _txtcapit">lakes studio</p>
                                    </div>
                                </div>
                            </div>

                            <div class="_block-privatenote hr">
                                <label for="labelPublicReview">
                                    <div class="mr-b24">
                                        <h2 class="h2-guests">Leave a public review</h2>
                                        <p class="_txtec16 mr-t10">Write a fair, honest review about
                                            {{ $data['name'] }} stay so future hosts know what to expect.</p>
                                    </div>

                                    <textarea placeholder="Leave a comment that only Laura can read" rows="5" class="_txta-modls"
                                        id="labelPublicReview" style="resize: vertical;" wire:model.lazy="review"></textarea>
                                </label>
                            </div>

                            <div class="_block-privatenote hr">
                                <label for="labelPrivateNote">
                                    <div class="mr-b24">
                                        <h2 class="h2-guests">Add a private note</h2>
                                        <p class="_txtec16 mr-t10">Offer suggestions, or say thanks for being a great
                                            guest. We won't publish your note on {{ $data['name'] }} profile.</p>
                                    </div>

                                    <textarea placeholder="Add a private note (optional)" rows="5" class="_txta-modls" id="labelPrivateNote"
                                        wire:model.lazy="note" style="resize: vertical;"></textarea>
                                </label>
                            </div>

                            <div class="_block-privatenote hr">
                                <h2 class="h2-guests">Cleanliness</h2>

                                <div class="_txtec mr-t10">Did {{ $data['name'] }} leave your space clean?</div>

                                <div class="star_rating_vvo fx fx-fd-c gp8 mr-t10" id="js__starRatingCleanliness" wire:ignore>
                                    <ul class="fx fx-fw-w gp12">
                                        <li>
                                            <label for="radioStarCleanliness">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                                    <path d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z" transform="translate(0.797 0.377)" stroke-linecap="round" stroke-width="2"/>
                                                </svg>
                                            </label>
                                        </li>

                                        <li>
                                            <label for="radioStarCleanliness">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                                    <path d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z" transform="translate(0.797 0.377)" stroke-linecap="round" stroke-width="2"/>
                                                </svg>
                                            </label>
                                        </li>

                                        <li>
                                            <label for="radioStarCleanliness">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                                    <path d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z" transform="translate(0.797 0.377)" stroke-linecap="round" stroke-width="2"/>
                                                </svg>
                                            </label>
                                        </li>

                                        <li>
                                            <label for="radioStarCleanliness">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                                    <path d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z" transform="translate(0.797 0.377)" stroke-linecap="round" stroke-width="2"/>
                                                </svg>
                                            </label>
                                        </li>

                                        <li>
                                            <label for="radioStarCleanliness">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                                    <path d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z" transform="translate(0.797 0.377)" stroke-linecap="round" stroke-width="2"/>
                                                </svg>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="_block-privatenote hr">
                                <h2 class="h2-guests">Communication</h2>

                                <div class="_txtec mr-t10">How clearly did {{ $data['name'] }} communicate their
                                    plans, questions, and concerns?</div>

                                <div class="star_rating_vvo fx fx-fd-c gp8 mr-t10" id="js__starRatingCommunication" wire:ignore>
                                    <ul class="fx fx-fw-w gp12">
                                        <li>
                                            <label for="radioStarCommunication">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                                    <path
                                                        d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z"
                                                        transform="translate(0.797 0.377)" stroke-linecap="round"
                                                        stroke-width="2" />
                                                </svg>
                                            </label>
                                        </li>

                                        <li>
                                            <label for="radioStarCommunication">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                                    <path
                                                        d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z"
                                                        transform="translate(0.797 0.377)" stroke-linecap="round"
                                                        stroke-width="2" />
                                                </svg>
                                            </label>
                                        </li>

                                        <li>
                                            <label for="radioStarCommunication">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                                    <path
                                                        d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z"
                                                        transform="translate(0.797 0.377)" stroke-linecap="round"
                                                        stroke-width="2" />
                                                </svg>
                                            </label>
                                        </li>

                                        <li>
                                            <label for="radioStarCommunication">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                                    <path
                                                        d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z"
                                                        transform="translate(0.797 0.377)" stroke-linecap="round"
                                                        stroke-width="2" />
                                                </svg>
                                            </label>
                                        </li>

                                        <li>
                                            <label for="radioStarCommunication">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                                    <path
                                                        d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z"
                                                        transform="translate(0.797 0.377)" stroke-linecap="round"
                                                        stroke-width="2" />
                                                </svg>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="_block-privatenote hr">
                                <h2 class="h2-guests">Observance of house rules</h2>

                                <div class="_txtec mr-t10">Did {{ $data['name'] }} observe your house rules?
                                </div>

                                <div class="star_rating_vvo fx fx-fd-c gp8 mr-t10" id="js__starRatingObservanceHouse" wire:ignore>
                                    <ul class="fx fx-fw-w gp12">
                                        <li>
                                            <label for="radioStarObservanceHouseRules">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                                    <path
                                                        d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z"
                                                        transform="translate(0.797 0.377)" stroke-linecap="round"
                                                        stroke-width="2" />
                                                </svg>
                                            </label>
                                        </li>

                                        <li>
                                            <label for="radioStarObservanceHouseRules">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                                    <path
                                                        d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z"
                                                        transform="translate(0.797 0.377)" stroke-linecap="round"
                                                        stroke-width="2" />
                                                </svg>
                                            </label>
                                        </li>

                                        <li>
                                            <label for="radioStarObservanceHouseRules">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                                    <path
                                                        d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z"
                                                        transform="translate(0.797 0.377)" stroke-linecap="round"
                                                        stroke-width="2" />
                                                </svg>
                                            </label>
                                        </li>

                                        <li>
                                            <label for="radioStarObservanceHouseRules">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                                    <path
                                                        d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z"
                                                        transform="translate(0.797 0.377)" stroke-linecap="round"
                                                        stroke-width="2" />
                                                </svg>
                                            </label>
                                        </li>

                                        <li>
                                            <label for="radioStarObservanceHouseRules">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                                    <path
                                                        d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z"
                                                        transform="translate(0.797 0.377)" stroke-linecap="round"
                                                        stroke-width="2" />
                                                </svg>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="_block-privatenote hr">
                                <h2 class="h2-guests">Would you host {{$data['name']}} again?</h2>

                                <div class="_txtec mr-t10">We won't publish your answer anywhere, and
                                    {{ $data['name'] }} won't see it.</div>

                                <div class="fx fx-fw-w" style="gap: 11px; margin-top: 10px;" wire:click="option()">
                                    @if ($bool)
                                        <button class="btn-bd-white scale active-border">
                                            <span class="_txtec">Yes</span>
                                        </button>
                                        <button class="btn-bd-white scale">
                                            <span class="_txtec">No</span>
                                        </button>
                                    @else
                                        <button class="btn-bd-white scale">
                                            <span class="_txtec">Yes</span>
                                        </button>
                                        <button class="btn-bd-white scale active-border">
                                            <span class="_txtec">No</span>
                                        </button>
                                    @endif
                                </div>

                                <div class="mr-t31">
                                    <button class="btn-celest" wire:click="createReview">Submit review</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@else
<div><p>hola</p></div>
    
@endif