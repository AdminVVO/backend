<div>
    <div class="tabs entero" wire:ignore>
        <div class="medio">
            <div class="con_flex fx fx-ai-c fx-jc-sb gp22 wh-p100">
                <div class="navcont__flech-fx">
                    <div class="cont_nav">
                        <div class="nav__links-txt tab-container">
                            @foreach ($category as $key => $element)
                                <button type="button" class="li__links-txt">
                                    <span class="tabs_items {{ $key === $filter_categ ? 'active_tabs' : '' }}" wire:click="changeCateg('{{$key}}')">{{ $element }}</span>
                                </button>
                            @endforeach
                        </div>
                        <div class="nav__links-txt tab-container">
                        </div>

                        <div class="vvo_nav_flech prev">
                            <button type="button" class="prev-slide">
                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                    <g fill="none">
                                        <path d="m20 28-11.29289322-11.2928932c-.39052429-.3905243-.39052429-1.0236893 0-1.4142136l11.29289322-11.2928932"></path>
                                    </g>
                                </svg>
                            </button>
                        </div>
                        
                        <div class="vvo_nav_flech next">
                            <button type="button" class="next-slide">
                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                    <g fill="none">
                                        <path d="m12 4 11.2928932 11.2928932c.3905243.3905243.3905243 1.0236893 0 1.4142136l-11.2928932 11.2928932"></path>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="tabs_select">
                    <div class="vvo-select blue btntabs">
                        <select name="" id="">
                            <option value="disabled">Anytime</option>
                            <option value="">Option 1</option>
                            <option value="">Option 2</option>
                            <option value="">Option 3</option>
                        </select>

                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="vvo-select blue btntabs">
                        <select name="" id="">
                            <option value="disabled">Guests</option>
                            <option value="">Option 1</option>
                            <option value="">Option 2</option>
                            <option value="">Option 3</option>
                        </select>

                        <i class="fas fa-chevron-down"></i>
                    </div>

                    <button type="button" wire:click="resetFilter" class="btn-celest nrml btntabs">Filters</button>
                </div>
            </div>
        </div>
    </div>
    <div class="tabs_card entero">
        <div class="medio">
            @forelse ($contentListing as $element)
                <a href="{{ route('interna', $element['id_listings'] ) }}" class="card_items active">
                    <div class="card_top">
                        <div class="card_top_price">
                            <i class="fas fa-dollar-sign"></i>
                            <p>{{ $element['base_price'] }} / night</p>
                        </div>
                        <div class="card_top_dates">
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
                        <img src="{{ URL::asset('storage/uploadListing/' . $element['photos'][0]) }}" alt="">
                        <img src="{{ URL::asset('storage/uploadListing/' . $element['photos'][1]) }}" alt="">
                        <img src="{{ URL::asset('storage/uploadListing/' . $element['photos'][2]) }}" alt="">
                    </div>

                    <div class="card_info">
                        <div class="content-dots">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>

                        <div class="card_info_text">
                            <h2 class="h2-cards">{{ $element['title'] }}</h2>
                            <div class="card_info_rating">
                                <i class="fas fa-star"></i>
                                <p>4.89 <span>(15)</span></p>
                            </div>
                        </div>
                        <h3 class="h3-cards">{{ ucwords( \App\Models\RoomsProperty::TypeName( $element['like_place'] )  . ' - ' . \App\Models\RoomsProperty::PropertyName( $element['property_type'] ) ) }}</h3>
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