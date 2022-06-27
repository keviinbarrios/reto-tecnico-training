<?php

namespace App\Http\Controllers;

use App\Models\Nave;
use App\Models\Type;
use Illuminate\Http\Request;

class NaveController extends Controller
{
    public function create()
    {

        $types = Type::all();
        return view('admin.create', ['types' => $types]);
    }
    public function store(Request $request)
    {
        if ($request->hasfile('featured')) {
            $file = $request->file('featured');

            $img_name = time() . '_nave.' . $file->getClientOriginalExtension();
            $detinationPath = 'images/uploads/naves';
            $uploadSuccess = $file->move($detinationPath, $img_name);
        }
        Nave::create([
            "type_id" => $request->type_id,
            "name" => $request->name,
            "country" => $request->country,
            "uptime" => $request->uptime,
            "fuel" => $request->fuel,
            "featured" => $img_name,
        ]);

        return redirect()->route('admin.naves');
    }

    public function edit($nave)
    {
        $nave = Nave::find($nave);
        $types = Type::all();


        return view('admin.edit', [
            'nave' => $nave,
            'types' => $types
        ]);
    }

    public function update(Request $request, $nave)
    {
        $type = Type::all();
        $nave = Nave::find($nave);

        if ($request->hasfile('featured')) {
            $file = $request->file('featured');

            $img_name = time() . '_nave.' . $file->getClientOriginalExtension();
            $detinationPath = 'images/uploads/naves';
            $uploadSuccess = $file->move($detinationPath, $img_name);
        }
       
        $nave->type_id = $request->type_id;
        $nave->name = $request->name;
        $nave->country = $request->country;
        $nave->uptime = $request->uptime;
        $nave->fuel = $request->fuel;
        $nave->featured = isset($img_name)? $img_name: $nave->featured;
        

        $nave->save();

        return redirect()->route('admin.naves');
    }

    public function delete(Request $request, $nave)
    {
        $nave = Nave::find($nave);
        $nave->delete();
        return redirect()->route('admin.naves');
    }
}
