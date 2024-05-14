@extends('layouts.principal')

@section('titulo', 'USUARIS')

@section('contenido')
    <div class="card my-3">
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

    <div class="card my-3">
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
                            <td>
                                <form
                                    action="{{ action([App\Http\Controllers\UsuariController::class, 'destroy'], ['usuari' => $usuari->id]) }}"
                                    method="POST" class="float-right ml-1">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        Esborrar
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </form>

                                <form
                                    action="{{ action([App\Http\Controllers\UsuariController::class, 'edit'], ['usuari' => $usuari->id]) }}"
                                    class="float-right">
                                    <button class="btn btn-sm btn-secondary">
                                        Editar
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $usuaris->links() }}

        </div>
    </div>

    <a href="{{ url('usuari/create') }}" class="btn btn-primary btn-float-afegir">
        Nou Usuari
        <i class="fa-solid fa-plus"></i>
    </a>

@endsection
