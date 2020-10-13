<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table    = 'servicios';
    protected $fillable = ['nombre', 'contenido'];
    protected $hidden   = ['created_at', 'updated_at'];

    public function departamento()
    {
        return $this->belongsTo('App\Departamento', 'departamento_id');
    }
}
