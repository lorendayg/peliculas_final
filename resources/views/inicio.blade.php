@extends('layouts.app')

@section('title', 'Inicio')


@section('content')
<h1 class="text-center text-danger">
    Bienvenido al catálogo de Películas
</h1>
    <p class="lead text-center text-dark">Explora el catálogo.</p>
    <div class="text-center mt-4">
    <img src="{{ asset('imagenes/pelis.jpg') }}" alt="Catálogo de Películas"
     class="img-fluid rounded w-50">
    </div>
@endsection
