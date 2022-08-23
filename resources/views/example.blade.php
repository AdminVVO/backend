@extends('layouts.App')

@section('title') NAMEPAGE @endsection

@section('css')

@endsection

@section('content')

        <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>

    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=AUH2aEPl9mINPBulpSlMN0lU44AqfR7KR5SeBB77tLBsN42tOrWc_vld7q9zH3Ud3KYdkucfd7MJIfnv&currency=USD"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({
            createOrder: function(data, actions) {
              // This function sets up the details of the transaction, including the amount and line item details.
              return actions.order.create({
                application_context: {
                  brand_name : 'Laravel Book Store Demo Paypal App',
                  user_action : 'PAY_NOW',
                },
                purchase_units: [{
                  amount: {
                    value: '50'
                  }
                }],
              });
            },

            style: {
                color:  'blue',
                shape:  'pill',
                label:  'pay',
                height: 40
            }

        }).render('#paypal-button-container');
    </script>

@endsection

@section('script')

@endsection
