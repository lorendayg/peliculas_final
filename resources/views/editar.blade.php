@extends('layouts.app')

@section('title', 'Editar Película')

@section('content')
    <h1 class="text-center text-danger">Editar Película</h1>

    <form action="{{ route('peliculas.actualizar', $pelicula->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" name="titulo" value="{{ $pelicula->titulo }}" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" name="descripcion" rows="3" required>{{ $pelicula->descripcion }}</textarea>
        </div>

        <div class="mb-3">
            <label for="genero" class="form-label">Género</label>
            <input type="text" class="form-control" name="genero" value="{{ $pelicula->genero }}" required>
        </div>

        <div class="mb-3">
            <label for="director" class="form-label">Director</label>
            <input type="text" class="form-control" name="director" value="{{ $pelicula->director }}" required>
        </div>

        <div class="mb-3">
            <label for="fecha_estreno" class="form-label">Fecha de Estreno</label>
            <input type="date" class="form-control" name="fecha_estreno" value="{{ $pelicula->fecha_estreno }}" required>
        </div>
        <div class="mt-3 text-center">
        <button type="submit" class="btn btn-outline-danger">Actualizar</button>
        </div>
    </form>
@endsection




