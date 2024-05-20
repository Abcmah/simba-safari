<?php

namespace App\Listeners;

use App\Mail\News;
use App\Events\SendNews;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendNewsLis
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
    public function handle(SendNews $event): void
    {
        //
        $maildata = [
            'title' =>$event->news->headline,
            'email' => '$email',
            'subject'=>$event->news->headline,
            'message'=>$event->news->story,
            'unSubUrl'=>'sddds',
            'blogUrl'=>'http://127.0.0.1:8000/blog/',
            'toClient'=>false
        ];
        $subscribers = Subscriber::all();
        // dd($subscribers);
        foreach($subscribers as $subscriber){
            Mail::to($subscriber->email)->send(new News($maildata));
        }
        info('Notifyed' . $event->news->id);
    }
}
