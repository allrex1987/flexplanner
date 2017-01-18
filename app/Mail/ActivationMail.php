<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ActivationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($activationlink)
    {
        $this->activationlink = $activationlink;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        //From set to authenticated user in mailgun
        $address = 'alexandra.johansson122@gmail.com';
        $name = 'Briefer.se';
        $subject = 'Activation Mail';

        return $this->view('mails.activation')
            ->from($address, $name)
            ->subject($subject)
            ->replyTo($address, $name)
            ->bcc($address, $name)
            ->cc($address, $name)
            ->with([
                'link' => $this->activationlink,
            ]);
    }
}
