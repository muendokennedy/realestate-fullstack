<?php

namespace App\Listeners;

use App\Events\PropertyApproved;
use App\Mail\PropertyApproval;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPropertyApprovalEmail
{
    /**
     * Handle the event.
     */
    public function handle(PropertyApproved $event): void
    {
        //
        Mail::to($event->user)->send(new PropertyApproval($event->user));
    }
}
