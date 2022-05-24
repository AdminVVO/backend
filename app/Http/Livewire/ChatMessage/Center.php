<?php

namespace App\Http\Livewire\ChatMessage;

use App\Models\Chats;
use App\Models\Listing\Listings;
use App\Models\MessageChats;
use App\Models\User;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Auth;
use DB;

class Center extends Component
{
    use LivewireAlert;

    public $content = [];
    public $room;
    public $listing;
    public $mountListing = false;

    protected $listeners = [
        'loadRoom' => 'clickLoadRoom',
        'reloadRoom' => 'refresh'
    ];

    public function mount($listing)
    {  
        $this->listing = $listing;

        if ( strlen( $this->listing ) !== 0 ) {

            $this->mountListing = true;

            $queryName = Listings::with('userChat')->select('id_listings', 'user_id', 'title')->where('id_listings', $listing)->first();

            if ( Chats::where([
                    'transmitter_id' => Auth::id(),
                    'receiver_id' => $queryName->user_id,
                ])->orWhere([
                    'transmitter_id' => $queryName->user_id,
                    'receiver_id' => Auth::id(),
                ])->exists() ) {

                    $this->room = Chats::where([
                        'transmitter_id' => Auth::id(),
                        'receiver_id' => $queryName->user_id,
                    ])->orWhere([
                        'transmitter_id' => $queryName->user_id,
                        'receiver_id' => Auth::id(),
                    ])->pluck('id_chats')->first();
                
                    $this->Room( $this->room );
                return;
            }

            $this->content['onChat'] = '';
            $this->content['oldListing'] = '';
            $this->content['receiver_id'] = $queryName->user_id;
            $this->content['name'] = $queryName->userChat->name ;
            $this->content['title'] = $queryName->title;
            $this->content['messages'] = [];
            $this->content['offline'] = false;

                if (
                    DB::table('sessions')->where(
                            'user_id', $queryName->user_id 
                    )->exists()
                ) {
                    $this->content['offline'] = true;
                }
        }
    }

    public function render()
    {   
        return view('livewire.chat-message.center');
    }

    public function refresh($payload)
    { 
        if ( $this->room == $payload  )
            $this->Room( $payload );
    }

    public function clickLoadRoom($payload)
    {
        $this->room = $payload;
        $this->Room( $this->room );
        $this->dispatchBrowserEvent('eventTyping', [
            'chatId' => $payload,
            'userId' => Auth::user()->rol_id === 1 ? $this->content['transmitter_id'] : $this->content['receiver_id'],
        ]);

    }

    public function Room($payload)
    {
        $queryIdChat = Chats::with([
                'listing:id_listings,title'
            ])
            ->where([
                'id_chats' => $payload,
            ])->select(
                'id_chats',
                'listing_id',
                'receiver_id',
                'transmitter_id',
                'favorites_transm',
                'favorites_receiv',
                'archived_transm',
                'archived_receiv',
                'unread_transm',
                'unread_receiv',
            )->first();

            $queryName = Listings::select('user_id', 'title')->where('id_listings', $queryIdChat['listing_id'])->first();

            $this->listing = $queryIdChat['listing_id'];
            $this->content['onChat'] = $queryIdChat->id_chats;
            $this->content['oldListing'] = $queryIdChat['listing_id'];
            $this->content['receiver_id'] = $queryName->user_id;
            $this->content['transmitter_id'] = $queryIdChat->transmitter_id;
            $this->content['name'] = $queryIdChat->transmitter_id === Auth::id() ? User::Name( $queryIdChat->receiver_id ) : User::Name( $queryIdChat->transmitter_id );
            $this->content['title'] = $queryName->title;
            $this->content['favority'] = Auth::user()->rol_id === 1 ? $queryIdChat->favorites_receiv : $queryIdChat->favorites_transm;
            $this->content['archive'] = Auth::user()->rol_id === 1 ? $queryIdChat->archived_receiv : $queryIdChat->archived_transm;
            $this->content['unread'] = Auth::user()->rol_id === 1 ? $queryIdChat->unread_receiv : $queryIdChat->unread_transm;
            $this->content['offline'] = false;

                if (
                    DB::table('sessions')->where(
                            'user_id', Auth::user()->rol_id === 1 ? $this->content['transmitter_id'] : $this->content['receiver_id'] 
                    )->exists()
                ) {
                    $this->content['offline'] = true;
                }

            $this->content['messages'] = MessageChats::with([
                'user:id_user,name,avatar'
            ])
            ->where('chats_id', $queryIdChat->id_chats)
            ->orderBy('id_message_chats', 'ASC')
            ->get();
    }

    public function unreadRoom()
    {
        if ( Auth::user()->rol_id === 1 ) {
            Chats::where([
                'id_chats' => $this->content['onChat'],
            ])->update([
                'unread_receiv' => !Chats::unread( $this->content['onChat'], true ),
            ]);
            $this->content['unread'] = Chats::unread( $this->content['onChat'], true );

        }else{
            Chats::where([
                'id_chats' => $this->content['onChat'],
            ])->update([
                'unread_transm' => !Chats::unread( $this->content['onChat'], false ),
            ]);
            $this->content['unread'] = Chats::unread( $this->content['onChat'], false );
        }

        $this->emitTo('chat-message.left', 'reloadRooms');
        $this->alert('success', 'The room has been added to unread.');
    }

    public function favorityRoom()
    {
        if ( Auth::user()->rol_id === 1 ) {
            Chats::where([
                'id_chats' => $this->content['onChat'],
            ])->update([
                'favorites_receiv' => !Chats::favority( $this->content['onChat'], true ),
            ]);
            $this->content['favority'] = Chats::favority( $this->content['onChat'], true );

        }else{
            Chats::where([
                'id_chats' => $this->content['onChat'],
            ])->update([
                'favorites_transm' => !Chats::favority( $this->content['onChat'], false ),
            ]);
            $this->content['favority'] = Chats::favority( $this->content['onChat'], false );
        }

        $this->emitTo('chat-message.left', 'reloadRooms');
        $this->alert('success', 'The room has been added to favorites.');
    }

    public function archiveRoom()
    {
        if ( Auth::user()->rol_id === 1 ) {
            Chats::where([
                'id_chats' => $this->content['onChat'],
            ])->update([
                'archived_receiv' => !Chats::archive( $this->content['onChat'], true ),
            ]);
            $this->content['archive'] = Chats::archive( $this->content['onChat'], true );

        }else{
            Chats::where([
                'id_chats' => $this->content['onChat'],
            ])->update([
                'archived_transm' => !Chats::archive( $this->content['onChat'], false ),
            ]);
            $this->content['archive'] = Chats::archive( $this->content['onChat'], false );
        }

        $this->emitTo('chat-message.left', 'reloadRooms');
        $this->alert('success', 'The room has been added to archive.');
    }

    public function downloadFile($payload)
    {
        $fileDownload = MessageChats::select('message', 'original_name')->where('message', $payload)->first();

        return response()->download( storage_path('app/public') . '/fileChat/' . $this->content['onChat'] . '/' . $fileDownload['message'], $fileDownload['original_name'] );
    }

}
