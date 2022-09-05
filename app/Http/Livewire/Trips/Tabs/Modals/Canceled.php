<?php

namespace App\Http\Livewire\Trips\Tabs\Modals;

use App\Models\Listing\Listings;
use App\Models\ReservationUser;
use Carbon\Carbon;

use Livewire\Component;

class Canceled extends Component
{
    public $id_reservation = '';
    public $reservation = [];

    protected $listeners = [
        'refreshCanceled' => 'refreshCanceled'
    ];

    public function preLoad()
    {
        $this->reservation = ReservationUser::where(function ($query) {
                                        if ($this->id_reservation != '')
                                            return $query->where('id_reservation_users', $this->id_reservation);
                                        })
                                        ->first(['listing_id', 'date_in', 'date_out', 'total_amount', 'code_reservation'])
                                        ->toArray();

        $listing = Listings::join('users', 'listings.user_id', 'users.id_user')
                            ->where('id_listings', $this->reservation['listing_id'])
                            ->first()
                            ->toArray();

        $checkin = Carbon::parse($this->reservation['date_in']);
        $checkout = Carbon::parse($this->reservation['date_out']);

        if ($checkin->format('Y') != $checkout->format('Y')) {
            $this->reservation['date'] = $checkin->format('M d, Y') . ' - ' . $checkout->format('M d, Y');
        } else if ($checkin->format('M') != $checkout->format('M')) {
            $this->reservation['date'] = $checkin->format('M d') . ' - ' . $checkout->format('M d, Y');
        } else {
            $this->reservation['date'] = $checkin->format('M d') . ' - ' . $checkout->format('d, Y');
        }

        $this->reservation['title'] = $listing['title'];
        $this->reservation['phone'] = $listing['phone'];
        $this->reservation['avatar'] = $listing['avatar'];
        $this->reservation['photo1'] = $listing['photos'][0]['name'];
        $this->reservation['photo2'] = $listing['photos'][1]['name'];
        $this->reservation['photo3'] = $listing['photos'][2]['name'];
        $this->reservation['user_id'] = $listing['id_user'];
        $this->reservation['host_name'] = $listing['name'];
        $this->reservation['date_out'] = Carbon::parse($this->reservation['date_out'])->format('M, d, Y');
        $this->reservation['date_in'] = Carbon::parse($this->reservation['date_in'])->format('M, d, Y');
    }

    public function render()
    {
        $this->preLoad();
        return view('livewire.trips.tabs.modals.canceled');
    }

    public function refreshCanceled($data)
    {
        $this->id_reservation = $data;
    }
}
