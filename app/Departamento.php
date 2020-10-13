<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table    = 'departamentos';
    protected $fillable = ['nombre'];
    protected $visible  = ['id', 'nombre', 'endepto', 'ptdepto'];

    public function servicios()
    {
        return $this->hasMany('App\Servicio', 'departamento_id');
    }
}
