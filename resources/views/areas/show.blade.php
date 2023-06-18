@extends('layouts.app')

@section('content')
    <h1>Detalles del área</h1>

    <p><strong>ID:</strong> {{ $area->id_area }}</p>
    <p><strong>Nombre del área:</strong> {{ $area->nombre_area }}</p>

    <a href="{{ route('areas.edit', $area->id_area) }}">Editar</a>
    <form action="{{ route('areas.destroy', $area->id_area) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endsection
