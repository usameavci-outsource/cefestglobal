<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ContactMessageMail extends Mailable
{

    public string $message_text;
    public string $sender_name;
    public string $sender_email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sender_email, $sender_name, $message_text)
    {
        $this->message_text = $message_text;
        $this->sender_name  = $sender_name;
        $this->sender_email = $sender_email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): static
    {
        return $this
            ->from($this->sender_email, $this->sender_name)
            ->replyTo($this->sender_email, $this->sender_name)
            ->subject('Contact Form Message')
            ->view('emails.contact-message-mail')
            ->to(env('CONTACT_FORM_MAIL_TO'));
    }
}
