<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Action extends Component
{
    public $nombres;
    public function render()
    {
        return view('livewire.action') ->layout('app.theme');
    }
}
