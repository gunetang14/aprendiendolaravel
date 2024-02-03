<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    /* protected $fillable = ['name', 'descripcion', 'categoria']; */ // con este asigno las propiedades que quiero guardar en asignancion masiva
    protected $guarded = []; // con este digo las propiedades que quiero restringir en aginacion masiva
}
