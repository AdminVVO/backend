<div 
    class="mr-b32" 
    wire:ignore.self
    x-data
    x-init="
        amount = {{ $attributes->get('amount') }};
            window.addEventListener('changeAmount', event => { amount = event.detail.amount; });

        paypal.Buttons({
            style: {
                color:  'blue',
                shape:  'pill',
                label:  'pay',
                height: 40
            },
            createOrder: function(data, actions) {
                return actions.order.create({
                    application_context: {
                        brand_name : 'Vvoutlet Paypal App',
                        user_action : 'PAY_NOW',
                    },
                    purchase_units: [{
                        amount: {
                            value: amount
                        }
                    }],
                });
            },

            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    if( details.status == 'COMPLETED'){
                        Livewire.emitTo('interna.interna-confirm-pay', 'successPaypaEvent', details)
                    }
                });
            },

            onCancel: function (data) {
                Livewire.emitTo('interna.interna-confirm-pay', 'cancelPaypaEvent')
            }
        }).render('#paypal-button-container');
    "
>
    <div id="paypal-button-container" wire:ignore></div>

</div>

@push('style')
    @once
    @endonce
@endpush

@push('alpine_scripts')
    @once
        <script src="https://www.paypal.com/sdk/js?client-id=AUH2aEPl9mINPBulpSlMN0lU44AqfR7KR5SeBB77tLBsN42tOrWc_vld7q9zH3Ud3KYdkucfd7MJIfnv&currency=USD"></script>
    @endonce
@endpush