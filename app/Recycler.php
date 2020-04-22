<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recycler extends Model
{
    public function corporation()
    {
        return $this->belongsTo('App\Corporation');
    }

    public function collection_areas()
    {
        return $this->hasMany('App\CollectionArea', 'recycler_id');
    }
}
