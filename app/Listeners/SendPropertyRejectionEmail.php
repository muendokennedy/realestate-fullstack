<?php

namespace App\Listeners;

use App\Mail\PropertyRejection;
use App\Events\PropertyRejected;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPropertyRejectionEmail
{
    /**
     * Handle the event.
     */
    public function handle(PropertyRejected $event): void
    {
        //
        Mail::to($event->user)->send(new PropertyRejection($event->user));
    }
}
