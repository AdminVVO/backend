<?php

namespace App\Http\Livewire\ChatMessage;

use App\Models\Chats;
use Livewire\Component;
use Auth;

class Left extends Component
{
    public $content = [];
    public $filter = 'All';
    public $search = '';

    protected $listeners = ['reloadRooms' => 'refresh'];

    public function render()
    {
        $this->loadRoomsUsers();
        return view('livewire.chat-message.left');
    }

    public function refresh(){ }

    public function loadRoomsUsers()
    {
        if ( Chats::where('transmitter_id', Auth::id())->orWhere('receiver_id', Auth::id())->exists() ) {
            $chats = Chats::with([
                'transmitter' => function ($query){
                    $query->select('id_user','name', 'avatar')->get();
                },
                'receiver' => function ($query){
                    $query->select('id_user','name', 'avatar')->get();
                },
                'listing' => function ($query){
                    $query->select('id_listings','title', 'created_at')->get();
                },
                'message' => function ($query){
                    $query->orderBy('id_message_chats', 'DESC')->get();
                },
            ])
            ->select(
                'chats.id_chats',
                'chats.transmitter_id',
                'chats.receiver_id',
                'chats.listing_id',
                'chats.created_at',
                'chats.updated_at',
                'chats.order_receiver',
                'chats.order_transmitter',
                'chats.unread_transm',
                'chats.unread_receiv',
            );

                $queryChats = $chats;

                    if ( Auth::user()->rol_id !== 1 ) {
                        $this->content = clone $queryChats
                            ->leftJoin('users as receiver', 'receiver_id', 'receiver.id_user' )
                            ->where('transmitter_id', Auth::id())
                            ->where(function ($query) {
                                if ( $this->filter === 'Archived' )
                                    return $query->where('archived_transm', true);
                                
                                if ( $this->filter === 'Favorite' )
                                    return $query->where('favorites_transm', true);
                                
                                if ( $this->filter === 'Unread' )
                                    return $query->where('unread_transm', true);
                                
                            })
                            ->where('receiver.full_name', 'ilike', '%' . $this->search . '%')
                            ->orderBy('order_transmitter', 'DESC')
                            ->orderBy('updated_at', 'DESC')
                            ->get();
                    }

                    if ( Auth::user()->rol_id === 1 ) {
                        $this->content = clone $queryChats
                            ->leftJoin('listings', 'listing_id', 'listings.id_listings')
                            ->leftJoin('users as transmitter', 'transmitter_id', 'transmitter.id_user' )
                            ->where('receiver_id', Auth::id())
                            ->where(function ($query) {
                                if ( $this->filter === 'Archived' )
                                    return $query->where('archived_receiv', true);
                                
                                if ( $this->filter === 'Favorite' )
                                    return $query->where('favorites_receiv', true);
                                
                                if ( $this->filter === 'Unread' )
                                    return $query->where('unread_receiv', true);
                                
                            })
                            ->where(function ($query) {
                                $query->where('listings.title', 'ilike', '%' . $this->search . '%')
                                      ->orWhere('transmitter.full_name', 'ilike', '%' . $this->search . '%');
                            })
                            ->orderBy('order_receiver', 'DESC')
                            ->orderBy('updated_at', 'DESC')
                            ->get();
                    }
        }
    }

    public function applyFilter($payload)
    {   
        if ( $payload === 'favority' )
            $this->filter = 'Favorite';

        if ( $payload === 'archive' )
            $this->filter = 'Archived';

        if ( $payload === 'unread' )
            $this->filter = 'Unread';

        if ( $payload === 'all' )
            $this->filter = 'All';
    }

    public function clickLoadRoom($payload)
    {   
        if ( Auth::user()->rol_id === 1 ) {
            if ( Chats::where([
                'id_chats' => $payload,
                'unread_receiv' => true,
            ])->exists() ) {
                Chats::where([
                    'id_chats' => $payload,
                ])->update([
                    'unread_receiv' => false,
                ]);
            }

        }else{
            if ( Chats::where([
                'id_chats' => $payload,
                'unread_transm' => true,
            ])->exists() ) {
                Chats::where([
                    'id_chats' => $payload,
                ])->update([
                    'unread_transm' => false,
                ]);
            }
        }

        $this->emitTo('chat-message.center', 'loadRoom', $payload );
        $this->emitTo('chat-message.input-message', 'loadRoom', $payload );
    }
}
