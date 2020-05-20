<?php

namespace App;

use App\Material;
use App\ZonaRecoleccion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
class Recycler extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id',
        'apodo',
        'nombres',
        'apellidos',
        'fecha_nacimiento',
        'celular',
        'edad',
        'historia',
        'foto',
        'updated_at',
        'corporation_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
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
        return $this->hasMany(ZonaRecoleccion::class, 'recycler_id')->with('sector.comuna','sector.municipio');
    }

    public function materials()
    {
        return $this->belongsToMany(Material::class,'material__recyclers')
        ->withPivot('material_id','recycler_id')->select('material__recyclers.id','nombre','nombresub','mensaje');
    }
    public function getUrlPathAttribute(){
        return Storage::url($this->foto);
    }
}
