<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMessageReportChatMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contentMessage;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contentMessage)
    {
        $this->contentMessage = $contentMessage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Mail from Vvoutlet.com - Report Message Chat')
                    ->view('emails.sendReportChat');
    }
}
