<div class="content-scroll-local">
    <div class="tabs_items_group">
        @foreach ( $category as $item )
        <h3 class="tabs_items active_tabs">{{ $item->type }}</h3>
        @endforeach
    </div>
    <div class="btn-right-scroll">
        <span class="bg-btn-right">
            <i class="fas fa-chevron-right"></i>
        </span>
    </div>
</div>

<div class="tabs_select">
    <label class="custom-anytime">
        <select name="" id="">
            <option value="">Anytime</option>
            <option value="">Option 1</option>
            <option value="">Option 2</option>
            <option value="">Option 3</option>
        </select>
        <i class="far fa-chevron-down"></i>
    </label>

    <label class="custom-anytime">
        <select name="" id="">
            <option value="">Guests</option>
            <option value="">Option 1</option>
            <option value="">Option 2</option>
            <option value="">Option 3</option>
        </select>
        <i class="far fa-chevron-down"></i>
    </label>

    <label class="custom-anytime">
        <select name="" id="">
            <option value="">Filters</option>
            <option value="">Option 1</option>
            <option value="">Op tion 2</option>
            <option value="">Option 3</option>
        </select>
        <i class="far fa-chevron-down"></i>
    </label>
</div>