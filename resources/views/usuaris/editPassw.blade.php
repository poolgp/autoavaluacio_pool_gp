@extends('layouts.principal')

@section('titulo', 'EDIT USUARI')

@section('contenido')
    <div class="card my-4">
        <div class="card-header">
            <h3>Editar Usuari</h3>
        </div>
        <div class="card-body">
            <form action="{{ action([App\Http\Controllers\UsuariController::class, 'update'], ['usuari' => $usuari->id]) }}"
                method="POST">
                @csrf
                @method('PUT')
                <div class="row my-3">
                    <div class="col">
                        <input type="text" class="form-control" name="nameUser" id="nameUser" value="{{ $usuari->nom }}"
                            placeholder="Nom - Ex: Francisco" disabled>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="cognomUser" id="cognomUser"
                            value="{{ $usuari->cognom }}" placeholder="Cognom - Ex: Fernández" disabled>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="acronimUser" id="acronimUser"
                            value="{{ $usuari->nom_usuari }}" placeholder="Acronim - Ex: ffernandez" disabled>
                    </div>
                </div>

                <div class="row my-3">
                    <label for="emailUser" class="col-sm-2 col-form-label">Email: </label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="emailUser" id="emailUser"
                            value="{{ $usuari->correu }}" placeholder="ffernandez@politecnics.barcelona" disabled>
                    </div>
                </div>

                <div class="row my-3">
                    <label for="passwUser" class="col-sm-2 col-form-label">Contrasenya: </label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="passwUser" id="passwUser"
                            value="{{ $usuari->contrasenya }}" autofocus>
                    </div>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="1" {{ $usuari->tipus_usuaris_id == 1 ? 'checked' : '' }} disabled>
                    <label class="form-check-label" for="inlineRadio1">Administrador</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="2" {{ $usuari->tipus_usuaris_id == 2 ? 'checked' : '' }} disabled>
                    <label class="form-check-label" for="inlineRadio2">Professor</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                        value="3" {{ $usuari->tipus_usuaris_id == 3 ? 'checked' : '' }} disabled>
                    <label class="form-check-label" for="inlineRadio3">Alumne</label>
                </div>

                <div class="row my-3">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="actiu" id="actiu" value="actiu"
                                {{ $usuari->actiu ? 'checked' : '' }} disabled>
                            <label class="form-check-label" for="actiu">
                                Actiu
                            </label>
                        </div>
                    </div>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary me-md-2" type="submit">
                        Acceptar
                        <i class="fa-solid fa-check"></i>
                    </button>
                    <a href="{{ url('usuari') }}">
                        <button class="btn btn-primary" type="button">
                            Cancelar
                            <i class="fa-solid fa-x"></i>
                        </button>
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
