<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mision_Visions;

class Mision_VisionsController extends Controller
{
    public function inicio(){
        $getMV = Mision_Visions::all();
        return view('layouts/misionVision',compact('getMV'));
    }
    public function guardar(Request $request){
        $request->validate([
            'texto' => 'required|alpha_num',
            'url' => 'required',
            'imagenes_id' => 'required|num'
        ]);
        Mision_Visions::create($request->all());
        return redirect()->to('misionVision');
    }
    public function editar($id){
        $editarMV = Mision_Visions::where('id',$id)->firstOrFail();
        return view('layouts/edits/misionVision', compact('editarMV'));
    }
    public function actualizar(Request $request, $id){
        $request->validate([
            'texto' => 'required|alpha_num',
            'url' => 'required',
            'imagenes_id' => 'required|num'
        ]);
        $actMV = Cliente::findOrFail($id);
        $requestMV = $request->all();
        $actMV->update($requestMV);
        return redirect()->to('misionVision');
    }
    public function eliminar($id){
        $eliminarMV = Cliente::findOrFail($id);
        $eliminarMV->delete();
        return redirect()->to('misionVision');
    }
}
