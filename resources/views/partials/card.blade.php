


<div class="container">
      <div class="row">
            @foreach ($producto as $xproducto)
                  <div class="col-sm-6 col-md-4 col-lg-3 text-center ">
                  <a title="{{$xproducto->nombre}}" href="pagina-del-producto-{{$xproducto->id}}-de-{{$xproducto->familia}}-{{$xproducto->nombreslug}}.html">
                        <img class="rounded-0 border border-ligth shadow-sm fotoprod" 
                        src="http://www.mundocosmetico.net/imagenes/{{$xproducto->imagen}}.jpg" alt="{{$xproducto->nombre}}" 
                         ></a>
                        <div class="container  ">
                            <p></p>
                            <p
                            class="text-uppercase font-weight-light">{{$xproducto->nombre}}<br>
                            <span class="text-success align-center border code-space" >  {{$xproducto->codigo}} </span>
                            <span class="font-weight-bold precio-card"> {{$xproducto->moneda}} {{number_format($xproducto->precio,2)}}</span>
                                <br>
                                {{-- ----------------------------------------------------------------- --}}
                                @if($xproducto->status==1)
                                <span class="badge badge-success">Disponible</span>
                                {{-- </p> --}}
                                @endif
                                      @if($xproducto->status==2)
                                      <span class="badge badge-danger">NO disponible</span>
                                      {{-- </p> --}}
                                      @endif
                                        @if($xproducto->ultimoingreso==1)
                                        <span class="badge badge-warning">Último ingreso</span>
                                        @endif

                               {{-- -------------------------------------------------------------------------------- --}}

                        </div>
                    </div><!-- /.col-lg-3 -->
            @endforeach
      </div>
</div>
