<?php

namespace App\Http\Livewire\Chats\User;

use App\Events\SendMessage;
use App\Models\Chats;
use App\Models\Listing\Listings;
use App\Models\MessageChats;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Center extends Component
{
    use LivewireAlert;

    public $message = '';
    public $contentChat = [
        'onListing' => '',
        'onChat' => '',
        'oldListing' => '',
        'receiver_id' => '',
        'name' => '',
        'title' => '',
        'messages' => [],
    ];

    protected $listeners = [
        'loadChat' => 'loadChatSelect',
        'eventPush' => 'refreshSectionChats'
    ];

    public function mount($id)
    {
        $this->contentChat['onListing'] = $id;

            if ( $this->contentChat['onListing'] !== '' ) {

                $queryName = Listings::with('userChat')->select('id_listings', 'user_id', 'title')->where('id_listings', $this->contentChat['onListing'])->first();

                if ( Chats::where([
                        'transmitter_id' => Auth::id(),
                        'receiver_id' => $queryName->user_id,
                    ])->orWhere([
                        'transmitter_id' => $queryName->user_id,
                        'receiver_id' => Auth::id(),
                    ])->exists() ) {
                    
                        $queryIdChat = Chats::with([
                            'listing:id_listings,title'
                        ])
                        ->where([
                            'transmitter_id' => Auth::id(),
                            'receiver_id' => $queryName->user_id,
                        ])->orWhere([
                            'transmitter_id' => $queryName->user_id,
                            'receiver_id' => Auth::id(),
                        ])->select('id_chats','listing_id','transmitter_id','receiver_id')->first();

                        $this->contentChat['onChat'] = $queryIdChat->id_chats;
                        $this->contentChat['oldListing'] = $queryIdChat->listing->title;
                        $this->contentChat['receiver_id'] = $queryName->user_id;
                        $this->contentChat['name'] = $queryIdChat->transmitter_id === Auth::id() ? User::Name( $queryIdChat->receiver_id ) : User::Name( $queryIdChat->transmitter_id );
                        $this->contentChat['title'] = $queryName->title;

                        $messages = MessageChats::with([
                            'user:id_user,name,avatar'
                        ])
                        ->where('chats_id', $queryIdChat->id_chats)
                        ->orderBy('id_message_chats', 'ASC');

                        $queryMessage = $messages;
                            $this->contentChat['messages'] = clone $queryMessage->get();
                        $queryFilterMessage = $messages;
                            $queryFilterMessage = clone $queryFilterMessage->select('message')->where('type', 'OnListing')->get()->last();
                                $this->contentChat['oldListing'] = $queryFilterMessage->message;
                    return;
                }

                $this->contentChat['onChat'] = '';
                $this->contentChat['oldListing'] = '';
                $this->contentChat['receiver_id'] = $queryName->user_id;
                $this->contentChat['name'] = $queryIdChat->transmitter_id === Auth::id() ? User::Name( $queryIdChat->receiver_id ) : User::Name( $queryIdChat->transmitter_id );
                $this->contentChat['title'] = $queryName->title;
                $this->contentChat['messages'] = [];
            }
    }

    public function render()
    {
        return view('livewire.chats.user.center');
    }

    public function sendMessageInput()
    {
        $validation = Validator::make([
           'message' => $this->message,
        ],[
            'message' => 'required|min:2|max:200',
        ]);

            if ($validation->fails())
                $validation->validate();

        if ( $this->contentChat['onChat'] === '' ) {
            $createChat = Chats::create([
                'transmitter_id' => Auth::id(),
                'receiver_id' => $this->contentChat['receiver_id'],
                'listing_id' => $this->contentChat['onListing'],
            ]);

            $this->contentChat['onChat'] = $createChat->id_chats;

                MessageChats::create([
                    'message'  => $this->contentChat['title'],
                    'user_id'  => Auth::id(),
                    'chats_id' => $this->contentChat['onChat'],
                    'type'     => 'OnListing',
                ]);
                
            $this->contentChat['oldListing'] = $this->contentChat['title'];
        }

        if ( $this->contentChat['onChat'] !== '' && $this->contentChat['oldListing'] !== $this->contentChat['title'] ) {
            MessageChats::create([
                'message'  => $this->contentChat['title'],
                'user_id'  => Auth::id(),
                'chats_id' => $this->contentChat['onChat'],
                'type'     => 'OnListing',
            ]);

            $this->contentChat['oldListing'] = $this->contentChat['title'];
        }

        MessageChats::create([
            'message'  => $this->message,
            'user_id'  => Auth::id(),
            'chats_id' => $this->contentChat['onChat'],
        ]);

        event( new SendMessage( Auth::id(), $this->message ) );
        $this->message = '';
        $this->emit('refreshSectionChats');
        $this->loadChatSelect( $this->contentChat['onChat'] );

    }

    public function loadChatSelect($payload)
    {
        // dd($payload);
        if ( $payload != '') {

            if ( $this->contentChat['onListing'] !== '' ) {

                $queryName = Listings::with('userChat')->select('id_listings', 'user_id', 'title')->where('id_listings', $this->contentChat['onListing'])->first();

                $queryIdChat = Chats::with([
                    'listing:id_listings,title'
                ])
                ->where([
                    'transmitter_id' => Auth::id(),
                    'receiver_id' => $queryName->user_id,
                ])->orWhere([
                    'transmitter_id' => $queryName->user_id,
                    'receiver_id' => Auth::id(),
                ])->select('id_chats','listing_id')->first();

            }else{

                $queryIdChat = Chats::with([
                    'listing:id_listings,title'
                ])
                ->where([
                    'id_chats' => $payload,
                ])->select('id_chats','listing_id','receiver_id','transmitter_id')->first();

                $queryName = Listings::with('userChat')->select('id_listings', 'user_id', 'title')->where('id_listings', $queryIdChat['listing_id'])->first();
            }

            $this->contentChat['onChat'] = $queryIdChat->id_chats;
            $this->contentChat['oldListing'] = $queryIdChat->listing->title;
            $this->contentChat['receiver_id'] = $queryName->user_id;
            $this->contentChat['name'] = $queryIdChat->transmitter_id === Auth::id() ? User::Name( $queryIdChat->receiver_id ) : User::Name( $queryIdChat->transmitter_id );
            $this->contentChat['title'] = $queryName->title;

            $messages = MessageChats::with([
                'user:id_user,name,avatar'
            ])
            ->where('chats_id', $queryIdChat->id_chats)
            ->orderBy('id_message_chats', 'ASC');

            $queryMessage = $messages;
                $this->contentChat['messages'] = clone $queryMessage->get();

            $queryFilterMessage = $messages;
                $queryFilterMessage = clone $queryFilterMessage->select('message')->where('type', 'OnListing')->get()->last();
                    $this->contentChat['oldListing'] = $queryFilterMessage->message;
        }
    }
}
