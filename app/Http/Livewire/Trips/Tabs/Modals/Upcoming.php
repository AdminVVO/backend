<?php

namespace App\Http\Livewire\Trips\Tabs\Modals;

use App\Models\Listing\Listings;
use App\Models\ReservationUser;
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
        $this->reservation = ReservationUser::join('users', 'users.id_user', 'reservation_users.user_id')->where(function ($query) {
            if ($this->id_reservation != '')
                return $query->where('id_reservation_users', $this->id_reservation);
        })
            ->first(['listing_id', 'date_in', 'date_out', 'total_amount', 'name as client_name', 'guest', 'code_reservation', 'guest', 'users.avatar'])
            ->toArray();

        $listing = Listings::join('users', 'listings.user_id', 'users.id_user')
            ->where('id_listings', $this->reservation['listing_id'])
            ->join('listing_locations', 'listings.id_listings', 'listing_locations.listing_id')
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
        $this->reservation['currency_default'] = $listing['currency_default'];
        $this->reservation['next_count'] = $this->reservation['guest']['total'];
        $this->reservation['photo1'] = $listing['photos'][0]['name'];
        $this->reservation['photo2'] = $listing['photos'][1]['name'];
        $this->reservation['photo3'] = $listing['photos'][2]['name'];
        $this->reservation['user_id'] = $listing['id_user'];
        $this->reservation['host_name'] = $listing['name'];
        $this->reservation['street'] = $listing['street'];
        $this->reservation['city'] = $listing['city'];
        $this->reservation['zip_code'] = $listing['zip_code'];
        $this->reservation['state'] = $listing['state'];
        $this->reservation['date_out'] = Carbon::parse($this->reservation['date_out'])->format('M, d, Y');
        $this->reservation['date_in'] = Carbon::parse($this->reservation['date_in'])->format('M, d, Y');
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
        $pdfContent = PDF::loadView('pdf.receipts',['reservation' => $this->reservation])->output();
        // $pdfContent = PDF::loadView('pdf.index',['reservation' => $this->reservation])->output();
        return response()->streamDownload(
            fn () => print($pdfContent),
            "filename.pdf"
        );
    }

    public function sharePDFDetail()
    {
        $pdfContent = PDF::loadView('pdf.detail',['reservation' => $this->reservation])->output();
        return response()->streamDownload(
            fn () => print($pdfContent),
            "filename.pdf"
        );
    }
}
