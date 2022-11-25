@extends('layouts.template')

@section('content')


    <section class="top-0">
         
    @include('layouts.topbar_estudiantes')
    @include('layouts.navtop_estudiantes')   

    <div class="container-estudents-slider" >
        <img class="img-students" src="{{asset('img/banner/estudiante1.jpg')}}" >
        
    </div> 

    <div class="container">
        <div class="row">
            <div class="col-md-3" style="font-size: 12px !important">
                    
                @include('layouts.menuleft')
                 
            </div>


            <div class="col-md-9">

                <h3 class="pt-3 text-center">Carreras disponible</h3>

               

                {{-- <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                      <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                      <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                    </div>
                  </nav>


                <div class="grado" >

                    <div class="carreraDiv  p-3 m-2"> 
                        <div class="carreraDivImg   "> <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt=""> </div> 
                        <div class="d-flex flex-column w-100 pl-2"> 
                            <h6 class="">Informatica</h6> 
                            <p> La carrera de informatica donde aprenderas a programar y hackear la nasa, y volverte un hacker profesional. </p> 
                            <div class="d-flex justify-content-end" > <button> detalles </button>  </div>
                        </div>  
                    </div>

                </div>


                <div class="postgrado">

                    <div class="carreraDiv  p-3 m-2"> 
                        <div class="carreraDivImg   "> <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt=""> </div> 
                        <div class="d-flex flex-column w-100 pl-2"> 
                            <h6 class="">Soy un elemento de postGrado</h6> 
                            <p> La carrera de informatica donde aprenderas a programar y hackear la nasa, y volverte un hacker profesional. </p> 
                            <div class="d-flex justify-content-end" > <button> detalles </button>  </div>
                        </div>  
                    </div>

                </div>


                <div class="educacionContinuada">
                    <div class="carreraDiv  p-3 m-2"> 
                        <div class="carreraDivImg   "> <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt=""> </div> 
                        <div class="d-flex flex-column w-100 pl-2"> 
                            <h6 class="">Soy un elemento de educacion continuada</h6> 
                            <p> La carrera de informatica donde aprenderas a programar y hackear la nasa, y volverte un hacker profesional. </p> 
                            <div class="d-flex justify-content-end" > <button> detalles </button>  </div>
                        </div>  
                    </div>
                </div>  --}}
                


                 <ul class="nav nav-tabs" id="myTab" style="color: black !" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-linkAcademico active" id="grado-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">grado</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-linkAcademico" id="postgrado-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">PostGrado</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-linkAcademico" id="education-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">educacion Continuada</button>
                    </li>
                    
                  </ul> 
                  
                  <!-- Tab panes -->
                   <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab"> <div class="carreraDiv  p-3 m-2"> 
                        <div class="carreraDivImg   "> <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt=""> </div> 
                        <div class="d-flex flex-column w-100 pl-2"> 
                            <h6 class="" style="color: #000;">grado</h6> 
                            <p> La carrera de informatica donde aprenderas a programar y hackear la nasa, y volverte un hacker profesional. </p> 
                            <div class="d-flex justify-content-end" > <button> detalles </button>  </div>
                        </div>  
                    </div>
                    </div>

                    <div class="tab-pane " id="profile" role="tabpanel" aria-labelledby="profile-tab"><div class="carreraDiv  p-3 m-2"> 
                        <div class="carreraDivImg   "> <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt=""> </div> 
                        <div class="d-flex flex-column w-100 pl-2"> 
                            <h6 class="" style="color: #000;">postgrado</h6> 
                            <p> La carrera de informatica donde aprenderas a programar y hackear la nasa, y volverte un hacker profesional. </p> 
                            <div class="d-flex justify-content-end" > <button> detalles </button>  </div>
                        </div>  
                    </div></div>

                    <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab"><div class="carreraDiv  p-3 m-2"> 
                        <div class="carreraDivImg   "> <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt=""> </div> 
                        <div class="d-flex flex-column w-100 pl-2"> 
                            <h6 class="" style="color: #000;">educacion continuada</h6> 
                            <p> La carrera de informatica donde aprenderas a programar y hackear la nasa, y volverte un hacker profesional. </p> 
                            <div class="d-flex justify-content-end" > <button> detalles </button>  </div>
                        </div>  
                    </div>
                </div>
                    
                  </div> 
 


               
                

               

            </div>
        </div>

    </div>




</section>

  

@endsection