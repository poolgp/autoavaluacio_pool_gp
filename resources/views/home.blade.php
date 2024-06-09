@extends('layouts.principal')

@section('contenido')
    {{ $user->tipus_usuaris_id->tipus }}
@endsection
