@extends('layouts.template')

@extends('layouts.template')

@section('content')


    <section class="top-0">
         
    @include('layouts.topbar_estudiantes')
    @include('layouts.navtop_estudiantes')   
            
    
           
               <div class="container">
                   <div style="background-color: #00498D" >
                     
                       <h2 style="color: white" class="p-2"> Orgullo <strong> UTESUR </strong></h2>

                   </div>
                </div> 
                
               {{-- <img class="img-students" src="{{asset('img/banner/orgullo_utesur.jpg')}}" > --}}
                
           


            <div class="container">
                {{-- <div class="row">
                    
                             
                    <div class="d-flex justify-content-center">
                        <div class="align-item-center ">

                        </div>
                                                      
                    </div> --}}


                   
           

            <div class="row">
                <div class="col-md-3" style="font-size: 12px !important">
                    
                   

                    @include('layouts.menuleft')
                     
                </div>


                <div class="col-md-9">
               
                          <div class="row">
                            <div class="col-md-3">
                                    
                                   <img src="{{asset('/img/orgullo/milagro.jpg')}}" alt="" class="w-100">

                                   <p style="font-weight: 600" class="text-center"> MILAGRO AMPARO ROSARIO GARCIA </p> <br>
                                    <br> 

                                    <div style="background-color:#00498D; text-align: justify" class="p-3">
                                        <p style="font-weight: 600"  class="text-center text-white">  “ORGULLO EGRESADOS UTESUR” </p> <br>
                                        <p style="font-size: 12px" class="text-white"> Busca impulsar la calidad en el desempeño profesional, reconociéndolos por sus condiciones personales, profesionales  y académicos </p> 

                                    </div>
                                   

                                 <br>

                            </div>


                            <div class="col-md-9" style="text-align: justify">
                                                                
                                Nacida el 21 de Marzo 1950,   
                                
                                egresada de la Universidad Tecnológica del Sur –UTESUR- en el año 1991, graduada de Licenciada en Educación Mención Ciencias Sociales.
                                Especialidad y postgrado en Formación Integral Humana y Religiosa, Universidad Católica de Santo Domingo 2003. <br> 
                                Posee un destacado desempeño como docente por más de 30 años, en su quehacer como docente cuenta con vasta experiencia de la formación en valores religiosos y humanos. <br> 
                                                                
                                
                                En la actualidad es capacitadora del programa Quisqueya Prende Contigo. <br>
                                Coordinadora Parroquial y ministra extraordinaria eucarística y atención a los enfermos. <br>
                                Coordinadora de la pastoral penitenciaria en la Parroquia de las Remedios. <br> 
                                En coordinación con la Procuraduría General de la República y la Dirección de prisiones imparte talleres a los reclusos capacitándolos en valores sociales y espirituales. <br> 
                                Madre espiritual del comité timon local de Azua en coordinación con hogares crea trabajando los valores  y apoyo social con los internos. <br>
                                                                
                                

                                 <br>
                                 <p style="font-weight: 600">RECONOCIMIENTOS: </p><br> 
                                
                                Ha recibido innumerables reconocimientos, entre ellos: <br>
                                <ul class="m-6">

                                
                                <li> Reconocimiento por su dedicación, aporte y entrega al desarrollo del área de Formación Integral Humana y Religiosa MINERD. </li>
                                <li> Reconocimiento en conmemoración del Día Internacional de la Mujer </li>
                                <li> Reconocimiento otorgados por los maestros de Formación Humana y Religiosa UTESUR 2003. </li>
                                <li> Reconocimiento por la Asociación Dominicana de Profesores ADP, por su entrega, cooperación y dedicación en el proceso educativo.</li> 
                                <li> Reconocimiento otorgado por los reclusos de la cárcel 19 de marzo Azua. </li> 
                                <li>Reconocimiento otorgado por la Procuraduría General de la República 2000. </li> 
                                
                            </ul>
                            
                            </div>

                          </div>
                      



                       {{-- <h5 style="font-weight:600; color :#00498D " class="mb-4">Contactos</h5> --}}
                       <h6 style="color: #00498D; font-weight:600 ; " class="mt-3 mb-3">Contactos Decanato de Extensión y Servicios </h6> 
                       <div class="row d-flex justify-content-between">

                        
                            
                            
                            
                            <div class="col-md-4">

                                <div class="boxcontactos mt-2 p-2" >
                                    <P style="color: #00498D; font-weight:600; font-size:14px " class="">Esmelin Sánchez </P> 
                                    <p style=" font-size:11px " class="">Decano de Extensión y Servicios</p>
                                    <p style=" font-size:11px " class="">+1 809-890-3529</p>
                                    <p style=" font-size:11px " ><strong>Email</strong> : esmelin.sanchez@utesur.edu.do</p>
                                 </div>

                            </div>

                            <div class="col-md-4">

                                
                                <div class="boxcontactos mt-2 p-2" >
                                    <P style="color: #00498D; font-weight:600; font-size:14px " >Ramón Piña  </P> 
                                
                                    <p style=" font-size:11px " >Encargado de Proyectos</p>
                                    <p style=" font-size:11px " >+1 809-840-7573</p>
                                    <p style=" font-size:11px " ><strong>Email</strong> : ramon.pina@utesur.edu.do</p>
                                 </div>

                            </div>

                            <div class="col-md-4">

                               
                                <div class="boxcontactos mt-2 p-2" >
                                    
                                    <P style="color: #00498D; font-weight:600; font-size:14px " >Sileny Castillo </P> 
                                    
                                    <p style=" font-size:11px " >Vinculación Egresados-Comunidad</p>
                                    <p style=" font-size:11px " >+1 849-848-5154 Ext. 214</p>
                                    <p style=" font-size:11px " ><strong>Email</strong> : sileny.castillo@utesur.edu.do</p>
                                 </div>

                            </div>

                            

                            
                        </div>
                        
                                                      
                   


                </div>




            </div>


            

        </div>


    </div>

     
    </section>

  

@endsection

