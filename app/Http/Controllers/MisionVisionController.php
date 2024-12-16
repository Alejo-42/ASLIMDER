<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MisionVision;

class MisionVisionController extends Controller
{
    public function inicio(){
        $getMV = MisionVision::all();
        return view('layouts/misionVision', compact('getMV'));
    }
    public function guardar(Request $request){
        MisionVision::create($request->all());
        $getMV = MisionVision::all();
        return view('layouts/misionVision', compact('getMV'));
    }
    public function editar($id){
        $editarMV = MisionVision::where('id',$id)->firstOrFail();
        return view('layouts/edits/misionVision',compact('editarMV'));
    }
    public function actualizar(Request $request, $id){
        $actMV = MisionVision::findOrFail($id);
        $requestMV = $request->all();
        $actMV->update($requestMV);
        $getMV = MisionVision::all();
        return view('layouts/misionVision', compact('getMV'));
    }
    public function eliminar($id){
        $eliminarMV = MisionVision::findOrFail($id);
        $eliminarMV->delete();
        $getMV = MisionVision::all();
        return view('layouts/misionVision', compact('getMV'));
    }
}
