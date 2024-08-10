<?php

namespace App\Listeners;

use OwenIt\Auditing\Events\Audited;
use App\Notifications\DatabaseChangeNotification;
use Illuminate\Support\Facades\Notification;

class SendDatabaseChangeNotification
{
    /**
     * Handle the event.
     *
     * @param  \OwenIt\Auditing\Events\Audited  $event
     * @return void
     */
    public function handle(Audited $event)
    {
        Notification::route('mail', 'auditorjr429@gmail.com')
            ->notify(new DatabaseChangeNotification($event->audit));
    }
}

