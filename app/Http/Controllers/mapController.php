<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mapController extends Controller
{
    public function index(){

        $users2 = ['Users'=>[
            ['name'=>'Alex','coords' => [6.160152, -75.582397], 'description'=>'Probando pines de mapas'],
            ['name'=>'Juan', 'coords'=>[6.1611536195850505, -75.58291198412968], 'description'=>'Lorem ipsum dolor sit amet consectetur adipiscing elit, tempus nisi neque montes morbi magnis vehicula, rutrum odio mus faucibus tincidunt dis. Mus nam laoreet sodales magna cursus morbi, cum parturient eros etiam sagittis faucibus, sollicitudin taciti fusce ad ullamcorper.']
            ]
        ];

        $data = json_encode($users2);

        // return response()->json($users);
        return view('map.map')->with('data', $data);
    }
}
