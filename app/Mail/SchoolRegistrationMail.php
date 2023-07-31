<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SchoolRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct($item)
{
    $this->item = $item;
}

public function build()
{
    $subject = 'School Registration';
    $view = 'emails.contact';

    return $this->view($view)
                ->subject($subject)
                ->with(['data' => $this->item]);
}

}
