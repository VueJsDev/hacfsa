<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagenPublicacion extends Model
{

    protected $table = 'imagenespublicaciones';

    public function publicacion()
    {
        return $this->belongsTo('Publicacion');
    }

}
