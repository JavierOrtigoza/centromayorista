@extends ('admin.admin_app' )

@section('content')
<div class="container">
    <form method="POST" action="{{url('/administracion/productos')}}/{{$producto->id}}/edit">
        @csrf
        <div class="row">
            <div class="col">    
              <label for="">Código</label>
              <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código del producto"
              value="{{$producto->codigo}}">
            </div>

            <div class="col">
              <label for="">Artículo</label>
              <input type="text" class="form-control" id="articulo" name="articulo" placeholder="Artículo"
              value="{{$producto->nombre}}">
            </div>
        </div>
        <div class="row">
            <div class="col">
              <label for="">Descripción</label>
              <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción"
              value="{{$producto->descripcion}}">
            </div>
        </div>

        <div class="form-group">
                <label for="descripcionlarga">Descripción larga</label>
        <textarea class="form-control" id="descripcionlarga" rows="6" >{{$producto->descripcionlarga}}</textarea>
              </div>

        {{-- <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> --}}

<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
    </form>
</div>
@endsection