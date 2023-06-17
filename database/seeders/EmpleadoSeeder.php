<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('_empleado')->insert([
            ['id_empleado' => 1, 'nombre' => 'Juan', 'apellido' => 'Pérez', 'direccion' => 'Calle A, Ciudad', 'telefono' => '123456789', 'correo' => 'juan@empresa.com', 'id_area' => 1],
            ['id_empleado' => 2, 'nombre' => 'María', 'apellido' => 'López', 'direccion' => 'Calle B, Ciudad', 'telefono' => '987654321', 'correo' => 'maria@empresa.com', 'id_area' => 2],
            ['id_empleado' => 3, 'nombre' => 'Pedro', 'apellido' => 'González', 'direccion' => 'Calle C, Ciudad', 'telefono' => '456789123', 'correo' => 'pedro@empresa.com', 'id_area' => 3],
            ['id_empleado' => 4, 'nombre' => 'Ana', 'apellido' => 'Martínez', 'direccion' => 'Calle D, Ciudad', 'telefono' => '321654987', 'correo' => 'ana@empresa.com', 'id_area' => 4],
            ['id_empleado' => 5, 'nombre' => 'Luis', 'apellido' => 'Rodríguez', 'direccion' => 'Calle E, Ciudad', 'telefono' => '789123456', 'correo' => 'luis@empresa.com', 'id_area' => 5],
            ['id_empleado' => 6, 'nombre' => 'Laura', 'apellido' => 'Hernández', 'direccion' => 'Calle F, Ciudad', 'telefono' => '654987321', 'correo' => 'laura@empresa.com', 'id_area' => 1],
            ['id_empleado' => 7, 'nombre' => 'Carlos', 'apellido' => 'Gómez', 'direccion' => 'Calle G, Ciudad', 'telefono' => '789321654', 'correo' => 'carlos@empresa.com', 'id_area' => 2],
            ['id_empleado' => 8, 'nombre' => 'Sofía', 'apellido' => 'Torres', 'direccion' => 'Calle H, Ciudad', 'telefono' => '456123789', 'correo' => 'sofia@empresa.com', 'id_area' => 3],
            ['id_empleado' => 9, 'nombre' => 'Andrés', 'apellido' => 'Rojas', 'direccion' => 'Calle I, Ciudad', 'telefono' => '987321456', 'correo' => 'andres@empresa.com', 'id_area' => 4],
            ['id_empleado' => 10, 'nombre' => 'Marta', 'apellido' => 'Vargas', 'direccion' => 'Calle J, Ciudad', 'telefono' => '321789654', 'correo' => 'marta@empresa.com', 'id_area' => 5],
            ['id_empleado' => 11, 'nombre' => 'José', 'apellido' => 'Silva', 'direccion' => 'Calle K, Ciudad', 'telefono' => '789456321', 'correo' => 'jose@empresa.com', 'id_area' => 1],
            ['id_empleado' => 12, 'nombre' => 'Lucía', 'apellido' => 'García', 'direccion' => 'Calle L, Ciudad', 'telefono' => '654321789', 'correo' => 'lucia@empresa.com', 'id_area' => 2],
            ['id_empleado' => 13, 'nombre' => 'Daniel', 'apellido' => 'Pérez', 'direccion' => 'Calle M, Ciudad', 'telefono' => '789654321', 'correo' => 'daniel@empresa.com', 'id_area' => 3],
            ['id_empleado' => 14, 'nombre' => 'Carolina', 'apellido' => 'López', 'direccion' => 'Calle N, Ciudad', 'telefono' => '321987654', 'correo' => 'carolina@empresa.com', 'id_area' => 4],
            ['id_empleado' => 15, 'nombre' => 'Javier', 'apellido' => 'González', 'direccion' => 'Calle O, Ciudad', 'telefono' => '654321987', 'correo' => 'javier@empresa.com', 'id_area' => 5],
            ['id_empleado' => 16, 'nombre' => 'Valeria', 'apellido' => 'Martínez', 'direccion' => 'Calle P, Ciudad', 'telefono' => '987654321', 'correo' => 'valeria@empresa.com', 'id_area' => 1],
            ['id_empleado' => 17, 'nombre' => 'Felipe', 'apellido' => 'Rodríguez', 'direccion' => 'Calle Q, Ciudad', 'telefono' => '321654987', 'correo' => 'felipe@empresa.com', 'id_area' => 2],
            ['id_empleado' => 18, 'nombre' => 'Camila', 'apellido' => 'Hernández', 'direccion' => 'Calle R, Ciudad', 'telefono' => '654987321', 'correo' => 'camila@empresa.com', 'id_area' => 3],
            ['id_empleado' => 19, 'nombre' => 'David', 'apellido' => 'Gómez', 'direccion' => 'Calle S, Ciudad', 'telefono' => '789321654', 'correo' => 'david@empresa.com', 'id_area' => 4],
            ['id_empleado' => 20, 'nombre' => 'Gabriela', 'apellido' => 'Torres', 'direccion' => 'Calle T, Ciudad', 'telefono' => '456123789', 'correo' => 'gabriela@empresa.com', 'id_area' => 5],
        ]);
    }
}
