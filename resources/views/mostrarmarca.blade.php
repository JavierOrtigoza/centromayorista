@extends('layouts.app')



{{-- --------------------- título de la página --------------------------------------             --}}
@section('title')
Listado de productos de la marca {{$marca}}
@endsection
{{-- -------------------------------------------------------------------------------------------- --}}

@section( 'content' )

    <p class="espacio-sup"></p>

    <div class="text-center">
    <h1 class="blockquote">Productos de la marca {{$marca}}</h1>
    </div>

        @if (count($producto) === 0)
                <div class="text-center">
                <h3 class=""> Esta marca no contiene productos</h3>
                </div>
        @endif

        @include('partials.card')
{{-- ---------------- Paginación ---------------------------------- --}}
    <hr/>
    <div class="container">
        <div class="text-center">
            {{$producto->links()}}
        </div>
    </div>


@endsection
