{{-- ============================================ barra de navegación =======================================================         --}}
<nav class="navbar navbar-expand-md navbar-dark fixed-top " style=" background-color: #00a69c">
    <a class="navbar-brand " href="/">
        <img src="{{asset ('/imgs/logo-con-nombre.svg')}}"  height="35" class="d-inline-block align-top " alt="Logo Centro Mayorista Uruguay">

    </a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link text-uppercase espacio-navbar icono" href="/">inicio <span class="sr-only"></span></a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            HOGAR
        </a>
          <div class="dropdown-menu " aria-labelledby="navbarDropdown">
            <a class="dropdown-item " href="productos-de-la-familia-BAZAR">Bazar</a>
            <a class="dropdown-item " href="productos-de-la-familia-ELECTRODOMESTICOS">Electrodomésticos</a>
            <a class="dropdown-item " href="productos-de-la-familia-ELECTRONICA">Electrónica</a>
            <a class="dropdown-item " href="productos-de-la-familia-FTA">Televisión Satelital</a>
            <a class="dropdown-item " href="productos-de-la-familia-SEGURIDAD">Seguridad</a>
            <a class="dropdown-item " href="productos-de-la-familia-FERRETERIA">Ferretería</a>

            <div class="dropdown-divider"></div>
            <a class="dropdown-item " href="productos-de-la-familia-CROWN">CROWN</a>
            <a class="dropdown-item " href="productos-de-la-familia-TOTAL">TOTAL</a>
          </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Regalos
      </a>
        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
          <a class="dropdown-item " href="productos-de-la-familia-BEBE">Bebé</a>
          <a class="dropdown-item " href="productos-de-la-familia-JUGUETERIA">Juguetería</a>
          <a class="dropdown-item " href="productos-de-la-familia-DEPORTES">Deportes</a>
          <a class="dropdown-item " href="productos-de-la-familia-REGALERIA">Regalería</a>
          <a class="dropdown-item " href="productos-de-la-familia-PAPELERIA">Escolares y oficina</a>
          <a class="dropdown-item " href="productos-de-la-familia-BOLSAS REGALO">Bolsas para regalo</a>
          <a class="dropdown-item " href="productos-de-la-familia-EMPAQUE">Empaque</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item " href="productos-de-la-familia-SRI">Sistemas Retención Infantil</a>
        </div>
  </li>


  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Cuidado personal
    </a>
      <div class="dropdown-menu " aria-labelledby="navbarDropdown">
        <a class="dropdown-item " href="productos-de-la-familia-COSMETICA">Cosmética</a>
        <a class="dropdown-item " href="productos-de-la-familia-PERFUMES">Perfumería</a>
        <a class="dropdown-item " href="productos-de-la-familia-TOCADOR">Tocador</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item " href="productos-de-la-familia-VESTIMENTA">Vestimenta</a>
        <a class="dropdown-item " href="productos-de-la-familia-CALZADO">Calzado</a>
        <a class="dropdown-item " href="productos-de-la-familia-ORTOPEDIA">Ortopedia</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item " href="productos-de-la-familia-SEX TOYS">Sex-Toys</a>
      </div>
</li>


    <li class="nav-item">
      <a class="nav-link text-uppercase " href="productos-de-ultimo-ingreso.html">Último ingreso</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-uppercase" href="#">contacto</a>
    </li>
  </ul>
<form class="form-inline mt-2 mt-md-0" method="get" action="{{url('/search')}}">
    <input class="form-control mr-sm-2" type="text" placeholder="Buscar productos..." name="query" aria-label="Search">
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</div>
</nav>
