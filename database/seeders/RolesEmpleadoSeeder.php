<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesEmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('_roles')->insert([
            ['id_empleado' => 1, 'rol' => 'Gerente', 'id_area' => 1],
            ['id_empleado' => 2, 'rol' => 'Gerente', 'id_area' => 2],
            ['id_empleado' => 3, 'rol' => 'Gerente', 'id_area' => 3],
            ['id_empleado' => 4, 'rol' => 'Gerente', 'id_area' => 4],
            ['id_empleado' => 5, 'rol' => 'Gerente', 'id_area' => 5],
            ['id_empleado' => 6, 'rol' => 'SubGerente', 'id_area' => 1],
            ['id_empleado' => 7, 'rol' => 'SubGerente',  'id_area' => 2],
            ['id_empleado' => 8, 'rol' => 'SubGerente',  'id_area' => 3],
            ['id_empleado' => 9, 'rol' => 'SubGerente',  'id_area' => 4],
            ['id_empleado' => 10, 'rol' => 'SubGerente',  'id_area' => 5],
            ['id_empleado' => 11, 'rol' => 'Publicidad',  'id_area' => 1],
            ['id_empleado' => 12, 'rol' => 'Desarrollador de software', 'id_area' => 2],
            ['id_empleado' => 13, 'rol' => 'Gerente administrativo', 'id_area' => 3],
            ['id_empleado' => 14, 'rol' => 'Secretario ejecutivo', 'id_area' => 4],
            ['id_empleado' => 15, 'rol' => 'Especialista en reclutamiento y selección', 'id_area' => 5],
            ['id_empleado' => 16, 'rol' =>  'Campañas digitales', 'id_area' => 1],
            ['id_empleado' => 17, 'rol' => 'Ingeniero de software',  'id_area' => 2],
            ['id_empleado' => 18, 'rol' => 'Asistente administrativo',  'id_area' => 3],
            ['id_empleado' => 19, 'rol' => 'Asistente de dirección',  'id_area' => 4],
            ['id_empleado' => 20, 'rol' => 'Analista de compensaciones y beneficios', 'id_area' => 5],
        ]);
    
    }
}
