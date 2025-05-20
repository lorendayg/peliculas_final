@extends('layouts.app')

@section('title', 'Agregar Película')

@section('content')
    <h1 class="text-center text-danger">Agregar Nueva Película</h1>

    <form action="{{ route('peliculas.guardar') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" name="titulo" value="{{ old('titulo') }}">
            @error('titulo')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" name="descripcion" rows="3">{{ old('descripcion') }}</textarea>
            @error('descripcion')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="genero" class="form-label">Género</label>
            <input type="text" class="form-control" name="genero" value="{{ old('genero') }}">
            @error('genero')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="director" class="form-label">Director</label>
            <input type="text" class="form-control" name="director" value="{{ old('director') }}">
            @error('director')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="fecha_estreno" class="form-label">Fecha de Estreno</label>
            <input type="date" class="form-control" name="fecha_estreno" value="{{ old('fecha_estreno') }}">
            @error('fecha_estreno')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="text-center mt-2">
            <button type="submit" class="btn btn-outline-danger">Guardar</button>
        </div>

    </form>
@endsection



