@extends('layout.template')

@section('title', 'Contactanos')

@section('content')
    <h1>Dejanos un mensaje</h1>
    <form action="{{ route('contactanos.store') }}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
        </label>
        @error('name')
            <br>
            <span>*{{ $message }}</span>
            
        @enderror
        <br>
        <label>
            Correo:
            <br>
            <input type="email" name="email" value="{{ old('slug') }}">
        </label>
        @error('email')
            <br>
            <span>*{{ $message }}</span>
            
        @enderror
        <br>
        <label>
            Mensaje:
            <br>
            <textarea name="mensaje" rows="5">{{ old('mensaje') }}</textarea>
        </label>
        @error('mensaje')
            <br>
            <span>*{{ $message }}</span>
            
        @enderror
        <br>
        <button type="submit">Enviar Mensaje</button>
    </form>

    @if (session('info'))

        <script>
            alert("{{ session('info') }}")
        </script>
        
    @endif
@endsection