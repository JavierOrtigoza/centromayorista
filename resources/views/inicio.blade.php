@extends ('layouts.app' )


{{-- --------------------- título de la página --------------------------------------             --}}
@section('title','Centro Mayorista | Página de inicio')
{{-- -------------------------------------------------------------------------------------------- --}}


@section( 'slide' )
    <div class="espacio-sup">
        </div>

<div class="jumbotron text-center">

    <img src="{{asset ('imgs/slide/fotopromo.jpeg')}}"
    class="img-fluid fotopromo" type="max-width: 100%" alt="">
</div>
<div class ="container">
<div class="row">
    <div class="col-md-3">
        <img src="{{asset ('imgs/herramientastotal.svg')}}"
        class="img-fluid" type="max-width: 100%" alt="Herramientas Total">

    </div>

    <div class="col-md-3">
        <img src="{{asset ('imgs/electronicacrown.svg')}}"
         class="img-fluid" type="max-width: 100%" alt="">
    </div>
    <div class="col-md-3">
            <img src="{{asset ('imgs/srimybaby.svg')}}" class="img-fluid" type="max-width: 100%" alt="">
    </div>
    <div class="col-md-3">
            <img src="{{asset ('imgs/bellezagemei.svg')}}" class="img-fluid" type="max-width: 100%" alt="">
    </div>
</div>

</div>



@endsection

@section('content')

        <div class="espacio-sup text-center">
                <h1 class="blockquote">Algunos de nuestros productos</h1>
        </div>
                @include('partials.card')
@endsection












{{-- ***************************************************************************** --}}
{{--

@section( 'content' )

    <div class="album py-5 bg-white">
        <div class="container">
            @extends('partials.product.card')
        </div>
    </div>
@endsection --}}
