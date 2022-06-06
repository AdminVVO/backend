<div>
    <div class="nav nav-leng" id="nav-leng">
        <ul>
            <li class="leng-click"><a class="btn-a {{ $classActive == 'language' ? 'activ' : '' }}" wire:click="changeClass('language')">Language and region</a></li>
            <li class="currency-click"><a class="btn-a {{ $classActive == 'currency' ? 'activ' : '' }}" wire:click="changeClass('currency')">Currency</a></li>
        </ul>
    </div>

    <div class="modal_block">
        @if ( $classActive == 'language' )
            <div class="content_hidden _lgcth">
                <div class="search_content">
                    <div class="input-wrapper">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search languages" wire:model="inputSearch">
                    </div>
                </div>

                @if ( $inputSearch )
                    <strong>Choose a language and region</strong>
                    <div class="content_leng-choose">
                        <div class="flex_content">
                            @foreach ($language as $element)
                                @if ( !$element['suggested'] )
                                    @if ( Auth::check() && $element['code'] === $authlanguage )
                                        <div class="btn_leng hr active">
                                            <h4>{{ $element['languages'] }}</h4>
                                            <p>{{ $element['name'] }}</p>
                                        </div>
                                    @else
                                        @if ( Auth::check() )
                                            <div class="btn_leng hr" wire:click="changeLanguage('{{ $element['code'] }}')">
                                        @else
                                            <div class="btn_leng hr">
                                        @endif
                                            <h4>{{ $element['languages'] }}</h4>
                                            <p>{{ $element['name'] }}</p>
                                        </div>
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                @else
                    <strong>Suggested languages and regions</strong>
                    <div class="content_leng-choose content_leng">
                        <div class="flex_content">
                            @foreach ($language as $element)
                                @if ( $element['suggested'] )
                                    @if ( Auth::check() && $element['code'] === $authlanguage )
                                        <div class="btn_leng hr {{ $element['code'] === $authlanguage ? 'active' : '' }}">
                                            <h4>{{ $element['languages'] }}</h4>
                                            <p>{{ $element['name'] }}</p>
                                        </div>
                                    @else
                                        @if ( $element['code'] === 'EN' && !Auth::check() )
                                            <div class="btn_leng hr active">
                                                <h4>{{ $element['languages'] }}</h4>
                                                <p>{{ $element['name'] }}</p>
                                            </div>
                                        @else
                                            @if ( Auth::check() )
                                                <div class="btn_leng hr" wire:click="changeLanguage('{{ $element['code'] }}')">
                                            @else
                                                <div class="btn_leng hr">
                                            @endif
                                                <h4>{{ $element['languages'] }}</h4>
                                                <p>{{ $element['name'] }}</p>
                                            </div>
                                        @endif
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <strong>Choose a language and region</strong>
                    <div class="content_leng-choose">
                        <div class="flex_content">
                            @foreach ($language as $element)
                                @if ( !$element['suggested'] )
                                    @if ( Auth::check() && $element['code'] === $authlanguage )
                                        <div class="btn_leng hr active">
                                            <h4>{{ $element['languages'] }}</h4>
                                            <p>{{ $element['name'] }}</p>
                                        </div>
                                    @else
                                        @if ( Auth::check() )
                                            <div class="btn_leng hr" wire:click="changeLanguage('{{ $element['code'] }}')">
                                        @else
                                            <div class="btn_leng hr">
                                        @endif
                                            <h4>{{ $element['languages'] }}</h4>
                                            <p>{{ $element['name'] }}</p>
                                        </div>
                                    @endif
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        @endif

        @if ( $classActive == 'currency' )
            <div class="content_hidden_currency" style="display: block;">
                <strong>Choose a currency</strong>
                <div class="content_leng-choose">
                    <div class="flex_content">
                        @foreach ($currencs as $element)
                            @if ( Auth::check() && $element['code'] === $authcurrencs )
                                <div class="btn_choose hr active">
                                    <h4>{{ $element['name'] }}</h4>
                                    <p>{{ $element['code'] }} - {{ $element['symbol'] }}</p>
                                </div>
                            @else
                                @if ( $element['code'] === 'USD' && !Auth::check() )
                                    <div class="btn_choose hr active">
                                        <h4>{{ $element['name'] }}</h4>
                                        <p>{{ $element['code'] }} - {{ $element['symbol'] }}</p>
                                    </div>
                                @else
                                    @if ( Auth::check() )
                                        <div class="btn_choose hr" wire:click="changeCurrency('{{ $element['code'] }}')">
                                    @else
                                        <div class="btn_choose hr">
                                    @endif
                                        <h4>{{ $element['name'] }}</h4>
                                        <p>{{ $element['code'] }} - {{ $element['symbol'] }}</p>
                                    </div>
                                @endif
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
