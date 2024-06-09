@extends('layouts.principal')

@section('contenido')
    @include('partials.mensajes')

    <div class="card my-4" style="max-width: 25rem">
        <div class="card-header">
            <h4 class="card-title">Iniciar Sessión</h4>
        </div>
        <div class="card-body">
            <form action="{{ action([App\Http\Controllers\UsuariController::class, 'login']) }}" method="POST">
                @csrf

                <div class="form-group my-3">
                    <label for="correu" class="form-label">Correo Electrónico</label>
                    <div class="input-group">
                        <div class="input-group-text">
                            <i class="fa-solid fa-at"></i>
                        </div>
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Nombre de Usuario" autofocus value="{{ old('username') }}">
                    </div>
                </div>

                <div class="form-group my-3">
                    <label for="contrasenya" class="form-label">Contrasña</label>
                    <div class="input-group">
                        <div class="input-group-text">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <input type="password" class="form-control" id="contrasenya" name="contrasenya"
                            placeholder="Contrasña" value="{{ old('contrasenya') }}">
                    </div>
                </div>

                <div class="form-group my-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa-solid fa-check"></i>
                        Acceptar
                    </button>
                    <a href="{{ url('/') }}" class="btn btn-secondary">
                        <i class="fa-solid fa-x"></i>
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
