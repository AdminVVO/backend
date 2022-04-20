<div class="content_resort_people">
    <h2 class="h2-guests titulo txt_upper">{{ strtoupper( $content['title'] ) }}</h2>
    <div class="pd_w fx fx-ai-c" wire:ignore>
        <div class="content-scroll-reserva scroll_n">
            <div class="tabs_items_group scroll_n">
                <h3 class="tabs_items active_tabs" wire:click="changeBars('details')">Listing details</h3>
                <h3 class="tabs_items" wire:click="changeBars('pricing')">Pricing and availability</h3>
                <h3 class="tabs_items" wire:click="changeBars('policies')">Policies and rules</h3>
                <h3 class="tabs_items" wire:click="changeBars('guests')">Info for guests</h3>
            </div>
        </div>

        <div class="btn-right-scroll">
            <span class="bg-btn-right">
                <i class="fas fa-chevron-right"></i>
            </span>
        </div>
    </div>

    <div class="policies_rules">
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
        
            @if ( $stepBar == 'details' )
                @include('livewire.listing.details.content-left-details')
            @endif
            
           @if ( $stepBar == 'pricing' )
                @include('livewire.listing.details.content-left-pricing')
            @endif
            
            @if ( $stepBar == 'policies' )
                @include('livewire.listing.details.content-left-policies')
            @endif
            
            @if ( $stepBar == 'guests' )
                @include('livewire.listing.details.content-left-guests')
            @endif

            <div class="block">
                <div class="_btnsmblu" wire:click="modalFeedback">
                    <span>Give feedback</span>
                </div>
            </div>
        </div>
    </div>
    
</div>


@push('scripts')
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script> --}}
    <script>

        document.addEventListener("DOMContentLoaded", () => {

            Livewire.hook('element.updated', (el, component) => {

                $(".click_show_more").on('click', function() {
                    $(this).parent().find(".show_more_info").show();
                    $(this).parent().find(".click_show_more").hide();
                });

                $(".click_give_feedback").click(function() {
                    $('html,body').animate({
                        scrollTop: $("body").offset().top
                    }, 10);
                    $(".container_give-feedback").css({'display': 'block'});
                    $(".page-category").css({'overflow': 'hidden'});
                });

                $(".click_preview_guests_pay").click(function() {
                    $('html,body').animate({
                        scrollTop: $("body").offset().top
                    }, 10);
                    $(".container_preview_guests_pay").css({'display': 'block'});
                    $(".page-category").css({'overflow': 'hidden'});
                });
            })
        });

        // function LoadClassicEditor(){
        //     ClassicEditor.create( document.querySelector( '#editor' ), {
        //         toolbar: [ 'Heading', 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote', 'undo', 'redo' ]
        //     })
        //     .then(editor => {
        //         editor.model.document.on('change:data', () => {
        //             @this.set('content.additional_rules', editor.getData());
        //         })
        //     })
        //     .catch( error => {
        //         console.error( error );
        //     });
        // }

    </script>
@endpush

