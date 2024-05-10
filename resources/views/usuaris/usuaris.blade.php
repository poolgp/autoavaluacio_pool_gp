@extends('layouts.principal')

@section('contenido')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Sigles</th>
                <th scope="col">Descripcio</th>
                <th scope="col">Actiu</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuaris as $usuari)
                <tr>
                    <td>{{ $usuari->sigles }}</td>
                    <td>{{ $usuari->descripcio }}</td>
                    <td>{{ $usuari->actiu }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
