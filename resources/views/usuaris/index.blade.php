@extends('layouts.principal')

@section('contenido')
    <div class="acciones d-flex justify-content-evenly">
        <div class="card my-3 col-md-5">
            <div class="card-body">
                <h5 class="card-title">Buscar</h5>
                <form action="{{ action([App\Http\Controllers\UsuariController::class, 'index']) }}">
                    <div class="form-row" style="display: flex; align-items: center;">
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
        <div class="card my-3 col-md-5">
            <div class="card-body">
                <h5 class="card-title">Nuevo Usuario</h5>
                <a href="{{ url('usuari/create') }}" class="btn btn-primary btn-float-afegir">
                    <i class="fa-solid fa-plus"></i>
                    Crear Nuevo Usuario
                </a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Usuaris</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Correo</th>
                        {{-- <th scope="col">Contraseña</th> --}}
                        <th scope="col">Nombre_Usuario</th>
                        <th scope="col">Activo</th>
                        <th scope="col">Tipo_Usuario</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuaris as $usuari)
                        <tr>
                            <td>{{ $usuari->id }}</td>
                            <td>{{ $usuari->nom }}</td>
                            <td>{{ $usuari->cognom }}</td>
                            <td>{{ $usuari->correu }}</td>
                            {{-- <td>{{ $usuari->contrasenya }}</td> --}}
                            <td>{{ $usuari->nom_usuari }}</td>
                            <td>
                                @if ($usuari->actiu)
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="actiu" name="actiu"
                                            value="actiu" checked disabled>
                                        <label for="actiu" class="custom-control-label"></label>
                                    </div>
                                @else
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="actiu" name="actiu"
                                            value="actiu" disabled>
                                        <label for="actiu" class="custom-control-label"></label>
                                    </div>
                                @endif
                            </td>
                            <td>{{ $usuari->tipus_usuaris_id }}</td>
                            <td class="d-flex">
                                <form
                                    action="{{ action([App\Http\Controllers\UsuariController::class, 'edit'], ['usuari' => $usuari->id]) }}"
                                    class="float-left mx-1" method="GET">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-sm btn-secondary" title="Editar Usuario">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                </form>

                                <form
                                    action="{{ action([App\Http\Controllers\UsuariController::class, 'edit'], ['usuari' => $usuari->id, 'tipoModificacion' => 'editarContrasenya']) }}"
                                    class="float-left mx-1" method="POST">
                                    @csrf
                                    @method('GET')
                                    <button type="submit" class="btn btn-sm btn-secondary" title="Editar Contraseña">
                                        <i class="fa-solid fa-lock"></i>
                                    </button>
                                </form>

                                <form
                                    action="{{ action([App\Http\Controllers\UsuariController::class, 'destroy'], ['usuari' => $usuari->id]) }}"
                                    class="float-left mx-1" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" title="Eliminar Usuario">
                                        <i class="fa-solid fa-trash-can"></i>
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
@endsection
