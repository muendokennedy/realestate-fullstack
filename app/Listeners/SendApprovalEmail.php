<?php

namespace App\Listeners;

use App\Events\CustomerInformationSubmitted;
use App\Mail\PropertyApprovalStatus;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendApprovalEmail
{

    /**
     * Handle the event.
     */
    public function handle(CustomerInformationSubmitted $event): void
    {
        //
        Mail::to($event->user)->send(new PropertyApprovalStatus($event->user));
    }
}
