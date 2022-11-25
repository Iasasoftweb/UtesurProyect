@extends('layouts.template')

@section('content')


    <section class="top-0">
         
    @include('layouts.topbar_estudiantes')
    @include('layouts.navtop_estudiantes')   
            <div class="container-estudents-slider" >
                <img class="img-students" src="{{asset('img/banner/estudiante1.jpg')}}" >
                
            </div> 


            <div class="container">
                {{-- <div class="row">
                    
                             
                    <div class="d-flex justify-content-center">
                        <div class="align-item-center ">

                        </div>
                                                      
                    </div> --}}


                   
           

            <div class="row">
                <div class="col-md-3" style="font-size: 12px !important">
                    
                    <br>       
                    <a href="http://utesur.uxxi.com/portal/page/portal/uxxiportal/inicio" class="btn btn-primary btn-md w-100 m-2" role="button" aria-disabled="true">Historial Académico</a>
                    
                    <br>
                    
                    <a href="http://utesursso.uxxi.com/sso/pages/login.jsp?site2pstoretoken=v1.4~F2827D27~20F24DB856936CBF79EBC31713713CC31AB96CB92381D056D3F39E548BE51193427853DCF8A27FDE94739D4C935C21659C2C9276643167FD625FDAB02554F9DE81D335DB9E4ABCD7FE20E5B3A5E7BFF81BC6ADC7A4F81EC877D3B2CA37F08A45BC39B1B4128BDAC101AA19CC1318C538283C4BD57093476CBBE7FD2949C46D577A4E04BFB124DD575883DE9E6960830815B3C4ECE5618A871C313A94124D04DC908DFAA109121F8820EDF38F28EF8BDA28216C0C394548B9&p_error_code=&p_submit_url=http%3A%2F%2Futesursso.uxxi.com%2Fsso%2Fauth&p_cancel_url=http%3A%2F%2Futesur.uxxi.com&ssousername=&subscribername=" class="btn btn-success btn-md w-100 m-2" role="button" aria-disabled="true">Seleción de Asignaturas</a>
                    <br>


                    @include('layouts.menuleft')
                     
                </div>


                <div class="col-md-9">
                      <br>
                     <div>
                         <h5 class="titulos" > Bienvenido a tu Universidad</h5>

                        <p style="text-align: justify; line-height:2px font-size:0.8em; "> La Universidad Tecnológica del Sur, UTESUR se complace en darte la bienvenida en esta nueva  etapa de tu vida, nos sentimos honrado de poder recibirte, y que seas parte de nuestra gran familia. <br><br>

                            Ingresar al sistema de educación superior significará nuevas responsabilidades y nuevos retos y es ahí donde estaremos, para acompañarte en todo tu proceso profesional. <br><br>
                            
                            En UTESUR,  hemos desarrollado  a través de años un trabajo arduo y sostenido, realizado por pasadas gestiones y por nuestra  actual  Rectora, María del Rosario Melo Muñoz, M. A., quién ha reconocido la necesidad de iniciar un camino hacia el cambio. Un camino de nuevas oportunidades y retos de la mano con la innovación. <br>
                            
                       </div>


                       <br>
                       <br>
                       <div class="row d-flex  justify-content-between">
                        
                        <div class="col-md-6 col-sm-12 col-lg-3  p-0 mb-1">
                            <div class="boxopciones-1">
                               <div class="row m-2 d-block" >
                                <P style="font-weight:550; font-size:85% " class=" text-white">Calendarios</P> 
                                <p style=" font-size:75% " class="text-white">Académico, Reinscrioción</p>
                                <div  style=" background-color: rgb(57, 116, 8); " class="arrowoption">
                                    <i style="height: 100%; width:100%" class="fa fa-arrow-right text-white m-2" aria-hidden="true"></i>
                                </div>
                            </div> 
                                
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-3  p-0 mb-1">
                            <div class="boxopciones-2">
                                <div class="row m-2 d-block">
                                    <P style="font-weight:550; font-size:85% " class=" text-white">Orientación Académica</P> 
                                    <p style=" font-size:75% " class="text-white">Departamento Orientación Académica</p>
                                    <div  style=" background-color: rgb(255,103,91); " class="arrowoption">
                                        <i style="height: 100%; width:100%" class="fa fa-arrow-right text-white m-2" aria-hidden="true"></i>
                                    </div>
                                </div> 
                                   
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-3  p-0 mb-1">
                            <div class="boxopciones-1">
                                <div class="row m-2 d-block">
                                    <P style="font-weight:550; font-size:85% " class=" text-white">Reglamentos</P> 
                                    <p style=" font-size:75% " class="text-white">Universitario, Estudiantil Ect.</p>

                                    <div  style=" background-color: rgb(255,153,0); " class="arrowoption">
                                        <i style="height: 100%; width:100%" class="fa fa-arrow-right text-white m-2" aria-hidden="true"></i>
                                    </div>
                                </div> 
                                    {{-- <div class="row d-flex flex-row-reverse m-1" >
                                        
                                       
                                    </div> --}}
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-lg-3  p-0 mb-1">
                            <div class="boxopciones-2">
                                <div class="row m-2 d-block">
                                    <P style="font-weight:550; font-size:85% " class=" text-white">Contactos</P> 
                                    <p style=" font-size:75% " class="text-white">Contactos de Maestros</p>

                                    <div  style=" background-color: rgb(0,193,207); " class="arrowoption">
                                        <i style="height: 100%; width:100%" class="fa fa-arrow-right text-white m-2" aria-hidden="true"></i>
                                    </div>
                                </div> 
                                   
                            </div>
                        </div>
                           

                       </div>
                       
                       {{-- <button type="button" class="btn btn-outline-secondary">Consultar Calendario de Reinscrioción</button> --}}
                        
                       <br>
   
                       {{-- <h5 style="font-weight:600; color :#00498D " class="mb-4">Contactos</h5> --}}
                       <h6 style="color: #00498D; font-weight:600 ; " class="mt-3 mb-3">Contactos </h6> 
                       <div class="row d-flex justify-content-between">

                        
                            
                            
                            
                            <div class="col-md-4">

                                <div class="boxcontactos mt-2 p-2" >
                                    <P style="color: #00498D; font-weight:600; font-size:14px " class="">Francisco Silvestre Montaño </P> 
                                    <p style=" font-size:11px " class="">Director de Registro</p>
                                    <p style=" font-size:11px " class="">+1 809-521-3785 Ext. 210</p>
                                    <p style=" font-size:11px " ><strong>Email</strong> : registro@utesur.edu.do</p>
                                 </div>

                            </div>

                            <div class="col-md-4">

                                
                                <div class="boxcontactos mt-2 p-2" >
                                    <P style="color: #00498D; font-weight:600; font-size:14px " >María Antonia Pérez Nova  </P> 
                                
                                    <p style=" font-size:11px " >Decanato Académico</p>
                                    <p style=" font-size:11px " >+1 809-521-3785 Ext. 223</p>
                                    <p style=" font-size:11px " ><strong>Email</strong> : maria.perez@utesur.edu.do</p>
                                 </div>

                            </div>

                            <div class="col-md-4">

                               
                                <div class="boxcontactos mt-2 p-2" >
                                    
                                    <P style="color: #00498D; font-weight:600; font-size:14px " >Juan Luis Beltré </P> 
                                    
                                    <p style=" font-size:11px " >Enc. Tecnología, Registro</p>
                                    <p style=" font-size:11px " >+1 809-521-3785 Ext. 214</p>
                                    <p style=" font-size:11px " ><strong>Email</strong> : juan.beltre@utesur.edu.do</p>
                                 </div>

                            </div>

                            

                            
                        </div>
                        
                                                      
                   


                </div>




            </div>


            

        </div>


    </div>

     
    </section>

  

@endsection

