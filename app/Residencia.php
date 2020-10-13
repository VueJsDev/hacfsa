<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Residencia extends Model
{

    protected $table = 'residencias';

    public function postulantes()
    {
        return $this->hasMany('Postulante', 'residencia_id');
    }

}
