<?php

namespace App\Http\Livewire\Reservations\Tabs\Modals;

use App\Models\ReportUsers;
use App\Models\Reservation;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Reports extends Component
{
    use LivewireAlert;

    public $reservation;
    public $user;
    public $option = 0;
    public $reason = '';

    protected $listeners = [
        'refreshReport' => 'refreshReport'
    ];

    public function render()
    {
        return view('livewire.reservations.tabs.modals.reports');
    }

    public function type($value)
    {
        $this->reset('reason');
        $this->option = $value;
    }

    public function createReport()
    {
        $reported = ReportUsers::where('reservation_id', $this->reservation)->where('user_id', $this->user)->get();
        if ($reported) {
            $this->alert('info', 'You have already reported this user!');
        } else {
            ReportUsers::create([
                'user_id' => $this->user,
                'reservation_id' => $this->reservation,
                'option' => $this->option,
                'reason' => $this->reason
            ]);

            $this->alert('success', 'The user has been reported!');
        }
    }

    public function refreshReport($data)
    {
        $user = Reservation::where('id_reservation', $data)->first('user_id')->toArray();
        $this->user = $user['user_id'];
        $this->reservation = $data;
    }
}
