<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Municipio;
use App\Sector;
class Comuna extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comunas';

    protected $fillable = [
        'nombre_com','id'
    ];

     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
     'laravel_through_key', 'created_at', 'updated_at'
    ];

    public function sectores(){
        return $this->hasMany(Sector::class);
    }
}
