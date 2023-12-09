@extends('layouts.plantilla')
@section('title', 'HOME')
@section('content')

<head>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<div class="table-container">
@if(!session('cart') || count(session('cart')) === 0)
    <h1 class="text-center">No hay productos en el carrito.</h1>
    @else
    <table id="cart" class="table table-bordered table-striped tabla">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Producto</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Subtotal</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @php $total = 0 @endphp
            @if(session('cart'))
            @foreach(session('cart') as $id => $details)
            @php
            $subtotal = $details['price'] * $details['quantity']; 
            $total += $subtotal;
            @endphp
            <tr rowId="{{ $id }}">
                <td>{{ $loop->iteration }}</td>
                <td data-th="Product">
                    <div class="row">
                        <div class="col-3 col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" class="card-img-top" />
                        </div>
                        <div class="col-9 col-sm-9">
                            <h4 class="nomargin">{{ $details['name'] }}</h4>
                        </div>
                    </div>
                </td>
                <td data-th="Price">${{ $details['price'] }}</td>
                <td data-th="Quantity"> 
                    <input type="number" class="form-control edit-cart-info" value="{{ $details['quantity'] }}" />
                </td>
                <td data-th="Subtotal" class="text-center">${{ number_format($subtotal, 2) }}</td>
                <td class="actions">
                    <a class="btn btn-outline-danger btn-sm delete-product"><i class="fa fa-trash-o">Eliminar</i></a>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4" class="text-right fw-bold">Total:</td>
                <td class="text-center fw-bold">${{ number_format($total, 2) }}</td>
                <td class="actions">
                    <a href="{{ url('/productos') }}" class="btn btn-secondary"><i class="fa fa-angle-left"></i>
                       CONTINUAR CON LA COMPRA</a>
                       <button class="btn btn-danger" onclick="location.href='{{ route('recibo.compra') }}'">REALIZAR COMPRA</button>
                </td>
            </tr>
        </tfoot>
    </table>
    @endif
</div>

@endsection

@section('scripts')

<script type="text/javascript">
    $(".edit-cart-info").change(function (e) {
        e.preventDefault();
        var ele = $(this);
        $.ajax({
            url: '{{ route('update.sopping.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("rowId"),
                quantity: ele.val(),
            },
            success: function (response) {

            }
        });
    });

    $(".delete-product").click(function (e) {
        e.preventDefault();
        var ele = $(this);

        if (confirm("De verdad quieres eliminar este producto de tu carrito?")) {
            $.ajax({
                url: '{{ route('delete.cart.product') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
@endsection