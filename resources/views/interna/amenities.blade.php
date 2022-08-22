<div class="content-user-ictxt">
    <h2 class="h2-guests skeleton skeleton_txt">What this place offers</h2>

    <div class="grd__ics_3">
        @foreach ( $amenitiesInit as $key => $element )
            @if ( $loop->iteration <= 9 )
                <div class="fx fx-ai-c gp16">
                    <div class="ics__grd-img skeleton">
                        @if ( $element['type_file'] == 'svg' )
                            <img src="{{ URL::asset('assets/img/icons/') . '/' . $element['file'] }}" alt="">
                        @else
                            <i class="fa-light {{ $element['file'] }} _i-gris24"></i>
                        @endif
                    </div>
                    <div class="_suisinfo">
                        <div class="_txtec skeleton skeleton_txt">{{ $element['name'] }}</div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>

    @if ( count( $amenitiesInit ) >= 10)
        <button type="button" class="btn-red mr-t30 show_popup_all_amenitles skeleton" style="white-space: nowrap;">Show all {{ count( $amenitiesInit ) }} amenities</button>
    @endif
</div>