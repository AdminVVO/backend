<div class="usrscont">
    
    @foreach ($comentario as $item )
    <div class="cblock">
        <div class="content-user_inf">
            <span class="_pf-msg">
                <img src="{{ URL::asset('assets/img/avatar/'.$item->photouser) }}" alt="">
            </span>
            <div>
                <div class="_txteh">{{ $item->nameuser }}</div>
                <div class="_txtec">{{ $item->date->toFormattedDateString()  }}</div>
            </div>
        </div>

        <div class="msgcont">
            <span class="_txtec">{{ $item->comment }}</span>
            <div style="display: block;">
                <a href="" class="_btnsm">
                    <span class="_fcontent">
                        <span class="_asm">Show more</span>
                        <span class="_svg-asm">
                            <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}"
                                alt="">
                        </span>
                    </span>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>