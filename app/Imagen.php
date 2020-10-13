<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{

    protected $table = 'imagenes';

    public function galeria()
    {
        return $this->belongsTo('Galeria');
    }
}