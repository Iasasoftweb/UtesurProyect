<div>
    @include('livewire.noticias.create')
    <section>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card bg-light text-dark border border-secondary">
                        <div class="card-header  bg-primary text-white border border-secondary">

                            <div class="d-flex justify-content-between  align-items-center">
                                
                              <div >
                                <button class="btn btn-success m-2" wire:click.prevent='addNews' type="button">
                                    <small> Agregar Nueva Noticia</small> </button>
                               </div>
                               <div>
                                    <h4><strong> Mantenimiento de Noticias </strong> </h4>
                                </div>
                                
                            </div>
                            <div>
                                <input wire:model="search" type="text" class="form-control"
                                    placeholder="Buscar por Titiulo o Descripcion">
                            </div>
                        </div>

                        <div class="card-body  bg-light text-dark border border-secondary">
                            <table class="table table-striped table-bordered table-hover">

                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Fechas</th> 
                                        <th>Imagenes</th>
                                        <th>Titulos</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($noticiasb as $notidestaca)
                                        <tr>
                                            <td>{{ $notidestaca->id }}</td>
                                            <td>{{ $notidestaca->created_at }}</td>
                                            <td>
                                                @if ($notidestaca->path)
                                                    <img src=" {{ asset('storage/noticias/' . $notidestaca->path) }}"
                                                        height="75px" alt="">
                                                @endif
                                            </td>
                                            <td>{{ $notidestaca->titulo }}</td>
                                            <td>
                                                <button class="btn btn-success"
                                                    wire:click="edit({{ $notidestaca->id }})"> <small>Editar</small>
                                                </button>
                                                <button class="btn btn-danger"
                                                    onclick="confirmar({{ $notidestaca->id }})"> <small>Eliminar</small>
                                                </button>

                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>Sin Resultados</td>
                                        </tr>
                                    @endforelse
                                </tbody>

                            </table>
                        </div>

                        <div class="card-footer  bg-light text-dark border border-secondary rounded">
                            {{ $noticiasb->links() }}
                        </div>

                    </div>
                </div>
            </div>

        </div>


        

    </section>

   

  
    <script>
        function confirmar(id) {
            var option = confirmar("¿Confirmar Eliminar Registro?")
            if (option == true) {
                window.livewire.emit('destroy', id)
            }
        }


        window.addEventListener('modal', event => {
            $('ModalNoticias').modal(event.detail.action)
        })


        window.addEventListener('notify', envent => {
            alert(event.detail.result)
        })
    </script>


    

</div>
