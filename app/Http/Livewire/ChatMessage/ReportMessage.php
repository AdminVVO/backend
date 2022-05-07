<?php

namespace App\Http\Livewire\ChatMessage;

use App\Models\MessageChats;
use App\Models\ReportMessage as ModelReportMessage;
use Auth;
use Illuminate\Support\Facades\Validator;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class ReportMessage extends Component
{
    use LivewireAlert;

    public $messageId;
    public $optionsCheck;
    public $optionsText;

    protected $listeners = ['eventReportMessage' => 'reportMessage'];

    public function render()
    {
        return view('livewire.chat-message.report-message');
    }

    public function reportMessage($payload)
    {
        $this->reset(['optionsCheck', 'optionsText', 'messageId']);
        $this->messageId = $payload;
    }

    public function sendVoucher()
    {
        if ( strlen( $this->messageId ) === 0 )
            return $this->alert('warning', 'Error reporting message.');

        $this->resetValidation();

        $validation = Validator::make([
           'optionsCheck' => $this->optionsCheck,
        ],[
            'optionsCheck' => 'required|in:Fraud,Insulting,Other',
        ]);
            if ($validation->fails()){
                $this->reset(['optionsCheck', 'optionsText']);
                return $this->alert('warning', 'You must select an option.');
            }

        $validation->sometimes('optionsText', 'required|max:250', function($input){
            return $input->optionsCheck == 'Other';
        });
            if ($validation->fails()){
                $this->reset(['optionsCheck', 'optionsText']);
                return $this->alert('warning', 'Comment is required and Max 250 characters.');
            }


        if ( MessageChats::where('id_message_chats', $this->messageId )->exists() ) {

            MessageChats::where([
                'id_message_chats' => $this->messageId,
            ])->update([
                'report' => true
            ]);

            $reportMessage = ModelReportMessage::create([
                'questions'  => $this->optionsCheck,
                'comment'    => $this->optionsCheck !== 'Other' ? null : $this->optionsText ,
                'message_id' => $this->messageId,
                'user_id'    => Auth::id(),
                'chats_id'   => MessageChats::where('id_message_chats', $this->messageId)->pluck('chats_id')->first()
            ]);

            $this->emitTo('chat-message.center', 'reloadRoom', $reportMessage['chats_id'] );
            $this->dispatchBrowserEvent('eventCloseReport');
            $this->alert('warning', 'Message has been reported.');
        }

        $this->reset(['optionsCheck', 'optionsText', 'messageId']);
    }
}
