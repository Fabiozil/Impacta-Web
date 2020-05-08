<?php

namespace App\Http\Controllers\Recycler;

use App\Comuna;
use App\Recycler;
use App\Corporation;
use App\Http\Controllers\Controller;
use App\Municipio;
use App\Sector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;

class RecyclerController extends Controller
{
     /**
     * Where to redirect recycler after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::RECYCLER;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

     /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    private function validator(Request $request)
    {
        $rules= [
            'apodo'=>'required|string|max:100',
            'nombres'=>'required|string|max:255',
            'apellidos'=>'required|string|max:255',
            'fecha_nacimiento'=>'required','date','before:2002-01-01|max:100',
            'celular'=>'required|integer|digits:11',
            'residuos'=>'required|string|max:255',
            'edad'=>'required|integer|digits:3',
            'historia'=>'required|string|max:100',
            'foto'=>'required|image|mimes:jpeg,png|size:2048',
        ];
        return $request->validate($rules);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $corp= Corporation::findOrFail(Auth::user()->id);
        $recycler= $corp->recyclers()
        ->select('nombres','apellidos','apodo','celular')
        ->paginate(9)  //Paginar de a 9 por pagina
        ;
        return compact('recycler');
    }

    public function getComunas(Request $request,Municipio $municipio_id){
        if($request->ajax()){
            return response()->json($municipio_id->comunas
            ->unique()->values()
        );
        }
    }
    public function getSectores(Request $request,Municipio $municipio_id,Comuna $comuna_id){
        if($request->ajax()){
            return response()->json($comuna_id->sectores->where('municipio_id','=',$municipio_id->id)
            ->values()
        );
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipios= Municipio::all();

        return view('recycler.create',compact('municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $this->validator($request);
        $data['corporation_id']=Auth::user()->id;
        return Recycler::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Recycler $recycler)
    {
        if($recycler->corporation_id==Auth::user()->id){
           $recycler->zonaRecoleccion;
            return compact('recycler');
        }
        else
            return abort(419);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recycler $recycler)
    {
       /* $validateData = $this->validator($request);

        $recycler->update($validateData);*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
