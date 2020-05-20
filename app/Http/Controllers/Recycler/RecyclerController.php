<?php

namespace App\Http\Controllers\Recycler;


use App\Sector;
use App\Comuna;
use App\Material;
use App\Recycler;
use App\Municipio;
use App\Corporation;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Types\Null_;

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
            'apodo'=>'string|max:100',
            'nombres'=>'required|string|regex:/^[\pL\s]+$/u|max:255',
            'apellidos'=>'required|string|regex:/^[\pL\s]+$/u|max:255',
            'fecha_nacimiento'=>'required','date','before:2002-01-01|max:100',
            'celular'=>'required|integer|digits:10',
            'residuos'=>'required|array|between:1,8',
            'edad'=>'required|integer|digits_between:1,3',
            'historia'=>'required|string|max:500',
            'foto'=>'required|image|mimes:jpeg,png|max:2048',
            'sectors'=>'required|array|between:1,8',
            'days'=>'required|array|between:1,8|gte:sectors',
            'times'=>'required|array|between:1,8|gte:sectors'
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
        $recyclers= $corp->recyclers()
        ->select('id','nombres','apellidos','apodo','celular','foto')
        ->paginate(6)  //Paginar de a 6 por pagina
        ;
        return view('recycler.index',compact('recyclers'));
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
        $materiales= Material::select('id','nombre','nombresub')->get();
       // return view('home2',compact('municipios','materiales'));
        return view('recycler.create',compact('municipios','materiales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validator($request);
        $data['corporation_id']=Auth::user()->id;
        $data['nombres']=$request->nombres;
        $data['apellidos']=$request->apellidos;
        $data['apodo']=$request->apodo;
        $data['edad']=$request->edad;
        $data['celular']=$request->celular;
        $data['fecha_nacimiento']=$request->fecha_nacimiento;
        $data['historia']=$request->historia;
       // dd($request->all());
        if($request->hasFile('foto')){
            $image = $request->file('foto');
            $path= $image->hashName('public/recyclers');
            $data['foto']=$path;
            $img = Image::make($image)->fit(300, 300, function ($constraint) {
                $constraint->aspectRatio();
            });
            Storage::put($path, (string) $img->encode());
        }
        $recycler = Recycler::create($data);
            $sectores=$request->sectors;
            $dias=$request->days;
            $horas=$request->times;
            for ($i=0; $i < sizeof($sectores); $i++) {
                $zona['sector_id']=$sectores[$i];
                $zona['dias']=$dias[$i];
                $zona['horas']=$horas[$i];
                $recycler->zonaRecoleccion()->create($zona);
            }
            foreach ($request->residuos as $value) {
                $recycler->materials()->attach($value);
            }
            $message='El reciclador '.$recycler->nombres.' fue creado con éxito';
        return redirect()->route('recyclers.index')->with('success',$message) ;
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
           $zona=$recycler->zonaRecoleccion;
           $material=$recycler->materials;
         //  return compact('recycler');
            return view('recycler.show',compact('recycler','zona','material'));
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
       if($request->has('historia')){
           $data= $request->validate(['historia'=>'string|max:500',]);
           $recycler->update($data);
           $message='La historia del reciclador '.$recycler->nombres.' fue actualizada con éxito';
           return redirect()->back()->with('success', $message);
       }
      // dd($request->all());
       if($request->has('nombres')&&$request->has('apellidos')&&$request->has('apodo')&&$request->has('edad')&&$request->has('fecha_nacimiento')&&$request->has('celular')){
           $data= $request->validate([
            'apodo'=>'nullable|string|max:100',
           'nombres'=>'required|string|regex:/^[\pL\s]+$/u|max:255',
           'apellidos'=>'required|string|regex:/^[\pL\s]+$/u|max:255',
           'edad'=>'required|integer|digits_between:1,3',
           'fecha_nacimiento'=>'required','date','before:2002-01-01|max:100',
           'celular'=>'required|integer|digits:10',
           ]);
           $recycler->update($data);
           $message='La Información personal del reciclador '.$recycler->nombres.' fue actualizada con éxito';
           return redirect()->back()->with('success', $message);
       }
       return redirect()->back()->with('danger', 'No se pudo completar la operación');
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
