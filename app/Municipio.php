<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comuna;
use App\Sector;

class Municipio extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'municipios';

    protected $fillable = [
        'nombre_mun',
    ];

     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id','pivot', 'created_at', 'updated_at'
    ];

    public function sectores(){
        return $this->hasMany(Sector::class);
    }
    public function getSectoresAndComunas(){
        return $this->hasMany(Sector::class)->with('comuna');
    }
    public function comunas(){
        return $this->hasManyThrough(Comuna::class,Sector::class,'municipio_id','id','id','comuna_id')
        ;
    }
}
