<?php

namespace App\Http\Livewire\Reservations\Client;

use Livewire\Component;
use App\Models\ReservationForm;
use App\Models\RoomsProperty;
use App\Models\Listing\Listings;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Str;
use Auth;

class Index extends Component
{
    use LivewireAlert;

    public $reservation;

    public $content = [];

    protected $listeners = [
        'updateCheckIn' => 'updateCheckIn',
        'updateCheckOut' => 'updateCheckOut'
    ];

    public function render()
    {  
        return view('livewire.reservations.client.index');
    }

    public function mount()
    {
        if ( ReservationForm::where('id_reservation_forms', $this->reservation )->doesntExist() )
            return abort(404);

        $queryReservation = ReservationForm::where('id_reservation_forms', $this->reservation)->first();
        $queryListing = Listings::where('id_listings', $queryReservation['listing_id'] )->pluck('template')->first();

        if ( $queryReservation['vvo_confirm'] != null ) {

            $this->content['status']            = true;
            $this->content['vvo_confirm']       = $queryReservation['vvo_confirm'];
            $this->content['template']          = $queryListing;
            $this->content['name_site']         = $queryReservation['name_site'];
            $this->content['date']              = $queryReservation['date'];
            $this->content['request']           = $queryReservation['request'];
            $this->content['costumb_name']     = $queryReservation['costumb_name'];
            $this->content['spouse_name']       = $queryReservation['spouse_name'];
            $this->content['address']           = $queryReservation['address'];
            $this->content['phone']             = $queryReservation['phone'];
            $this->content['occupation']        = $queryReservation['occupation'];
            $this->content['spouse_occupation'] = $queryReservation['spouse_occupation'];
            $this->content['status_marital']      = $queryReservation['status_marital'];
            $this->content['ages']              = $queryReservation['ages'];
            $this->content['combine_amount']    = $queryReservation['combine_amount'];
            $this->content['type_card']         = $queryReservation['type_card'];
            $this->content['checkin']           = $queryReservation['checkin'];
            $this->content['checkout']          = $queryReservation['checkout'];
            $this->content['guest_number']      = $queryReservation['guest_number'];

                if ( $this->content['template'] === 'MS Code' ){
                    $this->content['in_party']       = $queryReservation['in_party'];
                    $this->content['of_night']       = $queryReservation['of_night'];
                    $this->content['preferenc_tour'] = $queryReservation['preferenc_tour'];
                    $this->content['gifting']        = $queryReservation['gifting'];
                }
                if ( $this->content['template'] === 'Source' ){
                    $this->content['city']          = $queryReservation['city'];
                    $this->content['state_address'] = $queryReservation['state_address'];
                    $this->content['zip_code']      = $queryReservation['zip_code'];
                    $this->content['room_type']     = $queryReservation['room_type'];
                }
        }

        if ( $queryReservation['vvo_confirm'] === null ) {

            $code_exist = true;
            while ($code_exist) {
                $random_code = strtoupper(Str::random(10));
                $query_if_exist = ReservationForm::where(['vvo_confirm' => $random_code])->get();
                ($query_if_exist && count($query_if_exist) > 0) ? $code_exist = true : $code_exist = false;
            }

            $queryListing = Listings::select(
                'listings.id_listings',
                'listings.title',
                'listings.template',
                'listing_property_roomds.like_place',
                'listing_property_roomds.property_type',
                'listing_property_roomds.listing_type',
            )
            ->where('id_listings', $queryReservation['listing_id'] )
            ->leftJoin('listing_property_roomds', 'listings.id_listings', 'listing_property_roomds.listing_id')
            ->first();

                $this->content['status']  = false;
                $this->content['vvo_confirm'] = $random_code;
                $this->content['template']  = $queryListing['template'];
                $this->content['name_site'] = $queryListing['title'];
                $this->content['date']      = date('d-m-Y');
                $this->content['request']   = Auth::user()->email; 
                $this->content['costumb_name'] = '';
                $this->content['spouse_name'] = '';
                $this->content['address'] = '';
                $this->content['phone'] = '';
                $this->content['occupation'] = '';
                $this->content['spouse_occupation'] = '';
                $this->content['status_marital'] = '';
                $this->content['ages'] = '';
                $this->content['combine_amount'] = '';
                $this->content['type_card'] = '';
                $this->content['checkin'] = '';
                $this->content['checkout'] = '';
                $this->content['guest_number'] = 0;

                if ( $this->content['template'] === 'MS Code' ){
                    $this->content['in_party'] = '';
                    $this->content['of_night'] = '';
                    $this->content['preferenc_tour'] = '';
                    $this->content['gifting'] = '';
                }

                if ( $this->content['template'] === 'Source' ){
                    $this->content['city'] = '';
                    $this->content['state_address'] = '';
                    $this->content['zip_code'] = '';
                    $this->content['room_type'] = RoomsProperty::TypeName( $queryListing['like_place'] ) . '/' . RoomsProperty::PropertyName( $queryListing['property_type'] ). ' - ' . RoomsProperty::TypeListing( $queryListing['listing_type'] );
                }
        }
    }

    public function updateCheckIn($payload)
    {
        $this->content['checkin'] = $payload;
    }

    public function updateCheckOut($payload)
    {
        $this->content['checkout'] = $payload;
    }

    public function submitReservationsSource()
    {
        $validation = Validator::make([
            'costumb_name'     => $this->content['costumb_name'],
            'spouse_name'       => $this->content['spouse_name'],
            'address'           => $this->content['address'],
            'city'              => $this->content['city'],
            'state_address'     => $this->content['state_address'],
            'zip_code'          => $this->content['zip_code'],
            'phone'             => $this->content['phone'],
            'occupation'        => $this->content['occupation'],
            'spouse_occupation' => $this->content['spouse_occupation'],
            'status_marital'      => $this->content['status_marital'],
            'ages'              => $this->content['ages'],
            'combine_amount'    => $this->content['combine_amount'],
            'type_card'         => $this->content['type_card'],
            'checkin'           => $this->content['checkin'],
            'checkout'          => $this->content['checkout'],
            'guest_number'      => $this->content['guest_number'],
        ],[
            'costumb_name'     => 'required|max:50|string',
            'spouse_name'       => 'required|max:50|string',
            'address'           => 'required',
            'city'              => 'required',
            'state_address'     => 'required',
            'zip_code'          => 'required',
            'phone'             => 'required',
            'occupation'        => 'required',
            'spouse_occupation' => 'required',
            'status_marital'      => 'required',
            'ages'              => 'required',
            'combine_amount'    => 'required',
            'type_card'         => 'required|in:visa,mastercard,amex,paypal,discover',
            'checkin'           => 'required',
            'checkout'          => 'required',
            'guest_number'      => 'integer',
        ]);

            if ($validation->fails())
                $validation->validate();

        ReservationForm::where([
            'id_reservation_forms' => $this->reservation,
        ])->update([
            'vvo_confirm'       => $this->content['vvo_confirm'],
            'date'              => $this->content['date'],
            'request'           => $this->content['request'],
            'name_site'         => $this->content['name_site'],
            'costumb_name'      => $this->content['costumb_name'],
            'spouse_name'       => $this->content['spouse_name'],
            'address'           => $this->content['address'],
            'city'              => $this->content['city'],
            'state_address'     => $this->content['state_address'],
            'zip_code'          => $this->content['zip_code'],
            'phone'             => $this->content['phone'],
            'occupation'        => $this->content['occupation'],
            'spouse_occupation' => $this->content['spouse_occupation'],
            'status_marital'    => $this->content['status_marital'],
            'ages'              => $this->content['ages'],
            'combine_amount'    => $this->content['combine_amount'],
            'type_card'         => $this->content['type_card'],
            'room_type'         => $this->content['room_type'],
            'guest_number'      => $this->content['guest_number'],
            'checkin'           => $this->content['checkin'],
            'checkout'          => $this->content['checkout'],
            'user_id'           => Auth::id()
        ]);

        $this->flash('success', 'The reservation has been created.', [], route('ReservCreate', ['reservation' => $this->reservation ] ));
    }

    public function submitReservationsMSCode()
    {
        $validation = Validator::make([
            'costumb_name'     => $this->content['costumb_name'],
            'spouse_name'       => $this->content['spouse_name'],
            'address'           => $this->content['address'],
            'phone'             => $this->content['phone'],
            'occupation'        => $this->content['occupation'],
            'spouse_occupation' => $this->content['spouse_occupation'],
            'status_marital'    => $this->content['status_marital'],
            'ages'              => $this->content['ages'],
            'combine_amount'    => $this->content['combine_amount'],
            'type_card'         => $this->content['type_card'],
            'guest_number'      => $this->content['guest_number'],
            'in_party'          => $this->content['in_party'],
            'of_night'          => $this->content['of_night'],
            'checkin'           => $this->content['checkin'],
            'checkout'          => $this->content['checkout'],
            'preferenc_tour'    => $this->content['preferenc_tour'],
            'gifting'           => $this->content['gifting'],
        ],[
            'costumb_name'      => 'required|max:50|string',
            'spouse_name'       => 'required|max:50|string',
            'address'           => 'required',
            'phone'             => 'required',
            'occupation'        => 'required',
            'spouse_occupation' => 'required',
            'status_marital'    => 'required',
            'ages'              => 'required',
            'combine_amount'    => 'required',
            'type_card'         => 'required|in:visa,mastercard,amex,paypal,discover',
            'checkin'           => 'required',
            'checkout'          => 'required',
            'guest_number'      => 'integer',
            'in_party'          => 'required',
            'of_night'          => 'required',
            'preferenc_tour'    => 'required',
            'gifting'           => 'required',
        ]);

            if ($validation->fails())
                $validation->validate();

        ReservationForm::where([
            'id_reservation_forms' => $this->reservation,
        ])->update([
            'vvo_confirm'       => $this->content['vvo_confirm'],
            'date'              => $this->content['date'],
            'request'           => $this->content['request'],
            'name_site'         => $this->content['name_site'],
            'costumb_name'      => $this->content['costumb_name'],
            'spouse_name'       => $this->content['spouse_name'],
            'address'           => $this->content['address'],
            'phone'             => $this->content['phone'],
            'occupation'        => $this->content['occupation'],
            'spouse_occupation' => $this->content['spouse_occupation'],
            'status_marital'    => $this->content['status_marital'],
            'ages'              => $this->content['ages'],
            'combine_amount'    => $this->content['combine_amount'],
            'type_card'         => $this->content['type_card'],
            'guest_number'      => $this->content['guest_number'],
            'checkin'           => $this->content['checkin'],
            'checkout'          => $this->content['checkout'],
            'in_party'          => $this->content['in_party'],
            'of_night'          => $this->content['of_night'],
            'preferenc_tour'    => $this->content['preferenc_tour'],
            'gifting'           => $this->content['gifting'],
            'user_id'           => Auth::id()
        ]);
        
        $this->flash('success', 'The reservation has been created.', [], route('ReservCreate', ['reservation' => $this->reservation ] ));
    }
}
