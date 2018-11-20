<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";


    protected $fillable =
    [
        'codigo',
        'codigofacturacion',
        'nombre',
        'live',
        'descripcionlarga',
        'decripcioncorta',
        'moneda',
        'precio',
        'imagen',
        'ventaminima',
        'familia',
        'nombreslug',
        'ventaminima',
        'nombrefigaro',
        'video',
        'afiche',
        'marca'
    ];



}

