<?php

namespace App\Livewire;

use Livewire\Component;

class Dropdown extends Component
{
    public $title;
    public $icon;
    public $items;

    public function mount($title, $icon, $items)
    {
        $this->title = $title;
        $this->icon = $icon;
        $this->items = $items;
    }
    
    public function render()
    {
        return view('livewire.dropdown');
    }
}
