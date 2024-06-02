@extends('layouts.principal')

@section('titulo', 'HOME')

@section('contenido')
    {{$user->tipus_usuaris->tipus}}
@endsection