@extends('layouts.app')

@section('content')
    <h1>Crear nueva área</h1>

    <form action="{{ route('areas.store') }}" method="POST">
        @csrf
        <label for="nombre_area">Nombre del área:</label>
        <input type="text" name="nombre_area" id="nombre_area" required>
        <button type="submit">Guardar</button>
    </form>
@endsection
