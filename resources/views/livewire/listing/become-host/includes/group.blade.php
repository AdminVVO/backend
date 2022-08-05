<div class="_ctoverlay">
    <div class="content_right">
        <div class="content_hidden cs-next">
            <div class="content_mr">
                <div class="content_step">
                    <h2 class="h2_publish" style="margin-bottom: 31px;">Which of these best describes your place?</h2>
                    <div class="scroll">
                        <div class="_grid">
                            @foreach ( $property_type as $element )
                                <label class="_width fx">
                                    <input type="radio" name="group" value="{{ $element['code'] }}" wire:model.defer="inputGroup">
                                    <div class="_rect-b">
                                        @if ( $element['code'] != 'other')
                                            <div class="_img-f">
                                                <img src="{{ URL::asset('assets/img/card/' . $element['file_comm'] ) }}" alt="">
                                            </div>
                                        @else
                                            <div class="_img-f" style="padding: 21px 0;">
                                                <span class="_bg-border">
                                                    <i class="far fa-building _i-verde30"></i>
                                                </span>
                                            </div>
                                        @endif
                                        <div class="_block">
                                            <h3 class="_txteh">{{ $element['name'] }}</h3>
                                            <p class="total_local">{{ $element['comment'] }}</p>
                                        </div>
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>