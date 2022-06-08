<div class="whfxoyx">
    <div class="poyxwh">
        <div class="popup_leng_modal">
            <div class="navcont__flech-fx">
                <div class="cont_nav">
                    <div class="nav__links-txt scroll_n owl-carousel leng_btn_nav js_navlinkstabsleng" wire:ignore>
                        <button type="button" class="li__links-txt " wire:click="changeClass('language')">
                            <span class="tabs_items {{ $classActive == 'language' ? 'active_tabs' : '' }}">Language and region</span>
                        </button>

                        <button type="button" class="li__links-txt " wire:click="changeClass('currency')">
                            <span class="tabs_items {{ $classActive == 'currency' ? 'active_tabs' : '' }}">Currency</span>
                        </button>
                    </div>

                    <div class="vvo_owl_navleng vvo_nav_flech"></div>
                </div>
            </div>
            
            @if ( $classActive == 'language' )
                <div class="content_hidden _lgcth">
                    <section class="cont_fxtl">
                        <label for="ipt__search" class="search_content mrnone">
                            <div class="input-wrapper">
                                <i class="far fa-search"></i>
                                <input type="text" id="ipt__search" placeholder="Search languages" wire:model="inputSearch">
                            </div>
                        </label>
                    </section>

                    @if ( $inputSearch )
                        <section class="cont_fxtl mr-t24">
                            <h2 class="h2-guests">Choose a language and region</h2>
                            <div class="content_leng section__legrg">
                                <ul class="lsnpm fx fx-fw-w">
                                    @foreach ($language as $element)
                                        @if ( !$element['suggested'] )
                                            @if ( Auth::check() && $element['code'] === $authlanguage )
                                                <li class="dibpwva">
                                                    <button type="button" class="leng_btn active">
                                                        <div class="h3">{{ $element['languages'] }}</div>
                                                        <div class="_txtec">{{ $element['name'] }}</div>
                                                    </button>
                                                </li>
                                            @else
                                                @if ( Auth::check() )
                                                    <li class="dibpwva">
                                                        <button type="button" class="leng_btn" wire:click="changeLanguage('{{ $element['code'] }}')">
                                                @else
                                                    <li class="dibpwva">
                                                        <button type="button" class="leng_btn">
                                                @endif
                                                        <div class="h3">{{ $element['languages'] }}</div>
                                                        <div class="_txtec">{{ $element['name'] }}</div>
                                                    </button>
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </section>
                    @else
                        <section class="cont_fxtl mr-t24">
                            <h2 class="h2-guests">Suggested languages and regions</h2>
                            <div class="content_leng section__legrg">
                                <ul class="lsnpm fx fx-fw-w">
                                    @foreach ($language as $element)
                                        @if ( $element['suggested'] )
                                            @if ( Auth::check() && $element['code'] === $authlanguage )
                                                <li class="dibpwva">
                                                    <button type="button" class="leng_btn active">
                                                        <div class="h3">{{ $element['languages'] }}</div>
                                                        <div class="_txtec">{{ $element['name'] }}</div>
                                                    </button>
                                                </li>
                                            @else
                                                @if ( $element['code'] === 'EN' && !Auth::check() )
                                                    <li class="dibpwva">
                                                        <button type="button" class="leng_btn active">
                                                            <div class="h3">{{ $element['languages'] }}</div>
                                                            <div class="_txtec">{{ $element['name'] }}</div>
                                                        </button>
                                                    </li>
                                                @else
                                                    @if ( Auth::check() )
                                                        <li class="dibpwva">
                                                            <button type="button" class="leng_btn" wire:click="changeLanguage('{{ $element['code'] }}')">
                                                    @else
                                                        <li class="dibpwva">
                                                            <button type="button" class="leng_btn">
                                                    @endif
                                                            <div class="h3">{{ $element['languages'] }}</div>
                                                            <div class="_txtec">{{ $element['name'] }}</div>
                                                        </button>
                                                    </li>
                                                @endif
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </section>

                        <section class="cont_fxtl mr-t24">
                            <h2 class="h2-guests">Choose a language and region</h2>
                            <div class="content_leng section__legrg">
                                <ul class="lsnpm fx fx-fw-w">
                                    @foreach ($language as $element)
                                        @if ( !$element['suggested'] )
                                            @if ( Auth::check() && $element['code'] === $authlanguage )
                                                <li class="dibpwva">
                                                    <button type="button" class="leng_btn active">
                                                        <div class="h3">{{ $element['languages'] }}</div>
                                                        <div class="_txtec">{{ $element['name'] }}</div>
                                                    </button>
                                                </li>
                                            @else
                                                @if ( Auth::check() )
                                                    <li class="dibpwva">
                                                        <button type="button" class="leng_btn" wire:click="changeLanguage('{{ $element['code'] }}')">
                                                @else
                                                    <li class="dibpwva">
                                                        <button type="button" class="leng_btn">
                                                @endif
                                                        <div class="h3">{{ $element['languages'] }}</div>
                                                        <div class="_txtec">{{ $element['name'] }}</div>
                                                    </button>
                                                </li>
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </section>
                    @endif
                </div>
            @endif

            @if ( $classActive == 'currency' )
                <div class="content_hidden _lgcac">
                    <section class="cont_fxtl">
                        <h2 class="h2_publish">Choose a currency</h2>
                        <div class="content_leng section__currency">
                            <ul class="lsnpm fx fx-fw-w">
                                @foreach ($currencs as $element)
                                    @if ( Auth::check() && $element['code'] === $authcurrencs )
                                        <li class="dibpwva">
                                            <button type="button" class="leng_btn active">
                                                <div class="h3">{{ $element['name'] }}</div>
                                                <div class="_txtec">{{ $element['code'] }} - {{ $element['symbol'] }}</div>
                                            </button>
                                        </li>
                                    @else
                                        @if ( $element['code'] === 'USD' && !Auth::check() )
                                            <li class="dibpwva">
                                                <button type="button" class="leng_btn active">
                                                    <div class="h3">{{ $element['name'] }}</div>
                                                    <div class="_txtec">{{ $element['code'] }} - {{ $element['symbol'] }}</div>
                                                </button>
                                            </li>
                                        @else
                                            @if ( Auth::check() )
                                                <li class="dibpwva">
                                                    <button type="button" class="leng_btn" wire:click="changeCurrency('{{ $element['code'] }}')">
                                            @else
                                                <li class="dibpwva">
                                                    <button type="button" class="leng_btn">
                                            @endif
                                                    <div class="h3">{{ $element['name'] }}</div>
                                                    <div class="_txtec">{{ $element['code'] }} - {{ $element['symbol'] }}</div>
                                                </button>
                                            </li>
                                        @endif
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </section>
                </div>
            @endif
        </div>
    </div>
</div>