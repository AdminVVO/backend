<div class="left_calendar_admin pd-r30">
    <div class="bkg_white ht-p100 pn-r">
        <div class="pn-a pd-t10 inset0 mxh100v inset0">
            <div class="_z4lmgp">
                <div class="pn-r fx fx-fd-c wh-p100 ht-p100">
                    <div class="cont-h2">
                        <h2 class="h2-guests">78 listing</h2>

                        <div class="search_content" style="margin-bottom: 0px;">
                            <div class="input-wrapper">
                                <i class="fas fa-search"></i>
                                <input type="text" name="" placeholder="Search listings...">
                            </div>
                        </div>
                    </div>

                    <div class="section-listing ow-a ht-p100 mr-t9">
                        <table class="_tb-reservations">
                            <tbody>
                                @foreach ( $listings as $element )
                                    <tr>
                                        <td>
                                            <div class="checkbox-item checkbox-item_img" wire:click="selectListing('{{ $element['id_listings'] }}')">
                                                <label class="check_click">
                                                    <input type="radio" name="listing">
                                                    <div class="bg_check_click click-list-calendar">
                                                        <div class="_ck2ag"></div>

                                                        <div class="_cont-l-img">
                                                            <div class="_ad-list_img">
                                                                <img src="{{ URL::asset('assets/img/card/c1.jpg') }}">
                                                            </div>
                                                        </div>

                                                        <div class="_f-t">
                                                            <h3 class="_txteh _txtcapit text_tm1">{{ $element['title'] }}</h3>

                                                            <p class="_txtec16 text_tm1">{{ $element['internal_title'] }}</p>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>