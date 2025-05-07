<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Películas')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Películas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item btn btn-outline-danger btn-sm mx-1">
                        <a class="nav-link " href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="nav-item btn btn-outline-danger btn-sm mx-1">
                        <a class="nav-link" href="{{ route('peliculas.index') }}">Listado</a>
                    </li>
                    <li class="nav-item btn btn-outline-danger btn-sm mx-1">
                        <a class="nav-link" href="{{ route('peliculas.agregar') }}">Agregar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>



