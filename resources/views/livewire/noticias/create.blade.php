<div wire:ignore.self class="modal fade" id="form" tabindex="-1" role="dialog" aria-hidden="true" class="modal-lg w-100">
    <div class="modal-dialog" role="document">
        <div class="modal-content ">
            <div class="modal-header  bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">{{$action}} Noticia</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times-circle"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-sm-3">
                        <div class="card text-start w-100">
                            <div class="card-title bg-danger text-white text-center">
                                <span class="" style="font-size: 12px">Imagenes</span>
                            </div>
                            <div class="card-body">

                                <p class="card-text"> </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-9">
                        <form action="">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="titulo"></label>
                                        <textarea type="textarea" placeholder="Titulo" wire:model="titulo" class="form-control" style="font-size: 12px"></textarea>
                                        @error('titulo') <small class="text-danger">{{$message}}</small> @enderror
                                    </div>
                                </div>

                                <div class="row">
                                  <div class="col-sm-12">
                                      <label for="slug"></label>
                                      <textarea placeholder="Slug" wire:model="slug" class="form-control" style="font-size: 12px"></textarea>
                                  </div>
                              </div>


                                <div class="row">
                                    <div class="col-sm-12">
                                        <label for="descripcion"></label>
                                        <textarea placeholder="Descripcion" wire:model="descripcion" class="form-control" style="font-size: 12px"></textarea>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1" style="font-size: 12px">Estado</label>
                                            <select class="form-control" wire:model="estado" id="exampleFormControlSelect1" style="font-size: 12px">
                                                <option>Activo</option>
                                                <option>Inactivo</option>
                                                <select>
                                        </div>
                                    </div>
                                </div>

                                <div class="custom-file mt-2">
                                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01" style="font-size: 12px">Seleccionar Imagen 1</label>
                                </div>

                                <div class="custom-file mt-2">
                                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01" style="font-size: 12px">Seleccionar Imagen 2</label>
                                </div>

                                <div class="custom-file mt-2">
                                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01" style="font-size: 12px">Seleccionar Imagen 3</label>
                                </div>

                                <div class="custom-file mt-2">
                                  <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01" style="font-size: 12px">Selccionar Imagen 4</label>
                                </div>
                                  
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button wire:click="store" class="btn btn-secondary" type="button" style="font-size: 12px">Guardar</button>
                       <a class="btn btn-primary" data-dismiss="modal" style="font-size: 12px">Cancelar</a>
            </div>
        </div>
    </div>
</div>
