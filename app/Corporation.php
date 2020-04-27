<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Corporation extends Authenticatable
{
    use Notifiable;

    protected $guard = 'corporation';
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'corporations';

    public $incrementing= false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre_rep',  //Nombre Representante
        'apellidos_rep', //Apellido Representante
        'tipo_doc_rep',// Tipo documento representante
        'num_doc_rep', //Numero de documento rep
        'cargo_rep',// Cargo representante
        'email_rep',// Email representante
        'nombre_corp', //Nombre Corporación
        'telefono', //Telefono Corporación
        'razon_social', //Razon social Corporación
        'num_doc_corp',
         'email',
         'password',
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

    public function recyclers()
    {
        return $this->hasMany('App\Recycler');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
