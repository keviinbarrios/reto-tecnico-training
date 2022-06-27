<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nave;
use App\Models\Type;

class HomeController extends Controller
{
    public function index(){

        $types = Type::all();
        $naves=Nave::all();

        return view('naves',['types'=> $types,
        'naves'=>$naves
        ]);
    }
    public function naveFilter(Request $request){
      
        /* dd($request->all()); */
        $type_id = $request->type_id;

        $naves = Nave::where('type_id', '=',$type_id)->get();

        return response()->json([
            'success' => true,
            'message' => 'Nave encontrada con exito',
            'naves' => $naves
        ]);
    }
}
