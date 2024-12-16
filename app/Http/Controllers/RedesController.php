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
        Redes::create($request->all());
        $getRedes = Redes::all();
        return view('layouts/redes', compact('getRedes'));
    }
    public function editar($id){
        $editarRedes = Redes::where('id',$id)->firstOrFail();
        return view('layouts/edits/redes',compact('editarRedes'));
    }
    public function actualizar(Request $request, $id){
        $actRedes = Redes::findOrFail($id);
        $requestRedes = $request->all();
        $actRedes->update($requestRedes);
        $getRedes = Redes::all();
        return view('layouts/redes', compact('getRedes'));
    }
    public function eliminar($id){
        $eliminarRedes = Redes::findOrFail($id);
        $eliminarRedes->delete();
        $getRedes = Redes::all();
        return view('layouts/redes', compact('getRedes'));
    }
}
