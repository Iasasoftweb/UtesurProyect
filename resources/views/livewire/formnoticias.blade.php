<div>
    <div class="row m-4">
    <div class="col-sm-12 col-md-4">
        <label for="exampleInputEmail1" class="form-label">Titulo</label>
        <input wire:model="titulo" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
         @error('titulo') <small class="text-danger">{{ $message }} <small> @enderror  
    </div>
    <div class="col-sm-12 col-md-4">
        <label for="exampleInputPassword1" class="form-label">Slug</label>
        <textarea wire:model="slug" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        @error('slug') <small class="text-danger">{{ $message }} <small> @enderror  
    </div>

    <div class="col-sm-12 col-md-4">
        <label for="exampleInputPassword1" class="form-label">Descripcion</label>
        <textarea wire:model="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        @error('descripcion') <small class="text-danger">{{ $message }} <small> @enderror  
    </div>

    <div class="col-sm-12 col-md-4">
        <select wire:model ="estado" class="form-control" aria-label="Default select example">
            <option selected>Estatus</option>
            <option value="1">Activo</option>
            <option value="2">Inactivo</option>

        </select>
        @error('estado') <small class="text-danger">{{ $message }} <small> @enderror  
    </div>


   

    <div class="col-sm-12 col-md-4 mt-3">
        
        <div class="custom-file">
            <input  wire:model="path" type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Cargar Imagen #1</label>
          </div>
    </div>

    
    <div class="col-sm-12 col-md-4 mt-3">

        <div class="custom-file">
            <input  wire:model="path2" type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Cargar Imagen #2</label>
          </div>
       
    </div>

    <div class="col-sm-12 col-md-4 mt-3">
        <div class="custom-file">
            <input  wire:model="path3" type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Cargar Imagen #3</label>
          </div>

  
    </div>

    <div class="col-sm-12 col-md-4 mt-3">

        <div class="custom-file">
            <input  wire:model="path4" type="file" class="custom-file-input" id="customFile">
            <label class="custom-file-label" for="customFile">Cargar Imagen #4</label>
          </div>
       
    </div>

   
</div>
<div class="row d-flex">

    <div class="col-sm-12 col-md-3">
        @if ($path)
            <img src="{{$path->temporaryUrl()}}" height="150px" alt="">
        @endif
    </div>

    <div class="col-sm-12 col-md-3">
        @if ($path2)
            <img src="{{$path2->temporaryUrl()}}" height="150px" alt="">
        @endif
    </div>

    <div class="col-sm-12 col-md-3">
        @if ($path3)
            <img src="{{$path3->temporaryUrl()}}" height="150px" alt="">
        @endif
    </div>

    <div class="col-sm-12 col-md-3">
        @if ($path4)
            <img src="{{$path4->temporaryUrl()}}" height="150px" alt="">
        @endif
    </div>
    
</div>


<div class="col-sm-12 col-md-4 m-4">
    <button wire:click="Store" class="btn btn-primary w-25"> <small>   Guardar   </small> </button>
    <button wire:click="" class="btn btn-success w-25"> <small>     Cancelar   </small> </button>
</div>
    <script>
        window.addEventListener('noticias-registro', envent => {
            alert(event.detail.result)
        })
    </script>






</div>
