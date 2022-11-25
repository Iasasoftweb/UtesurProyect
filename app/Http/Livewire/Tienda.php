<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tienda extends Component
{
    public $inventario =0;

    protected $listeners = ['asignatienda'=>'asigna'];

    public function asigna($inventario)
    {
        $this -> inventario = $inventario;
        $this-> emitTo('almacen', 'recibido');
    }

    public function render()
    {
        return view('livewire.tienda');
    }
}
