<?php

namespace App\View\Components;

use App\Models\Activity;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UserActivityTable extends Component
{
    public $activities;
    public function __construct()
    {
        $this->activities = Activity::with('user')->orderBy('created_at','desc')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user-activity-table');
    }
}
