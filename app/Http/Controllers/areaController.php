<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::all();
        return view('areas.index', compact('areas'));
    }

    public function create()
    {
        return view('areas.create');
    }

    public function store(Request $request)
    {
        // Validar y guardar los datos enviados en el formulario
        $area = new Area();
        $area->nombre_area = $request->input('nombre_area');
        $area->save();

        return redirect()->route('areas.index');
    }

    public function show(Area $area)
    {
        return view('areas.show', compact('area'));
    }

    public function edit(Area $area)
    {
        return view('areas.edit', compact('area'));
    }

    public function update(Request $request, Area $area)
    {
        // Validar y actualizar los datos enviados en el formulario
        $area->nombre_area = $request->input('nombre_area');
        $area->save();

        return redirect()->route('areas.index');
    }

    public function destroy(Area $area)
    {
        $area->delete();
        return redirect()->route('areas.index');
    }
}
