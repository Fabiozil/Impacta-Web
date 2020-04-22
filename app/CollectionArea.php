<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CollectionArea extends Model
{
    public function recycler()
    {
        return $this->belongsTo('App\Recycler');
    }
}
