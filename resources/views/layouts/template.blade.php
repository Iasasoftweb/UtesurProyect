<!DOCTYPE html>
<html lang="es-DO">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    {{-- Etiquetas para mejorar el SEO de la pagina --}}
    <meta name="description" content="Portal Web de la Universidad Tecnologica Del Sur, utesur">
    
    {{--Facebook SEO  --}}
    <meta property="og:title" content="Universidad Tecnologica Del sur">
    <meta property="og:description" content="Portal Web de la Universidad Tecnologica Del Sur">
    <meta property="og:image" content="https://utesur.edu.do/og-image.png">
    <meta property="og:url" content="https://utesur.edu.do">
    

    <title>Universidad Tecnológica del Sur | UTESUR</title>
    <link rel="icon" href="{!! asset('/img/favicon.ico') !!}" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/css/avisos.css') }}?1.0" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}?1.0" rel="stylesheet">
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/df8f124aee.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Material+Icons"  rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    

  
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}



    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> --}}


    <script src="{{ asset('/js/myjs.js') }} "></script>
    {{-- <script src="{{ asset('js/tabs.js') }} "></script> --}}
    
    

</head>

<body>
   
    <section class="top-0">

        @yield('content')

    </section>

    @include('layouts.footer')
   
    <script src="{{ asset('/js/count.js') }} "></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




</body>

</html>