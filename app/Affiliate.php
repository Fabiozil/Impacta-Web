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
    public $incrementing= false;
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id'
    ];
}
