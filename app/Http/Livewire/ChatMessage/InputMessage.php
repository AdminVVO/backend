<?php

namespace App\Http\Livewire\ChatMessage;

use App\Events\SendMessage;
use App\Models\Chats;
use App\Models\Listing\Listings;
use App\Models\MessageChats;
use App\Models\QuestionFrequent;
use App\Models\ReservationForm;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Storage;

class InputMessage extends Component
{
    use LivewireAlert;
    use WithFileUploads;

    public $onChat;
    public $onListing;
    public $message = '';
    public $file;
    public $imagen;
    public $questions = [];
    public $content = [];
    public $mountListing = false;

    protected $listeners = ['loadRoom' => 'clickLoadRoom'];

    public function render()
    {
        return view('livewire.chat-message.input-message');
    }

    public function mount($onListing)
    {
        $this->onListing = $onListing;
        $this->questions = QuestionFrequent::pluck('name', 'code');

        if ( strlen( $this->onListing ) !== 0 ) {
            $this->mountListing = true;
            $queryName = Listings::with('userChat')->select('id_listings', 'user_id', 'title')->where('id_listings', $onListing)->whereNotIn('status', ['in process'])->first();

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

                    $this->onChat = $queryIdChat->id_chats;
                    $this->content['oldListing'] = $queryIdChat->listing_id;
                    $this->content['receiver_id'] = $queryName->user_id;
                    $this->content['transmitter_id'] = $queryIdChat->transmitter_id;
                    $this->content['title'] = $queryName->title;
                return;
            }

            $this->onChat = '';
            $this->content['oldListing'] = '';
            $this->content['receiver_id'] = $queryName->user_id;
            $this->content['title'] = $queryName->title;
        }
    }

    public function clickLoadRoom($payload)
    {
        $this->reset(['message', 'mountListing', 'content', 'imagen', 'file', 'mountListing']);
        $this->onChat = $payload;

        $queryIdChat = Chats::where(['id_chats' => $this->onChat])->select('listing_id', 'transmitter_id')->first();

        $queryName = Listings::select('user_id', 'title')->where('id_listings', $queryIdChat->listing_id)->whereNotIn('status', ['in process'])->first();

        $this->onListing = $queryIdChat->listing_id;
        $this->content['oldListing'] = $queryIdChat->listing_id;
        $this->content['receiver_id'] = $queryName->user_id;
        $this->content['transmitter_id'] = $queryIdChat->transmitter_id;
        $this->content['title'] = $queryName->title;
    }

    public function selectQuestions($payload)
    {
        $this->message = $payload;
    }

    public function sendMessageInput()
    {
        $this->resetValidation();

        if ( strlen( $this->onChat ) === 0 && $this->mountListing !== true ){
            $this->reset(['message', 'mountListing']);
            return $this->alert('warning', 'You have not selected a conversation.');
        }

        $validation = Validator::make([
           'message' => $this->message,
        ],[
            'message' => 'required|min:2|max:200',
        ]);

            if ($validation->fails())
                $validation->validate();

        if ( strlen( $this->onChat ) === 0 && Auth::user()->rol_id != 1 ) {
            $createChat = Chats::create([
                'transmitter_id' => Auth::id(),
                'receiver_id' => $this->content['receiver_id'],
                'listing_id' => $this->onListing,
            ]);

            $this->onChat = $createChat->id_chats;

                MessageChats::create([
                    'message'  => $this->content['title'],
                    'user_id'  => Auth::id(),
                    'chats_id' => $this->onChat,
                    'type'     => 'OnListing',
                ]);
                
            $this->content['oldListing'] = $this->onListing;
            $this->emitTo('chat-message.center', 'loadRoom', $this->onChat );
        }

        if ( strlen( $this->onChat ) !== 0 && $this->content['oldListing'] !== $this->onListing && Auth::user()->rol_id != 1 ) {

            Chats::where([
                'transmitter_id' => Auth::id(),
                'listing_id' => $this->content['oldListing'],
            ])->update([
                'listing_id' => $this->onListing,
            ]);

            MessageChats::create([
                'message'  => $this->content['title'],
                'user_id'  => Auth::id(),
                'chats_id' => $this->onChat,
                'type'     => 'OnListing',
            ]);

            $this->content['oldListing'] = $this->onListing;
        }

        MessageChats::create([
            'message'  => $this->message,
            'user_id'  => Auth::id(),
            'chats_id' => $this->onChat,
        ]);

        $this->newMessageAlert();
        $this->reset(['message', 'mountListing']);
        $this->emitTo('chat-message.center', 'reloadRoom', $this->onChat );
        $this->emitTo('chat-message.left', 'reloadRooms');

        event( new SendMessage( $this->onChat, Auth::user()->rol_id === 1 ? $this->content['transmitter_id'] : $this->content['receiver_id'] ) );

    }

    public function updatedImagen()
    {
        if ( strlen( $this->onChat ) === 0 )
            return $this->alert('warning', 'You have not selected a conversation.');

        $validation = Validator::make([
           'imagen' => $this->imagen,
        ],[
            'imagen' => 'required|file|image|mimes:jpg,png',
        ]);

            if ($validation->fails())
                $this->alert('warning', 'File to upload does not meet the requirements.');

        if ( strlen( $this->onChat ) === 0 && Auth::user()->rol_id != 1 ) {
            $createChat = Chats::create([
                'transmitter_id' => Auth::id(),
                'receiver_id' => $this->content['receiver_id'],
                'listing_id' => $this->onListing,
            ]);

            $this->onChat = $createChat->id_chats;

                MessageChats::create([
                    'message'  => $this->content['title'],
                    'user_id'  => Auth::id(),
                    'chats_id' => $this->onChat,
                    'type'     => 'OnListing',
                ]);
                
            $this->content['oldListing'] = $this->onListing;
            $this->emitTo('chat-message.center', 'loadRoom', $this->onChat );
        }

        if ( strlen( $this->onChat ) !== 0 && $this->content['oldListing'] !== $this->onListing && Auth::user()->rol_id != 1 ) {

            Chats::where([
                'transmitter_id' => Auth::id(),
                'listing_id' => $this->content['oldListing'],
            ])->update([
                'listing_id' => $this->onListing,
            ]);

            MessageChats::create([
                'message'  => $this->content['title'],
                'user_id'  => Auth::id(),
                'chats_id' => $this->onChat,
                'type'     => 'OnListing',
            ]);

            $this->content['oldListing'] = $this->onListing;
        }

        $imagen = $this->imagen->storePublicly('imagenChat/' . $this->onChat, 'public' );

        MessageChats::create([
            'message'  => str_replace( 'imagenChat/' . $this->onChat . '/', '', $imagen ),
            'user_id'  => Auth::id(),
            'chats_id' => $this->onChat,
            'type'     => 'OnImagen',
        ]);

        $this->newMessageAlert();
        $this->reset(['imagen']);

        $this->emitTo('chat-message.center', 'reloadRoom', $this->onChat );
        $this->emitTo('chat-message.left', 'reloadRooms');

        event( new SendMessage( $this->onChat, Auth::user()->rol_id === 1 ? $this->content['transmitter_id'] : $this->content['receiver_id'] ) );
    }

    public function updatedFile()
    {
        if ( strlen( $this->onChat ) === 0 )
            return $this->alert('warning', 'You have not selected a conversation.');

        $validation = Validator::make([
           'file' => $this->file,
        ],[
            'file' => 'required|file|mimes:doc,pdf,docx',
        ]);

            if ($validation->fails())
                $this->alert('warning', 'File to upload does not meet the requirements.');

        $file = $this->file->storePublicly('fileChat/' . $this->onChat, 'public' );

        MessageChats::create([
            'message'       => str_replace( 'fileChat/' . $this->onChat . '/', '', $file ),
            'user_id'       => Auth::id(),
            'chats_id'      => $this->onChat,
            'type'          => 'OnFile',
            'original_name' => $this->file->getClientOriginalName(),
        ]);

        $this->newMessageAlert();
        $this->reset(['file']);

        $this->emitTo('chat-message.center', 'reloadRoom', $this->onChat );
        $this->emitTo('chat-message.left', 'reloadRooms');

        event( new SendMessage( $this->onChat, Auth::user()->rol_id === 1 ? $this->content['transmitter_id'] : $this->content['receiver_id'] ) );
    }

    public function newMessageAlert()
    {
        if ( Auth::user()->rol_id === 1 ) {
            Chats::where([
                'id_chats' => $this->onChat,
            ])->update([
                'unread_transm' => true,
                'unread_receiv' => false,
                'order_transmitter' => true,
                'order_receiver' => false,
            ]);

        }else{
            Chats::where([
                'id_chats' => $this->onChat,
            ])->update([
                'unread_transm' => false,
                'unread_receiv' => true,
                'order_transmitter' => false,
                'order_receiver' => true,
            ]);
        }
    }

    public function createReservation()
    {
        if ( strlen( $this->onChat ) === 0 )
            return $this->alert('warning', 'You have not selected a conversation.');
        
        $reservation = ReservationForm::create([
            'listing_id'        => $this->onListing,
            'user_id'           => Auth::id(),
        ]);

        $this->newMessageAlert();

        MessageChats::create([
            'message'  => $reservation->id_reservation_forms,
            'user_id'  => Auth::id(),
            'chats_id' => $this->onChat,
            'type'     => 'OnUrl',
        ]);

        $this->emitTo('chat-message.center', 'reloadRoom', $this->onChat );
        $this->emitTo('chat-message.left', 'reloadRooms');

        event( new SendMessage( $this->onChat, Auth::user()->rol_id === 1 ? $this->content['transmitter_id'] : $this->content['receiver_id'] ) );
    }


}