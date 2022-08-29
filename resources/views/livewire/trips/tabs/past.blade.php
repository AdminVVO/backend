<div wire:ignore>
    @if ($bool)
        <div class="orden_content_galerias showTripUpcoming">
            @foreach ($reservation as $key => $row)
                <div class="content_galerias">
                    <div class="slideshow-container">
                        <div class="card_img">
                            {{-- <img src="{{ URL::asset('storage/photos-listing/') . '/' . \App\Models\Listing\Listings::ListingFile($element['id_listings']) . '/' . $element['photos'][0]['name'] }}"> --}}
                            <img src="{{ URL::asset('storage/photos-listing/') . '/' . \App\Models\Listing\Listings::ListingFile($row['id_listings']) . '/' . $row['photo_one'] }}"
                                wire:ignore>
                            <img src="{{ URL::asset('storage/photos-listing/') . '/' . \App\Models\Listing\Listings::ListingFile($row['id_listings']) . '/' . $row['photo_two'] }}"
                                wire:ignore>
                            <img src="{{ URL::asset('storage/photos-listing/') . '/' . \App\Models\Listing\Listings::ListingFile($row['id_listings']) . '/' . $row['photo_three'] }}"
                                wire:ignore>
                        </div>

                        <div class="content-dots">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>
                    </div>
                    <div class="flex_info">
                        <div class="fx fx-fd-c gp6">
                            <h4>{{ $row['date'] }}</h4>
                            <h2>{{ $row['title'] }}</h2>
                        </div>
                        <p class="_txtec16 text_tm3">Description: {{ $row['descriptions'] }}</p>
                        <button type="button" class="btn-celest showDetailsPastPopup"
                            wire:click="updatePast({{ $key }})">Show details</button>
                    </div>
                </div>
            @endforeach
            @livewire('trips.tabs.modals.past')
        </div>
    @endif
</div>
