<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
use Queueable, SerializesModels;
   
    public $data;
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;

    }
  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //var_dump(this)
        /*return $this
            ->from($address = 'amaranime7738@gmail.com',$name = 'SARAS TECHNOLOGY')
            ->subject('create'. $this->data->subject)
            ->view('emails.contact');
        */
         $address = 'amaranime7738@gmail.com';
    $name = 'SARAS TECHNOLOGY';

    // Check if the registration is for the user form or the admin form
    if ($this->data->roll == 5) {
        // Registration for user form
        $subject = 'User Registration';
        $view = 'emails.contact'; // Use the view file for user registration
        $recipientEmail = $this->data->Email;
        $recipientName = $this->data->FName;
    } elseif ($this->data->roll2 == 3) {
        // Registration for admin form
        $subject = 'School Registration';
        $view = 'emails.school'; // Use the view file for school registration
        $recipientEmail = 'admin@example.com';
        $recipientName = 'Admin';
    } else {
        // Default subject and view
        $subject = 'Registration';
        $view = 'emails.contact';
        $recipientEmail = 'default@example.com';
        $recipientName = 'Default Recipient';
    }

    return $this->from($address, $name)
                ->to('amaranime7738@gmail.com')
                ->subject($subject)
                ->view($view);
    }
}
