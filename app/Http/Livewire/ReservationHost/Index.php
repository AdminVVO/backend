<?php

namespace App\Http\Livewire\ReservationHost;

use App\Models\ReservationUser;
use Livewire\Component;
use Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Index extends Component
{
    use LivewireAlert;

    public $statusBar = 'upcoming';
    public $contentHost;

    protected $listeners = [
        'confirmReservation' => 'confirmReservation',
    ];

    public function mount()
    {
        $this->preload();
    }

    public function render()
    {
        return view('livewire.reservation-host.index');
    }

    public function changeStatusBar($paylaod)
    {
        if ( $paylaod === 'upcoming')
            $this->statusBar = 'upcoming';

        if ( $paylaod === 'completed')
            $this->statusBar = 'completed';
        
        if ( $paylaod === 'canceled')
            $this->statusBar = 'canceled';
        
        if ( $paylaod === 'all')
            $this->statusBar = 'all';

        $this->reset(['contentHost']);
        $this->preload();
    }

    public function preload()
    {
        $this->contentHost = ReservationUser::where('user_id_listing', Auth::id() )
                ->with([
                     'Listings:id_listings,title',
                     'User:id_user,name,last_name,phone,created_at,avatar',
                     'StatusReserv:status,name,color',
                     'Profile:user_id,location',
                ])->where(function ($query) {
                    if ( $this->statusBar === 'upcoming' )
                        return $query->whereIn('status', ['0','1','2','3']);

                    if ( $this->statusBar === 'completed' )
                        return $query->whereIn('status', ['4','5']);
                    
                    if ( $this->statusBar === 'canceled' )
                        return $query->whereIn('status', ['6']);
                    
                    if ( $this->statusBar === 'all' )
                        return $query->whereIn('status', ['0','1','2','3','4','5','6']);
                                
                })->get()->toArray();

            foreach ( $this->contentHost as $key => $value) {
                $xplodeName = explode(' ', $value['user']['name'] );
                $xplodeLastName = explode(' ', $value['user']['last_name'] );
                    $this->contentHost[ $key ]['user']['name'] = $xplodeName[0] .' '. $xplodeLastName[0];
            }
    }

    public function PopupOptions( $payload )
    {
        $this->emitTo('reservation-host.popup-options', 'contentPopupReserv', [
            'status' => $this->contentHost[ $payload ]['status'],
            'statusBar' => $this->statusBar,
            'reservation' => $this->contentHost[ $payload ]['id_reservation_users'],
            'listing' => $this->contentHost[ $payload ]['listing_id'],
            'code_reservation' => $this->contentHost[ $payload ]['code_reservation'],
            'phone' => $this->contentHost[ $payload ]['user']['phone'],
        ]);
    }

    public function confirmReservation( $payload )
    {
        ReservationUser::where([
            'code_reservation' => $payload,
        ])->update([
            'status' => 0,
        ]);

        $this->preload();
        $this->dispatchBrowserEvent('hiddenPopup');
        $this->alert('success', 'Update has been successful!');
    }

    public function openDetails( $payload )
    {
        // dd(
        //     $this->contentHost[ $payload ]
        // );

        $this->emitTo('reservation-host.details', 'infoDetail', $this->contentHost[ $payload ] );
    }
}