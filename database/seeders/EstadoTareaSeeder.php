<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoTareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('estado_tarea')->insert([
            [
                'id_tarea' => 1,
                'nombre_tarea' => 'Campaña de promoción de productos dulces',
                'estado' => 'creada',
                'id_empleado_asignado' => null,
            ],
            [
                'id_tarea' => 2,
                'nombre_tarea' => 'Creación de una aplicación para una marca de productos dulces',
                'estado' => 'creada',
                'id_empleado_asignado' => null,
            ],
            [
                'id_tarea' => 3,
                'nombre_tarea' => 'Contratación de Community Manager para la marca de productos dulces',
                'estado' => 'creada',
                'id_empleado_asignado' => null,
            ],
            [
                'id_tarea' => 4,
                'nombre_tarea' => 'Comunicación con la empresa y búsqueda de un Community Manager',
                'estado' => 'creada',
                'id_empleado_asignado' => null,
            ],
            [
                'id_tarea' => 5,
                'nombre_tarea' => 'Desarrollo de una aplicación móvil para la marca de productos dulces',
                'estado' => 'creada',
                'id_empleado_asignado' => null,
            ],
        ]);
    }
}
