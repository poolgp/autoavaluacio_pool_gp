@extends('layouts.principal')

@section('contenido')
    {{-- {{ $user->tipus_usuaris_id->id }} --}}

    {{Auth::user()->id}}

    <h1>hola</h1>
@endsection
