<div class="content-user-remodelated">
    <div class="txt_s skeleton skeleton_txt">
        <p class="_txtec">{{ $content['descriptions'] }}</p>
    </div>

    @if ( $content['space'] != null || $content['guest_access'] != null || $content['other_details'] != null )
        <button type="button" class="txtunder__ics mr-t16 abspc skeleton">
            <div class="fx fx-ai-b gp5">
                <span class="">Show more</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                    <path d="M5.294,4.227,9.3.222a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071L5.83,5.831a.755.755,0,0,1-1.043.022L.221,1.3A.757.757,0,0,1,1.289.225Z" transform="translate(0 10.584) rotate(-90)" fill="#333"/>
                </svg>
            </div>
        </button>
    @endif
</div>