<?php

namespace App\Livewire;

use Livewire\Component;

class Sidebar extends Component
{
    public $menuTitle;
    public $dropdowns;

    public function mount($menuTitle, $dropdowns)
    {
        $this->menuTitle = $menuTitle;
        $this->dropdowns = $dropdowns;
    }
    public function render()
    {
        return view('livewire.sidebar');
    }
}
