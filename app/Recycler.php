<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recycler extends Model
{
    public function corporation()
    {
        return $this->belongsTo('App\Corporation');
    }
}
