<div class="mb-3">
    <label for="titulo" class="form-label">Título</label>
    <input type="text" class="form-control" name="titulo" value="{{ old('titulo', $pelicula->titulo ?? '') }}">
</div>
<div class="mb-3">
    <label for="descripcion" class="form-label">Descripción</label>
    <textarea class="form-control" name="descripcion">{{ old('descripcion', $pelicula->descripcion ?? '') }}</textarea>
</div>
<div class="mb-3">
    <label for="genero" class="form-label">Género</label>
    <input type="text" class="form-control" name="genero" value="{{ old('genero', $pelicula->genero ?? '') }}">
</div>
<div class="mb-3">
    <label for="director" class="form-label">Director</label>
    <input type="text" class="form-control" name="director" value="{{ old('director', $pelicula->director ?? '') }}">
</div>
<div class="mb-3">
    <label for="fecha_estreno" class="form-label">Fecha de Estreno</label>
    <input type="date" class="form-control" name="fecha_estreno" value="{{ old('fecha_estreno', $pelicula->fecha_estreno ?? '') }}">
</div>
