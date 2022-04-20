<?php

namespace App\Http\Livewire\Reservations;

use App\Models\Listing\Listings;
use App\Models\ReservationForm;
use App\Models\RoomsProperty;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Str;

class ReservationFormStore extends Component
{
    use LivewireAlert;

    public $content = [];
    public $reservation;

    protected $listeners = [
        'updateCheckIn' => 'updateCheckIn',
        'updateCheckOut' => 'updateCheckOut'
    ];

    public function mount($reservation)
    {
        if ( $this->reservation == null ) {

            $code_exist = true;
            while ($code_exist) {
                $random_code = strtoupper(Str::random(10));
                $query_if_exist = ReservationForm::where(['vvo_confirm' => $random_code])->get();
                ($query_if_exist && count($query_if_exist) > 0) ? $code_exist = true : $code_exist = false;
            }
                $this->content['vvo_confirm'] = $random_code;

            $query = Listings::select(
                'listings.id_listings',
                'listings.title',
                'listings.template',
                'listing_property_roomds.like_place',
                'listing_property_roomds.property_type',
                'listing_property_roomds.listing_type',
            )
            ->leftJoin('listing_property_roomds', 'listings.id_listings', 'listing_property_roomds.listing_id')
            ->first();

                $this->content['date'] = date('d-m-Y');
                $this->content['name_site'] = $query['title'];
                $this->content['template'] = $query['template'];
                $this->content['listing'] = $query['id_listings'];
                $this->content['request'] = Auth::user()->email; 


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
                $this->content['guest_number'] = '';
                $this->content['checkin'] = '';
                $this->content['checkout'] = '';

                    if ( $query['template'] === 'MS Code' ) {
                        $this->content['in_party'] = '';
                        $this->content['of_night'] = '';
                        $this->content['preferenc_tour'] = '';
                        $this->content['gifting'] = '';
                    }

                    if ( $query['template'] !== 'MS Code' ) {
                        $this->content['room_type'] = RoomsProperty::TypeName( $query['like_place'] ) . '/' . RoomsProperty::PropertyName( $query['property_type'] ). ' - ' . RoomsProperty::TypeListing( $query['listing_type'] );
                        $this->content['city'] = '';
                        $this->content['state_address'] = '';
                        $this->content['zip_code'] = '';
                    }
        }

        if ( $this->reservation != '' ) {
            $query = ReservationForm::select(
                'id_reservation_forms',
                'vvo_confirm',
                'date',
                'request',
                'name_site',
                'costumb_name',
                'spouse_name',
                'address',
                'city',
                'state_address',
                'zip_code',
                'phone',
                'occupation',
                'spouse_occupation',
                'status_marital',
                'ages',
                'combine_amount',
                'type_card',
                'room_type',
                'guest_number',
                'checkin',
                'checkout',
                'in_party',
                'of_night',
                'preferenc_tour',
                'gifting',
                'template',
            )
            ->where(['id_reservation_forms' => $this->reservation ])
            ->first();

                $this->content['id_reservation_forms'] = $query['id_reservation_forms'];
                $this->content['vvo_confirm'] = $query['vvo_confirm'];
                $this->content['date'] = $query['date'];
                $this->content['name_site'] = $query['name_site'];
                $this->content['costumb_name'] = $query['costumb_name'];
                $this->content['spouse_name'] = $query['spouse_name'];
                $this->content['address'] = $query['address'];
                $this->content['phone'] = $query['phone'];
                $this->content['occupation'] = $query['occupation'];
                $this->content['spouse_occupation'] = $query['spouse_occupation'];
                $this->content['status_marital'] = $query['status_marital'];
                $this->content['ages'] = $query['ages'];
                $this->content['combine_amount'] = $query['combine_amount'];
                $this->content['type_card'] = $query['type_card'];
                $this->content['guest_number'] = $query['guest_number'];
                $this->content['checkin'] = $query['checkin'];
                $this->content['checkout'] = $query['checkout'];
                $this->content['template'] = $query['template'];

                    if ( $query['template'] === 'MS Code' ) {
                        $this->content['in_party'] = $query['in_party'];
                        $this->content['of_night'] = $query['of_night'];
                        $this->content['preferenc_tour'] = $query['preferenc_tour'];
                        $this->content['gifting'] = $query['gifting'];
                    }

                    if ( $query['template'] !== 'MS Code' ) {
                        $this->content['request'] = $query['request'];
                        $this->content['room_type'] = $query['room_type'];
                        $this->content['city'] = $query['city'];
                        $this->content['state_address'] = $query['state_address'];
                        $this->content['zip_code'] = $query['zip_code'];
                    }
        }
    }

    public function render()
    {
        return view('livewire.reservations.reservation-form-store');
    }

    public function submitReservationsMSCode()
    {
        $validation = Validator::make([
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

        if ( $this->reservation == null ) {
            ReservationForm::create([
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
                'listing_id'        => $this->listing,
                'user_id'           => Auth::id(),
            ]);

            return $this->flash('success', 'The reservation has been created.', [], route('reservationsResort'));
        }

        if ( $this->reservation != null ) {
           ReservationForm::where([
                'id_reservation_forms' => $this->content['id_reservation_forms'],
            ])->update([
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
            ]);

            return $this->flash('success', 'The reservation has been updated.', [], route('ReservPreview', $this->content['id_reservation_forms']));
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
            'checkin'           => $this->content['checkin'],
            'checkout'          => $this->content['checkout'],
            'guest_number'      => $this->content['guest_number'],
        ],[
            'costumb_name'      => 'required|max:50|string',
            'spouse_name'       => 'required|max:50|string',
            'address'           => 'required',
            'city'              => 'required',
            'state_address'     => 'required',
            'zip_code'          => 'required',
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
        ]);

            if ($validation->fails())
                $validation->validate();

        if ( $this->reservation == null ) {
            ReservationForm::create([
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
                'template'          => $this->content['template'],
                'listing_id'        => $this->content['listing'],
                'user_id'           => Auth::id(),
            ]);

            return $this->flash('success', 'The reservation has been created.', [], route('reservationsResort'));
        }

        if ( $this->reservation != null ) {
           ReservationForm::where([
                'id_reservation_forms' => $this->content['id_reservation_forms'],
            ])->update([
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
                'guest_number'      => $this->content['guest_number'],
                'checkin'           => $this->content['checkin'],
                'checkout'          => $this->content['checkout'],
            ]);

            return $this->flash('success', 'The reservation has been updated.', [], route('ReservPreview', $this->content['id_reservation_forms']));
        }
    }
}
