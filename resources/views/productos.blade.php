@extends('layouts.plantilla')
@section('title', 'HOME')
@section('content')

<div class="container mt-4">
    @if (session('success'))
    <div class="alert alert-success text-center" style="font-size: 17px;">
        {{ session('success') }}
    </div>
    @endif
</div>

<!-- Formulario de búsqueda -->
<div class="container mb-4">
    <form action="{{ route('productos.buscar') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="buscar" class="form-control" placeholder="Buscar">
            <button type="submit" class="btn btn-secondary">Buscar</button>
        </div>
    </form>
</div>

<!-- Tarjetas de productos -->
<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 g-4">
        @foreach($ropas as $ropa)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card">
                <div class="contimagencard">
                    <img src="{{ asset($ropa->image) }}" class="card-img-top imagencard" alt="Imagen de la ropa" />
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{ $ropa->name }}</h4>
                    <p>{{ $ropa->description }}</p>
                    <p class="card-text"><strong>Precio: </strong> <u>${{ $ropa->price }}</u></p>
                    <p class="btn-holder">
                        <a href="{{ route('aniadirropa.to.cart', $ropa->id) }}" class="btn btn-outline-danger">Añadir al
                            carrito</a>

                        @auth
                    <form action="{{ route('ropa.favoritos.toggle', $ropa->id) }}" method="POST"
                        style="display: inline-block;">
                        @csrf
                        @if(auth()->user()->ropas && auth()->user()->ropas->wherePivot('ropa_id', $ropa->id)->count() >
                        0)
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-warning">Quitar de favoritos</button>
                        @else
                        <button type="submit" class="btn btn-outline-success">FAVORITOS</button>
                        @endif
                    </form>
                    @endauth
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

@endsection