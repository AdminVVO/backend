<div class="content_resort_people">
    <h2 class="h2-guests titulo txt_upper">studio resort for 4 people!</h2>
    
    <div class="navcont__flech-fx pd_w" wire:ignore>
        <div class="cont_nav js__cont_nav">
            <div class="nav__links-txt tab-container">
                <button type="button" class="li__links-txt" wire:click="changeBars('details')">
                    <span class="tabs_items active_tabs">Listing details</span>
                </button>

                <button type="button" class="li__links-txt" wire:click="changeBars('pricing')">
                    <span class="tabs_items">Pricing and availability</span>
                </button>

                <button type="button" class="li__links-txt" wire:click="changeBars('policies')">
                    <span class="tabs_items">Policies and rules</span>
                </button>

                <button type="button" class="li__links-txt" wire:click="changeBars('guests')">
                    <span class="tabs_items">Info for guests</span>
                </button>
            </div>
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

{{--     <script>
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
                animateTopModals();
                $(".container_give-feedback").show();
            });

            $(".clickInstantBookon").on("click", function(e) {
                window.livewire.emitTo('listing-test.instant-book', 'initComponent');
                animateTopModals();
                $(".container_poliandrulesedit").show();
            });
        })
    </script> --}}
@endpush