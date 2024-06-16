<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EditFormComponent extends Component
{
    public $action;
    public $fields;
    public $model;
    public $backRoute;

    public function __construct($action,$fields,$model,$backRoute)
    {
        $this->action = $action;
        $this->fields = $fields;
        $this->model = $model;
        $this->backRoute = $backRoute;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.edit-form-component');
    }
}
