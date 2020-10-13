<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{

    protected $table = 'galerias';

    public function imagenes()
    {
        return $this->hasmany('Imagen', 'galeria_id');
    }
}
