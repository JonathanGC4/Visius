<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('_area')->insert([
            ['id_area' => 1,'nombre_area' => 'Marketing'],
            ['id_area' => 2,'nombre_area' => 'Desarrollo'],
            ['id_area' => 3,'nombre_area' => 'Administración'],
            ['id_area' => 4,'nombre_area' => 'Secretaría'],
            ['id_area' => 5,'nombre_area' => 'Recursos Humanos'],
        ]);
    }
}
