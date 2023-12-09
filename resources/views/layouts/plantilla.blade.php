<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('css/plantilla.css')}}" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">


</head>

<body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('fotos/lorologo.png') }}" alt="Logo" class="logo-image">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
        <ul class="navbar-nav" style="margin: 0 auto;">
          <li class="nav-item me-5" style="font-size: 20px;">
            <a class="nav-link" href="{{ route('home') }}">
              <i class="fas fa-home"></i> INICIO
            </a>
          </li>
          <li class="nav-item me-5" style="font-size: 20px;">
            <a class="nav-link" href="{{ route('productos') }}">
              <i class="fas fa-tshirt"></i> PRODUCTOS
            </a>
          </li>
          <li class="nav-item me-5" style="font-size: 20px;">
            <a class="nav-link" href="{{ route('guia.tallas') }}">
              <i class="fas fa-ruler-combined"></i> GUIA DE TALLAS
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="ms-auto ml-3">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            @auth
            <i class="fas fa-user"></i> {{ auth()->user()->name }}
            @endauth
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="{{ route('favoritos') }}">Favoritos</a></li>
            <li><a class="dropdown-item" href="{{ route('registro.pedidos') }}">Registro de Pedidos</a></li>
            <div class="dropdown-divider"></div>
            <li>
            <li><a class="dropdown-item" href="{{ route('admin.login.form') }}">Interfaz de administrador</a></li>
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('Cerrar sesión') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
          </ul>
        </li>
      </ul>
    </div>

    <a class="btn btn-outline-secondary btn-sm" href="{{route('shopping.cart')}}">
      <i class="fas fa-shopping-cart"></i> <span class="badge bg-danger">{{ count((array) session('cart')) }}</span>
    </a>
  </nav>



  @yield('content')

  <footer class="bg-dark footer-dark text-white py-4">

    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h4 style="text-decoration: underline;">LEGAL</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white footer-link">Aviso Legal</a></li>
            <li><a href="#" class="text-white footer-link">Política de Cookies</a></li>
            <li><a href="#" class="text-white footer-link">Términos y Condiciones de Uso</a></li>
            <li><a href="#" class="text-white footer-link">Política de Privacidad</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h4 style="text-decoration: underline;">CONTACTO</h4>
          <p>
            Teléfono: 656 16 70 28<br>
            Correo Electrónico: parrotvintage@gmail.com <br>
            Dirección: C/La Colina Nº3
          </p>
        </div>
        <div class="col-md-3 ms-auto">
          <h4 style="text-decoration: underline;">NUESTRA TIENDA</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white footer-link">Sobre Nosotros</a></li>
            <li><a href="#" class="text-white footer-link">Devoluciones</a></li>
            <li><a href="#" class="text-white footer-link">Métodos de Pago</a></li>
          </ul>
        </div>
        <div class="col-md-3">
          <h4 style="text-decoration: underline;">FORMULARIO</h4>
          <form>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Nombre">
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" placeholder="Correo Electrónico">
            </div>
            <div class="mb-3">
              <textarea class="form-control" placeholder="Mensaje"></textarea>
            </div>
            <button type="submit" class="btn btn-secondary">Enviar</button>
          </form>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-md-12 text-center">
          &copy; 2023 ParrotVintage. Todos los derechos reservados.
        </div>
      </div>
    </div>
  </footer>
  @yield('scripts')

</body>

</html>