<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Redes;

class RedesController extends Controller
{
    public function inicio(){
        $getRedes = Redes::all();
        return view('layouts/redes', compact('getRedes'));
    }
    public function guardar(Request $request){
        $request->validate([
            'url' => 'required',
            'imagenes_id' => 'required|num',
        ]);
        Redes::create($request->all());
        return redirect()->to('redes');
    }
    public function editar($id){
        $editarRedes = Redes::where('id',$id)->firstOrFail();
        return view('/layouts/edits/redes',compact('editarRedes'));
    }
    public function actualizar(Request $request, $id){
        $request->validate([
            'url' => 'required',
            'imagenes_id' => 'required|num',
        ]);
        $actRedes = Redes::findOrFail($id);
        $requestRedes = $request->all();
        $actRedes->update($requestRedes);
        return redirect()->to('redes');
    }
    public function eliminar($id){
        $eliminarRedes = Redes::findOrFail($id);
        $eliminarRedes->delete();
        return redirect()->to('redes');
    }
}
