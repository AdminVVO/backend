<div>
    <div class="container_all_reviews patlbrzi container_user-host" wire:ignore.self>
        <div class="paz999i0b modal_content-user"></div>

        <div class="fxpaijcpmi">
            <div class="_z4lmgp">
                <div class="fxfbwhmhbrzi">
                    <div class="fx fx-jc-e">
                        <button type="button" class="cwhfcbbpfx closeUserModal">X</button>
                    </div>

                    <div class="all_reviews_cont fx fx-fd-c">
                        <div class="ipt_contsearch">
                            <label for="ipt__search" class="search_content mrnone">
                                <div class="input-wrapper">
                                    <i class="far fa-search"></i>
                                    <input type="text" name="" id="ipt__search" wire:model.lazy="search"
                                        placeholder="Search reviews">
                                </div>
                            </label>
                        </div>
                        <div class="content_hidden">
                            <div class="content-user-nvl">
                                <div class="content-starg grndetxt fx-ai-b gp8">
                                    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation"
                                        focusable="false" style="height: 22px; width: 22px; fill: #FF5A5F;">
                                        <path
                                            d="M15.094 1.579l-4.124 8.885-9.86 1.27a1 1 0 0 0-.542 1.736l7.293 6.565-1.965 9.852a1 1 0 0 0 1.483 1.061L16 25.951l8.625 4.997a1 1 0 0 0 1.482-1.06l-1.965-9.853 7.293-6.565a1 1 0 0 0-.541-1.735l-9.86-1.271-4.127-8.885a1 1 0 0 0-1.814 0z">
                                        </path>
                                    </svg>
                                    <h2 class="fstxt">
                                        <span class="num-starg">{{ $data['rating'] }} ·</span>
                                        <span class="num-tg">({{ $data['count'] }} reviews)</span>
                                    </h2>
                                </div>

                                <div class="ciubx">
                                    <div class="_flex-lvl">
                                        <div class="_txtec">Cleanliness</div>
                                        <div class="_bkl">
                                            <div class="_nivel">
                                                <span class="_lvl"
                                                    style="width:  {{ 20 * $data['rating_cleanliness'] }}%;"></span>
                                            </div>
                                            <span
                                                class="_txtecnum">{{ number_format($data['rating_cleanliness'], 1) }}</span>
                                        </div>
                                    </div>

                                    <div class="_flex-lvl">
                                        <div class="_txtec">Communication</div>
                                        <div class="_bkl">
                                            <div class="_nivel">
                                                <span class="_lvl"
                                                    style="width: {{ 20 * $data['rating_communication'] }}%;"></span>
                                            </div>
                                            <span
                                                class="_txtecnum">{{ number_format($data['rating_communication'], 1) }}</span>
                                        </div>
                                    </div>

                                    <div class="_flex-lvl">
                                        <div class="_txtec">Check-in</div>
                                        <div class="_bkl">
                                            <div class="_nivel">
                                                <span class="_lvl"
                                                    style="width: {{ 20 * $data['rating_check'] }}%;"></span>
                                            </div>
                                            <span
                                                class="_txtecnum">{{ number_format($data['rating_check'], 1) }}</span>
                                        </div>
                                    </div>

                                    <div class="_flex-lvl">
                                        <div class="_txtec">Accuracy</div>
                                        <div class="_bkl">
                                            <div class="_nivel">
                                                <span class="_lvl"
                                                    style="width: {{ 20 * $data['rating_accuracy'] }}%;"></span>
                                            </div>
                                            <span
                                                class="_txtecnum">{{ number_format($data['rating_accuracy'], 1) }}</span>
                                        </div>
                                    </div>

                                    <div class="_flex-lvl">
                                        <div class="_txtec">Location</div>
                                        <div class="_bkl">
                                            <div class="_nivel">
                                                <span class="_lvl"
                                                    style="width: {{ 20 * $data['rating_location'] }}%;"></span>
                                            </div>
                                            <span
                                                class="_txtecnum">{{ number_format($data['rating_location'], 1) }}</span>
                                        </div>
                                    </div>

                                    <div class="_flex-lvl">
                                        <div class="_txtec">Value</div>
                                        <div class="_bkl">
                                            <div class="_nivel">
                                                <span class="_lvl"
                                                    style="width: {{ 20 * $data['rating_value'] }}%;"></span>
                                            </div>
                                            <span
                                                class="_txtecnum">{{ number_format($data['rating_value'], 1) }}</span>
                                        </div>
                                    </div>
                                </div>
                                @if(!$is_translate)
                                <div class="block-a-trad">
                                    <button class="btn-celest fx-ai-s" style="display: flex; gap: 10px;" wire:click="$emitTo('review.modal', 'translate', '')">
                                        Translate</button>
                                </div>
                                 @else

                                <div class="block-a-trad">
                                    <button class="btn-celest fx-ai-s" style="display: flex; gap: 10px;" wire:click="$emitTo('review.modal', 'original', '')">
                                        Original language</button>
                                </div>
                                 @endif
                            </div>

                            <div class="block-flex">
                                <div class="usrscontmdl mdl">
                                    <div class="cblock">
                                        @if (isset($data['content']))

                                            @foreach ($data['content'] as $item)
                                                <div class="content-user_inf">
                                                    <span class="_pf-msg ">
                                                        @if (file_exists(storage_path('app/public/uploadAvatar/' . $item['avatar'])))
                                                            <img src="{{ URL::asset('storage/uploadAvatar/') . '/' . $item['avatar'] }}"
                                                                loading="lazy" alt="">
                                                        @else
                                                            <img src="{{ URL::asset('assets/img/avatar') }}/{{ $item['avatar'] }}"
                                                                loading="lazy" alt="">
                                                        @endif
                                                    </span>
                                                    <div>
                                                        <div class="_txteh  ">
                                                            {{ $item['full_name'] }}
                                                        </div>
                                                        <ol class=" ">
                                                            <li class="_txtec">{{ $item['created_at'] }}</li>
                                                        </ol>
                                                    </div>
                                                </div>

                                                <div class="msgcont ">
                                                    <span class="_txtec text_tm3">{{ $item['comment'] }}</span>
                                                </div>
                                                <br>
                                            @endforeach
                                        @else
                                            <h1>No results for “{{ trim($search) }}”</h1>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
