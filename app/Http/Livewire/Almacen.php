<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Almacen extends Component
{   
    public $inventario = 300;

     protected $listeners= ['recibido'=> 'transrecibido'];

    public function transrecibido()
    {
        $this->inventario = 0;
    } 
    public function render()
    {
        return view('livewire.almacen')->layout('app.theme');
    }
}
