<?php

namespace App\Listeners;

use App\Events\PostPublished;
use App\Mail\PostPublishedMail;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendPostNotification implements ShouldQueue
{
    use InteractsWithQueue;
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PostPublished $event): void
    {
            $subscribers = Subscriber::where('is_subscribed', true)->get();

        foreach ($subscribers as $subscriber) {

            Mail::to($subscriber->email)
                ->queue(new PostPublishedMail($event->post));
        }
    }
}
