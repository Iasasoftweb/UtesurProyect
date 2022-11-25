<footer class="kilimanjaro_area">
    <br>
    <br>
    <!-- Top Footer Area Start -->
    <div class="foo_top_header_one section_padding_100_70">
         
        <div class="linea-divisora mb-2"></div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="kilimanjaro_part">
                        <h5>Nosotros</h5>
                        
                        <div><img src="{{asset('img/logowhite.png')}}" width="200px"> </div>
                        <p>La Universidad Tecnológica del Sur, UTESUR, es una institución de educación superior de carácter privado, sin fines de lucro y de alcance nacional, con personalidad jurídica, patrimonio propio y plena autonomía académica, económica y administrativa, representada en todos los actos legales, académicos e institucionales por la máxima autoridad que ejerce para tales efectos su Consejo de Directores. Se rige por las leyes y los reglamentos de República Dominicana y por sus propios estatutos.</p>

                        
                    </div>
                    <div class="kilimanjaro_part m-top-15">
                        <h5>Redes Sociales</h5>
                        <ul class="kilimanjaro_social_links">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i> Pinterest</a></li>
                            <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i> YouTube</a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i> Linkedin</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                        <div class="kilimanjaro_part">
                                <h5>Contactos</h5>
                                <div class="kilimanjaro_single_contact_info">
                                    <h5>Dirección:</h5>
                                    <p>Av. Enriquillo No. 1, Barrio Mejoramiento Social, Azua de Compostela, Rep. Dom.</p>
                                    <h5>Telefonos:</h5>
                                    <p>1.809.521.3785 <br> 1.809.521.4164</p>
                                </div>
                                <div class="kilimanjaro_single_contact_info">
                                    <h5>Email:</h5>
                                    <p>info@utesur.edu.do <br> rectoria@utesur.edu.do</p>
                                </div>
                            </div>

                    {{-- <div class="kilimanjaro_part m-top-15">
                        <h5>Accesos Rápido</h5>
                        <ul class="kilimanjaro_links">
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Nosotros</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Oferta Académica</a></li>
                            <li><a href="{{ url('../portalestudiante')}}"><i class="fa fa-angle-right" aria-hidden="true"></i>Portal Estudiantil</a></li>
                            <li><a href="{{ url('../portaldocente')}}"><i class="fa fa-angle-right" aria-hidden="true"></i>Portal Docente</a></li>
                            <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>PostGrado</a></li>
                        </ul>
                    </div> --}}
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="kilimanjaro_part">
                        <h5>Ultimas Noticias</h5>
                        @foreach ( $notidestacadas as $item1)

                        <div class="kilimanjaro_blog_area">
                            {{-- <div class="kilimanjaro_thumb p-3 align-item-center">
                            <img class="" src="{{ asset('/img/noticias/'.$item1->imagen)}}" alt="">

                            </div> --}}
                            <a href="#">{{$item1->titulo}}</a>
                            <p class="kilimanjaro_date">{{Carbon\Carbon::parse($item1->created_at)->toFormattedDateString() }}</p>
                            
                        </div>
                        
                                                        
                        @endforeach
  

                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Footer Bottom Area Start -->
    <div class=" kilimanjaro_bottom_header_one section_padding_50 text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p style="font-size: 12px;">© Todos los Derechos Reservados <a href="#">Iasasoft Web<i class="fa fa-love"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

</html>