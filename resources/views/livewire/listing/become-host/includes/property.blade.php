<div class="_ctoverlay">
    <div class="content_right">
        <div class="content_hidden">
            <div class="content_mr">
                <div class="content_step">
                    <h2 class="h2_publish" style="margin-bottom: 31px;">What kind of place will you host?</h2>
                    <div class="_grid next">
                        @foreach ( $property as $element )
                            <div>
                                <input type="radio" id="{{ $element['type'] }}" wire:model.defer="inputProperty" name="step" value="{{ $element['type'] }}">

                                <label for="{{ $element['type'] }}" class="_rect-b">
                                    <div class="_img-f">
                                        <img src="{{ URL::asset('assets/img/card/' . $element['file'] ) }}" alt="">
                                    </div>
                                    <div class="_block">
                                        <h3 class="_txteh">{{ $element['name_type'] }}</h3>
                                    </div>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>