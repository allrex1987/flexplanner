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
    public function __construct($activationlink, $user)
    {
        $this->activationlink = $activationlink;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $address = \Config::get('constants.activation_mail_from');
        $name = \Config::get('constants.application_name');
        $subject = \Config::get('constants.activation_mail_subject');

        return $this->view('mails.activation')
            ->from($address, $name)
            ->subject($subject)
            ->replyTo($address, $name)
            ->bcc($address, $name)
            ->cc($address, $name)
            ->with([
                'link'  => $this->activationlink,
                'user'  => $this->user->name,
                'email' => $this->user->email,
            ]);
    }
}
