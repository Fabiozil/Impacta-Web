<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Recycler;
use App\Sector;
class ZonaRecoleccion extends Model
{
    protected $table = 'zona_recoleccion';

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'id',
        'dias',
        'horas',
        'sector_id',
        'recycler_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
    public function recycler()
    {
        return $this->belongsTo(Recycler::class);
    }
    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }
}
