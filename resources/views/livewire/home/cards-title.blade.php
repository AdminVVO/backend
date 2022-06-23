<div class="fx cards_content">
    <div class="features-slides">
        @foreach ($contentListing as $element)
            <a href="{{ route('interna', $element['id_listings'] ) }}" id="skeleton_card">
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
                        <h2 class="h2-cards text_tm1 skeleton skeleton_txt">{{ $element['title'] }}</h2>
                    </div>
                    <h3 class="h3-cards text_tm1 skeleton skeleton_txt">{{ ucwords( \App\Models\RoomsProperty::TypeName( $element['like_place'] )  . ' - ' . \App\Models\RoomsProperty::PropertyName( $element['property_type'] ) ) }}</h3>
                </div>
            </a>
        @endforeach
    </div>

    <div class="features-slide_navs">
        <button type="button" class="features-slide_nav__prev prev-btn">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button type="button" class="features-slide_nav__next next-btn">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.hook('message.processed', (message, component) => {
            carousel3D();
            function carousel3D() {
                var sliders = [];
                var delay = 4000;
                var timerId;
                var remaining;
                var start;
                var current_playing;
                $(".features-slides").find("a").each(function () {
                    this.className += "card_items slider-hide";
                    sliders.push({ html: this })
                });
                function slider_init() {
                    $(".features-slides").css('display', 'flex');
                    slider_display(sliders, 0);
                    slider_loop(sliders, -1, delay);
                }
                function slider_display(A, i) {
                    if (i < 0) {
                        i = A.length - 1;
                    }
                    current_playing = i;
                    A[(i + A.length + 3) % A.length].html.className += " slider-hide";
                    A[(i + A.length) % A.length].html.className = "card_items card_items_active";
                    A[(i + A.length - 1) % A.length].html.className = "card_items slider-left-1";
                    A[(i + A.length - 2) % A.length].html.className = "card_items slider-left-2";
                    A[(i + A.length + 1) % A.length].html.className = "card_items slider-right-1";
                    A[(i + A.length + 2) % A.length].html.className = "card_items slider-right-2";

                }
                function slider_loop(A, i, remaining) {
                    start = new Date();
                    if (i < 0) {
                        i = A.length - 1;
                    }
                }
                $(".cards_content").hover(function () {
                    window.clearTimeout(timerId);
                    remaining = delay - (new Date() - start);
                    $(".features-slide_navs .prev-btn").on("click",function () {
                        current_playing++;
                        slider_display(sliders, current_playing);
                    });
                    $(".features-slide_navs .next-btn").on("click",function () {
                        current_playing--;
                        slider_display(sliders, current_playing);
                    });
                }, function () {
                    slider_loop(sliders, current_playing, remaining);
                    $(".features-slide_navs .prev-btn").unbind("click");
                    $(".features-slide_navs .next-btn").unbind("click");
                });
                slider_init();
            }

            skeleton();
            function skeleton() {
                let loadings = $(".skeleton");
                $(loadings).addClass("transition");
                
                for (loading of loadings) {
                    $(loading).removeClass("skeleton skeleton_card skeleton_txt");
                }
            }
        })
    </script>
@endpush