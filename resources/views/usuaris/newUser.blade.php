@extends('layouts.principal')

@section('titulo', 'NEW USUARI')

@section('contenido')
    <div class="card my-3">
        <div class="card-header">
            <h3>Usuari Nou</h3>
        </div>
        <div class="card-body">
            <form>
                <div class="row my-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nom - Ex: Francisco">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Cognom - Ex: Fernández">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Acronim - Ex: ffernandez">
                    </div>
                </div>

                <div class="row my-3">
                    <label for="emailUser" class="col-sm-2 col-form-label">Email: </label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="emailUser"
                            placeholder="ffernandez@politecnics.barcelona">
                    </div>
                </div>

                <div class="row my-3">
                    <label for="passwUser" class="col-sm-2 col-form-label">Contrasenya: </label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="passwUser">
                    </div>
                </div>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1" disabled>
                    <label class="form-check-label" for="inlineRadio1">Administrador</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="option2" disabled>
                    <label class="form-check-label" for="inlineRadio2">Professor</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                        value="option3" checked>
                    <label class="form-check-label" for="inlineRadio3">Alumne</label>
                </div>
                <div class="row my-3">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Actiu
                            </label>
                        </div>
                    </div>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary" type="button">Button</button>
                </div>
            </form>
        </div>
    </div>
@endsection
