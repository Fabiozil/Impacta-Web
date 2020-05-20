<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'affiliates';

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'direccion'
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
        // ... (clase, tabla, foránea, foránea del modelo al que se le hace la relación);
        return $this->belongsToMany('App\Corporation', 'affiliate_corporation', 'id', 'corporation_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id', 'id');
    }
}
