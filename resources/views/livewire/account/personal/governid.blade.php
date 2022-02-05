<div class="_yellow-bg {{ $classActive ? 'personal_edit' : ''}}">
    <div class="_bgpadding">
        <div class="_cont-edit">
            <div class="_txteh">Government ID</div>

            <a href="javascript:void(0)" class="_btnsm" wire:click='statusUpdate()'>
                <span class="_fcontent edit">
                    Edit
                    <span class="_svg-asm">
                        <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                    </span>
                </span>

                <span class="_fcontent cancel">
                    Cancel
                    <span class="_svg-asm">
                        <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                    </span>
                </span>
            </a>
        </div>
        
        @if ( empty( $query ) )
            <div class="_txtec none">Not provided</div>
        @else
            <div class="_txtec none">1 File uploaded</div>
        @endif

        <form class="_form">
            @if ( !empty( $query ) )
                <div class="txt-check-in">Government ID uploaded</div>
                <a href="{{ URL::asset('storage/GovernID/') }}/{{ $query }}" target="_blank" class="_cont-edit" style="padding-top: 25px;">
                    <img src="{{ URL::asset('storage/GovernID/') }}/{{ $query }}" width="300" height="300">
                </a>
            @endif

            @if ( empty( $query ) )
                <a href="{{ route('govermID') }}" class="btn-celest">Add Government ID</a>
            @else
                <a href="{{ route('govermID') }}" class="btn-celest">Change Government ID</a>
            @endif
        </form>
    </div>
</div>