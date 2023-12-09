<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
</head>
<body class="antialiased" style="font-family: 'Kanit', sans-serif;">
    <div class="d-flex justify-content-center align-items-center min-vh-100">
        <div class="text-center">
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg me-3">
                <i class="fas fa-sign-in-alt me-2"></i> Iniciar Sesión
            </a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-secondary btn-lg">
                    <i class="fas fa-user-plus me-2"></i> Registrarse
                </a>
            @endif
        </div>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>