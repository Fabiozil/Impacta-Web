<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Material;
use Illuminate\Support\Facades\Auth;

class MaterialController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function getMaterials()
    {
        // Validar Corp Logueada
        if (Auth::user()->tipo_usuario == 1) {

            $materiales = Material::all();
            return response()->json($materiales);
        }
    }
}
