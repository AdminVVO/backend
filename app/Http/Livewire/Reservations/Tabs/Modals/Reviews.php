<?php

namespace App\Http\Livewire\Reservations\Tabs\Modals;

use App\Models\Reservation;
use App\Models\ReviewClient;
use App\Models\User;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Reviews extends Component
{
    use LivewireAlert;

    public $reservation = false;
    public $reserv;
    public $data;
    public $bool = true;
    public $note = '';
    public $review = '';
    public $rating_communication = 0;
    public $rating_cleanliness = 0;
    public $rating_observance = 0;

    protected $listeners = [
        'refreshReview' => 'refreshReview'
    ];

    public function refreshReview($var)
    {
        $this->reservation = true;
        $reserv = Reservation::where('id_reservation', $var)->join('users', 'reservations.user_id', 'users.id_user')->first(['avatar', 'name', 'user_id', 'checkin', 'checkout', 'id_reservation'])->toArray();

        $this->data = $reserv;
        $checkin = Carbon::parse($this->data['checkin']);
        $checkout = Carbon::parse($this->data['checkout']);

        if ($checkin->format('Y') != $checkout->format('Y')) {
            $this->data['date'] = $checkin->format('M d Y') . ' - ' . $checkout->format('M d Y');
        } else if ($checkin->format('M') != $checkout->format('M')) {
            $this->data['date'] = $checkin->format('M d') . ' - ' . $checkout->format('M d, Y');
        } else {
            $this->data['date'] = $checkin->format('M d') . ' - ' . $checkout->format('d, Y');
        }
    }

    public function option()
    {
        $this->bool = !$this->bool;
    }

    public function createReview()
    {
        ReviewClient::create([
            'option' => 0,
            'review' => $this->review,
            'note' => $this->note,
            'user_id' => $this->data['user_id'],
            'reservation_id' => $this->data['id_reservation'],
            'rating_cleanliness' => $this->rating_cleanliness,
            'rating_communication' => $this->rating_communication,
            'rating_observance' => $this->rating_observance
        ]);

        $this->alert('success', 'Your review has been sent successfully!');
    }

    public function render()
    {
        return view('livewire.reservations.tabs.modals.reviews');
    }
}
