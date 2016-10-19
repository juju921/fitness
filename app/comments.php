<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{

    public function Author()
    {
        return $this->belongsTo('App\User');
    }

    /**
     *
     *
     */

    public function Salles()
    {
        return $this->belongsTo('App\Salles');
    }
}
