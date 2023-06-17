<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
//nombre de la tabla
    protected $table = '_area';
//nombre de la llave primaria
    protected $primaryKey = 'id_area';
//campos de asignacion de la tabla
    protected $fillable = ['nombre_area']; 
}
