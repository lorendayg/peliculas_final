@extends('layouts.app')
@section('title', 'Login')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-80">
    <div class="card p-4 shadow rounded-4" style="width: 400px;">
        <h1 class="titulos text-center text-danger mb-3" style="font-family: 'Dancing Script', cursive;">Películas🍿</h1>
        {{-- Errores generales --}}
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="form-floating mb-2 text-danger">
                <input name="usuario" id="usuario" type="text" class="form-control" placeholder="Usuario" autocomplete="off">
                <label for="usuario"><i class="fa-solid fa-user me-2 "></i>Usuario</label>
                @error('usuario')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-floating mb-3 text-danger">
                <input name="password" id="password" type="password" class="form-control" placeholder="Password">
                <label for="password"><i class="fa-solid fa-lock me-2"></i>Password</label>
                @error('password')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-danger w-100 mb-3" type="submit">
                <i class="fa-solid fa-right-to-bracket me-2"></i> Iniciar Sesión
            </button>

            <a href="{{ route('registro') }}" class="btn btn-outline-danger btn-sm w-100">
                ¿No tienes cuenta? Regístrate
            </a>
        </form>
    </div>
</div>
@endsection
