@extends('layouts.plantilla')
@section('title', 'Recibo de Compra')
@section('content')
<head>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<div class="container">
    <h1>Recibo de Compra</h1>
    @auth
    <p>Usuario: <i class="fas fa-user"></i> {{ auth()->user()->name }}</p>
    @endauth

    <table class="table">
    <thead>
            <tr>
                <th>#</th>
                <th>Producto</th>
                <th>Precio Unitario</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @php $total = 0; $totalQuantity = 0; @endphp
            @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                    @php
                    $subtotal = $details['price'] * $details['quantity']; 
                    $total += $subtotal;
                    $totalQuantity += $details['quantity'];
                    @endphp
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $details['name'] }}</td>
                        <td>${{ $details['price'] }}</td>
                        <td>{{ $details['quantity'] }}</td>
                        <td>${{ number_format($subtotal, 2) }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5">No hay productos en el carrito.</td>
                </tr>
            @endif
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3" class="text-right fw-bold">Total:</td>
                <td class="fw-bold">{{ $totalQuantity }}</td>
                <td colspan="1" class="text-right fw-bold">${{ number_format($total, 2) }}</td>
            </tr>
            <tr>
                <td colspan="5">
                    <form method="POST" action="{{ route('guardar.pedido') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">Pagar</button>
                    </form>
                </td>
            </tr>
        </tfoot>
    </table>
</div>

@endsection

