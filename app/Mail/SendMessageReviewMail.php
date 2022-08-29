<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMessageReviewMail extends Mailable
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
        return $this->subject('Mail from Vvoutlet.com - Send Review Host')
                    ->view('emails.sendWriteReview');
    }
}
