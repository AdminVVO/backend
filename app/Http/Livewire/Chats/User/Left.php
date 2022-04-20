<?php

namespace App\Http\Livewire\Chats\User;

use App\Models\Chats;
use Livewire\Component;
use Auth;

class Left extends Component
{
    public $chats = [];
    public $firstChat = '';
    private $listingId = '';

    protected $listeners = [
        'refreshSectionChats' => 'refreshSectionChats'
    ];

    public function mount($id)
    {
        $this->listingId = $id;
        $this->refreshSectionChats();
    }

    public function render()
    {
        $this->loadChatMessage('xxxx');
        if ( Auth::user()->rol_id !== 1 )
            return view('livewire.chats.user.left');

        if ( Auth::user()->rol_id === 1 )
            return view('livewire.chats.host.left');
    }

    public function loadChatMessage($payload)
    {
        $this->emit('loadChat', $payload);
    }

    public function refreshClass()
    {
        $this->emit('refreshClassChats');
    }

    public function refreshSectionChats()
    {
        if ( Chats::where('transmitter_id', Auth::id())->orWhere('receiver_id', Auth::id())->exists() ) {
            $query = Chats::with([
                'transmitter:id_user,avatar',
                'receiver:id_user,avatar',
                'listing:id_listings,title,created_at',
                'message' => function ($query){
                    $query->latest()->first();
                }
            ])
            ->select(
                'id_chats',
                'transmitter_id',
                'receiver_id',
                'listing_id',
                'created_at',
            )
            ->where('transmitter_id', Auth::id())
            ->orWhere('receiver_id', Auth::id());

            $queryChat = $query;
                $this->chats = clone $queryChat->get();

            if ( $this->listingId !== '' ) {
                $queryFilterChat = $query;
                    $firstChat = clone $queryFilterChat->first();
                    $this->firstChat = $firstChat->id_chats;
            }

        }
    }
}
