<div class="content_resort_people">
    <h2 class="h2-guests titulo txt_upper">studio resort for 4 people!</h2>
    <div class="pd_w fx fx-ai-c">
        <div class="content-scroll-reserva scroll_n">
            <div class="tabs_items_group scroll_n">
                <h3 class="tabs_items {{ $stepBar == 'details' ? 'active_tabs' : '' }}" wire:click="changeBars('details')">Listing details</h3>
                <h3 class="tabs_items {{ $stepBar == 'pricing' ? 'active_tabs' : '' }}" wire:click="changeBars('pricing')">Pricing and availability</h3>
                <h3 class="tabs_items {{ $stepBar == 'policies' ? 'active_tabs' : '' }}" wire:click="changeBars('policies')">Policies and rules</h3>
                <h3 class="tabs_items {{ $stepBar == 'guests' ? 'active_tabs' : '' }}" wire:click="changeBars('guests')">Info for guests</h3>
            </div>
        </div>

        <div class="btn-right-scroll">
            <span class="bg-btn-right">
                <i class="fas fa-chevron-right"></i>
            </span>
        </div>
    </div>

    <div class="listing_details">
        <div class="content_listing_details">

            @if ( $stepBar == 'details' )
                @include('livewire.listing-test.indexBasic')
            @endif
            
           @if ( $stepBar == 'pricing' )
                @include('livewire.listing-test.indexPricing')
            @endif
            
            @if ( $stepBar == 'policies' )
                @include('livewire.listing-test.indexPolicies')
            @endif
            
            @if ( $stepBar == 'guests' )
                @include('livewire.listing-test.indexGuest')
            @endif

            <div class="block">
                <div class="_btnsmblu click_give_feedback" wire:click="$emitTo('listing-test.feedback', 'resetLivewireFeedback')">
                    <span>Give feedback</span>
                </div>
            </div>
        </div>
    </div>
    
</div>

@push('scripts')

    <script>
        Livewire.hook('message.processed', (message, component) => {
            $('.content_listing_details .block ._btnsm.edit').click(function(){
                $(this).parents(".block").addClass("edit_listing_post");
            });
            $(".click_cancel_listing").click(function() {
                $(this).parents(".block").removeClass("edit_listing_post");
            });

            $(".input_cant_view").keyup(function() {
                $(this).parents(".show_form_input ._flfpc").find(".views_num").html( $(this).val().length );
            });

            $(".click_show_more").on('click', function() {
                $(this).parent().find(".show_more_info").show();
                $(this).parent().find(".click_show_more").hide();
            });

            $("._input").keyup(function() {
                if ( $(this).val().length > 0) {
                    $(this).parents(".link_label_input").find(".text_placeholder").removeClass("text_placeholder").addClass("_txtec");
                } else {
                    $(this).parents(".link_label_input").find("._txtec").removeClass("_txtec").addClass("text_placeholder");
                }
            });
            
            $(".click_minumum_nights").click(function() {
                $(".show_minimum_nights").css({'display': 'flex'});
                $(".click_minumum_nights").hide();
            });
            
            $(".click_give_feedback").on("click", function(){
                $('html, body').animate({
                    scrollTop: $("body").offset().top
                }, 0);
                $(".page-category").css({'overflow': 'hidden'});
                $(".container_give-feedback").show();
            });
        })
    </script>
@endpush