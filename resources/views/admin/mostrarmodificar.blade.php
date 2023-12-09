<!DOCTYPE html>
<html lang="en">

<head>
    <title>Panel de Administración - Mostrar y Modificar Producto</title>
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
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <h1 class="text-center mb-4">Mostrar y Modificar Producto</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ropas as $ropa)
                <tr>
                    <td>{{ $ropa->id }}</td>
                    <td>{{ $ropa->name }}</td>
                    <td>{{ $ropa->description }}</td>
                    <td>
                        <a href="{{ route('editar.ropa', $ropa->id) }}" class="btn btn-primary">Editar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>