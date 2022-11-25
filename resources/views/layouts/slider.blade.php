<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    

 
    @foreach($banner as $items)
    <div class="carousel-item {{$items->id == 1 ? 'active' : '' }}">
      <img class="d-block w-100 img-slider "
        src="{{asset('img/banner/'.$items->imagen)}}" alt="">
    </div>
   
    @endforeach

    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

  
  <div class="linea-divisora"></div>

 
</div>


