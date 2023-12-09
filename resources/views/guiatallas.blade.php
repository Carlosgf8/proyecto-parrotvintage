@extends('layouts.plantilla')
@section ('title','HOME')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrusel Bootstrap 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center mb-4">Guía de Tallas</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center">ETIQUETA DE TALLA</th>
                    <th>XS</th>
                    <th>S</th>
                    <th>M</th>
                    <th>L</th>
                    <th>XL</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="text-center">ZAPATOS:</th>
                </tr>
                <tr>
                    <td>TALLA</td>
                    <td>34-36</td>
                    <td>38</td>
                    <td>40</td>
                    <td>42</td>
                    <td>44</td>
                </tr>
                <tr>
                    <th class="text-center">ROPA:</th>
                </tr>
                <tr>
                    <td>PECHO</td>
                    <td>78-82</td>
                    <td>82-86</td>
                    <td>86-90</td>
                    <td>90-94</td>
                    <td>94-98</td>
                </tr>
                <tr>
                    <td>CINTURA</td>
                    <td>52-62</td>
                    <td>62-66</td>
                    <td>66-70</td>
                    <td>70-74</td>
                    <td>74-78</td>
                </tr>
                <tr>
                    <td>CADERA</td>
                    <td>84-88</td>
                    <td>88-92</td>
                    <td>92-96</td>
                    <td>96-100</td>
                    <td>100-104</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

@endsection