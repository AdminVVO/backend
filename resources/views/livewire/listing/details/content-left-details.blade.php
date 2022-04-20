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
                    $("._show_modal-photos").removeClass("is-active");

                    if(!toggleClass) {
                        $(this).parents("._show_modal-photos").toggleClass("is-active");
                    }
                });

                $(".click_options_photos").on("click", function() {
                    let toggleClass = $(this).parents("._show_modal-photos").hasClass('is-active') ? true : false;
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
                    $("._show_modal-photos").removeClass("is-active");

                    if(!toggleClass) {
                        $(this).parents("._show_modal-photos").toggleClass("is-active");
                    }
                });

                $(".click_options_photos").on("click", function() {
                    let toggleClass = $(this).parents("._show_modal-photos").hasClass('is-active') ? true : false;
                    $("._show_modal-photos").removeClass("is-active");

                    if(!toggleClass) {
                        $(this).parents("._show_modal-photos").toggleClass("is-active");
                    }
                });
           })
        });
    </script>
@endpush
