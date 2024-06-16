<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TableComponent extends Component
{
    public $items;
    public $headers;
    public $routePrefix;

    public function __construct($items,$headers,$routePrefix)
    {
        $this->items = $items;
        $this->headers = $headers;
        $this->routePrefix = $routePrefix;
    }

    public function render(): View|Closure|string
    {
        return view('components.table-component');
    }
}
