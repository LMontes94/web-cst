<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CreateFormComponent extends Component
{
    public $action;
    public $fields;
    public $method;

    public function __construct($action,$fields,$method = 'POST')
    {
        $this->action = $action;
        $this->fields = $fields;
        $this->method = $method;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.create-form-component');
    }
}
