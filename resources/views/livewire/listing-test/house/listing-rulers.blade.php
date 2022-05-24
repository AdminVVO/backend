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

        <input type="checkbox" class="checkbox_custom check_i" wire:model.defer="inputChildrem" wire:click="submitChildrem">
    </div>
    <hr style="background-color: #E3EDF3; height: 1px; border: 0;">
    <div class="fx fx-ai-fs fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Suitable for infants (under 2 years)</h3>
            <div class="_width_text">
                <p class="_txtec">You can let guests know that your place isn't suitable for children if there are features that are dangerous for them. Guests will still be able to reach out for more details. <a href="#" class="_txtehlinear">Learn more</a></p>
            </div>
        </div>

        <input type="checkbox" class="checkbox_custom check_i" wire:model.defer="inputInfants" wire:click="submitInfants">
    </div>
    <hr style="background-color: #E3EDF3; height: 1px; border: 0;">
    <div class="fx fx-ai-fs fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Pets allowed</h3>
            <div class="_width_text">
                <p class="_txtec">You can limit guests from bringing pets, but you must reasonably accommodate guests that might bring an assistant animal. <a href="#" class="_txtehlinear">Learn more</a></p>
            </div>
        </div>

        <input type="checkbox" class="checkbox_custom check_i" wire:model.defer="inputPets" wire:click="submitPets">
    </div>
    <hr style="background-color: #E3EDF3; height: 1px; border: 0;">
    <div class="fx fx-ai-fs fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Smoking allowed</h3>
        </div>

        <input type="checkbox" class="checkbox_custom check_i" wire:model.defer="inputSmoking" wire:click="submitSmoking">
    </div>
    <hr style="background-color: #E3EDF3; height: 1px; border: 0;">
    <div class="fx fx-ai-fs fx-jc-sb" style="gap: 72px;">
        <div class="w100">
            <h3 class="_txteh">Events allowed</h3>
        </div>

        <input type="checkbox" class="checkbox_custom check_i" wire:model.defer="inputEvents" wire:click="submitEvents">
    </div>
</div>