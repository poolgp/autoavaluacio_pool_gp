<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('titulo')
    </title>

    <link rel="shortcut icon" href="{{ Vite::asset('public/img/icono-politecnics.png') }}" type="image/x-icon">

    @vite(['resources/css/app.css', 'resources/css/app.scss', 'resources/js/app.js'])
</head>

<body>
    @include('layouts.navBar')

    <div class="container">
        @yield('contenido')
    </div>
</body>

</html>
