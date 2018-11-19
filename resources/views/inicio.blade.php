@extends ('layouts.app' )


{{-- --------------------- título de la página --------------------------------------             --}}
@section('title','Centro Mayorista | Página de inicio')
{{-- -------------------------------------------------------------------------------------------- --}}


@section( 'slide' )
    <div class="espacio-sup">
        </div>

    {{-- <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://picsum.photos/1200/400" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://picsum.photos/1200/399" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://picsum.photos/1200/401" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
    </div> --}}

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
