<div>
    <div class="tabs entero">
        <div class="medio">
            <div class="navcont__flech-fx" wire:ignore>
                <div class="cont_nav">
                    <div class="nav__links-txt scroll_n owl-carousel carousel_btn_nav js_navlinkstabs">
                        @foreach ($category as $key => $element)
                            <button type="button" class="li__links-txt">
                                <span class="tabs_items {{ $key === $filter_categ ? 'active_tabs' : '' }}" wire:click="changeCateg('{{$key}}')">{{ $element }}</span>
                            </button>
                        @endforeach
                    </div>

                    <div class="vvo_owl_nav vvo_nav_flech"></div>
                </div>
            </div>
            <div class="tabs_select">
                <label class="custom-anytime">
                    <select name="" id="">
                        <option value="">Anytime</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                        <option value="">Option 3</option>
                    </select>
                    <i class="far fa-chevron-down"></i>
                </label>
                <label class="custom-anytime">
                    <select name="" id="">
                        <option value="">Guests</option>
                        <option value="">Option 1</option>
                        <option value="">Option 2</option>
                        <option value="">Option 3</option>
                    </select>
                    <i class="far fa-chevron-down"></i>
                </label>

                <button type="button" class="btn-celest nrml selectbtn" wire:click="resetFilter">Reset Filters</button>
            </div>
        </div>
    </div>
    <div class="tabs_card entero">
        <div class="medio">
            @forelse ($sites ?? '' as $item)
                <a href="/" class="card_items">
                    <div class="card_top">
                        <div class="card_top_price">
                            <i class="fas fa-dollar-sign"></i>
                            <p>{{ $item->price }} / night</p>
                        </div>
                        <div class="card_top_dates">
                            <i class="fas fa-calendar"></i>
                            <p>24 dec - 31 dec</p>
                        </div>
                    </div>
                    @if ( Auth::check() )
                        @if ( in_array($item['id_listings'], $wishlists))
                            <button type="button" class="card_love icon_solid">
                        @else
                            <button type="button" class="card_love showFavorite" wire:click="$emitTo('home.wishlists', 'addListing', '{{ $item['id_listings']  }}')">
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

                        <img src="{{ URL::asset('storage/uploadListing/' . $item->photos[0]) }}" alt="">
                        <img src="{{ URL::asset('storage/uploadListing/' . $item->photos[1]) }}" alt="">
                        <img src="{{ URL::asset('storage/uploadListing/' . $item->photos[2]) }}" alt="">
                    </div>
                    <div class="content-dots">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                    <div class="card_info">
                        <div class="card_info_text">
                            <h2 class="h2-cards">{{ $item->title }}</h2>
                            <div class="card_info_rating">
                                <i class="fas fa-star"></i>
                                <p>4.89 <span>(15)</span></p>
                            </div>
                        </div>
                        <h3 class="h3-cards">{{ ucwords( \App\Models\RoomsProperty::TypeName( $item['like_place'] )  . ' - ' . \App\Models\RoomsProperty::PropertyName( $item['property_type'] ) ) }}</h3>
                    </div>
                </a>
            @empty
                <div class="medio now__listabscard">
                    <p>No Have Listing</p>
                </div>
            @endforelse
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.hook('message.processed', (message, component) => {
            $(".content-dots span.dot:first-child").addClass("dot_active");
            $(".card_img > img:first-child").addClass("card_img_active");
        })
    </script>
@endpush
