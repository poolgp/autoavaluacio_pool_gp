@extends('layouts.principal')

@section('titulo', 'NEW USUARI')



{{-- 
    PREGUNTAR FRANCISCO OLD LINIA 26
    --}}

@section('contenido')
    <div class="card my-4">
        <div class="card-header">
            <h3>Usuari Nou</h3>
        </div>
        <div class="card-body">
            <form action="{{ action([App\Http\Controllers\UsuariController::class, 'store']) }}" method="POST">
                @csrf

                <div class="row my-3">
                    <div class="col">
                        <input type="text" class="form-control" name="nameUser" id="nameUser"
                            placeholder="Nom - Ex: Francisco" autofocus value="{{ old('nameUser') }}">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="cognomUser" id="cognomUser"
                            placeholder="Cognom - Ex: Fernández" value="{{ old('cognomUser') }}">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="acronimUser" id="acronimUser"
                            placeholder="Acronim - Ex: ffernandez" value="{{ old('acronimUser') }}">
                    </div>
                </div>

                <div class="row my-3">
                    <label for="emailUser" class="col-sm-2 col-form-label">Email: </label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="emailUser" id="emailUser"
                            placeholder="ffernandez@politecnics.barcelona" value="{{ old('emailUser') }}">
                    </div>
                </div>

                <div class="row my-3">
                    <label for="passwUser" class="col-sm-2 col-form-label">Contrasenya: </label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="passwUser" id="passwUser"
                            value="{{ old('passwUser') }}">
                    </div>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="1">
                    <label class="form-check-label" for="inlineRadio1">Administrador</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="2" checked>
                    <label class="form-check-label" for="inlineRadio2">Professor</label>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                        value="3">
                    <label class="form-check-label" for="inlineRadio3">Alumne</label>
                </div>

                <div class="row my-3">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="actiu" id="actiu" value="actiu">
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
