<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    
    protected $table = 'roles'; // Nombre de la tabla
    protected $primaryKey = 'rol_id'; // Llave primaria de la tabla
    public $timestamps = false;

    protected $fillable = [
        'fecha_creacion',
        'activo',
        'nombre'
    ];

    protected $attributes = [
        'activo' => 'N' 
    ];
}