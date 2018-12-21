<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="En Centromayorista somos importadores de una gran línea de productos,
    algunas de ellas son: Herrmientas TOTAL, Accesorios de pc y audio CROWN, Electrdomésticos GEMEI, además
    de completas líneas de productos de tocador, cosmética y perfumería">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{asset ('/imgs/centromayorista.ico')}}">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset ('css/app.css?1.200')}}" rel="stylesheet" />
    <link href="{{asset ('css/css.css')}}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    {{-- <link href="{{asset ('css/carousel.css')}}" rel="stylesheet" /> --}}
  </head>

  <body>


{{-- ================================== barra de navegación ================================== --}}
      <header>
      {{-- @include('layouts.navbar') -- falta la barra navbar de admin    }}
      </header>
{{-- ========================================================================================= --}}

<main  role="main">
    @yield('content')
</main>



<!-- FOOTER -->
<footer class="footer" >
    {{-- @include('layouts.footer') --}}
</footer>

  </body>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="{{asset ('js/app.js')}}" type="text/javascript"></script>
</html>
