<?php

namespace App\Listeners;

use App\Models\Subscriber;
use App\Events\BlogPostCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\BlogPostCreatedEmailNotification;

class NotifySubscriberBlogPostCreated
{
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
    public function handle(BlogPostCreated $event): void
    {
        //
        $maildata = [
            'title' =>$event->post->title,
            'tags' => $event->post->tags,
            'subject'=>$event->post->title,
            'date'=>$event->post->created_at,
            'unSubUrl'=>'sddds',
            'blogUrl'=>'http://127.0.0.1:8000/blog/'. $event->post->id,
            'toClient'=>false
        ];
        $subscribers = Subscriber::all();
        // dd($subscribers);
        foreach($subscribers as $subscriber){
            Mail::to($subscriber->email)->send(new BlogPostCreatedEmailNotification($maildata));
        }
        info('Notifyed' . $event->post->id);

    }
}
