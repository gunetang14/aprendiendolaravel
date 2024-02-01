@extends('layout.template')

@section('title', 'Curso ' . $curso)

@section('content')
    <h1>Bienvenido al curso: {{ $curso }} </h1>
@endsection