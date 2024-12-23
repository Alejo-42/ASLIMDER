<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Categorias;

class CategoriasController extends Controller
{
    public function inicio(){
        $getCT = Categorias::all();

        $CT_A = DB::select("SELECT * FROM categorias WHERE status = 'ACTIVATE'");
        $CT_D = DB::select("SELECT * FROM categorias WHERE status = 'DESACTIVATE'");
        return view('layouts/categorias', compact('getCT','CT_A','CT_D'));
    }
    public function guardar(Request $request){
        $request->validate([
            'nombreCT' => 'required'
        ]);
        Categorias::create($request->all());
        return redirect()->to('categorias');
    }
    public function editar($id){
        $editarCT = Categorias::where('id',$id)->firstOrFail();
        return view('layouts/edits/categorias',compact('editarCT'));
    }
    public function actualizar(Request $request,$id){
        $request->validate([
            'nombreCT' => 'required'
        ]);
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
    public function estado($id){
        $estado = DB::select(DB::raw('SELECT ct.status FROM categorias ct WHERE ct.id = :id'), array('id'=>$id));

        foreach ($estado as $item) {
            if ($item->status == 'DESACTIVATE') {
                DB::select(DB::raw("UPDATE categorias SET status = 'ACTIVATE' WHERE id = :id"), array('id'=>$id));
            }else if ($item->status == 'ACTIVATE') {
                DB::select(DB::raw("UPDATE categorias SET status = 'DESACTIVATE' WHERE id = :id"), array('id'=>$id));
            }
        }
        return redirect()->back();
    }
}
