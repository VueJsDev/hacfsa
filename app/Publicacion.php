<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    protected $table  = 'publicaciones';
    protected $hidden = ['created_at', 'updated_at'];

    public function imagenespublicaciones()
    {
        return $this->hasmany('App\ImagenPublicacion', 'publicacion_id');
    }

    public function tipopublicacion()
    {
        return $this->belongsTo('TipoPublicacion');
    }
}
