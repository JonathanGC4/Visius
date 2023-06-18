@extends('layouts.app')

@section('content')

    <h1>Editar área</h1>

    <form action="{{ route('areas.update', $area->id_area) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre_area">Nombre del área:</label>
        <input type="text" name="nombre_area" id="nombre_area" value="{{ $area->nombre_area }}" required>
        <a href="{{ route('areas.edit', ['area' => $area->id_area]) }}">Editar</a>

        <button type="submit">Actualizar</button>
    </form>
@endsection
