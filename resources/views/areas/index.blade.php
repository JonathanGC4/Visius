@extends('layouts.app')

@section('content')
    <h1>Lista de áreas</h1>
    <a href="{{ route('areas.create') }}" class="btn btn-primary">Crear nueva área</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del área</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($areas as $area)
                <tr>
                    <td>{{ $area->id_area }}</td>
                    <td>{{ $area->nombre_area }}</td>
                    <td>
                        <a href="{{ route('areas.show', $area->id_area) }}">Ver</a>
                        <a href="{{ route('areas.edit', $area->id_area) }}">Editar</a>
                        <form action="{{ route('areas.destroy', $area->id_area) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
