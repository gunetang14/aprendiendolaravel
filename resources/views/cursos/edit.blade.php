@extends('layout.template')

@section('title', 'Editar Curso')

@section('content')
    <h1>Aqui puedes editar el curso</h1>
    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @csrf
        @method('PUT')
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name', $curso->name) }}">
        </label>
        @error('name')
            <br>
            <span>*{{ $message }}</span>
            
        @enderror
        <br>
        <label>
            Descripcion:
            <br>
            <textarea name="descripcion" rows="5">{{ old('descripcion', $curso->descripcion) }}</textarea>
        </label>
        @error('descripcion')
            <br>
            <span>*{{ $message }}</span>
            
        @enderror
        <br>
        <label>
            Categoria:
            <br>
            <input type="text" name="categoria" value="{{ old('categoria', $curso->categoria) }}">
        </label>
        @error('categoria')
            <br>
            <span>*{{ $message }}</span>
            
        @enderror
        <br>
        <button type="submit">Actualizar Formulario</button>
    </form>
@endsection