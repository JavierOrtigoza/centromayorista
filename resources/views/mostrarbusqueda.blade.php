
{{-- 1 - extiende de layouts.app para traer la página maestra --}}

@extends('layouts.app')


{


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
