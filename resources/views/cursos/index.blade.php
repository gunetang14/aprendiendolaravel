@extends('layout.template')

@section('title', 'Cursos')

@section('content')
    <h1>Bienvenido a la página principal de cursos</h1>
    <ul>
        @foreach ($cursos as $curso)
            <li>{{ $curso->name }}
            </li>
        @endforeach
    </ul>
    {{ $cursos->links()}}
@endsection