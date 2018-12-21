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
      @include('layouts.navbar')
      </header>
{{-- ========================================================================================= --}}


{{-- ====================== slide de imágenes =========================================== --}}
      @yield ('slide')
{{-- ==================================================================================== --}}
<main  role="main">

      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->



      @yield('content')


 </main>



<!-- FOOTER -->


 <footer class="footer" >
    @include('layouts.footer')
 </footer>

  </body>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="{{asset ('js/app.js')}}" type="text/javascript"></script>
    {{-- <script src="{{asset ('js/bootstrap.js')}}" type="text/javascript"></script> --}}
    <!-- Placed at the end of the document so the pages load faster -->
    {{-- <script src="./Carousel Template for Bootstrap_files/jquery-3.3.1.slim.min.js.descarga" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./Carousel Template for Bootstrap_files/popper.min.js.descarga"></script>
    <script src="./Carousel Template for Bootstrap_files/bootstrap.min.js.descarga"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="./Carousel Template for Bootstrap_files/holder.min.js.descarga"></script> --}}

</html>
