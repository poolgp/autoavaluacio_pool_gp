@extends('layouts.principal')

@section('contenido')
    @include('partials.mensajes')

    <div class="card my-4">
        <div class="card-header">
            <h4 class="card-title">Nuevo Usuario</h4>
        </div>
        <div class="card-body">
            <form action="{{ action([App\Http\Controllers\UsuariController::class, 'store']) }}" method="POST">
                @csrf
                <div class="form-group row mt-2 mb-3">
                    <div class="col">
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom"
                            aria-label="Nom" value="{{ old('nom') }}" autofocus>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="cognom" name="cognom" placeholder="Cognom"
                            aria-label="Cognom" value="{{ old('cognom') }}">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" id="nom_usuari" name="nom_usuari"
                            placeholder="Nom Usuari" aria-label="Nom Usuari" value="{{ old('nom_usuari') }}">
                    </div>
                </div>

                <div class="form-group my-3">
                    <label for="correu" class="form-label">Correo Electrónico</label>
                    <div class="input-group">
                        <div class="input-group-text">
                            <i class="fa-solid fa-at"></i>
                        </div>
                        <input type="email" class="form-control" id="correu" name="correu" placeholder="Correo"
                            value="{{ old('correu') }} ">
                    </div>
                </div>

                <div class="form-group my-3">
                    <label for="contrasenya" class="form-label">Contraseña</label>
                    <div class="input-group">
                        <div class="input-group-text">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <input type="password" class="form-control" id="contrasenya" name="contrasenya"
                            placeholder="Contraseña" value="{{ old('contrasenya') }}">
                    </div>
                </div>

                <div class="form-group my-3">
                    <label for="tipus_usuaris_id" class="form-label">Tipo de Usuario</label>
                    <select class="form-select" id="tipus_usuaris_id" name="tipus_usuaris_id" aria-label="Tipus Usuari">
                        <option value="3">Alumno</option>
                        <option value="2">Profesor</option>
                        <option value="1">Administrador</option>
                    </select>
                </div>

                <div class="form-group my-3">
                    <label for="actiu" class="form-label">Estado</label>
                    <select class="form-select" id="actiu" name="actiu" aria-label="Actiu">
                        <option value="1">Activo</option>
                        <option value="0">No Activo</option>
                    </select>
                </div>

                <div class="form-group my-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa-solid fa-check"></i>
                        Acceptar
                    </button>
                    <a href="{{ url('usuari') }}" class="btn btn-secondary">
                        <i class="fa-solid fa-x"></i>
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
