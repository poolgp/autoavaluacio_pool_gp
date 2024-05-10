<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('titulo')
    </title>

    <link rel="shortcut icon" href="{{ asset('autoavaluacio_pool_gp/public/img/icono-politecnics.png') }}"
        type="image/x-icon">

    @vite(['resources/css/app.css', 'resources/css/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('autoavaluacio_pool_gp/public/img/logo-politecnics.png') }}"
                    alt="Politecnics Barcelona" width="auto" height="80px" class="d-inline-block align-text-top">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dades mestres
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">
                                    Tipus usuaris
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Usuaris
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Cicles
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Mòduls
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Assignar Professors
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Assignar alumnes
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Resultats aprenentatge
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Criteris avaluació
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Professors
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">
                                    Assignar alumnes
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Resultats aprenentatge
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Criteris avaluació
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    Autoavaluació alumnes
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Alumnes
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">
                                    Autoavaluació
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <span class="navbar-text">
                    POL GARCIA
                </span>
            </div>
        </div>
    </nav>
    @yield('contenido')
</body>

</html>
