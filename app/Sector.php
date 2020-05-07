<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comuna;
use App\Municipio;
class Sector extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sectores';

    protected $fillable = [
        'nombre_sect',
        'tipo',
        'id',
    ];
     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'municipio_id','comuna_id','created_at', 'updated_at'
    ];

    public function municipio(){
        return $this->belongsTo(Municipio::class);
    }

    public function comuna(){
        return $this->belongsTo(Comuna::class);
    }
}
