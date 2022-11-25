<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Banner;

class Banners extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombrebanner, $estado, $imagen, $posicion, $links;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.banners.view', [
            'banners' => Banner::latest()
						->orWhere('nombrebanner', 'LIKE', $keyWord)
						->orWhere('estado', 'LIKE', $keyWord)
						->orWhere('imagen', 'LIKE', $keyWord)
						->orWhere('posicion', 'LIKE', $keyWord)
						->orWhere('links', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->nombrebanner = null;
		$this->estado = null;
		$this->imagen = null;
		$this->posicion = null;
		$this->links = null;
    }

    public function store()
    {
        $this->validate([
		'nombrebanner' => 'required',
		'estado' => 'required',
		'imagen' => 'required',
        ]);

        Banner::create([ 
			'nombrebanner' => $this-> nombrebanner,
			'estado' => $this-> estado,
			'imagen' => $this-> imagen,
			'posicion' => $this-> posicion,
			'links' => $this-> links
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Banner Successfully created.');
    }

    public function edit($id)
    {
        $record = Banner::findOrFail($id);

        $this->selected_id = $id; 
		$this->nombrebanner = $record-> nombrebanner;
		$this->estado = $record-> estado;
		$this->imagen = $record-> imagen;
		$this->posicion = $record-> posicion;
		$this->links = $record-> links;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nombrebanner' => 'required',
		'estado' => 'required',
		'imagen' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Banner::find($this->selected_id);
            $record->update([ 
			'nombrebanner' => $this-> nombrebanner,
			'estado' => $this-> estado,
			'imagen' => $this-> imagen,
			'posicion' => $this-> posicion,
			'links' => $this-> links
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Banner Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Banner::where('id', $id);
            $record->delete();
        }
    }
}
