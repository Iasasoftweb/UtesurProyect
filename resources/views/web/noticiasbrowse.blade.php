@extends('layouts.template')

@section('content')


    <section class="top-0">
         
    @include('layouts.topbar')      
    @include('layouts.navtop')     
       <div class="container">
           <div class="row justify-content-center mt-2">
               <p class="titulo">NOTAS DE PRENSA</p>                 
           </div>
           <div class="row">
               <div class="d-none d-sm-block col-md-3">
                 @include('web.noticias.noticiasdestacadas')
                </div>


               <div class="col-md-9">
                @foreach ($noticiasb as $notidestaca) 
               
                <div class="card  noti m-4">
                    <div class="row set-p justify-content-center">
                        <div class="col-sm-3 px-0"> <img class="image" src="{{asset('storage/noticias/'.$notidestaca->path) }}"> </div>
                        <div class="col-sm-9">
                            <div class="row px-3 mt-4 mb-3">
                                <p class ="text-primary mb-0 mr-2 grade"><strong>{{\Carbon\Carbon::parse($notidestaca->created_at)->diffForHumans() }}</strong></p>
                                <p class="text-secondary mb-0 mr-2">&middot;</p>
                                
                            </div>
                            <div class="row px-3">
                                <h5 class="font-weight-bold" > <a href="{{ url('./notidetalle/'.$notidestaca->id)}}" class="href" style="text-decoration: none; color:black ">{{$notidestaca->titulo}}</a></h5>
                            </div>
                            <div class="line"></div>
                                        <div class="row px-3">
                                <p class="mt-1" style="color:darkgray !important">{{$notidestaca->slug}}</p>
                            </div>
                            <div class="row px-3">
                                {{-- <i class="fa-brands fa-facebook"></i> --}}
                                {{-- <p class="">Mitte, Berlin &middot; 2.6 km from center</p> --}}
                               
                            </div>
                            <div class="d-flex justify-content-end share pb-1 " >  <i class="fa-solid fa-share-nodes share-icon"></i> </i> <i class="fa-brands fa-facebook fb-icon"></i>  <i class="fa-brands fa-instagram ig-icon"></i> </div>
                            
                        </div>
                    </div>
                </div>
               
                @endforeach   
               
                <div class="d-flex justify-content-center">
                    {{  $noticiasb->links() }}
                </div>




               </div>
           </div>
          
       </div>
     

    </section>

  

@endsection
