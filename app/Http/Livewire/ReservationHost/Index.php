<?php

namespace App\Http\Livewire\ReservationHost;

use App\Models\ReservationUser;
use Livewire\Component;
use Auth;

class Index extends Component
{
    public $statusBar = 'upcoming';
    public $contentHost;

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
                     'User:id_user,name,last_name',
                     'StatusReserv:status,name,color',
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
}