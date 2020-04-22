<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','tipo_usuario', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function corporation()
    {
        return $this->belongsToMany('App\Corporation', 'corporation_id');
    }
    public function collection_areas()
    {
        return $this->hasOne('App\CollectionArea');
    }

    public function isA()
    {
        if($this->tipo_usuario){
            return $this->hasOne(Corporation::class,'id','id');
        }
        return $this->hasOne(Affiliate::class,'id','id');
    }

}


