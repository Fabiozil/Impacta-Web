<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ZonaRecoleccion;
class Recycler extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'apodo',
        'nombres',
        'apellidos',
        'fecha_nacimiento',
        'celular',
        'residuos',
        'edad',
        'historia',
        'foto',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
        'corporation_id',
        'created_at',
        'updated_at',
    ];

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

    public function zonaRecoleccion()
    {
        return $this->hasMany(ZonaRecoleccion::class, 'recycler_id')->with('sector');
    }
}
