@extends ('admin.admin_app' )

@section('content')
<div class="container">
<h2>Listado de productos por código</h2>

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Código</th>
        <th scope="col">Artículo</th>
        <th scope="col">Moneda</th>
        <th scope="col">Importe</th>
        <th scope="col">Mínimo</th>
        <th scope="col">Último In</th>
        <th scope="col">Status</th>
        <th scope="col">Familia</th>
        <th scope="col">Editar</th>
      </tr>
    </thead>

@foreach ($productos as $producto)

    <tbody>
      <tr>
      <th scope="row">{{$producto->id}}</th>
        <td>{{$producto->codigo}}</td>
        <td>{{$producto->nombre}}</td>
        <td>{{$producto->moneda}}</td>
        <td>{{$producto->precio}}</td>
        <td>{{$producto->ventaminima}}</td>
        <td>{{$producto->ultimoingreso}}</td>
        <td>{{$producto->status}}</td>
        <td>{{$producto->familia}}</td>
        <td>Editar</td>

    </tr>      
@endforeach
    </tbody>
  </table>
{{-- ---------------- Paginación ---------------------------------- --}}
<hr/>
<div class="container">
    <div class="text-center">
        {{$productos->links()}}
    </div>
</div>
{{-- -------------------------------------------------------------- --}}
</div>
@endsection