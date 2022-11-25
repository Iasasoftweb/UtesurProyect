                 <hr class="m-2">
                    <h5>Noticias Destacadas</h5>
                            <ul class="list-group">
                                @foreach ($notidestacadas as $notidestaca) 
                                <li class="list-group-item" style="font-size: 12px"> <a href="{{ url('./notidetalle/'.$notidestaca->id)}}" class="href" style="text-decoration: none; color:darkgray"> {{$notidestaca->titulo}} </a></li>
                                @endforeach 
                            </ul>