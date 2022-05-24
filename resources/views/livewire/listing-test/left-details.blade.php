<div class="content_resort_img">
    <div class="fx fx-jc-sb fx-ai-c fx-fw-w" style="gap: 12px;">
        <h2 class="h2-guests">{{ count( $content ) }} listing</h2>
    </div>

    <div class="fx fx-jc-sb fx-ai-b _search">
        <div class="search_content">
            <div class="input-wrapper">
                <i class="fas fa-search"></i>
                <input type="text" wire:model="search" placeholder="Search listings...">
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

                                    <div class="selected-2" style="margin-left: 0;" wire:click="sortBy">
                                        <span class="_txtec" style="margin-right: 20px;">Last modified</span>
                                        @if ( $sortBy === 'ASC')
                                            <i class="fas fa-angle-up"></i>
                                        @else
                                            <i class="fas fa-angle-down"></i>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($content as $element)
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

                                                    <div>
                                                        @if ( $element['status'] === 'Listed' )
                                                            <i class="fas fa-circle _i-verde8"></i>
                                                        @endif

                                                        @if ( $element['status'] === 'Snoozed' )
                                                            <i class="fas fa-moon _i-gris8"></i>
                                                        @endif
                                                        
                                                        @if ( $element['status'] === 'Unlisted' )
                                                            <i class="fas fa-circle _i-red8"></i>
                                                        @endif
                                                        
                                                        @if ( $element['status'] === 'Deactivate' )
                                                            <i class="fas fa-circle _i-griswhite8"></i>
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