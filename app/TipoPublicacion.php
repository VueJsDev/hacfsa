<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPublicacion extends Model
{
    protected $table   = 'tipospublicaciones';
    protected $visible = ['id', 'descripcion'];

    public function publicaciones()
    {
        return $this->hasmany('Publicaciones', 'tipopublicacion_id');
    }

}
