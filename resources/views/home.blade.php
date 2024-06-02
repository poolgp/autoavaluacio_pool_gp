@extends('layouts.principal')

@section('titulo', 'HOME')

@section('contenido')
    {{$user->rol->nombre}}
@endsection