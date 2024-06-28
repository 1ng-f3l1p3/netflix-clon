@extends('layouts.app')

@section('contenido')
<form action="{{ route('peliculas.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
      </div>
      <div class="mb-3">
        <label for="imagen" class="form-label">Imagen</label>
        <input type="text" class="form-control" id="imagen" placeholder="Imagen" name="imagen">
      </div>
      <div class="mb-3">
        <label for="descripcion" class="form-label">Descripcion</label>
        <input type="text" class="form-control" id="descripcion" placeholder="Descripcion" name="descripcion">
      </div>
      <div class="mb-3">
        <label for="trailer" class="form-label">Trailer</label>
        <input type="text" class="form-control" id="trailer" placeholder="Trailer" name="trailer">
      </div>

      <button type="submit">Guardar</button>
</form>
@endsection

