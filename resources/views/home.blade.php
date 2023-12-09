@extends('layouts.plantilla')
@section ('title','HOME')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrusel Bootstrap 5</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('css/home.css')}}" rel="stylesheet">
</head>

<body>

  <div class="container">
  <div class="row justify-content-center my-5">
            <img src="fotos/lorologo.png" alt="Logo de la página" class="img-fluid imagen-principal">
        </div>
    <div class="row justify-content-center align-items-center">
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- No mostramos los indicadores numéricos -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="fotos/imagen2.jpg" class="d-block w-100" alt="Imagen 1">
            <div class="carousel-caption">
              <h1 class="display-4">TIENDA DE ROPA VINTAGE</h1>
              <p class="lead">Hoodies, chándales, camisetas, abrigos y más</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="fotos/imagen3.jpg" class="d-block w-100" alt="Imagen 2">
            <div class="carousel-caption">
              <h1 class="display-4">EXPLORA LAS MARCAS</h1>
              <p class="lead">Nike, Adidas, Kappa, Fila...</p>
              <a href="{{url('/productos')}}" class="btn btn-secondary btn-lg">Ir a Productos</a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="fotos/imagen1.jpg" class="d-block w-100" alt="Imagen 3">
            <div class="carousel-caption">
              <h1 class="display-4">COMPRUEBA LA GUÍA DE TALLAS PARA TUS PRENDAS</h1>
              <p class="lead">Así podrás realizar la compra perfecta</p>
              <a href="{{url('/guia-tallas')}}" class="btn btn-secondary btn-lg">Ir a Guia de tallas</a>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" ariahidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>
    </div>

    <!-- Banda de color y "Ultimos drops" -->
    <div class="row mt-4">
      <div class="col-12 text-center bg-dark text-white py-3">
        <h2 class="display-5">↓ ENCUENTRA TU OUTFIT ↓</h2>
      </div>
    </div>

    <!-- Tarjetas de productos aleatorios -->
    <div class="row mt-4">
      @foreach ($randomProducts as $product)
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="{{ $product->image }}" class="card-img-top imagencard mx-auto mt-3" alt="Imagen del producto" />
          <div class="card-body text-center">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->description }}</p>
            <p class="card-text"><strong>Precio: </strong> <u>${{ $product->price }}</u></p>

          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

@endsection