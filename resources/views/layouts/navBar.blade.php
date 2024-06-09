<nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ Vite::asset('public/img/logo-politecnics.png') }}" alt="Politecnics Barcelona" width="auto"
                height="80px" class="d-inline-block align-text-top">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="dropdown-item" href="{{ url('usuari') }}">
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

            <form action="#">
                <ul class="navbar-nav">
                    <li class="nav-link dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Pol Garcia Palau
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item " href="{{ url('/logout') }}"> <i class="fa fa-sign-out"
                                    aria-hidden="true"></i> Logout </a>
                        </div>
                    </li>
                    <li class="nav-item botonLogin">
                        <a class="btn btn-primary botonLogin text-white" href="{{ url('/') }}">Login</a>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</nav>
