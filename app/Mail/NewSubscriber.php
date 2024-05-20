<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewSubscriber extends Mailable
{
    use Queueable, SerializesModels;
    private $data = [];
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->data['subject'],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        if($this->data['toClient']){
            return new Content(
                markdown: 'emails.newsubscriber',
                with:[
                    'title'=>$this->data['title'],
                    'message'=>$this->data['message'],
                    'whatsappUrl'=>''
                ]
            );

        }else{
            return new Content(
                markdown: 'emails.newsubscriber',
                with:[
                    'title'=>$this->data['title'],
                    'message'=>$this->data['message'],
                    'whatsappUrl'=>''
                ]
            );
        }
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
