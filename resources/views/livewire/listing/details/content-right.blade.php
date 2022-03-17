<div class="content_resort_img">
    <div class="fx fx-jc-sb fx-ai-c fx-fw-w" style="gap: 12px;">
        <h2 class="h2-guests">{{ count( $content ) }} listing</h2>
    </div>

    <div class="fx fx-jc-sb fx-ai-b _search">
        <div class="search_content">
            <div class="input-wrapper">
                <i class="fas fa-search"></i>
                <input type="text" name="" placeholder="Search listings...">
            </div>
        </div>
    </div>

    <div class="_scrolltable">
        <div class="_width _tb-listings">
            <table class="_tb-reservations">
                <thead>
                    <tr>
                        <td>
                            <div class="fx" style="float: right;">
                                <div>
                                    <span class="_txtec" style="margin-right: 2px;">Sort by:</span>

                                    <div class="selected-2" style="margin-left: 0;">
                                        <select name="" id="">
                                            <option selected disabled>Last modified</option>
                                        </select>
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.584" height="6.053" viewBox="0 0 10.584 6.053">
                                            <g transform="translate(-241.416 -417)">
                                                <path d="M11.482,13.071l4,4.006a.753.753,0,0,0,1.068,0,.763.763,0,0,0,0-1.072l-4.535-4.539a.755.755,0,0,0-1.043-.022L6.408,16a.757.757,0,0,0,1.068,1.072Z" transform="translate(235.228 405.754)" fill="#7d7d7d"/>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ( $content as $element )
                        <tr>
                            <td>
                                <a href="{{ route('listing-show', $element['id_listings'] ) }}">
                                    <div class="checkbox-item checkbox-item_img">
                                        <label class="check_click" style="gap: 20px; width: 100%;">
                                            <div class="bg_check_click">
                                                <div class="_cont-l-img">
                                                    <div class="_ad-list_img">
                                                        <img src="{{ URL::asset('storage/uploadListing/') }}/{{ $element['photos'] }}">
                                                    </div>
                                                </div>

                                                <div class="flex_text fx fx-jc-sb">
                                                    <div class="_f-t">
                                                        <h3 class="_txteh txt_upper">{{ $element['title'] }}</h3>
                                                        <p class="_txtec16 text_tm1">{{ $element['internal_title'] }}</p>
                                                    </div>

                                                    <div class="icon fx fx-ai-fs">
                                                        @if ( $element['status'] === 'Listed' )
                                                            <div class="_iconposit">
                                                                <i class="fas fa-circle _i-verde10"></i>
                                                            </div>
                                                        @endif

                                                        @if ( $element['status'] === 'Snoozed' )
                                                            <div class="_iconposit">
                                                                <i class="fas fa-moon _i-gris10"></i>
                                                            </div>
                                                        @endif
                                                        
                                                        @if ( $element['status'] === 'Unlisted' )
                                                            <div class="_iconposit">
                                                                <i class="fas fa-circle _i-red10"></i>
                                                            </div>
                                                        @endif
                                                        
                                                        @if ( $element['status'] === 'Deactivate' )
                                                            <div class="_iconposit">
                                                                <i class="fas fa-circle _i-griswhite10"></i>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>