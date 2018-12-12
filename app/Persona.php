<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = [
        'nombre', 'descripcion','apellidos','imguno','imgdos',
    ];

}
