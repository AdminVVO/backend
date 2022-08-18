<?php

namespace App\Http\Livewire\Interna;

use App\Models\Chats;
use App\Models\MessageChats;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class InternaFormContact extends Component
{
    use LivewireAlert;

    public $listingId;
    public $UserId;
    public $listingTitle;
    public $inputComment;

    public function render()
    {
        return view('livewire.interna.interna-form-contact');
    }

    public function SubmitContact()
    {      
        $this->resetValidation();    

        $validation = Validator::make([
           'inputComment' => $this->inputComment,
        ],[
            'inputComment' => 'required|min:15|max:500',
        ]);

            if ($validation->fails())
                $validation->validate();

        if ( Chats::where([
                'transmitter_id' => Auth::id(),
                'listing_id' => $this->listingId,
            ])->orWhere([
                'receiver_id' => Auth::id(),
            ])->doesntExist() ) {
            
                $chatMessage = Chats::create([
                    'transmitter_id' => Auth::id(),
                    'receiver_id' => $this->UserId,
                    'listing_id' => $this->listingId,
                ]);
                
                MessageChats::create([
                    'message'  => $this->listingTitle,
                    'user_id'  => Auth::id(),
                    'chats_id' => $chatMessage->id_chats,
                    'type'     => 'OnListing',
                ]);
        }else{
                $chatMessage = Chats::where([
                    'transmitter_id' => Auth::id(),
                    'listing_id' => $this->listingId,
                ])->orWhere([
                    'receiver_id' => Auth::id(),
                ])->select('id_chats')->first();
        }

        if ( Chats::where(['id_chats' => $chatMessage->id_chats])->pluck('listing_id')->first() != $this->listingId ) {

            Chats::where([
                'transmitter_id' => Auth::id(),
                'listing_id' => $this->listingId,
            ])->orWhere([
                'receiver_id' => Auth::id(),
            ])->update([
                'listing_id' => $this->listingId,
            ]);

            MessageChats::create([
                'message'  => $this->listingTitle,
                'user_id'  => Auth::id(),
                'chats_id' => $chatMessage->id_chats,
                'type'     => 'OnListing',
            ]);
        }
        
        MessageChats::create([
            'message'  => $this->inputComment,
            'user_id'  => Auth::id(),
            'chats_id' => $chatMessage->id_chats,
        ]);

        return redirect()->route('messageUserIndex', ['interna' => $this->listingId]);
    }
}
