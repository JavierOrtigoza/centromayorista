@extends ('admin.admin_app' )

@section('content')

<div class="espacio-sup">
       
</div>

<div class="container">
<p></p>    
<h1>Editar información del producto</h1>

    <form method="POST" action="{{url('/administracion/productos/'.$producto->id.'/actualizar')}}">
        @csrf
        <div class="row">
            <div class="col">    
              <label for="">Código</label>
              <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código del producto"
              value="{{$producto->codigo}}">
            </div>

            <div class="col">
              <label for="">Artículo</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto"
              value="{{$producto->nombre}}">
            </div>
            
        </div>
        <div class="row">
            <div class="col">
              <label for="">Descripción corta</label>
              <input type="text" class="form-control" id="descripcioncorta" name="descripcioncorta" placeholder="Descripción"
              value="{{$producto->descripcion}}">
            </div>
        
            <div class="col">
                <label for="Status">Status</label>
                <select class="form-control" id="status" name="status" placeholder="">
                <option selected>{{$producto->status}}</option>
                  <option>0</option> No mostrar en la web
                  <option>1</option> Mostrar como disponible
                  <option>2</option> Mostrar como NO disponible
                </select>
            </div>
            <div class="col">
                    <label for="">Venta mínima</label>
                    <input type="number" class="form-control" id="ventaminima" name="ventaminima" placeholder="Venta mínima"
                    value="{{$producto->ventaminima}}">
            </div>
            <div class="col">
                    <label for="">Último ingreso</label>
                    <input type="number" class="form-control" id="ultimoingreso" name="ultimoingreso" placeholder="ultimoingreso"
                    value="{{$producto->ultimoingreso}}">
            </div>
        </div>

        <div class="form-group">
                <label for="descripcionlarga">Descripción larga</label>
                
        <textarea class="form-control" id="descripcionlarga" name="descripcionlarga"rows="6" >{{ $producto->descripcionlarga }}</textarea>
        </div>

        <div class="row">
        <div class="col">
        <button type="submit" class="btn btn-primary">Guardar los cambios</button>

        <a href= "{{url('/administracion/productos')}}" type="submit" class="btn btn-primary">Cancelar</a>
    </div>
</div>
    </form>
</div>
@endsection