<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShowDetailsComponent extends Component
{
    public $model;
    public $fields;

    public function __construct($model,$fields)
    {
        $this->model = $model;
        $this->fields = $fields;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.show-details-component');
    }
}
