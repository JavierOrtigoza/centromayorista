@extends ('layouts.app' )


{{-- --------------------- título de la página --------------------------------------             --}}
@section('title','Centro Mayorista | Página de inicio')
{{-- -------------------------------------------------------------------------------------------- --}}


@section( 'slide' )
    <div class="espacio-sup">
        </div>

<div class="jumbotron text-center">

    <a href="productos-de-la-marca-ORUS"><img src="{{asset ('imgs/slide/fotopromo.jpeg')}}"
    class="img-fluid fotopromo" type="max-width: 100%" alt=""></a>
</div>


<div class ="container fondomarcas">
<div class="row ">
    <div class="col-6 col-md-2 fotomarca">
        <a href="productos-de-la-marca-TOTAL"><img src="{{asset ('imgs/marcas/total.svg')}}"
        class="img-fluid" type="max-width: 100%" alt="Mostrar los productos de la marca TOTAL">
        </a>
    </div>

    <div class="col-6 col-md-2 fotomarca">
        <a href="productos-de-la-marca-CROWN"><img src="{{asset ('imgs/marcas/crown.svg')}}"
         class="img-fluid" type="max-width: 100%" alt="Mostrar los productos de la marca CROWN">
        </a>
    </div>
    <div class="col-6 col-md-2 fotomarca">
        <a href="productos-de-la-marca-MY BABY"><img src="{{asset ('imgs/marcas/mybaby.svg')}}" 
        class="img-fluid" type="max-width: 100%" alt="Mostrar los productos de la marca MY BABY">
        </a>
    </div>
    <div class="col-6 col-md-2 fotomarca">
        <a href="productos-de-la-marca-GEMEI"><img src="{{asset ('imgs/marcas/gemei.svg')}}" 
        class="img-fluid" type="max-width: 100%" alt="Mostrar los productos de la marca GEMEI">
        </a>
    </div>

    <div class="col-6 col-md-2 fotomarca">
        <a href="productos-de-la-marca-ORUS"><img src="{{asset ('imgs/marcas/orus.svg')}}" 
        class="img-fluid" type="max-width: 100%" alt="Mostrar los productos de la marca ORUS">
        </a>
    </div>

    <div class="col-6 col-md-2 fotomarca">
        <a href="productos-de-ultimo-ingreso.html"><img src="{{asset ('imgs/marcas/ultimoingreso.svg')}}" 
        class="img-fluid" type="max-width: 100%" alt="Mostrar los productos del último ingreso">
        </a>
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

