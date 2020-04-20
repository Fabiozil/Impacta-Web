<?php

namespace App\Http\Controllers\Auth;

use App\Affiliate;
use App\Corporation;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if($data['type']=="0"){
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);}
        else if($data['type']=="1"){
            return Validator::make($data, [
                'name_rep' => ['required', 'string', 'max:255'],  //Nombre Representante
               'lastname'=>['required', 'string', 'max:255'], //Apellido Representante
                'type_doc'=>['required', 'integer', 'max:1'],// Tipo documento representante
                'num_doc'=>['required','integer','digits_between:8,11'], //Numero de documento rep
                'position'=>['required', 'string', 'max:100'],// Cargo representante
                'email_rep'=>['required', 'string', 'email', 'max:255'], //Email Rep
                'name'=>['required', 'string', 'max:255'], //Nombre Corporación
                'phone'=>['required', 'integer','digits_between:7,11'], //Telefono Corporación
                'r_s'=>['required', 'string', 'max:255'], //Razon social Corporación
                'num_doc_corp'=>['required','integer','digits_between:8,11'], //Numero de documento Corporacion*/
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], //email corporación
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
        }else{
            return abort(404);
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if($data['type']=="0"){
        $User = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        Affiliate::create([
            'id'=> $User->id
        ]);
        return $User;
    }
        else if($data['type']=="1"){

            $User = User::create([
                'name' => $data['name'],//Nombre Corporación
                'email' => $data['email'],
                'tipo_usuario'=>1,
                'password' => Hash::make($data['password']),
            ]);
            Corporation::create([
                'id'=> $User->id,
                'nombre_rep' =>$data['name_rep'],  //Nombre Representante
                'apellidos_rep'=>$data['lastname'], //Apellido Representante
                'tipo_doc_rep'=>$data['type_doc'],// Tipo documento representante
                'num_doc_rep'=>$data['num_doc'], //Numero de documento rep
                'cargo_rep'=>$data['position'],// Cargo representante
                'email_rep'=>$data['email_rep'],// Email representante
                'telefono'=>$data['phone'], //Telefono Corporación
                'razon_social'=>$data['r_s'], //Razon social Corporación
                'num_doc_corp'=>$data['num_doc_corp'], //Numero de documento Corporacion
            ]);
        return $User;
    }

    }
}
