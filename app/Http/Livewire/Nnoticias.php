<?php

namespace App\Http\Livewire;

use App\Models\Noticias;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Nnoticias extends Component
{
    public $search;
    use WithFileUploads;

     
    use WithPagination;

    public $action= 'Registrar', $noticia_id=0;

    public $titulo, $slug, $descripcion, $estado, $path, $path2, $path3, $path4;

    protected $paginationTheme = 'bootstrap';

    public function addNews()
    {
        $this->reset('titulo', 'slug', 'descripcion', 'estado', 'path', 'path2', 'path3', 'path4');  
         $this->dispatchBrowserEvent('show-form');   # code...
    } 
    public function edit(Noticias $noticias)
    {
        $this->noticia_id = $noticias->id;
        $this->titulo = $noticias->titulo;
        $this->slug = $noticias->slug;
        $this->descripcion = $noticias->descripcion;
        $this->estado = $noticias->estado;
        $this->path = $noticias->path;
        $this->path2 = $noticias->path2;
        $this->path3 = $noticias->path3;
        $this->path4 = $noticias->path4;



        $this->action = 'Editar';
       
        $this->dispatchBrowserEvent('show-form', ['action' => 'show' ]);
        
      
    }


    public function store()
    {
       $noticias = Noticias::updateOrCreate(
           ['id' => $this-> noticia_id],
           [
            'titulo' => $this->titulo,
            'slug' => $this ->slug,
            'descripcion' => $this-> descripcion,
            'estado' => $this-> estado,
            'path' => $this-> path,
            'path2' => $this -> path2,
            'path3' => $this->path3,
            'path4' => $this-> path4 
           ]
       );

    // dd($this->path);
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



       $this->dispatchBrowserEvent('notify',
           ['result' => $this->noticia_id > 0 ? 'Registro Actualizado' : 'Registro Editado']);
        $this->reset('titulo', 'slug', 'descripcion', 'estado', 'path', 'path2', 'path3', 'path4');  
        $this->dispatchBrowserEvent('show-form', ['action' => 'hide']);
    }

    protected $listeners = ['destroy'=>'destroy'];

    public function destroy(Noticias $noticia)
    {
        $noticia->delete();
        $this->dispatchBrowserEvent('notify', ['result' => 'Noticia Eliminado']);
        $this->resetPage();
    }


    public function closeModal()
    {
        $this->reset('titulo', 'slug', 'descripcion', 'estado', 'path', 'path2', 'path3', 'path4');  
        $this->dispatchBrowserEvent('show-form', ['action' => 'hide']); 
    }

    public function render()
    {
        
          if (strlen($this->search) > 0 ) {
           
            $noticiasb = Noticias::where('titulo', 'like', "%{$this->search}%")
                 ->orWhere('slug', 'like', "%{$this->search}%")
                 ->orderBy('created_at','desc')
                 ->paginate(10);
                }
                 
           else {
                $noticiasb = Noticias::orderBy('created_at', 'desc')->paginate(10);
           }

          
        return view('livewire.noticias.nnoticias', compact('noticiasb') )
            ->layout('app.theme');
    }
}
