<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tareas')->insert([
            ['id_tarea'=> 1,'nombre_tarea'=>'Campaña de promoción de productos dulces', 'descripcion_tarea'=>'Como parte del equipo de marketing de una marca comercial dedicada a la venta de productos dulces, tu tarea consistirá en crear y ejecutar una campaña de promoción que refuerce la imagen de la marca, aumente su visibilidad y genere un mayor interés en sus productos.','created_at'=>Carbon::now()],
            ['id_tarea'=> 2,'nombre_tarea'=>'Creación de una aplicación para una marca de productos dulces', 'descripcion_tarea'=>'Como desarrollador de software, se te asignará la tarea de crear una aplicación web para una marca comercial especializada en la venta de productos dulces. Tu objetivo principal será diseñar y desarrollar una plataforma digital que proporcione una experiencia atractiva y fácil de usar para los clientes, y que les permita descubrir, comprar y disfrutar de los productos dulces de la marca de manera conveniente.','created_at'=>Carbon::now()],
            ['id_tarea'=> 3,'nombre_tarea'=>'Contratación de Community Manager para la marca de productos dulces', 'descripcion_tarea'=>'Como profesional de Recursos Humanos, tu tarea será reclutar y contratar a un Community Manager talentoso y creativo para unirse al equipo de marketing de una marca comercial dedicada a la venta de productos dulces. El Community Manager será responsable de gestionar y hacer crecer la presencia de la marca en las redes sociales, interactuar con la comunidad en línea y crear contenido atractivo que promueva los productos dulces y genere engagement con los seguidores.','created_at'=>Carbon::now()],
            ['id_tarea'=> 4,'nombre_tarea'=>'Comunicación con la empresa y búsqueda de un Community Manager', 'descripcion_tarea'=>'Como secretaria de la empresa encargada del desarrollo del proyecto de marketing digital para la marca de productos dulces, tu tarea consiste en comunicarte con la empresa cliente y gestionar la búsqueda de un Community Manager para el equipo, además de informarles sobre el inicio del desarrollo de su pedido.','created_at'=>Carbon::now()],
            ['id_tarea'=> 5,'nombre_tarea'=>'Desarrollo de una aplicación móvil para la marca de productos dulces', 'descripcion_tarea'=>'Como parte del equipo de desarrollo de software, se te asignará la responsabilidad de crear una aplicación móvil para la marca de productos dulces. Tu objetivo principal será diseñar, desarrollar e implementar una aplicación intuitiva y atractiva que permita a los usuarios descubrir, comprar y disfrutar de los productos dulces de la marca de manera conveniente y satisfactoria.','created_at'=>Carbon::now()],
        ]);
    }
}
