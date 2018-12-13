@extends('layouts.app')

{{-- --------------------- título de la página --------------------------------------             --}}
@section('title')
Información del producto {{$producto->nombre}}
@endsection
{{-- -------------------------------------------------------------------------------------------- --}}

@section( 'content' )



<div class="espacio-sup">
</div>
<div class="container-fluid">
  <div class="container">
    <p><br>Datos del producto: {{$producto->nombre}}</p>

      <div class="row featurette">
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto border-right" src="http://www.mundocosmetico.net/imagenes/{{$producto->imagen}}.jpg" alt="{{$producto->nombre}}" style="" data-holder-rendered="true">
          </div>
          <div class="col-md-7">
            <h2><span class="lead text-success">Código: {{$producto->codigo}} </span><br><span class="featurette-heading">{{$producto->nombre}}</span></h2>
            <p class="lead">{{substr(nl2br(utf8_decode($producto->descripcionlarga)),0,100)}}...</p>
            <hr/>
            <h2 class="display-4"><span class="lead">{{$producto->moneda}}</span> {{number_format($producto->precio,2)}} <span class="lead">Impuestos incluidos</span></h2>
            <p class=""> Cantidad mínima de compra para este artículo:<span class="lead text-danger"> {{$producto->ventaminima}} unidades.</span>
            <hr/>
            {{-- --------------------------------------- --}}
            @if($imgmarca = $producto->marca)
            <img class="shadow-sm" src="{{asset ('/imgs/marcas')}}/{{$imgmarca}}.svg" alt="{{$producto->nombre}}" style="max-width: 33%" data-holder-rendered="true">
            <br>
            @endif
            {{-- --------------------------------------------------------------- --}}
            @if($producto->status==1)
            <p class="badge badge-success">Disponible
                  @endif
                  @if($producto->status==2)
                  <p class="badge badge-danger">Artículo NO disponible
                  @endif
                        @if($producto->ultimoingreso==1)
                        <p class="badge badge-warning">Último ingreso
                        @endif
                        </p>
            {{-- ------------------------------------------------- --}}

          </div>
      </div>
      <div class="col-md-12">
        <hr/>

        @if ($largo = $producto->descripcionlarga)
        <h2 class="featurette-heading">Descripción del producto:</h2>
        <p>  {{nl2br(utf8_decode($producto->descripcionlarga))}}</p>
        @endif
      </div>

  </div>
</div>

@endsection
