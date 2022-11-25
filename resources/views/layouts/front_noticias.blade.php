  
  <div class="container"  >
    <div class="row d-flex justify-content-between p-3"  > <span class="titulos2"> Noticias Recientes </span>  <button class=" btn-div-generico-prensa" ><a  class="" style="text-decoration: none; color:#fff" href="{{ url('noticiasbrowse') }}"> Notas de prensa  </a></button> </div>  
  
    
  <div class="container-card">
	
  @foreach ($noticias as $noti)  
 <a href="{{ url('./notidetalle/'.$noti->id)}}" style="text-decoration: none; cursor:pointer !important" >
  <div class="card ">
    <figure class="m-0">

              <img src="{{asset('storage/noticias/'.$noti->path) }}" alt="" class="p-2">    
              
    </figure>
    <div class="contenido-card">
      
     <div class="pl-4 pr-4 pt-1 pb-1 paddin-container" >

      <div class="fechaCard  " ><div class="" > <i class="fa-solid fa-calendar-days"></i> {{\Carbon\Carbon::parse($noti->created_at)->toFormattedDateString() }} | <strong>Elaborado Por: </strong>Dpto de Prensa </div> </div>
      <div class="linea-fecha pt-1 pb-1"></div>
      <h3 class=" pt-3  ">{{ $noti->titulo }}</h3>
      
      
      <div class="d-flex justify-content-end mb-2" >
          <button  class="p-1 btn btn-outline-primary btn-verMASnoticia" >Ver más...</button>
      </div>
     </div>

    </div>
  </div>
</a> 
  @endforeach
  
  
  
  </div>




</div>


