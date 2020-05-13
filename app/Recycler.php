<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recycler extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'corporation_id',
        'apodo',
        'nombres',
        'apellidos',
        'fecha_nacimiento',
        'celular',
        'residuos',
        'edad',
        'comunas',
        'historia',
        'foto',
        'barrio'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    public function corporation()
    {
        return $this->belongsTo('App\Corporation');
    }

    public function collection_areas()
    {
        return $this->hasMany('App\CollectionArea', 'recycler_id');
    }
}
