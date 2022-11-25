<div>

    <label for="Nombres"></label>
    <input wire:keydown.enter="$set('nombres', 'Fax')" type="text">

    <br>

    <br>

    Nombres : {{$nombres}}
    {{-- <button wire:click="like">Like Post</button> --}}
</div>
