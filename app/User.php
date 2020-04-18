<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function corporation()
    {
        return $this->belongsToMany('App\Corporation', 'corporation_id');
    }
}
