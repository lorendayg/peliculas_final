@extends('layouts.app')
@section('title', 'Registro')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-90">
    <div class="card p-4 shadow rounded-4" style="width: 400px;">
        <h1 class="titulos text-center text-danger mb-3" style="font-family: 'Dancing Script', cursive;">Registro</h1>
        {{-- Mostrar errores globales --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- Formulario de registro --}}
        <form action="{{ route('registro.store') }}" method="POST">
            @csrf

            <div class="form-floating mb-2">
                <input class="form-control" name="nombre" id="nombre" type="text" placeholder="Nombre" value="{{ old('nombre') }}">
                <label class="text-danger" for="nombre"><i class="fa-solid fa-user me-2"></i>Nombre</label>
                @error('nombre')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-floating mb-2">
                <input name="apellido" id="apellido" type="text" class="form-control" placeholder="Apellido" value="{{ old('apellido') }}">
                <label class="text-danger" for="apellido"><i class="fa-regular fa-address-book me-2"></i>Apellido</label>
                @error('apellido')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-floating mb-2">
                <input class="form-control" name="usuario" id="usuario" type="text" placeholder="Usuario" value="{{ old('usuario') }}">
                <label class="text-danger" for="usuario"><i class="fa-solid fa-envelope me-2"></i>Usuario</label>
                @error('usuario')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-floating mb-2">
                <input name="password" id="password" type="password" class="form-control" placeholder="Password">
                <label class="text-danger" for="password"><i class="fa-solid fa-lock me-2"></i>Password</label>
                @error('password')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input name="password_confirmation" id="password_confirmation" type="password" class="form-control" placeholder="Confirmar contraseña">
                <label class="text-danger" for="password_confirmation"><i class="fa-solid fa-lock me-2"></i>Confirmar contraseña</label>
            </div>

            <button class="btn btn-danger w-100 mb-2" type="submit" id="btn_registrar">
                <i class="fa-solid fa-door-open me-2"></i> Registrar
            </button>

            <a class="btn btn-danger btn-sm w-100" href="{{ url('/') }}">
                <i class="fa-solid fa-arrow-left me-2"></i>Salir
            </a>
        </form>
    </div>
</div>
@endsection



