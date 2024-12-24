<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Redes;

class RedesController extends Controller
{
    public function inicio(){
        $getRedes = Redes::all();

        $Redes_A = DB::select("SELECT * FROM redes WHERE status = 'ACTIVATE'");
        $Redes_D = DB::select("SELECT * FROM redes WHERE status = 'DESACTIVATE'");
        return view('layouts/redes', compact('getRedes','Redes_A','Redes_D'));
    }
    public function guardar(Request $request){
        $request->validate([
            'url' => 'required',
            'imagenes_id' => 'required|numeric',
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
            'imagenes_id' => 'required|numeric',
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
    public function estado($id){
        $estado = DB::select(DB::raw('SELECT r.status FROM redes r WHERE r.id = :id'), array('id'=>$id));

        foreach ($estado as $item) {
            if ($item->status == 'DESACTIVATE') {
                DB::select(DB::raw("UPDATE redes SET status = 'ACTIVATE' WHERE id = :id"), array('id'=>$id));
            }else if ($item->status == 'ACTIVATE') {
                DB::select(DB::raw("UPDATE redes SET status = 'DESACTIVATE' WHERE id = :id"), array('id'=>$id));
            }
        }
        return redirect()->back();
    }
}
