@extends('layouts.plantilla')

@section('title', 'Favoritos')

@section('content')
<head>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<div class="container mt-4">
    @if (session('success'))
    <div class="alert alert-success text-center" style="font-size: 17px;">
        {{ session('success') }}
    </div>
    @endif
</div>
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0">Tus productos favoritos</h2>
        </div>
        <div class="card-body">
            @if (count($favoritos) > 0)
            <ul class="list-group">
                @foreach($favoritos as $favorito)
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5 class="mb-0">{{ $favorito->name }} - {{ $favorito->description }}</h5>
                        </div>
                        <div>
                            <span class="badge bg-primary">${{ $favorito->price }}</span>
                        </div>
                        <div>
                            <img src="{{ asset($favorito->image) }}" alt="Imagen del producto" class="img-fluid"
                                style="max-width: 100px; max-height: 100px;">
                        </div>
                        <div>
                            <form action="{{ route('ropa.carrito.aniadir', $favorito->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-success">Añadir al carrito</button>
                            </form>
                        </div>
                        <div>
                            <form action="{{ route('ropa.favoritos.eliminar', $favorito->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Eliminar de favoritos</button>
                            </form>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
            @else
            <p class="lead text-center">No tienes productos favoritos.</p>
            @endif
        </div>
    </div>
</div>
@endsection