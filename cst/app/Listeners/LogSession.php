<?php

namespace App\Listeners;

use App\Models\SessionLog;
use Carbon\Carbon;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LogSession
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
    public function handle(Login $event)
    {
        SessionLog::create([
            'user_id' => $event->user->id,
            'ip_address' => request()->ip(),
            'date' => Carbon::now()
        ]);
    }
}
