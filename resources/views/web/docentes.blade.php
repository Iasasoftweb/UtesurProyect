@extends('layouts.template')

@section('content')


    <section class="top-0">
         
    @include('layouts.topbar_estudiantes')
    @include('layouts.navtop_estudiantes')   
            <div class="container-estudents-slider" >
                <img class="img-students" src="{{asset('img/banner/docentes.png')}}" >
                
            </div> 


            <div class="container">
                <div class="row">
                    
                             
                    <div class="d-flex justify-content-center">
                        <div class="align-item-center ">

                        </div>
                                                      
                    </div>


                   
            </div>

            <div class="row">
                <div class="col-md-3" style="font-size: 12px !important">
                 
                    @include('layouts.menuleft')
                     
                </div>


                <div class="col-md-9">
                      <br>

                      
                      <div class="alert alert-success" role="alert">
                        <p class="text-center" style="color:#444; font-size :0.9em; LINE-HEIGHT:10px">Este servicio es de acceso exclusivo para el personal docente  activo.</p>
                        <p class="text-center" style="color:#444; font-size :0.9em;">En caso de no poder accesar, favor comicarse con el Dpto. de Tecnología</p>
                      </div>

                       <br>
                       <br>
                       <div class="justify-content-center">
                        <a type="button" class="btn btn-success btn-lg mx-auto btn-block" href="http://utesursso.uxxi.com/sso/pages/login.jsp?site2pstoretoken=v1.4~F2827D27~3B50726BFDEA4B9E806ACF6EE64044AD4F883821D9AD7E49FD9A6C0C13D5EFFA2063AD61E13D6B62C0FF952AA54FABDBD1680D389552C05BEF958399E4EC38D32AEF9F945007FC6896512C5D2F0E754372DEEB36EC71A9860A8F581CD865BD9F3F0FFA45A64DE7C80E12F79FF2009C245E69CC1241EA6F21F376360181436EBC113950151CCF882F59001C7BFC875DDA2C54FBE01C6F47865DFD47AEF6588A711E1FC2A1B40CA8509069EB9A4051C239A0BE5ED99B1AE4ED&p_error_code=&p_submit_url=http%3A%2F%2Futesursso.uxxi.com%2Fsso%2Fauth&p_cancel_url=http%3A%2F%2Futesur.uxxi.com&ssousername=&subscribername=" role="button">Entrar al Sistema</a>
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


    

     
    </section>

  

@endsection

