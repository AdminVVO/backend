<div>
    <div class="tabs entero">
        <div class="medio">
            <div class="content-scroll-local">
                {{-- div --}}
                <div class="tabs_items_group select">
                    @foreach ($categorys as $item)
                        {{-- h3 --}}
                        <h3 id="select" class="tabs_items" wire:click.prevent="changeCategory({{ $item->id }})">
                            {{ $item->type }}
                        </h3>
                        {{-- h3 --}}
                    @endforeach
                </div>
                {{-- div --}}
                <div class="btn-right-scroll">
                    <span class="bg-btn-right">
                        <i class="fas fa-chevron-right"></i>
                    </span>
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

                <label class="custom-anytime">
                    <select name="" id="">
                        <option value="">Filters</option>
                        <option value="">Option 1</option>
                        <option value="">Op tion 2</option>
                        <option value="">Option 3</option>
                    </select>
                    <i class="far fa-chevron-down"></i>
                </label>
            </div>
        </div>
    </div>

    <div class="tabs_card entero">

        <div class="medio">
            @foreach ($sites as $item)
                <a href="/" class="card_items">
                    <div class="card_top">
                        <div class="card_top_price">
                            <i class="fas fa-dollar-sign"></i>
                            <p>{{ $item->price }} / night</p>
                        </div>
                        <div class="card_top_dates">
                            <i class="fas fa-calendar"></i>
                            <p>{{ $item->date }}</p>
                        </div>
                    </div>
                    <button>
                        <div class="card_love">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27.003" height="23.878"
                                viewBox="0 0 27.003 23.878">
                                <g transform="translate(1.002 -1.245)" fill="rgba(222,222,222,0.38)" stroke="#dedede"
                                    stroke-width="2">
                                    <path
                                        d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z" />
                                    <path
                                        d="M22.573,3.743a6.677,6.677,0,0,0-9.111.664L12.5,5.4l-.962-.991a6.677,6.677,0,0,0-9.111-.664,7.011,7.011,0,0,0-.483,10.151l9.448,9.756a1.531,1.531,0,0,0,2.212,0l9.448-9.756a7.007,7.007,0,0,0-.479-10.151Z" />
                                </g>
                            </svg>
                        </div>
                    </button>
                    <div class="card_img">
                        {{-- //class="card_img" --}}
                        <img src="{{ URL::asset('assets/img/card/' . $item->thumbNailUrl[0]) }}" alt="">
                        <img src="{{ URL::asset('assets/img/card/' . $item->thumbNailUrl[1]) }}" alt="">
                        <img src="{{ URL::asset('assets/img/card/' . $item->thumbNailUrl[2]) }}" alt="">
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
                        <h3 class="h3-cards">{{ $item->distance }} miles away</h3>
                    </div>
                </a>

            @endforeach
        </div>
    </div>




    <script>
        //   const select = document.getElementById("select1");
        //     select.addEventListener("click", e => {
        //         select.classList.add("active_tabs");
        //     });
        // option.className="tabs_items active_tabs"
    </script>
</div>
