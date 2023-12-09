@extends('layouts.plantilla')

@section('title', 'Pedidos')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Listado de Pedidos</h1>

        @if($pedidos->isEmpty())
        <p class="lead text-center">No tienes pedidos asignados a este usuario</p>
        @else
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre Usuario</th>
                        <th>Precio</th>
                        <th>Cantidad de Artículos</th>
                        <th>Fecha del Pedido</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pedidos as $pedido)
                    <tr>
                        <td>{{ $pedido->id }}</td>
                        <td>{{ $pedido->nombre_usuario }}</td>
                        <td>{{ $pedido->precio }}</td>
                        <td>{{ $pedido->cantidad_articulos }}</td>
                        <td>{{ $pedido->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@endsection