<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Alias :  Mediciones
class Material_Corporacion extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['kg', 'fecha'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at', 'id', 'corporation_id', 'material_id'
    ];

    public function corporation()
    {
        return $this->belongsTo('App\Corporation');
    }

    public function material()
    {
        return $this->belongsTo('App\Material');
    }
}
