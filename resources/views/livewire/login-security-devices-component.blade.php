<div class="_bgpad-lg _bgpad-lg_history">
    <div class="h2-guests">Device history</div>
    <div>
        <div class="_bgpad-inf">
            @foreach ($devices as $element)
                <div class="_cont-edit">
                    <div class="_block-f">
                        <span class="_b-icon">
                            <i class="{{ $element['classIcon'] }}"></i>
                        </span>

                        <div class="_gap">
                            <div class="_txteh">{{ $element['platform'] }} · {{ $element['browser'] }}</div>
                            <div class="_txtec">{{ Carbon\Carbon::parse( $element['last_activity'], 'UTC')->locale('en')->isoFormat('LLL') }}</div>
                        </div>
                    </div>

                    @if ( $element['actived'] != true )
                        <a href="javascript:void(0)" class="_btnsm">
                            <span class="_fcontent" wire:click="logoutDevice('{{ $element['id'] }}')">
                                Log out device
                                <span class="_svg-asm">
                                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                                </span>
                            </span>
                        </a>
                    @else
                        <a class="_btnsm">
                            <span class="_fcontent">
                                This device
                            </span>
                        </a>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</div>