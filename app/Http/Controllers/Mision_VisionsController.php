<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mision_Visions;
use Illuminate\Support\Facades\DB;

class Mision_VisionsController extends Controller
{
    public function inicio(){
        $getMV = Mision_Visions::all();

        $MV_A = DB::select("SELECT * FROM mision__visions WHERE status = 'ACTIVATE'");
        $MV_D = DB::select("SELECT * FROM mision__visions WHERE status = 'DESACTIVATE'");

        return view('layouts/misionVision',compact('getMV','MV_A','MV_D'));
    }
    public function guardar(Request $request){
        $request->validate([
            'texto' => 'required|alpha_num',
            'url' => 'required',
            'imagenes_id' => 'required|numeric'
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
            'imagenes_id' => 'required|numeric'
        ]);
        $actMV = Mision_Visions::findOrFail($id);
        $requestMV = $request->all();
        $actMV->update($requestMV);
        return redirect()->to('misionVision');
    }
    public function eliminar($id){
        $eliminarMV = Mision_Visions::findOrFail($id);
        $eliminarMV->delete();
        return redirect()->to('misionVision');
    }
    public function estado($id){
        $estado = DB::select(DB::raw('SELECT mv.status FROM mision__visions mv WHERE mv.id = :id'), array('id'=>$id));

        foreach ($estado as $item) {
            if ($item->status == 'DESACTIVATE') {
                DB::select(DB::raw("UPDATE mision__visions SET status = 'ACTIVATE' WHERE id = :id"), array('id'=>$id));
            }else if ($item->status == 'ACTIVATE') {
                DB::select(DB::raw("UPDATE mision__visions SET status = 'DESACTIVATE' WHERE id = :id"), array('id'=>$id));
            }
        }
        return redirect()->back();
    }
}
