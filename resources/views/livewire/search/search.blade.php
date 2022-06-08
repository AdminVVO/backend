<div class="content_location">
    <div class="content_links">
        <div class="tabs_select">
            <label class="custom-anytime sl_price">
                <select name="" id="">
                    <option value="">Price</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                    <option value="">Option 3</option>
                </select>
                <i class="far fa-chevron-down"></i>
            </label>

            <label class="custom-anytime sl_typlace">
                <select name="" id="">
                    <option value="">Type of place</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                    <option value="">Option 3</option>
                </select>
                <i class="far fa-chevron-down"></i>
            </label>
        </div>
        <div class="content-scroll-local">
            <div class="tabs_items_group">
                @foreach ($category as $key => $element)
                    <h3 class="tabs_items {{ $key === $filter_categ ? 'active_tabs' : '' }}" wire:click="changeCateg('{{$key}}')">{{ $element }}</h3>
                @endforeach
            </div>

            <div class="btn-right-scroll">
                <span class="bg-btn-right">
                    <i class="fas fa-chevron-right"></i>
                </span>
            </div>
        </div>
        <div class="tabs_select sl_filters">
            <label class="custom-anytime sl_filters">
                <select name="" id="">
                    <option value="">Filters</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                    <option value="">Option 3</option>
                </select>
            </label>
        </div>
    </div>
    <div class="flex_local-dates">
        <div class="content_location-width">
            <div class="desc-location">
                <h5>300+ stays in Orlando</h5>
            </div>
            <div class="content_view">
                <div class="hidden_galerias">
                    @forelse ($contentListing as $element)
                        <a href="#" class="content_galerias">
                            <div class="slideshow-container">
                                <div class="star">
                                    <div class="content-star">
                                        <i class="fas fa-star"></i><span class="num-start"> 4.89</span><span class="num-total"> (15)</span>
                                    </div>
                                </div>

                                    @if ( Auth::check() )
                                        @if ( in_array($element['id_listings'], $wishlists))
                                            <button type="button" class="card_love icon_solid">
                                        @else
                                            <button type="button" class="card_love showFavorite">
                                        @endif
                                    @else
                                        <button type="button" class="card_love butnSignModl">
                                    @endif
                                        <svg xmlns="http://www.w3.org/2000/svg" width="27.003" height="23.878" viewBox="0 0 27.003 23.878">
                                            <g transform="translate(1.002 -1.245)" fill="rgba(222,222,222,0.38)" stroke="#dedede" stroke-width="2">
                                                <path d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z"/>
                                                <path d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z"/>
                                            </g>
                                        </svg>
                                    </button>

                                <div class="card_img">
                                    <img src="{{ URL::asset('storage/uploadListing/' . $element['photos'][0]) }}" alt="">
                                    <img src="{{ URL::asset('storage/uploadListing/' . $element['photos'][1]) }}" alt="">
                                    <img src="{{ URL::asset('storage/uploadListing/' . $element['photos'][2]) }}" alt="">
                                </div>

                                <div class="content-dots">
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </div>
                            </div>
                            <div class="flex_info">
                                <h4>{{ ucwords( \App\Models\RoomsProperty::TypeListing( $element['listing_type'] ) .' '. \App\Models\RoomsProperty::PropertyName( $element['property_type'] ) ) }}</h4>
                                <h2>{{ $element['title'] }}</h2>
                                <p class="desc_lc">{{ $element['number_guests'] }} guests  -  {{ $element['bedrooms'] }} bedrooms  -  {{ $element['bed'] }} beds  -  {{ $element['bathrooms'] }} baths</p>
                                <button class="btn_lc">Pool</button>
                                <button class="btn_lc">Free parking</button>
                                <button class="btn_lc">Wifi</button>
                                <button class="btn_lc">Kitchen</button>
                                <p class="total_local">
                                    <i class="fas fa-dollar-sign"></i> {{ $element['base_price'] }} / night <i class="far fa-long-arrow-right"></i> <span class="t">Total</span> <i class="fas fa-dollar-sign"></i> 5,387
                                </p>
                            </div>
                        </a>
                    @empty
                        <p>No have Listing</p>
                    @endforelse
                </div>
            </div>

            <div class="pagination">
            </div>

            <div class="cantidad_location-center">
                <small>1 - 20 of 300+ places to stay</small>
                <p>Additional fees apply Taxes may be added.</p>
            </div>
        </div>

        <div class="content_location-width">
            <div class="desc-location">
                <h5>Your trip is coming up in 5 days. Use the Instant Book filter to check out places that you can book right now.</h5>
            </div>

            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15604.935148163011!2d-77.00394301219576!3d-12.096141331618517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7d19478c6bf%3A0xb53809bf8f8b06c8!2sSan%20Borja!5e0!3m2!1ses-419!2spe!4v1640041907641!5m2!1ses-419!2spe" width="auto" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
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