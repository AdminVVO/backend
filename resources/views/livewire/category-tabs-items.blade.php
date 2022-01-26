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