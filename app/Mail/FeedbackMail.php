<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FeedbackMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $phone, $email, $mess;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $phone, $email, $mess)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->mess = $mess;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('emails.feedbackmail', [
            'name' => $this->name, 
            'phone' => $this->phone, 
            'email' => $this->email,
            'mess' => $this->mess
        ]);
    }
}
