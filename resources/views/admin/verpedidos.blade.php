<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registro de Pedidos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>

<body>
    <a href="{{ route('home') }}" class="btn btn-primary position-fixed top-0 start-0 m-3">Volver al Home</a>
    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary position-fixed top-3 start-0 m-3">Volver a la interfaz de administrador</a>
    

    <div class="container my-5">
       

        <h1 class="text-center mb-4">Registro de Pedidos</h1>

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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>