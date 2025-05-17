@extends('layouts.app')

@section('title', 'Inicio de Sesión')

@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <h1 class="text-center text-danger">Bienvenido al catálogo de Películas</h1>
        <div class="text-center mt-4">
            <img src="{{ asset('imagenes/pelis.jpg') }}" alt="Catálogo de Películas" class="img-fluid rounded w-75">
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-4 shadow">
            <form id="form_login" class="formulario_login" method="POST" action="{{ route('login') }}">
                @csrf
                <h3 class="text-center text-danger mb-4" style="font-family: 'Dancing Script', cursive;">Películas🍿</i></h3>

                <div class="mb-3">
                    <label class="form-label text-danger" for="usuario"><i class="fa-solid fa-envelope me-2"></i> Usuario</label>
                    <input class="form-control" id="usuario" name="usuario" type="text" required>
                </div>

                <div class="mb-3">
                    <label class="form-label text-danger" for="password"><i class="fa-solid fa-lock me-2"></i> Contraseña</label>
                    <input class="form-control" id="password" name="password" type="password" required>
                </div>

                <button class="btn btn-danger w-100" type="submit">
                    <i class="fa-solid fa-door-open me-2"></i> Iniciar sesión
                </button>

                <button class="btn btn-danger w-100 mt-2" type="button" onclick="window.location='{{ route('registro') }}'">
                    <i class="fa-solid fa-user-plus me-2"></i> Registro
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
