{{-- ============================================ barra de navegación =======================================================         --}}
<nav class="navbar navbar-expand-xl navbar-dark fixed-top " style=" background-color: #000">
    <a class="navbar-brand " href="/">
        <img src="{{asset ('/imgs/logo-con-nombre.svg')}}"  height="35" class="d-inline-block align-top " alt="Logo Centro Mayorista Uruguay">

    </a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link text-uppercase espacio-navbar" href="{{url('/administracion/productos')}}">inicio <span class="sr-only"></span></a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            OPCIONES
        </a>
          <div class="dropdown-menu " aria-labelledby="navbarDropdown">
            <a class="dropdown-item " href="{{url('/administracion/productos')}}">Listado de productos</a>
            <a class="dropdown-item " href="#">opción 2</a>
            
            <div class="dropdown-divider"></div>
            <a class="dropdown-item " href="#">opción 3</a>
            <a class="dropdown-item " href="#">opción 4</a>
          </div>
    </li>


<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      @auth
            {{ Auth::user()->name }} </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Cerrar sesión') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            </div>

      @else
      <img src="{{asset ('/imgs/user.svg')}}"  height="25" class="d-inline-block align-top text-right" alt="Ingreso de usuario"> </a>
      @endauth

    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

      @if (Route::has('login'))
            @auth
            <a class="dropdown-item" href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
            @else
            <a class="dropdown-item" href="{{ route('login') }}">Ingresar</a>
              @if (Route::has('register'))
              <a class="dropdown-item"href="{{ route('register') }}">Registrarse</a>
              @endif
          @endauth

      @endif
    </div>
</li>


  </ul>
<form class="form-inline mt-2 mt-md-0" method="get" action="{{url('/administracion/search')}}">
    <input class="form-control mr-sm-2" type="text" placeholder="Buscar productos..." name="query" aria-label="Search">
    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</div>
</nav>
