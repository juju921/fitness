<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salles extends Model
{
    /**
     * One to Many relation
     *
     * @return Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Models\comments');
    }
}
