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
            ['id_empleado' => 1, 'nombre_empleado' => 'Juan', 'apellido_empleado' => 'Pérez', 'direccion_empleado' => 'Calle A, Ciudad', 'telefono_empleado' => '123456789', 'correo_empleado' => 'juan@empresa.com', 'id_area' => 1],
            ['id_empleado' => 2, 'nombre_empleado' => 'María', 'apellido_empleado' => 'López', 'direccion_empleado' => 'Calle B, Ciudad', 'telefono_empleado' => '987654321', 'correo_empleado' => 'maria@empresa.com', 'id_area' => 2],
            ['id_empleado' => 3, 'nombre_empleado' => 'Pedro', 'apellido_empleado' => 'González', 'direccion_empleado' => 'Calle C, Ciudad', 'telefono_empleado' => '456789123', 'correo_empleado' => 'pedro@empresa.com', 'id_area' => 3],
            ['id_empleado' => 4, 'nombre_empleado' => 'Ana', 'apellido_empleado' => 'Martínez', 'direccion_empleado' => 'Calle D, Ciudad', 'telefono_empleado' => '321654987', 'correo_empleado' => 'ana@empresa.com', 'id_area' => 4],
            ['id_empleado' => 5, 'nombre_empleado' => 'Luis', 'apellido_empleado' => 'Rodríguez', 'direccion_empleado' => 'Calle E, Ciudad', 'telefono_empleado' => '789123456', 'correo_empleado' => 'luis@empresa.com', 'id_area' => 5],
            ['id_empleado' => 6, 'nombre_empleado' => 'Laura', 'apellido_empleado' => 'Hernández', 'direccion_empleado' => 'Calle F, Ciudad', 'telefono_empleado' => '654987321', 'correo_empleado' => 'laura@empresa.com', 'id_area' => 1],
            ['id_empleado' => 7, 'nombre_empleado' => 'Carlos', 'apellido_empleado' => 'Gómez', 'direccion_empleado' => 'Calle G, Ciudad', 'telefono_empleado' => '789321654', 'correo_empleado' => 'carlos@empresa.com', 'id_area' => 2],
            ['id_empleado' => 8, 'nombre_empleado' => 'Sofía', 'apellido_empleado' => 'Torres', 'direccion_empleado' => 'Calle H, Ciudad', 'telefono_empleado' => '456123789', 'correo_empleado' => 'sofia@empresa.com', 'id_area' => 3],
            ['id_empleado' => 9, 'nombre_empleado' => 'Andrés', 'apellido_empleado' => 'Rojas', 'direccion_empleado' => 'Calle I, Ciudad', 'telefono_empleado' => '987321456', 'correo_empleado' => 'andres@empresa.com', 'id_area' => 4],
            ['id_empleado' => 10, 'nombre_empleado' => 'Marta', 'apellido_empleado' => 'Vargas', 'direccion_empleado' => 'Calle J, Ciudad', 'telefono_empleado' => '321789654', 'correo_empleado' => 'marta@empresa.com', 'id_area' => 5],
            ['id_empleado' => 11, 'nombre_empleado' => 'José', 'apellido_empleado' => 'Silva', 'direccion_empleado' => 'Calle K, Ciudad', 'telefono_empleado' => '789456321', 'correo_empleado' => 'jose@empresa.com', 'id_area' => 1],
            ['id_empleado' => 12, 'nombre_empleado' => 'Lucía', 'apellido_empleado' => 'García', 'direccion_empleado' => 'Calle L, Ciudad', 'telefono_empleado' => '654321789', 'correo_empleado' => 'lucia@empresa.com', 'id_area' => 2],
            ['id_empleado' => 13, 'nombre_empleado' => 'Daniel', 'apellido_empleado' => 'Pérez', 'direccion_empleado' => 'Calle M, Ciudad', 'telefono_empleado' => '789654321', 'correo_empleado' => 'daniel@empresa.com', 'id_area' => 3],
            ['id_empleado' => 14, 'nombre_empleado' => 'Carolina', 'apellido_empleado' => 'López', 'direccion_empleado' => 'Calle N, Ciudad', 'telefono_empleado' => '321987654', 'correo_empleado' => 'carolina@empresa.com', 'id_area' => 4],
            ['id_empleado' => 15, 'nombre_empleado' => 'Javier', 'apellido_empleado' => 'González', 'direccion_empleado' => 'Calle O, Ciudad', 'telefono_empleado' => '654321987', 'correo_empleado' => 'javier@empresa.com', 'id_area' => 5],
            ['id_empleado' => 16, 'nombre_empleado' => 'Valeria', 'apellido_empleado' => 'Martínez', 'direccion_empleado' => 'Calle P, Ciudad', 'telefono_empleado' => '987654321', 'correo_empleado' => 'valeria@empresa.com', 'id_area' => 1],
            ['id_empleado' => 17, 'nombre_empleado' => 'Felipe', 'apellido_empleado' => 'Rodríguez', 'direccion_empleado' => 'Calle Q, Ciudad', 'telefono_empleado' => '321654987', 'correo_empleado' => 'felipe@empresa.com', 'id_area' => 2],
            ['id_empleado' => 18, 'nombre_empleado' => 'Camila', 'apellido_empleado' => 'Hernández', 'direccion_empleado' => 'Calle R, Ciudad', 'telefono_empleado' => '654987321', 'correo_empleado' => 'camila@empresa.com', 'id_area' => 3],
            ['id_empleado' => 19, 'nombre_empleado' => 'David', 'apellido_empleado' => 'Gómez', 'direccion_empleado' => 'Calle S, Ciudad', 'telefono_empleado' => '789321654', 'correo_empleado' => 'david@empresa.com', 'id_area' => 4],
            ['id_empleado' => 20, 'nombre_empleado' => 'Gabriela', 'apellido_empleado' => 'Torres', 'direccion_empleado' => 'Calle T, Ciudad', 'telefono_empleado' => '456123789', 'correo_empleado' => 'gabriela@empresa.com', 'id_area' => 5],
        ]);
    }
}
