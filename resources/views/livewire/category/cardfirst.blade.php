@foreach ($category as $item)
    <div class="card_items">
        <div class="card_img">
            <img src="{{ URL::asset('assets/img/category1.jpg') }}" alt="">
        </div>
        <div class="card_text">
            <h2>{{ $item->type }}</h2>
            <a href="#" class="btn-card-category">Show all</a>
        </div>
    </div>
@endforeach