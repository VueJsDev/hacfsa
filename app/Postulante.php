<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postulante extends Model
{

    protected $table = 'postulantes';

    public function residencia()
    {
        return $this->belongsTo('App\Residencia');
    }
}
