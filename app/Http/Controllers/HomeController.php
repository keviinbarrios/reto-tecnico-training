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
}
