<div class="container pt-4 pb-4 pl-0 pr-0">

  
  
  {{-- <ul class="nav nav-tabs justify-content-center m-2" id="myTab" style="color: black !" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-linkAcademico btn btn-primary " id="grado-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Grado</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-linkAcademico btn btn-success" id="postgrado-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">PostGrado</button>
    </li>
    
    
  </ul> --}}


  <div class="d-flex justify-content-between  flex-wrap m-1"> 
    <h1 class="titulos2 m-0"> Ofertas Académica</h1>
    
    <div><button class="btn-div-generico-prensa text-white active  btn-shadow" style="min-width: 120px" >Grado</button>
      <button class="btn-div-generico-prensa text-white btn-shadow" style="min-width: 120px">Postgrado</button></div>
  </div>

  

<div class=" container mt-2 container-grid-ofertaacademica w-100">

    
        
       @foreach ($carreras as $item) 
       <div  class="d-none cuavacio" >{{$item->carreras}}</div>
      @endforeach

      @foreach ($carreras as $item)
      
      <div class="div-explandible  " id="img-background-oferta" >  
        <img  style="max-width: 100%; min-height: 100%; object-fit:cover;"  src="{{asset('img/carreras/'.$item->fimagen)}}" alt="" srcset="">
        <div id="div-center1" class=" contenedor-padre  div-expandible-centro d-flex flex-column justify-content-center"> 
          <h5 class="titulograndeh5 text-center" style="font-size:20px"> {{$item->carreras}}</h5>
          <h5 class="contenido-oculto text-white "    style="font-size: 14px"> Ver mas detalles   </h5>
        </div>
     </div>

      @endforeach
       

     
      
    </div>
    


</div>
    
    
  <div class="d-flex justify-content-center pt-2"><button class=" btn btn-primary active calendariocompleto-btn btn-shadow "> Ver todas las carreras </button></div>


</div>
