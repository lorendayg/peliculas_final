@extends('layouts.app')

@section('title', 'Listado de Películas')

@section('content')
    <h1 class="text-center text-danger">Listado de Películas</h1>
    
    <table class="table table-bordered table-hover">
        <thead>
            <tr class="table-dark">
                <th>Título</th>
                <th>Descripción</th>
                <th>Género</th>
                <th>Director</th>
                <th>Fecha de Estreno</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($peliculas as $pelicula)
                <tr>
                    <td>{{ $pelicula->titulo }}</td>
                    <td>{{ $pelicula->descripcion }}</td>
                    <td>{{ $pelicula->genero }}</td>
                    <td>{{ $pelicula->director }}</td>
                    <td>{{ $pelicula->fecha_estreno }}</td>
                    <td>
                <div style="display: flex; gap: 10px;">
                        <a href="{{ route('peliculas.editar', $pelicula->id) }}" class="btn btn-danger btn-sm">Editar✍🏻</a>
                    <form action="{{ route('peliculas.eliminar', $pelicula->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-dark btn-sm" onclick="return confirm('¿Estás seguro de eliminar esta película?' )">Eliminar🗑️</button>
                    </form>
                </div>
                </td>

            @endforeach
        </tbody>
    </table>
    <div class="mt-5 text-center">
        <a href="{{ route('peliculas.agregar') }}" class="btn btn-dark">Agregar Nueva Película </a>
    </div>
@endsection



