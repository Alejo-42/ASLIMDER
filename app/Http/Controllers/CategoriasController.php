<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;

class CategoriasController extends Controller
{
    public function inicio(){
        $getCT = Categorias::all();
        return view('layouts/categorias', compact('getCT'));
    }
    public function guardar(Request $request){
        Categorias::create($request->all());
        return redirect()->to('categorias');
    }
    public function editar($id){
        $editarCT = Categorias::where('id',$id)->firstOrFail();
        return view('layouts/edits/categorias',compact('editarCT'));
    }
    public function actualizar(Request $request,$id){
        $actCT = Categorias::findOrFail($id);
        $requestCT = $request->all();
        $actCT->update($requestCT);
        return redirect()->to('categorias');
    }
    public function eliminar($id){
        $eliminarCT = Categorias::findOrFail($id);
        $eliminarCT->delete();
        return redirect()->to('categorias');
    }
}
