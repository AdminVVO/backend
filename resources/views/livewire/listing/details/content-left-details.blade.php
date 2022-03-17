<div class="listing_details">
    <div class="content_listing_details">
        <div class="anuncio_start_hosting block" wire:ignore>
            <div class="_bgpadd-f">
                <i class="far fa-bell"></i>
                <div>
                    <div class="fx fx-jc-sb fx-ai-c" style="gap: 18px;">
                        <div class="_txteh" style="margin-bottom: 8px;">Start hosting longer stays</div>
                        <button class="btn-border_x click_x_anuncio">X</button>
                    </div>
                    <p class="_txtec">We've seen a recent increase in guests looking for weekly and monthly stays close to home. To earn more while supporting your local community, consider updating your settings to allow longer stays.</p>
                    <a href="#" class="btn-border" style="margin-top: 14px;">Review all</a>
                </div>
            </div>
        </div>

        {{-- Listing Gallery --}}
        @include('livewire.listing.details.step-details.gallery')

        {{-- Listing Basic --}}
        @include('livewire.listing.details.step-details.basic')

        {{-- Listing Location --}}
        @include('livewire.listing.details.step-details.location')

        {{-- Listing Property and roomd --}}
        @include('livewire.listing.details.step-details.property-roomd')

        {{-- Listing Guest safety --}}
        @include('livewire.listing.details.step-details.safety')

        <div class="block">
            <a href="" class="_btnsmblu">
                <span>Give feedback</span>
            </a>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            Livewire.hook('component.initialized', (component) => {
                const $cover_photos = $(".show_cover_photo");
                $(document).mouseup(e => {
                    if (!$cover_photos.is(e.target) && $cover_photos.has(e.target).length === 0) {
                        $("._show_modal-photos").removeClass("is-active");
                    }
                });
                
                $(".click_cover_photos").on("click", function() {
                    let toggleClass = $(this).parents("._show_modal-photos").hasClass('is-active') ? true : false;
                    console.log("toggleClass", toggleClass);
                    $("._show_modal-photos").removeClass("is-active");

                    if(!toggleClass) {
                        $(this).parents("._show_modal-photos").toggleClass("is-active");
                    }
                });

                $(".click_options_photos").on("click", function() {
                    let toggleClass = $(this).parents("._show_modal-photos").hasClass('is-active') ? true : false;
                    console.log("toggleClass", toggleClass);
                    $("._show_modal-photos").removeClass("is-active");

                    if(!toggleClass) {
                        $(this).parents("._show_modal-photos").toggleClass("is-active");
                    }
                });
            })

           Livewire.hook('element.updated', (el, component) => {
                const $cover_photos = $(".show_cover_photo");
                $(document).mouseup(e => {
                    if (!$cover_photos.is(e.target) && $cover_photos.has(e.target).length === 0) {
                        $("._show_modal-photos").removeClass("is-active");
                    }
                });
                
                $(".click_cover_photos").on("click", function() {
                    let toggleClass = $(this).parents("._show_modal-photos").hasClass('is-active') ? true : false;
                    console.log("toggleClass", toggleClass);
                    $("._show_modal-photos").removeClass("is-active");

                    if(!toggleClass) {
                        $(this).parents("._show_modal-photos").toggleClass("is-active");
                    }
                });

                $(".click_options_photos").on("click", function() {
                    let toggleClass = $(this).parents("._show_modal-photos").hasClass('is-active') ? true : false;
                    console.log("toggleClass", toggleClass);
                    $("._show_modal-photos").removeClass("is-active");

                    if(!toggleClass) {
                        $(this).parents("._show_modal-photos").toggleClass("is-active");
                    }
                });
           })
        });
    </script>
@endpush
