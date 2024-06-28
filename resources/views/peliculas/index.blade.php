@extends('layouts.netflixapp')

@section('contenido')
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Imagen</th>
            <th scope="col">Accion</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($peliculas as $item)
            <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->nombre }}</td>
                <td>{{ $item->descripcion }}</td>
                <td>{{ $item->imagen }}</td>
                <td><a class="btn btn-primary" href="{{ route('peliculas.edit', $item->id)}}" role="button">Editar</a>

                    <a class="btn btn-danger" href="#" onclick="event.preventDefault(); document.getElementById('delete-form-{{$item->id}}').submit();">Eliminar</a>

                    <form action="{{ route('peliculas.destroy', $item->id)}}" method="post" id="delete-form-{{$item->id}}" style="display: none">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>





            </tr>
            @endforeach


        </tbody>
      </table>
@endsection
