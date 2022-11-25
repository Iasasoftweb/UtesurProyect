<?php

namespace App\Http\Livewire;

use App\Models\Noticias;
use Livewire\Component;
use Livewire\WithFileUploads;
use phpDocumentor\Reflection\Types\This;

class Formnoticias extends Component
{
   
use WithFileUploads;

    public $titulo, $slug, $descripcion, $estado, $path, $path2, $path3, $path4;

   
   
    public function render()
    {
      return view('livewire.formnoticias')->layout('app.theme');
    }

    protected $rules = [
            'titulo' => 'required',
            'slug' => 'required',
            'descripcion' => 'required',
            'estado' => 'required'
        ];

    protected $message = [
        'titulo.requerid' => 'El titulo es requerido',
        'slug.requerid' => 'El Slug es requerido',
        'descripcion.requerid' => 'La Descripcion es requerido',
        'estado.requerid' => 'El Estado es requerido'
    ];

   public function updated($propertyName)
   {
         $this->validateOnly($propertyName);
   }

   public function Store(){

    $this->validate();   
    $noticias =Noticias::create([
        'titulo' => $this->titulo,
        'slug' => $this ->slug,
        'descripcion' => $this-> descripcion,
        'estado' => $this-> estado,
        'path' => $this-> path,
        'path2' => $this -> path2,
        'path3' => $this->path3,
        'path4' => $this-> path4 
    ]);

    if (!empty($this->path)){

        $customFilenName = uniqid() . '_.' . $this->path->extension();
        $this->path->storeAs('public/noticias', $customFilenName);

        $noticias->path = $customFilenName;
        $noticias->save();
    }


    if (!empty($this->path)){

        $customFilenName = uniqid() . '_.' . $this->path->extension();
        $this->path->storeAs('public/noticias', $customFilenName);

        $noticias->path = $customFilenName;
        $noticias->save();
    }


    if (!empty($this->path2)){

        $customFilenName = uniqid() . '_.' . $this->path2->extension();
        $this->path2->storeAs('public/noticias', $customFilenName);

        $noticias->path2 = $customFilenName;
        $noticias->save();
    }


    if (!empty($this->path3)){

        $customFilenName = uniqid() . '_.' . $this->path3->extension();
        $this->path3->storeAs('public/noticias', $customFilenName);

        $noticias->path3 = $customFilenName;
        $noticias->save();
    }
    if (!empty($this->path4)){

        $customFilenName = uniqid() . '_.' . $this->path4->extension();
        $this->path4->storeAs('public/noticias', $customFilenName);

        $noticias->path4 = $customFilenName;
        $noticias->save();
    }

    $this-> dispatchBrowserEvent('noticias-registro', ['result' => 'Noticia Registrada']);
    $this->reset('titulo', 'slug', 'descripcion', 'estado', 'path', 'path2', 'path3', 'path4');

}
   
    

    
}
