<!DOCTYPE html>
<html lang="en">

<head>
    <title>Panel de Administración</title>
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
    <a href="{{ route('ver.registro.pedidos') }}" class="btn btn-primary position-fixed top-3 start-0 m-3">Ver registro de pedidos</a>

    <div class="container my-5">
        <h1 class="text-center mb-4">Panel de Administración</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Añadir Producto</h5>
                        <p class="card-text">Agrega un nuevo producto a la tienda.</p>
                        <a href="{{ route('mostrar.formulario.agregar') }}" class="btn btn-primary">Añadir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Modificar Producto</h5>
                        <p class="card-text">Edita un producto existente.</p>
                        <a href="{{ route('mostrar.modificar') }}" class="btn btn-primary">Modificar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Eliminar Producto</h5>
                        <p class="card-text">Elimina un producto de la tienda.</p>
                        <a href="{{ route('mostrar.borrar') }}" class="btn btn-danger">Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>