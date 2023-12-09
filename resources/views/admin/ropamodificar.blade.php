<!DOCTYPE html>
<html lang="en">

<head>
    <title>Panel de Administración - Editar Ropa</title>
    
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
        <h1 class="text-center mb-4">Editar Ropa</h1>
        <form action="{{ route('actualizar.ropa', $ropa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $ropa->name }}" required>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $ropa->type }}" required>
            </div>
            <div class="mb-3">
                <label for="size" class="form-label">Talla</label>
                <input type="text" class="form-control" id="size" name="size" value="{{ $ropa->size }}" required>
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Color</label>
                <input type="text" class="form-control" id="color" name="color" value="{{ $ropa->color }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $ropa->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">Marca</label>
                <input type="text" class="form-control" id="brand" name="brand" value="{{ $ropa->brand }}" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $ropa->price }}" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Imagen</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ $ropa->image }}" required>
            </div>
           
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>