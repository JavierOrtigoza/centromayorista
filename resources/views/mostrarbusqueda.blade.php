
{{-- 1 - extiende de layouts.app para traer la página maestra --}}

@extends('layouts.app')


{{-- 2  - indica el contenido de esta página en particular, en el que extiende partials.product.card que es la vista de cada producto
            dentro de la categoría , la cantidad de columnas que se van a crear para mostrar los artículos está indicada en card, y la
            cantidad de productos a mostrar por página está indicada en el controlador ProductosController--}}


{{-- --------------------- título de la página --------------------------------------             --}}
@section('title')
Resultados de la búsqueda de: {{$buscar}}

@endsection
{{-- -------------------------------------------------------------------------------------------- --}}

@section('content')

<p class="espacio-sup"></p>

<div class="text-center">
        <h1 class="blockquote">Resultados de la búsqueda de: {{$buscar}}</h1>
</div>

@if (count($producto) === 0)
    <div class="text-center">
    <h3 class=""> No se ha encontrado ningún artículo que coincida con : {{$buscar}}</h3>
    </div>
@endif


        @include('partials.card')

    <hr/>
    <div class="container text-center">
        {{$producto->appends(Request::except('page'))->links()}}
    </div>


@endsection
