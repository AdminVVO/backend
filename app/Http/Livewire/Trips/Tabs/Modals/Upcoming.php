<?php

namespace App\Http\Livewire\Trips\Tabs\Modals;

use App\Models\Listing\Listings;
use App\Models\Reservation;
use Carbon\Carbon;
use Livewire\Component;
use PDF;

class Upcoming extends Component
{
    public $id_reservation = '';
    public $reservation = [];
    public $map = true;

    protected $listeners = [
        'refreshDetail' => 'refreshDetail'
    ];

    public function preLoad()
    {
        $this->reservation = Reservation::where(function ($query) {
            if ($this->id_reservation != '')
                return $query->where('id_reservation', $this->id_reservation);
        })
            ->first(['listing_id', 'checkin', 'checkout', 'total_payout'])
            ->toArray();

        $listing = Listings::join('users', 'listings.user_id', 'users.id_user')
            ->where('id_listings', $this->reservation['listing_id'])
            ->join('listing_locations', 'listings.id_listings', 'listing_locations.listing_id')
            ->first()
            ->toArray();

        $avatar = Reservation::join('users', 'reservations.user_id', 'users.id_user')
            ->join('listings', 'reservations.listing_id', 'listings.id_listings')
            ->where('id_listings', $this->reservation['listing_id'])
            ->where('checkin', '>', Carbon::parse(now())->format('Y-m-d'))
            ->get('avatar')->toArray();

        $checkin = Carbon::parse($this->reservation['checkin']);
        $checkout = Carbon::parse($this->reservation['checkout']);

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
        $this->reservation['next_user_avatar'] = $avatar ?? '';
        $this->reservation['next_count'] = count($avatar);
        $this->reservation['photo1'] = $listing['photos'][0]['name'];
        $this->reservation['photo2'] = $listing['photos'][1]['name'];
        $this->reservation['photo3'] = $listing['photos'][2]['name'];
        $this->reservation['user_id'] = $listing['id_user'];
        $this->reservation['host_name'] = $listing['name'];
        $this->reservation['street'] = $listing['street'];
        $this->reservation['city'] = $listing['city'];
        $this->reservation['zip_code'] = $listing['zip_code'];
        $this->reservation['state'] = $listing['state'];
        $this->reservation['checkout'] = Carbon::parse($this->reservation['checkout'])->format('M, d, Y');
        $this->reservation['checkin'] = Carbon::parse($this->reservation['checkin'])->format('M, d, Y');
        $this->reservation['maps'] = ($listing['street'] ?? '') . ' ' . ($listing['city'] ?? '') . ' ' . $listing['zip_code'];
    }

    public function render()
    {
        $this->preLoad();
        return view('livewire.trips.tabs.modals.upcoming');
    }

    public function refreshDetail($data)
    {
        $this->id_reservation = $data;
    }

    public function sharePDF()
    {
        $pdfContent = PDF::loadView('index',['data' => 'ahahaha'])->output();
        return response()->streamDownload(
            fn () => print($pdfContent),
            "filename.pdf"
        );
    }
}
