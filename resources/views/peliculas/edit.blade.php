@extends('layouts.netflixapp')

@section('contenido')
<form action="{{ route('peliculas.update', $pelicula) }}" method="POST" >
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" placeholder="Nombre" name="nombre" value="{{$pelicula->nombre}}">
      </div>
      <div class="mb-3">
        <label for="imagen" class="form-label">Imagen</label>
        <input type="text" class="form-control"  placeholder="Imagen" name="imagen" value="{{$pelicula->imagen}}">
      </div>
      <div class="mb-3">
        <label for="descripcion" class="form-label">Descripcion</label>
        <input type="text" class="form-control"  placeholder="Descripcion" name="descripcion" value="{{$pelicula->imagen}}">
      </div>
      <div class="mb-3">
        <label for="trailer" class="form-label">Trailer</label>
        <input type="text" class="form-control" placeholder="Trailer" name="trailer" value="{{$pelicula->imagen}}">
      </div>

      <button type="submit">Guardar</button>
</form>
@endsection
