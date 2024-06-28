<?php

namespace App\Traits;

use App\Models\Activity;
use Illuminate\Support\Facades\Auth;

trait RecordsUserActivity
{
    protected function recordActivity($activity, $details)
    {
        Activity::create([
            'user_id' => Auth::id(),
            'activity' => $activity,
            'details' => $details,
            'state' => 1,
        ]);
    }
}
