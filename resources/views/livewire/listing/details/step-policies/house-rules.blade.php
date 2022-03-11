<div class="block">
    <div class="w100">
        <h2 class="h2-guests">House rules</h2>
        <div class="_width_text">
            <p class="_txtec">Guests must agree to your house rules before they book. <a href="#" class="_txtehlinear">Read tips on setting house rules</a></p>
        </div>
    </div>

    <div class="fx fx-ai-fs fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Suitable for children (2-12 years)</h3>
            <div class="_width_text">
                <p class="_txtec">You can let guests know that your place isn't suitable for children if there are features that are dangerous for them. Guests will still be able to reach out for more details. <a href="#" class="_txtehlinear">Learn more</a></p>
            </div>
        </div>

        <input type="checkbox" class="checkbox_custom check_i" wire:model.defer="content.suitable_for_children" wire:click="submitChildren">
    </div>
</div>

<div class="block">
    <div class="fx fx-ai-fs fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Suitable for infants (under 2 years)</h3>
            <div class="_width_text">
                <p class="_txtec">You can let guests know that your place isn't suitable for children if there are features that are dangerous for them. Guests will still be able to reach out for more details. <a href="#" class="_txtehlinear">Learn more</a></p>
            </div>
        </div>

        <input type="checkbox" class="checkbox_custom check_i" wire:model.defer="content.suitable_for_infants" wire:click="submitInfants">
    </div>
</div>

<div class="block">
    <div class="fx fx-ai-fs fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Pets allowed</h3>
            <div class="_width_text">
                <p class="_txtec">You can limit guests from bringing pets, but you must reasonably accommodate guests that might bring an assistant animal. <a href="#" class="_txtehlinear">Learn more</a></p>
            </div>
        </div>

        <input type="checkbox" class="checkbox_custom check_i" wire:model.defer="content.pets_allowed" wire:click="submitPetsRuls">
    </div>
</div>

<div class="block">
    <div class="fx fx-ai-fs fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Smoking allowed</h3>
        </div>

        <input type="checkbox" class="checkbox_custom check_i" wire:model.defer="content.smoking_allowed" wire:click="submitSmoking">
    </div>
</div>

<div class="block">
    <div class="fx fx-ai-fs fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Events allowed</h3>
        </div>

        <input type="checkbox" class="checkbox_custom check_i" wire:model.defer="content.events_allowed" wire:click="submitEvent">
    </div>
</div>

<div class="block {{ $classActive['addition_rulers'] ? 'edit_listing_post' : ''}}">
    <div class="fx fx-ai-b fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Additional rules</h3>
            <div class="_width_text show_info">
                @if ( $content['additional_rules'] != '' && $content['additional_rules'] != 0 )
                    <span class="_txtec">{{ $content['additional_rules'] }}</span>
                @else
                    <span class="_txtec">Not set</span>
                @endif
            </div>

            <div class="_width_text show_text">
                <p class="_txtec">You can include any requirements around safety concerns, shared space rules, and your community regulations.</p>
            </div>
            
            <form wire:submit.prevent="submitAdditional" class="show_form_input" style="margin-top: 30px;">
                <div class="_flfpc">
                    <textarea class="_txta-modls @error('additional_rules') error_input @enderror" wire:model.defer="content.additional_rules" rows="15" style="height: auto;"></textarea>
                    @error('additional_rules')
                        <div  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 30px;">
                    <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("addition_rulers")'>
                        <span>Cancel</span>
                    </div>
                    <button class="btn-celest">Save</button>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("addition_rulers")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>