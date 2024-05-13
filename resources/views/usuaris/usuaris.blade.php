@extends('layouts.principal')

@section('titulo', 'USUARIS')

@section('contenido')
    <div class="card mt-1 mb-2">
        <div class="card-body">
            <h5 class="card-title">Buscar</h5>
            <form action="{{ action([App\Http\Controllers\UsuariController::class, 'index']) }}">
                <div class="form" style="display: flex; align-items: center;">
                    <div class="col1">
                        @if (old('actiuBuscar') == 'actiu')
                            <div class="custom-control custom-checbox">
                                <input type="checkbox" class="custom-control-input" id="actiuBuscar" name="actiuBuscar"
                                    value="actiu" checked />
                                <label class="custom-control-label" for="actiuBuscar">Actiu</label>
                            </div>
                        @else
                            <div class="custom-control custom-checbox">
                                <input type="checkbox" class="custom-control-input" id="actiuBuscar" name="actiuBuscar"
                                    value="actiu" />
                                <label class="custom-control-label" for="actiuBuscar">Actiu</label>
                            </div>
                        @endif
                    </div>
                    <div class="col-1">
                        <button type="submit" class="btn btn-secundary">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card mt-1 mb-2">
        <div class="card-body">
            <h5 class="card-title">USUARIS</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Cognom</th>
                        <th scope="col">Nom Usuari</th>
                        <th scope="col">Correu</th>
                        <th scope="col">Tipus Usuari</th>
                        <th scope="col">Actiu</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuaris as $usuari)
                        <tr>
                            <td>{{ $usuari->id }}</td>
                            <td>{{ $usuari->nom }}</td>
                            <td>{{ $usuari->cognom }}</td>
                            <td>{{ $usuari->nom_usuari }}</td>
                            <td>{{ $usuari->correu }}</td>
                            <td>{{ $usuari->tipus_usuaris_id }}</td>
                            <td>
                                @if ($usuari->actiu)
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="actiu" name="actiu"
                                            value="actiu" checked disabled />
                                        <label class="custom-control-label" for="actiu"></label>
                                    </div>
                                @else
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="actiu" name="actiu"
                                            value="actiu" disabled />
                                        <label class="custom-control-label" for="actiu"></label>
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $usuaris->links() }}

        </div>
    </div>
@endsection
