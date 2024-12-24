<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informaciones;
use Illuminate\Support\Facades\DB;

class InformacionesController extends Controller
{
    public function inicio(){
        $getInfo = Informaciones::all();

        $Info_A = DB::select("SELECT * FROM informaciones WHERE status = 'ACTIVATE'");
        $Info_D = DB::select("SELECT * FROM informaciones WHERE status = 'DESACTIVATE'");
        return view('layouts/informaciones', compact('getInfo','Info_A','Info_D'));
    }
    public function guardar(Request $request){
        $request->validate([
            'logo' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required|num',
            'direccion' => 'required'
        ]);
        
        Informaciones::create($request->all());
        return redirect()->to('informaciones');
    }
    public function editar($id){
        $editarInfo = Informaciones::where('id',$id)->firstOrFail();
        return view('/layouts/edits/informaciones',compact('editarInfo'));
    }
    public function actualizar(Request $request, $id){
        $request->validate([
            'logo' => 'required',
            'correo' => 'required|email ',
            'telefono' => 'required|numeric',
            'direccion' => 'required'
        ]);
        $actInfo = Informaciones::findOrFail($id);
        $requestInfo = $request->all();
        $actInfo->update($requestInfo);
        return redirect()->to('informaciones');
    }
    public function eliminar($id){
        $eliminarInfo = Informaciones::findOrFail($id);
        $eliminarInfo->delete();
        return redirect()->to('informaciones');
    }
    public function estado($id){
        $estado = DB::select(DB::raw('SELECT info.status FROM informaciones info WHERE info.id = :id'), array('id'=>$id));

        foreach ($estado as $item) {
            if ($item->status == 'DESACTIVATE') {
                DB::select(DB::raw("UPDATE informaciones SET status = 'ACTIVATE' WHERE id = :id"), array('id'=>$id));
            }else if ($item->status == 'ACTIVATE') {
                DB::select(DB::raw("UPDATE informaciones SET status = 'DESACTIVATE' WHERE id = :id"), array('id'=>$id));
            }
        }
        return redirect()->back();
    }
}
