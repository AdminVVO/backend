<div class="flex vvo_carousel_search scroll_n">
    @forelse ($contentListing as $element)

        <a href="{{ route('interna', $element['id_listings'] ) }}" class="card_items active skeleton skeleton_card">
            <div class="card_top">
                <div class="card_top_price skeleton skeleton_txt">
                    <i class="fas fa-dollar-sign"></i>
                    <p>{{ $element['base_price'] }} / night</p>
                </div>
                <div class="card_top_dates skeleton skeleton_txt">
                    <i class="fas fa-calendar"></i>
                    <p>24 dec - 31 dec</p>
                </div>
            </div>

            @if ( Auth::check() )
                @if ( in_array($element['id_listings'], $wishlists))
                    <button type="button" class="card_love icon_solid">
                @else
                    <button type="button" class="card_love showFavorite" wire:click="$emitTo('home.wishlists', 'addListing', '{{ $element['id_listings']  }}')">
                @endif
            @else
                <button type="button" class="card_love butnSignModl">
            @endif
                <svg xmlns="http://www.w3.org/2000/svg" width="27.003" height="23.878" viewBox="0 0 27.003 23.878">
                    <g transform="translate(1.002 -1.245)" fill="rgba(222,222,222,0.38)" stroke="#dedede" stroke-width="2">
                        <path d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z" />
                        <path d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z" />
                    </g>
                </svg>
            </button>

            <div class="card_img">
                <img loading="lazy" src="{{ URL::asset('storage/uploadListing/' . $element['photos'][0]) }}" alt="">
                <img loading="lazy" src="{{ URL::asset('storage/uploadListing/' . $element['photos'][1]) }}" alt="">
                <img loading="lazy" src="{{ URL::asset('storage/uploadListing/' . $element['photos'][2]) }}" alt="">
            </div>

            <div class="card_info">
                <div class="content-dots">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>

                <div class="card_info_text">
                    <h2 class="h2-cards skeleton skeleton_txt">{{ $element['title'] }}</h2>
                    <div class="card_info_rating skeleton">
                        <i class="fas fa-star"></i>
                        <p>4.89 <span>(15)</span></p>
                    </div>
                </div>
                <h3 class="h3-cards skeleton skeleton_txt">{{ ucwords( \App\Models\RoomsProperty::TypeName( $element['like_place'] )  . ' - ' . \App\Models\RoomsProperty::PropertyName( $element['property_type'] ) ) }}</h3>
            </div>
        </a>
    @empty
        <div class="medio">
            <div class="now__listabscard">
                <p>No Have Listing</p>
            </div>
        </div>
    @endforelse
</div>