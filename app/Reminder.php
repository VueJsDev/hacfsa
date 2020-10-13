<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{

    protected $table = 'reminders';

    public function user()
    {
        return $this->belongsTo('User');
    }
}
