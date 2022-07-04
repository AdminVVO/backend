<main class="interna-publish">
    @if ( \App\Models\User::Role( $idUser ) === 1 )
        <h2 class="h2-guests">Listings</h2>

        <div class="hidden_galerias">
            @forelse ($contentListing as $element)
                <a href="{{ route('interna', $element['id_listings'] ) }}" class="content_galerias">
                    <div class="slideshow-container">
                        <div class="star">
                            <div class="content-star">
                                <i class="fas fa-star"></i><span class="num-start"> 4.89</span><span class="num-total"> (15)</span>
                            </div>
                        </div>

                        @if ( Auth::check() )
                            @if ( in_array($element['id_listings'], $wishlists))
                                <button type="button" class="card_love icon_solid" wire:click="$emitTo('home.wishlists', 'removeListing', '{{ $element['id_listings']  }}')">
                            @else
                                <button type="button" class="card_love showFavorite" wire:click="$emitTo('home.wishlists', 'addListing', '{{ $element['id_listings']  }}')">
                            @endif
                        @else
                            <button type="button" class="card_love butnSignModl">
                        @endif
                            <svg xmlns="http://www.w3.org/2000/svg" width="27.003" height="23.878" viewBox="0 0 27.003 23.878">
                                <g transform="translate(1.002 -1.245)" fill="rgba(222,222,222,0.38)" stroke="#dedede" stroke-width="2">
                                    <path d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z"></path>
                                    <path d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z"></path>
                                </g>
                            </svg>
                        </button>

                        <div class="card_img">
                            <img src="{{ URL::asset('storage/uploadListing/' . $element['photos'][0]) }}" alt="" class="card_img_active">
                            <img src="{{ URL::asset('storage/uploadListing/' . $element['photos'][1]) }}" alt="">
                            <img src="{{ URL::asset('storage/uploadListing/' . $element['photos'][2]) }}" alt="">
                        </div>

                        <div class="content-dots">
                            <span class="dot dot_active"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>
                    </div>

                    <div class="flex_info">
                        {{-- <h4 class="text_tm1">{{ ucwords( \App\Models\RoomsProperty::TypeListing( $element['listing_type'] ) .' '. \App\Models\RoomsProperty::PropertyName( $element['property_type'] ) ) }}</h4> --}}
                        <h2 class="text_tm1">{{ $element['title'] }}</h2>
                        <p class="desc_lc">{{ $element['number_guests'] }} guests  -  {{ $element['bedrooms'] }} bedrooms  -  {{ $element['bed'] }} beds  -  {{ $element['bathrooms'] }} baths</p>
                        @foreach ( $element['amenities'] as $amenities)
                            @if ( $loop->iteration <= 4 )
                                <button class="btn_lc">{{ \App\Models\AmenitiesSafety::Name( $amenities ) }}</button>
                            @endif
                        @endforeach
                        <p class="total_local">
                            <i class="fas fa-dollar-sign"></i> {{ $element['base_price'] }} / night <i class="far fa-long-arrow-right"></i>
                        </p>
                    </div>
                </a>
            @empty
                <div class="medio">
                    <div class="now__listabscard">
                        <p>No Have Listing</p>
                    </div>
                </div>
            @endforelse
            
            {{ $contentListing->links() }}
        </div>
        
        <div class="_line-hr mr-t32 mr-b32"></div>
    @endif

    <h2 class="h2-guests star_reviews_h2">
        <div class="fx fx-ai-c">
            <div class="fx mr-r8">
                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="display:block; fill:currentColor">
                    <path d="M15.094 1.579l-4.124 8.885-9.86 1.27a1 1 0 0 0-.542 1.736l7.293 6.565-1.965 9.852a1 1 0 0 0 1.483 1.061L16 25.951l8.625 4.997a1 1 0 0 0 1.482-1.06l-1.965-9.853 7.293-6.565a1 1 0 0 0-.541-1.735l-9.86-1.271-4.127-8.885a1 1 0 0 0-1.814 0z" fill-rule="evenodd"></path>
                </svg>
            </div>

            11 reviews
        </div>
    </h2>

    <div class="navcont__flech-fx _navbar-actlist">
        <div class="cont_nav js__cont_nav">
            <div class="nav__links-txt tab-container">
                <button type="button" class="li__links-txt js_from_guests">
                    <span class="tabs_items active_tabs">
                        <span class="">From guests(9)</span>
                    </span>
                </button>

                <button type="button" class="li__links-txt js_from_hosts">
                    <span class="tabs_items">
                        <span class="">From hosts (2)</span>
                    </span>
                </button>
            </div>
        </div>
    </div>

    <div class="fromGuests">
        <div class="_gp-img">
            <div class="usrscont-img">
                <div class="showimg">
                    <img src="{{ URL::asset('assets/img/card/c1.jpg') }}" alt="">
                </div>

                <div class="cblock">
                    <div class="content-user_inf">
                        <span class="_pf-msg">
                            <img src="{{ URL::asset('assets/img/avatar/1.png') }}" alt="">
                        </span>
                        <div class="_bpf">
                            <div class="_txteh">Jhom</div>
                            <div class="_txtec16">January 2021</div>
                        </div>
                    </div>

                    <div class="msgcont">
                        <div class="_txteh">Starts Gate Paradise athasda as</div>
                        <div class="_txtec14">November 2020</div>
                        <span class="_txtec text_tm3">Good place for value. Rooms were clean and it's just 5min away from Universal Studios! We had a good stay. If you want to visit the Universal studios, this is perfect</span>
                    </div>
                </div>
            </div>

            <div class="usrscont-img">
                <div class="showimg">
                    <img src="{{ URL::asset('assets/img/card/c1.jpg') }}" alt="">
                </div>

                <div class="cblock">
                    <div class="content-user_inf">
                        <span class="_pf-msg">
                            <img src="{{ URL::asset('assets/img/avatar/6.jpg') }}" alt="">
                        </span>
                        <div class="_bpf">
                            <div class="_txteh">Jane</div>
                            <div class="_txtec16">January 2021</div>
                        </div>
                    </div>

                    <div class="msgcont">
                        <div class="_txteh">Starts Gate Paradise athasda as</div>
                        <div class="_txtec14">November 2020</div>
                        <span class="_txtec text_tm3">Good place for value. Rooms were clean and it's just 5min away from Universal Studios! We had a good stay. If you want to visit the Universal studios, this is perfect</span>
                    </div>
                </div>
            </div>
        </div>

        <button type="button" class="btn-red alants">Show all 7 reviews</button>
    </div>

    <div class="fromhosts" style="display: none;">
        <div class="_gp-img">
            <div class="usrscont-img">
                <div class="cblock">
                    <div class="content-user_inf">
                        <span class="_pf-msg">
                            <img src="{{ URL::asset('assets/img/avatar/1.png') }}" alt="">
                        </span>
                        <div class="_bpf">
                            <div class="_txteh">Jhom</div>
                            <div class="_txtec16">January 2021</div>
                        </div>
                    </div>

                    <div class="msgcont">
                        <div class="_txtec14">November 2020</div>
                        <span class="_txtec text_tm3">Good place for value. Rooms were clean and it's just 5min away from Universal Studios! We had a good stay. If you want to visit the Universal studios, this is perfect</span>
                    </div>
                </div>
            </div>

            <div class="usrscont-img">
                <div class="cblock">
                    <div class="content-user_inf">
                        <span class="_pf-msg">
                            <img src="{{ URL::asset('assets/img/avatar/5.jpg') }}" alt="">
                        </span>
                        <div class="_bpf">
                            <div class="_txteh">Kim</div>
                            <div class="_txtec16">January 2021</div>
                        </div>
                    </div>

                    <div class="msgcont">
                        <div class="_txtec14">November 2020</div>
                        <span class="_txtec text_tm3">Good place for value. Rooms were clean and it's just 5min away from Universal Studios! We had a good stay. If you want to visit the Universal studios, this is perfect</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>