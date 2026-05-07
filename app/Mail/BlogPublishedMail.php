<?php

namespace App\Mail;

use App\Models\Blog;
use App\Models\Subscriber;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BlogPublishedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $blog;
    public $subscriber;

    /**
     * Create a new message instance.
     */
    public function __construct(Blog $blog, Subscriber $subscriber)
    {
        $this->blog = $blog;
        $this->subscriber = $subscriber;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Blog Published: ' . $this->blog->title,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.mailtemplate',
        );
    }


    public function build()
    {
        return $this
            ->subject('New Blog Published: ' . $this->blog->title)
            ->view('emails.mailtemplate');
    }
    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}