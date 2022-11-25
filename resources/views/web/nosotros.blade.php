@extends('layouts.template')

@section('content')


    <section class="top-0">
         
    @include('layouts.topbar_estudiantes')
    @include('layouts.navtop_estudiantes')   
          
            <div class="container-estudents-slider" >
                <img class="img-students" src="{{asset('img/banner/nosotros.jpg')}}" class="image-responsive">
                
            </div> 
            

            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0" style="font-size: 12px; background-color:white">
                      <li class="breadcrumb-item"><a href="{{url('./')}}">Inicio</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Nosotros</li>
                    </ol>
                  </nav>
                  


                   
            

            <div class="row">
                <div class="col-md-3" style="font-size: 12px !important">
                 
                    @include('layouts.menuleft')
                     
                </div>


                <div class="col-md-9">
                      <br>
                      <h5 class="titulos" > Datos Fundamentales </h5>
                      <br>
                      <br>
                      <h6 style="font-size: 18px; font-weight:600; color: #004893;" > Naturaleza </h6>
                      <p class= "texto-p">
                        La Universidad Tecnológica del Sur, UTESUR, es una institución de educación superior de carácter privado, sin fines de lucro y de alcance nacional, con personalidad jurídica, patrimonio propio y plena autonomía académica, económica y administrativa representada en todos los actos legales académicos e institucionales por la máxima autoridad que ejerce para tales fines su Consejo de Directores. Se rige por las leyes y reglamentos de República Dominicana y por sus propios estatutos. 
                      </p>
                      <br>
                      <br>
                      <h6 style="font-size: 18px; font-weight:600; color: #004893;" > Visión </h6>
                      <p class= "texto-p">
                        
                        La visión de La UTESUR se fundamenta en la búsqueda permanente del crecimiento integral del egresado, en irradiar en la sociedad un modo de vida coherente con la verdad, en la difusión del conocimiento en todos los ámbitos del saber, en el fomento de la cultura del diálogo abierto y respetuoso de las personas, y en la promoción del amor al trabajo, la fraternidad, la solidaridad el sentido de justicia, la tolerancia, la libertad y la vocación de servicio. 
                      </p>

                      <br>
                      <br>
                      
                      <h6 style="font-size: 18px; font-weight:600; color: #004893;" > Misión </h6>
                      <p class= "texto-p">
                        Su misión es elevar el nivel científico, cultural y productivo de la Región Suroeste, formando profesionales y técnicos íntegros y competentes que contribuyan con el desarrollo social, económico y cultural de la nación. 
                      </p>


                </div>



            </div>
            </div>
     
    </section>

  

@endsection

