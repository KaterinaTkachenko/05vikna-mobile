<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\ChangeOrderEvent;
use App\Mail\OrderAdmin;

class ChangeOrderListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(ChangeOrderEvent $event)
    {
        //\Log::info('orderListener', $event->order->toArray() );
        // \Mail::to('katerina.timofeevna@gmail.com')->send(new OrderAdmin($event->lead, $event->request) );
        // \Mail::to('mikulinaludmila777@gmail.com')->send(new OrderAdmin($event->order, $event->request) );
        \Mail::to('test.tkachenko@gmail.com')->send(new OrderAdmin($event->lead, $event->request) );
    }
}
