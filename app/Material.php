<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','nombre','nombresub',
        'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'pivot'
    ];

    public function mediciones()
    {
        return $this->hasMany('App\Material_Corporacion');
    }
    public function recyclers()
    {
        return $this->belongsToMany(Recycler::class,'material__recyclers')
        ->withPivot('material_id','recycler_id');
    }
}
