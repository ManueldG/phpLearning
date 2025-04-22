<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestShipped extends Mailable
{
    use Queueable, SerializesModels;

    private $msg;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {

    }

    public function setMessage(string $msg): void{
        $this->msg = $msg;
    }

    public function setSubject(string $subject): void{
        $this->subject = $subject;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        $envelope = new Envelope(
            from: new Address('manuel.dellagala@gmail.com', 'Manuel'),
            replyTo: [
                new Address('manuel.dellagala@gmail.com', 'Manuel'),
            ],
            subject: $this->subject,
        );

       return $envelope;
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content('email::advice',null,null,null,['msg'=>$this->msg]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
