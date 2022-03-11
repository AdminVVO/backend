<div class="block" style="gap: 17px;">
    <div class="fx fx-ai-c fx-jc-sb" style="gap: 25px;">
        <h2 class="h2-guests">Photos</h2>
        <div class="_btnsm">
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>

    <div class="post_right_carrousel">
        <div class="content_photos_resort scroll_n">
            <div class="tabs_items_group scroll_n">
                @foreach ( $content['photos'] as $element )
                    <div class="block-img">
                        <img src="{{ URL::asset('storage/uploadListing/') }}/{{ $element }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>

        <div class="_cbtn">
            <button type="button" class="_sbtn">
                <span class="_c9ajsd" style="font-size: 16px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8.378" height="14.652" viewBox="0 0 8.378 14.652">
                        <path d="M13.516,17.1l5.54-5.545a1.043,1.043,0,0,1,1.479,0,1.056,1.056,0,0,1,0,1.483l-6.278,6.282a1.045,1.045,0,0,1-1.444.031L6.493,13.042a1.047,1.047,0,0,1,1.479-1.483Z" transform="translate(-11.246 20.84) rotate(-90)" fill="#00b5dd"></path>
                    </svg>
                </span>
            </button>
        </div>
    </div>
</div>