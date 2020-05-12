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
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'apodo'=>['required', 'string', 'max:100'],
        'nombres'=>['required', 'string', 'max:255'],
        'apellidos'=>['required', 'string', 'max:255'],
        'fecha_nacimiento'=>['required','date','before:2002-01-01', 'max:100'],
        'celular'=>['required', 'integer', 'digits:11'],
        'residuos'=>['required', 'string', 'max:255'],
        'edad'=>['required', 'integer', 'digits:3'],
        'comunas'=>['required', 'string', 'max:100'],
        'historia'=>['required', 'string', 'max:100'],
        'foto'=>['required', 'image','mimes:jpeg,png'],
        'barrio'=>['required', 'string', 'max:100']
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $municipio = Municipio::findOrFail(9);
      // $barrio= Sector::findOrFail(650);
        //return $municipio->comunas->unique()->values();
       //return $barrio->comunas;
     //  return Comuna::findOrFail(1)->sectores->where('municipio_id','=',2);
       //return $barrio->load('municipio','comuna');

       $municipios= Municipio::all();

       return view('home2',compact('municipios'));
        $corp= Corporation::findOrFail(Auth::user()->id);
        $recycler= $corp->recyclers()
        ->select('nombres','apellidos','apodo','celular')
        ->get()
        //->paginate(4) //Paginar de a 4 por pagina
         //Obtener data de la funcion
        ;
        return $recycler;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->all();
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
            return view('pruebas')->with(['zonas'=>$recycler->zonaRecoleccion]);
            return $recycler;
        }
        else
            return abort(404);
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
    public function update(Request $request, $id)
    {
        //
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
