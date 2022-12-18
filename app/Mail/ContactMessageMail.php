<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use App\Models\ContactSubject;

class ContactMessageMail extends Mailable
{

    public ?string $sender_name;
    public ?string $sender_phone;
    public ?string $sender_email;

    public ?ContactSubject $message_subject;
    public ?string         $message_text;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sender_email, $sender_phone, $sender_name, ContactSubject $message_subject, $message_text)
    {
        $this->sender_name  = $sender_name;
        $this->sender_email = $sender_email;
        $this->sender_phone = $sender_phone;

        $this->message_subject = $message_subject;
        $this->message_text    = $message_text;
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
