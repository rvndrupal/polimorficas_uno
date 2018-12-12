<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nombre', 'descripcion','iframe','tamano','precio','color','peso','category_id',
    ];

    public function fotos()
    {
        return $this->hasMany(Foto::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);  
    }

    //para la url limpia

    // public function getRouteKeyName(){
    //     return 'url';
    // }
}
