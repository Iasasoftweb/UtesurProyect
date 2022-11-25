@extends('layouts.template')


@section('content')


    <section class="top-0">
         @include('layouts.topbar') 
         @include('layouts.navtop')  
         @include('layouts.slider') 
         @include('layouts.frontbotones') 
         
         @include('layouts.avisonoticia')
         <br>
         @include('layouts.front_noticias')
         
         <br>
         @include('layouts.frontcalendar')
         <br>
         {{-- @include('layouts.ofertaacademica') --}}

         @include('layouts.counter')

      

    </section>

  

@endsection








 

      
  

