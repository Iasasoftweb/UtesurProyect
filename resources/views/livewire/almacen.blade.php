<div>
    <div class="row">
        <div class="col">
            <label for="">Total en Almacen</label>
            <span>{{$inventario}}</span>
             <br>
            <button wire:click="$emitTo('tienda', 'asignatienda', {{$inventario}})" class="bnt btn-danger m-5">Transferir</button>
            <br>
            <br>
             
            <livewire:tienda/>
        </div>
    </div>
</div>
