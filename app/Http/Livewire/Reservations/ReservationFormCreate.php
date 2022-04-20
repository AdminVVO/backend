<?php

namespace App\Http\Livewire\Reservations;

use App\Models\Listing\Listings;
use App\Models\ReservationForm;
use App\Models\RoomsProperty;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Auth;
use Str;

class ReservationFormCreate extends Component
{
    use LivewireAlert;

    public $listing;
    public $confim_vvo;
    public $date;
    public $name_site;
    public $request;
    public $room_type;
    public $template;
    public $datepicker;

    /* All Template */
    public $customer_name = '';
    public $spouse_name = '';
    public $address = '';
    public $phone = '';
    public $occupation = '';
    public $occupation_spouse = '';
    public $marrid_stats = '';
    public $ages = '';
    public $combine_amount = '';
    public $type_card = '';
    public $checkin = '';
    public $checkout = '';
    public $number_guest = 0;

    /* Sources Template */
    public $city = '';
    public $state = '';
    public $zip_code = '';

    /* Sources Template */
    public $in_party = '';
    public $of_night = '';
    public $preferenc_tour = '';
    public $gifting = '';


    public function mount()
    {
        $code_exist = true;
        while ($code_exist) {
            $random_code = strtoupper(Str::random(10));
            $query_if_exist = ReservationForm::where(['vvo_confirm' => $random_code])->get();
            ($query_if_exist && count($query_if_exist) > 0) ? $code_exist = true : $code_exist = false;
        }
            $this->confim_vvo = $random_code;

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

        $this->listing   = $query['id_listings'];
        $this->template  = $query['template'];
        $this->name_site = $query['title'];
        $this->date = date('d-m-Y');
        $this->request = Auth::user()->email; 

        if ( $this->template != 'MS Code')
            $this->room_type = RoomsProperty::TypeName( $query['like_place'] ) . '/' . RoomsProperty::PropertyName( $query['property_type'] ). ' - ' . RoomsProperty::TypeListing( $query['listing_type'] );

    }

    public function render()
    {
        return view('livewire.reservations.reservation-form-create');
    }

    public function submitReservationsSource()
    {
        $validation = Validator::make([
            'customer_name'     => $this->customer_name,
            'spouse_name'       => $this->spouse_name,
            'address'           => $this->address,
            'city'              => $this->city,
            'state'             => $this->state,
            'zip_code'          => $this->zip_code,
            'phone'             => $this->phone,
            'occupation'        => $this->occupation,
            'occupation_spouse' => $this->occupation_spouse,
            'marrid_stats'      => $this->marrid_stats,
            'ages'              => $this->ages,
            'combine_amount'    => $this->combine_amount,
            'type_card'         => $this->type_card,
            'checkin'           => $this->checkin,
            'checkout'          => $this->checkout,
            'number_guest'      => $this->number_guest,
        ],[
            'customer_name'     => 'required|max:50|string',
            'spouse_name'       => 'required|max:50|string',
            'address'           => 'required',
            'city'              => 'required',
            'state'             => 'required',
            'zip_code'          => 'required',
            'phone'             => 'required',
            'occupation'        => 'required',
            'occupation_spouse' => 'required',
            'marrid_stats'      => 'required',
            'ages'              => 'required',
            'combine_amount'    => 'required',
            'type_card'         => 'required|in:visa,mastercard,amex,paypal,discover',
            'checkin'           => 'required',
            'checkout'          => 'required',
            'number_guest'      => 'integer',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ReservationForm::create([
            'vvo_confirm'       => $this->confim_vvo,
            'date'              => $this->date,
            'request'           => $this->request,
            'name_site'         => $this->name_site,
            'costumb_name'      => $this->customer_name,
            'spouse_name'       => $this->spouse_name,
            'address'           => $this->address,
            'city'              => $this->city,
            'state_address'     => $this->state,
            'zip_code'          => $this->zip_code,
            'phone'             => $this->phone,
            'occupation'        => $this->occupation,
            'spouse_occupation' => $this->occupation_spouse,
            'status_marital'    => $this->marrid_stats,
            'ages'              => $this->ages,
            'combine_amount'    => $this->combine_amount,
            'type_card'         => $this->type_card,
            'room_type'         => $this->room_type,
            'guest_number'      => $this->number_guest,
            'checkin'           => $this->checkin,
            'checkout'          => $this->checkout,
            'listing_id'        => $this->listing,
            'user_id'           => Auth::id(),
        ]);

        $this->flash('success', 'The reservation has been created.', [], route('reservationsResort'));
    }

    public function submitReservationsMSCode()
    {
        $validation = Validator::make([
            'customer_name'     => $this->customer_name,
            'spouse_name'       => $this->spouse_name,
            'address'           => $this->address,
            'phone'             => $this->phone,
            'occupation'        => $this->occupation,
            'occupation_spouse' => $this->occupation_spouse,
            'marrid_stats'      => $this->marrid_stats,
            'ages'              => $this->ages,
            'combine_amount'    => $this->combine_amount,
            'type_card'         => $this->type_card,
            'number_guest'      => $this->number_guest,
            'in_party'          => $this->in_party,
            'of_night'          => $this->of_night,
            'checkin'           => $this->checkin,
            'checkout'          => $this->checkout,
            'preferenc_tour'    => $this->preferenc_tour,
            'gifting'           => $this->gifting,
        ],[
            'customer_name'     => 'required|max:50|string',
            'spouse_name'       => 'required|max:50|string',
            'address'           => 'required',
            'phone'             => 'required',
            'occupation'        => 'required',
            'occupation_spouse' => 'required',
            'marrid_stats'      => 'required',
            'ages'              => 'required',
            'combine_amount'    => 'required',
            'type_card'         => 'required|in:visa,mastercard,amex,paypal,discover',
            'checkin'           => 'required',
            'checkout'          => 'required',
            'number_guest'      => 'integer',
            'in_party'          => 'required',
            'of_night'          => 'required',
            'preferenc_tour'    => 'required',
            'gifting'           => 'required',
        ]);

            if ($validation->fails())
                $validation->validate();
        
        ReservationForm::create([
            'vvo_confirm'       => $this->confim_vvo,
            'date'              => $this->date,
            'request'           => $this->request,
            'name_site'         => $this->name_site,
            'costumb_name'      => $this->customer_name,
            'spouse_name'       => $this->spouse_name,
            'address'           => $this->address,
            'phone'             => $this->phone,
            'occupation'        => $this->occupation,
            'spouse_occupation' => $this->occupation_spouse,
            'status_marital'    => $this->marrid_stats,
            'ages'              => $this->ages,
            'combine_amount'    => $this->combine_amount,
            'type_card'         => $this->type_card,
            'guest_number'      => $this->number_guest,
            'checkin'           => $this->checkin,
            'checkout'          => $this->checkout,
            'in_party'          => $this->in_party,
            'of_night'          => $this->of_night,
            'preferenc_tour'    => $this->preferenc_tour,
            'gifting'           => $this->gifting,
            'listing_id'        => $this->listing,
            'user_id'           => Auth::id(),
        ]);

        $this->flash('success', 'The reservation has been created.', [], route('reservationsResort'));
    }
}
