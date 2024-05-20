<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEmailComponent extends Mailable
{
    private $data = [];
    use Queueable, SerializesModels;
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->data = $data;
        // dd($this->data);
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
                markdown: 'emails.sendEmailComponent',
                with:[
                    'title'=>$this->data['title'],
                    'message'=>$this->data['message'],
                    'name'=>$this->data['name'],
                    'whatsappUrl'=>'https://api.whatsapp.com/send/?phone=254722176561&text=%5BBI%5D+Hello&app_absent=0'
                ]
            );
        }else{
            return new Content(
                markdown: 'emails.sendEmailComponent',
                with:[
                    'title'=>$this->data['title'],
                    'message'=>$this->data['message'],
                    'replyTo'=>$this->data['email'],
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
