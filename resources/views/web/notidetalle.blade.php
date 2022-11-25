@extends('layouts.template')

@section('content')


    <section class="top-0">
         
    @include('layouts.topbar') 
    @include('layouts.navtop')     
    <div class="container mt-2">
        
        <div class="row">
            <div class="d-none d-sm-block col-md-3">
                @include('web.noticias.noticiasdestacadas')
             </div>


            <div class="col-md-9">
                      

             <div class=" caja-noti mt-4">
               {{-- @foreach ($shownews as $item) --}}
               

                <h2 class="p-2">{{$shownews->titulo}}</h2>
                <div class="m-2  ">

                    
                    <img  class="img-fluid" src="{{asset('storage/noticias/'.$shownews->path) }}" alt="" width="500">
                    {{-- {{asset('img/noticias/'.$shownews->imagen)}} --}}
                </div>     
                
                <div id="InvisibleDIv">{{ nl2br(e($shownews->descripcion)) }}</div>
                <p class="p-4 text-justify" id="pContainerPadre" ></p>
                   
                {{-- @endforeach   --}}

                <div  class="card-footer d-flex justify-content-between" style="font-size: 12px; color: #00498d" > 
                    <p> Por :<strong> Departamento de Prensa</strong></p>
                    <p> {{\Carbon\Carbon::parse($shownews->created_at)->toFormattedDateString() }} </p>
                    <div class="d-flex justify-content-end share pb-1 " >  <i class="fa-solid fa-share-nodes share-icon"></i> </i> <i class="fa-brands fa-facebook fb-icon"></i>  <i class="fa-brands fa-instagram ig-icon"></i> </div>
                  </div>
             </div>
            </div>
        </div>
       
    </div>
  
    </section>
@endsection