<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corporation extends Model
{
    public function recyclers()
    {
        return $this->hasMany('App\Recycler');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
