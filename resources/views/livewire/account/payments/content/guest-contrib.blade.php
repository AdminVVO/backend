<div class="_cont-gc">
    <div class="h2-guests">Guest contributions</div>
    <p class="_txtec">To show their appreciation for great hospitality, guests can send an optional financial contribution to a host after completing a stay or an vvoutlet Experience. You can choose to automatically allow or decline future contributions from guests.</p>

    <div class="_allow-contri">
        <div class="_txtec">Allow contributions</div>
        <input type="checkbox" class="checkbox_custom" @if( $query ) checked @endif wire:click="changeContrb">
    </div>

    <div class="_block">
        <p class="_txtec16">100% of all contributions will be deposited into your payout account, unless you have an account balance. Your payout is subject to the <a href="" class="_txtblu16">Payment Terms of Service</a>. Please note that contributions may not be tax deductible or eligible for tax credits.</p>
        <p class="_txtec16">To learn more about guest contributions visit the <a href="" class="_txtblu16">Help Center</a>.</p>
    </div>
</div>